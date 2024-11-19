@extends('website.layouts.main')
@section('content')
                          <!-- Header Start -->
                          <div class="container-fluid header bg-custom px-0">
                            <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                                <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                    <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Office Automation</h1>
                                    <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                        <ol class="breadcrumb justify-content-center text-uppercase">
                                            <li class="breadcrumb-item  text-center"><a class="text-white" href="{{route('home')}}">Home</a></li>
                                            <li class="breadcrumb-item text-white text-center active" aria-current="page">WORDPRESS</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <img class="img-fluid slider height"  src="{{asset('website-assets/img/images/slide-one.jpg')}}" alt="">
                        </div>
                            <!-- Header End -->
                        <div class="container py-5">
                            <div class="row gx-0 d-flex justify-content-center">
                                <div class="col-lg-4 col-12 px-4">
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
                                            <a href="{{route('web-dev')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Development</span></a>
                                            <a href="{{route('seo')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>SEO</span></a>
                                            <a href="{{route('shopify')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Shopify</span></a>
                                            <a href="{{route('api')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>API Integration</span></a>
                                            <a href="{{route('webdes')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Design</span></a>
                                            <a href="{{route('uiux')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>UI/UX Design</span></a>
                                            <a href="{{route('mobile-apps')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Mobile Apps</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-12 px-4 align-items-center ">
                                    <img class="img-fluid rounded-2  w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/office-automation.jpg')}}"  alt="">
                                    <h1 class="h1 pt-5 text-custom">Looking for a responsive and mobile-friendly WordPress website?</h1>
                                    <p class="py-3">I will create a professional website tailored to your needs, ensuring it looks great on all devices and is easy to manage.</p>
                                    <h2 class="h2 pt-2 text-custom">What We Offer?</h2>
                                    <ul>
                                        <li class="mt-1"><b>Custom WordPress Design: </b>Modern, clean, and professional.</li>
                                        <li class="mt-1"><b>Fully Responsive:</b>Optimized for mobile, tablet, and desktop.</li>
                                        <li class="mt-1"><b>User-Friendly Admin Panel: </b>Easily manage your site.</li>
                                        <li class="mt-1"><b>Fast Loading Speed: </b>Improved performance and user experience.</li>
                                        <li class="mt-1"><b>Basic SEO Optimization: </b>Boost visibility on search engines.</li>
                                        <li class="mt-1"><b>Security Features: </b>Keeping your site secure.</li>
                                        <li class="mt-1"><b>Essential Integrations: </b>Contact forms, social media, analytics, and more.</li>
                                    </ul>
                                    <h2 class="h2 pt-2 text-custom">Why Choose Us?</h2>
                                    <ul>
                                        <li class="mt-1">24/7 Support and 14 Days Free Post-Launch Assistance.</li>
                                        <li class="mt-1">Friendly Service with guaranteed satisfaction.</li>
                                    </ul>
                                    <p class="text-custom text-center mt-5 fw-bold h5">Lets build your dream website together! Contact me for a free consultation or to test my expertise.</p>
                                </div>
                            </div>
                        </div>
@endsection