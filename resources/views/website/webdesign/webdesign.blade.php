
@extends('website.layouts.main')

@section('title','Web Design Services | Stunning & Responsive Websites')
@section('description', 'Design beautiful, responsive websites. We create user-friendly sites that elevate your brand and engage visitors.')
@section('keywords', 'web design, professional web design, user-friendly design, custom website design, responsive web design, website redesign, creative web design, web design agency')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-custom px-0">
        <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
            <div class="col-md-12 p-5 align-items-center mt-lg-5">
                <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Web Design</h1>
                <nav aria-label="breadcrumb align-items-center animated fadeIn">
                    <ol class="breadcrumb justify-content-center text-uppercase" style="background: transparent">
                        <li class="breadcrumb-item text-center"><a class="text-white" href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item text-white text-center active" aria-current="page">Web Design</li>
                    </ol>
                </nav>
            </div>
        </div>
        <img class="img-fluid slider height" src="{{asset('website-assets/img/images/banner_new.jpeg')}}" alt="banner">
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
                        <a href="{{route('office')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>WordPress</span></a>
                        <a href="{{route('uiux')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>UI/UX Design</span></a>
                        <a href="{{route('mobile-apps')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Mobile Apps</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 px-4 align-items-center ">
                <img class="img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/web-design.jpg')}}"  alt="web-design-title">
                <h1 class="h1 pt-5 text-custom">Welcome to Our Professional Web Design Service</h1>
                <p class="py-3">Looking to create a stunning, user-friendly website that captures attention and drives results? Whether you're launching a new site, revamping an existing one, or optimizing your online presence, we’re here to help. Our expert team specializes in:
                </p>
                <ul>
                    <li><b>Custom Web Design: </b>Designing visually unique websites tailored to your brand and business objectives.</li>
                    <li><b>Responsive Design: </b>Ensuring your website looks and functions beautifully on all devices—desktop, tablet, and mobile. </li>
                    <li><b>Modern Aesthetics: </b>Crafting clean, contemporary designs that reflect your brand's identity and resonate with your target audience.
                    </li>
                    <li><b>User Experience (UX): </b>Designing intuitive layouts and navigation for seamless user interaction and engagement.
                    </li>
                    <li><b>SEO-Optimized Design: </b>Structuring your site with SEO best practices to improve search engine visibility and performance.</li>
                    <li><b>E-commerce Design: </b>Creating user-friendly, conversion-optimized online stores that drive sales and enhance the shopping experience.</li>
                </ul>
                <h2 class="h2 pt-2 text-custom">Why Choose Us?</h2>
                <ul>
                    <li><b>Creative Team: </b>Skilled designers who bring fresh, innovative ideas to every project, ensuring your website stands out.</li>
                    <li><b>User-Centered Approach: </b>We focus on creating designs that are not only beautiful but also functional and easy for your users to navigate.</li>
                    <li><b>Brand Consistency: </b>We ensure your website is a true reflection of your brand identity, creating a consistent experience across all touchpoints.</li>
                    <li><b>End-to-End Service: </b>From initial design concepts to final launch, we handle every aspect of the design process to bring your vision to life.</li>
                </ul>
                <p class="text-custom text-center h5 mt-5 fw-bold">Let us transform your online presence with a design that’s both visually stunning and highly functional. Contact us today to get started!</p>
            </div>
        </div>
    </div>
@endsection