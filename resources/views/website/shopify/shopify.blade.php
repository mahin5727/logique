@extends('website.layouts.main')

@section('title','Shopify Development Services | Build Your E-Commerce Store')
@section('description', 'Create and scale your Shopify store. We specialize in custom themes, store setup, and integrations to drive sales.')
@section('keywords', 'Shopify development, Shopify store design, e-commerce solutions, custom Shopify themes, Shopify integrations, build online store, Shopify experts, e-commerce platform')

@section('content')
                          <!-- Header Start -->
                        <div class="container-fluid header bg-custom px-0">
                            <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                                <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                    <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Shopify</h1>
                                    <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                        <ol class="breadcrumb justify-content-center text-uppercase" style="background: transparent">
                                            <li class="breadcrumb-item  text-center"><a class="text-white" href="{{route('home')}}">Home</a></li>
                                            <li class="breadcrumb-item text-white text-center active" aria-current="page">Shopify</li>
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
                                            <a href="{{route('api')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>API Integration</span></a>
                                            <a href="{{route('webdes')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Design</span></a>
                                            <a href="{{route('office')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>WordPress</span></a>
                                            <a href="{{route('uiux')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>UI/UX Design</span></a>
                                            <a href="{{route('mobile-apps')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Mobile Apps</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-12 px-4 align-items-center ">
                                    <img class="pt-3 img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/shopify.jpg')}}" alt="shopify-title">
                                    <h1 class="h1 pt-5 text-custom">Elevate your online store's presence with a captivating Modern logo tailored for Shopify!</h1>
                                    <p class="py-3">Are you ready to make a lasting impression on your customers and stand out in the crowded eCommerce marketplace? Look no further! I am here to provide you with a top-notch logo that enhances your credibility on platforms like Etsy, Amazon, and Shopify.As an experienced Shopify developer with 4 years of experience, I can create beautiful, secure, professional, and trustworthy Shopify dropshipping stores that accurately represent your brand and help generate good revenue.
                                    </p>
                                    <h2 class="h2 pt-2 text-custom">My Approach:</h2>
                                    <p class="py-3">I do not just look for the top 10 hot selling items on Aliexpress and send a list in an excel file like everyone else, I focus on quality. I need to understand why a product is doing well and how the overall niche is performing.I do my researches based on numbers and statistics. None of my results and decisions are made by emotions or gut feelings. I do detailed analyses with results that are well thought through.
                                        </p>
                                    <h2 class="h2 pt-2 text-custom">What I Will Provide:</h2>
                                    <ul>
                                        <li><b>Unique Store Design</b></li>
                                        <li><b>Complete Branding + Graphics Included</b></li>
                                        <li><b>High-Converting Shopify Apps</b></li>
                                        <li><b>Shopify Theme Customization</b></li>
                                        <li><b>Shipping Methods & Payment Gateways</b></li>
                                        <li><b>Product Title Optimization</b></li>
                                        <li><b>SEO Optimization</b></li>
                                        <li><b>Social Media Integration</b></li>
                                        <li><b>Completely Free Support for 30 Days!</b></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
@endsection