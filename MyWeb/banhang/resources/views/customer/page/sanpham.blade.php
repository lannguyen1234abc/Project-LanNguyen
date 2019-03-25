@extends('customer.layout.master')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row mb-5 d=flex justify-content-center">
                <div class="card-header Product_Style text-center bg-info">
                    Sản phẩm 
                </div> 
            </div>
            <div class="row">
                @foreach($products as $index)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="Product_Image1" alt="" style="background-image: url(banhang/image/products/{{$index->image}})">
                            @if($index->promotion_price != 0)
                            <div class="bg-warning" style="width:50px; height:30px;">
                                <h4 class="text-center text-white"> Sale <h4>
                                </div>
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"> {{$index->name}} </h5>
                                <div class="d-flex flex-row">

                                    @if( $index->promotion_price == 0 )
                                    <span class="card-text pr-3"> {{number_format($index->price)}} đ</span>
                                    @else
                                    <span class="card-text pr-3"> <del> {{number_format($index->price)}} </del> </span>
                                    <span class="card-text"> {{number_format($index->promotion_price)}} đ
                                    </span>
                                    @endif

                                </div>
                                <div class="d-flex flex-row mt-3">
                                    <button class="btn btn-warning"> 
                                        <a href="luckycake/giohang/add-to-giohang/{{$index->id}}"> <i class="fas fa-shopping-cart text-white"></i> </a> 
                                    </button>
                                    
                                    <button class="btn btn-outline-primary"> 
                                        <a href="luckycake/customer/chitietsanpham/{{$index->id}}" class="link"> Chi tiết >> </a> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row mt-5">
                    <div class="col-md-12 d-flex justify-content-center display-5">
                        {{$products->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection