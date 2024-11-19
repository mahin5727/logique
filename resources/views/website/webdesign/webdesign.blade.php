@extends('website.layouts.main')
@section('content')
                          <!-- Header Start -->
                          <div class="container-fluid header bg-custom px-0">
                            <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                                <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                    <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Web Design</h1>
                                    <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                        <ol class="breadcrumb justify-content-center text-uppercase">
                                            <li class="breadcrumb-item  text-center"><a class="text-white" href="{{route('home')}}">Home</a></li>
                                            <li class="breadcrumb-item text-white text-center active" aria-current="page">Web Design</li>
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
                                            <a href="{{route('office')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Office Automation</span></a>
                                            <a href="{{route('uiux')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>UI/UX Design</span></a>
                                            <a href="{{route('mobile-apps')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Mobile Apps</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-12 px-4 align-items-center ">
                                    <img class="img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/web-design.jpg')}}"  alt="">
                                    <h1 class="h1 pt-5 text-custom">Ramp up Your Digital Identity with Our Web Design Services
                                    </h1>
                                    <p class="py-3">Our website design services are at the forefront of innovation and excellence, offering our clients a comprehensive solution to establish a strong online presence and drive their business growth. With a deep understanding of the latest trends and technologies, we create captivating and user-friendly websites that leave a lasting impression on visitors. At the heart of our approach is a meticulous design process that ensures every element of the website aligns with the client's brand identity and objectives.
                                        <br><br>
                                    We collaborate closely with our clients, taking the time to understand their unique visions and goals. Our team of talented designers then translates their vision into stunning visuals, employing modern aesthetics and intuitive layouts to create a seamless user experience.
                                    <br><br>
                                    We understand that a website is more than just an online brochure and is a powerful tool for generating leads and converting visitors into customers. Hence, at Deviotech, we specialize in providing exceptional website design services using a combination of HTML, CSS, Bootstrap, and React.js, ensuring that our clients have captivating and functional online platforms.
                                    </p>
                                    <h2 class="h2 pt-2 text-custom">Get Our Website Design Services</h2>
                                    <p class="py-3">Our team of skilled web designers possesses in-depth knowledge of HTML, utilizing it to create well-organized and semantically correct web pages. With HTML, we ensure that your website is search engine-friendly, accessible, and compatible across various devices and platforms. Our designers are well-versed in the latest CSS techniques as well, enabling them to craft unique and modern designs that align with your brand's identity and resonate with your target audience. Apart from HTML/CSS, with its comprehensive library of pre-built components and responsive grid system, our team uses Bootstrap to create consistent and user-friendly designs across different devices and screen sizes. We leverage the power of Bootstrap to streamline the development process, saving time without compromising the quality of the final product.
                                        <br><br>
                                        n addition, by utilizing React.js, we can develop complex functionalities and seamless user interactions, resulting in a highly engaging website. Whether it's creating interactive forms, implementing real-time updates, or building single-page applications, React.js enables us to deliver cutting-edge solutions tailored to your specific requirements.
                                        <br><br>
                                        Furthermore, we also understand the dynamic nature of the online world and are committed to providing ongoing support and timely updates to keep our clients ahead of the competition. Hence, our website design services combine artistic creativity, technical expertise, and strategic thinking to create impactful online experiences. Whether it's a small business website, an e-commerce platform, or a complex web application, we have the skills and dedication to deliver exceptional results. With our focus on user-centric design, cutting-edge techniques, and a commitment to security and performance, we empower our clients to achieve their online goals and thrive in the digital landscape.
                                        </p>
                                </div>
                            </div>
                        </div>
@endsection