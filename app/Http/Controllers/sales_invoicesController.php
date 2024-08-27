<?php


namespace App\Http\Controllers;

use App\Account;
use App\CcountEstrictions;
use App\Clientbond;
use App\Salesperson;
use App\ReturnsSalesInvoices;
use App\Client;
use App\Site;
use App\Store;
use App\Journal;
use App\Uint;
use App\Item;
use App\Product;
use App\PurchaseInvoiceDetails;
use App\PurchaseInvoices;
use Illuminate\Http\Request;
use App\Sales_invoices;
use App\Services\InvoiceService;
use Illuminate\Support\Facades\Validator;


class sales_invoicesController extends Controller
{
    protected $invoiceService;
    protected $model;
    public function __construct(Sales_invoices  $model)
    {
        $this->invoiceService = new InvoiceService($model);
        $this->model          = $model;
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSales_invoices(Request $request)
    {
        $PurchaseInvoices = Sales_invoices::query();

        $PurchaseInvoices = $this->filtter($PurchaseInvoices, $request);

        return $PurchaseInvoices;
    }
    public function returns()
    {
        $PurchaseInvoices = Sales_invoices::where('returns', 1)->get();
        return view('Sales.Sales_invoices.returns.index', compact([
            'PurchaseInvoices'
        ]));
    }



    public function index()
    {
        $PurchaseInvoices = Sales_invoices::all();
        $sites            = Site::all();
        return view('Sales.Sales_invoices.index', compact(
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
    public function back($id)
    {
        $PurchaseInvoices = Sales_invoices::Find($id);
        $QuotationDetails  = PurchaseInvoiceDetails::where('purchase_invoice_id', $id)->where('type', 2)->get();

        // foreach($QuotationDetails as $Qun) {
        //     $store = Store::where("site_id", $PurchaseInvoices->site_id)->where("product_id", $Qun->product_id)->first();
        //     $qunInstore = $store->qun - $Qun->qun;
        //     $store->qun = $qunInstore; // Update the 'qun' field
        //     $store->save();
        // }

        return redirect()->route('sales_invoices.index');
    }
    public function create()
    {
        $count = "";
        $PurchaseInvoices = "";
        $sites = Site::all();
        $PurchaseInvoices = Sales_invoices::latest()->first();
        // dd($PurchaseInvoices);
        if ($PurchaseInvoices) {
            $count = $PurchaseInvoices->id + 1; // 52
        } else {
            $count = 1;
        }
        $Clients  = Client::where('status', 1)
            ->where(function ($query) {
                $query->where('site_id', 10)
                    ->orWhere('site_id', 0);
            })
            ->get();
        $salespersons = Salesperson::where('site_id', 10)->get();
        $products   = Product::all();
        $units      = Uint::all();
        $items      = Item::all();
        $account1     = Account::where('type', 4)->get();
        $account2     = Account::where('type', 5)->get();
        return view('Sales.Sales_invoices.NewCreate', compact('Clients', 'products', 'count', 'sites', 'salespersons',  'units', 'items',  'account1', 'account2'));
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
        $this->invoiceService->storeInvoice($data, 2, $this->model, 'sales_invoices.index');
        return redirect()->route('sales_invoices.index')->with(['success' => 'تم الحفظ بنجاح']);
    }
    public function store1(Request $request)
    {
        
        $data = $request->all();
        $data['type'] = 2;
        $len  = count($data['test']) / 12;
        $end   = 0;
        $start = 0;
        $group = [];
        $unit  = [];

        for ($i = 0; $i < $len; $i++) {

            $group[] = array_slice($data['test'], $start, 11, false);

            $start += 11;
        }
        // dd($group);
        $data['old_balance'] = $request->final_total;
        $data['total']       = $request->final_total;
        $data['total_b']     = $request->total;
        $PurchaseInvoices = Sales_invoices::create($data);
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

        $CcountEstrictions = [
            'account_id' => $accountClaint->id,
            'type' => '2',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => $data['total'],
            'ammount_to'   => 0,
            'from_to'      => 0,
            'site_id'      => $PurchaseInvoices->site_id,
            'supplier_id'  => $PurchaseInvoices->id_supplers
        ];
        CcountEstrictions::create($CcountEstrictions);


        // 'descunt'                    => $index[3],
        foreach ($group as $index) {
            
                $arr = explode("-", $index[2]);
                $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();

                $totalamountClaint = $accountClaint->amount     - $index[7];
                $totalamountTax    = $accountTax->amount        + $index[9];
                $totalamountSales  = $accountSales->amount      + $index[10];
                $this->saveAccountEstrictions( $accountTax, $accountSales, $totalamountClaint, $totalamountTax, $totalamountSales, $PurchaseInvoices, $index);

                $qunInstore = $store->qun - ($arr[2] * $index[1]);
                $store->qun = $qunInstore; // Update the 'qun' field
                $store->save();


                $unit = [
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
                PurchaseInvoiceDetails::create($unit);
        }
        // dd($unit);
        
        // fill appointments em ployees
        // dd("done");
        return redirect()->route('sales_invoices.index')->with(['success' => 'تم الحفظ بنجاح']);
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
        $Sales_invoices = Sales_invoices::where('id', $id)->first();
        $PurchaseInvoicesTotal  = $Sales_invoices->total;
        $PurchaseInvoicesold    = $Sales_invoices->old_balance;
        if ($PurchaseInvoicesTotal == 0) {
            $status =  "تم دفع الفاتورة";
        } elseif ($PurchaseInvoicesold > $PurchaseInvoicesTotal) {
            $status =  " دفعت جزئيا";
        } elseif ($PurchaseInvoicesTotal == 0) {
            $status = "تمت الدفع";
        } else {
            $status = "موافق عليها";
        }
        $site           = Site::where("id", $Sales_invoices->site_id)->first();
        $Client         = Client::FindOrFail($Sales_invoices->id_supplers);
        $Clientbond     = Clientbond::where('PurchaseInvoices_id', $id)->get();
        // dd($Clientbond);
        $PurchaseInvoiceDetails = PurchaseInvoiceDetails::where('type', 2)->where('purchase_invoice_id', $id)->get();

        // dd($Sales_invoices);
        return view('Sales.Sales_invoices.show', compact(['Client', 'Sales_invoices', 'PurchaseInvoiceDetails', 'Clientbond', 'status', 'site']));
    }

    public function print($id)
    {

        $Sales_invoices = Sales_invoices::where('id', $id)->first();
        $Client         = Client::FindOrFail($Sales_invoices->id_supplers);
        $Clientbond     = Clientbond::where('PurchaseInvoices_id', $id)->get();
        // dd($Clientbond);
        $PurchaseInvoiceDetails = PurchaseInvoiceDetails::where('type', 2)->where('purchase_invoice_id', $id)->get();

        // dd($Sales_invoices);
        return view('Sales.Sales_invoices.print', compact(['Client', 'Sales_invoices', 'PurchaseInvoiceDetails', 'Clientbond']));
    }
    public function pdf($id)
    {

        $Sales_invoices = Sales_invoices::where('id', $id)->first();
        $Client         = Client::FindOrFail($Sales_invoices->id_supplers);
        $Clientbond     = Clientbond::where('PurchaseInvoices_id', $id)->get();
        // dd($Clientbond);
        $PurchaseInvoiceDetails = PurchaseInvoiceDetails::where('type', 2)->where('purchase_invoice_id', $id)->get();

        // dd($Sales_invoices);
        return view('Sales.Sales_invoices.pdf', compact(['Client', 'Sales_invoices', 'PurchaseInvoiceDetails', 'Clientbond']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PurchaseInvoices  $PurchaseInvoices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $PurchaseInvoices = Sales_invoices::FindOrFail($id);
        $SR  = Client::where('id', $PurchaseInvoices->id_supplers)->first();

        $Suppliers   = Client::all();
        $products  = product::all();
        $sites     = site::all();
        $QuotationDetails  = PurchaseInvoiceDetails::where('purchase_invoice_id', $id)->where('type', 2)->get();
        $salespersons = Salesperson::all();
        // foreach($QuotationDetails as $Qun) {
        //     $store = Store::where("site_id", $PurchaseInvoices->site_id)->where("product_id", $Qun->product_id)->first();
        //     $qunInstore = $store->qun + $Qun->qun;
        //     $store->qun = $qunInstore; // Update the 'qun' field
        //     $store->save();
        // }


        return view('Sales.Sales_invoices.newUpdate', compact('PurchaseInvoices', 'Suppliers', 'products', 'QuotationDetails', 'SR', 'sites', 'salespersons'));
    }

    public function copy($id)
    {
        // dd($id);
        $PurchaseInvoices = Sales_invoices::latest()->first();

        // dd($PurchaseInvoices);
        if ($PurchaseInvoices) {
            $count = $PurchaseInvoices->id + 1;
        } else {
            $count = 1;
        }
        $PurchaseInvoices = Sales_invoices::FindOrFail($id);
        $SR  = Client::where('id', $PurchaseInvoices->id_supplers)->first();
        $Suppliers   = Client::all();
        $products  = product::all();
        $salespersons = Salesperson::all();
        $sites     = site::all();
        $QuotationDetails  = PurchaseInvoiceDetails::where('purchase_invoice_id', $id)->where('type', 2)->get();
        return view('Sales.Sales_invoices.NewCopy', compact('PurchaseInvoices', 'Suppliers', 'products', 'QuotationDetails', 'count', 'SR', 'sites', 'salespersons'));
    }


    public function copystore(Request $request)
    {

        $data = $request->all();
        // dd($data);
        $data['type'] = 2;
        $len  = count($data['test']) / 11;
        $end   = 0;
        $start = 0;
        $group = [];
        $unit  = [];

        for ($i = 0; $i < $len; $i++) {

            $group[] = array_slice($data['test'], $start, 11, false);

            $start += 11;
        }
        // dd($group);
        $data['old_balance'] = $request->final_total;
        $data['total']       = $request->final_total;
        $data['total_b']     = $request->total;
        $data['company_id']  = auth()->user()->company_id;
        $PurchaseInvoices = Sales_invoices::create($data);
        // get 3 accounts TaxAccount and salesAccount and CliantAccount
        $accountTax    = Account::where('name', '2105 - ضريبة القيمة المضافة المستحقة')->first();
        $accountClaint = Account::where('name', '1103 - المدينون')->first();
        $accountSales  = Account::where('name', '4101 - إيرادات المبيعات/ الخدمات')->first();

        $totalamountClaint = $accountClaint->amount     - $request->total;
        $totalamountTax    = $accountTax->amount        + $request->tax_value;
        $totalamountSales  = $accountSales->amount      + $request->total_with_tax;



        // $Journal = [];
        // $Journal[] = [
        //     'journal_id' => $PurchaseInvoices->id,
        //     'type' => 2,
        //     'acount_from' => 1,
        //     'acount_to' => 2,
        // ];
        // Journal::insert($Journal);




        // 'descunt'                    => $index[3],
        foreach ($group as $index) {
            if (count($data['test']) >= 8) {
                $arr = explode("-", $index[2]);
                $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();



                $qunInstore = $store->qun - ($arr[2] * $index[1]);
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
                    'type' => 2,
                    'company_id'    => auth()->user()->company_id,
                ];
            }
        }
        // dd($unit);
        PurchaseInvoiceDetails::insert($unit);
        // fill appointments em ployees
        // dd("done");
        return redirect()->route('sales_invoices.index')->with(['success' => 'تم الحفظ بنجاح']);;
    }


    public function payment($id)
    {
        $PurchaseInvoices = Sales_invoices::FindOrFail($id);
        $Clientbond = Clientbond::latest()->first();
        // dd($PurchaseInvoices);
        if ($Clientbond) {
            $count = $Clientbond->id + 1;
        } else {
            $count = 1;
        }
        $Clients   = Client::where('id', $PurchaseInvoices->id_supplers)->get();
        $accounts  = Account::where('transactions', 1)->get();
        return view('Sales.Sales_invoices.payment', compact('PurchaseInvoices', 'Clients', 'accounts', 'count'));
    }

    public function paymentPost(Request $request)
    {
        $data = $request->all();

        // dd($data);



        $Clientbond =  Clientbond::create($data);
        $PurchaseInvoices = Sales_invoices::FindOrFail($data['PurchaseInvoices_id']);
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
        return redirect()->route('sales_invoices.index')->with(['success' => 'تم الحفظ بنجاح']);
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
        $PurchaseInvoices = Sales_invoices::findOrFail($id);
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

            for ($i = 0; $i < $len; $i++) {

                $groupold[] = array_slice($data['old'], $startold, 12, false);

                $startold += 12;
            }
            // dd($groupold);
            // get deleted array

            $QuotationDetails = PurchaseInvoiceDetails::where('purchase_invoice_id', $id)
                ->where('type', 2)
                ->pluck('id');
            // dd($QuotationDetails);
            foreach ($groupold as $index) {
                echo "dasdas";
                $arr    = explode("-", $index[3]);


                $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();
                $qunold =  PurchaseInvoiceDetails::where('purchase_invoice_id', $id)
                    ->where('type', 2)->first();
                $oldarr = explode("-", $qunold->price_unit_id);
                $resNew = ($index[2] * $arr[2]);
                if ($PurchaseInvoices->site_id == $request->site_id) {

                    // dd("site not change");
                    if ($qunold->qunXunit > $resNew) {
                        // dd("f1") ;
                        $result = $qunold->qunXunit - $resNew;

                        $qunInstore = $store->qun + $result;
                        $store->qun = $qunInstore; // Update the 'qun' field
                        $store->save();
                    } else if ($qunold->qunXunit < $resNew) {
                        // dd("f2");
                        $result = $resNew - $qunold->qunXunit;
                        // dd($result);
                        $qunInstore = $store->qun - $result;
                        $store->qun = $qunInstore; // Update the 'qun' field
                        $store->save();
                    }
                } else {
                    $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();



                    $qunInstore = $store->qun - $resNew;
                    $store->qun = $qunInstore; // Update the 'qun' field
                    $store->save();

                    // dd($store);


                    $store2 = Store::where("site_id", $PurchaseInvoices->site_id)->where("product_id", $index[0])->first();



                    $qunInstore2 = $store2->qun + $resNew;
                    $store2->qun = $qunInstore2; // Update the 'qun' field
                    $store2->save();
                    // dd($store2);
                }



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

                PurchaseInvoiceDetails::where("id", $index[1])
                    ->where('type', 2)
                    ->update($unitold);

                echo $oldcounter;
            }

            $elementsToDelete = array_diff($QuotationDetails->toArray(), $new);
            PurchaseInvoiceDetails::whereIn('id', $elementsToDelete)->delete();
        } else {
            PurchaseInvoiceDetails::where('purchase_invoice_id', $id)->delete();
        }
        // $QuotationDetails->save();

        // new data
        if (isset($data['test'])) {



            $len  = count($data['test']) / 11;
            $end   = 0;
            $start = 0;
            $group = [];
            $unit  = [];

            for ($i = 0; $i < $len; $i++) {

                $group[] = array_slice($data['test'], $start, 11, false);

                $start += 11;
            }

            //   dd($group);

            foreach ($group as $index) {
                if (count($data['test']) >= 8) {
                    $arr = explode("-", $index[2]);
                    // $resNew = ($index[2] * $arr[2]);
                    $store = Store::where("site_id", $data['site_id'])->where("product_id", $index[0])->first();



                    $qunInstore = $store->qun - $resNew;
                    $store->qun = $qunInstore; // Update the 'qun' field
                    $store->save();


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
                        'type' => 2,
                        // 'qunXunit' => $resNew,
                    ];
                }
            }

            // dd($unit);
            PurchaseInvoiceDetails::insert($unit);
        }


        //update in db
        $PurchaseInvoices->update($data);
        return redirect()->route('sales_invoices.index')->with(['success' => 'تم تحديث بيانات  بنجاح']);
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
            $PurchaseInvoices = Sales_invoices::find($id);
            $deleted =  $PurchaseInvoices->delete();
            if (!$deleted) {
                return redirect()->route('sales_invoices.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('sales_invoices.index')->with(['success' => 'تم حذفبنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('sales_invoices.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }


    public function filtter($PurchaseInvoices,  $request)
    {
        if ($request->code)
            $PurchaseInvoices->where('code', 'like', '%' . $request->code . '%');


        if ($request->site)
            $PurchaseInvoices->where('site_id', $request->site);


        if ($request->name) {
            $Client = Client::where('name', 'like', '%' . $request->name . "%")->first();

            $PurchaseInvoices->where('id_supplers', $Client->id);
        }

        if ($request->status ==  3) {

            $PurchaseInvoices->whereColumn('total', '=', 'old_balance');
            $PurchaseInvoices->where('total', '!=', 0);
            $PurchaseInvoices->where('done', '!=', '0');
        }

        if ($request->status ==  4) {

            $PurchaseInvoices->where('total', 0);
            $PurchaseInvoices->where('done', '!=', '0');
        }
        if ($request->status ==  5) {

            $PurchaseInvoices->where('total', "!=", 0);
            $PurchaseInvoices->whereColumn('total', '<', 'old_balance');
            $PurchaseInvoices->where('done', '!=', '0');
        }
        if ($request->status ==  6) {

            $PurchaseInvoices->where('done', 0);
        }



        if ($request->date == 1) {
            if ($request->start_date)
                $PurchaseInvoices->where('Date_start', '>=', $request->start_date);

            if ($request->end_date)
                $PurchaseInvoices->where('Date_start', '<=', $request->end_date);
        } elseif ($request->date == 2) {
            if ($request->start_date)
                $PurchaseInvoices->where('Date_end', '>=', $request->start_date);

            if ($request->end_date)
                $PurchaseInvoices->where('Date_end', '<=', $request->end_date);
        } else {

            if ($request->start_date)
                $PurchaseInvoices->where('Date_start', '>=', $request->start_date);

            if ($request->end_date)
                $PurchaseInvoices->where('Date_start', '<=', $request->end_date);
        }
        return $data = Datatables()->eloquent($PurchaseInvoices->latest())
            ->addColumn('action', function ($PurchaseInvoices) {
                $premation = $PurchaseInvoices->total == $PurchaseInvoices->old_balance ? 'ok' : 'notEdit';
                $is_done   = $PurchaseInvoices->total == 0 ? 'notDeleted' : 'ok';
                return view('Sales.Sales_invoices.actions', ['type' => 'action', 'PurchaseInvoices' => $PurchaseInvoices, 'premation' => $premation, 'is_done' => $is_done]);
            })

            ->addColumn('returns', function ($PurchaseInvoices) {

                $returns = ReturnsSalesInvoices::where("purchase_invoice_id", $PurchaseInvoices)->first();

                if ($returns != "") {
                    return $returns->code;
                } else {
                    return "";
                }
            })

            ->addColumn('bonds', function ($PurchaseInvoices) {
                return Clientbond::where("PurchaseInvoices_id", $PurchaseInvoices->id)->sum("Amount");
            })

            ->editColumn('id_supplers', function ($PurchaseInvoices) {
                $Client = Client::where('id', $PurchaseInvoices->id_supplers)->first();
                return optional($Client)->name;
            })
            ->addColumn('status', function ($PurchaseInvoices) {
                $PurchaseInvoicesTotal  = $PurchaseInvoices->total;
                $PurchaseInvoicesold    = $PurchaseInvoices->old_balance;
                if ($PurchaseInvoicesTotal == 0 && $PurchaseInvoices->done != 0) {
                    return "دفعت";
                } elseif ($PurchaseInvoicesold > $PurchaseInvoicesTotal && $PurchaseInvoices->done != 0) {
                    return " دفعت جزئيا";
                } elseif ($PurchaseInvoicesTotal == 0 && $PurchaseInvoices->done != 0) {
                    return "دفعت";
                } elseif ($PurchaseInvoices->done == 0) {
                    return "مسوده";
                } else {
                    return "موافق عليه";
                }
            })

            ->toJson();
    }
    // to save data in Account_Estrictions
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
            'type' => '2',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => 0,
            'ammount_to'   => $index[9],
            'from_to'      => 1,
            'site_id'      => $PurchaseInvoices->site_id,
            'supplier_id'  => $PurchaseInvoices->id_supplers
        ];
        CcountEstrictions::create($CcountEstrictions);

        $CcountEstrictions = [
            'account_id' => $accountSales->id,
            'type' => '2',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => 0,
            'ammount_to'   => $index[7],
            'from_to'      => 1,
            'site_id'      => $PurchaseInvoices->site_id,
            'supplier_id'  => $PurchaseInvoices->id_supplers
        ];
        CcountEstrictions::create($CcountEstrictions);
        return true;
    }
}