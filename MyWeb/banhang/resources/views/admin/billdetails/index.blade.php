@extends('admin.home')
@section('content-right')
    
<div class="container-fluid Admin_Size_content">
<h4 class="text-center"> Bill Detail </h4>
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Bill_id </th>
                <th> Product_id </th>
                <th> Quantity </th>
                <th> Price </th>
                
            </tr>
        </thead>
        <tbody>
                @foreach($billdetails as $bd)
                    <tr>
                        <td> {{$bd->id}} </td>
                        <td> {{$bd->bill_id}} </td>
                        <td> {{$bd->product_id}} </td>
                        <td> {{$bd->quantity}} </td>
                        <td> {{$bd->price}} </td>
                        
                    </tr>
                @endforeach
          
        </tbody>
    </table>
    <div class="row mt-4">
                    <div class="col-md-12 d-flex justify-content-center ">
                        {{$billdetails->links("pagination::bootstrap-4")}}
                    </div>
                </div>
</div>


@endsection