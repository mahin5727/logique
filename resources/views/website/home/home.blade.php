@extends('website.layouts.main')
@section('css')
<style>
    form .form-label{
        color: white !important;
    }
    form input{
        background-color: black;
    }
</style>
@endsection

@section('content')
          <!-- Header Start -->
          <div class="container-fluid header position-relative p-0">
            <div class="row">
                <div class="col-12 p-5 py-5 mt-5 p-a">
                    <div class="text-center wow fadeInDown">
                        <h3 class="display-6 mt-lg-4 pb-5 animated fadeIn mb-4 " style="color: white; font-weight:500">Web Development & <br> Digital Marketing <span class="" style="color: #309203e0; font-weight:800; border-bottom:3px solid #3eba04e0 ">Agency</span></h2>
                    </div>
                    <div class="overflow-hidden d-flex wow fadeInUp justify-content-center" style="visibility: visible;    ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 d-none mt-3 d-lg-flex justify-content-center" >
                                    <!-- Put this code anywhere in the body of your page where you want the badge to show up. -->
                                    <a href="https://www.fiverr.com/logique_inc" target="_blank"><img src="{{asset('website-assets/img/fiverrcard2.jpeg')}}" height="300px" style="border-radius:10px"/></a>
                                    
                                    <a href="https://www.fiverr.com/logique_inc" target="_blank"><img src="{{asset('website-assets/img/fiverrcard3.jpeg')}}" height="300px" style="border-radius:10px; margin-left:50px"/></a>

                                    <!-- Put this code anywhere in the body of your page where you want the badge to show up. -->
                                   
                                </div>
                                <div class="col-lg-6 col-12">
                                    <form class="lead-form">
                                        <div class="mb-3 mt-2">
                                            <label for="exampleFormControlInput1" class="form-label" style="color: white">Company Name</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Logique" style="background-color: rgba(0, 0, 0, 0.24); color:white;border:none; border-bottom:1px solid #2f9201e0 ">
                                        </div>
                                        <div class="mb-3 mt-2">
                                            <label for="exampleFormControlInput1" class="form-label" style="color: white">Email Address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" style="background-color: rgba(0, 0, 0, 0.24); color:white;border:none; border-bottom:1px solid #2f9201e0 ">
                                        </div>
                                        <div class="mb-3 mt-2">
                                            <label for="exampleFormControlInput1" class="form-label" style="color: white">Business / Profile URL</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="https://logiquellc.com/" style="background-color: rgba(0, 0, 0, 0.24); color:white;border:none; border-bottom:1px solid #2f9201e0 ">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-large mt-4" style="background-color:#1f5f02e0; color:white">Request Free Landing Page</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
            <img class="img-fluid slider " style="height: 100vh; width:100%" src="{{asset('website-assets/img/images/banner_new2.jpeg')}}" alt="">
        </div>
        <!-- Header End -->


         <!-- About Start -->
         <div class="container py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class=" w-100 h-100" src="{{asset('website-assets/img/about-us.jpg')}}" >
                    </div>
                    <div class="col-lg-6 text-dark wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4 text-custom">About Us</h1>
                        <p class="mb-4" style="text-align: justify">Our Team Consists Of Highly Skilled Software Developers In the USA And UK With Vast Experience And Deep Knowledge Of The Latest Technologies. We Are Committed To Delivering First-Class Software Solutions To Help Companies Achieve Their Digital Transformation Goals. Software Technology Is Our Strength, And Creating Value For Our Clients Is Our Passion. We Strive To Make A Difference With Fairness And Innovation To Deliver The Perfect Digital Solution In The Market. Our Core Competency Lies In Web Development, API Integration, Shopify App Design, SEO, GIS Mapping, And Google Sheets Or Forms In USA And UK.</p>
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
        <div class="container-fluid mb-5 py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3 text-custom">Our Services</h1>
                    <p>We Are IT Company With Extensive Experience And Specialization In Creating Custom Software Applications Designed To Suit Your Business Requirements In USA And UK.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6  wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block custom-shadow bg-custom text-center rounded" href="{{route('web-dev')}}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-desktop-alt text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">WEB DEVELOPMENT</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="cat-item d-block custom-shadow bg-custom text-center rounded" href="{{route('seo')}}">
                            <div class="rounded p-4">
                                <div class="icon bg-dark mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-chart-bar text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">SEO</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block custom-shadow bg-custom text-center rounded" href="{{route('shopify')}}">
                            <div class="rounded  p-4">
                                <div class="icon mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fab fa-shopify text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">SHOPIFY</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 custom-shadow wow fadeInUp" data-wow-delay="0.4s">
                        <a class="cat-item d-block bg-custom text-center rounded" href="{{route('api')}}">
                            <div class="rounded  p-4">
                                <div class="icon mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-code text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">API INTEGRATION</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 custom-shadow wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-custom text-center rounded" href="{{route('webdes')}}">
                            <div class="rounded  p-4">
                                <div class="icon mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fas fa-swatchbook text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">WEB DESIGN</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 custom-shadow wow fadeInUp" data-wow-delay="0.6s">
                        <a class="cat-item d-block bg-custom text-center rounded" href="{{route('office')}}">
                            <div class="rounded  p-4">
                                <div class="icon mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-file-word text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">OFFICE AUTOMATION</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 custom-shadow wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item d-block bg-custom text-center rounded" href="{{route('uiux')}}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-object-group text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">UI / UX Design</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 custom-shadow wow fadeInUp" data-wow-delay="0.8s">
                        <a class="cat-item d-block bg-custom text-center rounded" href="{{route('mobile-apps')}}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <!-- <img class="img-fluid" src="img/icon-apartment.png" alt="Icon"> -->
                                    <i class="fa fa-mobile-alt text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">Mobile Apps</h6>
                                <!-- <span>Our experienced web developers combine their technical...</span> -->
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


       


        <!-- Property List Start -->
        <div class="container-fluid mt-5 ">
            <div class="container ">
                <div class="row g-0 gx-5 pt-5">
                    <div class="col-lg-12">
                        <div class="mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3 text-center text-dark-custom ">Our Projects</h1>
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
                                <div class="center">
                                    <div class="article-card">
                                      <div class="content">
                                        <p class="date">Jan 1, 2022</p>
                                        <p class="title">WDN</p>
                                      </div>
                                      <img src="{{asset('website-assets/img/projects/WDN.PNG')}}" alt="article-cover" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="center">
                                    <div class="article-card">
                                      <div class="content">
                                        <p class="date">Jan 1, 2022</p>
                                        <p class="title">FLORIDA DRIVING </p>
                                      </div>
                                      <img src="{{asset('website-assets/img/projects/florida-driving.PNG')}}" alt="article-cover" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="center">
                                    <div class="article-card">
                                      <div class="content">
                                        <p class="date">Jan 1, 2022</p>
                                        <p class="title">Engineered wealth</p>
                                      </div>
                                      <img src="{{asset('website-assets/img/projects/engineered.PNG')}}" alt="article-cover" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s">
                                <div class="center">
                                    <div class="article-card">
                                      <div class="content">
                                        <p class="date">Jan 1, 2022</p>
                                        <p class="title">BEN GP</p>
                                      </div>
                                      <img src="{{asset('website-assets/img/projects/Bengeb.PNG')}}" alt="article-cover" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="center">
                                    <div class="article-card">
                                      <div class="content">
                                        <p class="date">Jan 1, 2022</p>
                                        <p class="title">Granite Worktops</p>
                                      </div>
                                      <img src="{{asset('website-assets/img/projects/project-four.PNG')}}" alt="article-cover" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                              
                                <div class="center">
                                    <div class="article-card">
                                      <div class="content">
                                        <p class="date">Jan 1, 2022</p>
                                        <p class="title">Granite Worktops</p>
                                      </div>
                                      <img src="{{asset('website-assets/img/projects/project-one.PNG')}}" alt="article-cover" />
                                    </div>
                                </div>
                            </div>
                          
                            
                          
                            {{-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-custom py-3 px-5" href="">Browse More Property</a>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Property List End -->


        <!-- Call to Action Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="bg-custom rounded custom-shadow">
                    <div class="rounded bg-dark-theme p-4" style="border: none">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="{{asset('website-assets/img/call-to-action.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6  wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3 text-custom">Contact With Our Certified Agent</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit diam justo sed vero dolor duo.</p>
                                </div>
                                <a href="{{route('contact')}}" class="btn btn-custom py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="{{route('contact')}}" class="btn btn-custom py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->

        <!-- Testimonial Start -->
        <div class="container-fluid  bg-dark-theme py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3 text-dark-custom">Trusted Happy Customers</h1>
                    <p>Client's Feedback</p>
                </div>
                <div class="owl-carousel testimonial-carousel bg-dark bg-dark-theme wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-custom rounded" >
                        <div class="bg-dark bg-dark-theme border rounded p-4 " style="min-height: 240px;">
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
                    <div class="testimonial-item bg-custom rounded">
                        <div class="bg-dark-theme border rounded p-4 " style="min-height: 240px;">
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
                    <div class="testimonial-item bg-custom rounded">
                        <div class="bg-dark-theme  border rounded p-4"  style="min-height: 240px;">
                            <p>"These guys were great! Very responsive, and easy to communicate with. Their work was very professional and of great quality!"</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('website-assets/img/testimonial-3.jpg')}}" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1 text-custom">Moeismail</h6>
                                    <small>CTO / Temp Hub</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item bg-custom rounded">
                        <div class="bg-dark-theme border rounded p-4 "  style="min-height: 240px;">
                            <p>"3 months in and so far happy with the quality of SEO implemented .keywords are gradually going up in the ranks"</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('website-assets/img/testimonial-3.jpg')}}" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1 text-custom">John McDonald</h6>
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
