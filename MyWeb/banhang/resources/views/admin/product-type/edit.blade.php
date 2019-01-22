@extends('admin.home')
@section('content-right')
    <div class="container mt-3">
        <div class="row"> 
            <div class="col-md-6 offset-md-3">
                <h5 class="text-info"> Thông tin loại sản phẩm </h5> </div>
            </div>
        
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('producttype.update', $type->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT" />
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Name </b> </lable>
                            <input type="text" id="name" placeholder="Name" name="name" value="{{$type->name}}">
                            <lable> <b> Description </b> </lable>
                            <input type="text" id="description" placeholder="Description" name="description" value="{{$type->description}}">
                        </div>
                        

                    <button type="submit"> SAVE
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection