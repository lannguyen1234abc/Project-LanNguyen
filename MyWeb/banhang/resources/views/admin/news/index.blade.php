@extends('admin.home')
@section('content-right')

<div class="container-fluid Admin_Size_content">
    <h4 class="text-center"> News </h4>
    <table class="table table-hover table-bordered text-center table-sm">
        <thead>
            <tr>
                <th> # </th>
                <th> Title </th>
                <th> Image </th>
                <th> New </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
                @foreach($tintuc as $t)
                    <tr>
                        <td> {{$t->id}} </td>
                        <td> {{$t->title}} </td>
                        <td> {{$t->image}} 
                            <div class="Product_Image3 " style="background-image: url(banhang/image/tintuc/{{$t->image}}">
                            </div> <br>
                        </td>
                        <td> {{$t->new}} </td>
                        
                        <td >
                        <div class="d-flex flex-row justify-content-center">
                            <form action="admin/news/show/{{$t->id}}" method="GET">
                                <button class='btn btn-danger ml-2'> <i class="far fa-eye"></i> </button>
                            </form>
                            <form action="admin/news/edit/{{$t->id}}" method="GET">
                                <button class='btn btn-success ml-2'> <i class="far fa-edit"></i> </button> 
                            </form>
                            
                            <form action="admin/news/destroy/{{$t->id}}" method="POST">
                                {{csrf_field()}}
                                <input type='hidden' value='DELETE' name='_method'>
                                <button type="submit" class='btn btn-success ml-2'>     <i class="far fa-trash-alt"></i>  
                                </button> 
                               
                            </form>

                        </div>        
                        </td>
                    </tr>
                @endforeach
          
        </tbody>
    </table>
    <div class="row mt-4">
                    <div class="col-md-12 d-flex justify-content-center ">
                        {{$tintuc->links("pagination::bootstrap-4")}}
                    </div>
                </div>
</div>
@endsection