@extends('website.layouts.main')
@section('content')
                              <!-- Header Start -->
                              <div class="container-fluid header bg-custom px-0">
                                <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                                    <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                        <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">API Integration</h1>
                                        <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                            <ol class="breadcrumb justify-content-center text-uppercase">
                                                <li class="breadcrumb-item  text-center"><a class="text-white" href="{{route('home')}}">Home</a></li>
                                                <li class="breadcrumb-item text-white text-center active" aria-current="page">API Integration</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <img class="img-fluid slider height"  src="{{asset('website-assets/img/images/banner_new.jpeg')}}" alt="">
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
                                                <a href="{{route('webdes')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Design</span></a>
                                                <a href="{{route('office')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>WordPress</span></a>
                                                <a href="{{route('uiux')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>UI/UX Design</span></a>
                                                <a href="{{route('mobile-apps')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Mobile Apps</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-12 px-4 align-items-center ">
                                        <img class="img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/api-integration.jpg')}}"  alt="">
                                        <h1 class="h1 pt-5 text-custom">Welcome to Our Professional API Integration Service</h1>
                                        <p class="py-3">Are you looking to seamlessly connect your website or application with third-party services and tools? Whether you need to integrate payment gateways, social media platforms, CRM systems, or other APIs, we’ve got you covered. Our expert team specializes in:
                                        </p>
                                        <ul>
                                            <li><b>Custom API Integration: </b>Connecting your site or app with the best tools and services to meet your specific business needs.</li>
                                            <li><b>Payment Gateway Integration: </b>Enabling secure, seamless transactions through reliable payment systems like PayPal, Stripe, and more.</li>
                                            <li><b>Social Media Integration: </b>Connecting your platform with social networks like Facebook, Twitter, and Instagram for enhanced engagement and sharing.</li>
                                            <li><b>CRM & ERP Integration: </b>Integrating customer relationship management (CRM) and enterprise resource planning (ERP) systems to streamline business operations.</li>
                                            <li><b>Data Sync & Automation: </b>Automating workflows and synchronizing data between multiple systems to save time and reduce errors.</li>
                                            <li><b>Real-Time API Integration: </b>Enabling real-time communication and updates between your app and external services.</li>
                                        </ul>
                                        <h2 class="h2 pt-2 text-custom">Why Choose Us?</h2>
                                        <ul>
                                            <li><b>Expert Team: </b>Skilled developers with extensive experience in integrating APIs across a wide range of platforms and services.</li>
                                            <li><b>Tailored Solutions: </b>We create custom API integration strategies to meet your business needs and optimize performance.</li>
                                            <li><b>Security & Reliability: </b>We prioritize secure data handling and ensure seamless, error-free communication between systems.</li>
                                            <li><b>Scalability: </b>We design integrations that can grow with your business and adapt to future needs.</li>
                                        </ul>
                                        <p class="text-custom text-center fw-bold mt-5 h5">Let us help you unlock the power of seamless integrations and enhance your digital ecosystem. Contact us today to get started!</p>
                                    </div>
                                </div>
                            </div>
@endsection