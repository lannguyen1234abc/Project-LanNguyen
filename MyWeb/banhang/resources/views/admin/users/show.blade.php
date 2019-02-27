@extends('admin.home')
@section('content-right')
<div class="container">
<h1 class="text-center"> Users </h1>
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Email </th>
                <th> Phone_number </th>
                <th> Address </th>
                <th> Note </th>
                <th> Role </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
               
                    <tr>
                        <td> {{$user->id}} </td>
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td> {{$user->phone_number}} </td>
                        <td> {{$user->address}} </td>
                        <td> {{$user->note}} </td>
                        <td> {{$user->role}} </td>
                        <td class="d-flex flex-row justify-content-center">
                            
                            <form action="{{route('users.edit', $user->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> <i class="far fa-edit"></i> </button> 
                            </form>
                            
                        </td>
                    </tr>
               
          
        </tbody>
    </table>
</div>

@endsection