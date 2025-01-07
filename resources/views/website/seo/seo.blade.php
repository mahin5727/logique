@extends('website.layouts.main')

@section('title','SEO Services | Boost Your Search Rankings & Visibility')
@section('description', 'Improve rankings and traffic with expert SEO services. We tailor strategies to increase visibility and drive conversions.')
@section('keywords', 'SEO services, search engine optimization, SEO strategies, increase website traffic, improve rankings, SEO experts, organic search, digital marketing, on-page SEO, off-page SEO')

@section('content')
                    <!-- Header Start -->
                    <div class="container-fluid header bg-custom px-0">
                        <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                            <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">SEO Service</h1>
                                <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                    <ol class="breadcrumb justify-content-center text-uppercase" style="background: transparent">
                                        <li class="breadcrumb-item  text-center"><a class="text-white" href="{{route('home')}}">Home</a></li>
                                        <li class="breadcrumb-item text-white text-center active" aria-current="page">SEO Service</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <img class="img-fluid slider height"  src="{{asset('website-assets/img/images/banner_new.jpeg')}}" alt="banner">
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
                                <img class="img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/seo.jpg')}}"  alt="seo-title">
                                <h1 class="h1 pt-5 text-custom">Boost Your Website Rankings with Our Monthly SEO Service!</h1>
                                <p class="py-3">Are you struggling to get your website on the first page of search engines? Our expert agency is here to help! We provide comprehensive monthly SEO services designed to improve your site's visibility, drive organic traffic, and increase your rankings.
                                </p>
                                <h2 class="h2 pt-2 text-custom">What We Offer</h2>
                                <ul>
                                    <li class="mt-1"><b>Complete On-Page SEO: </b>Optimization of titles, meta descriptions, internal linking, and content structure.</li>
                                    <li class="mt-1"><b>Technical SEO: </b>Site speed optimization, mobile-friendliness, schema markup, and error fixes.</li>
                                    <li class="mt-1"><b>High-Quality Backlinking:</b>Ethical and powerful backlinks to strengthen domain authority.</li>
                                    <li class="mt-1"><b>Keyword Research & Targeting: </b>In-depth analysis to rank for the right keywords.</li>
                                    <li class="mt-1"><b>Competitor Analysis: </b>Stay ahead of your competition with strategic insights.</li>
                                    <li class="mt-1"><b>Monthly Progress Reports: </b>Transparent reporting to track improvements.</li>
                                </ul>
                                <h2 class="h2 pt-2 text-custom">What Choose Us?</h2>
                                <ul>
                                    <li>Experienced Search engine optimization Professionals</li>
                                    <li>Proven Results</li>
                                    <li>100% White Hat Search engine optimization Techniques</li>
                                    <li>Ongoing Support & Consultation</li>
                                </ul>
                                <p class="text-center fw-bold text-custom h5 mt-5">Start your journey with us and watch your rankings soar! Contact us today to discuss your needs and get a free audit.</p>
                            </div>
                        </div>
                    </div>
        
@endsection