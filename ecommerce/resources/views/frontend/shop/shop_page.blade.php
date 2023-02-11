@extends('frontend.main_master')
@section('content')
@section('title')
Enaya Shop
@endsection

<div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Enaya Shop</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{url('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Shop</li>
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
                <div class="col-lg-8 order-lg-2 mb-120">
                    <div class="ltn__shop-options">
                     <h1>Our Products</h1>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    @foreach($products as $product)
                                    <div class="col-xl-4 col-sm-6 col-6">
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
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="ltn__pagination-area text-center">
                        {{ $products->links('vendor.pagination.custom')  }}
                    </div>
                </div>

                <div class="col-lg-4  mb-120">
                  <form action="{{ route('shop.filter') }}" method="post">
                    @csrf
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                        
                      
                       
                        <!-- Category Widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                            
                            <div class="sidebar-widget-body">
                              <div class="accordion">
              
                                @if(!empty($_GET['category']))
                                @php
                                $filterCat = explode(',',$_GET['category']);
                                @endphp
                                @endif
              
              
              
               @foreach($categories as $category)
                <div class="accordion-group">
                <div class="accordion-heading">   
              
               <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="category[]" value="{{ $category->category_slug_en }}" @if(!empty($filterCat) && in_array($category->category_slug_en,$filterCat)) checked @endif  onchange="this.form.submit()">
              
                 {{ $category->category_name_en }} 
                 
               </label>
              
              
                </div>
                <!-- /.accordion-heading -->
               
                 
                </div>
                <!-- /.accordion-group -->
                  @endforeach              
                              
              
                        </div>

                    </aside>
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                        
                      
                       
                      <!-- Brand Widget -->
                      <div class="widget ltn__menu-widget">
                          <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                          
                          <div class="sidebar-widget-body">
                            <div class="accordion">
            
                              @if(!empty($_GET['brand']))
                              @php
                              $filterBrand = explode(',',$_GET['brand']);
                              @endphp
                              @endif
            
            
            
             @foreach($brands as $brand)
              <div class="accordion-group">
              <div class="accordion-heading">   
            
             <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="brand[]" value="{{ $brand->brand_slug_en }}" @if(!empty($filterBrand) && in_array($brand->brand_slug_en,$filterBrand)) checked @endif onchange="this.form.submit()">
            
              {{ $brand->brand_name_en }} 
               
             </label>
            
            
              </div>
              <!-- /.accordion-heading -->
             
               
              </div>
              <!-- /.accordion-group -->
                @endforeach              
                            

                  </aside>
                  </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <!-- PRODUCT DETAILS AREA END -->