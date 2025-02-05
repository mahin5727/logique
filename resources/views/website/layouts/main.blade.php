<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="@yield('keywords')" name="keywords">
        <meta content="@yield('description')" name="description">

        <!-- Favicon -->
        <link href="{{asset('website-assets/img/logo/favicon.ico')}}" rel="icon">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->

        <link href="{{asset('blog-assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('blog-assets/css/style.css')}}" rel="stylesheet">


        <!-- Google Web Fonts -->
        <link rel="stylesheet" type="text/css" href="{{asset('../../../app-assets/vendors/css/extensions/toastr.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('../../../app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
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
        @yield('custom-css')
    </head>

    <body>
        <div class="container-fluid p-0 m-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show  position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->

            <!-- Navbar Start -->
            <div id="nav-con" class="container-fluid nav-bar">
                <nav class="navbar navbar-expand-lg navbar-light py-0 px-5">
                    <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center text-center">
                        <img class="img-fluid p-0" src="{{asset('website-assets/img/logo/logique_new_logo.png')}}" alt="Logo" style="height: 40px;">
                    </a>
                    <button type="button" class="navbar-toggler text-white" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="{{route('home')}}" class="nav-item nav-link {{Route::Is('home') ? 'active' : ''}}">Home</a>
                            <a href="{{route('about')}}" class="nav-item nav-link {{Route::Is('about') ? 'active' : ''}}">About</a>
                            <a href="{{route('team')}}" class="nav-item nav-link {{Route::Is('team') ? 'active' : ''}}">Team</a>
                            <a href="{{route('blog')}}" class="nav-item nav-link {{Route::Is('blog') || Route::Is('blog-detail') ? 'active' : ''}}">Blogs</a>
                            <a href="{{route('contact')}}" class="nav-item nav-link {{Route::Is('contact') ? 'active' : ''}}">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->

            @yield('content');

            <!-- Footer Start -->
            <div class="container-fluid  footer pt-5 mt-5 bg-dark-footer wow fadeIn mx-0 px-0" data-wow-delay="0.1s">
                <div class="container px-0 py-5">
                    <div class="row gx-0 gy-5">
                        <div class="col-lg-4 text-white col-md-6 px-4">
                            <h5 class="mb-4 text-white ">Get In Touch</h5>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Block E-2, Johar Town, Lahore</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+923084284858</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@logiquellc.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.instagram.com/logique_llc?igsh=MTZrZHdlM3p1dXFzdA=="><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.linkedin.com/company/logiquellc/?viewAsMember=true"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 text-white col-md-6 px-4">
                            <h5 class="text-white mb-4">Quick Links</h5>
                            <p><a class="btn btn-link" href="{{route('about')}}"><i class="fa fa-angle-right"></i><i class="fa fa-angle-right me-2"></i>About Us</a></p>
                            <p><a class="btn btn-link" href="{{route('contact')}}"><i class="fa fa-angle-right"></i><i class="fa fa-angle-right me-2"></i>Contact Us</a></p>
                            <p><a class="btn btn-link" href="{{route('home')}}#Services"><i class="fa fa-angle-right"></i><i class="fa fa-angle-right me-2"></i>Our Services</a></p>
                        </div>
                        <div class="col-lg-4 text-white col-md-6 px-4">
                            <img class="align-self-center pb-4" src="{{asset('website-assets/img/logo/logique_new_logo.png')}}" width="250px" alt="logo">
                            <p class="text-lg-start  py-4">Our Core Competency Lies In Web Development, API Integration, Shopify App Design, SEO, GIS Mapping, And Google Sheets Or Forms.</p>
                        </div>
                    </div>
                </div>
                <div class="container px-0">
                    <div class="copyright">
                        <div class="row gx-0 d-flex justify-content-center">
                            <div class="col-md-12 align-items-center text-white text-center mb-3 mb-md-0">
                                &copy; <a class=" border-bottom footer-link" href="#">2024</a>, All Right Reserved. 
                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom footer-link" href="https://logiquellc.com/">Logique</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-custom btn-lg-square back-to-top px-0"><i class="bi bi-arrow-up"></i></a>
            <a href="https://www.fiverr.com/logique_inc?source=gig_page" target="_blank" class="btn btn-lg btn-custom btn-lg-square fiverr px-0"><img src="{{asset('website-assets/img/logo/fiverr.png')}}" alt=""></a>
        </div>    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('blog-assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('blog-assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Contact Javascript File -->
        <script src="{{asset('blog-assets/mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{asset('blog-assets/mail/contact.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('blog-assets/js/main.js')}}"></script>


        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('website-assets/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('website-assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('website-assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('website-assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script id='fiverr-seller-widget-script-a47754dc-36ce-4b24-9bf3-6cb9aa0e336b' src='https://widgets.fiverr.com/api/v1/seller/logique_inc?widget_id=a47754dc-36ce-4b24-9bf3-6cb9aa0e336b' data-config='{"category_name":"Programming \u0026 Tech"}' async='true' defer='true'></script>
        <script id='fiverr-seller-widget-script-366e6363-158c-41e1-a21f-7e554aa573f4' src='https://widgets.fiverr.com/api/v1/seller/logique_inc?widget_id=366e6363-158c-41e1-a21f-7e554aa573f4' data-config='{"category_name":"\n                                    Digital Marketing\n\n                            "}' async='true' defer='true'></script>
        <script src="{{asset('../../../app-assets/vendors/js/extensions/toastr.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('website-assets/js/main.js')}}"></script>
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
                }
            @if(Session::has('success'))
                    toastr.success('{{ Session::get('success') }}');
                @elseif(Session::has('error'))
                    toastr.error('{{ Session::get('error') }}');
                @endif
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error('{{$error}}');
                @endforeach
            @endif
            
            function handleScroll() {
                const navbar = document.getElementById('nav-con');

                if (window.scrollY >60) {
                    navbar.classList.add('bg-custom-nav'); // Add class to change color when scrolled down
                } else if(window.scrollY<60) {
                    navbar.classList.remove('bg-custom-nav'); // Remove class when back to the top
                }
            }
            // Add scroll event listener
            window.addEventListener('scroll', handleScroll);
            // Initial check in case the page is already scrolled
            handleScroll();
        </script>
    </body>
</html>