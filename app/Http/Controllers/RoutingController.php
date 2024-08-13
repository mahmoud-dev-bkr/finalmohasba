<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Client;
use App\Supplier;
use App\PurchaseInvoices;
use App\Sales_invoices;
use App\Site;


class RoutingController extends Controller
{


    // public function __construct()
    // {
    //      $this->middleware('auth')->except('index');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('auth/login');
    }

    /**
     * Display a view based on first route param
     *
     * @return \Illuminate\Http\Response
     */
    public function root($first)
    {
        if($first =='dashboard') {
            
            $Client   = Client::all();
            $Product   = Product::all();
            $Supplier   = Supplier::all();
            $PurchaseInvoices   = PurchaseInvoices::all();
            $sales_invoices   = sales_invoices::all();
            $Site   = Site::all();
            $totalPatmentSales = sales_invoices::all()->sum("total");
            $totalNotPaymentSales = sales_invoices::all()->sum("old_balance");
            $resultPaymentsDesSales = number_format(($totalPatmentSales == 0 ? 1 : $totalPatmentSales / $totalNotPaymentSales ) * 100);
            // Mohtriat
            $totalPatmentMosh = PurchaseInvoices::all()->sum("total");
            $totalNotPaymentMosh = PurchaseInvoices::all()->sum("old_balance");
            $resultPaymentsDesMosh = number_format(($totalPatmentMosh == 0 ? 1 : $totalPatmentMosh / $totalNotPaymentMosh ) * 100);
            
            
            // dd($totalPatmentMosh);
            
            return view('dashboard',compact(
                [
                 'Client','Product',
                 'Supplier','PurchaseInvoices',
                 'sales_invoices','Site', 'resultPaymentsDesSales', 'resultPaymentsDesMosh'
                ]
            ));
        }

        if ($first != 'assets')
            return view($first);


        return view('index');
    }

    /**
     * second level route
     */
    public function secondLevel($first, $second)
    {
        if($first == 'auth' && $second == 'login' && auth()->user()){
            return redirect('/dashboard');
        }
        if ($first != 'assets')
            return view($first . '.' . $second);
        return view('index');
    }

    /**
     * third level route
     */
    public function thirdLevel($first, $second, $third)
    {
        if ($first != 'assets')
            return view($first . '.' . $second . '.' . $third);
        return view('index');
    }
}
