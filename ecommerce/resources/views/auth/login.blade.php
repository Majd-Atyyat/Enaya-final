@extends('frontend.main_master')
@section('content')
  <!-- BREADCRUMB AREA START -->
  <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Account</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{url('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- LOGIN AREA START -->
<div class="ltn__login-area pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Sign In <br>To  Your Account</h1>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="account-login-inner">
                    
                    <form class="ltn__form-box contact-form-box" method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                        @csrf 
                        <input type="text" id="email" name="email" placeholder="Email*" >
             @error('email')
             <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input type="password" id="password" name="password" placeholder="Password*" >
            @error('password')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
           @enderror
                        
                        <div class="btn-wrapper mt-0">
                            <button class="theme-btn-1 btn btn-block" type="submit">SIGN IN</button>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center pt-50">
                    <h4>DON'T HAVE AN ACCOUNT?</h4>
                    <p> 
                        check out more quickly and use coupones</p>
                    <div class="btn-wrapper">
                        <a href="{{ route('register') }}" class="theme-btn-1 btn black-btn">CREATE ACCOUNT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->


@endsection