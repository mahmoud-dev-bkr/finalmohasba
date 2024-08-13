<?php

namespace App\Http\Controllers;

use App\Client;
use App\Purchase_orders;
use App\Store;
use App\Account;
use App\Salesperson;
use App\Product;
use App\Site;
use App\PurchaseInvoices;
use App\PurchaseInvoiceDetails;
use App\QuotationDetails;
use App\Supplier;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class purchase_ordersController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public  function getPurchase_orderss(Request $request){
        $Purchase_orders = Purchase_orders::query();
        
        
        
        
       if ($request->code)
            $Purchase_orders->where('code','like', '%'. $request->code . '%');
        if($request->name) {
            $Client = Supplier::where('name','like','%'. $request->name . "%")->first();
             $Purchase_orders->where('id_supplers', $Client->id);
        }
        
        if($request->status > 0)
            $Purchase_orders->where('status', $request->status);
        
        
        
        if ($request->date == 1) {
            if ($request->start_date)
                $Purchase_orders->where('Date_start', '>=' ,$request->start_date);
            
            if ($request->end_date )
                $Purchase_orders->where('Date_end','<=', $request->end_date);
        
        } 
        
        
        elseif ($request->date == 2) {
             if ($request->start_date )
                $Purchase_orders->where('Date_start', '>=' ,$request->start_date);
            
            if ($request->end_date )
                $Purchase_orders->where('Date_end','<=', $request->end_date);
        
             
        } 
        
        else {
            
            if ($request->start_date)
                    $Purchase_orders->where('Date_start', '>=' ,$request->start_date);
                
            if ($request->end_date )
                    $Purchase_orders->where('Date_end','<=', $request->end_date);
        } 
        
         
        $Purchase_orders->where('comapny_id', auth()->user()->company_id);
        
        $data = Datatables()->eloquent($Purchase_orders->latest('id'))
        ->addColumn('action' , function($Purchase_orders){
            return view('Procurement.Purchase_orders.actions' , ['type' => 'action' , 'Purchase_orders' => $Purchase_orders]);
        })
        ->editColumn('id_supplers', function ($Purchase_orders){
            $Supplier = Supplier::where('id', $Purchase_orders->id_supplers)->first();
            return  optional($Supplier)->name;
        })
        ->editColumn('status', function ($Quotation){
            if ($Quotation->status == 1) {
                return "يتم المراجعه";
            } elseif ($Quotation->status == 4) {
                return "ملغي";
            } elseif($Quotation->status == 5) {
                return "مسوده";
            } elseif ($Quotation->status == 3) {
               return "تمت الفوترة" ; 
            }
        })
        ->toJson();


        return $data;
    }
    public function index()
    {
        $PurchaseInvoices = Purchase_orders::all();
          $sites= Site::all();
        return view('Procurement.Purchase_orders.index', compact(
            [
                'PurchaseInvoices',
                 'sites',
            
            ]
        ));
    }
    
    
        public function status($id) {
        
        $Sales_invoices = Purchase_orders::find($id);
        $Sales_invoices->status = 4;
        $Sales_invoices->save();
        return redirect()->route('Purchase_orders.index')->with(['success' => 'تم الحفظ بنجاح']);
    }
    
        
   public function done($id) 
    {
        $count = "";
        // dd($id);
        $PurchaseInvoices = "";
        $PurchaseInvoices = PurchaseInvoices::latest()->first();
        // dd($PurchaseInvoices);
        if ($PurchaseInvoices) {
            $count = $PurchaseInvoices->id + 1 ;
        } else {
            $count = 1;
        }
        $PurchaseInvoices =  Purchase_orders::FindOrFail($id);
        $Suppliers   = Supplier::all();
        $Supplierr   = Supplier::where("id", $PurchaseInvoices->id_supplers)->first();
        // dd($Supplier);
        $products  = product::all();
        $sites     = Site::all();
        $QuotationDetails  = QuotationDetails::where('purchase_invoice_id', $id)->where("type", 1)->get();
        // $count     = count($QuotationDetails);
        // dd($QuotationDetails);
        $salespersons = Salesperson::all();
        return view('Procurement.Purchase_orders.done', compact('PurchaseInvoices', 'Suppliers', 'products', 'QuotationDetails', 'count', 'sites', 'Supplierr','salespersons')); 
    }
    
    
    public function donePost(Request $request, $id){
         
     
       
        $data = $request->all();
        $Sales_invoices = Purchase_orders::find($id);
        $Sales_invoices->status = 3;
        $Sales_invoices->save();
        $data['type'] = 2;
        $len  = count($data['test']) / 11;
        $end   = 0;
        $start = 0;
        $group = [];
        $unit  = [];
  
        for ($i=0; $i < $len; $i++) {

           $group[] = array_slice($data['test'],$start , 11, false);

           $start += 11;

        }
        $data['old_balance'] = $request->total;
        $PurchaseInvoices = PurchaseInvoices::create($data);
        // get 3 accounts TaxAccount and salesAccount and CliantAccount
        $accountTax    = Account::where('name', '2105 - ضريبة القيمة المضافة المستحقة')->first();
        $accountClaint = Account::where('name', '1103 - المدينون')->first();
        $accountSales  = Account::where('name', '4101 - إيرادات المبيعات/ الخدمات')->first();
        
        // $totalamountClaint = $accountClaint->amount     - $request->total;
        // $totalamountTax    = $accountTax->amount        + $request->tax_value;
        // $totalamountSales  = $accountSales->amount      + $request->total_with_tax;
        
        // $accountClaint->update([
        //       'amount' =>  $totalamountClaint 
        // ]);
        
        // $accountTax->update([
        //     'amount' =>  $totalamountTax    
        // ]);
        
        // $accountSales->update([
        //     'amount' =>  $totalamountSales    
        // ]);
        
        
        // $CcountEstrictions = [
        //     'account_id' => $accountClaint->id,
        //     'type' => '2',
        //     'account_type' => $PurchaseInvoices->id,
        //     'ammount_from' => $request->total,
        //     'ammount_to'   => 0,
        //     'from_to'      => 1,
        // ];
        // CcountEstrictions::create($CcountEstrictions);
        
        
        // $CcountEstrictions = [
        //     'account_id' => $accountTax->id,
        //     'type' => '2',
        //     'account_type' => $PurchaseInvoices->id,
        //     'ammount_from' => 0,
        //     'ammount_to'   => $request->tax_value,
        //     'from_to'      => 1,
        // ];
        // CcountEstrictions::create($CcountEstrictions);
        
        // $CcountEstrictions = [
        //     'account_id' => $accountSales->id,
        //     'type' => '2',
        //     'account_type' => $PurchaseInvoices->id,
        //     'ammount_from' => 0,
        //     'ammount_to'   => $request->total_with_tax,
        //     'from_to'      => 1,
        // ];
        // CcountEstrictions::create($CcountEstrictions);
        
        // $Journal = [];
        // $Journal[] = [
        //     'journal_id' => $PurchaseInvoices->id,
        //     'type' => 2,
        //     'acount_from' => 1,
        //     'acount_to' => 2,
        // ];
        // Journal::insert($Journal);



        // dd($group);
        // 'descunt'                    => $index[3],
        foreach ($group as $index) {
            // if (count($data['test']) >= 8) {
                $arr = explode("-", $index[2]);
                $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();
                
           if($store) {
                    
                    $qunInstore = $store->qun + $index[1];
                    $store->qun = $qunInstore; // Update the 'qun' field
                    $store->save();
                } else {
                   $store = Store::create([
                        'site_id' => $data['site_id'],   
                        'product_id' => $index[0],   
                        'qun' =>  $index[1],   
                    ]);
                }
                
           
                $unit[] = [
                    'product_id' => $index[0],
                    'qun' => $index[1],
                    'price_unit_id' => $index[2],
                    'price_unit' => $arr[0],
                    'unit_id' => $arr[1],
                    'withDescunt' => $index[4],
                    'descunt' => $index[5],
                    'type_descount' => $index[6],
                    'price_before' => $index[7],
                    'tax' => $index[8],
                    'tax_value' => $index[9],
                    'price_after' => $index[10],
                    'purchase_invoice_id'        => $PurchaseInvoices->id,
                    'type' => 1
                ];
            // }
        }
        // dd($unit);
        PurchaseInvoiceDetails::insert($unit);
        // fill appointments em ployees
        // dd("done");
        return redirect()->route('Purchase_Invoices.index')->with(['success' => 'تم الحفظ بنجاح']);
     }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    
   
      public function create()
    {
        $Quotation = Purchase_orders::latest()->first() ;
        // dd($PurchaseInvoices);
        $sites = Site::all();
        if ($Quotation) {
            $count = $Quotation->id + 1 ;
        } else {
            $count = 1;
        }
        $Clients  = Supplier::where('status', 1)
                 ->where(function($query) {
                     $query->where('site_id', 10)
                           ->orWhere('site_id', 0);
                 })
                 ->get();
        $salespersons = Salesperson::where('site_id', 10)->get();
        $products = Product::all();
        return view('Procurement.Purchase_orders.create', compact('Clients', 'products', 'count','sites', 'salespersons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
   public function store(Request $request)
    {

        // $rules = [
        //     'client_id' => 'required',
        //     'Release_Date' => 'required',
        //     'Payment_Terms' => 'required',
        //     'due_date' => 'required',
        //     'Supply_date' => 'required',
        // ];

        // $messages = [
        //     'required' => 'The :attribute field is required.',
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        $data = $request->all();
        //dd($data);
        $data['comapny_id'] = auth()->user()->company_id;
        $len  = count($data['test']) / 11;
        $end   = 0;
        $start = 0;
        $group = [];
        $unit  = [];

        for ($i=0; $i < $len; $i++) {

           $group[] = array_slice($data['test'],$start , 11, false);

           $start += 11;

        }

        $PurchaseInvoices = Purchase_orders::create($data);


    //   dd($group);

       foreach ($group as $index) {
        //   if (count($data['test']) >= 8) {
        // echo "dasdas";
        
               $arr = explode("-", $index[2]);
                
                 $unit[] = [
                    'product_id'    => $index[0],
                    'qun'           => $index[1],
                    'price_unit_id' => $index[2],
                    'price_unit'    => $arr[0],
                    'unit_id'       => $arr[1],
                    'withDescunt'   => $index[4],
                    'descunt'       => $index[5],
                    'type_descount' => $index[6],
                    'price_before'  => $index[7],
                    'tax'           => $index[8],
                    'tax_value'     => $index[9],
                    'price_after'   => $index[10],
                    'purchase_invoice_id'        => $PurchaseInvoices->id,
                    'type' => 1,
                    'comapny_id'        => auth()->user()->company_id
                ];
        //   }

        }
        // dd($unit);
        QuotationDetails::insert($unit);
        // return QuotationDetails::where("purchase_invoice_id", $PurchaseInvoices)->get();
        // return QuotationDetails::all();
        // fill appointments em ployees
        return redirect()->route('Purchase_orders.index')->with(['success' => 'تم الحفظ بنجاح']);
    }
    
    
     
    
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase_orders  $Purchase_orders
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $Sales_invoices = Purchase_orders::FindOrFail($id);
          $site           = Site::where("id", $Sales_invoices->site_id)->first();
        // dd($Sales_invoices);
        $Client         = Supplier::FindOrFail($Sales_invoices->id_supplers);
        $PurchaseInvoiceDetails = QuotationDetails::where('type', 1)->where('purchase_invoice_id', $id)->get();
        return view('Procurement.Purchase_orders.show',  compact(['Client','site', 'Sales_invoices', 'PurchaseInvoiceDetails'])); 
        // return view('Sales.Quotations.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase_orders  $Purchase_orders
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Purchase_orders = Purchase_orders::FindOrFail($id);
        $Suppliers   = Supplier::all();
        return view('Procurement.Purchase_orders.update', compact('Purchase_orders', 'Suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase_orders  $Purchase_orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Purchase_orders = Purchase_orders::findOrFail($id);
        $data = $request->all();

        //update in db
        $Purchase_orders->update($data);
        return redirect()->route('Purchase_orders.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase_orders  $Purchase_orders
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Purchase_orders = Purchase_orders::find($id);
            $deleted =  $Purchase_orders->delete();
            if (!$deleted) {
                return redirect()->route('Purchase_orders.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Purchase_orders.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Purchase_orders.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
    
 
        public function copy($id)
    {
       // dd($id);
        $PurchaseInvoices = Purchase_orders::latest()->first() ;
       // dd($PurchaseInvoices);
        if ($PurchaseInvoices) {
            $count = $PurchaseInvoices->id + 1 ;
        } else {
            $count = 1;
        }
        $PurchaseInvoices = Purchase_orders::FindOrFail($id);
        $SR   = Supplier::where('id', $PurchaseInvoices->id_supplers)->first();
        $Suppliers   = Supplier::all();
        $products    = product::all();
        $sites       = site::all();
         $salespersons = Salesperson::all();
        $QuotationDetails  = QuotationDetails::where('purchase_invoice_id', $id)->where('type', 1)->get();
   
        return view('Procurement.Purchase_orders.newCopy', compact('PurchaseInvoices', 'Suppliers','products', 'QuotationDetails', 'count', 'SR', 'sites','salespersons'));
        
    }
    
    
    
     
        public function copystore(Request $request)
    {
    
        // $rules = [
        //     'Ref' => 'required',
        //     'id_supplers' => 'required',
        //     'Date_start' => 'required',
        //     'Date_end' => 'required',
        //     'tax_value' => 'required',
        //     'total' => 'required',
        //     'total_with_tax' => 'required',
        // ];
        // dd($request);
        // $messages = [
        //     'required' => 'The :attribute field is required.',
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        $data = $request->all();
        // dd($data['test']);
        $data['type'] = 2;
        $len  = count($data['test']) / 8;
        $end   = 0;
        $start = 0;
        $group = [];
        $unit  = [];

        for ($i=0; $i < $len; $i++) {

           $group[] = array_slice($data['test'],$start , 8, false);

           $start += 8;

        }
        $PurchaseInvoices = purchase_orders::create($data);
        // get 3 accounts TaxAccount and salesAccount and CliantAccount
        $accountTax    = Account::where('name', '2105 - ضريبة القيمة المضافة المستحقة')->first();
        $accountClaint = Account::where('name', '1103 - المدينون')->first();
        $accountSales  = Account::where('name', '4101 - إيرادات المبيعات/ الخدمات')->first();
        
        // $totalamountClaint = $accountClaint->amount     - $request->total;
        // $totalamountTax    = $accountTax->amount        + $request->tax_value;
        // $totalamountSales  = $accountSales->amount      + $request->total_with_tax;
        
        // $accountClaint->update([
        //       'amount' =>  $totalamountClaint 
        // ]);
        
        // $accountTax->update([
        //     'amount' =>  $totalamountTax    
        // ]);
        
        // $accountSales->update([
        //     'amount' =>  $totalamountSales    
        // ]);
        
        
        // $CcountEstrictions = [
        //     'account_id' => $accountClaint->id,
        //     'type' => '2',
        //     'account_type' => $PurchaseInvoices->id,
        //     'ammount_from' => $request->total,
        //     'ammount_to'   => 0,
        //     'from_to'      => 1,
        // ];
        // CcountEstrictions::create($CcountEstrictions);
        
        
        // $CcountEstrictions = [
        //     'account_id' => $accountTax->id,
        //     'type' => '2',
        //     'account_type' => $PurchaseInvoices->id,
        //     'ammount_from' => 0,
        //     'ammount_to'   => $request->tax_value,
        //     'from_to'      => 1,
        // ];
        // CcountEstrictions::create($CcountEstrictions);
        
        // $CcountEstrictions = [
        //     'account_id' => $accountSales->id,
        //     'type' => '2',
        //     'account_type' => $PurchaseInvoices->id,
        //     'ammount_from' => 0,
        //     'ammount_to'   => $request->total_with_tax,
        //     'from_to'      => 1,
        // ];
        // CcountEstrictions::create($CcountEstrictions);
        
        // $Journal = [];
        // $Journal[] = [
        //     'journal_id' => $PurchaseInvoices->id,
        //     'type' => 2,
        //     'acount_from' => 1,
        //     'acount_to' => 2,
        // ];
        // Journal::insert($Journal);



        // dd($group);
        // 'descunt'                    => $index[3],
        foreach ($group as $index) {
            if (count($data['test']) >= 8) {
                
                $unit[] = [
                    'product_id'                 => $index[0],
                    'qun'                        => $index[1],
                    'descunt'                    => $index[3],
                    'price_before'               => $index[4],
                    'tax'                        => $index[5],
                    'tax_value'                  => $index[6],
                    'price_after'                => $index[7],
                    'purchase_invoice_id'        => $PurchaseInvoices->id,
                    'type'                       => 1
                ];
            }
        }
        // dd($unit);
        QuotationDetails::insert($unit);
        // fill appointments em ployees
        // dd("done");
        return redirect()->route('Purchase_orders.index')->with(['success' => 'تم الحفظ بنجاح']);
    }
    
    
    
    
    
}
