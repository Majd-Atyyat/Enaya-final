  @extends('frontend.main_master')
     @section('content')
     @section('title')
Enaya
@endsection
 

<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3---  section-bg-1--- mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <!-- CATEGORY-MENU-LIST START -->
                <div class="ltn__category-menu-wrap">
                    <div class="ltn__category-menu-title">
                        <h2 class="section-bg-1 ltn__secondary-bg text-color-white">categories</h2>
                    </div>
                    <div class="ltn__category-menu-toggle ltn__one-line-active">
                        @php
                        $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
                        @endphp
                      
                      
                       @foreach($categories as $category)
                        <ul>
                            <!-- Submenu Column - unlimited -->
                            <li class="ltn__category-menu-item ltn__category-menu-drop">
                                <a href="#"><i class="{{ $category->category_icon }}"></i>{{ $category->category_name_en }}</a>
                                        
                                <ul class="ltn__category-submenu ltn__category-column-5">
                                     {{-- get subcategories --}}
                                     @php
                                     $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                                     @endphp
                                   
                                     @foreach($subcategories as $subcategory)
                                    <li class="ltn__category-submenu-title ltn__category-menu-drop"><a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }}">{{ $subcategory->subcategory_name_en }}</a>
                                          <!--   // Get SubSubCategory Table Data -->
  @php
  $subsubcategories = App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name_en','ASC')->get();
  @endphp
  @foreach($subsubcategories as $subsubcategory)
                                        <ul class="ltn__category-submenu-children">
                                            <li><a href="{{ url('subsubcategory/product/'.$subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug_en ) }}">{{ $subsubcategory->subsubcategory_name_en }} </a></li>
                                            
                                        </ul>
                                        @endforeach <!-- // End SubSubCategory Foreach -->
                                    </li>
                                   
                                    @endforeach <!-- // End subCategory Foreach -->
                                   
                                    
                                  
                                </ul>
                               
                            </li>
                            <!-- Submenu Column - 4 -->
                            
                            <!-- Submenu Column - 3 -->
                            
                            <!-- Submenu Column - 2 -->
                            
                            <!-- Submenu -->
        
                            <!-- Submenu -->
                            
                            <!-- Submenu -->
                            
                            <!-- Submenu -->
                            
                          
                    
                            
                            <!-- Single menu end -->
                        </ul>
                        @endforeach <!-- // End Category Foreach -->
                    </div>

                 
                </div>
                <!-- END CATEGORY-MENU-LIST -->
            </div>
            <div class="col-lg-9">
                <div class="ltn__slide-active-2 slick-slide-arrow-1 slick-slide-dots-1">
                    <!-- ltn__slide-item -->
                    @foreach($sliders as $slider)
                    <div class="ltn__slide-item ltn__slide-item-10 section-bg-1 bg-image" data-bs-bg="{{ asset($slider->slider_img) }}">
                        <div class="ltn__slide-item-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-7 align-self-center">
                                        <div class="slide-item-info">
                                            <div class="slide-item-info-inner ltn__slide-animation">
                                                <h5 class="slide-sub-title ltn__secondary-color animated text-uppercase">{{ $slider->description }}</h5>
                                                <h1 class="slide-title  animated">{{ $slider->title }}</h1>
                                                
                                                <h5 class="color-orange  animated">{{ $slider->description }}</h5>
                                                
                                                <div class="btn-wrapper  animated">
                                                    <a href="{{ route('shop.page') }}" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
                                        <div class="slide-item-img">
                                            <!-- <a href="shop.html"><img src="img/product/1.png" alt="Image"></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- ltn__slide-item -->
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area mt-35 mt--65---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-1">
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            
                            <img src="{{asset('frontend/assets/img/icons/svg/8-trolley.svg')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Free shipping</h4>
                            
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            
                            <img src="{{asset('frontend/assets/img/icons/svg/9-money.svg')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Monthly coupons</h4>
                            
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                           
                            <img src=" {{asset('frontend/assets/img/icons/svg/10-credit-card.svg')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Cash on delivery</h4>
                            
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            
                            <img src="{{asset('frontend/assets/img/icons/svg/11-gift-card.svg')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4> Best Offers</h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->


<!-- PRODUCT TAB AREA START (product-item-3) -->
<div class="ltn__product-tab-area ltn__product-gutter pt-115 pb-70">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <!-- <h6 class="section-subtitle ltn__secondary-color">// Cars</h6> -->
                    <h1 class="section-title">Our Products</h1>
                    <p>Our products are high quality and original</p>
                </div>
                <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                    <div class="nav">
                        <a class="active show" data-bs-toggle="tab" href="#liton_tab_3_1">All</a>
                        @foreach($categories as $category)
                        <a data-bs-toggle="tab" href="#category{{ $category->id }}" class="">{{$category->category_name_en}}</a>
                       @endforeach
                        
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_tab_3_1">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                <!-- product-item -->
@foreach($products as $product)
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-3 text-center">
                                        
                                        <div class="product-img">
                                            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img src="{{ asset($product->product_thambnail) }}"></a>
                                            <div class="product-badge">
                                                @php
                                            $amount = $product->selling_price - $product->discount_price;
                                            $discount = ($amount/$product->selling_price) * 100;
                                            @endphp 
                                                <ul>
                                                    @if ($product->discount_price == NULL)
                                                    <li class="sale-badge">New</li>
            @else
            <li class="sale-badge">{{ round($discount) }}%</li>
            
            @endif
                                                  
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="product-info">
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
                                                                            
                                            <h2 class="product-title"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">{{ $product->product_name_en }}</a></h2>
                                           
                                            <div class="product-price">
                                                @if ($product->discount_price == NULL)
                                                <span>{{ $product->selling_price }} JOD</span>
                                                @else
                                                <span>{{ $product->discount_price }} JOD </span>
                                                <del>{{ $product->selling_price }} JOD</del>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                @endforeach
                                <!--  -->
                            </div>
                        </div>
                    </div>

                    {{-- else categories --}}
                    @foreach($categories as $category)
                    <div class="tab-pane fade" id="category{{ $category->id }}">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                <!-- product-item -->
                                @php
  $catwiseProduct = App\Models\Product::where('category_id',$category->id)->orderBy('id','DESC')->get(); 
@endphp
@forelse($catwiseProduct as $product)
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-3 text-center">
                                        <div class="product-img">
                                            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img src="{{ asset($product->product_thambnail) }}"></a>
                                            <div class="product-badge">
                                                @php
                                            $amount = $product->selling_price - $product->discount_price;
                                            $discount = ($amount/$product->selling_price) * 100;
                                            @endphp 
                                                <ul>
                                                    @if ($product->discount_price == NULL)
                                                    <li class="sale-badge">New</li>
            @else
            <li class="sale-badge">{{ round($discount) }}%</li>
            
            @endif
                                                  
                                                </ul>
                                            </div>
                                           
                                        </div>
                                        <div class="product-info">
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
                                                                            
                                            <h2 class="product-title"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">{{ $product->product_name_en }}</a></h2>
                                            <div class="product-price">
                                                @if ($product->discount_price == NULL)
                                                <span>{{ $product->selling_price }} JOD</span>
                                                @else
                                                <span>{{ $product->discount_price }} JOD </span>
                                                <del>{{ $product->selling_price }} JOD</del>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                  @empty
                  <h5 class="text-danger"> Sorry, No Product Here yet</h5>

                  @endforelse<!--  // end all optionproduct foreach  -->
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- end  --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT TAB AREA END -->

<!-- PRODUCT AREA START (product-item-3) -->
<div class="ltn__product-area ltn__product-gutter  no-product-ratting pt-85 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Special Offer</h1>
                </div>
            </div>
        </div>
        <div class="row">
          
            <div class="col-lg-9">
                <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                    <!-- ltn__product-item -->
                    @foreach($special_offer as $product)
                    <div class="col-lg-3--- col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-2 text-left">
                            <div class="product-img">
                                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img src="{{ asset($product->product_thambnail) }}" alt="#"></a>
                               
                                    @php
                                    $amount = $product->selling_price - $product->discount_price;
                                    $discount = ($amount/$product->selling_price) * 100;
                                    @endphp 
                                    <div class="product-badge">

                                        <ul>
                                            @if ($product->discount_price == NULL)
                                            <li class="sale-badge d-none">New</li>
    @else
    <li class="sale-badge">{{ round($discount) }}%</li>
    
    @endif
                                          
                                        </ul>
                                </div>
                                
                            </div>
                            <div class="product-info">
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
                                                                
                                <h2 class="product-title"><a href="product-details.html">{{ $product->product_name_en }}</a></h2>
                                <div class="product-price">
                                    @if ($product->discount_price == NULL)
                                    <span>{{ $product->selling_price }} JOD</span>
                                    @else
                                    <span>{{ $product->discount_price }} JOD </span>
                                    <del>{{ $product->selling_price }} JOD</del>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT AREA END -->



<!-- COUNTDOWN AREA START -->
<div class="ltn__call-to-action-area section-bg-1 bg-image pt-120 pb-120" data-bs-bg="https://i0.wp.com/mahometdaily.com/wp-content/uploads/2022/01/pharmacy-crisis.png?resize=780%2C414&ssl=1">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-4">
                <!-- <img src="img/banner/15.png" alt="#"> -->
            </div>
            <div class="col-lg-5 col-md-6 col-sm-8">
                <div class="call-to-action-inner text-color-white--- text-center---">
                    <div class="section-title-area ltn__section-title-2--- text-center---">
                        <h6 class="ltn__secondary-color">Winter Hot Offer</h6>
                        <h1 class="section-title">Buy all your medicines <br> at 30% offer</h1>
                        <h3> Use "Winter23" Coupon Code</h3>
                    </div>
                   
                    <div class="btn-wrapper animated">
                        <a href="{{ route('shop.page') }}" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTDOWN AREA END -->

<!-- PRODUCT AREA START (product-item-3) -->
<div class="ltn__product-area ltn__product-gutter pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Special Deals</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
            <!-- ltn__product-item -->
            @foreach($special_deals as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img src="{{ asset($product->product_thambnail) }}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                @if ($product->discount_price == NULL)
                                <li class="sale-badge">New</li>
@else
<li class="sale-badge">{{ round($discount) }}%</li>

@endif
                              
                            </ul>
                        </div>
                        
                    </div>
                    <div class="product-info">
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
                                                        
                        <h2 class="product-title"><a href="product-details.html">{{ $product->product_name_en }}</a></h2>
                        <div class="product-price">
                            @if ($product->discount_price == NULL)
                            <span>{{ $product->selling_price }} JOD</span>
                            @else
                            <span>{{ $product->discount_price }} JOD </span>
                            <del>{{ $product->selling_price }} JOD</del>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- PRODUCT AREA END -->

<!-- SMALL PRODUCT LIST AREA START -->
<div class="ltn__small-product-list-area section-bg-1 pt-115 pb-90 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Featured Products</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- featured -->
            @foreach($featured as $product)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="ltn__small-product-item">
                    <div class="small-product-item-img">
                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img src="{{ asset($product->product_thambnail) }}" alt="Image"></a>
                    </div>
                    <div class="small-product-item-info">
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
                                                       
                        <h2 class="product-title"><a href="product-details.html">{{ $product->product_name_en }}</a></h2>

                        
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
                    </div>
                </div>
                
            </div>
            
            @endforeach
            {{-- end featured --}}
           
        </div>
    </div>
</div>
<!-- SMALL PRODUCT LIST AREA END -->





<!-- TESTIMONIAL AREA START (testimonial-4) -->
{{-- <div class="ltn__testimonial-area section-bg-1 pt-290 pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">Testimonials</h6>
                    <h1 class="section-title">Clients Feedbacks<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
            <div class="col-lg-12">
                <div class="ltn__testimonial-item ltn__testimonial-item-4">
                    <div class="ltn__testimoni-img">
                        <img src="img/testimonial/6.jpg" alt="#">
                    </div>
                    <div class="ltn__testimoni-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h4>Rosalina D. William</h4>
                        <h6>Founder</h6>
                    </div>
                    <div class="ltn__testimoni-bg-icon">
                        <i class="far fa-comments"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__testimonial-item ltn__testimonial-item-4">
                    <div class="ltn__testimoni-img">
                        <img src="img/testimonial/7.jpg" alt="#">
                    </div>
                    <div class="ltn__testimoni-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h4>Rosalina D. William</h4>
                        <h6>Founder</h6>
                    </div>
                    <div class="ltn__testimoni-bg-icon">
                        <i class="far fa-comments"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__testimonial-item ltn__testimonial-item-4">
                    <div class="ltn__testimoni-img">
                        <img src="img/testimonial/1.jpg" alt="#">
                    </div>
                    <div class="ltn__testimoni-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h4>Rosalina D. William</h4>
                        <h6>Founder</h6>
                    </div>
                    <div class="ltn__testimoni-bg-icon">
                        <i class="far fa-comments"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__testimonial-item ltn__testimonial-item-4">
                    <div class="ltn__testimoni-img">
                        <img src="img/testimonial/2.jpg" alt="#">
                    </div>
                    <div class="ltn__testimoni-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h4>Rosalina D. William</h4>
                        <h6>Founder</h6>
                    </div>
                    <div class="ltn__testimoni-bg-icon">
                        <i class="far fa-comments"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__testimonial-item ltn__testimonial-item-4">
                    <div class="ltn__testimoni-img">
                        <img src="img/testimonial/5.jpg" alt="#">
                    </div>
                    <div class="ltn__testimoni-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h4>Rosalina D. William</h4>
                        <h6>Founder</h6>
                    </div>
                    <div class="ltn__testimoni-bg-icon">
                        <i class="far fa-comments"></i>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div> --}}
<!-- TESTIMONIAL AREA END -->

<!-- BLOG AREA START (blog-3) -->
{{-- <div class="ltn__blog-area pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color">News & Blogs</h6>
                    <h1 class="section-title">Leatest News Feeds</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/1.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Decorate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">10 Brilliant Ways To Decorate Your Home</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/2.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Interior</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">The Most Inspiring Interior Design Of 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/3.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Estate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Recent Commercial Real Estate Transactions</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/4.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Room</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Renovating a Living Room? Experts Share Their Secrets</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/5.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Trends</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">7 home trends that will shape your house in 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div> --}}

<!-- BLOG AREA END -->

@endsection