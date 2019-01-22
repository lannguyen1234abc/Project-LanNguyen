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
                                <button class='btn btn-success ml-2'> EDIT </button> 
                            </form>
                            

                            <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type='hidden' value='DELETE' name='_method'>
                                <button type='submit' class='btn btn-warning ml-2'> DELETE </button>
                            </form>
                                
                        </td>
                    </tr>
               
          
        </tbody>
    </table>
</div>

@endsection