@extends('admin.home')
@section('content-right')
    <div class="container mt-3">
        <div class="row"> 
            <div class="col-md-6 offset-md-3 text-center">
                <h5 class="text-info"> Users </h5> 
            </div>
        </div>
        <div class="row"> 
            <div class="col-md-6 offset-md-3">
                <p class="mb-3 mt-3 text-success"> 
                @if( Session::has('thongbao')) {{Session::get('thongbao')}}
                @endif
                </p> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="admin/users/store" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="POST" />
                    <div class="mb-3 d-flex flex-column">
                        <lable> Name </lable> 
                        <input type="text" id="name" placeholder="Name" name="name">
                    </div>
                        
                    <div class="mb-3 d-flex flex-column">
                        <lable> Email </lable>
                        <input type="text" id="email" placeholder="Email" name="email">
                    </div>
                    
                    <div class="mb-3 d-flex flex-column">
                        <lable> Phone_number </lable>
                        <input type="text" id="phone_number" placeholder="Phone_number" name="phone_number">
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <lable> Address </lable>
                        <input type="text" id="address" placeholder="Address" name="address">
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <lable> Password </lable>
                        <input type="password" id="password" placeholder="Password" name="password">
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <lable> Role </lable>
                        <input type="text" id="Role" placeholder="Role" name="role">
                    </div>

                    <div>
                    <button type="submit"> CREATE
                    </button>
                    
                    
                </form>
            </div>
        </div>
    </div>
@endsection