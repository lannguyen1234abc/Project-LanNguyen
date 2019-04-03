@extends('admin.home')
@section('content-right')

<div class="container-fluid Admin_Size_content">
    <h4 class="text-center"> Bills </h4>
    <div class="row mb-3">
        <div class="col-md-12 d-flex flex-row">
            <div class="d-flex align-items-center mr-3"> Tìm kiếm: </div> 
            <form action="admin/bills/search-bill" method="GET" class="d-flex flex-row mr-3">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search" name="search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-dark"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
    <table class="table table-hover table-bordered text-center table-sm">
        <thead>
            <tr>
                <th> # </th>
                <th> Customer </th>
                <th> Date_order </th>
                <th> Total </th>
                <th> Note </th>
                <th> Payment </th>
                <th> Status </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach($bills as $bill)
            <tr>
                <td> {{$bill->id}} </td>
                <td> {{$bill->user->name}} </td>
                <td> {{$bill->date_order}} </td>
                <td> {{number_format($bill->total)}} </td>
                <td> {{$bill->note}} </td>
                <td> {{$bill->payment}} </td>
                <td class="text-danger"> {{$bill->status}} </td>
                
                <td >
                    <div class="d-flex flex-row justify-content-center">
                        <form action="admin/bills/show/{{$bill->id}}" method="GET">
                            <button class='btn btn-danger ml-2'> <i class="far fa-eye"></i> </button>
                        </form>

                    </div> 
                </td> 

            </tr>
            @endforeach

        </tbody>
    </table>
    <div class="row mt-4">
        <div class="col-md-12 d-flex justify-content-center ">
            {{$bills->links("pagination::bootstrap-4")}}
        </div>
    </div>
</div>


@endsection