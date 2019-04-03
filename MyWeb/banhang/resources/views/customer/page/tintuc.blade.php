@extends('customer.layout.master')

@section('content')
<div class="container mb-5">
  <div class="row">
    <div class="col-md-12 ">
      <h1 class="text-info text-center text-capitalize"> Tin tức </h1>
    </div>
  </div>

  <div class="row">
      @foreach($tintuc as $tt)
      <div class="col-md-3 col-6">
        
          <div class="row no-gutters">
            
              <div class="Product_Image1" style="background-image: url(banhang/image/tintuc/{{$tt->image}})">
              </div>
        
              <div class="card-body">
                <h5 class="card-title"> 
                  <a href="luckycake/chitiettintuc/{{$tt->id}}"> {{$tt->title}}</a>
                </h5> 
                <p class="card-text "> {{$tt->title}}... </p>
                <p class="card-text"><small class="text-muted"> {{$tt->created_at}} </small></p>
              </div>
            
          </div>
        
    </div>
    @endforeach
  </div>
</div>

@endsection
