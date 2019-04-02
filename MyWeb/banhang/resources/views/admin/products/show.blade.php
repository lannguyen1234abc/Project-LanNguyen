@extends('admin.home')
@section('content-right')
<div class="container">
    <h1 class="text-center"> Products </h1>
    <table class="table table-hover table-bordered text-center table-sm">
        <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Type_id </th>
                <th> Description </th>
                <th> Price </th>
                <th> Promotion_price </th>
                <th> Image </th>
                <th> Unit </th>
                <th> New </th>
                <th> Status </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
         
            <tr>
                <td> {{$product->id}} </td>
                <td> {{$product->name}} </td>
                <td> {{$product->producttype_id}} </td>
                <td> {{$product->description}} </td>
                <td> {{$product->price}} </td>
                <td> {{$product->promotion_price}} </td>
                <td> {{$product->image}} 
                    <div class="Product_Image3 " alt="" style="background-image: url(banhang/image/products/{{$product->image}})">
                    </div> <br>
                </td>
                <td> {{$product->unit}} </td>
                <td> {{$product->new}} </td>
                <td> {{$product->status}} </td>
                <td class="d-flex flex-row justify-content-center">
                    
                    <form action="admin/products/edit/{{$product->id}}" method="GET">
                        <button class='btn btn-success ml-2'> <i class="far fa-edit"></i> </button>  
                    </form>
                    
                </td>
            </tr>
            
            
        </tbody>
    </table>
</div>

@endsection