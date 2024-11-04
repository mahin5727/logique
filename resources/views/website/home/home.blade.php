@extends('website.layouts.main')
@section('content')
          <!-- Header Start -->
          <div class="container-fluid header bg-dark-theme bg-dark p-0">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-12 text-center p-5 py-5 mt-5 p-a">
                    <h1 class="display-5 mt-lg-5 py-4 animated fadeIn mb-4 text-dark-custom">Web Development & <br> Digital Marketing <span class="text-dark-custom">Agency</span></h1>
                    <div class="overflow-hidden wow  slideInLeft d-flex justify-content-center" style="visibility: visible; animation-name: slideInLeft;">
                        <div itemscope="" itemtype="http://schema.org/Person" class="fiverr-seller-widget" style="display: inline-block;">
            <a itemprop="url" href="https://www.fiverr.com/logique_inc" rel="nofollow" target="_blank" style="display: inline-block;">
               <div class="fiverr-seller-content" id="fiverr-seller-widget-content-627e3570-276d-4cb6-a975-06162ffbe33a" itemprop="contentURL" style="display: inline-block;"><div class="crop"><img src="https://d2nb1f6l8b7ky0.cloudfront.net/missing-image-250x250-new.png" class="fiverr-profile-img">             <div class="overlay"></div></div>             <img src="https://d2nb1f6l8b7ky0.cloudfront.net/fiverr_icon.png" class="fiverr-icon">              <div class="fiverr-seller-text"> Seller </div>             <div class="fiverr-seller-category"> Programming &amp; Tech </div>             <div class="fiverr-rating-stars" id="fiverr-rating-stars-627e3570-276d-4cb6-a975-06162ffbe33a" style="display: block;">  </div>             <div class="check-gigs-btn">Check out my Gigs</div></div>
               <div id="fiverr-widget-seller-data" style="display: none; height:70%">
                   <div itemprop="name">logique_inc</div>
                   <div itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">Fiverr</span></div>
                   <div itemprop="jobtitle">Seller</div>
                   <div itemprop="description">Are you ready to elevate your business and thrive in the dynamic digital landscape? Our IT company offers a full suite of services to help you build a strong and impactful online presence. From innovative web design and development to SEO and mobile app solutions, we turn your vision into reality. But we don’t stop there—our team is dedicated to providing ongoing support to ensure your digital success continues to grow. Let us be your trusted partner in transforming your business for the future.</div>
               </div>
           </a>
        </div>
                        <!--<img src="https://logiquellc.com/website-assets/images/about-us.jpg" alt="About Us" class="img-fluid hvr-bounce-in mb-n1" />-->
                        </div>
                    {{-- <p class="animated fadeIn text-white mb-4 pb-2">In This Era Of Digital Transformation, Organizations Are Consistently Trying To Revamp Their Strategies.<br> We Specialize In Web Design, Development, Digital Marketing, and Social Media Marketing Services.</p>
                    <a href="" class="btn btn-custom py-3 px-5 me-3 animated fadeIn">Get Started</a> --}}
                </div>
                
            </div>
            <img class="img-fluid slider " style="height: 100vh" src="{{asset('website-assets/img/images/slide-one.jpg')}}" alt="">
        </div>
        <!-- Header End -->


         <!-- About Start -->
         <div class="container-xxl bg-dark-theme text-white py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="{{asset('website-assets/img/images/slide-one.jpg')}}">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4 text-custom">About Us</h1>
                        <p class="mb-4">Our Team Consists Of Highly Skilled Software Developers In the USA And UK With Vast Experience And Deep Knowledge Of The Latest Technologies. We Are Committed To Delivering First-Class Software Solutions To Help Companies Achieve Their Digital Transformation Goals. Software Technology Is Our Strength, And Creating Value For Our Clients Is Our Passion. We Strive To Make A Difference With Fairness And Innovation To Deliver The Perfect Digital Solution In The Market. Our Core Competency Lies In Web Development, API Integration, Shopify App Design, SEO, GIS Mapping, And Google Sheets Or Forms In USA And UK.</p>
                        <p><i class="fa fa-check text-custom me-3"></i>Mission: We deliver Uniqueness and Quality.</p>
                        <p><i class="fa fa-check text-custom me-3"></i>
                            Skills: Delivering fast and excellent results.</p>
                        <p><i class="fa fa-check text-custom me-3"></i>
                            Clients: Satisfied clients thanks to our experience.</p>
                        <!-- <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Category Start -->
        <div class="container-xxl bg-dark-theme text-white py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3 text-dark-custom">Our Services</h1>
                    <p>We Are IT Company With Extensive Experience And Specialization In Creating Custom Software Applications Designed To Suit Your Business Requirements In USA And UK.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 bg-dark-theme bg-dark wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-custom text-center rounded p-3" href="{{route('web-dev')}}">
                            <div class="rounded bg-dark-theme p-4">
                                <div class="icon bg-dark-theme bg-dark mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-desktop-alt text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">WEB DEVELOPMENT</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 bg-dark-theme bg-dark wow fadeInUp" data-wow-delay="0.2s">
                        <a class="cat-item d-block bg-custom text-center rounded p-3" href="{{route('web-dev')}}">
                            <div class="rounded bg-dark-theme p-4">
                                <div class="icon bg-dark-theme bg-dark mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-desktop-alt text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">WEB DEVELOPMENT</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 bg-dark-theme bg-dark wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-custom text-center rounded p-3" href="{{route('web-dev')}}">
                            <div class="rounded bg-dark-theme p-4">
                                <div class="icon bg-dark-theme bg-dark mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-desktop-alt text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">WEB DEVELOPMENT</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 bg-dark-theme bg-dark wow fadeInUp" data-wow-delay="0.4s">
                        <a class="cat-item d-block bg-custom text-center rounded p-3" href="{{route('web-dev')}}">
                            <div class="rounded bg-dark-theme p-4">
                                <div class="icon bg-dark-theme bg-dark mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-desktop-alt text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">WEB DEVELOPMENT</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 bg-dark-theme bg-dark wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-custom text-center rounded p-3" href="{{route('web-dev')}}">
                            <div class="rounded bg-dark-theme p-4">
                                <div class="icon bg-dark-theme bg-dark mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-desktop-alt text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">WEB DEVELOPMENT</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 bg-dark-theme bg-dark wow fadeInUp" data-wow-delay="0.6s">
                        <a class="cat-item d-block bg-custom text-center rounded p-3" href="{{route('web-dev')}}">
                            <div class="rounded bg-dark-theme p-4">
                                <div class="icon bg-dark-theme bg-dark mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-desktop-alt text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">WEB DEVELOPMENT</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 bg-dark-theme bg-dark wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item d-block bg-custom text-center rounded p-3" href="{{route('web-dev')}}">
                            <div class="rounded bg-dark-theme p-4">
                                <div class="icon bg-dark-theme bg-dark mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-desktop-alt text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">WEB DEVELOPMENT</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 bg-dark-theme bg-dark wow fadeInUp" data-wow-delay="0.8s">
                        <a class="cat-item d-block bg-custom text-center rounded p-3" href="{{route('web-dev')}}">
                            <div class="rounded bg-dark-theme p-4">
                                <div class="icon bg-dark-theme bg-dark mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-desktop-alt text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">WEB DEVELOPMENT</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


       


        <!-- Property List Start -->
        <div class="container-xxl bg-dark-theme text-white py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3 text-dark-custom">Our Projects</h1>
                            <!-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://staytick.com/en"><img class="img-fluid"  src="{{asset('website-assets/img/projects/project-one.PNG')}}" style="height: 200px;" alt=""></a>
                                        <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div> -->
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-custom mb-3">StayTick</h5>
                                        <a class="d-block h6 py-2 mb-2 text-white text-decoration-none" >This is a good project</a>
                                        <!-- <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p> -->
                                    </div>
                                    <div class="d-flex border-top">
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small> -->
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small> -->
                                        <a class="flex-fill text-center text-white py-2" href="https://staytick.com/en"><i class="fa fa-globe text-custom me-2"></i>Visit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://fdp-front.deviotech.com/"><img class="img-fluid"  src="{{asset('website-assets/img/projects/florida-driving.PNG')}}" style="height: 200px;" alt=""></a>
                                        <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div> -->
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-custom mb-3">Florida Driving</h5>
                                        <a class="d-block h6 py-2 mb-2 text-white text-decoration-none" >This is a good project</a>
                                        <!-- <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p> -->
                                    </div>
                                    <div class="d-flex border-top">
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small> -->
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small> -->
                                        <a class="flex-fill text-center text-white py-2" href="https://fdp-front.deviotech.com/"><i class="fa fa-globe text-custom me-2"></i>Visit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://thebengp.com/"><img class="img-fluid"  src="{{asset('website-assets/img/projects/Bengeb.PNG')}}" style="height: 200px;" alt=""></a>
                                        <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div> -->
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-custom mb-3">BenGP</h5>
                                        <a class="d-block h6 py-2 mb-2 text-white text-decoration-none" >This is a good project</a>
                                        <!-- <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p> -->
                                    </div>
                                    <div class="d-flex border-top">
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small> -->
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small> -->
                                        <a class="flex-fill text-center text-white py-2" href="https://thebengp.com/"><i class="fa fa-globe text-custom me-2"></i>Visit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://granitesworktops.co.uk/"><img class="img-fluid"  src="{{asset('website-assets/img/projects/project-four.PNG')}}" style="height: 200px;" alt=""></a>
                                        <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div> -->
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-custom mb-3">Granite WorkTops</h5>
                                        <a class="d-block h6 py-2 mb-2 text-white text-decoration-none" >This is a good project</a>
                                        <!-- <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p> -->
                                    </div>
                                    <div class="d-flex border-top">
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small> -->
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small> -->
                                        <a class="flex-fill text-center text-white py-2" href="https://granitesworktops.co.uk/"><i class="fa fa-globe text-custom me-2"></i>Visit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://stay-blessed-insurance.deviotech.com/"><img class="img-fluid" style="height: 200px;" src="{{asset('website-assets/img/projects/WDN.PNG')}}" alt=""></a>
                                        <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div> -->
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-custom  mb-3">Stay Blessed Insurance</h5>
                                        <a class="d-block h6 py-2 mb-2 text-white text-decoration-none" >This is a good project</a>
                                        <!-- <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p> -->
                                    </div>
                                    <div class="d-flex border-top">
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small> -->
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small> -->
                                        <a class="flex-fill text-center text-white py-2" href="https://stay-blessed-insurance.deviotech.com/"><i class="fa fa-globe text-custom me-2"></i>Visit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://harmo.com/en/"><img class="img-fluid" style="height: 200px;" src="{{asset('website-assets/img/projects/project-five.PNG')}}" alt=""></a>
                                        <!-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div> -->
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-custom mb-3">StayTick</h5>
                                        <a class="d-block h6 py-2 mb-2 text-white text-decoration-none" >This is a good project</a>
                                        <!-- <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p> -->
                                    </div>
                                    <div class="d-flex border-top">
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small> -->
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small> -->
                                        <a class="flex-fill text-center text-white py-2" href="https://harmo.com/en/"><i class="fa fa-globe text-custom me-2"></i>Visit</a>
                                    </div>
                                </div>
                            </div>
                            
                          
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-custom py-3 px-5" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{asset('website-assets/img/property-1.jpg')}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{asset('website-assets/img/property-2.jpg')}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{asset('website-assets/img/property-3.jpg"')}} alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{asset('website-assets/img/property-4.jpg')}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{asset('website-assets/img/property-5.jpg')}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{asset('website-assets/img/property-6.jpg')}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Shop</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{asset('website-assets/img/property-1.jpg')}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{asset('website-assets/img/property-2.jpg')}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{asset('website-assets/img/property-3.jpg')}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{asset('website-assets/img/property-4.jpg')}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{asset('website-assets/img/property-5.jpg')}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{asset('website-assets/img/property-6.jpg')}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Shop</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$12,345</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->


        <!-- Call to Action Start -->
        <div class="container-xxl bg-dark-theme text-white py-5">
            <div class="container">
                <div class="bg-custom rounded p-3">
                    <div class=" rounded bg-dark bg-dark-theme p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="{{asset('website-assets/img/call-to-action.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6  wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3 text-custom">Contact With Our Certified Agent</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit diam justo sed vero dolor duo.</p>
                                </div>
                                <a href="" class="btn btn-custom py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->

        <!-- Testimonial Start -->
        <div class="container-xxl  bg-dark-theme text-white py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3 text-dark-custom">Trusted Happy Customers</h1>
                    <p>Client's Feedback</p>
                </div>
                <div class="owl-carousel testimonial-carousel bg-dark bg-dark-theme wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-custom rounded p-3" >
                        <div class="bg-dark bg-dark-theme border rounded p-4 text-white " style="min-height: 240px;">
                            <p>"Fantastic team, we have been working together for over 8 months now. I’m excited about what we can do together in the future."</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('website-assets/img/testimonial-1.jpg')}}" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1 text-custom">Ardalan</h6>
                                    <small>CEO / CHWG</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-custom rounded p-3">
                        <div class="bg-dark-theme bg-dark border rounded p-4 text-white" style="min-height: 240px;">
                            <p>"Muhammad and his team did a great job! Their communication is excellent and they went the extra mile in fine-tuning and adjusting subjective aspects of the design. Their knowledge and experience are evident in the quality of their work"</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('website-assets/img/testimonial-2.jpg')}}" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1 text-custom">Nicholas</h6>
                                    <small>CEO / Vision Gulf</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-custom rounded p-3">
                        <div class="bg-white border rounded p-4 text-dark"  style="min-height: 240px;">
                            <p>"These guys were great! Very responsive, and easy to communicate with. Their work was very professional and of great quality!"</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('website-assets/img/testimonial-3.jpg')}}" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Moeismail</h6>
                                    <small>CTO / Temp Hub</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item bg-custom rounded p-3">
                        <div class="bg-white border rounded p-4 text-dark"  style="min-height: 240px;">
                            <p>"3 months in and so far happy with the quality of SEO implemented .keywords are gradually going up in the ranks"</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('website-assets/img/testimonial-3.jpg')}}" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">John McDonald</h6>
                                    <small>PM / Junk IT</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
@endsection