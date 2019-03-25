@extends('admin.home')
@section('content-right')

<div class="container-fluid Admin_Size_content">
    <h4 class="text-center"> Bills </h4>

    <div class="row mt-3 mb-3">
        <div class="col-md-12 d-flex flex-column">
            <div class="d-flex flex-row">
                <b class="mr-3"> Tổng hóa đơn: </b> {{count($s_bills)}}
            </div>
            <div class="d-flex flex-row">
                <b class="mr-3"> Tổng tiền: </b> {{number_format($tk_total)}}
            </div>
        </div>
    </div>
    
    <table class="table table-hover table-bordered text-center">
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
            @foreach($s_bills as $bill)
            <tr>
                <td> {{$bill->id}} </td>
                <td> {{$bill->user->name}} </td>
                <td> {{$bill->date_order}} </td>
                <td> {{$bill->total}} </td>
                <td> {{$bill->note}} </td>
                <td> {{$bill->payment}} </td>
                <td class="text-danger"> {{$bill->status}} </td>
                
                <td >
                    <div class="d-flex flex-row justify-content-center">
                        <form action="admin/bills/show/{{$bill->id}}" method="GET">
                            <button class='btn btn-danger ml-2'> <i class="far fa-eye"></i> </button>
                        </form>

                            <!--
                                <form action="" method="GET">
                                    <button class='btn btn-success ml-2'> <i class="far fa-edit"></i> </button> 
                                </form>
                            -->
                            
                        </div> 
                    </td> 
                </tr>
                @endforeach
                
            </tbody>
    </table>

    <div class="row mt-3">
        <div class="col-md-12 d-flex justify-content-center ">
            {{$s_bills->links("pagination::bootstrap-4")}}
        </div>
    </div>
</div>


    @endsection