<?php

namespace App\Http\Controllers;

use App\Product;
use App\Store;
use App\PurchaseInvoiceDetails;
use App\PurchaseInvoices;
use App\Supplier;
use App\Account;
use App\Salesperson;
use App\Site;
use App\CcountEstrictions;
use App\Supplierbond;
use App\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PurchaseInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPurchase_Invoices(Request $request){
        $PurchaseInvoices = PurchaseInvoices::query();







        if ($request->code)
            $PurchaseInvoices->where('code','like', '%'. $request->code . '%');


        if($request->name) {
            $Client = Supplier::where('name','like','%'. $request->name . "%")->first();

             $PurchaseInvoices->where('id_supplers', $Client->id);
        }

        if($request->status ==  3) {

            $PurchaseInvoices->whereColumn('total', '=', 'old_balance');
            $PurchaseInvoices->where('total', '!=', 0);
            $PurchaseInvoices->where('done', '!=', '0');
        }

        if($request->status ==  4) {

            $PurchaseInvoices->where('total',0 );
            $PurchaseInvoices->where('done', '!=', '0');
        }
        if($request->status ==  5) {

            $PurchaseInvoices->where('total',"!=", 0 );
            $PurchaseInvoices->whereColumn('total', '<', 'old_balance');
            $PurchaseInvoices->where('done', '!=', '0');
        }
        if($request->status ==  6) {

            $PurchaseInvoices->where('done',0 );
        }




        if ($request->date == 1) {
            if ($request->start_date)
                $PurchaseInvoices->where('Date_start', '>=' ,$request->start_date);

            if ($request->end_date )
                $PurchaseInvoices->where('Date_start','<=', $request->end_date);

        }


        elseif ($request->date == 2) {
             if ($request->start_date )
                $PurchaseInvoices->where('Date_end', '>=' ,$request->start_date);

            if ($request->end_date )
                $PurchaseInvoices->where('Date_end','<=', $request->end_date);


        }

        else {

            if ($request->start_date)
                    $PurchaseInvoices->where('Date_start', '>=' ,$request->start_date);

            if ($request->end_date )
                    $PurchaseInvoices->where('Date_start','<=', $request->end_date);
        }







        $data = Datatables()->eloquent($PurchaseInvoices->latest('id'))
        ->addColumn('action' , function($PurchaseInvoices){
             $premation = $PurchaseInvoices->total == $PurchaseInvoices->old_balance ? 'ok' : 'notEdit';
            $is_done   = $PurchaseInvoices->total == 0 ? 'notDeleted' : 'ok';
                     return view('Procurement.Purchase_Invoices.actions' , ['type' => 'action' , 'PurchaseInvoices' => $PurchaseInvoices, 'premation' => $premation, 'is_done'=> $is_done]);
        })
        ->editColumn('id_supplers', function ($PurchaseInvoices){
            $Supplier = Supplier::where('id', $PurchaseInvoices->id_supplers)->first();
            return  optional($Supplier)->name;
        })
       ->addColumn('status', function ($PurchaseInvoices){
            $PurchaseInvoicesTotal  = $PurchaseInvoices->total;
            $PurchaseInvoicesold    = $PurchaseInvoices->old_balance;
            if ($PurchaseInvoicesTotal == 0 && $PurchaseInvoices->done != 0) {
                return "دفعت";
            } elseif ($PurchaseInvoicesold > $PurchaseInvoicesTotal && $PurchaseInvoices->done != 0) {
                return " دفعت جزئيا";
            } elseif ($PurchaseInvoicesTotal == 0 && $PurchaseInvoices->done != 0) {
              return "دفعت"  ;
            } elseif ($PurchaseInvoices->done == 0) {
              return "مسوده";
            } else {
                return "موافق عليه";
            }
        })
        ->toJson();


        return $data;
    }
    public function index()
    {
        $PurchaseInvoices = PurchaseInvoices::all();
            $sites   = Site::all();
        return view('Procurement.Purchase_Invoices.index', compact(
            [
                'PurchaseInvoices',
                  'sites',
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
        $count = "";
        $PurchaseInvoices = "";
        $sites = Site::all();
        $PurchaseInvoices = PurchaseInvoices::latest()->first() ;
        // dd($PurchaseInvoices);
        if ($PurchaseInvoices) {
            $count = $PurchaseInvoices->id + 1 ; // 52
        } else {
            $count = 1;
        }
        $Clients  = Supplier::where('status', 1)
                //  ->where(function($query) {
                //      $query->where('site_id', 10)
                //            ->orWhere('site_id', 0);
                //  })
                 ->get();
        $salespersons = Salesperson::where('site_id', 10)->get();
        $products   = Product::all();
        return view('Procurement.Purchase_Invoices.create', compact('Clients', 'products', 'count', 'sites', 'salespersons'));
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
        //     'code' => 'required',
        //     'id_supplers' => 'required',
        //     'Date_start' => 'required',
        //     'Date_end' => 'required',
        //     'Date_Groce_Period' => 'required',
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
      //dd($data['test']);
        $data['type'] = 1;
        $len  = count($data['test']) / 11;
        $end   = 0;
        $start = 0;
        $group = [];
        $unit  = [];

        for ($i=0; $i < $len; $i++) {

           $group[] = array_slice($data['test'],$start , 11, false);

           $start += 11;

        }
        $data['old_balance'] = $request->final_total;
        $data['total']       = $request->final_total;
        $data['total_b']     = $request->total;
        $PurchaseInvoices = PurchaseInvoices::create($data);
        // get 3 accounts TaxAccount and salesAccount and CliantAccount
        $accountTax    = Account::where('code', '2105')->first();
        $accountClaint = Account::where('code', '2101')->first();
        $accountSales  = Account::where('code', '1106')->first();

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
        $CcountEstrictions = [
            'account_id' => $accountClaint->id,
            'type' => '1',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => 0,
            'ammount_to'   => $data['total'],
            'from_to'      => 1,
        ];
        CcountEstrictions::create($CcountEstrictions);




        foreach ($group as $index) {
            if (count($data['test']) >= 8) {
                $arr = explode("-", $index[2]);
                $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();



                $totalamountClaint = $accountClaint->amount     - $index[7];
                $totalamountTax    = $accountTax->amount        + $index[9];
                $totalamountSales  = $accountSales->amount      + $index[10];
                $this->saveAccountEstrictions($accountTax, $accountSales, $totalamountClaint, $totalamountTax, $totalamountSales, $PurchaseInvoices, $index);

                // dd($store);
                if($store) {

                    $qunInstore = $store->qun + ($index[1] * $arr[2]);
                    $store->qun = $qunInstore; // Update the 'qun' field
                    $store->save();
                } else {
                   $store = Store::create([
                        'site_id' => $data['site_id'],
                        'qun' => ($index[1] * $arr[2]),
                        'product_id' =>  $index[0],
                    ]);
                }



                $unit[] = [
                    'product_id'    => $index[0],
                    'qun'           => $index[1],
                    'price_unit_id' => $index[2],
                    'qunXunit'      => $arr[2] * $index[1],
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
                    'type' => 1
                ];
            }
        }




        // dd($unit);
        PurchaseInvoiceDetails::insert($unit);
        // fill appointments em ployees
        // dd("done");
        return redirect()->route('Purchase_Invoices.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    public function newstore(Request $request)
    {

        $data = $request->all();
        // dd($data['test']);
        $data['type'] = 2;
        $len  = count($data['test']) / 10;
        $end   = 0;
        $start = 0;
        $group = [];
        $unit  = [];

        for ($i=0; $i < $len; $i++) {

           $group[] = array_slice($data['test'],$start , 10, false);

           $start += 10;

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
            if (count($data['test']) >= 8) {
                $arr = explode("-", $index[2]);
                $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();



                $qunInstore = $store->qun + $index[1];
                $store->qun = $qunInstore; // Update the 'qun' field
                $store->save();


                $unit[] = [
                    'product_id' => $index[0],
                    'qun' => $index[1],
                    'price_unit_id' => $index[2],
                    'price_unit' => $arr[0],
                    'unit_id' => $arr[1],
                    'descunt' => $index[4],
                    'type_descount' => $index[5],
                    'price_before' => $index[6],
                    'tax' => $index[7],
                    'tax_value' => $index[8],
                    'price_after' => $index[9],
                    'purchase_invoice_id'        => $PurchaseInvoices->id,
                    'type' => 2
                ];
            }
        }
        // dd($unit);
        PurchaseInvoiceDetails::insert($unit);
        // fill appointments em ployees
        // dd("done");
        return redirect()->route('Purchase_Invoices.index')->with(['success' => 'تم الحفظ بنجاح']);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\PurchaseInvoices  $PurchaseInvoices
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $Sales_invoices = PurchaseInvoices::where('id', $id)->first();
         $site           = Site::where("id", $Sales_invoices->site_id)->first();
        $Client         = Supplier::FindOrFail($Sales_invoices->id_supplers);
        $PurchaseInvoiceDetails = PurchaseInvoiceDetails::where('type', 1)->where('purchase_invoice_id', $id)->get();

        // dd($Sales_invoices);
        return view('Procurement.Purchase_Invoices.show', compact(['Client', 'Sales_invoices', 'PurchaseInvoiceDetails','site']));
    }

    public function print($id)
    {

        $Sales_invoices = PurchaseInvoices::where('id', $id)->first();
        $Client         = Supplier::FindOrFail($Sales_invoices->id_supplers);
        $Clientbond     = Supplierbond::where('PurchaseInvoices_id', $id)->get();
        // dd($Clientbond);
        $PurchaseInvoiceDetails = PurchaseInvoiceDetails::where('type', 2)->where('purchase_invoice_id', $id)->get();

        // dd($Sales_invoices);
        return view('Procurement.Purchase_Invoices.print', compact(['Client', 'Sales_invoices', 'PurchaseInvoiceDetails', 'Clientbond']));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PurchaseInvoices  $PurchaseInvoices
     * @return \Illuminate\Http\Response
     */

      public function edit($id)
    {
        $PurchaseInvoices = PurchaseInvoices::FindOrFail($id);
        $SR  = Supplier::where('id', $PurchaseInvoices->id_supplers)->first();

        $Suppliers   = Supplier::all();
        $products  = product::all();
        $sites     = site::all();
        $QuotationDetails  = PurchaseInvoiceDetails::where('purchase_invoice_id', $id)->where('type', 1)->get();
        $salespersons = Salesperson::all();
        // foreach($QuotationDetails as $Qun) {
        //     $store = Store::where("site_id", $PurchaseInvoices->site_id)->where("product_id", $Qun->product_id)->first();
        //     $qunInstore = $store->qun + $Qun->qun;
        //     $store->qun = $qunInstore; // Update the 'qun' field
        //     $store->save();
        // }


        return view('Procurement.Purchase_Invoices.update', compact('PurchaseInvoices', 'Suppliers','products', 'QuotationDetails', 'SR', 'sites', 'salespersons'));
    }

    public function payment($id)
    {
        $PurchaseInvoices = PurchaseInvoices::FindOrFail($id);
        $Clientbond = Supplierbond::latest()->first() ;
        // dd($PurchaseInvoices);
        if ($Clientbond) {
            $count = $Clientbond->id + 1 ;
        } else {
            $count = 1;
        }
        $Clients   = Supplier::where('id', $PurchaseInvoices->id_supplers)->get();
        $accounts  = Account::where('transactions', 1)->get();
        return view('Procurement.Purchase_Invoices.payment', compact('PurchaseInvoices', 'Clients', 'accounts', 'count'));
    }

    public function paymentPost(Request $request) {
        $data = $request->all();




        $Clientbond=  Supplierbond::create($data);
        $PurchaseInvoices = PurchaseInvoices::FindOrFail($data['PurchaseInvoices_id']);
        $total  = $request->total;
        $PurchaseInvoices->update(['total' => $total]);
        // $CcountEstrictions = [
        //     'account_id' => $request->id_Account,
        //     'type' => '4',
        //     'account_type' => $Clientbond->id,
        //     'ammount_from' => $request->Amount,
        //     'ammount_to'   => 0,
        // ];
        // CcountEstrictions::create($CcountEstrictions);
        // $CcountEstrictions = [
        //     'account_id' => '2',
        //     'type' => '4',
        //     'account_type' => $Clientbond->id,
        //     'ammount_from' => 0,
        //     'ammount_to'   => $request->Amount,
        // ];
        // CcountEstrictions::create($CcountEstrictions);
        // // fill appointments em ployees
        // $Journal = [];
        // $Journal[] = [
        //     'journal_id' => $Clientbond->id,
        //     'type' => 4,
        //     'acount_from' => $request->id_Account,
        //     'acount_to' => 2,
        // ];
        // Journal::insert($Journal);
        return redirect()->route('Purchase_Invoices.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PurchaseInvoices  $Purchase_orders
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PurchaseInvoices  $PurchaseInvoices
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $PurchaseInvoices = PurchaseInvoices::find($id);
            $deleted =  $PurchaseInvoices->delete();
            if (!$deleted) {
                return redirect()->route('Purchase_Invoices.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Purchase_Invoices.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Purchase_Invoices.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }


        public function copy($id)
    {
        // dd($id);
        $PurchaseInvoices = PurchaseInvoices::latest()->first() ;

        // dd($PurchaseInvoices);
        if ($PurchaseInvoices) {
            $count = $PurchaseInvoices->id + 1 ;
        } else {
            $count = 1;
        }
        $PurchaseInvoices = PurchaseInvoices::FindOrFail($id);
        $SR  = Supplier::where('id', $PurchaseInvoices->id_supplers)->first();
        $Suppliers   = Supplier::all();
        $products  = product::all();
        $salespersons = Salesperson::all();
        $sites     = site::all();
        $QuotationDetails  = PurchaseInvoiceDetails::where('purchase_invoice_id', $id)->where('type', 1)->get();
        return view('Procurement.Purchase_Invoices.copy', compact('PurchaseInvoices', 'Suppliers','products', 'QuotationDetails', 'count', 'SR', 'sites', 'salespersons'));

    }


    public function copystore(Request $request)
    {
        $rules = [
            'code' => 'required',
            'id_supplers' => 'required',
            'Date_start' => 'required',
            'Date_end' => 'required',
            'Date_Groce_Period' => 'required',
            'tax_value' => 'required',
            'total' => 'required',
            'total_with_tax' => 'required',
        ];
        // dd($request);
        $messages = [
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
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
        PurchaseInvoiceDetails::insert($unit);
        // fill appointments em ployees
        // dd("done");
        return redirect()->route('Purchase_Invoices.index')->with(['success' => 'تم الحفظ بنجاح']);
    }



        public function update(Request $request, $id)
    {
        $PurchaseInvoices = PurchaseInvoices::findOrFail($id);
        $data = $request->all();
        $data['old_balance'] = $request->final_total;
        $data['total']       = $request->final_total;
        $data['total_b']     = $request->total;
        $new = [];
        // dd($data['old']);


        // old data here
        if (isset($data['old'])) {

            $len  = count($data['old']) / 12;
            $endold   = 0;
            $startold = 0;
            $groupold = [];
            $unitold  = [];
            $producs  = [];
            $oldcounter = 0;

            for ($i=0; $i < $len; $i++) {

               $groupold[] = array_slice($data['old'],$startold , 12, false);

               $startold += 12;

            }
            // dd($groupold);
            // get deleted array

            $QuotationDetails = PurchaseInvoiceDetails::where('purchase_invoice_id', $id)
                ->where('type', 1)
                ->pluck('id');
            // dd($QuotationDetails);
            foreach ($groupold as $index) {
                echo "dasdas";
                $arr = explode("-", $index[3]);

                if (count($data['old']) >= 8) {

                        $new[] = $index[1];

                        $unitold = [
                            'product_id' => $index[0],
                            'qun' => $index[2],
                            'price_unit_id' => $index[3],
                            'price_unit' => $arr[0],
                            'unit_id' => $arr[1],
                            'withDescunt' => $index[5],
                            'descunt' => $index[6],
                            'type_descount' => $index[7],
                            'price_before' => $index[8],
                            'tax' => $index[9],
                            'tax_value' => $index[10],
                            'price_after' => $index[11],
                            'type' => 1,
                        ];

                        PurchaseInvoiceDetails::where("id", $index[1])
                            ->where('type', 1)
                            ->update($unitold);

                        echo $oldcounter;

                }
            }

            $elementsToDelete = array_diff($QuotationDetails->toArray(), $new);
            PurchaseInvoiceDetails::whereIn('id', $elementsToDelete)->delete();
            // $QuotationDetails  = PurchaseInvoiceDetails::where('purchase_invoice_id', $id)->where('type', 2)->pluck('id');

            //  foreach ($groupold as $index) {
            //     $arr    = explode("-",$index[3]);
            //     if (count($data['old']) >= 8) {
            //         if (in_array($index[1], $QuotationDetails->toArray())) {
            //             $unitold[] = [
            //                 'product_id'            => $index[0],
            //                 'qun'                   => $index[2],
            //                 'price_unit_id'         => $index[3],
            //                 'price_unit'            => $arr[0],
            //                 'unit_id'               => $arr[1],
            //                 'descunt'               => $index[5],
            //                 'type_descount'         => $index[6],
            //                 'price_before'          => $index[7],
            //                 'tax'                   => $index[8],
            //                 'tax_value'             => $index[9],
            //                 'price_after'           => $index[10],
            //                 'type'                  => 2
            //             ];
            //             // echo "<pre>";
            //             // print_r($unitold);
            //             // echo "</pre>";
            //             $QuotationDetails = PurchaseInvoiceDetails::where("id", $index[1])->where('type', 2);

            //             $QuotationDetails->update($unitold[$oldcounter]);
            //             // $QuotationDetails->save();
            //             $oldcounter += 1;
            //             echo $oldcounter;
            //         } else {
            //             $QuotationDetails = PurchaseInvoiceDetails::where("id", $index[1])->where('type', 2)->delete();
            //         }
            //     }
            // }
        }
        // $QuotationDetails->save();

        // new data
        if (isset($data['test'])) {



            $len  = count($data['test']) / 10;
            $end   = 0;
            $start = 0;
            $group = [];
            $unit  = [];

            for ($i=0; $i < $len; $i++) {

               $group[] = array_slice($data['test'],$start , 10, false);

               $start += 10;

            }

        //   dd($group);

        foreach ($group as $index) {
            if (count($data['test']) >= 8) {
                $arr = explode("-", $index[2]);
                $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();



                $qunInstore = $store->qun + $index[1];
                $store->qun = $qunInstore; // Update the 'qun' field
                $store->save();


                $unit[] = [
                    'product_id' => $index[0],
                    'qun' => $index[1],
                    'price_unit_id' => $index[2],
                    'price_unit' => $arr[0],
                    'unit_id' => $arr[1],
                    'descunt' => $index[4],
                    'type_descount' => $index[5],
                    'price_before' => $index[6],
                    'tax' => $index[7],
                    'tax_value' => $index[8],
                    'price_after' => $index[9],
                    'purchase_invoice_id'        => $PurchaseInvoices->id,
                    'type' => 1
                ];
            }
        }
            // dd($unit);
            PurchaseInvoiceDetails::insert($unit);
        }


        //update in db
        $PurchaseInvoices->update($data);
        return redirect()->route('Purchase_Invoices.index')->with(['success' => 'تم تحديث بيانات  بنجاح']);
    }








    function saveAccountEstrictions( $accountTax, $accountSales, $totalamountClaint, $totalamountTax, $totalamountSales, $PurchaseInvoices, $index)
    {
        // $accountClaint->update([
        //     'amount' =>  $totalamountClaint
        // ]);

        // $accountTax->update([
        //     'amount' =>  $totalamountTax
        // ]);

        // $accountSales->update([
        //     'amount' =>  $totalamountSales
        // ]);




        $CcountEstrictions = [
            'account_id' => $accountTax->id,
            'type' => '1',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => $index[9],
            'ammount_to'   => 0,
            'from_to'      => 1,
        ];
        CcountEstrictions::create($CcountEstrictions);

        $CcountEstrictions = [
            'account_id' => $accountSales->id,
            'type' => '1',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => $index[7],
            'ammount_to'   => 0,
            'from_to'      => 1,
        ];
        CcountEstrictions::create($CcountEstrictions);
        return true;
    }
}
