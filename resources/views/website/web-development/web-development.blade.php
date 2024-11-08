@extends('website.layouts.main')
@section('content')
                   <!-- Header Start -->
            <div class="container-fluid header bg-custom px-0">
                <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                    <div class="col-md-12 p-5 align-items-center mt-lg-5">
                        <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Web Development</h1>
                        <nav aria-label="breadcrumb align-items-center animated fadeIn">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item  text-center"><a class="text-white" href="#">Home</a></li>
                                <li class="breadcrumb-item text-center"><a class=" text-white" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white text-center active" aria-current="page">Web Development</li>
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
                                <a href="{{route('seo')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>SEO</span></a>
                                <a href="shopify.html" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>Shopify</span></a>
                                <a href="seo.html" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>API Integration</span></a>
                                <a href="seo.html" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>Web Design</span></a>
                                <a href="seo.html" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>Office Automation</span></a>
                                <a href="seo.html" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>UI/UX Design</span></a>
                                <a href="seo.html" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right fw-bold me-2"></i> <span>Mobile Apps</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <h1 class="h1 pt-5">Establish your strong online presence with us now!</h1>
                        <p class="py-3">In today's increasingly digital world, having a strong online presence is crucial for individuals and businesses alike. Your digital identity, represented by your website, plays a significant role in shaping how others perceive you and your brand. If you're looking to enhance your online presence, ramping up your digital identity through professional web development services is the way to go.
                        <br><br>
                        At Logique, we understand the importance of a visually appealing, user-friendly, and functional website. We specialize in providing top-notch web development services that cater to the unique needs of our clients. Whether you're an entrepreneur, a small business owner, or a large corporation, we have the expertise to create a website that truly reflects your brand and drives meaningful results. Our team of skilled web developers is well-versed in leveraging the power of Laravel, one of the most popular PHP frameworks, to build dynamic and feature-rich websites that elevate your online presence. With Laravel, we can build scalable and secure web solutions that align with your specific business needs
                        </p>
                        <h2 class="h2 pt-2">Get our website development services
                        </h2>
                        <p class="py-3">Moreover, our experienced web developers combine their technical expertise with the latest industry standards to build websites that are not only visually appealing but also highly functional and user-friendly. We also understand the significance of search engine optimization (SEO) in driving organic traffic to your website. Our team incorporates SEO best practices into the development process, ensuring that your website is optimized for search engines and has a better chance of ranking higher in search results. This helps increase your online visibility and attract more potential customers to your site.
                        <br><br>
                        Security is another paramount concern when it comes to web development. With the rise in cyber threats, protecting your website and user data is of utmost importance. For this, our team implements robust security measures to safeguard your website against potential vulnerabilities, ensuring that your visitors can browse and interact with your site with peace of mind.
                        <br><br>
                        In addition to web development, we also offer a range of complementary services to further enhance your digital identity. We take a holistic approach to ensure that all aspects of your online presence work together seamlessly to create a cohesive and impactful digital identity. Therefore, ramping up your digital identity through professional web development services is essential in today's digital landscape. For that, we have the expertise and knowledge to create visually stunning, highly functional, and secure websites that truly reflect your brand and drive meaningful results, and with our comprehensive range of services, we can help you establish a strong online presence that stands out in the competitive digital world.
                            </p>
                    </div>
                    
                </div>
            </div>

@endsection