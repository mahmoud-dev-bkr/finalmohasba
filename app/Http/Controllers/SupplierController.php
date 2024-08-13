<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Supplier;
use App\Supplierbond;
use App\PurchaseInvoices;
use App\AccountBanks;
use App\Site;
use App\Salesperson;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function getInfoSupplier (Request $request)
    {
        $ClienthId = $request->input('client_id');

        // Retrieve employees for the selected Clienth
        $Client = Supplier::where('id', $ClienthId)
        ->first();

        // Return the Client as a JSON response
        return response()->json($Client);
    }
    
    public function getSuppliers(Request $request){
        $Supplier = Supplier::query();
        
           if($request->name) 
            $Supplier->where('name', 'like', '%'. $request->name . '%');
         
        if ($request->email)
            $Supplier->where('email1', 'like', '%'. $request->email .'%');
            
        if ($request->phone)
            $Supplier->where('number1', 'like', '%'.$request->phone. '%');
            
        if ($request->status == 1)
            $Supplier->where('status', 1);
            
        if ($request->status == 2)
            $Supplier->where('status', 0);

        $Supplier->where('comapny_id', auth()->user()->company_id);
        
        $data = Datatables()->eloquent($Supplier->latest('id'))
        ->addColumn('action' , function($Supplier){
            return view('Procurement.Suppliers.actions' , ['type' => 'action' , 'Supplier' => $Supplier]);
        })
        ->addColumn('bonds' , function($Supplier){
            return Supplierbond::where('id_supplers', $Supplier->id)->sum('Amount');
        })
        ->addColumn('Salesinvoices' , function($Supplier){
            return PurchaseInvoices::where('id_supplers', $Supplier->id)->sum('total');
        })
        ->editColumn('status', function ($Supplier){
            if ($Supplier->status == 1) {
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
        $Supplier = Supplier::all();
        return view('Procurement.Suppliers.index', compact(
            [
                'Supplier'
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
      
        $sites = Site::all();
        $salespersons = Salesperson::all();
        return view('Procurement.Suppliers.newCreate', compact([
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
            // dd("ok");
            $infoUser['pointsClient'] = 1;
        } else {
            $infoUser['pointsClient'] = 0;
        }
        
        if ($request->status == 'true') {
            $infoUser['status'] = 1;
        } else {
            $infoUser['status'] = 0;
        }
        $infoUser['comapny_id'] = auth()->user()->company_id;
        // dd($infoUser);
        
        $client = Supplier::create($infoUser);
        
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
                 'comapny_id'   => auth()->user()->company_id
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
                 'comapny_id'   => auth()->user()->company_id
                ]    
            );
        }
        
        
        
        
            // Supplier::create($data);
        // fill appointments em ployees
        return redirect()->route('Supplier.index')->with(['success' => 'تم الحفظ بنجاح']);
        
        
      
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $Supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Client = Supplier::FindOrFail($id);
        $Sales_invoices = PurchaseInvoices::where('id_supplers', $id)->get();
        $TotalInvoice          = PurchaseInvoices::where('id_supplers', $id)->sum('total');
        $TotalBounds          = Supplierbond::where('id_supplers', $id)->sum('Amount');
        $Clientbonds = Supplierbond::where('id_supplers', $id)->get();
        $countInvoice = count($Sales_invoices);
        // dd($Clientbonds);
        return view('Procurement.Suppliers.show', compact(['Client', 'Sales_invoices', 'Clientbonds', 'countInvoice', 'TotalInvoice', 'TotalBounds']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $Supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
       $Client = Supplier::FindOrFail($id);
         $AccountBank1 = AccountBanks::where('client_id', $id)->where("type", 1)->first();
        $AccountBank2 = AccountBanks::where('client_id', $id)->where("type", 2)->first();
        $sites = Site::all();
        $salespersons = Salesperson::all();
        return view('Procurement.Suppliers.update', compact('Client','AccountBank1','AccountBank2','sites','salespersons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $Supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Supplier = Supplier::findOrFail($id);
        $data = $request->all();

        if ($request->pointsSupplier == 'on') {
            $data['pointsSupplier'] = 1;
        } else {
            $data['pointsSupplier'] = 0;
        }
        //update in db
        $Supplier->update($data);
        return redirect()->route('Supplier.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $Supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Supplier = Supplier::find($id);
            $deleted =  $Supplier->delete();
            if (!$deleted) {
                return redirect()->route('Supplier.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Supplier.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Supplier.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
