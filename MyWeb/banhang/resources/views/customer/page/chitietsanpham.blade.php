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
            <div class="col-md-4">
                <div class="Product_Image1" alt="" style="background-image: url(banhang/image/products/{{$product->image}})">
                    @if($product->promotion_price != 0)
                    <div class="bg-warning" style="width:50px; height:30px;">
                        <h4 class="text-center text-white"> Sale <h4>
                    </div>
                    @endif
                </div>  
            </div>
            <div class="col-md-8">
                <div class="mb-3"> <h4> {{$product->name}}</h4></div>
                <div class="d-flex flex-row">
                    @if( $product->promotion_price == 0 )
                        <span class="card-text pr-3"> <b class="text-danger"> Giá: </b> ${{number_format($product->price)}}</span>
                    @else
                        <span class="card-text pr-3"> <b class="text-danger"> Giá: </b> ${{number_format($product->price)}}</span>
                        <span class="card-text"> <b class="text-danger"> Sale: </b> ${{number_format($product->promotion_price)}}
                        </span>
                    @endif

                </div>
                
                <div class="input-group mt-5 mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                    <div class="mr-3">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected> Số Lượng </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="3"> 4 </option>
                        <option value="3"> 5 </option>
                    </select>
                    </div>
                    <button class="btn btn-outline-info" type="submit"> <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
        </div>
    </div> 

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Description</div>
                    
                    <div class="card-content" style="height:100px;">
                        {{$product->description}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection