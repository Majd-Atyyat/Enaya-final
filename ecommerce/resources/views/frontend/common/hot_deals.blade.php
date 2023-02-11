@php
$hot_deals = App\Models\Product::where('hot_deals',1)->where('discount_price','!=',NULL)->orderBy('id','DESC')->limit(3)->get();
     @endphp
<div class="col-lg-4">
  <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
      <!-- Top Rated Product Widget -->
      <div class="widget ltn__top-rated-product-widget">
          <h4 class="ltn__widget-title ltn__widget-title-border">Hot Deals Product</h4>
          <ul>
              {{-- start hot deals --}}
              {{-- @foreach($hot_deals as $product) --}}
              @foreach($hot_deals as $product)
              <li>
                
                  <div class="top-rated-product-item clearfix">
                      <div class="top-rated-product-img">
                          <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img src="{{ asset($product->product_thambnail) }}" alt="#"></a>
                      </div>
                      <div class="top-rated-product-info">
                          <div class="product-ratting">
                              <ul>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                              </ul>
                          </div>
                          <h6><a href="product-details.html">{{ $product->product_name_en }}</a></h6>
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
              </li>
              @endforeach
              {{-- end hot deals --}}
             
          </ul>
      </div>

      <!-- Banner Widget -->
      {{-- <div class="widget ltn__banner-widget">
          <a href="shop.html"><img src="img/banner/2.jpg" alt="#"></a>
      </div> --}}
  </aside>
</div>