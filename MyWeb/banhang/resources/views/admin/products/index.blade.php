@extends('admin.home')
@section('content-right')
    
<div class="container-fluid Admin_Size_content">
    
<h4 class="text-center"> Products </h4>
<div class="row">
            <div class="col-md-6 offset-md-3">
                <p class="mb-3 mt-3 text-success"> 
                @if( Session::has('thongbao')) {{Session::get('thongbao')}}
                @endif
                </p>
            </div>
</div>
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Producttype_id </th>
                <th> Price </th>
                <th> Promotion_price </th>
                <th> Status </th>
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
                        <td> {{$product->status}} </td>
                        
                        
                        <td >
                            <div class="d-flex flex-row justify-content-center">
                            <form action="{{route('products.show', $product->id)}}" method="GET">
                                <button class='btn btn-danger ml-2'> <i class="far fa-eye"></i> </button>
                            </form>
                            
                            <form action="{{route('products.edit', $product->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> <i class="far fa-edit"></i> </button> 
                            </form>
                            
                        <!--
                            <form action="{{route('products.destroy', $product->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type='hidden' value='DELETE' name='_method'>
                                <button type="submit" class='btn btn-success ml-2'> <i class="far fa-trash-alt"></i>  </button> 
                            </form>
                        -->
                            </div> 
                        </td> 
                    </tr>
                @endforeach
          
        </tbody>
    </table>
    <div class="row mt-4">
                    <div class="col-md-12 d-flex justify-content-center ">
                        {{$products->links("pagination::bootstrap-4")}}
                    </div>
                </div>
</div>


@endsection