@extends('admin.master')
@section('content')

<div class="container-fluid ">
    <div class="row h-100">
    
        <div class="col-md-2 bg-secondary shadow-lg rounded Admin_Size_content-left">
                <div class="mb-3 text-white "> <h2> Dashboard </h2> </div>
                
                <div class="">
                    <div class="text-white">
                    <i class="fas fa-user mr-2"></i>
                        Users
                    </div>
                    <ul class="text-white">
                        <li ><a class="text-white" href="{{route('users.index')}}"> List </a></li>
                    </ul>
                    
                </div>
                     
                <div class="d-flex flex-column">
                    <div class="text-white">
                    <i class="fab fa-product-hunt mr-2"></i>
                        Products
                    </div>
                    <ul class="text-white">
                        <li ><a class="text-white"  href="{{route('products.index')}}"> List </a></li>
                        <li ><a class="text-white"  href="{{route('products.create')}}"> Add </a></li>
                    </ul>
                    

                </div>
                <div class="d-flex flex-column">
                    <div class="text-white">
                    <i class="fas fa-file-alt mr-2"></i>
                        ProductTypes
                    </div>
                    <ul class="text-white">
                        <li ><a class="text-white"  href="{{route('producttype.index')}}"> List </a></li>
                        <li ><a class="text-white"  href="{{route('producttype.create')}}"> Add </a></li>
                    </ul>
                    
                </div>
                <div class="">
                    <div class="text-white">
                    <i class="fas fa-file-alt mr-2"></i>
                        Bills
                    </div>
                    <ul class="text-white">
                        <li ><a class="text-white" href="{{route
                        ('bills.index')}}"> List </a></li>
                    </ul>
                </div>
                <div class="">
                    <div class="text-white">
                    <i class="fas fa-file-alt mr-2"></i>
                        News
                    </div>
                    <ul class="text-white">
                        <li ><a class="text-white" href="{{route
                        ('news.index')}}"> List </a></li>
                        <li ><a class="text-white"  href="{{route('news.create')}}"> Add </a></li>
                    </ul>
                </div>        
        </div>

        <div class="col-md-10 Admin_Size_content-right">
            @yield('content-right')
        </div>

    </div>
</div>

@endsection