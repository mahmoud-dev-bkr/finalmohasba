<?php

namespace App\Http\Controllers\POS;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Item;
use App\Product;
use Illuminate\Http\Request;

class PosController extends Controller
{
    public function index()
    {
        $categories = Item::all();
        $products   = Product::all();
        $carts      = Cart::where('user_id', auth()->user()->id)->get() ?? [];
        return view('pos.index', compact('categories', 'products' , 'carts'));
    }
    public function getProducts($category_id)
    {
        $products = Product::where('id_des', $category_id)->get();
        $res = [
            'resultCheckout' => view('pos.include.products', compact('products'))
        ];
        return response()->json($products);
    }

    public function chackout(Request $request) {
        $data  = $request->all();
        foreach ($data['test'] as $cart) {
            $cartData  = Cart::where('id', $cart['id'])->first();
            $cartData->update($cart);
        }

        return redirect()->route('checkout.view.pos')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }
     
    public function chackoutview(Request $request) {
        $carts  = Cart::where('user_id', auth()->user()->id)->get() ?? [];
        $count  = 0;
        $total  = Cart::where('user_id', auth()->user()->id)->sum('price');
        return view('pos.checkout', compact([
            'carts' ,
            'count',
            'total'
        ]));
    }
}
