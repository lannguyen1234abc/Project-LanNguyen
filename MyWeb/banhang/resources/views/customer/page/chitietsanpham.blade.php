@extends('customer.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row ">
                    <a href="luckycake/trangchu" class="text-dark"> <p class="pr-2"><i class="fas fa-home"></i> </p> </a> 

                    <p class="pr-2"> <i class="fas fa-chevron-right"></i> </p> 

                    <a href="luckycake/sanpham" class="text-dark"> <p class="pr-2"> Sản phẩm </p> </a>

                    <p class="pr-2"> <i class="fas fa-chevron-right"></i> </p>

                    <a href="" class="text-dark"> <p > {{$product->name}} </p> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col-md-9">
                <div class="row mb-5">
                    <div class="col-md-6 col-6">
                        <div class="Product_Image1" alt="" style="background-image: url(banhang/image/products/{{$product->image}})">
                            @if($product->promotion_price != 0)
                            <div class="bg-warning" style="width:50px; height:30px;">
                                <h4 class="text-center text-white"> Sale <h4>
                            </div>
                            @endif
                        </div>  
                    </div>
                    <div class="col-md-6 col-6">
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
                            
                                <a href="customer/giohang/add-to-giohang/{{$product->id}}"> <i class="fas fa-shopping-cart"></i> </a> 
                            
                        </div> 

                        <div class="mt-3 d-flex flex-row">
                            <b class="mr-3"> 
                                Số sản phẩm đã bán:  
                            </b>
                            <span> {{$pr->count()}} </span> 
                            
                        </div> 
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> <h4> Description </h4> </div>
                            <div class="card-content" style="height:100px;">
                                {{$product->description}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Viết bình luận -->
        @if( Auth::check())
        <div class="row">
            <div class="col-md-9">
                <div class="">
                    <div class="text-success">
                        @if( session('thongbao'))
                            {{session('thongbao')}}
                        @endif
                    </div>
                    <h4> Viết bình luận ...<span> <i class="fas fa-pencil-alt"></i> </span></h4>
                    <form action="luckycake/comment/{{$product->id}}" method="post" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <textarea class="form-control" name="comment" rows="2"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info"> Gửi </button>
                    </form>
                </div>
            </div>
        </div>
        @endif

        <div class="row mt-3">
            <h4> Bình luận {{count($comment)}} </h4> 
        </div>

        <div class="row mt-3">
            @foreach($comment as $cm)
            <div class="col-md-9">
                <div class="d-flex flex-row"> 
                    <div class="mr-3"> <i class="fas fa-user"></i> </div>
                    <div>
                        <p> 
                            <b>{{$cm->user->name}}</b> <i>{{$cm->created_at}}</i>
                        </p>
                        <p> {{$cm->comment}} </p>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> 

@endsection



