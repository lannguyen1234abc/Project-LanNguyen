@extends('admin.home')
@section('content-right')
    
<div class="container-fluid Admin_Size_content">
    
	<h4 class="text-center"> Products </h4>
    <table class="table table-hover table-bordered text-center table-sm">
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
                @foreach($s_products as $product)
                    <tr>
                        <td> {{$product->id}} </td>
                        <td> {{$product->name}} </td>
                        <td> {{$product->producttype_id}} </td>
                        <td> {{$product->price}} </td>
                        <td> {{$product->promotion_price}} </td>
                        <td> {{$product->status}} </td>
                        
                        
                        <td >
                            <div class="d-flex flex-row justify-content-center">
                            <form action="admin/products/show/{{$product->id}}" method="GET">
                                <button class='btn btn-danger ml-2'> <i class="far fa-eye"></i> </button>
                            </form>
                            
                            <form action="admin/products/edit/{{$product->id}}" method="GET">
                                <button class='btn btn-success ml-2'> <i class="far fa-edit"></i> </button> 
                            </form>
                            
                            </div> 
                        </td> 
                    </tr>
                @endforeach
          
        </tbody>
    </table>
    <div class="row mt-4">
                    <div class="col-md-12 d-flex justify-content-center ">
                        {{$s_products->links("pagination::bootstrap-4")}}
                    </div>
                </div>
</div>


@endsection