<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Bill;
use App\BillDetail;
use App\Cart;
use App\Product;

use Session;

class BillController extends Controller
{
    public function index(){
        $bills = Bill::with('user')->paginate(5);
        //dd($bills);
        return view('admin.bills.index', ['bills'=>$bills]);
        
    }
    public function edit($id){
        $bill = Bill::find($id);
        return view('admin.bills.edit', ['bill'=>$bill]);
    }
    public function show($id)
    {
        $bill = Bill::find($id);
        //$bill_detail = Bill::find($id)->products;
        //return view('admin.bills.show', compact('bill', 'bill_detail' ));
        return view('admin.bills.show', ['bill'=>$bill]);
    }
    public function update(Request $request, $id)
    {
        $bill = Bill::find($id);
        
        $bill -> update([
            'customer_id' => $request ->customer_id,
            'date_order' => $request ->date_order,
            'total' => $request ->total,
            'note' => $request ->note,
            'payment' => $request ->payment
        ]);
        return redirect()->route('bills.index');
    }
    public function destroy($id)
    {
       
        Bill::destroy($id);
        return redirect()->route('bills.index');
    }


    public function getBill(){
        if(Session::has('cart')){
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart = Session::get('cart');
        }
        else{
            return view('customer.page.billdetail');
        }
        $product_cart = $cart->items;
        $totalQty = $cart->totalQty;
        $totalPrice = $cart->totalPrice;

        //dd($cart);

        return view('customer.page.billdetail', compact('cart','product_cart', 'totalQty', 'totalPrice'));
        
    }
    public function postBill(Request $rq){
        $cart = Session::get('cart');

        $customer = new User;
        $customer->name = $rq->name;
        $customer->email = $rq->email;
        $customer->phone_number = $rq->phone_number;
        $customer->address = $rq->address;
        $customer->note = $rq->note;
        $customer->save();

        

        $bill = new Bill;
        $bill->customer_id = $customer->id;
        $bill->date_order = date('y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->note = $rq->note;
        $bill->payment = $rq->payment;
        $bill->save();

        foreach( $cart->items as $key => $value){
            $bill_detail = new BillDetail;
            $bill_detail->bill_id = $bill->id;
            $bill_detail->product_id = $key;
            $bill_detail->quantity = $value['quantity'];
            $bill_detail->price = ($value['price']/$value['quantity']);
            /*$bill_detail->promotion_price = ($value['promotion_price']/$value['quantity']);*/
            $bill_detail->save();
        }

        Session::forget('cart');
        return redirect()->back()->with('thongbao', 'Mua hàng thành công. Vui lòng kiểm tra email của bạn!');
    }
}
