@extends('admin.master')
@section('content')

<div class="container-fluid ">
    <div class="row h-100">
    
        <div class="col-md-2 bg-secondary shadow-lg rounded Admin_Size_content-left">
                <div class="mb-3 text-white "> <h2> Dashboard </h2> </div>
                
                <div class="mb-3">
                    <a href="#demo" class="text-white Menu_Link" data-toggle="collapse"> 
                        <i class="fas fa-user mr-2"></i> 
                        Users
                    </a>
                    <div id="demo" class="collapse">
                        <ul class="text-white">
                            <li ><a class="text-white" href="admin/users/index"> List </a></li>
                            <li ><a class="text-white"  href="admin/users/create"> Add </a></li>
                        </ul>
                    </div>
                </div>
                     
                <div class="mb-3">
                    <a href="#demo1" class="text-white Menu_Link" data-toggle="collapse"> 
                        <i class="fab fa-product-hunt mr-1"></i>
                        Products
                    </a>
                    <div id="demo1" class="collapse">
                        <ul class="text-white">
                            <li ><a class="text-white"  href="admin/products/index"> List </a></li>
                            <li ><a class="text-white"  href="admin/products/create"> Add </a></li>
                        </ul>
                    </div>

                </div>

                <div class="mb-3">
                    <a href="#demo2" class="text-white Menu_Link" data-toggle="collapse"> 
                        <i class="fas fa-file-alt mr-2"></i>
                        ProductTypes
                    </a>
                    <div id="demo2" class="collapse">
                        <ul class="text-white">
                            <li ><a class="text-white"  href="admin/producttype/index"> List </a></li>
                            <li ><a class="text-white"  href="admin/producttype/create"> Add </a></li>
                        </ul>
                    </div>
                </div>

                <div class="mb-3">
                    <a href="#demo3" class="text-white Menu_Link" data-toggle="collapse"> 
                        <i class="fas fa-file-invoice-dollar mr-2"></i>
                        Bills
                    </a>
                    <div id="demo3" class="collapse">
                        <ul class="text-white">
                            <li ><a class="text-white" href="admin/bills/index"> List </a></li>
                        </ul>
                    </div>
                </div>

                <div class="mb-3">
                    <a href="#demo4" class="text-white Menu_Link" data-toggle="collapse"> 
                        <i class="fas fa-file-alt mr-2"></i>
                        News
                    </a>
                    <div id="demo4" class="collapse">
                        <ul class="text-white">
                            <li ><a class="text-white" href="admin/news/index"> List </a></li>
                            <li ><a class="text-white"  href="admin/news/create"> Add </a></li>
                        </ul>
                    </div>
                </div>    

                <div class="mb-3">
                    <a href="#demo5" class="text-white Menu_Link" data-toggle="collapse"> 
                        <i class="fas fa-file-alt mr-2"></i>
                        Contact
                    </a>
                    <div id="demo5" class="collapse">
                        <ul class="text-white">
                            <li ><a class="text-white" href="admin/contacts/index"> List </a></li>
                        </ul>
                    </div>
                </div>      

                <div class="mb-3">
                    <a href="#demo6" class="text-white Menu_Link" data-toggle="collapse"> 
                        <i class="fas fa-file-alt mr-2"></i>
                        Slides
                    </a>
                    <div id="demo6" class="collapse">
                        <ul class="text-white">
                            <li ><a class="text-white" href="admin/slides/index"> List </a></li>
                            <li ><a class="text-white"  href="admin/slides/create"> Add </a></li>
                        </ul>
                    </div>
                </div>        
        </div>

        <div class="col-md-10 Admin_Size_content-right">
            @yield('content-right')
        </div>

    </div>
</div>

@endsection

