<?php

namespace App\Http\Controllers;

use App\Site;
use App\Inventory;
use App\Account;
use App\AccountBanks;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class SiteController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function getSite(Request $request){
        $Site = Site::query();
        $Site->where('type', 1);
        if($request->name)
            $Site->where('name', 'like', '%'. $request->name . '%')
            ->orWhere('name_ar', 'like', '%' . $request->name . '%');

        $data = Datatables()->eloquent($Site->latest('id'))
        ->addColumn('action' , function($Site){
            return view('Site.actions' , ['type' => 'action' , 'Site' => $Site]);
        })
        ->editColumn('Inventory_id', function ($Site){
            $Inventory = Account::where('id', $Site->Inventory_id)->first();
            return $Inventory->name;
        })
        ->toJson();


        return $data;
    }

    function getSubSite(Request $request){
        $Site = Site::query();
        $Site->where('type', 0);
        if($request->name)
            $Site->where('name', 'like', '%'. $request->name . '%')
            ->orWhere('name_ar', 'like', '%' . $request->name . '%');

        $data = Datatables()->eloquent($Site->latest('id'))
        ->addColumn('action' , function($Site){
            return view('Site.actions' , ['type' => 'action' , 'Site' => $Site]);
        })
        ->editColumn('Inventory_id', function ($Site){
            $Inventory = Account::where('id', $Site->Inventory_id)->first();
            return optional($Inventory)->name;
        })
        ->addColumn('municipal_license', function($Site){
            $color = "";
            // Get today's date without time in the desired format
            $today = \Carbon\Carbon::today()->format('Y-m-d');
            if($Site->Municipality_number_data < $today)
                 $color = "red";
            elseif($Site->Municipality_number_data > $today)
                 $color = "green";
            else
                $color = "yellow";

            return view('Site.actions', ['type' => 'municipal_license', 'Site' => $Site, 'color' => $color]);
        })
        ->addColumn('commercial_registration', function($Site){
            $color = "";
            // Get today's date without time in the desired format
            $today = \Carbon\Carbon::today()->format('Y-m-d');
            if($Site->Commercial_Record_data < $today)
                 $color = "red";
            elseif($Site->Commercial_Record_data > $today)
                 $color = "green";
            else
                $color = "yellow";

            return view('Site.actions', ['type' => 'Commercial_Record', 'Site' => $Site, 'color' => $color]);
        })
        ->addColumn('Human_Resources_License', function($Site){
            $color = "";
            // Get today's date without time in the desired format
            $today = \Carbon\Carbon::today()->format('Y-m-d');
            if($Site->Human_Resources_License_data < $today)
                 $color = "red";
            elseif($Site->Human_Resources_License_data > $today)
                 $color = "green";
            else
                $color = "yellow";

            return view('Site.actions', ['type' => 'Human_Resources_License', 'Site' => $Site, 'color' => $color]);
        })
        ->addColumn('Tex_Number', function($Site){
            $color = "";
            // Get today's date without time in the desired format
            $today = \Carbon\Carbon::today()->format('Y-m-d');
            if($Site->Tex_Number_data < $today)
                 $color = "red";
            elseif($Site->Tex_Number_data > $today)
                 $color = "green";
            else
                $color = "yellow";

            return view('Site.actions', ['type' => 'Tex_Number', 'Site' => $Site, 'color' => $color]);
        })
        ->addColumn('FDA_license', function($Site){
            $color = "";
            // Get today's date without time in the desired format
            $today = \Carbon\Carbon::today()->format('Y-m-d');
            if($Site->FDA_license_data < $today)
                 $color = "red";
            elseif($Site->FDA_license_data > $today)
                 $color = "green";
            else
                $color = "yellow";

            return view('Site.actions', ['type' => 'FDA_license', 'Site' => $Site, 'color' => $color]);
        })
        ->addColumn('Social_Insurance', function($Site){
            $color = "";
            // Get today's date without time in the desired format
            $today = \Carbon\Carbon::today()->format('Y-m-d');
            if($Site->Social_Insurance_data < $today)
                 $color = "red";
            elseif($Site->Social_Insurance_data > $today)
                 $color = "green";
            else
                $color = "yellow";

            return view('Site.actions', ['type' => 'Social_Insurance', 'Site' => $Site, 'color' => $color]);
        })
        ->addColumn('Chamber_Commerce', function($Site){
            $color = "";
            // Get today's date without time in the desired format
            $today = \Carbon\Carbon::today()->format('Y-m-d');
            if($Site->Chamber_Commerce_data < $today)
                 $color = "red";
            elseif($Site->Chamber_Commerce_data > $today)
                 $color = "green";
            else
                $color = "yellow";

            return view('Site.actions', ['type' => 'Chamber_Commerce', 'Site' => $Site, 'color' => $color]);
        })


        ->toJson();


        return $data;
    }

    public function index()
    {
        $Site = Site::where('type',0)->get();


        // dd($Site);
        return view('Site.index', compact(
            [
                'Site'
            ]
        ));
    }
    public function index2()
    {
        $Site = Site::where('type',1)->get();
        return view('Site.sub_site', compact(
            [
                'Site'
            ]
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Inventorys = Account::all();
        return view('Site.newCreate', compact(['Inventorys']));
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
            'name_en' => 'required',

        ];

        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->all();

        if ($request->pointsSite == 'on') {
            $data['pointsSite'] = 1;
        } else {
            $data['pointsSite'] = 0;
        }
        $client = Site::create($data);




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
                 'type' => 3,
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
                 'type' => 4,
                ]
            );
        }
        // fill appointments em ployees
        return redirect()->route('sub_site.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Site  $Site
     * @return \Illuminate\Http\Response
     */
    public function show(Request $Site)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Site  $Site
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Site = Site::FindOrFail($id);
        $Inventorys = Inventory::all();
        return view('Site.update', compact(['Inventorys','Site']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Site  $Site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Site = Site::findOrFail($id);
        $data = $request->all();

        if ($request->pointsSite == 'on') {
            $data['pointsSite'] = 1;
        } else {
            $data['pointsSite'] = 0;
        }
        //update in db
        $Site->update($data);
        return redirect()->route('sub_site.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Site  $Site
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Site = Site::find($id);
            $deleted =  $Site->delete();
            if (!$deleted) {
                return redirect()->route('sub_site.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('sub_site.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('sub_site.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }



}
