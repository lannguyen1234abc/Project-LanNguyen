@extends('admin.home')
@section('content-right')

<div class="container-fluid Admin_Size_content">
    <h4 class="text-center"> News </h4>
    <table class="table table-hover table-bordered text-center table-sm">
        <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Gmail </th>
                <th> Message </th>
                <th> Phone_number </th>
            </tr>
        </thead>
        <tbody>
            @foreach($contact as $ct)
            <tr>
                <td> {{$ct->id}} </td>
                <td> {{$ct->user->name}} </td>
                <td> {{$ct->user->email}} </td>
                <td> {{$ct->message}} </td>
                <td> {{$ct->user->phone_number}} </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <div class="row mt-4">
        <div class="col-md-12 d-flex justify-content-center ">
            {{$contact->links("pagination::bootstrap-4")}}
        </div>
    </div>
</div>
@endsection