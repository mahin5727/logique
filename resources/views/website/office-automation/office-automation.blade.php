@extends('website.layouts.main')
@section('content')
                          <!-- Header Start -->
                          <div class="container-fluid header bg-custom px-0">
                            <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                                <div class="col-md-12 p-5 align-items-center mt-lg-5">
                                    <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Office Automation</h1>
                                    <nav aria-label="breadcrumb align-items-center animated fadeIn">
                                        <ol class="breadcrumb justify-content-center text-uppercase">
                                            <li class="breadcrumb-item  text-center"><a class="text-white" href="#">Home</a></li>
                                            <li class="breadcrumb-item text-center"><a class=" text-white" href="#">Pages</a></li>
                                            <li class="breadcrumb-item text-white text-center active" aria-current="page">Office Automation</li>
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
                                            <a href="{{route('webdes')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Web Design</span></a>
                                            <a href="{{route('uiux')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>UI/UX Design</span></a>
                                            <a href="{{route('mobile-apps')}}" class="py-3 d-block hover-underline-animation ser-link transition"><i class="fa fa-angle-double-right text-custom fw-bold me-2"></i> <span>Mobile Apps</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-12 px-4 align-items-center ">
                                    <img class="img-fluid rounded-2  w-100 shadow-sm wow fadeInDown" src="{{asset('website-assets/img/services/office-automation.jpg')}}"  alt="">
                                    <h1 class="h1 pt-5 text-custom">Streamline Your Repetitive and Data Processing Tasks
                                    </h1>
                                    <p class="py-3">Microsoft Excel is a powerful and inexpensive business intelligence software. It comes with features for creating dashboards that provide valuable business details. These dashboards consist of visualizations, charts, and tables to process accurate information at the click of a button. Businesses use MS Excel to automate their day-to-day activities to save time and maximize their performance. However, working with MS Excel is not an easy task for those with little or no knowledge.
                                    </p>
                                    <h2 class="h2 pt-2 text-custom">Our MS Excel VBA, Macros, And KPI Dashboard Services</h2>
                                    <p class="py-3">We develop interactive and user-friendly user dashboards to organize and process data with an advanced Excel dashboard. Our Excel dashboard is perfectly designed to extract the precise without requiring technical skills from your side. Decrease manual work and diminish the chance of human mistakes with our modern Excel to dashboard services
                                        </p>
                                    <h2 class="h2 pt-2 text-custom">Analyze real consumer insights for better business decisions
                                    </h2>
                                    <p class="py-3">Google Sheets/Forms are mainly used for digital marketing, connecting with audiences, and generating leads. These tools can swift and reliable insights from visitors across the internet. You make better business decisions, figure out your marketing impact, and observe your brand reputation.
                                        </p>

                                    <h2 class="h2 pt-2 text-custom">Our Google Forms/Sheets Services</h2>
                                    <p class="py-3">We empower businesses make superior decisions with help of automated dashboards for evaluating valuable and accurate data. An improve your business processes according to customer for better customer experience and satisfaction. Our Google Form/Sheet services help businesses to quick overview of data in short time without examining much data.
                                        </p>
                                </div>
                            </div>
                        </div>
@endsection