@extends('website.layouts.main')
@section('content')
                       <!-- Header Start -->
                       <div class="container-fluid header bg-custom px-0">
                        <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                            <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">SEO Service</h1>
                                <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                    <ol class="breadcrumb justify-content-center text-uppercase">
                                        <li class="breadcrumb-item  text-center"><a class="text-white" href="#">Home</a></li>
                                        <li class="breadcrumb-item text-center"><a class=" text-white" href="#">Pages</a></li>
                                        <li class="breadcrumb-item text-white text-center active" aria-current="page">SEO Service</li>
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
                                <img class="img-fluid rounded-2 w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/seo.jpg')}}"  alt="">
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <p class=" fs-4 text-custom fw-bold">Other Services</p>
                                        <hr class="">
                                        <a href="{{route('web-dev')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Development</span></a>
                                        <a href="{{route('shopify')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Shopify</span></a>
                                        <a href="{{route('api')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>API Integration</span></a>
                                        <a href="{{route('webdes')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Design</span></a>
                                        <a href="{{route('office')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Office Automation</span></a>
                                        <a href="{{route('uiux')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>UI/UX Design</span></a>
                                        <a href="{{route('mobile-apps')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Mobile Apps</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <h1 class="h1 pt-5 text-custom">Attract More Traffic and Increase your Revenues</h1>
                                <p class="py-3">Attracting more traffic and increasing revenues are vital goals for any business operating in the digital landscape. With our comprehensive SEO services, we can help businesses achieve these objectives by optimizing their online presence and improving their search engine rankings.
                                <br><br>
                                Our team of experienced SEO professionals is well-versed in the latest strategies and techniques that drive organic traffic and boost conversions. Search Engine Optimization (SEO) basically is the practice of optimizing a website's content, structure, and technical aspects to improve its visibility in search engine results. We begin our SEO services with a thorough analysis of client’s websites followed by identification of improvement areas. We then develop a tailored strategy and conduct comprehensive keyword research to identify the most relevant and high-performing keywords for our client’s industries. By strategically incorporating these keywords into the website's content, meta tags, and other elements, we optimize the site to appear prominently in search engine results pages.
                                <br><br>
                                We also pay close attention to on-page optimization, ensuring that the website's structure, HTML tags, and internal linking are optimized for search engines. Our team works diligently to improve the website's loading speed, mobile responsiveness, and user experience, as these factors play a crucial role in search engine rankings. By creating a seamless and user-friendly website, we not only attract more organic traffic but also enhance user engagement and increase conversion rate
                                </p>
                                <h2 class="h2 pt-2 text-custom">Our SEO Services
                                </h2>
                                <p class="py-3">Off-page optimization is another very essential aspect of our SEO services. We employ various strategies to build high-quality backlinks from authoritative websites, which signal to search engines that our client’s websites are reputable and valuable sources of information. Through targeted outreach, content marketing, and social media promotion, we aim to establish our clients as industry leaders and generate organic backlinks that boost their search engine rankings.
                                <br><br>
                                Moreover, we utilize advanced analytics tools to track the performance of our client’s websites, monitor keyword rankings, and identify opportunities for further optimization. By continuously analyzing data and making data-driven decisions, we can adapt our strategies and tactics to align with changing search engine algorithms and industry trends. One of the significant advantages of SEO is its long-term impact on businesses' online visibility and revenues. While paid advertising campaigns deliver immediate results, SEO offers a sustainable approach to increasing organic traffic and generating consistent leads over time.
                                <br><br>
                                Furthermore, our SEO services are tailored to the unique needs and goals of each client. We understand that different industries require different approaches, and we take the time to understand our client’s specific target audiences and competitive landscapes. This allows us to develop customized strategies that maximize the impact of our SEO efforts and deliver measurable results. Therefore, we offer businesses the opportunity to attract more traffic, increase their online visibility, and drive revenues.
                                <br><br>
                                Hence, through a comprehensive approach that encompasses on-page optimization, off-page optimization, keyword research, and continuous monitoring, we empower businesses to stay ahead of the competition in the digital realm.
                                    </p>
                            </div>
                            
                        </div>
                    </div>
        
@endsection