<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Cart;

use Session;

class CartController extends Controller
{
    public function show(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $cart = Session::get('cart');
        $product_cart = $cart->items;
        $totalPrice = $cart->totalPrice;

        return view('customer.page.cart', compact('cart','product_cart', 'totalPrice'));
    }
    public function getAddtoCart(Request $req, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        
        $req->session()->put('cart', $cart );

        //dd($cart);
        return redirect()->back();
    }
    public function destroy($id){
        $product = Product::find($id);
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        
        Session::put('cart', $cart);

        //dd($cart);
        return redirect()->back();
    }
    
}
