@extends('admin.home')
@section('content-right')
    <div class="container mt-3">
    <div class="row"> 
            <div class="col-md-6 offset-md-3">
                <h5 class="text-info"> Thông tin người dùng </h5> </div>
            </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('users.update', $user->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT" />
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Name </b> </lable>
                        <input type="text" id="name" placeholder="Name" name="name" value="{{$user->name}}">
                    </div>
                    
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Email </b> </lable>
                        <input type="email" id="email" placeholder="Email" name="email" value="{{$user->email}}">
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Phone_number </b> </lable>
                        <input type="text" id="phone_number" placeholder="Phone_number" name="phone_number" value="{{$user->phone_number}}">
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Address </b> </lable>
                        <input type="text" id="address" placeholder="Address" name="address" value="{{$user->address}}">
                    </div>

                    <button type="submit"> SAVE
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection