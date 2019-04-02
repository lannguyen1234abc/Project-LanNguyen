@extends('customer.layout.master')

@section('content')
<div class="container mb-5">
  <div class="row">
    <div class="col-md-12 ">
      <h1 class="text-info text-center text-capitalize"> Tin tức </h1>
    </div>
  </div>

  <div class="row">
    <!--
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
            <div class="card mt-3">
                <div class="card-header bg-info text-white d-flex justify-content-center ">
                    <h4 class="text-capitalize"> Tin mới nhất </h4>
                </div>

                @foreach($tintuc as $n)
                @if($n->new == 1)
                <div class="mt-3 mb-3">
                    <div class="Product_Tin_Image mr-3 ml-3" alt="" style="background-image: url(banhang/image/tintuc/{{$n->image}})">  
                    </div>
                    <a href="luckycake/customer/tintuc"> 
                        {{$n->title}}
                    </a>
                </div>
                @endif
                @endforeach 
            </div>
        </div>
    -->
      @foreach($tintuc as $tt)
      <div class="col-md-3">
        <div class="card mb-3">
          <div class="row no-gutters">
            
              <div class="Product_Image1" style="background-image: url(banhang/image/tintuc/{{$tt->image}})">
              </div>
            
            
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

@endsection
