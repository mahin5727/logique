<!DOCTYPE html>
<html lang="en" class="bg-dark-theme p-0 m-0">

<head>
    <meta charset="utf-8">
    <title>Makaan - Real Estate HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('website-assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('website-assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('website-assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('website-assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-dark bg-dark-theme p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-dark bg-dark-theme navbar-dark py-3 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <img class="img-fluid" src="{{('website-assets/img/logo/desc_logo.png')}}" alt="Icon" style="height: 40px;">
                    <!-- <div class="icon p-2 me-2">
                    </div> -->
                    <!-- <h1 class="m-0 text-primary">Makaan</h1> -->
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                        <a href="{{route('team')}}" class="nav-item nav-link">Team</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.html" class="dropdown-item">Property List</a>
                                <a href="property-type.html" class="dropdown-item">Property Type</a>
                                <a href="property-agent.html" class="dropdown-item">Property Agent</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Error</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-custom px-3 d-none d-lg-flex">Add Property</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        @yield('content');

               <!-- Footer Start -->
               <div class="container-fluid  text-white-50 footer pt-5 mt-5 bg-dark-footer wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 text-white col-md-6">
                            <h5 class=" mb-4 text-white">Get In Touch</h5>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Block E-2, Johar Town, Lahore</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>923084284858</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@logiquellc.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light text-white btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light text-white btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light text-white btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light text-white btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-6">
                            <h5 class="text-white mb-4">Quick Links</h5>
                            <a class="btn btn-link text-white" href="">About Us</a>
                            <a class="btn btn-link text-white" href="">Contact Us</a>
                            <a class="btn btn-link text-white" href="">Our Services</a>
                            <a class="btn btn-link text-white" href="">Privacy Policy</a>
                            <a class="btn btn-link text-white" href="">Terms & Condition</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-white mb-4">Photo Gallery</h5>
                            <div class="row g-2 pt-2">
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="{{asset('website-assets/img/property-1.jpg')}}" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="{{asset('website-assets/img/property-2.jpg')}}" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="{{asset('website-assets/img/property-3.jpg')}}" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="{{asset('website-assets/img/property-4.jpg')}}" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="{{asset('website-assets/img/property-5.jpg')}}" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid rounded bg-light p-1" src="{{asset('website-assets/img/property-6.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 text-white col-md-6">
                            <h5 class="mb-4 text-white">Newsletter</h5>
                            <p class="text-white">Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control bg-transparent text-white w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                                <button type="button" class="btn btn-custom  py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom text-white" href="#">2024</a>, All Right Reserved. 
                                
                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">Logique</a>
                            </div>
                            <div class="col-md-6 text-center text-white text-md-end">
                                <div class="footer-menu text-white">
                                    <a class="text-white" href="">Home</a>
                                    <a class="text-white" href="">Cookies</a>
                                    <a class="text-white" href="">Help</a>
                                    <a class="text-white" href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
    
    
            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-custom btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('website-assets/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('website-assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('website-assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('website-assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    
        <!-- Template Javascript -->
        <script src="{{asset('website-assets/js/main.js')}}"></script>
    </body>
    
    </html>