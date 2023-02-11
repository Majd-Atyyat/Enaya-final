@extends('frontend.main_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('title')
My Checkout
@endsection

 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="ltn__breadcrumb-inner">
					<h1 class="page-title">Checkout</h1>
					<div class="ltn__breadcrumb-list">
						<ul>
							<li><a href="{{url('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
							<li>Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- checkout AREA START -->
<div class="ltn__checkout-area mb-105">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="ltn__checkout-inner">
					
					
					<div class="ltn__checkout-single-content mt-50">
						<h4 class="title-2">Billing Details</h4>
						<div class="ltn__checkout-single-content-info">
							<form action="{{ route('checkout.store') }}" method="POST">
								@csrf 
								<h6>Personal Information</h6>
								<div class="row">
									<div class="col-md-6">
										<div class="input-item input-item-name ltn__custom-icon">
											<input type="text" name="shipping_name" value="{{ Auth::user()->name }}" placeholder="First name">
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="input-item input-item-email ltn__custom-icon">
											<input type="email" value="{{ Auth::user()->email }}" name="shipping_email"placeholder="email address">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-item input-item-phone ltn__custom-icon">
											<input type="text" value="{{ Auth::user()->phone }}" name="shipping_phone" placeholder="phone number">
										</div>
									</div>
									
									{{-- <div class="col-md-6">
										<div class="input-item input-item-website ltn__custom-icon">
											<input type="text" name="ltn__phone" placeholder="Company address (optional)">
										</div>
									</div> --}}
								</div>
								<div class="row">
									<div class="col-lg-4 col-md-6">
										<h6>Country</h6>
										<div class="input-item">
											<select name="division_id" class="nice-select">
												<option value="" selected="" disabled=""> Select Country</option>
											
												@foreach($divisions as $item)
												<option value="{{ $item->id }}">{{ $item->division_name }}</option>
												@endforeach
												
											</select>
											@error('division_id') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
										</div>
									</div>
									{{-- <div class="col-lg-12 col-md-12">
										<h6>Address</h6>
										<div class="row">
											<div class="col-md-6">
												<div class="input-item">
													<input type="text" placeholder="House number and street name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-item">
													<input type="text" placeholder="Apartment, suite, unit etc. (optional)">
												</div>
											</div>
										</div>
									</div> --}}
									<div class="col-lg-4 col-md-6">
										<h6>Town / City</h6>
										<div class="input-item">
											<select name="district_id" class="nice-select">
												
												<option disabled="">Select City</option>
												<option value="1" selected="" >Amman</option>
												<option value="2" selected="" >Balqa</option>
												<option value="3" selected="" >Karak</option>
												<option value="4" selected="" >Irbid</option>
												<option value="5" selected="" >Aqaba</option>
												<option value="6" selected="" >Zarqa</option>
												
											</select>
											@error('district_id') 
											<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<h6>State (optional)</h6>
										<div class="input-item">
											
                                                <input name="district_id" type="text" placeholder="State">
                                            
											@error('state_id') 
											<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<h6>Postal Code</h6>
										<div class="input-item">
											<input  name="post_code" type="text" placeholder="Postal Code">
										</div>
									</div>
								</div>
								
								<h6>Order Notes (optional)</h6>
								<div class="input-item input-item-textarea ltn__custom-icon">
									<textarea name="notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
								</div>

							
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="ltn__checkout-payment-method mt-50">
					<h4 class="title-2">Payment Method</h4>
					<div id="checkout_accordion_1">
						
						<!-- card -->
						<div class="card">
							<h5  data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="true"> 
								<input type="radio" name="payment_method" value="cash">
								Cash on delivery 
							</h5>
							<div id="faq-item-2-2" class="collapse show" data-bs-parent="#checkout_accordion_1">
								<div class="card-body">
									<p>Pay with cash upon delivery.</p>
								</div>
							</div>
						</div>                          
						<!-- card -->
					
					</div>
					<div class="ltn__payment-note mt-30 mb-30">
						<p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
					</div>
					<button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button>
				</form>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="shoping-cart-total mt-50">
					<h4 class="title-2">Cart Totals</h4>
					<table class="table">
						<tbody>
							@foreach($carts as $item)
							<tr>
								<td>{{ $item->name }} <strong>× {{ $item->qty }}</strong></td>
								<td>{{ $item->price }} JOD </td>
							</tr>
							@endforeach 
							

							{{-- kkk --}}
							
							@if(Session::has('coupon'))
							<tr>
								<td>Shipping and Handing</td>
								<td>00.00 JOD</td>
							</tr>
							<tr>
								<td>Discount</td>
								<td>- {{ session()->get('coupon')['discount_amount'] }}  JOD</td>
							</tr>
							<tr>
								<td><strong>Order Total</strong></td>
								<td><strong>{{ session()->get('coupon')['total_amount'] }} JOD</strong></td>
							</tr>

							
							
										 @else 

										 <tr>
											<td>Shipping and Handing</td>
											<td>00.00 JOD</td>
										</tr>
										<tr>
											<td>Discount</td>
											<td>00.00 JOD</td>
										</tr>
										<tr>
											<td>Order Total</td>
											<td>{{ $cartTotal }} JOD</td>
										</tr>
							
							
							
							
										 @endif 
	{{-- hh --}}
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- checkout AREA START -->

<script type="text/javascript">
	$(document).ready(function() {
	  $('select[name="division_id"]').on('change', function(){
		  var division_id = $(this).val();
		  if(division_id) {
			  $.ajax({
				  url: "{{  url('/district-get/ajax') }}/"+division_id,
				  type:"GET",
				  dataType:"json",
				  success:function(data) {
					  $('select[name="state_id"]').empty(); 
					 var d =$('select[name="district_id"]').empty();
						$.each(data, function(key, value){
							$('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
						});
				  },
			  });
		  } else {
			  alert('danger');
		  }
	  });
$('select[name="district_id"]').on('change', function(){
		  var district_id = $(this).val();
		  if(district_id) {
			  $.ajax({
				  url: "{{  url('/state-get/ajax') }}/"+district_id,
				  type:"GET",
				  dataType:"json",
				  success:function(data) {
					 var d =$('select[name="state_id"]').empty();
						$.each(data, function(key, value){
							$('select[name="state_id"]').append('<option value="'+ value.id +'">' + value.state_name + '</option>');
						});
				  },
			  });
		  } else {
			  alert('danger');
		  }
	  });

  });
  </script>



@endsection