<?php

namespace App\Http\Controllers;

use App\Client;
use App\Site;
use App\Salesperson;
use App\Clientbond;
use App\AccountBanks;
use App\Sales_invoices;
use App\Account;
use App\User;
use App\Role;
use App\RoleUser;
use App\UserSite;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInfoClient(Request $request)
    {
        $ClienthId = $request->input('client_id');

        // Retrieve employees for the selected Clienth
        $Client = Client::where('id', $ClienthId)
            ->first();

        // Return the Client as a JSON response
        return response()->json($Client);
    }
    public function getUsers(Request $request)
    {
        $Users = User::query();

        if ($request->name)
            $Users->where('name', 'like', '%' . $request->name . '%');

        if ($request->email)
            $Users->where('email', 'like', '%' . $request->email . '%');

        if ($request->phone)
            $Users->where('phon', 'like', '%' . $request->phone . '%');

        if ($request->status == 1)
            $Users->where('status', 1);

        if ($request->status == 2)
            $Users->where('status', 0);



        $data = Datatables()->eloquent($Users->latest('id'))
            ->addColumn('action', function ($User) {
                return view('Users.actions', ['type' => 'action', 'User' => $User]);
            })

            // ->addColumn('bonds' , function($Client){
            //     return Clientbond::where('id_customers', $Client->id)->sum('Amount');
            // })
            // ->addColumn('Salesinvoices' , function($Client){
            //     return Sales_invoices::where('id_supplers', $Client->id)->sum('total');
            // })

            ->editColumn('role_id', function ($Client) {
                return Role::find($Client->role_id)->name;
            })
            ->editColumn('pos', function ($Client) {
                return $Client->pos == 1 ? 'نعم' : 'لا';
            })
            ->editColumn('isActive', function ($Client) {
                return $Client->isActive == 1 ? 'نعم' : 'لا';
            })
            ->toJson();


        return $data;
    }


    public function subAjaxUser(Request $request)
    {

        $input = $request->all();
        // dd($input);
        $input['password']      = Hash::make($request->password);
        // $input['comapny_id']    = auth()->user()->company_id;
        $user = User::create($input);
        if ($request->site_id == 0) {
            $sites = Site::all();
            foreach ($sites as $site) {
                UserSite::create([
                    'site_id' => $site->id,
                    'user_id' => $user->id,
                ]);
            }
        } else {
            foreach ($request->sites as $site) {
                UserSite::create([
                    'site_id' => $site,
                    'user_id' => $user->id,
                ]);
            }
        }

        $UserRole = RoleUser::create([
            'user_id'        => $user->id,
            'role_id'        => $request->role_id,
            'user_type'      => 'App\User',
        ]);
        return response()->json(['success' => $user->id]);
    }

    public function index()
    {
        $Client = Client::all();
        $sites  = Site::all();
        $accounts  = Account::where('transactions', 1)->get();
        $roles     = Role::all();
        return view('Users.index', compact(
            [
                'Client',
                'sites',
                'accounts',
                'roles'
            ]
        ));
    }

    public function status($id)
    {
        $Client = Client::find($id);
        $status = ($Client->status + 1) % 2;
        $Client->status = $status;
        $Client->save();
        return redirect()->route('client.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sites = Site::all();
        $salespersons = Salesperson::all();
        return view('', compact([
            'sites',
            'salespersons'

        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $rules = [
            'name' => 'required',
        ];

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->all();

        $infoUser = $request->all();

        // dd($data);


        if ($request->pointsClient == 'true') {
            $infoUser['pointsClient'] = 1;
        } else {
            $infoUser['pointsClient'] = 0;
        }

        if ($request->status == 'true') {
            $infoUser['status'] = 1;
        } else {
            $infoUser['status'] = 0;
        }


        $client = Client::create($infoUser);

        if ($request->name1) {

            AccountBanks::create(
                [
                    'client_id' => $client->id,
                    'name' => $request->name1,
                    'name_account' => $request->name_account1,
                    'country' => $request->country1,
                    'currency' => $request->currency1,
                    'number_statement' => $request->number_statement1,
                    'number_account' => $request->number_account1,
                    'code' => $request->code1,
                    'address' => $request->address1,
                    'type' => 1,
                ]
            );
        }


        if ($request->name2) {

            AccountBanks::create(
                [
                    'client_id' => $client->id,
                    'name' => $request->name2,
                    'name_account' => $request->name_account2,
                    'country' => $request->country2,
                    'currency' => $request->currency2,
                    'number_statement' => $request->number_statement2,
                    'number_account' => $request->number_account2,
                    'code' => $request->code2,
                    'address' => $request->address2,
                    'type' => 2,
                ]
            );
        }







        // fill appointments em ployees
        return redirect()->route('client.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Client = Client::FindOrFail($id);
        $Sales_invoices = Sales_invoices::where('id_supplers', $id)->get();
        $Clientbonds = Clientbond::where('id_customers', $id)->get();

        // dd($Clientbonds);
        return view('Sales.Clients.show', compact(['Client', 'Sales_invoices', 'Clientbonds']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $user = User::FindOrFail($id);
        $sites  = Site::all();
        $counterUserSite = UserSite::where('user_id', $user->id)->count();
        $counterSite = Site::count();
        $accounts  = Account::where('transactions', 1)->get();
        // pluck the site_id in userSite
        $userSites = UserSite::where('user_id', $user->id)->pluck('site_id')->toArray();
        $roles     = Role::all();
        // dd($counterSite, $counterUserSite);
        return view('Users.update', compact(
            [
                'user',
                'roles',
                'sites',
                'accounts',
                'userSites',
                'counterUserSite',
                'counterSite'
            ]
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $userites = UserSite::where('user_id', $id)->delete();
        $userRole = RoleUser::where('user_id', $id)->delete();
        // dd($input);
        $input['password']      = Hash::make($request->password);

        if ($input['password'] == null) {
            unset($input['password']);
        }

        if ($input['password'] != null) {
            $input['password'] = Hash::make($input['password']);
        }


        $user = User::find($id);
        $user->update($input);
        if ($request->site_id == 0) {
            $sites = Site::all();
            foreach ($sites as $site) {
                UserSite::create([
                    'site_id' => $site->id,
                    'user_id' => $user->id,
                ]);
            }
        } else {
            if ($request->sites  == null) {
                return back()->with(['error' => 'يجب اختيار الموقع']);
            }
            foreach ($request->sites as $site) {
                UserSite::create([
                    'site_id' => $site,
                    'user_id' => $user->id,
                ]);
            }
        }

        $UserRole = RoleUser::create([
            'user_id'        => $user->id,
            'role_id'        => $request->role_id,
            'user_type'      => 'App\User',
        ]);
        return redirect()->route('user.index')->with(['success' => 'تم التعديل بنجاح']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */

    public function print($id)
    {



        $Clientbonds = Clientbond::find($id);





        $Client = Client::where('id', $Clientbonds->id_customers)->get();

        $Sales_invoices = Sales_invoices::find($Clientbonds->PurchaseInvoices_id);

        return view('Sales.Clientbond.print', compact('Client', 'Sales_invoices', 'Clientbonds'));
    }



    public function destroy($id)
    {

    $userRole = RoleUser::where('user_id', $id)->delete();
   $UserSite = UserSite::where('user_id', $id)->delete();

     User::where('id', $id)->delete();

     return redirect()->route('user.index')->with(['success' => 'تم الحذف بنجاح']);

    }
}
