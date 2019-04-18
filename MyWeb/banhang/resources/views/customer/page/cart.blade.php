@extends('customer.layout.master')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex flex-row ">
                <a href="luckycake/trangchu" class="text-dark"> <p class="pr-2"><i class="fas fa-home"></i> </p> </a> 

                <p class="pr-2"> <i class="fas fa-chevron-right"></i> </p> 

                <p class="pr-2"> Giỏ hàng </p> 

            </div>
        </div>
    </div>
    <div class="row border-bottom">
        <div class="col-md-12 d-none d-md-block">
            <h2 class="text-center"> Giỏ hàng </h2>
            <table class="table mt-3 ">
                <thead class="thead-light">
                    <tr>
                        <th class="image"> 
                            <div class="d-flex justify-content-center align-items-center">Image 
                            </div>
                        </th>

                        <th class="product"> 
                            <div class="d-flex justify-content-center align-items-center">Product  
                            </div>
                        </th>
                        <th class="price"> 
                            <div class="d-flex justify-content-center align-items-center">Price  
                            </div>
                        </th>
                        <th class="pro-price"> 
                            <div class="d-flex justify-content-center align-items-center">Promotion Price  
                            </div>
                        </th>
                        <th class="quantity"> 
                            <div class="d-flex justify-content-center align-items-center">
                                Quantity   
                            </div>
                        </th>
                        <th class="update"> 
                            <div class="d-flex justify-content-center align-items-center">Update     
                            </div>
                        </th>
                        <th class="total"> 
                            <div class="d-flex justify-content-center align-items-center">Total    
                            </div>
                        </th>
                        <th class="remove"> 
                            <div class="d-flex justify-content-center align-items-center">Remove     
                            </div>
                        </th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @if(Session::has('cart'))
                    @foreach($product_cart as $product)
                    <tr >
                        <td class="d-flex justify-content-center align-items-center"> 
                            <div class="Product_Image2 " alt="" style="background-image: url(banhang/image/products/{{$product['item']['image']}})">
                                @if($product['item']['promotion_price'] != 0)
                                <div class="bg-warning" style="width:50px; height:30px;">
                                    <h4 class="text-center text-white"> Sale <h4>
                                    </div>
                                    @endif 
                                </div>
                            </td>
                            <td > 
                                <div class="d-flex justify-content-center align-items-center">
                                    {{$product['item']['name']}}
                                </div>
                                
                            </td>
                            <td > 
                                <div class="d-flex justify-content-center">
                                    {{number_format($product['item']['price'])}}
                                </div>
                                
                                
                            </td>
                            <td > 
                                <div class="d-flex justify-content-center">
                                    {{number_format($product['item']['promotion_price'])}}
                                </div>
                                
                                
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    @if($product['quantity'] == 1)
                                    <button> - </button>
                                    @else
                                    <button> 
                                        <a href="customer/giohang/del-product/{{$product['item']['id']}}" class="link"> - </a> 
                                    </button>
                                    @endif
                                    <button> {{$product['quantity']}} </button>

                                    <button> 
                                        <a  class="cart" abc="{{$product['item']['id']}}" class="link"> + </a> 
                                    </button>      
                                </div>
                                    
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="customer/giohang/show"> <i class="far fa-edit"></i> </a>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    {{number_format($product['price'])}}
                                </div>
                                
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="customer/giohang/destroyproduct/{{$product['item']['id']}}"> <i class="fas fa-trash-alt"></i> </a>
                                </div>
                                
                            </td>
                            
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 offset-md-8 col-12">
                <div class="card">
                    <div class="card-header text-center ">
                        <h4>Thanh toán</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> 
                            <b class="pr-3">SubTotal:</b> 
                            @if(Session::has('cart'))
                            ${{number_format(Session('cart')->totalPrice)}}
                            @endif
                        </li>
                        <li class="list-group-item"> 
                            <b class="pr-3">Shipping:</b> Free Shipping 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-5">
            <div class="col-md-12 d-flex justify-content-center">
                <button  class="btn btn-outline-primary text-capitalize">
                    <a href="customer/donhang/dathang" class="link"> Mua hàng </a>
                </button> 
            </div>
        </div>
    </div>
     <script>
      $(document).ready(function(){
      $(".cart").click(function() {
     var key = $(this).attr("abc");
      $.get("customer/giohang/add-to-giohang/"+key,function(data){
     $("#ca").html(data);
   });
        });
      });
   
      </script>
    @endsection
