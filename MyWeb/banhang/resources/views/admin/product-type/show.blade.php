@extends('admin.home')
@section('content-right')
<div class="container">
    
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Description </th>
                <th> Created_at </th>
                <th> Updated_at </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
               
                    <tr>
                        <td> {{$type->id}} </td>
                        <td> {{$type->name}} </td>
                        <td> {{$type->description}} </td>
                        <td> {{$type->created_at}} </td>
                        <td> {{$type->updated_at}} </td>
                        <td class="d-flex flex-row justify-content-center">
                            
                            <form action="{{route('producttype.edit', $type->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> EDIT </button> 
                            </form>
                            

                            <form action="{{route('producttype.destroy', $type->id)}}" method="POST">
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