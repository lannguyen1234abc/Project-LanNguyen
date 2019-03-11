@extends('admin.home')
@section('content-right')
    <div class="container mt-3">
        <div class="row"> 
            <div class="col-md-6 offset-md-3">
                <h5 class="text-info"> Thông tin loại sản phẩm </h5> 
            </div>
        </div>
        <div class="row"> 
            <div class="col-md-6 offset-md-3">
                <p class="mb-3 mt-3 text-success"> 
                @if( Session::has('thongbao')) {{Session::get('thongbao')}}
                @endif
                </p> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('producttype.update', $type->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT" />
                    <div class="mb-3 d-flex flex-column">
                        <lable> Name </lable>
                        <input type="text" id="name" placeholder="Name" name="name" value="{{$type->name}}" >
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <lable> Description </lable>
                        <textarea id="editor1" name="description" disabled></textarea>
                    </div> 

                    <button type="submit"> SAVE
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection