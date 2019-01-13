@extends('customer.layout.master')

@section('content')
<div class="Product container mt-5">
        <div class="row mb-5">
              <div class="col-md-12">
                  <h5> Tìm thấy {{count($product)}} sản phẩm </h5>
              </div>
        </div>
        <div class="row mb-5">
            @foreach($product as $index)
            <div class="col-md-3 mb-3">
                <div class="card w-100">
                    <div class="Product_Image1" alt="" style="background-image: url(banhang/image/products/{{$index->image}})">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> {{$index->name}} </h5>
                        <div class="d-flex flex-row">

                            @if($index->promotion_price == 0)
                                <span class="card-text pr-3">${{number_format($index->price)}}</span>
                            @else
                                <span class="card-text pr-3"> ${{number_format($index->price)}}</span>
                                <span class="card-text"> <b class="text-danger"> Sale: </b>${{number_format($index->promotion_price)}}
                                </span>
                            @endif

                        </div>
                        <button class="btn btn-outline-primary"> Chi tiết </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
@endsection