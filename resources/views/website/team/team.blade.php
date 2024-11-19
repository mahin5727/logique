@extends('website.layouts.main')
@section('content')
               <!-- Header Start -->
               <div class="container-fluid header bg-custom px-0">
                <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                    <div class="col-md-12 p-5 align-items-center mt-lg-5">
                        <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Our Team</h1>
                        <nav aria-label="breadcrumb align-items-center animated fadeIn">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item  text-center"><a class="text-white" href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item text-white text-center active" aria-current="page">Team</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <img class="img-fluid slider height"  src="{{asset('website-assets/img/images/slide-one.jpg')}}" alt="">
            </div>
            <!-- Header End -->

      <!-- Team Start -->
      <div class="container-xxl py-5">
        <div class="container">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                <img class="img-fluid w-100" src="{{asset('website-assets/img/team/ar.jpeg')}}">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <h1 class="mb-4 text-custom">Founder / CEO</h1>
                            <p class="mb-4">Abdul Rehman, the CEO of LOGIQUE, leads an innovative IT company specializing in web development and digital marketing services. As a Top Rated Plus freelancer on platforms such as Upwork and Fiverr, he brings extensive expertise in the freelance market, successfully working across various platforms to deliver top-tier solutions for his clients. His leadership and deep understanding of the digital landscape have driven LOGIQUE to excel in delivering high-quality services that meet the evolving needs of businesses.</p>
                            {{-- <p><i class="fa fa-check text-primary me-3"></i>Mission: We deliver Uniqueness and Quality.</p>
                            <p><i class="fa fa-check text-primary me-3"></i>
                                Skills: Delivering fast and excellent results.</p>
                            <p><i class="fa fa-check text-primary me-3"></i>
                                Clients: Satisfied clients thanks to our experience.</p> --}}
                            <!-- <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3 text-custom">Our Team</h1>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('website-assets/img/team/ar.jpeg')}}" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" target="_blank" href="https://www.linkedin.com/in/abdul-rehman-260aa8213?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center  p-4 mt-3">
                            <h5 class="fw-bold text-custom mb-0">Abdul Rehman</h5>
                            <small >Chief Executive Officer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('website-assets/img/team/hamza.jpeg')}}" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" target="_blank" href="https://www.linkedin.com/in/hamza-zahid-1721b4310/"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold text-custom mb-0">Hamza Zahid</h5>
                            <small >HR Manager</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative" >
                            <img class="img-fluid" src="{{asset('website-assets/img/team/asad.jpeg')}}"  alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" target="_blank" href="https://www.linkedin.com/in/asad-ahmad-667605209?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold text-custom mb-0">Asad Ahmad</h5>
                            <small>Project Manager</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('website-assets/img/team/arslan.jpeg')}}" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" target="_blank" href="https://www.linkedin.com/in/arsalan-saghir-38550321b/"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold text-custom mb-0">Arslan Sagheer</h5>
                            <small>Mobile App Developer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('website-assets/img/team/mahin.jpeg')}}" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" target="_blank" href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold text-custom mb-0">Mahin Ahmad</h5>
                            <small>Senior Web Developer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('website-assets/img/team/ali.jpeg')}}" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" target="_blank" href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold text-custom mb-0">Ali Ahsan</h5>
                            <small>Web Designer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative" >
                            <img class="img-fluid" src="{{asset('website-assets/img/team/ayesha.jpeg')}}"  alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" target="_blank" href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold text-custom mb-0">Ayesha Zahid</h5>
                            <small>UI / UX Designer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('website-assets/img/team/sana.jpeg')}}" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" target="_blank" href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold text-custom mb-0">Sana Sagheer</h5>
                            <small>Chief Technical Officer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('website-assets/img/team/daniyal.jpeg')}}" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" target="_blank" href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold text-custom mb-0">Daniyal Shakeel</h5>
                            <small>Business Developer Manager</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('website-assets/img/team/afaq.jpeg')}}" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" target="_blank" href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold text-custom mb-0">Muhammad Afaq</h5>
                            <small>Digital Marketer </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('website-assets/img/team/amna.jpeg')}}" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" target="_blank" href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold text-custom mb-0">Amna Mudassir</h5>
                            <small>Tech Lead</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('website-assets/img/team/jibran.jpeg')}}" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" target="_blank" href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold text-custom mb-0">Jibran Shakeel</h5>
                            <small>Business Developer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    
@endsection