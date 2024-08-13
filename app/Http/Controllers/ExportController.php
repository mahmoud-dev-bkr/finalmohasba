<?php

namespace App\Http\Controllers;

use App\Exports\ExportClientbonds;
use App\Exports\ExportClients;
use App\Exports\ExportQuotation;
use App\Exports\ExportSupplier;
use App\Exports\ExportPurchase_Invoices;
use App\Exports\ExportSupplierbonds;
use App\Exports\ExportSalesinvoices;
use App\Exports\ExportPurchase_orders;
use App\Exports\ExportReturnsSalesInvoices;
use App\Exports\ExportReturnsPurchase_Invoices;


use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function ExportClients (Request $request)
    {
        
        return Excel::download(new ExportClients, 'Clients.xlsx');
    }
    public function ExportClientbonds ()
    {
        return Excel::download(new ExportClientbonds, 'Clientbonds.xlsx');
    }
    public function downloadQuotationExcel(Request $request)
    {
      $ExportSalesinvoices = new ExportQuotation($request);
        // $ExportSalesinvoices = new ExportSalesinvoices($request->code,$request->name, $request->status,$request->date,$request->start_date,$request->end_date, $request->site);
        // $ExportSalesinvoices = new ExportSalesinvoices($request);
        return Excel::download($ExportSalesinvoices, 'Quotation.xlsx');
    }

    public function downloadSupplierExcel()
    {
        return Excel::download(new ExportSupplier, 'Supplier.xlsx');
    }
    public function ExportPurchase_Invoices(Request $request)
    {
        $ExportSalesinvoices = new ExportPurchase_Invoices($request);
        return Excel::download($ExportSalesinvoices, 'Purchase_Invoices.xlsx');
    }

    public function ExportSupplierbonds()
    {
        return Excel::download(new ExportSupplierbonds, 'Supplierbonds.xlsx');
    }

    public function ExportPurchase_orders(Request $request)
    {
          $ExportSalesinvoices = new ExportPurchase_orders($request);
        // $ExportSalesinvoices = new ExportSalesinvoices($request->code,$request->name, $request->status,$request->date,$request->start_date,$request->end_date, $request->site);
        // $ExportSalesinvoices = new ExportSalesinvoices($request);
        return Excel::download($ExportSalesinvoices, 'Purchase_orders.xlsx');
    }
    public function ExportSalesinvoices(Request $request)
    {
        $ExportSalesinvoices = new ExportSalesinvoices($request);
        
        return Excel::download($ExportSalesinvoices, 'Salesinvoices.xlsx');
    }
    public function ExportReturnsPurchase_Invoices(Request $request)
    {
        $ExportSalesinvoices = new ExportReturnsPurchase_Invoices($request);
        return Excel::download($ExportSalesinvoices, 'Salesinvoices.xlsx');
    }






}
