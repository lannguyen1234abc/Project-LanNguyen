@extends('admin.home')
@section('content-right')
<div class="container">
<h1 class="text-center"> Products </h1>
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Tên sản phẩm </th>
                <th> Số lượng </th>
                <th> Price </th>
                
            </tr>
        </thead>
        <tbody>
        
                @foreach($bill->products as $pr)
                    <tr>
                        <td> {{$bill->id}}
                        <td> {{$pr->name}} </td>
                        <td> {{$pr->pivot->quantity}} </td>
                        <td> {{$pr->pivot->price}} </td>
                         
                    </tr>
                @endforeach
          
        </tbody>
    </table>
</div>

@endsection