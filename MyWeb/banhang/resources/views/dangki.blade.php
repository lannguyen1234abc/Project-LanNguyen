@extends('customer.layout.master')

@section('content')
  <div class="container mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 d-flex justify-content-center align-items-center flex-column Border-form">
                <h1 class="text-uppercase mt-3 text-success"><font face="Comic sans MS" size="10"> register </font></h1>
                
                <form class=" d-flex flex-column mb-5 mt-5 w-100" action="{{route('postDangki')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="POST" />
                @if(count($errors) > 0)
                    <div class="alert alert-success">
                        @foreach($errors->all() as $err)
                            {{$err}}
                        @endforeach
                    </div>
                @endif
                @if( session('thanhcong'))
                    <div class="alert alert-success">
                        {{session('thanhcong')}}
                    </div>
                @endif
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fa fa-user" aria-hidden="true"></i> Name</b> </lable>
                        <input type="text" id="name" placeholder="Name" name="name">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-envelope"></i> Email</b> </lable>
                        <input type="email" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-phone"></i> Phone number</b> </lable>
                        <input type="text" id="phone_number" placeholder="Phone_number" name="phone_number">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-home"></i> Address </b> </lable>
                        <input type="text" id="address" placeholder="Address" name="address">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-lock-open"></i>Password</b> </lable>
                        <input type="password" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-sync-alt"></i> Re Password</b> </lable>
                        <input type="password" id="re_password" placeholder="Re_password" name="re_password">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-danger"> CREATE
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection