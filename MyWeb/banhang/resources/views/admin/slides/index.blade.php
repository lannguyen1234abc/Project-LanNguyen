@extends('admin.home')
@section('content-right')

<div class="container-fluid Admin_Size_content">
    <h4 class="text-center"> Slides </h4>
    <table class="table table-hover table-bordered text-center table-sm">
        <thead>
            <tr>
                <th> # </th>
                <th> Link </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
                @foreach($slides as $s)
                    <tr>
                        <td> {{$s->id}} </td>
                        <td> {{$s->link}} 
                            <div class="Product_Image3 " style="background-image: url(banhang/image/logo/{{$s->link}}">
                            </div> <br>
                        </td>
                        
                        <td >
                        <div class="d-flex flex-row justify-content-center">
                            <form action="admin/slides/edit/{{$s->id}}" method="GET">
                                <button class='btn btn-success ml-2'> <i class="far fa-edit"></i> </button> 
                            </form>
                            
                            <form action="admin/slides/destroy/{{$s->id}}" method="POST">
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
                        {{$slides->links("pagination::bootstrap-4")}}
                    </div>
                </div>
</div>
@endsection