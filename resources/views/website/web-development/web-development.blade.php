@extends('website.layouts.main')

@section('title','Web Development Services | Custom Websites & Solutions')
@section('description', 'Boost your business with custom web development. We create responsive websites and apps that drive growth and enhance user experience.')
@section('keywords', 'web development, custom websites, web applications, web development services, e-commerce development, responsive web design, professional web development, custom web solutions')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-custom px-0">
        <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
            <div class="col-md-12 p-5 align-items-center mt-lg-5">
                <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Web Development</h1>
                <nav aria-label="breadcrumb align-items-center animated fadeIn">
                    <ol class="breadcrumb justify-content-center text-uppercase" style="background: transparent">
                        <li class="breadcrumb-item  text-center"><a class="text-white" href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item text-white text-center active" aria-current="page">Web Development</li>
                    </ol>
                </nav>
            </div>
        </div>
        <img class="img-fluid slider height"  src="{{asset('website-assets/img/images/banner_new.jpeg')}}" alt="">
    </div>
    <!-- Header End -->
    <div class="container py-5">
        <div class="row gx-0 d-flex justify-content-center">
            <div class="col-lg-4 col-md-4 col-12 px-4">
                <div class="card bg-dark-footer m-auto p-0">
                    <div class="card-body">
                        <p class="text-center text-white fw-bold fs-4">Need Help? Talk With Expert</p>
                        <hr class="text-white mx-3">
                        <p class="text-center text-white">Call Anytime</p>
                        <a href="tel:+923237988058" class="fs-5 fw-bold text-white text-center d-block py-4">+92 308 4284858</a>
                    </div>
                </div>
                <div class="card mt-4 mb-3">
                    <div class="card-body p-4">
                        <p class=" fs-4 text-custom fw-bold">Other Services</p>
                        <hr class="">
                        <a href="{{route('seo')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>SEO</span></a>
                        <a href="{{route('shopify')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Shopify</span></a>
                        <a href="{{route('api')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>API Integration</span></a>
                        <a href="{{route('webdes')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Design</span></a>
                        <a href="{{route('office')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>WordPress</span></a>
                        <a href="{{route('uiux')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>UI/UX Design</span></a>
                        <a href="{{route('mobile-apps')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Mobile Apps</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 px-4 align-items-center ">
                <img class="img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/web-development.jpg')}}"  alt="web-development-title">
                <h1 class="h1 pt-5 text-custom">Welcome to our professional web development service!</h1>
                <p class="py-3">Are you looking to create a stunning, custom website that stands out? Whether you need a brand-new site, a redesign, or enhancements to your existing site, we got you covered. Our team specializes in:</p>
                <ul>
                    <li class="mt-1">
                        <b>Custom Website Development:</b> Tailored to your unique needs and goals.
                    </li>
                    <li class="mt-1">
                        <b>Responsive Design:</b> Ensuring your site looks great on all devices.

                    </li> 
                    <li class="mt-1">
                        <b>Redesign Services: </b>Giving your current site a fresh, modern look.
                    </li>
                    <li class="mt-1">
                        <b>Data Visualization: </b>Insightful admin panel with visual data representation.
                    </li>
                    <li class="mt-1">
                        <b>Content Management System (CMS): </b>Easy-to-use interface for managing your content.
                    </li>
                    <li class="mt-1">
                        <b>Admin Functionalities: </b>Comprehensive tools for site administration
                    </li>
                </ul>
                <h2 class="h2 pt-2 text-custom">Why Choose Us?</h2>
                <ul class="">
                    <li class="mt-2"><b>Expert Team: </b>Skilled developers and designers with years of experience.</li>
                    <li class="mt-1"><b>Quality Assurance:  </b>Rigorous testing to ensure your site is flawless.</li>
                    <li class="mt-1"><b>Customer Satisfaction:  </b>We work closely with you to meet your expectations.</li>
                </ul>
                <p class="h5 mt-5 text-custom text-center fw-bold">Lets bring your vision to life! Contact us today to get started</p>
            </div>
            
            <div class="col-8">
                
            </div>
            
        </div>
    </div>
@endsection