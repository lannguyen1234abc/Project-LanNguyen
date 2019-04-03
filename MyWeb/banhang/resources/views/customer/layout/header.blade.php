<div class="container-fluid bg-light">
        <div class="row">
            <div class="col-md-6 d-none d-md-block">
                <div class="d-flex justify-content-center align-items-center mt-2">
                    <b> <i class="fas fa-home"></i> </b>
                    <b class="pr-5"> 459 Tôn Đức Thắng, Liên Chiểu </b>
                    <b> <i class="fas fa-phone"></i> </b>
                    <b> 01234567 </b>
                </div>
            </div>
            <div class="col-md-6 col-12 ">
                <div class="d-flex justify-content-center align-items-center">
                    <form action="luckycake/search" method="GET" class="d-flex flex-row mr-3">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search" name="search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-dark"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>

                    @if(Auth::check())
                    
                    <div class="mr-3"> 
                        <a href="dangxuat" class="text-dark"> Đăng xuất </a> 
                    </div>
                    
                    <div class="mr-3"> 
                        <i class="fas fa-user text-dark"></i>  
                        <a href="" class="link"> {{Auth::user()->name}}  </a> 
                    </div>
                    
                    @else
                    <div class="mr-3"> 
                        <a href="dangki" class="text-dark"> Đăng kí </a> 
                    </div>
                    <div class="mr-3"> 
                        <a href="dangnhap" class="text-dark"> Đăng nhập </a>
                    </div>
                    @endif

                    <div class=" text-dark mr-3" > 
                        <a href="customer/giohang/show" class="link text-dark"> <i class="fas fa-shopping-cart"></i> 
                        </a> 
                        <span> 
                            @if(Session::has('cart')) 
                                {{Session('cart')->totalQty}} 
                            @else
                                    
                            @endif
                        </span>
                    </div> 
                    
                </div>
            </div>
        </div>
</div>
<div class="container-fluid bg-white border-bottom shadow-sm mb-3 sticky-top ">
            <div class="row">
                <div class="col-md-3 offset-1 col-5 d-md-block Menu_Size">
                    <div class="d-flex align-items-center text-danger">
                        <h1> <font face="Comic sans MS"> Lucky Cake </font> </h1>
                    </div>
                </div>
                <div class="col-6 d-block d-md-none d-flex justify-content-end">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-list-alt"></i>
                    </button>
                </div>
                <div class="col-md-8 d-flex justify-content-center align-items-center">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
                            <ul class="navbar-nav Menu_Menu-item ">
                                <li class="mr-5">
                                    <a class="text-dark Menu_Link" href="luckycake/trangchu"> Trang chủ </a>
                                </li>
                                <li class="mr-5 Menu_Has-sub-menu">
                                    <a class="text-dark Menu_Link" href="luckycake/sanpham"> Sản phẩm </a>
                                    <ul class="Menu_Sub-menu ">
                                        @foreach($loai_sp as $type)
                                            <li class="Menu_Item-link">
                                                <a class="Menu_Link text-dark" href="luckycake/loaisanpham/{{$type->id}}"> 
                                                    {{$type->name}} 
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="mr-5">
                                    <a class="text-dark Menu_Link" href="luckycake/gioithieu"> Giới thiệu </a>
                                </li>
                                <li class="mr-5">
                                    <a class="text-dark Menu_Link" href="luckycake/lienhe"> Liên hệ </a>
                                </li>
                                <li class="mr-5">
                                    <a class="text-dark Menu_Link" href="luckycake/tintuc"> Tin tức </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
    </div> 


