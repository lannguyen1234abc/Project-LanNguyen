@extends('customer.layout.master')

@section('content')
<div class="Slide container mb-5">
          <div class="row">
                <div class="col-md-3 ">
                    <div class="card Carousel_Left_Size Carousel_Left_Title">
                        <div class="card-header bg-info Carousel_Left_Title">
                            <h3 class="text-white text-capitalize"> Loại sản phẩm </h3>
                        </div>
                        <ul class="list-group list-group-flush">

                            @foreach($type_home as $t_h)
                            <li class="list-group-item">
                                <i class="fa fa-arrow-circle-right"></i>
                                <a href="{{route('loaisanpham',$t_h->id)}}"> {{$t_h->name}} </a>
                            </li>
                            @endforeach

                        </ul>
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
<div class="Product container mb-5">
        <div class="row mb-5 d-flex justify-content-center">
            <div class="card-header Product_Style text-center bg-info">
                Sản phẩm mới 
            </div> 
        </div>
        
        <div class="row mb-3">
            <div class="col-md-3 ">
                <div class="card-header bg-info text-white d-flex justify-content-center ">
                    <h4> Tin mới nhất </h4>
                </div>
                <div class="card mb-3">
                    <div class="Product_Image1" alt="" style="background-image: url(banhang/image/products/Banh-ngot-trai-cay.jpg)">       
                    </div>
                    <div class="card-body">
                        <a href="https://abby.vn/banh-ngot-phap-va-nhat-ban"> 
                            Bánh ngọt Pháp và Nhật Bản làm mê mẩn giới trẻ
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="Product_Image1" alt="" style="background-image: url(banhang/image/products/mochi-tin.jpg)">       
                    </div>
                    <div class="card-body">
                        <a href="https://www.google.com/search?q=c%C3%A1c+m%E1%BA%ABu+b%C3%A1nh+mochi+%C4%91%E1%BA%B9p+nh%E1%BA%A5t&rlz=1C1PRFI_enVN807VN807&tbm=isch&tbo=u&source=univ&sa=X&ved=2ahUKEwjf3vHF0PrfAhXCdN4KHdwCDlEQsAR6BAgGEAE&biw=1366&bih=626"> 
                            Những mẫu bánh Mochi đẹp nhất
                        </a>
                    </div>
                </div>
                    
            </div>
            <div class="col-md-9">
                <div class="row">
                @foreach($new_products as $index)
                @if($index->new == 1)
                <div class="col-md-4 mb-3">
                    <div class="card ">
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