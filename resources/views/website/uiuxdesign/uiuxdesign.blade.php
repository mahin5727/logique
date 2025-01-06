@extends('website.layouts.main')

@section('title','UI/UX Design Services | Improve User Experience & Interfaces')
@section('description', 'Create intuitive designs with our UI/UX services. We focus on user-centered design to enhance websites and apps.')
@section('keywords', 'UI/UX design, user experience design, user interface design, responsive design, UX research, website user design, mobile app UI design, intuitive UI/UX design')

@section('content')
                          <!-- Header Start -->
                          <div class="container-fluid header bg-custom px-0">
                            <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                                <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                    <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">UI / UX Design</h1>
                                    <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                        <ol class="breadcrumb justify-content-center text-uppercase">
                                            <li class="breadcrumb-item  text-center"><a class="text-white" href="{{route('home')}}">Home</a></li>
                                            <li class="breadcrumb-item text-white text-center active" aria-current="page">UI / UX Design</li>
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
                                            <a href="{{route('seo')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>SEO</span></a>
                                            <a href="{{route('shopify')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Shopify</span></a>
                                            <a href="{{route('api')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>API Integration</span></a>
                                            <a href="{{route('webdes')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Design</span></a>
                                            <a href="{{route('office')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>WordPress</span></a>
                                            <a href="{{route('mobile-apps')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Mobile Apps</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-12 px-4 align-items-center ">
                                    <img class="img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/ui-ux.jpg')}}"  alt="ui/ux-design-title">
                                    <h1 class="h1 pt-5 text-custom">Welcome to Our Professional UI/UX Design Service</h1>
                                    <p class="py-3">Are you looking to create a visually appealing and user-friendly digital experience? Whether you're designing a new app, revamping your website, or enhancing an existing interface, we’re here to help. Our expert team specializes in:
                                    </p>
                                    <h2 class="h2 pt-2 text-custom">We focus on:</h2>
                                    <ul>
                                        <li>
                                            <b>Custom UI/UX Design: </b> Crafting unique, intuitive interfaces tailored to your audience and goals.
                                        </li>
                                        <li>
                                            <b>User-Centered Design: </b>Focusing on the needs and behaviors of your users to create seamless and engaging experiences.
                                        </li>
                                        <li>
                                            <b>Responsive Design: </b>Designing interfaces that deliver a consistent experience across all devices.
                                        </li>
                                        <li>
                                            <b>UX Research & Testing: </b>Conducting thorough research and usability testing to optimize the user experience.
                                        </li>
                                        <li>
                                            <b>Prototyping & Wireframing: </b>Creating detailed wireframes and interactive prototypes to visualize your design concepts.
                                        </li>
                                        <li>
                                            <b>UI Design Systems: </b>Developing scalable and consistent design systems to maintain coherence across your digital products.
                                        </li>
                                    </ul>
                                    <h2 class="h2 pt-2 text-custom">Why Choose Us?</h2>
                                    <ul>
                                        <li>
                                            <b>Expert Team:</b>A team of skilled UI/UX designers with extensive experience in crafting user-friendly and beautiful interfaces.
                                        </li>
                                        <li>
                                            <b>User-Focused Approach: </b>We prioritize your users' needs, ensuring that every design decision enhances usability and satisfaction.
                                        </li>
                                        <li>
                                            <b>Quality Assurance: </b>We conduct rigorous testing and iterations to guarantee an optimal user experience.
                                        </li>
                                        <li>
                                            <b>Customer Collaboration: </b>We work closely with you throughout the design process to ensure your vision is realized.
                                        </li>
                                    </ul>
                                    <p class="text-custom text-center mt-5 fw-bold h5">Let’s create an intuitive, visually stunning experience that will captivate your audience! Contact us today to get started.</p>
                                </div>  
                            </div>
                        </div>
@endsection