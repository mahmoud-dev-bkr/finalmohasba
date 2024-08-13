<?php

namespace App\Http\Controllers;

use App\Client;
use App\Site;
use App\Salesperson;
use App\Clientbond;
use App\AccountBanks;
use App\Sales_invoices;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInfoClient (Request $request)
    {
        $ClienthId = $request->input('client_id');

        // Retrieve employees for the selected Clienth
        $Client = Client::where('id', $ClienthId)
        ->first();

        // Return the Client as a JSON response
        return response()->json($Client);
    }
    public function getClients(Request $request){
        $Clients = Client::query();
        
        if($request->name) 
            $Clients->where('name', 'like', '%'. $request->name . '%');
         
        if ($request->email)
            $Clients->where('email', 'like', '%'. $request->email .'%');
            
        if ($request->phone)
            $Clients->where('phon', 'like', '%'.$request->phone. '%');
            
        if ($request->status == 1)
            $Clients->where('status', 1);
            
        if ($request->status == 2)
            $Clients->where('status', 0);

        
        
        $data = Datatables()->eloquent($Clients->latest('id'))
        ->addColumn('action' , function($Client){
            return view('Sales.Clients.actions' , ['type' => 'action' , 'Client' => $Client]);
        })
        
        ->addColumn('bonds' , function($Client){
            return Clientbond::where('id_customers', $Client->id)->sum('Amount');
        })
        ->addColumn('Salesinvoices' , function($Client){
            return Sales_invoices::where('id_supplers', $Client->id)->sum('total');
        })
        
        ->editColumn('status', function ($Client){
            if ($Client->status == 1) {
                return "مفعل";
            } else {
                return "غير مفعل";
            }
        })
        ->toJson();


        return $data;
    }
    public function index()
    {
        $Client = Client::all();
        return view('Sales.Clients.index', compact(
            [
                'Client'
            ]
        ));
    }
    
    public function status($id)
    {
        $Client = Client::find($id);
        $status = ($Client->status + 1) % 2 ;
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
        return view('Sales.Clients.newCreate', compact([
            'sites' , 'salespersons' 
        
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
                 'name_account' =>$request->name_account1 ,
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
                 'name_account' =>$request->name_account2 ,
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
        $Client = Client::FindOrFail($id);
        $AccountBank1 = AccountBanks::where('client_id', $id)->where("type", 1)->first();
        $AccountBank2 = AccountBanks::where('client_id', $id)->where("type", 2)->first();
        $sites = Site::all();
        $salespersons = Salesperson::all();
       
        return view('Sales.Clients.update', compact('Client','sites','salespersons','AccountBank1','AccountBank2'));
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
        $Client = Client::findOrFail($id);
        $data = $request->all();

        if ($request->pointsClient == 'true') {
            $data['pointsClient'] = 1;
        } else {
            $data['pointsClient'] = 0;
        }
        
        if ($request->status == 'true') {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $Client->update($data);
        return redirect()->route('client.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
     
         public function print($id){

 

      $Clientbonds = Clientbond::find($id);

 

 

      $Client = Client::where('id', $Clientbonds->id_customers)->get();

      $Sales_invoices = Sales_invoices::find($Clientbonds->PurchaseInvoices_id);

      return view('Sales.Clientbond.print', compact('Client', 'Sales_invoices', 'Clientbonds'));

 

    }
     
     
     
    public function destroy($id)
    {
        try {
            $Client = Client::find($id);
            $Sales_invoices = Sales_invoices::where('id_supplers', $id)->get();
            $Clientbonds = Clientbond::where('id_customers', $id)->get();
            if(count($Sales_invoices) > 0 || count($Clientbonds) > 0) {
                 return redirect()->route('client.index')->with(['error' => 'لم يتم الحذف لان هذا العميل لديه فاتورة او سند']);
            }
            $deleted =  $Client->delete();
            if (!$deleted) {
                return redirect()->route('client.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('client.index')->with(['success' => 'تم حذف  بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('client.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }



}
