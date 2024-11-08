@extends('website.layouts.main')
@section('content')
            <!-- Header Start -->
            <div class="container-fluid header bg-custom px-0">
                <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                    <div class="col-md-12 p-5 align-items-center mt-lg-5">
                        <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">About Us</h1>
                        <nav aria-label="breadcrumb align-items-center animated fadeIn">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item  text-center"><a class="text-white" href="#">Home</a></li>
                                <li class="breadcrumb-item text-center"><a class=" text-white" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white text-center active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <img class="img-fluid slider height"  src="{{asset('website-assets/img/images/slide-one.jpg')}}" alt="">
            </div>
            <!-- Header End -->
            
        <!-- About Start -->
        <div class="container-xxl py-5">
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


        <!-- Call to Action Start -->
        <div class="container-fluid py-5">
            <div class="container">
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
                                <a href="" class="btn btn-custom py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="" class="btn btn-custom py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->
@endsection