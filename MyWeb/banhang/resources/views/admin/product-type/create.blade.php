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
                <form action="admin/producttype/store" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="POST" />
                    <div class="mb-3 d-flex flex-column">
                        <lable> Name </lable> 
                        <input type="text" id="name" placeholder="Name" name="name">
                    </div>
                        
                    <div class="mb-3 d-flex flex-column">
                        <lable> Description </lable>
                        <textarea id="editor1" name="description"></textarea>
                    </div>
                    
                    <div>
                    <button type="submit"> CREATE
                    </button>
                    
                    
                </form>
            </div>
        </div>
    </div>
@endsection