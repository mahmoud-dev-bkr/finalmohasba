<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\Services;
use App\Account;
use App\CcountEstrictions;
use App\Clientbond;
use App\Salesperson;
use App\ReturnsSalesInvoices;
use App\Client;
use App\Store;
use App\Journal;
use App\Uint;
use App\Item;
use App\Product;
use App\PurchaseInvoiceDetails;
use App\ServiceDetails;
use App\Supplier;
use Illuminate\Support\Facades\Validator;
class ServicesController extends Controller
{
    public function getServicess (Request $request)
    {
        $PurchaseInvoices = Services::query();

        $PurchaseInvoices = $this->filtter($PurchaseInvoices, $request);

        return $PurchaseInvoices;
    }
    public function index()
    {
        $PurchaseInvoices = Services::all();
        $sites            = Site::all();
        $Clients  = Supplier::where('status', 1)->get();
        return view('Services.index', compact(
            [
                'PurchaseInvoices',
                'sites',
                'Clients'
            ]
        ));
    }

    public function create()
    {
        $count = "";
        $PurchaseInvoices = "";
        $sites = Site::all();
        $PurchaseInvoices = Services::latest()->first();
        // dd($PurchaseInvoices);
        if ($PurchaseInvoices) {
            $count = $PurchaseInvoices->id + 1; // 52
        } else {
            $count = 1;
        }
        $Clients  = Supplier::where('status', 1)
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
        return view('Services.NewCreate', compact('Clients', 'products', 'count', 'sites', 'salespersons',  'units', 'items',  'account1', 'account2'));
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $data['type'] = 2;
        $len  = count($data['test']) / 7;
        $end   = 0;
        $start = 0;
        $group = [];
        $unit  = [];

        for ($i = 0; $i < $len; $i++) {

            $group[] = array_slice($data['test'], $start, 7, false);

            $start += 7;
        }
        $data['old_balance'] = $request->final_total;
        $data['total']       = $request->final_total;
        $data['total_b']     = $request->total;
        $PurchaseInvoices = Services::create($data);
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
            'type' => '10',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => $data['total'],
            'ammount_to'   => 0,
            'from_to'      => 1,
        ];
        CcountEstrictions::create($CcountEstrictions);
        // dd($group);

        // 'descunt'                    => $index[3],
        foreach ($group as $index) {
            $unit[] = [
                'service_name'    => $index[0],
                'price_unit_id' => $index[1],
                'withDescunt'   => $index[2],
                'price_before'  => $index[3],
                'tax'           => $index[4],
                'tax_value'     => $index[5],
                'price_after'   => $index[6],
                'service_id'        => $PurchaseInvoices->id,
                'type' => 0
            ];
        }
        // dd($unit);
        ServiceDetails::insert($unit);
        // fill appointments em ployees
        // dd("done");
        return redirect()->route('Services.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    public function filtter($PurchaseInvoices,  $request)
    {
        if ($request->code)
            $PurchaseInvoices->where('code', 'like', '%' . $request->code . '%');


        if ($request->site)
            $PurchaseInvoices->where('site_id', $request->site);


        if ($request->name) {
            $Client = Supplier::where('name', 'like', '%' . $request->name . "%")->first();

            $PurchaseInvoices->where('id_supplers', $Client->id);
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
                return view('Services.actions', ['type' => 'action', 'PurchaseInvoices' => $PurchaseInvoices, 'premation' => $premation, 'is_done' => $is_done]);
            })


            ->editColumn('id_supplers', function ($PurchaseInvoices) {
                $Client = Supplier::where('id', $PurchaseInvoices->id_supplers)->first();
                return optional($Client)->name;
            })


            ->toJson();
    }

}
