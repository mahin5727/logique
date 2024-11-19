@extends('website.layouts.main')
@section('content')
                          <!-- Header Start -->
                          <div class="container-fluid header bg-custom px-0">
                            <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                                <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                    <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Mobile Apps</h1>
                                    <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                        <ol class="breadcrumb justify-content-center text-uppercase">
                                            <li class="breadcrumb-item  text-center"><a class="text-white" href="{{route('home')}}">Home</a></li>
                                            <li class="breadcrumb-item text-white text-center active" aria-current="page">Mobile Apps</li>
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
                                            <a href="{{route('api')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>API Integration</span></a>
                                            <a href="{{route('webdes')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Design</span></a>
                                            <a href="{{route('office')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>WordPress</span></a>
                                            <a href="{{route('uiux')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>UI / UX Design</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-12 px-4 align-items-center ">
                                    <img class="img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/mobile-app.jpg')}}"  alt="">
                                    <h1 class="h1 pt-5 text-custom">Unlock the Power of Mobile with Flutter App Development!</h1>
                                    <p class="py-3">
                                        Are you looking to bring your app idea to life? Look no further! I specialize in creating stunning and high-performance mobile applications for both iOS and Android using Flutter.
                                    </p>
                                    <h2 class="h2 pt-2 text-custom">What We Offer</h2>
                                    <ul>
                                        <li><b>Cross-Platform Development: </b>Save time and resources with a single codebase for both iOS and Android.</li>
                                        <li><b>Responsive Designs: </b>Engaging and user-friendly interfaces that adapt beautifully across devices.</li>
                                        <li><b>Fast Performance: </b>Leveraging Flutter's capabilities to deliver smooth and responsive apps.</li>
                                        <li><b>Custom Features: </b>Tailored solutions to meet your specific requirements, from UI/UX design to backend integration.</li>
                                        <li><b>Post-Launch Support: </b>Ongoing assistance to ensure your app runs flawlessly and remains up-to-date.</li>
                                    </ul>
                                    <h2 class="h2 pt-2 text-custom">Why Choose Us?</h2>
                                    <p class="py-3">With a passion for technology and a commitment to excellence, I ensure that each app is not only functional but also a delight to use. Lets collaborate to create a mobile app that stands out in the market!
                                        </p>
                                    <p class="text-center text-custom mt-5 fw-bold h5">Ready to Get Started? Contact me today, and lets turn your vision into a reality!</p>

                                </div>
                            </div>
                        </div>
@endsection