@extends('website.layouts.main')
@section('content')
                              <!-- Header Start -->
                              <div class="container-fluid header bg-custom px-0">
                                <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                                    <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                        <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">API Integration</h1>
                                        <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                            <ol class="breadcrumb justify-content-center text-uppercase">
                                                <li class="breadcrumb-item  text-center"><a class="text-white" href="#">Home</a></li>
                                                <li class="breadcrumb-item text-center"><a class=" text-white" href="#">Pages</a></li>
                                                <li class="breadcrumb-item text-white text-center active" aria-current="page">API Integration</li>
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
                                                <a href="{{route('webdes')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Design</span></a>
                                                <a href="{{route('office')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Office Automation</span></a>
                                                <a href="{{route('uiux')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>UI/UX Design</span></a>
                                                <a href="{{route('mobile-apps')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Mobile Apps</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-12 px-4 align-items-center ">
                                        <img class="img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/api-integration.jpg')}}"  alt="">
                                        <h1 class="h1 pt-5 text-custom">API Integration Services</h1>
                                        <p class="py-3">An API is a software that acts as a communication medium between two or more applications. In simpler words, It acts as an agent that conveys your message to the provider and then sends the response back to you. It is an interface that helps two applications to talk with each other through commands. API integrations empower businesses to integrate their programs with the latest industrial applications and automate their workflows. It ensures a seamless and consistent connection between several applications to achieve better results without spending time and effort. Our API integration services allow users to customize their services according to their needs. You will be able to add or remove features or analyze data according to their requirements. With the help of APIs, you can customize an application however you want and make chnages to it if necessary.
                                        </p>
                                        <h2 class="h2 pt-2 text-custom">Our API Integration Services</h2>
                                        <p class="py-3">An API is a quick and premier solution to connect an external service and provide vital functions in the application. That’s the primary reason why the appropriate execution of an API is so crucial. We develop dedicated APIs but also integrate them for web applications. We make the communications between applications more secure and reliable. With our vast experience and proficiency in software development, we help businesses expand their capabilities and reduce costs.
                                            </p>
                                    </div>
                                </div>
                            </div>
@endsection