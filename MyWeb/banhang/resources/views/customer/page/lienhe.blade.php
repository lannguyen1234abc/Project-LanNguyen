@extends('customer.layout.master')

@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-md-12 ">
            <h1 class="text-info text-center text-capitalize"> Liên hệ </h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row"> 
        <div class="col-md-6 col-12">
            <p class="mb-3 text-success"> 
                <b> @if( Session::has('ms')) {{Session::get('ms')}}
                    @endif
                </b>
            </p> 
        </div>
    </div>
    <div class="row"> 
        <div class="col-md-6 col-12">
            <p class="mb-3"> 
                <i> (Vui lòng đăng nhập tài khoản để gửi thông tin liên hệ ) </i>
            </p> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12 mb-5">
            <form action="luckycake/contact" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="POST" />
            <div class="d-flex flex-column"> 
                <div class="Bill_form-block">
                    <label for="name"> Họ tên*: </label>
                    <input type="text" id="name" name="name" placeholder="Họ tên" required="" class="Bill_input" 
                        value=" @if(Auth::check()) {{Auth::user()->name}} @endif">
                </div>
                <div class="Bill_form-block">
                    <label for="email"> Email: </label>
                    <input type="email" id="email"  name="email" required="" class="Bill_input" 
                        value=" @if(Auth::check()) {{Auth::user()->email}} @endif" readonly="">

                </div>
                <div class="Bill_form-block">
                    <label for="phone_number"> Phone_number*: </label>
                    <input type="text" id="phone_number" name="phone_number" placeholder="Phone number" required="" class="Bill_input" 
                        value=" @if(Auth::check()) {{Auth::user()->phone_number}} @endif">
                </div>
                <div class="Bill_form-block">
                    <label for="note"> Message: </label>
                    <textarea id="message" name="message" class="Bill_input" ></textarea>
                </div>
            </div>   
            <button class="btn btn-info"> Contact </button>
            </form>
        </div>

        <div class="col-md-6 col-12 mb-5">
            <div class="d-flex flex-column ml-5">
                <div>
                    <i class="fas fa-map-marker-alt mr-3"></i> <b> Địa chỉ:</b>
                    <span> 459 Tôn Đức Thắng, Liên Chiểu, Hòa Khánh </span> 
                </div>
                <div>
                    <i class="fas fa-phone-volume mr-3"></i> <b>Điện thoại:</b>
                    <span> 123456789 </span>
                </div> 
                <div>
                    <i class="fas fa-envelope mr-3"></i><b>Email:</b>
                    <span> abc@gamil.com </span>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection