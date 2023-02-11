@extends('frontend.main_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('title')
Cash On Delivery
@endsection

 
 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="ltn__breadcrumb-inner">
					<h1 class="page-title">Cash On Delivery</h1>
					<div class="ltn__breadcrumb-list">
						<ul>
							<li><a href="{{url('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
							<li>Cash On Delivery</li>
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
			<div class=" d-flex align-items-center justify-content-center">
				<div class="shoping-cart-table table-responsive">
					
				</div>
				<div class="shoping-cart-inner">
					
					<div class="shoping-cart-total mt-50">
						<h4>Cart Totals</h4>
						<table    class="table">
							<tbody id="couponCalField">
								
							</tbody>
						</table>
						<div class="btn-wrapper text-right">
							<form action="{{ route('cash.order') }}" method="post" id="payment-form">
								@csrf
			<div class="form-row">
	
			  
	
				<label for="card-element">
			   
		  <input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
		  <input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
		  <input type="hidden" name="phone" value="{{ $data['shipping_phone'] }}">
		  <input type="hidden" name="post_code" value="{{ $data['post_code'] }}">
		  <input type="hidden" name="division_id" value="{{ $data['division_id'] }}">
		  <input type="hidden" name="district_id" value="{{ $data['district_id'] }}">
		  <input type="hidden" name="state_id" value="{{ $data['state_id'] }}">
		  <input type="hidden" name="notes" value="{{ $data['notes'] }}"> 
	
				</label>
				 
			   
			  
			   
			</div>
			<br>
			<button class="btn btn-success">Submit Payment</button>
			</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- SHOPING CART AREA END -->







@endsection