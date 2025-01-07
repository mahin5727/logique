@extends('website.layouts.main')

@section('title','About Us | Leading Web Development & Digital Marketing Agency')
@section('description', 'Learn more about our team and mission at Logique. We specialize in web development, SEO, Shopify, and mobile apps to drive business growth.')
@section('keywords', 'about us, web development agency, digital marketing agency, SEO experts, Shopify services, UI/UX design, mobile app developers, web development team, digital marketing solutions, innovative web solutions')

@section('content')
            <!-- Header Start -->
            <div class="container-fluid header bg-custom px-0">
                <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                    <div class="col-md-12 p-5 align-items-center mt-lg-5">
                        <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">About Us</h1>
                        <nav aria-label="breadcrumb align-items-center animated fadeIn">
                            <ol class="breadcrumb justify-content-center text-uppercase" style="background: transparent">
                                <li class="breadcrumb-item  text-center"><a class="text-white" href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item text-white text-center active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <img class="img-fluid slider height"  src="{{asset('website-assets/img/images/banner_new.jpeg')}}" alt="banner">
            </div>
            <!-- Header End -->
            
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="{{asset('website-assets/img/about-us.jpg')}}" alt="about-us">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4 text-custom">About Us</h1>
                        <p class="mb-4">Are you ready to elevate your business and thrive in the dynamic digital landscape? Our IT company offers a full suite of services to help you build a strong and impactful online presence. From innovative web design and development to SEO and mobile app solutions, we turn your vision into reality. But we don’t stop there—our team is dedicated to providing ongoing support to ensure your digital success continues to grow. Let us be your trusted partner in transforming your business for the future.</p>
                        <p><i class="fa fa-check text-custom me-3"></i><b>Mission:</b> Transforming ideas into innovative digital solutions.</p>
                        <p><i class="fa fa-check text-custom me-3"></i><b>Skills:</b> Skilled developers and designers with years of experience.</p>
                        <p><i class="fa fa-check text-custom me-3"></i><b>Clients:</b> Over 100+ satisfied clients and counting.</p>
                        <!-- <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Call to Action Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="bg-custom rounded custom-shadow">
                    <div class="rounded bg-dark-theme p-4" style="border: none">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="{{asset('website-assets/img/contact.jpeg')}}" alt="contact-agent">
                            </div>
                            <div class="col-lg-6  wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3 text-custom">Contact With Our Certified Agent</h1>
                                    <p>Get in touch with our agent today to discuss your needs. Whether you prefer a call or an in-person appointment, we’re here to help you take the next step. Don’t wait let’s start building your success together.</p>
                                </div>
                                <a href="{{route('contact')}}" class="btn btn-custom py-3 mt-2 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="{{route('contact')}}" class="btn btn-custom py-3 mt-2 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->
@endsection