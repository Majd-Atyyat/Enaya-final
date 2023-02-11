@extends('frontend.main_master')
@section('content')
@section('title')
{{ $product->product_name_en }} Product Details
@endsection
<div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image"  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Product Details</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

   <!-- SHOP DETAILS AREA START -->
   <div class="ltn__shop-details-area pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="ltn__shop-details-inner mb-60">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ltn__shop-details-img-gallery">
                                <div class="ltn__shop-details-large-img">
                                    @foreach($multiImag as $img)
                                        <div class="single-large-img">
                                            <a href="{{ asset($img->photo_name ) }}" data-rel="lightcase:myCollection">
                                                <img src="{{ asset($img->photo_name ) }}" alt="Image">
                                            </a>
                                        </div>
										@endforeach
                                    
                                </div>
                                <div class="ltn__shop-details-small-img slick-arrow-2">
                                    @foreach($multiImag as $img)
                                        <div class="single-small-img">
                                            <img src="{{ asset($img->photo_name ) }}" alt="Image">
                                        </div>
										@endforeach
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-product-info shop-details-info pl-0">
                                @php 
	$reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
	$avarage = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
@endphp
                                    <div class="product-ratting">
                                        @if($avarage == 0)
                                        <ul>
                                        
                                            <li class="review-total"> No Rating Yet</li>
                                        </ul>
                                        @elseif($avarage == 1 || $avarage < 2)
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li class="review-total"> <a href="#"> ( {{ count($reviewcount) }} Reviews )</a></li>
                                        </ul>
                                        @elseif($avarage == 2 || $avarage < 3)
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li class="review-total"> <a href="#"> ( {{ count($reviewcount) }} Reviews )</a></li>
                                        </ul>
                                        @elseif($avarage == 3 || $avarage < 4)
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li class="review-total"> <a href="#"> ( {{ count($reviewcount) }} Reviews )</a></li>
                                        </ul>
                                        @elseif($avarage == 4 || $avarage < 5)
                                        <ul> 
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li class="review-total"> <a href="#"> ( {{ count($reviewcount) }} Reviews )</a></li>
                                        </ul>
                                        @elseif($avarage == 5 || $avarage < 5)
                                        <ul> 
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li class="review-total"> <a href="#"> ( {{ count($reviewcount) }} Reviews )</a></li>
                                        </ul>
                                        @endif
                                    </div>
                                    <h3>{{ $product->product_name_en }}</h3>
                                    <div class="product-price">
										@php
                                            $amount = $product->selling_price - $product->discount_price;
                                            $discount = ($amount/$product->selling_price) * 100;
                                            @endphp 
											 @if ($product->discount_price == NULL)
                                        <span>{{ $product->selling_price }} JOD</span>
										@else
                                                <span>{{ $product->discount_price }} JOD </span>
                                                <del>{{ $product->selling_price }} JOD</del>
                                                @endif

                                        
                                    </div>
                                    <div class="modal-product-meta ltn__product-details-menu-1">
                                        <ul>
                                            <li>
                                                <strong>Category:</strong> 
                                                <span>
                                                    {{ $product->category->category_name_en }}
                                                   
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                
                                                <div class="cart-plus-minus">
                                                    <input type="text" min="1" id="qty" value="1" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li>
                                                <input type="hidden" id="product_id" value="{{ $product->id }}" min="1">
                                                <button  type="submit" onclick="addToCart()"  class="theme-btn-1 btn btn-effect-1" title="Add to Cart" >
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>ADD TO CART</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                <hr>
                                {{-- <div class="ltn__social-media">
                                    <ul>
                                        <li>Share:</li>
                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        
                                    </ul>
                                </div> --}}
                                <hr>
                                <div class="ltn__safe-checkout">
                                    <h5>Cash On Delivery</h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Tab Start -->
                <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                    <div class="ltn__shop-details-tab-menu">
                        <div class="nav">
                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Description</a>
                            <a data-bs-toggle="tab" href="#liton_tab_details_1_2" class="">Reviews</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                            <div class="ltn__shop-details-tab-content-inner">
                                <h4 id="pname"class="title-2">{{ $product->product_name_en }}</h4>
                                <p>{!! $product->long_descp_en !!}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_details_1_2">
                            <div class="ltn__shop-details-tab-content-inner">
                                <h4 class="title-2">Customer Reviews</h4>
                                <div class="product-ratting">
                                    @if($avarage == 0)
                                    <ul>
                                        
                                        <li class="review-total"> No Rating Yet</li>
                                    </ul>
                                    @elseif($avarage == 1 || $avarage < 2)
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li class="review-total"> <a href="#"> ( {{ count($reviewcount) }} Reviews )</a></li>
                                    </ul>
                                    @elseif($avarage == 2 || $avarage < 3)
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li class="review-total"> <a href="#"> ( {{ count($reviewcount) }} Reviews )</a></li>
                                    </ul>
                                    @elseif($avarage == 3 || $avarage < 4)
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li class="review-total"> <a href="#"> ( {{ count($reviewcount) }} Reviews )</a></li>
                                    </ul>
                                    @elseif($avarage == 4 || $avarage < 5)
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li class="review-total"> <a href="#"> ( {{ count($reviewcount) }} Reviews )</a></li>
                                    </ul>
                                    @elseif($avarage == 5 || $avarage < 5)
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li class="review-total"> <a href="#"> ( {{ count($reviewcount) }} Reviews )</a></li>
                                    </ul>
                                    @endif
                                    
                                </div>
                                <hr>
                                <!-- comment-area -->
                                @php
                                $reviews = App\Models\Review::where('product_id',$product->id)->latest()->limit(5)->get();
                                @endphp	
                                <div class="ltn__comment-area mb-30">
                                    <div class="ltn__comment-inner">
                                        <ul>
                                            @foreach($reviews as $item)
                                            @if($item->status == 0)
                                    
                                            @else
                                            <li>
                                                <div class="ltn__comment-item clearfix">
                                                    <div class="ltn__commenter-img">
                                                        <img src="{{ (!empty($item->user->profile_photo_path))? url('upload/user_images/'.$item->user->profile_photo_path):url('upload/no_image.jpg') }}" alt="Image">
                                                    </div>
                                                    <div class="ltn__commenter-comment">
                                                        <h6><a href="#">{{ $item->user->name }}</a></h6>
                                                        <div class="product-ratting">
                                                            @if($item->rating == NULL)
                                                            <ul>
                                        
                                                                <li class="review-total">    . No Rating </li>
                                                            </ul>
                                                            @elseif($item->rating == 1)
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                
                                                            </ul>
                                                            @elseif($item->rating == 2)
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                
                                                            </ul>
                                                            @elseif($item->rating == 3)
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                
                                                            </ul>
                                                            @elseif($item->rating == 4)
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                
                                                            </ul>
                                                            @elseif($item->rating == 5)
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                
                                                            </ul>
                                                            @endif
                                                        </div>
                                                        <h6>{{ $item->summary }}</h6>
                                                            <p>"{{ $item->comment }}"</p>
                                                            <span class="ltn__comment-reply-btn">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            @endif
                                    @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- comment-reply -->
                                <div class="ltn__comment-reply-area ltn__form-box mb-30">
                                    @guest
                                    <h4 class="title-2">Add a Review</h4>
                                    <p> <b> For Add Product Review. You Need to Login First <a href="{{ route('login') }}">Login Here</a> </b> </p>
                                    @else 
                                    <form method="post" action="{{ route('review.store') }}">
                                        @csrf
                                        <h4 class="title-2">Add a Review</h4>
                                        <div class="mb-30">
                                            <div class="add-a-review">
                                                <div class="mb-30">
                                                    <div class="add-a-review">
                                                        <h6>Your Ratings:</h6>
                                                        <div class="product-ratting">
                                                            <table class="table">	
                                                                <thead>
                                                                    <tr>
                                                                        <th class="cell-label">&nbsp;</th>
                                                                        <th>1 <a href="#"><i class="fas fa-star"></i></a></th>
                                                                        <th>2 <a href="#"><i class="fas fa-star"></i></a></th>
                                                                        <th>3 <a href="#"><i class="fas fa-star"></i></a></th>
                                                                        <th>4 <a href="#"><i class="fas fa-star"></i></a></th>
                                                                        <th>5 <a href="#"><i class="fas fa-star"></i></a></th>
                                                                    </tr>
                                                                </thead>	
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                                    </tr>
                                                            
                                                                </tbody>
                                                            </table>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input name="summary" type="text" placeholder="Type your headline">
                                        </div>
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <textarea  name="comment" placeholder="Type your comments...."></textarea>
                                        </div>
                                       
                                        <div class="btn-wrapper">
                                            <button   class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                                        </div>
                                    </form>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Tab End -->
            </div>
           {{-- start of hot deals --}}
           @include('frontend.common.hot_deals')
           {{-- end of hot deals --}}
        </div>
    </div>
</div>
<!-- SHOP DETAILS AREA END -->
@endsection
