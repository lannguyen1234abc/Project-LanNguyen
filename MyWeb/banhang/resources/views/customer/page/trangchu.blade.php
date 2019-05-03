@extends('customer.layout.master')

@section('content')
<div class="Slide container mb-5"> 
    <div class="row">
        <div class="col-md-3 col-12 Carousel_Left_Size">
            <div class="card h-100">
                <div class="card-header bg-info text-white d-flex justify-content-center ">
                    <h4 class="text-capitalize"> Tin mới nhất </h4>
                </div>

                @foreach($news as $n)
                @if($n->new == 1)
                <div class="mt-3 mb-3">
                    <div class="Product_Tin_Image mr-3 ml-3" alt="" style="background-image: url(banhang/image/tintuc/{{$n->image}})">  
                    </div>
                    <a href="luckycake/chitiettintuc/{{$n->id}}"> 
                        {{$n->title}}
                    </a>
                </div>
                @endif
                @endforeach 
            </div>
        </div>

        <div class="col-md-9 d-none d-md-block">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach( $slides as $sl )
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach

                </ol>

                <div class="carousel-inner" role="listbox">
                    @foreach( $slides as $sl )
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="Carousel_Image1" alt="" style="background-image : url(banhang/image/logo/{{$sl->link}})">
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
        <div class="d-none d-md-block col-md-4">
            <div class="d-flex flex-column align-items-center">
                <img class="Size_Adv" src="/banhang/image/products/loai-1.jpg">
                <a href="luckycake/loaisanpham/{{1}}"> 
                    <h5 class="text-capitalize Text mt-3"> Bánh ngọt </h5> 
                </a>
            </div>
        </div>
        <div class="d-none d-md-block col-md-4">
            <div class="d-flex flex-column align-items-center">
                <img class="Size_Adv" src="/banhang/image/products/loai-2.jpg">
                <a href="luckycake/loaisanpham/{{2}}"> 
                    <h5 class="text-capitalize Text mt-3"> Bánh kem </h5> 
                </a>
            </div>
        </div>
        <div class="d-none d-md-block col-md-4">
            <div class="d-flex flex-column align-items-center">
                <img class="Size_Adv" src="/banhang/image/products/loai-3.jpg">
                <a href="luckycake/loaisanpham/{{3}}"> 
                    <h5 class="text-capitalize Text mt-3"> Hamburger </h5> 
                </a>
            </div>
        </div>    
    </div>
</div>
<div class="Product container mb-5">
    <div class="row mb-5 d-flex justify-content-center">
        <div class="card-header Product_Style text-capitalize bg-info">
            Sản phẩm mới 
        </div> 
    </div>

    <div class="row mb-3">
        
            @foreach($new_products as $index)
            @if($index->new == 1)
            <div class="col-md-3 col-6 mb-3 ">
                <div class="card">
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
                                @if(Auth::check())
                                <input type="hidden" id="idu" name="test" value="{{ Auth::user()->id}}">
                                @else
                                <input type="hidden" id="idu" name="test" value="0">
                                @endif
                                @endif

                            </div>
                            <div class="d-flex flex-row mt-3">
                                @if($index->status == 'Còn')
                                <button class="btn btn-warning"> 
                                    <a class="cart" abc="{{$index->id}}" > <i class="fas fa-shopping-cart text-white"></i> </a> 
                                </button>
                                @else
                                <button class="btn btn-warning" onclick="myFunction()"> 
                                   <i class="fas fa-shopping-cart text-white"></i>  
                                </button>
                               @endif

                                <button class="btn btn-outline-primary"> 
                                <a href="luckycake/chitietsanpham/{{$index->id}}" class="link text-dark"> Chi tiết >> </a> 
                                </button>
                            </div>

                    </div>
                </div>
            </div>
            @endif
            @endforeach
        
    </div>  
    <div class="row mt-5">
        <div class="col-md-12 col-12 d-flex justify-content-center display-5">
            {{$new_products->links("pagination::bootstrap-4")}}
        </div>
    </div>
</div>
<div class="container mb-3">
    <div class="row">
        <div class="col-md-12">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="Image_Home1" > </div>
                            <div class="carousel-caption d-none d-md-block">
                              <h1>Bánh ngọt</h1>
                              <p>Những chiếc bánh ngọt nhỏ nhắn, xinh xắn và hình dáng dễ thương</p>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <div class="Image_Home2" > </div>
                        <div class="carousel-caption d-none d-md-block">
                          <h1>Bánh kem</h1>
                          <p>Bánh kem sinh nhật, bánh kem tiệc cưới</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <div class="Image_Home3" > </div>
                    <div class="carousel-caption d-none d-md-block">
                      <h1>Hamburger</h1>
                      <p>Hamburger ngon nhất và tuyệt vời, đủ loại cho bạn lựa chọn</p>
                  </div>
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>
</div>
</div>

<div id="chatbox" style="position:fixed; right:100px; bottom:10px; z-index: 111111111111" class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/LuckyCake-594042314395967/?modal=admin_todo_tour" data-width="250" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
</div>

<div class="Mess_Position shadow-lg d-flex justify-content-end align-items-center mt-3 mb-3" >
    <b class="ml-2 Text text-info"> Messenger </b>
    <img class="Mess ml-3" id="button" src="/banhang/image/logo/ms.svg">  
</div>
 

@endsection