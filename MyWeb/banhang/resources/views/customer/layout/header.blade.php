
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="">
                    <b> <i class="fas fa-home"></i> </b>
                    <b class="pr-5"> 459 Tôn Đức Thắng, Liên Chiểu </b>
                    <b> <i class="fas fa-phone"></i> </b>
                    <b> 01234567 </b>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center align-items-center">
                    <form action="{{route('search')}}" method="GET" class="d-flex flex-row mr-3">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search" name="search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-dark"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>

                    @if(Auth::check())
                    
                    <div class="mr-3"> 
                        <a href="{{route('dangxuat')}}" class="text-dark"> Đăng xuất </a> 
                    </div>
                    
                    <div class="mr-3"> 
                        <i class="fas fa-user text-dark"></i>  
                        <a href="" class="link"> {{Auth::user()->name}}  </a> 
                    </div>
                    
                    @else
                    <div class="mr-3"> 
                        <a href="{{route('dangki')}}" class="text-dark"> Đăng kí </a> 
                    </div>
                    <div class="mr-3"> 
                        <a href="{{route('dangnhap')}}" class="text-dark"> Đăng nhập </a>
                    </div>
                    @endif

                    <div class=" text-dark mr-3" > 
                        <a href="{{route('showCart')}}" class="link text-dark"> <i class="fas fa-shopping-cart"></i>  </a> 
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
            <div class="row Menu_Size">
                <div class="col-md-4">
                    <div class="d-flex align-items-center text-danger">
                          <i class="far fa-hand-peace display-3 mr-3"></i>
                          <h1> <font face="Comic sans MS"> Lucky Cake </font> </h1>
                    </div>
                </div>
                <div class="col-md-8 d-flex justify-content-center align-items-center ">
                        <ul class="Menu_Menu-item d-flex flex-row">
                            <li class="mr-5">
                                <a class="text-dark Menu_Link" href="{{route('trangchu')}}"> Trang chủ </a>
                            </li>
                            <li class="mr-5 Menu_Has-sub-menu">
                                <a class="text-dark Menu_Link" href="{{route('sanpham')}}"> Sản phẩm </a>
                                <ul class="Menu_Sub-menu ">
                                    @foreach($loai_sp as $type)
                                        <li class="Menu_Item-link">
                                            <a class="Menu_Link text-dark" href={{route('loaisanpham',$type->id)}}"> 
                                                {{$type->name}} 
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="mr-5">
                                <a class="text-dark Menu_Link" href="{{route('gioithieu')}}"> Giới thiệu </a>
                            </li>
                            <li class="mr-5">
                                <a class="text-dark Menu_Link" href="{{route('lienhe')}}"> Liên hệ </a>
                            </li>
                            <li class="mr-5">
                                <a class="text-dark Menu_Link" href="{{route('tintuc')}}"> Tin tức </a>
                            </li>
                        </ul>
                    
                </div>
            </div>
    </div> 


    

