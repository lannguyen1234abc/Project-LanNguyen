@extends('customer.layout.master')
@section('content')
<div class="container">
    <form action="customer/donhang/ctdonhang" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row ">
                    <a href="luckycake/trangchu" class="text-dark">
                        <p class="pr-2"><i class="fas fa-home"></i> </p>
                    </a>

                    <p class="pr-2"> <i class="fas fa-chevron-right"></i> </p>

                    <p class="pr-2"> Đặt hàng </p>

                </div>
            </div>
        </div>
        <div class="row">
            <p class="mb-3 mt-3 text-success"> 
                @if( Session::has('thongbao')) {{Session::get('thongbao')}}
                @endif
            </p>
        </div>
        <div class="row">
            <h4 class="mb-5 "> Đặt hàng </h4>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 col-12">
            @if(Auth::check()) 
               
                <div class="Bill_form-block">
                    <label for="name"> Họ tên*: </label>
                    <input type="text" id="name" name="name" placeholder="Họ tên" required="" class="Bill_input" value="{{Auth::user()->name}}">
                </div>
                <div class="Bill_form-block">
                    <label for="email"> Email: </label>
                    <input type="email" id="email"  name="email" required="" class="Bill_input" value="{{Auth::user()->email}}" readonly="">

                </div>
                <div class="Bill_form-block">
                    <label for="address"> Address*: </label>
                    <input type="text" id="address" name="address" placeholder="Address" required="" class="Bill_input" value="{{Auth::user()->address}}">
                </div>
                <div class="Bill_form-block">
                    <label for="phone_number"> Phone_number*: </label>
                    <input type="text" id="phone_number" name="phone_number" placeholder="Phone number" required="" class="Bill_input" value="{{Auth::user()->phone_number}}">
                </div>
                <div class="Bill_form-block">
                    <label for="note"> Note: </label>
                    <textarea id="note" name="note" class="Bill_input" value="{{Auth::user()->note}}"></textarea>
                </div>
            @endif
            </div>

            <div class="col-md-6 col-12">
                <div class="card ">
                    <div class="card-header"> <h4> Đơn hàng của bạn </h4> </div>
                    <ul class="list-group list-group-flush">
                    @if(Session::has('cart'))
                    @foreach($product_cart as $product)
                        <li class="list-group-item">
                            
                            <div class="Bill_card-donhang_left " alt="" style="background-image: url(banhang/image/products/{{$product['item']['image']}})">
                            </div>

                            <div class="Bill_card-donhang_right" >
                                <p class="text-danger text-capitalize"> {{$product['item']['name']}} </p>
                                <span> <b> Price: </b> {{number_format($product['item']['price'])}} đ </span>
                                <span> <b> Promotion price: </b> {{number_format($product['item']['promotion_price'])}} đ </span>
                                <span> <b> Quantity: </b> {{$product['quantity']}} </p> </span>
                            </div>
                        </li>
                    @endforeach
                    
                        <li class="list-group-item">
                            <div class="d-flex flex-row ">
                                <h4 class="pr-3"> Tổng tiền: </h4> <h4> ${{number_format(Session('cart')->totalPrice)}} đ  </h4>
                            </div>
                            
                        </li>
                    @endif
                    </ul>
                   
                </div>
                <div class="card ">
                    <div class="card-header"> <h4> Hình thức thanh toán </h4> </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="">
                                <input type="radio" name="payment" value="ATM" checked> Chuyển khoản <br>
                                <div class="d-flex flex-column pl-5">
                                    <span> Chuyển khoản đến tài khoản: </span>
                                    <span> - STK: 0400324545 </span>
                                    <span> - Chủ TK: Nguyễn Thị Lan </span>
                                    <span> - Ngân hàng Sacombank </span>
                                </div>
                            </li>
                            <li class="">
                                <input type="radio" name="payment" value="COD" checked> Thanh toán khi nhận hàng <br>
                                <div class="pl-5">
                                    <span> Nhận tiền khi giao hàng tận nơi </span>
                                    
                                </div>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-info ">
                                Hoàn thành
                            </button>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
</form>
    </div>
@endsection