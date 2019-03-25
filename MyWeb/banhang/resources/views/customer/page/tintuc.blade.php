@extends('customer.layout.master')

@section('content')
<div class="container mb-5">
  <div class="row">
    <div class="col-md-12 ">
      <h1 class="text-info text-center text-capitalize"> Tin tức </h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
            <div class="card Carousel_Left_Size">
                <div class="card-header bg-info">
                    <h3 class="text-white text-capitalize"> Loại sản phẩm </h3>
                </div>
                <ul class="list-group list-group-flush">

                    @foreach($types as $t)
                    <li class="list-group-item">
                        <i class="fa fa-arrow-circle-right"></i>
                        <a href="luckycake/customer/loaisanpham/{{$t->id}}"> {{$t->name}} </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    
    <div class="col-md-9">
      @foreach($tintuc as $tt)
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <div class="Product_Image1" style="background-image: url(banhang/image/tintuc/{{$tt->image}})">
              </div>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"> 
                  <a href="luckycake/customer/chitiettintuc/{{$tt->id}}"> {{$tt->title}}</a>
                </h5> 
                <p class="card-text "> {{$tt->title}}... </p>
                <p class="card-text"><small class="text-muted"> {{$tt->created_at}} </small></p>
              </div>
            </div>
          </div>
        </div>
      
      @endforeach
    </div>
  </div>
</div>

@endsection
