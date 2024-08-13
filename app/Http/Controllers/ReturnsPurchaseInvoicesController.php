<?php

namespace App\Http\Controllers;

use App\Account;
use App\CcountEstrictions;
use App\Client;
use App\Salesperson;
use App\Supplier;
use App\Clientbond;
use App\Supplierbond;
use App\PurchaseInvoices;
use App\Journal;
use App\Product;
use App\Site;
use App\Store;
use App\PurchaseInvoiceDetails;
use App\ReturnsPurchaseInvoiceDetails;
use App\ReturnsSalesInvoices;
use App\ReturnsPurchaseInvoices;
use App\Sales_invoices;
// use App\PurchaseInvoices;
use Illuminate\Http\Request;

class ReturnsPurchaseInvoicesController extends Controller
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
        if ($type == 0) {
            $Sales_invoices = PurchaseInvoices::where('id_supplers', $ClienthId)->where("total" , "!=" , "0")->where('done', 1)
                ->get();
        }

        if ($type == 1) {
            $Sales_invoices = ReturnsPurchaseInvoices::where('id_supplers', $ClienthId)->where("total" , "!=" , "0")->where('done', 1)
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
        $Sales_invoices = PurchaseInvoices::where('id', $ClienthId)->where('type', 1)
        ->first();

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



    // here copy and pest in another invoice

    public function getAllInvolice (Request $request)
    {
        $ClienthId = $request->input('client_id');

        // Retrieve employees for the selected Clienth
        $Sales_invoices = PurchaseInvoices::where('id_supplers', $ClienthId)->where('returns_id' ,null)->where("done", 1)
        ->get();

        // Return the Sales_invoices as a JSON response
        return response()->json($Sales_invoices);
    }

    // here copy and pest in another invoice
    public function getDetilaSales_invoices (Request $request)
    {
        $invoiceId = $request->input('id');

        $Sales_invoices =PurchaseInvoiceDetails::with('product', 'product.productUnits', 'product.unit','product.productUnits.unitproductUnit')
            ->where('purchase_invoice_id', $invoiceId)
            ->where('type', 1)
        ->get();


        // Return the Sales_invoices as a JSON response
        return response()->json($Sales_invoices);



    }





    public function getReturnsPurchaseInvoices(Request $request){

        $PurchaseInvoices = ReturnsPurchaseInvoices::query();


        if ($request->code)
            $PurchaseInvoices->where('code','like', '%'. $request->code . '%');


        if ($request->site)
            $PurchaseInvoices->where('site_id',$request->site);


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
            $Client = Supplier::where('id', $PurchaseInvoices->id_supplers)->first();
            return optional($Client)->name;
        })
        ->addColumn('action' , function($PurchaseInvoices){
            $premation = $PurchaseInvoices->total == $PurchaseInvoices->old_balance ? 'ok' : 'notEdit';
            $is_done   = $PurchaseInvoices->total == 0 ? 'notDeleted' : 'ok';
            return view('Procurement.ReturnsPurchase_Invoices.actions' , ['type' => 'action' , 'PurchaseInvoices' => $PurchaseInvoices, 'premation' => $premation, 'is_done'=> $is_done]);
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
        $PurchaseInvoices = ReturnsPurchaseInvoices::all();
        $sites            = Site::all();
        return view('Procurement.ReturnsPurchase_Invoices.index', compact(
            [
                'PurchaseInvoices', 'sites'
            ]
        ));
    }
    public function print($id)
    {
        $Sales_invoices = ReturnsPurchaseInvoices::where('id', $id)->first();
        $Client         = Supplier::FindOrFail($Sales_invoices->id_supplers);
        $Clientbond     = Supplierbond::where('PurchaseInvoices_id', $id)->where("type_returns", 1)->get();
        // dd($Clientbond);
        $PurchaseInvoiceDetails = ReturnsPurchaseInvoiceDetails::where('type', 1)->where('purchase_invoice_id', $id)->get();
        return view('Procurement.ReturnsPurchase_Invoices.print', compact(['Client', 'Sales_invoices', 'PurchaseInvoiceDetails', 'Clientbond']));
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
        $PurchaseInvoices = ReturnsPurchaseInvoices::latest()->first();
        // dd($PurchaseInvoices);
        if ($PurchaseInvoices) {
            $count = $PurchaseInvoices->id + 1 ;
        } else {
            $count = 1;
        }
        $Clients = Supplier::where('status', 1)->get();
        $salespersons = Salesperson::all();
        $products   = Product::all();
        return view('Procurement.ReturnsPurchase_Invoices.create', compact('Clients', 'products', 'count', 'sites', 'salespersons'));
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
            $Sales_invoices = PurchaseInvoices::find($data['purchase_invoice_id']);
            $Sales_invoices->returns_id = 1;
            $Sales_invoices->save();
        }


        $data['old_balance'] = $request->total;
        $PurchaseInvoices = ReturnsPurchaseInvoices::create($data);


        $accountTax    = Account::where('code', '2105')->first();
        $accountClaint = Account::where('code', '2101')->first();
        $accountSales  = Account::where('code', '1106')->first();






        $CcountEstrictions = [
            'account_id' => $accountClaint->id,
            'type' => '3',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => 0,
            'ammount_to'   => $data['total'],
            'from_to'      => 3,
        ];
        CcountEstrictions::create($CcountEstrictions);



        foreach ($group as $index) {
            // if (count($data['test']) >= 8) {
                $arr = explode("-", $index[2]);
                $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();



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
                    'type' => 1
                ];
            // }
        }
        // dd($unit);
        ReturnsPurchaseInvoiceDetails::insert($unit);


        return redirect()->route('ReturnsPurchase_Invoices.index')->with(['success' => 'تم الحفظ بنجاح']);
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
        $Sales_invoices = ReturnsPurchaseInvoices::where('id', $id)->first();
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
        $Client         = Supplier::FindOrFail($Sales_invoices->id_supplers);
        $Clientbond     = Supplierbond::where('PurchaseInvoices_id', $id)->get();
        // dd($Clientbond);
        $PurchaseInvoiceDetails = ReturnsPurchaseInvoiceDetails::where('type', 1)->where('purchase_invoice_id', $id)->get();


        return view('Procurement.ReturnsPurchase_Invoices.show', compact(['Client', 'Sales_invoices', 'PurchaseInvoiceDetails', 'Clientbond', 'status', 'site']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PurchaseInvoices  $PurchaseInvoices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $PurchaseInvoices = ReturnsPurchaseInvoices::FindOrFail($id);
        $invoiceReturns   = PurchaseInvoices::where("id", $PurchaseInvoices->purchase_invoice_id)->first();
        $salespersons = Salesperson::all();
        // dd($invoiceReturns);
        $SR   = Supplier::where('id', $PurchaseInvoices->id_supplers)->first();
        $invoises_Clients =  PurchaseInvoices::where("id_supplers", $SR->id)->get();
        // dd($invoises_Clients);
        $Suppliers   = Supplier::all();
        $products  = product::all();
        $sites     = site::all();
        $QuotationDetails  = ReturnsPurchaseInvoiceDetails::where('purchase_invoice_id', $id)->where('type', 1)->get();
        // dd($QuotationDetails);
        return view('Procurement.ReturnsPurchase_Invoices.update', compact('PurchaseInvoices', 'Suppliers','products', 'QuotationDetails','salespersons', 'SR', 'sites', 'invoiceReturns', 'invoises_Clients'));

    }



    public function payment($id)
    {
        $PurchaseInvoices = ReturnsPurchaseInvoices::FindOrFail($id);
        $Clientbond = Supplierbond::latest()->first() ;
        // dd($PurchaseInvoices);
        if ($Clientbond) {
            $count = $Clientbond->id + 1 ;
        } else {
            $count = 1;
        }
        $Clients   = Supplier::where('id', $PurchaseInvoices->id_supplers)->get();
        $accounts  = Account::where('transactions', 1)->get();
        return view('Procurement.ReturnsPurchase_Invoices.payment', compact('PurchaseInvoices', 'Clients', 'accounts', 'count'));
    }

    public function paymentPost(Request $request) {
        $data = $request->all();

        // dd("welcome to post payment");
        $Clientbond=  Supplierbond::create($data);
        $PurchaseInvoices = ReturnsPurchaseInvoices::FindOrFail($data['PurchaseInvoices_id']);
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
        return redirect()->route('Supplierbond.index')->with(['success' => 'تم الحفظ بنجاح']);
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
        // dd("welcome update");
        $PurchaseInvoices = ReturnsPurchaseInvoices::findOrFail($id);
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
                ->where('type', 1)
                ->pluck('id');
            // dd($QuotationDetails);
            foreach ($groupold as $index) {
                // echo "dasdas";
                $arr = explode("-", $index[3]);

                if (count($data['old']) >= 8) {

                        $new[] = $index[1];

                        $unitold = [
                            'product_id'        => $index[0],
                            'qun'               => $index[2],
                            'price_unit_id'     => $index[3],
                            'price_unit'        => $arr[0],
                            'unit_id'           => $arr[1],
                            'descunt'           => $index[5],
                            'type_descount'     => $index[6],
                            'price_before'      => $index[7],
                            'tax'               => $index[8],
                            'tax_value'         => $index[9],
                            'price_after'       => $index[10],
                            'type' => 1
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
            ReturnsPurchaseInvoiceDetails::insert($unit);
        }


        //update in db
        $PurchaseInvoices->update($data);
        return redirect()->route('ReturnsPurchase_Invoices.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
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
            $PurchaseInvoices = ReturnsPurchaseInvoices::find($id);
            $deleted =  $PurchaseInvoices->delete();
            if (!$deleted) {
                return redirect()->route('ReturnsPurchase_Invoices.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('ReturnsPurchase_Invoices.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('ReturnsPurchase_Invoices.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
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
            'type' => '3',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => $index[9],
            'ammount_to'   => 0,
            'from_to'      => 3,
        ];
        CcountEstrictions::create($CcountEstrictions);

        $CcountEstrictions = [
            'account_id' => $accountSales->id,
            'type' => '3',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => $index[7],
            'ammount_to'   => 0,
            'from_to'      => 3,
        ];
        CcountEstrictions::create($CcountEstrictions);
        return true;
    }


}
