@extends('admin.home')
@section('content-right')
<div class="container mt-3">
    <div class="row"> 
        <div class="col-md-6 offset-md-3">
            <h5 class="text-info"> Slides </h5> </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <p class="mb-3 mt-3 text-success"> 
                    @if( Session::has('message')) {{Session::get('message')}}
                    @endif
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="admin/slides/update/{{$s->id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT" />
                    
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Link </b> </lable>
                        <div class="Product_Image1 " alt="" style="background-image: url(banhang/image/logo/{{$s->link}})">
                        </div> <br>
                        <input type="file" id="link" name="link" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-outline-info mb-3"> SAVE
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
    @endsection