@extends('admin.master')
@section('content')

<div class="container-fluid ">
    <div class="row h-100">
    
        <div class="col-md-2 bg-secondary shadow-lg rounded Admin_Size_content-left">
                <div class="mb-3 text-white "> <h2> Dashboard </h2> </div>
                
                <div class="">
                    <a class="text-white" href="{{route('users.index')}}">
                    <i class="fas fa-user mr-2"></i>
                        Users
                    </a>
                    
                </div>
                     
                <div class="d-flex flex-column">
                    <a class="text-white" href="{{route('products.index')}}">
                    <i class="fab fa-product-hunt mr-2"></i>
                        Products
                    </a>
                    <ul class="text-white">
                        <li ><a class="text-white"  href="{{route('products.create')}}"> Add </a></li>
                    </ul>
                    

                </div>
                <div class="d-flex flex-column">
                    <a class="text-white" href="{{route('producttype.index')}}">
                    <i class="fas fa-file-alt mr-2"></i>
                        ProductTypes
                    </a>
                    <ul class="text-white">
                        <li ><a class="text-white"  href="{{route('producttype.create')}}"> Add </a></li>
                    </ul>
                    
                </div>
                <div class="">
                    <a class="text-white" href="{{route('bills.index')}}">
                    <i class="fas fa-file-alt mr-2"></i>
                        Bills
                    </a>
                    
                </div>
                <div class="">
                    <a class="text-white" href="{{route('billdetails.index')}}">
                    <i class="fas fa-file-alt mr-2"></i>
                        BillDetails
                    </a>
   
                </div>
                
        </div>
        <div class="col-md-10 Admin_Size_content-right">
            @yield('content-right')
        </div>

    </div>
</div>

@endsection