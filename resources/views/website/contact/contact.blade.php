@extends('website.layouts.main')
@section('content')
            <!-- Header Start -->
            <div class="container-fluid header bg-custom px-0">
                <div class="row g-0 p-a container-fluid d-flex justify-content-center mt-5 pt-5 flex-column-reverse flex-md-row">
                    <div class="col-md-12 p-5 align-items-center mt-lg-5">
                        <h1 class="display-4 text-center text-white wow animated fadeIn mb-4">Contact Us</h1>
                        <nav aria-label="breadcrumb align-items-center animated fadeIn">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item  text-center"><a class="text-white" href="#">Home</a></li>
                                <li class="breadcrumb-item text-center"><a class=" text-white" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white text-center active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <img class="img-fluid slider height"  src="{{asset('website-assets/img/images/slide-one.jpg')}}" alt="">
            </div>
            <!-- Header End -->
            
         <!-- Contact Start -->
         <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3 text-custom fw-bold">Contact Us</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="custom-shadow rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" >
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-map-marker-alt text-light"></i>
                                        </div>
                                        <span>Block E-2, Johar Town, Lahore</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="custom-shadow rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" >
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-envelope-open text-light"></i>
                                        </div>
                                        <span>info@logiquellc.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="custom-shadow rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-phone-alt text-light"></i>
                                        </div>
                                        <span>+923084284858</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                            <form action="{{route('post-message')}}" method="POST"> 
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-custom w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
@endsection