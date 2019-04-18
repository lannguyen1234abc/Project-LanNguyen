<a href="customer/giohang/show" class="link text-dark"> <i class="fas fa-shopping-cart"></i> 
                        </a> 
                        <span> 
                            @if(Session::has('cart')) 
                                {{Session('cart')->totalQty}} 
                            @else
                                    
                            @endif
                        </span>