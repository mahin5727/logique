@extends('website.layouts.main')
@section('content')
                          <!-- Header Start -->
                          <div class="container-fluid header bg-custom px-0">
                            <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                                <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                    <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">UI / UX Design</h1>
                                    <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                        <ol class="breadcrumb justify-content-center text-uppercase">
                                            <li class="breadcrumb-item  text-center"><a class="text-white" href="#">Home</a></li>
                                            <li class="breadcrumb-item text-center"><a class=" text-white" href="#">Pages</a></li>
                                            <li class="breadcrumb-item text-white text-center active" aria-current="page">UI / UX Design</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <img class="img-fluid slider height"  src="{{asset('website-assets/img/images/slide-one.jpg')}}" alt="">
                        </div>
                            <!-- Header End -->
                        <div class="container py-5">
                            <div class="row gx-5 d-flex justify-content-center">
                                <div class="col-4 px-4">
                                    <div class="card bg-dark-footer m-auto p-0">
                                        <div class="card-body">
                                            <p class="text-center text-white fw-bold fs-4">Need Help? Talk With Expert</p>
                                            <hr class="text-white mx-3">
                                            <p class="text-center text-white">Call Anytime</p>
                                            <a href="tel:+923237988058" class="fs-5 fw-bold text-white text-center d-block py-4">+92 308 4284858</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 align-items-center ">
                                    <img class="img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/ui-ux.jpg')}}"  alt="">
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body p-4">
                                            <p class=" fs-4 text-custom fw-bold">Other Services</p>
                                            <hr class="">
                                            <a href="{{route('web-dev')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Development</span></a>
                                            <a href="{{route('seo')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>SEO</span></a>
                                            <a href="{{route('shopify')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Shopify</span></a>
                                            <a href="{{route('api')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>API Integration</span></a>
                                            <a href="{{route('webdes')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Design</span></a>
                                            <a href="{{route('office')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Office Automation</span></a>
                                            <a href="{{route('mobile-apps')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Mobile Apps</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h1 class="h1 pt-5 text-custom">Craft Seamless User Experiences with Our UI/UX Design Services</h1>
                                    <p class="py-3">Logique understands that user experience (UX) is the bedrock of any successful website or application. Our skilled UI/UX designers craft interfaces that are both aesthetically pleasing and intuitively functional, ensuring your users navigate with ease and achieve their goals effortlessly.
                                    </p>
                                    <h2 class="h2 pt-2 text-custom">We focus on:</h2>
                                    <ul>
                                        <li>
                                            <b>User-centric design:</b> We prioritize user needs and behavior through comprehensive research and prototyping, creating experiences that resonate deeply with your target audience.
                                        </li>
                                        <li>
                                            <b>Visually compelling interfaces: </b>Our designers bring your brand identity to life with stunning visuals and intuitive layouts, fostering user engagement and trust.
                                        </li>
                                    </ul>
                                    <p class="py-3"><b>Seamless flow and functionality:</b> We meticulously engineer user journeys, optimizing every interaction for clarity and efficiency, leading to improved conversions and user satisfaction.</p>
                                    <h2 class="h2 pt-2 text-custom">Partner with Logique and witness</h2>
                                    <p class="py-3">Logique understands that user experience (UX) is the bedrock of any successful website or application. Our skilled UI/UX designers craft interfaces that are both aesthetically pleasing and intuitively functional, ensuring your users navigate with ease and achieve their goals effortlessly.
                                        </p>
                                    <ul>
                                        <li>
                                            <b>User-centric design:</b> We prioritize user needs and behavior through comprehensive research and prototyping, creating experiences that resonate deeply with your target audience.
                                        </li>
                                        <li>
                                            <b>Visually compelling interfaces: </b>Our designers bring your brand identity to life with stunning visuals and intuitive layouts, fostering user engagement and trust.
                                        </li>
                                    </ul>
                                    <p class="py-3"><b>Seamless flow and functionality:</b> We meticulously engineer user journeys, optimizing every interaction for clarity and efficiency, leading to improved conversions and user satisfaction.</p>
                                    <ul>
                                        <li>
                                            <b>Increased user engagement and retention:</b> A delightful user experience keeps users coming back for more.
                                        </li>
                                        <li>
                                            <b>Enhanced brand image:</b> Well-designed interfaces reflect positively on your brand, fostering trust and loyalty.
                                        </li>
                                        <li>
                                            <b>Boosted conversions:</b> Intuitive navigation and a smooth user journey lead to improved conversion rates.
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
@endsection