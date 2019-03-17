@extends('admin.home')
@section('content-right')

<div class="container-fluid Admin_Size_content">
    <h4 class="text-center"> Users </h4>
    <table class="table table-hover table-bordered text-center ">
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
                            <form action="{{route('users.show', $user->id)}}" method="GET">
                                <button class='btn btn-danger ml-2'> <i class="far fa-eye"></i> </button>
                            </form>    

                            <form action="{{route('users.edit', $user->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> <i class="far fa-edit"></i> </button> 
                            </form>
                        <!--
                            <form action="{{route('users.destroy', $user->id)}}" method="POST">
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
                        {{$users->links("pagination::bootstrap-4")}}
                    </div>
                </div>
</div>
@endsection