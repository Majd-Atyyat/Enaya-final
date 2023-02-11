@extends('frontend.main_master')
@section('content')
@section('title')
Product Search Page 
@endsection




<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="ltn__breadcrumb-inner">
                  <h1 class="page-title">Search Results</h1>
                  <div class="ltn__breadcrumb-list">
                      <ul>
                          <li><a href="{{url('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                          <li>Search Results</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ltn__product-gutter mb-120">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="ltn__shop-options">
                  <ul>
                     
                      <li>
                       
                      </li>
                      <li>
                         <div class="showing-product-number text-right">
                              <span>Showing {{ count($products) }} results</span>
                          </div> 
                      </li>
                  </ul>
              </div>
              <div class="tab-content">
                  <div class="tab-pane fade active show" id="liton_product_grid">
                      <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                          <div class="row">
                              <!-- ltn__product-item -->
                              @foreach($products as $product)
                              <div class="col-xl-3 col-lg-4 col-sm-6 col-6">
                                  <div class="ltn__product-item ltn__product-item-3 text-center">
                                      <div class="product-img">
                                          <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img src="{{ asset($product->product_thambnail) }}" alt="#"></a>
                                          @php
                                                $amount = $product->selling_price - $product->discount_price;
                                                $discount = ($amount/$product->selling_price) * 100;
                                                @endphp
                                                <div class="product-badge">
                                                    @if ($product->discount_price == NULL)
                                                    <ul>
                                                        
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                    @else
                                                    <ul>
                                                        
                                                        <li class="sale-badge">{{ round($discount) }}%</li>
                                                    </ul>
                                                    @endif
                                                </div>
                                          <div class="product-hover-action">
                                            
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

                                            <span>{{ $product->discount_price }} JOD</span>
                                            
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
                  
              </div>
              <div class="ltn__pagination-area text-center">
                  <div class="ltn__pagination">
                      <ul>
                          <li class="active"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                          <li><a href="#">1</a></li>
                          <li ><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                         
                          <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- PRODUCT DETAILS AREA END -->



@endsection

