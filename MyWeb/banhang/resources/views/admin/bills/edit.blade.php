@extends('admin.home')
@section('content-right')
    <div class="container mt-3">
        <div class="row"> 
            <div class="col-md-6 offset-md-3">
                <h5 class="text-info"> Thông tin bills </h5> </div>
            </div>
        
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('bills.update', $bill->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT" />
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Customer_id </b> </lable>
                        <input type="text" id="customer_id" placeholder="Customer_id " name="customer_id " value="{{$bill->customer_id }}">
                            
                        <lable> <b> Date_order </b> </lable>
                        <input type="text" id="date_order" placeholder="Date_order" name="date_order" value="{{$bill->date_order}}">

                        <lable> <b> Total </b> </lable>
                        <input type="text" id="total" placeholder="Total" name="total" value="{{$bill->total}}">

                        <lable> <b> Note </b> </lable>
                        <input type="text" id="note" placeholder="Note" name="note" value="{{$bill->note}}">

                        <lable> <b> Payment </b> </lable>
                        <input type="text" id="payment" placeholder="Payment" name="payment" value="{{$bill->payment}}">

                    </div>
                        

                    <button type="submit"> SAVE
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection