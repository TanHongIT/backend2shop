<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;

class CartController extends Controller
{
    public function add(Request $request){
        $product = Product::find($request->id);

        Cart::add($product->id, $product->product_name, $product->product_price, 1, array());

        return back()->with('success',"$product->product_name has successfully beed added to the shopping cart!");;
    }

    public function cart(){
        $params = [
            'title' => 'Shopping Cart Checkout',
        ];

        return view('pages.product.cart')->with($params);
    }

    public function clear(){
        Cart::clear();

        return back()->with('success',"The shopping cart has successfully beed added to the shopping cart!");;
    }
}
