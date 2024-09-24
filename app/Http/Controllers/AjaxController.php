<?php

namespace App\Http\Controllers;
use App\Client;
use App\Site;
use App\Product;
use App\Store;
use App\Sales_invoices;
use App\Clientbond;
use App\Uint;
use App\Inventory;
use App\Account;
use App\ProductUint;

use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AjaxController extends Controller
{
   public function QunItemsInStore(Request $request)
   {
        // dd($request);

        if($request->product_id == "") {
            $Product = Product::with('productUnits', 'unit', 'prices.unit', 'prices.site')->first();
        } else {
            $Product = Product::with('productUnits', 'unit', 'prices.unit', 'prices.site')->find($request->product_id);
        }



        $ProductUint  = ProductUint::with('unitproductUnit')->where('id_product',$request->product_id)->get();
        $Product->productUnits = $ProductUint ?? "";
         $Clients = Client::where('status', 1)
         ->where(function($query) use ($request) {
             $query->where('site_id', $request->site_id)
                   ->orWhere('site_id', 0);
         })
         ->get();
        $Product->client = $Clients;
        $store        = Store::where("site_id",$request->site_id)->where("product_id", $request->product_id)->first();
        // dd($Product->productUnits);
        if ($store){

            $p            = Uint::where("id", $Product->id_unit)->first();
            $Product->id_unit    = $p->name;
            $Product->qun        = $store->qun;
        } else {

            $p                   = Uint::where("id", $Product->id_unit)->first();
            $Product->id_unit    = $p->name;
            $Product->qun        = 0;
        }
        // dd($Product->qun);
        return response()->json($Product);
   }

   public function checkQun (Request $request)
   {
       $store  = Store::where("site_id",$request->site_id)->where("product_id", $request->product_id)->first();
       return response()->json($store);
   }

   public function paymentInvoices($id)
   {

       // get all data
       $PurchaseInvoices = Sales_invoices::FindOrFail($id);
        $Clientbond = Clientbond::latest()->first() ;
        // dd($PurchaseInvoices);
        if ($Clientbond) {
            $count = $Clientbond->id + 1 ;
        } else {
            $count = 1;
        }
        $Clients   = Client::where('id', $PurchaseInvoices->id_supplers)->get();
        $accounts  = Account::where('transactions', 1)->get();

        return  response()->json(compact('PurchaseInvoices', 'Clients', 'accounts', 'count'));

   }


}
