@extends('frontend.main_master')
@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">About Us</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{url('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-25--- pb-120 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{asset('frontend/assets/img/pharmacist.jpg')}}" alt="About Us Image">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-30">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color d-none">About Us</h6>
                            <h1 class="section-title"> Our patients and customers are our main focus and we provide them with high quality healthcare products</p>
                        </div>
                        <ul class="ltn__list-item-1 ltn__list-item-1-before--- clearfix">
                            <li><i class="fas fa-check-square"></i> Better security for patient privacy and information.</li>
                            <li><i class="fas fa-check-square"></i> More products at lower prices.</li>
                            <li><i class="fas fa-check-square"></i> Free Dilevery</li>
                        </ul>
                        <div class="about-author-info-2 border-top mt-30 pt-20">
                            <ul>
                                <li>
                                    <div class="about-author-info-2-brief  d-flex">
                                       
                                        <div class="author-name-designation">
                                            <h4 class="mb-0">Majd Atyyat</h4>
                                            <small>Pharmacist</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-author-info-2-contact  d-flex">
                                        <div class="about-contact-icon d-flex align-self-center mr-10">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="about-author-info-2-contact-info">
                                            <small>Get Support</small>
                                            <h6 class="mb-0">00962 77 5252251</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

   

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title">Core Features</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center">
                        <div class="ltn__feature-icon">
                           
                            
                            <img src="{{asset('frontend/assets/img/icons/icon-img/24.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4><a href="service-details.html">Free Delivery</a></h4>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center active">
                        <div class="ltn__feature-icon">

                          
                            <img src="  {{asset('frontend/assets/img/icons/icon-img/25.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4><a href="service-details.html"> Great Offers</a></h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-maps-and-location"></i></span> -->
                            <img src="{{asset('frontend/assets/img/icons/icon-img/26.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4><a href="service-details.html">Quality Product</a></h4>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-excavator"></i></span> -->
                            <img src="{{asset('frontend/assets/img/icons/icon-img/27.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4><a href="service-details.html">24/7 Support</a></h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

   

   

  

   

    

   
@endsection