<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;

class CartController extends Controller
{
   /*public function index(){
       $cart = Cart::with('products')->get();
      
       return view('customer.page.cart', ['cart'=>$cart]);
   }*/

   public function show($customer_id)
    {
        $cart = User::find($customer_id)->cart;
        dd($cart);
        /*$cart_id = $cart->cart_id;
        $cart_details = Cart::find($cart_id)->products;
        dd($cart_details);*/
        return view('customer.page.cart',['cart_details'=>$cart_details,'cart_id'=>$cart_id]);
    }

    public function cart(){
        
    }
}
