@extends('customer.layout.master')

@section('content')
<div class="Product container mt-5">
    <div class="row mb-5">
      <div class="col-md-12">
          <h5> Tìm thấy {{count($total_product)}} sản phẩm </h5>
      </div>
  </div>
  <div class="row mb-5">
    @foreach($product as $index)
    <div class="col-md-3 col-6 mb-3">
        <div class="card w-100">
            <div class="Product_Image1" alt="" style="background-image: url(banhang/image/products/{{$index->image}})">
            </div>
            <div class="card-body">
                <h5 class="card-title"> {{$index->name}} </h5>
                <div class="d-flex flex-row">

                    @if($index->promotion_price == 0)
                    <span class="card-text pr-3">{{number_format($index->price)}} đ </span>
                    @else
                    <span class="card-text pr-3"> {{number_format($index->price)}}</span>
                    <span class="card-text"> <b class="text-danger"> Sale: </b> {{number_format($index->promotion_price)}} đ
                    </span>
                    @endif

                </div>
                <div class="d-flex flex-row mt-3">
                    @if($index->status == 'Còn')
                    <button class="btn btn-warning"> 
                        <a href="customer/giohang/add-to-giohang/{{$index->id}}"> <i class="fas fa-shopping-cart text-white"></i> </a> 
                    </button>
                    @else
                    <button class="btn btn-warning" onclick="myFunction()"> 
                       <i class="fas fa-shopping-cart text-white"></i>  
                    </button>
                    @endif
                   <button class="btn btn-outline-primary"> 
                    <a href="luckycake/chitietsanpham/{{$index->id}}" class="link"> Chi tiết >> </a> 
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
<div class="row mt-5">
        <div class="col-md-12 col-12 d-flex justify-content-center display-5">
            {{$product->links("pagination::bootstrap-4")}}
        </div>
    </div>
</div>

@endsection