@extends('admin.home')
@section('content-right')
    
<div class="container-fluid Admin_Size_content">
<h1 class="text-center"> Products </h1>
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Producttype_id </th>
                <th> Price </th>
                <th> Promotion_price </th>
                <th> Image </th>
                <th> Unit </th>
                <th> New </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
                @foreach($products as $product)
                    <tr>
                        <td> {{$product->id}} </td>
                        <td> {{$product->name}} </td>
                        <td> {{$product->producttype_id}} </td>
                        <td> {{$product->price}} </td>
                        <td> {{$product->promotion_price}} </td>
                        <td> {{$product->image}} </td>
                        <td> {{$product->unit}} </td>
                        <td> {{$product->new}} </td>
                        
                        
                        <td >
                            <div class="d-flex flex-row justify-content-center">
                            <form action="{{route('products.show', $product->id)}}" method="GET">
                                <button class='btn btn-danger ml-2'> SHOW </button>
                            </form>
                            
                            <form action="{{route('products.edit', $product->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> EDIT </button> 
                            </form>
                            

                            <form action="{{route('products.destroy', $product->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type='hidden' value='DELETE' name='_method'>
                                <button type='submit' class='btn btn-warning ml-2'> DELETE </button>
                            </form>
                            </div> 
                        </td> 
                    </tr>
                @endforeach
          
        </tbody>
    </table>
    <div class="row mt-5">
                    <div class="col-md-12 d-flex justify-content-center display-5">
                        {{$products->links("pagination::bootstrap-4")}}
                    </div>
                </div>
</div>


@endsection