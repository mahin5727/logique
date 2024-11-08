@extends('website.layouts.main')
@section('content')
                          <!-- Header Start -->
                          <div class="container-fluid header bg-custom px-0">
                            <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                                <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                    <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Mobile Apps</h1>
                                    <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                        <ol class="breadcrumb justify-content-center text-uppercase">
                                            <li class="breadcrumb-item  text-center"><a class="text-white" href="#">Home</a></li>
                                            <li class="breadcrumb-item text-center"><a class=" text-white" href="#">Pages</a></li>
                                            <li class="breadcrumb-item text-white text-center active" aria-current="page">Mobile Apps</li>
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
                                            <a href="tel:+923237988058" class="fs-5 fw-bold text-custom text-center d-block py-4">+92 308 4284858</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 align-items-center ">
                                    <img class="img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/images/slide-three.jpg')}}"  alt="">
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body p-4">
                                            <p class=" fs-4 text-dark fw-bold">Other Services</p>
                                            <hr class="">
                                            <a href="{{route('web-dev')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>Web Development</span></a>
                                            <a href="seo.html" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>Shopify</span></a>
                                            <a href="seo.html" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>API Integration</span></a>
                                            <a href="seo.html" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>Web Design</span></a>
                                            <a href="seo.html" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>Office Automation</span></a>
                                            <a href="seo.html" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>UI/UX Design</span></a>
                                            <a href="seo.html" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>Mobile Apps</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h1 class="h1 pt-5">Bring Your Ideas to Life with Our Cutting-Edge React App Development Services!</h1>
                                    <p class="py-3">In today's world where apps are essential, having an engaging and useful mobile application is not just nice to have, it's a must-have. It's how you connect with users, improve their experience, and stay competitive. At DevioTech, we prioritize app development, using React to create interactive and user-focused experiences that achieve goals.
                                    </p>
                                    <h2 class="h2 pt-2">Why Choose React?</h2>
                                    <p class="py-3">React is a leading JavaScript library renowned for its component-based approach, streamlining development and ensuring smooth, high-performance apps. React apps boast native-like interfaces, delivering an unparalleled user experience across all devices. Our skilled developers combine their React expertise with a deep understanding of your unique needs to create an app that truly shines.
                                        </p>
                                    <h2 class="h2 pt-2">Tailored Solutions for Every Vision</h2>
                                    <p class="py-3">Whether you're a budding entrepreneur, a seasoned business, or a creative individual, we have the expertise to craft the perfect app for you. From feature-rich social media platforms and engaging e-commerce experiences to data-driven productivity tools and interactive games, our React specialists can bring your vision to life.
                                        </p>

                                    <h2 class="h2 pt-2">More than Just Code</h2>
                                    <p class="py-3">We go beyond simply writing code. We partner with you throughout the entire development process, from initial ideation and wireframing to meticulous testing and deployment. We believe in open communication and collaborative efforts, ensuring your app reflects your brand identity and exceeds your expectations.</p>
                                    <h2 class="h2 pt-2">Our Mobile App Development Services</h2>
                                    <h2 class="h2 pt-2">What Sets Us Apart</h2>
                                    <ul>
                                        <li>
                                            <b>Experienced React Developers:</b> Our team comprises passionate React enthusiasts with a proven track record of crafting exceptional apps. 
                                        </li>
                                        <li>
                                            <b>Focus on User Experience:</b> We prioritize intuitive design and seamless interactions, ensuring your app is a joy to use for everyone.
                                        </li>
                                        <li>
                                            <b>Agile Development Methodology: </b> We adapt to your needs and embrace flexibility, delivering your app iteratively and efficiently.
                                        </li>
                                        <li>
                                            <b>Robust Security Measures:</b>We prioritize data security and user privacy, implementing industry-standard best practices to protect your information.
                                        </li>
                                    </ul>
                                    <h2 class="pt-2">Ready to Get Started?</h2>
                                    <p class="py-3">
                                        Let's turn your innovative app idea into a reality. Contact us today for a free consultation and discover how our React app development services can propel your business forward.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
@endsection