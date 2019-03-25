@extends('admin.home')
@section('content-right')

<div class="container-fluid Admin_Size_content">
    <h4 class="text-center"> News </h4>
    <table class="table table-hover table-bordered text-center ">
        <thead>
            <tr>
                <th> # </th>
                <th> Title </th>
                <th> Content </th>
                <th> Image </th>
                <th> New </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> {{$tintuc->id}} </td>
                <td> {{$tintuc->title}} </td>
                <td> {!!$tintuc->content!!} </td>
                <td> {{$tintuc->image}} 
                    <div class="Product_Image3 " style="background-image: url(banhang/image/tintuc/{{$tintuc->image}}">
                    </div> <br>
                </td>
                <td> {{$tintuc->new}} </td>
                <td >
                    <div class="d-flex flex-row justify-content-center">
                        <form action="admin/news/edit/{{$tintuc->id}}" method="GET">
                            <button class='btn btn-success ml-2'> <i class="far fa-edit"></i> </button> 
                        </form>

                        <form action="admin/news/destroy/{{$tintuc->id}}" method="POST">
                            {{csrf_field()}}
                            <input type='hidden' value='DELETE' name='_method'>
                            <button type="submit" class='btn btn-success ml-2'>     <i class="far fa-trash-alt"></i>  
                            </button> 
                        </form>

                    </div>        
                </td>
            </tr>


        </tbody>
    </table>
    
</div>
@endsection