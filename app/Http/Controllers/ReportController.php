<?php

namespace App\Http\Controllers;

use App\Account;
use App\Clientbond;
use App\EasyRestriction;
use App\PurchaseInvoices;
use App\Sales_invoices;
use App\Supplierbond;
use App\Journal;
use App\Product;
use App\site;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Store;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Reports.index');
    }

    public function ReportRestriction() {
        $Journals = Journal::all();
        return view('Reports.ReportRestriction', compact('Journals'));
    }

    public function Statement() {
        $Accounts = Account::tree();
        return view('Reports.Statement.index', compact([
            'Accounts'
        ]));
    }

    public function ReportTeacher(Request $request) {
        $Accounts = Account::ReportTe();
        if ($request->Accountname || $request->level || $request->code || $request->type) {
            $Accounts = Account::SearchWithAttributes($request->Accountname, $request->level, $request->code ,$request->type);
            // dd($Accounts);
        }
        return view('Reports.Report1_Tec.index', compact([
            'Accounts'
        ]));
    }
    public function Report3(Request $request) {
        $sitesfilter    = [];
        $currentYear = Carbon::now()->year;
        $startquartertDate = Carbon::create($currentYear, 1, 1);  // January 1
        $endquarterDate = Carbon::create($currentYear, 12, 31);  
        $Accounts = Account::tree();
        $sites    = site::all();
        if ($request->sites) {
            $sitesfilter = site::whereIn('id',$request->sites)->get();
            
        }
        if ($request->quarterNumber != "") {
            
            $date = $this->getQuarterDates($request->quarterNumber);
            $startquartertDate = $date['startDate'];
            $endquarterDate   = $date['endDate'];

        } 
        return view('Reports.Report3.index', compact([
            'Accounts',
            'sites',
            'sitesfilter',
            'startquartertDate',
            'endquarterDate'
        ]));
    }

    public function Report1() {

        return view('Reports.reportsHtml.report1');

    }

    public function Report2() {
        $AccountRevenue  = Account::getChildren(73);
        $totalaccountRevenue = 0;
        $AccountNotCost  = Account::getChildren(102);
        $totalaccountNotCost = 0;
        $AccountCosts    = Account::getChildren(82);
        $totalaccountCosts = 0;
        $TotalProfit = 0;
        $NetIncomeBefore = 0;
        $total = 0;
        foreach ($AccountRevenue as $account) {
            $totalaccountRevenue += $account->amountChildren;
        }
        foreach ($AccountCosts as $account) {
            $totalaccountCosts += $account->amountChildren;
        }
        foreach ($AccountNotCost as $account) {
            $totalaccountNotCost += $account->amountChildren;
        }
        
        $TotalProfit = $totalaccountCosts - $totalaccountRevenue ;
        $NetIncomeBefore = $TotalProfit - $totalaccountNotCost;
        $total = $TotalProfit - $NetIncomeBefore;
        return view('Reports.reportsHtml.report2', compact([
            'TotalProfit'  , 'NetIncomeBefore' , 'total'
        ]));
    }

    public function Report33() {
        $Accounts = Account::tree();
        return view('Reports.reportsHtml.report3', compact([
            'Accounts'
        ]));
    }
    public function Report4() {
        $Accounts  = Account::tree();
        $totalFrom = $this->SumFromAllTree();
        $totalTo   = $this->SumToAllTree();
        return view('Reports.reportsHtml.Report4.report4', compact([
            'Accounts',
            'totalFrom',
            'totalTo'
        ]));
    }
    public function Report5() {
        return view('Reports.reportsHtml.report5');
    }
    public function Report6() {
        return view('Reports.reportsHtml.report6');
    }
    public function Report7() {
        $products = Product::all();
        return view('Reports.reportsHtml.report7', [
            'products' => $products
        ]);
    }
    public function Report8() {
        return view('Reports.reportsHtml.report8');
    }
    public function Report9() {
        return view('Reports.reportsHtml.report9');
    }
    public function Report10() {
        return view('Reports.reportsHtml.report10');
    }
    public function Report11() {
        return view('Reports.reportsHtml.report11');
    }
    public function Report12() {
        return view('Reports.reportsHtml.report12');
    }
    public function Report13() {
        return view('Reports.reportsHtml.report13');
    }
    public function Report14() {
        return view('Reports.reportsHtml.report14');
    }
    public function Report15() {
        return view('Reports.reportsHtml.report15');
    }
    public function Report16() {
        return view('Reports.reportsHtml.report16');
    }
    public function Report17() {
        return view('Reports.reportsHtml.report17');
    }
    public function Report18() {
        return view('Reports.reportsHtml.report18');
    }
    public function Report19() {
        return view('Reports.reportsHtml.report19');
    }
    public function Report20() {
        return view('Reports.reportsHtml.report20');
    }
    public function Report21() {
        return view('Reports.reportsHtml.report21');
    }
    public function Report22() {
        return view('Reports.reportsHtml.report22');
    }
    public function Report23() {
        return view('Reports.reportsHtml.report23');
    }
    public function Report24() {
        return view('Reports.reportsHtml.report24');
    }
    public function Report25() {
        return view('Reports.reportsHtml.report25');
    }
    public function Report26() {
        return view('Reports.reportsHtml.report26');
    }
    public function Report27() {
        return view('Reports.reportsHtml.report27');
    }
    public function Report28() {
        return view('Reports.reportsHtml.report28');
    }
    public function Report29() {
        return view('Reports.reportsHtml.report29');
    }


    public function SumFromAllTree()
    {
        return $amountFroms = DB::table('ccount_estrictions')
            ->where('from_to', 0)
            ->sum('ammount_from');
    }
    public function SumToAllTree()
    {
        return $amountTo = DB::table('ccount_estrictions')
            ->where('from_to', 1)
            ->sum('ammount_to');
    }

    public function getQuarterDates($quarterNumber) {
        $currentYear = Carbon::now()->year;
        switch ($quarterNumber) {
            case 1:
                $startDate = Carbon::create($currentYear, 1, 1);  // January 1
                $endDate = Carbon::create($currentYear, 3, 31);   // March 31
                break;
            case 2:
                $startDate = Carbon::create($currentYear, 4, 1);  // April 1
                $endDate = Carbon::create($currentYear, 6, 30);   // June 30
                break;
            case 3:
                $startDate = Carbon::create($currentYear, 7, 1);  // July 1
                $endDate = Carbon::create($currentYear, 9, 30);   // September 30
                break;
            case 4:
                $startDate = Carbon::create($currentYear, 10, 1); // October 1
                $endDate = Carbon::create($currentYear, 12, 31);  // December 31
                break;
            default:
                throw new \InvalidArgumentException('Invalid quarter number.');
        }

        return [
            'startDate' => $startDate,
            'endDate' => $endDate
        ];
    }

}
