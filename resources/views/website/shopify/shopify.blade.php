@extends('website.layouts.main')
@section('content')
                          <!-- Header Start -->
                          <div class="container-fluid header bg-custom px-0">
                            <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                                <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                    <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Shopify</h1>
                                    <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                        <ol class="breadcrumb justify-content-center text-uppercase">
                                            <li class="breadcrumb-item  text-center"><a class="text-white" href="#">Home</a></li>
                                            <li class="breadcrumb-item text-center"><a class=" text-white" href="#">Pages</a></li>
                                            <li class="breadcrumb-item text-white text-center active" aria-current="page">Shopify</li>
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
                                    <img class="img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/shopify.jpg')}}"  alt="">
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body p-4">
                                            <p class=" fs-4 text-custom fw-bold">Other Services</p>
                                            <hr class="">
                                            <a href="{{route('web-dev')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Development</span></a>
                                            <a href="{{route('seo')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>SEO</span></a>
                                            <a href="{{route('api')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>API Integration</span></a>
                                            <a href="{{route('webdes')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Design</span></a>
                                            <a href="{{route('office')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Office Automation</span></a>
                                            <a href="{{route('uiux')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>UI/UX Design</span></a>
                                            <a href="{{route('mobile-apps')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Mobile Apps</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h1 class="h1 pt-5 text-custom">Enhanced sales and inventory management for your Online store</h1>
                                    <p class="py-3">Shopify incorporates an advanced CMS with various built-in features for security and customization. It is a complete package for your eCommerce site with the best options for integration for payment methods. It comes with automated solutions to streamline the data entry process and remove data duplication. It has marketing and social media promotion tools to promote your brand and increase sales.
                                    </p>
                                    <h2 class="h2 pt-2 text-custom">Our Shopify App Development Services</h2>
                                    <p class="py-3">Utilize our best-in-class Shopify development services to get a highly scalable and functional Shopify eCommerce store. We are a Shopify development company specializing in developing visually appealing and responsive Shopify stores. Our well-crafted customized solutions assist you in the design and management of your eCommerce store embracing growth and innovation. Our team of experienced Shopify developers is familiar with the latest updates in the Shopify and Shopify plus platforms to deliver secure, reliable, and flawless Shopify websites.
                                        </p>
                                </div>
                                
                            </div>
                        </div>
@endsection