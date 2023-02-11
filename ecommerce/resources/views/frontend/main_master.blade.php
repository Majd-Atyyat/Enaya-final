<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/img/favicon.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    <!-- Notification -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


     <!-- Font Icons css -->
 <script src="https://kit.fontawesome.com/419d34333d.js" crossorigin="anonymous"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <script src="https://js.stripe.com/v3/"></script>
 <link rel="stylesheet" href="css/font-icons.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-3) -->
    @include('frontend.body.header')
    <!-- HEADER AREA END -->

    @yield('content')

    <!-- FOOTER AREA START -->
    @include('frontend.body.footer')
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"  id="closeModel">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-img">
                                            <img id="pimage" src="" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                </ul>
                                            </div>
                                            <h3><span id="pname"></span></h3>
                                            <div class="product-price">
                                                <span id="pprice">JOD</span>
                                                <del id="oldprice">JOD</del>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1">
                                                <ul>
                                                    <li>
                                                        <strong id="pcategory">Categories:</strong> 
                                                        <span>
                                                            <a href="#">Parts</a>
                                                            <a href="#">Car</a>
                                                            <a href="#">Seat</a>
                                                            <a href="#">Cover</a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-2">
                                                <ul>
                                                    <li>
                                                       
                                                        <div class="cart-plus-minus">
                                                            <label for="qty">Quantity</label>
                                                            <input type="text" value="1"  id="qty" min="1" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </li>
<li> <label for="color">Choose Color</label>
    <select class="form-control" id="color" name="color"></li>
                                                    <li>
                                                        
                                                        <label for="size">Choose Size</label>
                                                        <select class="form-control" id="size" name="size">
                                                            
                                                        <input type="hidden" id="product_id">

                                                        <button href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" type="submit" data-bs-toggle="modal" onclick="addToCart()" data-bs-target="#add_to_cart_modal">
                                                            
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span>ADD TO CART</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-3">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                            <i class="far fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                            <i class="fas fa-exchange-alt"></i>
                                                            <span>Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li>Share:</li>
                                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    {{-- <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/1.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.html">Digital Stethoscope</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                            <div class="btn-wrapper">
                                                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product-2/7.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.html">Digital Stethoscope</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                            <div class="btn-wrapper">
                                                <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>>

{{-- modal --}}
    <script type="text/javascript">
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })
    // Start Product View with Modal 
    function productView(id){
        // alert(id)
        $.ajax({
            type: 'GET',
            url: '/product/view/modal/'+id,
            dataType:'json',
            success:function(data){
                 // console.log(data)
            $('#pname').text(data.product.product_name_en);
            $('#price').text(data.product.selling_price);
            $('#pcode').text(data.product.product_code);
            $('#pcategory').text(data.product.category.category_name_en);
            $('#pbrand').text(data.product.brand.brand_name_en);
            $('#pimage').attr('src','/'+data.product.product_thambnail);

            $('#product_id').val(id);
            $('#qty').val(1);
              // Product Price 
              if (data.product.discount_price == null) {
                $('#pprice').text('');
                $('#oldprice').text('');
                $('#pprice').text(data.product.selling_price);
            }else{
                $('#pprice').text(data.product.discount_price);
                $('#oldprice').text(data.product.selling_price);
            } // end prodcut price 
            // Start Stock opiton
            if (data.product.product_qty > 0) {
                $('#aviable').text('');
                $('#stockout').text('');
                $('#aviable').text('aviable');
            }else{
                $('#aviable').text('');
                $('#stockout').text('');
                $('#stockout').text('stockout');
            } // end Stock Option 

            }
        })
     
    }
    // End Product View with Modal

    // Start Add To Cart Product 
    function addToCart(){
        var product_name = $('#pname').text();
        var id = $('#product_id').val();
        var color = $('#color option:selected').text();
        var size = $('#size option:selected').text();
        var quantity = $('#qty').val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data:{
                color:color, size:size, quantity:quantity, product_name:product_name
            },
            url: "/cart/data/store/"+id,
            success:function(data){
                console.log(data)
                    // Start Message 
                    const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        })
    }
  
// End Add To Cart Product 

    </script>

<script type="text/javascript">
    function miniCart(){
       $.ajax({
           type: 'GET',
           url: '/product/mini/cart',
           dataType:'json',
           success:function(response){
            $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);
            var miniCart = ""
                $.each(response.carts, function(key,value){
                    miniCart += `<div class="mini-cart-item clearfix">
    <div class="mini-cart-img">
        <a href="#"><img src="/${value.options.image}" alt="Image"></a>
        <button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"><span class="mini-cart-item-delete"><i class="icon-cancel"></i></span></button> 
    </div>
    <div class="mini-cart-info">
        <h6><a href="#">${value.name}</a></h6>
        <span class="mini-cart-quantity">${value.qty} x ${value.price} </span>
    </div>
</div>`
                });
                
                $('#miniCart').html(miniCart);

           }
       })
    }
    miniCart();
     /// mini cart remove Start 
     function miniCartRemove(rowId){
        $.ajax({
            type: 'GET',
            url: '/minicart/product-remove/'+rowId,
            dataType:'json',
            success:function(data){
            miniCart();
             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        });
    }
 //  end mini cart remove 
</script>




     <!-- /// Load My Cart /// -->

<script type="text/javascript">
    function cart(){
       $.ajax({
           type: 'GET',
           url: '/user/get-cart-product',
           dataType:'json',
           success:function(response){
   var rows = ""
   $.each(response.carts, function(key,value){
       rows += `<tr>
                  
        <td  <button lass="cart-product-remove" type="submit" class="" id="${value.rowId}" onclick="cartRemove(this.id)">x</button>
        
      </td>
									<td class="cart-product-image">
										<a href="product-details.html"><img src="/${value.options.image}" alt="#"></a>
									</td>
									<td class="cart-product-info">
										<h4><a href="product-details.html">${value.name}</a></h4>
									</td>
									<td class="cart-product-price">${value.price} JOD</td>
                                    
    
									<td >
                                       
                                           
                                            <div class="d-flex flex-row bd-highlight mb-3">
  <div class="p-2 bd-highlight">  ${value.qty > 1
            ? `<button  type="submit" id="${value.rowId}" onclick="cartDecrement(this.id)" class="btn btn-outline-secondary">-</button> `
            : `<button type="submit" class="btn btn-outline-secondary" disabled >-</button> `
            }</div>
  <div class="p-2 bd-highlight"><input type="text"  min="1" max="100" disabled="" value="${value.qty}" name="qtybutton" class="cart-plus-minus-box"></div>
  <div class="p-2 bd-highlight"><button  type="submit" class="btn btn-outline-secondary" id="${value.rowId}" onclick="cartIncrement(this.id)">+</button></div>
</div>
                                            
										
									</td>
									<td class="cart-product-subtotal">${value.subtotal} JOD</td>
								</tr>`
       });
               
               $('#cartPage').html(rows);
           }
       })
    }
cart();
///  Cart remove Start 
   function cartRemove(id){
       $.ajax({
           type: 'GET',
           url: '/user/cart-remove/'+id,
           dataType:'json',
           success:function(data){
           couponCalculation();
           cart();
           miniCart();
           $('#couponField').show();
           $('#coupon_name').val('');
            // Start Message 
               const Toast = Swal.mixin({
                     toast: true,
                     position: 'top-end',
                     
                     showConfirmButton: false,
                     timer: 3000
                   })
               if ($.isEmptyObject(data.error)) {
                   Toast.fire({
                       type: 'success',
                       icon: 'success',
                       title: data.success
                   })
               }else{
                   Toast.fire({
                       type: 'error',
                       icon: 'error',
                       title: data.error
                   })
               }
               // End Message 
           }
       });
   }
// End Cart remove   
// -------- CART INCREMENT --------//
   function cartIncrement(rowId){
       $.ajax({
           type:'GET',
           url: "/cart-increment/"+rowId,
           dataType:'json',
           success:function(data){
               couponCalculation();
               cart();
               miniCart();
           }
       });
   }
// ---------- END CART INCREMENT -----///
// -------- CART Decrement  --------//
   function cartDecrement(rowId){
       $.ajax({
           type:'GET',
           url: "/cart-decrement/"+rowId,
           dataType:'json',
           success:function(data){
               couponCalculation();
               cart();
               miniCart();
           }
       });
   }
// ---------- END CART Decrement -----///

</script>  

<!-- //End Load My cart / -->


<!--  //////////////// =========== Coupon Apply Start ================= ////  -->
<script type="text/javascript">
    function applyCoupon(){
      var coupon_name = $('#coupon_name').val();
      $.ajax({
          type: 'POST',
          dataType: 'json',
          data: {coupon_name:coupon_name},
          url: "{{ url('/coupon-apply') }}",
          success:function(data){
                 couponCalculation();
                 if (data.validity == true) {
                  $('#couponField').hide();
                 }
                 
               // Start Message 
                  const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        
                        showConfirmButton: false,
                        timer: 3000
                      })
                  if ($.isEmptyObject(data.error)) {
                      Toast.fire({
                          type: 'success',
                          icon: 'success',
                          title: data.success
                      })
                  }else{
                      Toast.fire({
                          type: 'error',
                          icon: 'error',
                          title: data.error
                      })
                  }
                  // End Message 
          }
      })
    }  
    function couponCalculation(){
      $.ajax({
          type:'GET',
          url: "{{ url('/coupon-calculation') }}",
          dataType: 'json',
          success:function(data){
              if (data.total) {
                  $('#couponCalField').html(
                      `<tr>
									<td>Cart Subtotal</td>
									<td>${data.total} JOD</td>
								</tr>
								
								<tr>
									<td>Discount</td>
									<td>00.00 JOD</td>
								</tr>
                                <tr>
									<td>Shipping</td>
									<td>00.00 JOD</td>
								</tr>
								<tr>
									<td><strong>Order Total</strong></td>
									<td><strong>${data.total} JOD</strong></td>
								</tr>`
              )
              }else{
                   $('#couponCalField').html(
                      `<tr>
									<td>Cart Subtotal</td>
									<td>${data.subtotal} JOD</td>
								</tr>
								
                                <tr>
									<td>Coupon Name</td>
									<td>${data.coupon_name} <button type="submit" onclick="couponRemove()"><i class="fa fa-times"></i>  </button></td>
                                    
								</tr>
								<tr>
									<td>Discount</td>
									<td> - ${data.discount_amount} JOD </td>
								</tr>
                                <tr>
									<td>Shipping</td>
									<td>00.00 JOD</td>
								</tr>
								<tr>
									<td><strong>Order Total</strong></td>
									<td><strong>${data.total_amount} JOD</strong></td>
								</tr>`
              )
              }
          }
      });
    }
   couponCalculation();
  </script>
   
  <!--  //////////////// =========== End Coupon Apply Start ================= ////  -->
   
  
  <!--  //////////////// =========== Start Coupon Remove================= ////  -->
   
  <script type="text/javascript">
       
       function couponRemove(){
          $.ajax({
              type:'GET',
              url: "{{ url('/coupon-remove') }}",
              dataType: 'json',
              success:function(data){
                  couponCalculation();
                  $('#couponField').show();
                  $('#coupon_name').val('');
                   // Start Message 
                  const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        
                        showConfirmButton: false,
                        timer: 3000
                      })
                  if ($.isEmptyObject(data.error)) {
                      Toast.fire({
                          type: 'success',
                          icon: 'success',
                          title: data.success
                      })
                  }else{
                      Toast.fire({
                          type: 'error',
                          icon: 'error',
                          title: data.error
                      })
                  }
                  // End Message 
              }
          });
       }
  </script>
  
  
  <!--  //////////////// =========== End Coupon Remove================= ////  -->
</body>
</html>

