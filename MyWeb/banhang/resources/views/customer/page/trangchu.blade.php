@extends('customer.layout.master')

@section('content')
<div class="Slide container mb-5">
        <div class="row">
                <div class="col-md-3 ">
                        <div class="card">
                            <div class="card-header bg-info text-white d-flex justify-content-center ">
                                <h4> Tin mới nhất </h4>
                            </div>
                            @foreach($new as $n)
                            <div class="mt-3 mb-3">
                                    <div class="Product_Tin_Image mr-3 ml-3" alt="" style="background-image: url(banhang/image/products/{{$n->image}})">       
                                    </div>
                                    <a href="https://abby.vn/banh-ngot-phap-va-nhat-ban"> 
                                        {{$n->content}}
                                    </a>
                            </div>
                            @endforeach
                        </div>
                </div>
            
                <div class="col-md-9">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach( $slides as $sl )
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                              
                            </ol>
                            
                            <div class="carousel-inner" role="listbox">
                                @foreach( $slides as $sl )
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <div class="Carousel_Image1" alt="" style="background-image : url(banhang/image/products/{{$sl->link}})">
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                    </div>
                </div>
        </div>
</div>
<div class="Adv container mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card-deck">
                <div class="card Adv_Card">
                    <div class="Adv_Image_Image1 ">
                    </div>
                </div>
                <div class="card Adv_Card">
                    <div class="Adv_Image_Image2 ">
                    </div>
                </div>
                <div class="card Adv_Card">
                    <div class="Adv_Image_Image3 ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="Product container mb-5">
        <div class="row mb-5 d-flex justify-content-center">
            <div class="card-header Product_Style text-center bg-info">
                Sản phẩm mới 
            </div> 
        </div>
        
        <div class="row mb-3">

            <div class="col-md-12">
                <div class="row">
                @foreach($new_products as $index)
                @if($index->new == 1)
                <div class="col-md-3 mb-3">
                    <div class="card ">
                        <div class="Product_Image1 " alt="" style="background-image: url(banhang/image/products/{{$index->image}})">
                            @if($index->promotion_price != 0)
                            <div class="bg-warning" style="width:50px; height:30px;">
                            <h4 class="text-center text-white"> Sale <h4>
                            </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> {{$index->name}} </h5>
                            <div class="d-flex flex-row">

                                @if($index->promotion_price == 0)
                                    <span class="card-text pr-3"> {{ number_format($index->price)}} đ</span>
                                @else
                                    <span class="card-text pr-3"> <del>{{number_format($index->price)}} </del> </span>
                                    <span class="card-text"> {{number_format($index->promotion_price)}} đ
                                    </span>
                                @endif

                            </div>
                            <div class="d-flex flex-row mt-3">
                                <button class="btn btn-warning"> 
                                    <a href="{{route('getAddtoCart', $index->id)}}"> <i class="fas fa-shopping-cart text-white"></i> </a> 
                                </button>
                                <button class="btn btn-outline-primary"> 
                                    <a href="{{route('chitietsanpham', $index->id)}}" class="link"> Chi tiết >> </a> 
                                </button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                </div>
            </div>
            
        </div>
        
</div>
@endsection