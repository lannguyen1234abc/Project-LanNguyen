<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Bill;
use App\BillDetail;
use App\Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Mail;

class BillController extends Controller
{
    public function index(){
        $bills = Bill::with('user')->orderBy('id', 'desc')->paginate(6);
        //dd($bills);
        return view('admin.bills.index', ['bills'=>$bills]);
        
    }

    public function show($id)
    {
        $bill = Bill::find($id);

        return view('admin.bills.show', compact('bill'));
    }

    public function edit($id){
        $bill = Bill::find($id);
        return view('admin.bills.edit', ['bill'=>$bill]);
    }
    
    public function update(Request $request, $id)
    {
        $bill = Bill::find($id);
      
       
        $bill->status = $request ->status;
        //$bill->customer_id = $request->customer_id;
        $bill->save();
        return redirect('admin/bills/index');
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

        if(Auth::check()){
            $id_user=Auth::id();
            $user = User::find($id_user);

            $user->name = $rq->name;
            $user->email = $rq->email;
            $user->address = $rq->address;
            $user->phone_number = $rq->phone_number;
            $user->save();
        }
        
        $bill = new Bill;
        $bill->customer_id = Auth::id();
        $bill->date_order = date('y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->note = $rq->note;
        $bill->payment = $rq->payment;
        $bill->status = $rq->status;
        $bill->save();

        foreach( $cart->items as $key => $value){
            $bill_detail = new BillDetail;
            $bill_detail->bill_id = $bill->id;
            $bill_detail->product_id = $key;
            $bill_detail->quantity = $value['quantity'];
            $bill_detail->price = ($value['price']/$value['quantity']);
            
            $bill_detail->save();
        }
        $product_cart = $cart->items;

        $data = ['name'=> $rq->name, 'address'=> $rq->address, 'phone_number'=> $rq->phone_number,
                    'sanpham'=> $product_cart, 'totalPrice'=> $cart->totalPrice,
                ];

        Mail::send('mail', $data, function($msg){
            $msg->from('lanbee220497@gmail.com', 'LUCKYCAKE');
            $msg->to(Input::get('email'), 'lan')->subject('LUCKYCAKE');
        });

        Session::forget('cart');
        return redirect()->back()->with('thongbao', 'Mua hàng thành công. Vui lòng kiểm tra email của bạn!');
    }

    public function search(Request $re){
        $q = Input::get('search');
        $total_bill = Bill::where('date_order', 'LIKE', '%' . $q . '%')->get();
        $s_bills = Bill::where('date_order', 'LIKE', '%' . $q . '%')->paginate(6);
        $s_bills->appends(['search' => $q]);
    
        $tk_total = Bill::where('date_order', 'LIKE', '%' . $q . '%')->sum('total');

        //$s_bills = Bill::search('date_order' , $re->search)->paginate(5);
        //$tk_total = Bill::search('date_order', $re->search)->sum('total');
        return view('admin.bills.search', compact('total_bill', 's_bills', 'tk_total'));
    }

   
}
