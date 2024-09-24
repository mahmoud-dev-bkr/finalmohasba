<?php

namespace App\Http\Controllers\POS;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getProductWithItems(Request $request)
    {
        // get a products with item_id return with ajax
        $products = Product::where('id_des', $request->id)->get();

        return response()->json(
            [
                'products' => view('POS.include.products', compact('products'))->render()
            ]
        );
    }

    public function addCart(Request $request)
    {
        $cart = Cart::where('product_id',$request->product_id)->where('user_id', auth()->user()->id)->first();
        dd($cart);
        if (!$cart) {
            $cart = Cart::create([
                'product_id'   => $request->product_id,
                'user_id'      => auth()->user()->id,
                'quantity'     => 1,
                'price'        => $request->price,
                'uint_id'      => $request->uint_id
            ]);
        }

        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $total = $total  = Cart::where('user_id', auth()->user()->id)->sum('price');
        $count = 0;
        return response()->json(
            [
                'carts' => view('POS.include.cart', compact('carts', 'total', 'count'))->render()
            ]
        );
    }
    public function getCart()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $total = $total  = Cart::where('user_id', auth()->user()->id)->sum('price');
        return response()->json(
            [
                'carts' => view('POS.include.cart', compact('carts', 'total', 'count'))->render()
            ]
        );
    }
    public function removeCart(Request $request)
    {

        $cart = Cart::find($request->id);
        $cart->delete();
        $carts  = Cart::where('user_id', auth()->user()->id)->get() ?? [];
        $total = $total  = Cart::where('user_id', auth()->user()->id)->sum('price');
        $count = 0;
        return response()->json(
            [
                'carts' => view('POS.include.cart', compact('carts', 'total', 'count'))->render()
            ]
        );
    }
    public function getPrices($carts) {
        $total = 0;
        foreach ($carts as $cart) {
            // GEt Unit in the products
            $productUnits = $cart->product->prices;
            // Get first unit in the product
            $first_prices = $productUnits->first();
            // dd($first_prices);
            $total += 1 * $first_prices->price;
        }
        return $total;
    }
}
