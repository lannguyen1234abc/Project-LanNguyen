@extends('admin.master')
@section('content')

<div class="container-fluid ">
    <div class="row h-100">
    
        <div class="col-md-2 bg-secondary shadow-lg rounded Admin_Size_content-left">
                <div class="mb-3 text-white "> <h2> Dashboard </h2> </div>
                
                <div class="dropdown">
                    <a class="text-white" href="{{route('users.index')}}">
                    <i class="fas fa-user mr-2"></i>
                        Users
                    </a>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('users.create')}}"> Add </a>
                        </div>
                    </div>
                </div>
                     
                <div class="dropdown">
                    <a class="text-white" href="{{route('products.index')}}">
                    <i class="fab fa-product-hunt mr-2"></i>
                        Products
                    </a>

                    <div class="btn-group">
                        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('products.create')}}"> Add </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="text-white" href="{{route('producttype.index')}}">
                    <i class="fas fa-file-alt mr-2"></i>
                        ProductTypes
                    </a>

                    <div class="btn-group">
                        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('producttype.create')}}"> Add </a>
                        </div>
                    </div>
                </div>
                
        </div>
        <div class="col-md-10 Admin_Size_content-right">
            @yield('content-right')
        </div>

    </div>
</div>

@endsection