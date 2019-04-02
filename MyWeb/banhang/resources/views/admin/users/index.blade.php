@extends('admin.home')
@section('content-right')

<div class="container-fluid Admin_Size_content">
    <h4 class="text-center"> Users </h4>
    <div class="row mb-3">
        <div class="col-md-12 d-flex flex-row">
            <div class="d-flex align-items-center mr-3"> Tìm kiếm: </div> 
            <form action="admin/users/search-user" method="GET" class="d-flex flex-row mr-3">
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
                <th> Name </th>
                <th> Email </th>
                <th> Phone_number </th>
                <th> Address </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td> {{$user->id}} </td>
                <td> {{$user->name}} </td>
                <td> {{$user->email}} </td>
                <td> {{$user->phone_number}} </td>
                <td> {{$user->address}} </td>

                <td >
                    <div class="d-flex flex-row justify-content-center">
                        <form action="admin/users/show/{{$user->id}}" method="GET">
                            <button class='btn btn-danger ml-2'> <i class="far fa-eye"></i> </button>
                        </form>    

                        <form action="admin/users/edit/{{$user->id}}" method="GET">
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
            {{$users->links("pagination::bootstrap-4")}}
        </div>
    </div>
</div>
@endsection