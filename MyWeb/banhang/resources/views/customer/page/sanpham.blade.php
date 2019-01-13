@extends('customer.layout.master')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card Carousel_Left_Size">
                    <div class="card-header bg-info">
                        <h3 class="text-white text-capitalize"> Loại sản phẩm </h3>
                    </div>
                    <ul class="list-group list-group-flush">

                        @foreach($type_product as $t_p)
                            <li class="list-group-item">
                                <i class="fa fa-arrow-circle-right"></i>
                                <a href="{{route('loaisanpham',$t_p->id)}}"> {{$t_p->name}} </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row mb-5 d=flex justify-content-center">
                        <div class="card-header Product_Style text-center bg-info">
                            Sản phẩm 
                        </div> 
                </div>
                <div class="row">

                @foreach($products as $index)
               
                <div class="col-md-4 mb-3">
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
                                    <span class="card-text pr-3">${{number_format($index->price)}}</span>
                                @else
                                    <span class="card-text pr-3"> <del> ${{number_format($index->price)}} </del> </span>
                                    <span class="card-text"> ${{number_format($index->promotion_price)}}
                                    </span>
                                @endif

                            </div>
                            <button class="btn btn-outline-primary">
                                <a href="{{route('chitietsanpham',$index->id)}}"> Chi tiết </a>
                            </button>
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