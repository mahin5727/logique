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

@section('title','Web Development & Digital Marketing Agency | Custom Solutions')
@section('description', 'Transform your online presence with expert web development, SEO, Shopify, UI/UX design, and mobile app solutions tailored to your business needs.')
@section('keywords', 'web development, digital marketing, SEO services, Shopify development, API integration, WordPress design, UI/UX design, mobile app development, website design, e-commerce solutions, custom web development, SEO experts, digital marketing agency')

@section('content')
        <!-- Header Start -->
        <div class="container-fluid header p-0">
            <div class="container-fluid" style="background-image: url('website-assets/img/images/banner_new2(copy).jpeg') !important; background-size: cover; background-position: center;">
                <div class="row" >
                    <div class="col-12 p-5 py-5 mt-5 ">
                        <div class="text-center wow fadeInDown">
                            <h1 class="display-6 mt-lg-4 pb-5 animated fadeIn mb-4 " style="color: white !important; font-weight:500">Web Development & <br> Digital Marketing <span style="color: #309203e0; font-weight:800; border-bottom:3px solid #3eba04e0 ">Agency</span></h1>
                        </div>
                        <div class="overflow-hidden d-flex wow fadeInUp justify-content-center" style="visibility: visible;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6 d-none mt-3 d-lg-flex justify-content-center" >
                                        <!-- Put this code anywhere in the body of your page where you want the badge to show up. -->
                                        <a href="https://www.fiverr.com/logique_inc" target="_blank"><img src="{{asset('website-assets/img/fiverrcard2.jpeg')}}" alt="fiver-card" height="300px" style="border-radius:10px"/></a>
                                        
                                        <a href="https://www.fiverr.com/logique_inc" target="_blank"><img src="{{asset('website-assets/img/fiverrcard3.jpeg')}}" alt="fiver-card" height="300px" style="border-radius:10px; margin-left:50px"/></a>

                                        <!-- Put this code anywhere in the body of your page where you want the badge to show up. -->
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <form class="lead-form" action="{{route('post-url')}}" method="POST">
                                            @csrf
                                            <div class="mb-3 mt-2">
                                                <label for="exampleFormControlInput1" class="form-label" style="color: white">Company Name</label>
                                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Logique" style="background-color: rgba(0, 0, 0, 0.24); color:white;border:none; border-bottom:1px solid #2f9201e0 ">
                                            </div>
                                            <div class="mb-3 mt-2">
                                                <label for="exampleFormControlInput1" class="form-label" style="color: white">Email Address</label>
                                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" style="background-color: rgba(0, 0, 0, 0.24); color:white; border:none; border-bottom:1px solid #2f9201e0 ">
                                            </div>
                                            <div class="mb-3 mt-2">
                                                <label for="exampleFormControlInput1" class="form-label" style="color: white">Business / Profile URL</label>
                                                <input type="text" name="url" class="form-control" id="exampleFormControlInput1" placeholder="https://logiquellc.com/" style="background-color: rgba(0, 0, 0, 0.24); color:white;border:none; border-bottom:1px solid #2f9201e0 ">
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
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="w-100 h-100" src="{{asset('website-assets/img/about-us.jpg')}}" alt="about-us" >
                    </div>
                    <div class="col-lg-6 text-dark wow fadeIn" data-wow-delay="0.5s">
                        <h2 class="h1 mb-4 text-custom">About Us</h2>
                        <p class="mb-4" style="text-align: justify">Are you ready to elevate your business and thrive in the dynamic digital landscape? Our IT company offers a full suite of services to help you build a strong and impactful online presence. From innovative web design and development to SEO and mobile app solutions, we turn your vision into reality. But we don’t stop there—our team is dedicated to providing ongoing support to ensure your digital success continues to grow. Let us be your trusted partner in transforming your business for the future.</p>
                        <p><i class="fa fa-check text-custom me-3"></i><b>Mission:</b>  Transforming ideas into innovative digital solutions.</p>
                        <p><i class="fa fa-check text-custom me-3"></i><b>Skills:</b> Skilled developers and designers with years of experience.</p>
                        <p><i class="fa fa-check text-custom me-3"></i><b>Clients:</b> Over 100+ satisfied clients and counting.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Category Start -->
        <div id="Services" class="container-fluid mb-5 py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h2 class="h1 mb-3 text-custom">Our Services</h2>
                    <p class="text-center">Logique delivers cutting-edge enterprise solutions, custom software, web and mobile app development, and SEO-driven digital marketing to power your business growth.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6  wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block custom-shadow bg-custom text-center rounded" href="{{route('web-dev')}}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <i class="fa fa-desktop-alt text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">WEB DEVELOPMENT</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="cat-item d-block custom-shadow bg-custom text-center rounded" href="{{route('seo')}}">
                            <div class="rounded p-4">
                                <div class="icon bg-dark mb-3">
                                    <i class="fa fa-chart-bar text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">SEO</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block custom-shadow bg-custom text-center rounded" href="{{route('shopify')}}">
                            <div class="rounded  p-4">
                                <div class="icon mb-3">
                                    <i class="fab fa-shopify text-light fa-3x"></i>
                                </div>
                                    <h6 class="text-light">SHOPIFY</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6  wow fadeInUp" data-wow-delay="0.4s">
                        <a class="cat-item d-block bg-custom custom-shadow text-center rounded" href="{{route('api')}}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <i class="fa fa-code text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">API INTEGRATION</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6  wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-custom custom-shadow text-center rounded" href="{{route('webdes')}}">
                            <div class="rounded  p-4">
                                <div class="icon mb-3">
                                    <i class="fas fa-swatchbook text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">WEB DESIGN</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="cat-item d-block bg-custom custom-shadow text-center rounded" href="{{route('office')}}">
                            <div class="rounded  p-4">
                                <div class="icon mb-3">
                                    <i class="fa-brands fa-wordpress text-light fa-3x" aria-hidden="true"></i>
                                </div>
                                <h6 class="text-light">WORDPRESS</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item d-block bg-custom custom-shadow text-center rounded" href="{{route('uiux')}}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <i class="fa fa-object-group text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">UI / UX Design</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                        <a class="cat-item d-block bg-custom custom-shadow text-center rounded" href="{{route('mobile-apps')}}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <i class="fa fa-mobile-alt text-light fa-3x"></i>
                                </div>
                                <h6 class="text-light">MOBILE APPS</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->

        <!-- Property List Start -->
        <div class="container-fluid mt-5 px-0 " style="background-image: url('website-assets/img/images/projects_img.png') !important; background-size: cover; background-position: center;">
            <div style="background-color: rgba(255, 255, 255, 0); padding: 0; margin: 0;">
                <div class="container" >
                    <div class="row g-0 pt-5 ">
                        <div class="col-lg-12">
                            <div class="mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                <h2 class="h1 mb-3 text-center text-dark-custom">Our Projects</h2>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 wow fadeInUp px-4" data-wow-delay="0.1s">
                                    <div class="center">
                                        <div class="article-card">
                                        <div class="content">
                                            <p class="date">Jan 1, 2022</p>
                                            <p class="title">WDN</p>
                                        </div>
                                        <img src="{{asset('website-assets/img/projects/WDN.png')}}" alt="display-project" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp px-4" data-wow-delay="0.1s">
                                    <div class="center">
                                        <div class="article-card">
                                        <div class="content">
                                            <p class="date">Jan 1, 2022</p>
                                            <p class="title">Quirkiatry</p>
                                        </div>
                                        <img src="{{asset('website-assets/img/projects/quirky-top.jpg')}}" alt="display-project" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp px-4" data-wow-delay="0.1s">
                                    <div class="center">
                                        <div class="article-card">
                                        <div class="content">
                                            <p class="date">Jan 1, 2022</p>
                                            <p class="title">Engineered wealth</p>
                                        </div>
                                        <img src="{{asset('website-assets/img/projects/engineered.PNG')}}" alt="display-project" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp px-4" data-wow-delay="0.1s">
                                    <div class="center">
                                        <div class="article-card">
                                        <div class="content">
                                            <p class="date">Jan 1, 2022</p>
                                            <p class="title">Finance Dashboard</p>
                                        </div>
                                        <img src="{{asset('website-assets/img/projects/Busines Finance-top.jpg')}}" alt="display-project" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp px-4" data-wow-delay="0.1s">
                                    <div class="center">
                                        <div class="article-card">
                                        <div class="content">
                                            <p class="date">Jan 1, 2022</p>
                                            <p class="title">Modern Dashboard</p>
                                        </div>
                                        <img src="{{asset('website-assets/img/projects/Modern Dashboard.png')}}" alt="display-project" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp px-4" data-wow-delay="0.1s">
                                    <div class="center">
                                        <div class="article-card">
                                        <div class="content">
                                            <p class="date">Jan 1, 2022</p>
                                            <p class="title">Asia Business Dashboard</p>
                                        </div>
                                        <img src="{{asset('website-assets/img/projects/Asia Business-top.jpg')}}" alt="display-project" />
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <img class="img-fluid rounded w-100" src="{{asset('website-assets/img/contact.jpeg')}}" alt="contact-agent">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h2 class="h1 mb-3 text-custom">Contact With Our Certified Agent</h2>
                                    <p>Get in touch with our agent today to discuss your needs. Whether you prefer a call or an in-person appointment, we’re here to help you take the next step. Don’t wait let’s start building your success together.</p>
                                </div>
                                <a href="tel:+923084284858" class="btn btn-custom py-3 px-4 mt-2 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="{{route('contact')}}" class="btn btn-custom py-3 mt-2 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->

        <!-- Testimonial Start -->
        <div class="container bg-dark-theme py-5">
            <div class="container-fluid">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="h1 mb-3 text-dark-custom">Trusted Happy Customers</h2>
                    <p class="text-center">Client's Feedback</p>
                </div>
                <div class="owl-carousel testimonial-carousel  bg-dark bg-dark-theme wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-custom rounded" >
                        <div class="bg-dark bg-dark-theme border rounded p-4 " style="min-height: 240px;">
                            <p>"Fantastic team, we have been working together for over 8 months now. I’m excited about what we can do together in the future."</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('website-assets/img/testimonial-1.jpg')}}" alt="profile-picture" style="width: 45px; height: 45px;">
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
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('website-assets/img/testimonial-2.jpg')}}" alt="profile-picture" style="width: 45px; height: 45px;">
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
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('website-assets/img/testimonial-4.jpg')}}" alt="profile-picture" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1 text-custom">Moeismail</h6>
                                    <small>CTO / Temp Hub</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-custom rounded">
                        <div class="bg-dark-theme border rounded p-4 " style="min-height: 240px;">
                            <p>"3 months in and so far happy with the quality of SEO implemented .keywords are gradually going up in the ranks"</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('website-assets/img/testimonial-3.jpg')}}" alt="profile-picture" style="width: 45px; height: 45px;">
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
