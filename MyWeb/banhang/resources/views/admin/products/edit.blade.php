@extends('admin.home')
@section('content-right')
    <div class="container mt-3 mb-5">
        
        <div class="row"> 
            <div class="col-md-6 offset-md-3">
                <h5 class="text-info"> Thông tin sản phẩm </h5> </div>
            </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('products.update', $product->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT" />

                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Name </b> </lable>
                        <input type="text" id="name" placeholder="Name" name="name" value="{{$product->name}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Producttype_id </b> </lable>
                        <input type="text" id="producttype_id" placeholder="Producttype_id" name="producttype_id" value="{{$product->producttype_id}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Description </b> </lable>
                        <input type="text" id="description" placeholder="Description" name="description" value="{{$product->description}}"> 
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Price </b> </lable>
                        <input type="text" id="price" placeholder="Price" name="price" value="{{$product->price}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Promotion_price </b> </lable>
                        <input type="text" id="promotion_price" placeholder="Promotion_price" name="promotion_price" value="{{$product->promotion_price}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Image </b> </lable>
                        <input type="text" id="image" placeholder="Image" name="image" value="{{$product->image}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Unit </b> </lable>
                        <input type="text" id="unit" placeholder="Unit" name="unit" value="{{$product->unit}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> New </b></lable>
                        <input type="text" id="new" placeholder="New" name="new" value="{{$product->new}}">
                    </div>

                    <button type="submit"> SAVE
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection