<?php

namespace App\Http\Controllers;

use App\Account;
use App\CcountEstrictions;
use App\Salesperson;
use App\Client;
use App\Clientbond;
use App\Journal;
use App\Product;
use App\Site;
use App\Store;
use App\PurchaseInvoiceDetails;
use App\ReturnsPurchaseInvoiceDetails;
use App\ReturnsSalesInvoices;
use App\Sales_invoices;
use App\PurchaseInvoices;
use Illuminate\Http\Request;

class ReturnsSalesInvoicesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInvolice (Request $request)
    {
        $ClienthId = $request->input('client_id');
        $type      = $request->input('type');
        // Retrieve employees for the selected Clienth
        if ($type == 1) {
            $Sales_invoices = Sales_invoices::where('id_supplers', $ClienthId)->where("total" , "!=" , "0")->where('done', 1)
            ->orderByDesc('created_at')
            ->get();

        }

        if ($type == 0) {
            $Sales_invoices = ReturnsSalesInvoices::where('id_supplers', $ClienthId)->where("total" , "!=" , "0")->where('done', 1)
                ->orderByDesc('created_at')
            ->get();
        }

        // Return the Sales_invoices as a JSON response
        return response()->json($Sales_invoices);
    }





    public function getInvoliceP (Request $request)
    {
        $ClienthId = $request->input('client_id');

        // Retrieve employees for the selected Clienth
        $Sales_invoices = PurchaseInvoices::where('id_supplers', $ClienthId)->where("total" , "!=" , "0")
        ->get();

        // Return the Sales_invoices as a JSON response
        return response()->json($Sales_invoices);
    }
    public function getSalesInvoices (Request $request)
    {
        $ClienthId = $request->input('id');

        // Retrieve employees for the selected Clienth
        $Sales_invoices = Sales_invoices::where('id', $ClienthId)->where('type', 2)
        ->first();

        // Return the Sales_invoices as a JSON response
        return response()->json($Sales_invoices);
    }

    // public function PurchaseInvoiceDetails (Request $request)
    // {
    //     // dd("dsad");
    //     $PurchaseInvoiceDetails = PurchaseInvoiceDetails::where('purchase_invoice_id', $request->purchase_invoice_id)->where('type',2)->latest();

    //     $data = Datatables()->eloquent($PurchaseInvoiceDetails)

    //     ->editColumn('product_id', function ($PurchaseInvoiceDetails){
    //         $Product = Product::where('id', $PurchaseInvoiceDetails->product_id)->first();
    //         return optional($Product)->name_en;
    //     })
    //     ->addColumn('note', function ($PurchaseInvoiceDetails){
    //         $Product = Product::where('id', $PurchaseInvoiceDetails->product_id)->first();
    //         return optional($Product)->Note;
    //     })
    //     ->addColumn('sel', function ($PurchaseInvoiceDetails){
    //         $Product = Product::where('id', $PurchaseInvoiceDetails->product_id)->first();
    //         return optional($Product)->sel;
    //     })

    //     ->toJson();


    //     return $data;
    // }



    // here copy and pest in another invoice

    public function getAllInvolice (Request $request)
    {
        $ClienthId = $request->input('client_id');

        // Retrieve employees for the selected Clienth
        $Sales_invoices = Sales_invoices::where('id_supplers', $ClienthId)->where('returns_id' ,null)->where("done", 1)
        ->get();

        // Return the Sales_invoices as a JSON response
        return response()->json($Sales_invoices);
    }

    // here copy and pest in another invoice
    public function getDetilaSales_invoices (Request $request)
    {
        $invoiceId = $request->input('id');

        $Sales_invoices = PurchaseInvoiceDetails::with('product', 'product.productUnits', 'product.unit','product.productUnits.unitproductUnit')
        ->where('purchase_invoice_id', $invoiceId)
        ->where('type', 2)
        ->get();


        // Return the Sales_invoices as a JSON response
        return response()->json($Sales_invoices);

    }


    public function getAllInvoliceId (Request $request)
    {
        $invoiceId = $request->input('id');

        $Sales_invoices = Sales_invoices::find($invoiceId);


        // Return the Sales_invoices as a JSON response
        return response()->json($Sales_invoices);

    }







    public function getReturnsSalesInvoices(Request $request){
        // $PurchaseInvoices = ReturnsSalesInvoices::latest();

        $PurchaseInvoices = ReturnsSalesInvoices::query();


        if ($request->code)
            $PurchaseInvoices->where('code','like', '%'. $request->code . '%');


        if ($request->site)
            $PurchaseInvoices->where('site_id',$request->site);


        if($request->name) {
            $Client = Client::where('name','like','%'. $request->name . "%")->first();

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
        if($request->status ==  7) {

            $PurchaseInvoices->where('purchase_invoice_id',null);
        }
        if($request->status ==  6) {

            $PurchaseInvoices->where('done',0 );
            $PurchaseInvoices->where('purchase_invoice_id', "!=", null);

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


        $data = Datatables()->eloquent($PurchaseInvoices->latest())

        ->editColumn('id_supplers', function ($PurchaseInvoices){
            $Client = Client::where('id', $PurchaseInvoices->id_supplers)->first();
            return optional($Client)->name;
        })
        ->addColumn('action' , function($PurchaseInvoices){
            $premation = $PurchaseInvoices->total == $PurchaseInvoices->old_balance ? 'ok' : 'notEdit';
            $is_done   = $PurchaseInvoices->total == 0 ? 'notDeleted' : 'ok';
            return view('Sales.ReturnsSalesInvoices.actions' , ['type' => 'action' , 'PurchaseInvoices' => $PurchaseInvoices, 'premation' => $premation, 'is_done'=> $is_done]);
        })

        ->addColumn('bonds' , function($PurchaseInvoices){
            return Clientbond::where("PurchaseInvoices_id", $PurchaseInvoices->id)->sum("Amount");
        })
        // ->addColumn('action', function ($PurchaseInvoices){
        //     return view('Sales..actions',['type' => 'action' , 'PurchaseInvoices' => $PurchaseInvoices]);
        // })
        ->addColumn('status', function ($PurchaseInvoices){
            $PurchaseInvoicesTotal  = $PurchaseInvoices->total;
            $PurchaseInvoicesold    = $PurchaseInvoices->old_balance;
            if ($PurchaseInvoicesTotal == 0 && $PurchaseInvoices->done != 0 && $PurchaseInvoices->purchase_invoice_id != "") {
                return "مستعمل";
            } elseif ($PurchaseInvoicesold > $PurchaseInvoicesTotal && $PurchaseInvoices->done != 0 && $PurchaseInvoices->purchase_invoice_id != "") {
                return "مستعمل جزئيا";
            } elseif ($PurchaseInvoicesTotal == 0 && $PurchaseInvoices->done != 0 && $PurchaseInvoices->purchase_invoice_id != "") {
              return "مستعمل"  ;

            } elseif($PurchaseInvoices->purchase_invoice_id == "" ) {
              return "غير مستعمله"  ;
            } elseif ($PurchaseInvoices->done == 0) {
              return "مسوده";
            } else {
                return "بانتظار الموافقه";
            }
        })
        ->toJson();


        return $data;
    }


    public function index()
    {
        $PurchaseInvoices = ReturnsSalesInvoices::all();
        $sites            = Site::all();
        return view('Sales.ReturnsSalesInvoices.index', compact(
            [
                'PurchaseInvoices', 'sites'
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
        $PurchaseInvoices = ReturnsSalesInvoices::latest()->first();
        // dd($PurchaseInvoices);
        if ($PurchaseInvoices) {
            $count = $PurchaseInvoices->id + 1 ;
        } else {
            $count = 1;
        }
        $Clients = Client::where('status', 1)->get();
        $salespersons = Salesperson::all();
        $products   = Product::all();
        return view('Sales.ReturnsSalesInvoices.create', compact('Clients', 'products', 'count', 'sites', 'salespersons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // dd(count($data['test']));
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
        //  dd($group);


        if ($data['purchase_invoice_id'] != "") {
            $Sales_invoices = Sales_invoices::find($data['purchase_invoice_id']);
            $Sales_invoices->returns_id = 1;
            $Sales_invoices->save();
        }


        $data['old_balance'] = $request->total;
        $PurchaseInvoices = ReturnsSalesInvoices::create($data);


        $accountTax    = Account::where('name', '2105 - ضريبة القيمة المضافة المستحقة')->first();
        $accountClaint = Account::where('name', '1103 - المدينون')->first();
        $accountSales  = Account::where('name', '4101 - إيرادات المبيعات/ الخدمات')->first();



        foreach ($group as $index) {
            // if (count($data['test']) >= 8) {
                $arr = explode("-", $index[2]);
                $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();

                $totalamountClaint = $accountClaint->amount     - $index[7];
                $totalamountTax    = $accountTax->amount        + $index[9];
                $totalamountSales  = $accountSales->amount      + $index[10];
                $this->saveAccountEstrictions($accountClaint, $accountTax, $accountSales, $totalamountClaint, $totalamountTax, $totalamountSales, $PurchaseInvoices, $index);

                $qunInstore = $store->qun + $index[1];
                $store->qun = $qunInstore; // Update the 'qun' field
                $store->save();


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
                    'type' => 2
                ];
            // }
        }
        // dd($unit);
        ReturnsPurchaseInvoiceDetails::insert($unit);


        return redirect()->route('ReturnsSalesInvoices.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PurchaseInvoices  $PurchaseInvoices
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $status         = "";
        $Sales_invoices = ReturnsSalesInvoices::where('id', $id)->first();
        $PurchaseInvoicesTotal  = $Sales_invoices->total;
        $PurchaseInvoicesold    = $Sales_invoices->old_balance;
        if ($PurchaseInvoicesTotal == 0) {
            $status =  "تم دفع الفاتورة";
        } elseif ($PurchaseInvoicesold > $PurchaseInvoicesTotal) {
            $status=  " دفعت جزئيا";
        } elseif ($PurchaseInvoicesTotal == 0) {
          $status = "تمت الدفع"  ;
        } else {
            $status = "موافق عليها";
        }
        $site           = Site::where("id", $Sales_invoices->site_id)->first();
        $Client         = Client::FindOrFail($Sales_invoices->id_supplers);
        $Clientbond     = Clientbond::where('PurchaseInvoices_id', $id)->get();
        // dd($Clientbond);
        $PurchaseInvoiceDetails = ReturnsPurchaseInvoiceDetails::where('type', 2)->where('purchase_invoice_id', $id)->get();

        // dd($Sales_invoices);
        return view('Sales.ReturnsSalesInvoices.show', compact(['Client', 'Sales_invoices', 'PurchaseInvoiceDetails', 'Clientbond', 'status', 'site']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PurchaseInvoices  $PurchaseInvoices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $PurchaseInvoices = ReturnsSalesInvoices::FindOrFail($id);
        $invoiceReturns   = Sales_invoices::where("id", $PurchaseInvoices->purchase_invoice_id)->first();
          $salespersons = Salesperson::all();
        // dd($invoiceReturns);
        $SR   = Client::where('id', $PurchaseInvoices->id_supplers)->first();
        $invoises_Clients =  Sales_invoices::where("id_supplers", $SR->id)->get();
        // dd($invoises_Clients);
        $Suppliers   = Client::all();
        $products  = product::all();
        $sites     = site::all();
        $QuotationDetails  = ReturnsPurchaseInvoiceDetails::where('purchase_invoice_id', $id)->where('type', 2)->get();
        // dd($QuotationDetails);
        return view('Sales.ReturnsSalesInvoices.update', compact('PurchaseInvoices', 'Suppliers','products', 'QuotationDetails','salespersons', 'SR', 'sites', 'invoiceReturns', 'invoises_Clients'));
    }


    public function payment($id)
    {
        $PurchaseInvoices = ReturnsSalesInvoices::FindOrFail($id);
        $Clientbond = Clientbond::latest()->first() ;
        // dd($PurchaseInvoices);
        if ($Clientbond) {
            $count = $Clientbond->id + 1 ;
        } else {
            $count = 1;
        }
        $Clients   = Client::where('id', $PurchaseInvoices->id_supplers)->get();
        $accounts  = Account::where('transactions', 1)->get();
        return view('Sales.ReturnsSalesInvoices.payment', compact('PurchaseInvoices', 'Clients', 'accounts', 'count'));
    }

    public function paymentPost(Request $request) {
        $data = $request->all();


        $Clientbond=  Clientbond::create($data);
        $PurchaseInvoices = ReturnsSalesInvoices::FindOrFail($data['PurchaseInvoices_id']);
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
        return redirect()->route('Clientbond.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PurchaseInvoices  $Purchase_orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $PurchaseInvoices = ReturnsSalesInvoices::findOrFail($id);
        $data = $request->all();
        $data['old_balance'] = $request->total;
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

            $QuotationDetails = ReturnsPurchaseInvoiceDetails::where('purchase_invoice_id', $id)
                ->where('type', 2)
                ->pluck('id');
            // dd($QuotationDetails);
            foreach ($groupold as $index) {
                // echo "dasdas";
                $arr = explode("-", $index[3]);
                $resNew = ($index[2] * $arr[2]);
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
                            'type' => 2,
                            'qunXunit' => $resNew,
                        ];

                        ReturnsPurchaseInvoiceDetails::where("id", $index[1])
                            ->where('type', 2)
                            ->update($unitold);

                        echo $oldcounter;

                }
            }
            // dd($groupold);
            $elementsToDelete = array_diff($QuotationDetails->toArray(), $new);
            ReturnsPurchaseInvoiceDetails::whereIn('id', $elementsToDelete)->delete();

        }
        // $QuotationDetails->save();

        // new data
        if (isset($data['test'])) {



            $len  = count($data['test']) / 11;
            $end   = 0;
            $start = 0;
            $group = [];
            $unit  = [];

            for ($i=0; $i < $len; $i++) {

               $group[] = array_slice($data['test'],$start , 11, false);

               $start += 11;

            }

        //   dd($group);

            foreach ($group as $index) {
            if (count($data['test']) >= 8) {
                $arr = explode("-", $index[2]);
                $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();

                // $resNew = ($index[2] * $arr[2]);

                $qunInstore = $store->qun + $resNew;
                $store->qun = $qunInstore; // Update the 'qun' field
                $store->save();


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
                        'type' => 2
                    ];
            }
        }
            // dd($unit);
            ReturnsPurchaseInvoiceDetails::insert($unit);
        }


        //update in db
        $PurchaseInvoices->update($data);
        return redirect()->route('ReturnsSalesInvoices.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }
    public function print($id)
    {
        $Sales_invoices = ReturnsSalesInvoices::where('id', $id)->first();
        $Client         = Client::FindOrFail($Sales_invoices->id_supplers);
        $Clientbond     = Clientbond::where('PurchaseInvoices_id', $id)->where("type_returns", 0)->get();
        // dd($Clientbond);
        $PurchaseInvoiceDetails = ReturnsPurchaseInvoiceDetails::where('type', 2)->where('purchase_invoice_id', $id)->get();
        return view('Sales.ReturnsSalesInvoices.print', compact(['Client', 'Sales_invoices', 'PurchaseInvoiceDetails', 'Clientbond']));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PurchaseInvoices  $PurchaseInvoices
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $PurchaseInvoices = ReturnsSalesInvoices::find($id);
            $deleted =  $PurchaseInvoices->delete();
            if (!$deleted) {
                return redirect()->route('ReturnsSalesInvoices.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('ReturnsSalesInvoices.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('ReturnsSalesInvoices.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }


    function saveAccountEstrictions($accountClaint, $accountTax, $accountSales, $totalamountClaint, $totalamountTax, $totalamountSales, $PurchaseInvoices, $index)
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
            'account_id' => $accountClaint->id,
            'type' => '2',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => $index[10],
            'ammount_to'   => 0,
            'from_to'      => 1,
        ];
        CcountEstrictions::create($CcountEstrictions);


        $CcountEstrictions = [
            'account_id' => $accountTax->id,
            'type' => '2',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => 0,
            'ammount_to'   => $index[9],
            'from_to'      => 1,
        ];
        CcountEstrictions::create($CcountEstrictions);

        $CcountEstrictions = [
            'account_id' => $accountSales->id,
            'type' => '2',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => 0,
            'ammount_to'   => $index[7],
            'from_to'      => 1,
        ];
        CcountEstrictions::create($CcountEstrictions);
        return true;
    }
}
