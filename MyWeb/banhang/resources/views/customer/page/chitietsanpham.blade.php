@extends('customer.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row ">
                    <a href="{{route('trangchu')}}" class="text-dark"> <p class="pr-2"><i class="fas fa-home"></i> </p> </a> 

                    <p class="pr-2"> <i class="fas fa-chevron-right"></i> </p> 

                    <a href="{{route('sanpham')}}" class="text-dark"> <p class="pr-2"> Sản phẩm </p> </a>

                    <p class="pr-2"> <i class="fas fa-chevron-right"></i> </p>

                    <a href="" class="text-dark"> <p > {{$product->name}} </p> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="Product_Image1" alt="" style="background-image: url(banhang/image/products/{{$product->image}})">
                            @if($product->promotion_price != 0)
                            <div class="bg-warning" style="width:50px; height:30px;">
                                <h4 class="text-center text-white"> Sale <h4>
                            </div>
                            @endif
                        </div>  
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3"> <h4> {{$product->name}}</h4></div>
                        <div class="mb-3"> <b> ID: </b> {{$product->id}} </div>
                        <div class="d-flex flex-row">
                            @if( $product->promotion_price == 0 )
                                <span class="card-text pr-3"> <b class="text-danger"> Giá: </b> {{number_format($product->price)}} đ</span>
                            @else
                                <span class="card-text pr-3"> <b class="text-danger"> Giá: </b> {{number_format($product->price)}}</span>
                                <span class="card-text"> <b class="text-danger"> Sale: </b> {{number_format($product->promotion_price)}} đ
                                </span>
                            @endif
                        </div>  
                        <div class="mt-3">
                            @if( $product->status == 'Hết')
                            <b class="text-danger"> 
                                Trạng thái:  
                            </b>
                                <span class="Inventory"> {{$product->status}} </span>
                            @endif
                        </div>

                        <div class="mt-3 d-flex flex-row">
                            <b class="text-danger mr-3"> 
                                Thêm vào giỏ:  
                            </b>
                            @if(Auth::check())
                                <a href="{{route('getAddtoCart', $product->id)}}"> <i class="fas fa-shopping-cart"></i> </a> 
                            @else
                                <a href="{{route('dangnhap')}}"> <i class="fas fa-shopping-cart"></i> </a>    
                            @endif
                        </div> 
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> Description</div>
                            <div class="card-content" style="height:100px;">
                                {{$product->description}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div> 

@endsection