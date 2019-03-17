@extends('customer.layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="d-flex flex-row"> 
                <a href="{{route('trangchu')}}" class="text-dark">
                    <p class="pr-2"><i class="fas fa-home"></i> </p>
                </a>
                <p class="pr-2"> <i class="fas fa-chevron-right"></i> </p>
                <a href="{{route('sanpham')}}" class="text-dark">
                    <p class="pr-2"> Sản phẩm </p>
                </a>
                <p class="pr-2"> <i class="fas fa-chevron-right"></i> </p>
                <p> {{$name_type->name}} </p>
            </div>
            

        </div>
    </div>
    <div class="row">
        <div class="col-md-9 offset-3 ">
            <h5>  Tìm thấy {{count($product_type)}} sản phẩm  </h5>
        </div>
    </div>
</div>
<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-md-3">
            <div class="card Carousel_Left_Size">
                <div class="card-header bg-info">
                    <h3 class="text-white text-capitalize"> Loại sản phẩm </h3>
                </div>
                <ul class="list-group list-group-flush">

                    @foreach($types as $t)
                    <li class="list-group-item">
                        <i class="fa fa-arrow-circle-right"></i>
                        <a href="{{route('loaisanpham',$t->id)}}"> {{$t->name}} </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">

                @foreach($product_type as $sp_type)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="Product_Image1" alt="" style="background-image: url(banhang/image/products/{{$sp_type->image}})">
                            @if($sp_type->promotion_price != 0)
                            <div class="bg-warning" style="width:50px; height:30px;">
                                <h4 class="text-center text-white"> Sale <h4>
                                </div>
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"> {{$sp_type->name}} </h5>
                                <div class="d-flex flex-row">

                                    @if( $sp_type->promotion_price == 0 )
                                    <span class="card-text pr-3"> {{number_format($sp_type->price)}} đ</span>
                                    @else
                                    <span class="card-text pr-3"> <del>  {{number_format($sp_type->price)}}  </del> </span>
                                    <span class="card-text"> {{number_format($sp_type->promotion_price)}} đ
                                    </span>
                                    @endif

                                </div>
                                <div class="d-flex flex-row mt-3">
                                    @if(Auth::check())
                                    <button class="btn btn-warning"> 
                                        <a href="{{route('getAddtoCart', $sp_type->id)}}"> <i class="fas fa-shopping-cart text-white"></i> </a> 
                                    </button>
                                    @else
                                    <button class="btn btn-warning"> 
                                        <a href="{{route('dangnhap')}}"> <i class="fas fa-shopping-cart text-white"></i> </a> 
                                    </button>
                                    
                                    @endif
                                    <button class="btn btn-outline-primary"> 
                                        <a href="{{route('chitietsanpham', $sp_type->id)}}" class="link"> Chi tiết >> </a> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row mt-5">
                    <div class="col-md-12 d-flex justify-content-center display-5">
                        {{$product_type->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection