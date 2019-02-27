@extends('customer.layout.master')

@section('content')
  <div class="container mb-5">
    <div class="row ">
      <div class="col-6 offset-3 d-flex justify-content-center align-items-center flex-column Border-form">
        <h1 class="text-uppercase mt-5 text-success"><font face="Comic sans MS" size="10">sign in </font></h1>
        
        <form class=" d-flex flex-column mb-5 mt-5 w-100" action="{{route('postDangnhap')}}" method="POST">
        {{ csrf_field() }}

                
                @if( session('thongbao'))
                    <div class="alert alert-danger">
                        {{session('thongbao')}}
                    </div>
                @endif

                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-envelope"></i> Email</b> </lable>
                        <input type="text" placeholder="Username" name="email">
                    </div>
                    @if($errors->has('email'))
                        <div class="alert alert-success">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                    
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-lock-open"></i>Password</b> </lable>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    @if($errors->has('password'))
                        <div class="alert alert-success">
                            {{$errors->first('password')}}
                        </div>
                    @endif
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-danger"> Sign In
                        </button>
                    </div>
                </form>
      </div>
    </div>
  </div>
  @endsection   