<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <base href="{{asset('')}}"> 
    <link rel="stylesheet" href="{{asset('banhang/asset/style.css')}}">
   
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>

<body>
    <div class="Header container-fluid border-bottom">
        <div class="row mt-3 mb-3 ">
            <div class="col-md-6 d-flex justify-content-start align-items-center">
                <div class="ml-5">
                    <b> <i class="fas fa-home"></i> </b>
                    <b class="pr-5"> 459 Tôn Đức Thắng, Liên Chiểu </b>
                    <b> <i class="fas fa-phone"></i> </b>
                    <b> 01234567 </b>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center">
                    <form action="{{route('search')}}" method="GET" class="d-flex flex-row mr-3">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search" name="search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-info my-2 my-sm-0" type="submit"> <i class="fas fa-search"></i> </button>
                            </div>
                        </div>

                    </form>

                    @if(Auth::check())
                    
                    <button class="btn btn-outline-info mr-3"> 
                        <a href="{{route('dangxuat')}}" class="link"> Đăng xuất </a> 
                    </button>
                    
                    <button class="btn mr-3"> 
                        <i class="fas fa-user text-info"></i>  
                        <a href="" class="link"> {{Auth::user()->name}}  </a> 
                    </button>
                    
                    @else
                    <button class="btn btn-outline-info mr-3"> 
                        <a href="{{route('dangki')}}" class="link"> Đăng kí </a> 
                    </button>
                    <button class="btn btn-outline-info mr-3"> 
                        <a href="{{route('dangnhap')}}" class="link"> Đăng nhập </a>
                    </button>
                    @endif

                    <button class="btn btn-white text-secondary" > 
                        <a href="{{route('showCart')}}" class="link"> <i class="fas fa-shopping-cart"></i>  </a> <span class="pl-2"> Giỏ hàng </span>
                        <span> 
                            (@if(Session::has('cart')) 
                                {{Session('cart')->totalQty}} 
                            @else
                                Trống
                            @endif)
                        </span>
                    </button> 
                </div>
            </div>
        </div>
    </div>
    <div class="Logo container mb-3 mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex align-items-center text-danger">
                          <i class="far fa-hand-peace display-4 mr-3"></i>
                          <h4> <font face="Comic sans MS" size="8"> Lucky Cake </font> </h4>
                    </div>
                </div>
            </div>
        </div>
    <div class="Menu container-fluid bg-info mb-3 Menu_Height sticky-top  ">
            <div class="row h-100">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav navbar-hover w-100 h-100 d-flex justify-content-around ">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('trangchu')}}"> <h4 class="text-white text-capitalize"> Trang chủ </h4>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('sanpham')}}"> <h4 class="text-white text-capitalize"> Sản phẩm </h4> 
                                    </a>
                                    <!--
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#"> Bánh ngọt </a>
                                        <a class="dropdown-item" href="#"> Pizza </a>
                                        <a class="dropdown-item" href="#"> Bánh kem </a>
                                        <a class="dropdown-item" href="#"> Bánh mặn </a>
                                    </div> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('gioithieu')}}"> <h4 class="text-white text-capitalize"> Giới thiệu </h4> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('lienhe')}}"> <h4 class="text-white text-capitalize"> Liên hệ </h4> </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>

