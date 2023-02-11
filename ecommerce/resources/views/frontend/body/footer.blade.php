 <!-- CALL TO ACTION START (call-to-action-6) -->
 <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                    <div class="coll-to-info text-color-white">
                        <h1>Buy the best  viataminsto bost your immunity<br>  and protect your loved ones</h1>
                    </div>
                    <div class="btn-wrapper">
                        <a class="btn btn-effect-3 btn-white" href="{{ route('shop.page') }}">Explore Products <i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->

<footer class="ltn__footer-area  ">
    <div class="footer-top-area  section-bg-2 plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-about-widget">
                        <div class="footer-logo">
                            <div class="site-logo">
                                <img src="{{asset('frontend/assets/img/logo-2.png')}}" alt="Logo">
                            </div>
                        </div>
                        <p> Enaya is much more than an E-commerce. Our patients and customers are our main focus and we endeavour to provide them with high quality healthcare products</p>
                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p>Jordan, Amman</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="tel:00962 77 5252251">00962 77 5252251</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-mail"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="mailto:majdatyyat@gmail.com">majdatyyat@gmail.com</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ltn__social-media mt-20">
                            <ul>
                                <li><a href="https://www.facebook.com/" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/?lang=en" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            
                                            <li><a href="https://www.instagram.com/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Company</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="{{url('/about')}}">About</a></li>
                                
                                <li><a href="{{ route('shop.page') }}">All Products</a></li>
                               
                                <li><a href="{{url('/about')}}">FAQ</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
              
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Customer Care</h4>
                        <div class="footer-menu">
                            <ul>
                                @auth 
                                                <li><a href="{{ route('dashboard') }}">My Account</a></li>
                                                
                                                <li><a href="{{route('user.logout')}}">Log out</a></li>
                                                
                                                @else
                                                <li><a href="{{ route('login') }}">Sign in</a></li>
                                                <li><a href="{{ route('register') }}">Register</a></li>
                                                @endauth
                                
                               
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                    <div class="footer-widget footer-newsletter-widget">
                        <h4 class="footer-title">Newsletter</h4>
                        <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                        <div class="footer-newsletter">
                            <form action="#">
                                <input type="email" name="email" placeholder="Email*">
                                <div class="btn-wrapper">
                                    <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
        <div class="container-fluid ltn__border-top-2">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="ltn__copyright-design clearfix">
                        <p>All Rights Reserved @ Enaya <span class="current-year">2023</span></p>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</footer>