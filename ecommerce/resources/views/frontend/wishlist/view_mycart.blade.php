@extends('frontend.main_master')
@section('content')

@section('title')
My Cart Page 
@endsection


 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="ltn__breadcrumb-inner">
					<h1 class="page-title">Cart</h1>
					<div class="ltn__breadcrumb-list">
						<ul>
							<li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
							<li>Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- SHOPING CART AREA START -->
<div class="liton__shoping-cart-area mb-120">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="shoping-cart-inner">
					<div class="shoping-cart-table table-responsive">
						<table class="table">
							<!-- <thead>
								<th class="cart-product-remove">Remove</th>
								<th class="cart-product-image">Image</th>
								<th class="cart-product-info">Product</th>
								<th class="cart-product-price">Price</th>
								<th class="cart-product-quantity">Quantity</th>
								<th class="cart-product-subtotal">Subtotal</th>
							</thead> -->
							<tbody>
								<tr id="cartPage">
									
								</tr>
								@if(Session::has('coupon'))

	@else
								<tr class="cart-coupon-row">
									<td colspan="6">
										<div class="cart-coupon">
											<input type="text" name="cart-coupon" placeholder="Coupon code" id="coupon_name">
											<button type="submit" onclick="applyCoupon()" class="btn theme-btn-2 btn-effect-2">Apply Coupon</button>
										</div>
									</td>
									@endif
									<td>
										<button type="submit" class="btn theme-btn-2 " onClick="window.location.reload();" >Update Cart</button>
									</td>
								</tr>
								
							</tbody>
						</table>
					</div>
					<div class="shoping-cart-total mt-50">
						<h4>Cart Totals</h4>
						<table    class="table">
							<tbody id="couponCalField">
								
							</tbody>
						</table>
						<div class="btn-wrapper text-right">
							<a href="{{ route('checkout') }}" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- SHOPING CART AREA END -->




<br>
 @include('frontend.body.brands')
</div>

 
@endsection
