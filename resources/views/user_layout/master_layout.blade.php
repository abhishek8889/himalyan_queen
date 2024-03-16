<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Himalyan Queen</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Himalyan Queen" name="keywords">
    <meta content="Travel With Himalyan Queen" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="{{ asset('themecss/img/favicon-new.svg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('themecss/lib/owlcarousel/asset/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themecss/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <!--  slick CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('themecss/slick-1.8.1/slick/slick.css') }}"/>
	
    <link rel="stylesheet" type="text/css" href="{{ asset('themecss/slick-1.8.1/slick/slick-theme.css') }}"/>
    <!-- End -->
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- End -->
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('themecss/css/style.css?'.time()) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

				
    <style>
        .whatsapp-button {
            position: fixed;
            bottom: 115px; /* Adjust this value to control the distance from the bottom */
            right: 20px; /* Adjust this value to control the distance from the right */
            z-index: 1000; /* Ensure it appears above other elements on the page */
        }

        /* Optional: Add some styles to your WhatsApp button */
        .whatsapp-button img {
            width: 50px; /* Adjust the width of your WhatsApp icon */
            height: 50px; /* Adjust the height of your WhatsApp icon */
            border-radius: 50%; /* For a circular button, if your icon is square */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Optional: Add a subtle box shadow */
        }
    </style>
</head>

<body>
    <!-- <div id="loading_spinner" style="display:none;">
        <img src="{{ asset('themecss/img/spinner.gif') }}" alt="spinner.gif">
    </div> -->
    <div id="loading_spinner" class="overlay in" style="display:none;">
        <span class="loader"></span>
    </div>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p>
                            <a href = "mailto:{{ $site_info['site_email'] ?? '' }}">
                            <i class="fa fa-envelope mr-2"></i>{{ $site_info['site_email'] ?? '' }}
                            </a>
                        </p>
                        <p class="text-body px-3">|</p>
                        <p><a href="tel:{{ $site_info['contact'] ?? '' }}" style="text-decoration:none;"><i class="fa fa-phone-alt mr-2"></i>{{ $site_info['contact'] ?? '' }}</a></p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="//{{ $site_info['facebook_link'] ?? '' }}">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="//{{ $site_info['instagram_link'] ?? '' }}">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="//{{ $site_info['youtube_link'] ?? '' }}">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="{{ url('/') }}" class="navbar-brand desktop-logo">
                    <!-- <h1 class="m-0 text-primary"><span class="text-dark">HILL </span>QUEEN</h1> -->
                    <img src="{{ asset($site_info['header_logo']) }}" alt="header_logo"/>
                   
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link @if(Request::url() == url('/') ) active @endif">Home</a>
                        <a href="{{ url('/about') }}" class="nav-item nav-link  @if(Request::url() == url('/about') ) active @endif">About</a>
                        <a href="{{ url('/service') }}" class="nav-item nav-link  @if(Request::url() == url('/service') ) active @endif">Services</a>
                        <a href="{{ url('/packages') }}" class="nav-item nav-link  @if(Request::url() == url('/packages') ) active @endif">Tour Packages</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                                <a href="destination.html" class="dropdown-item">Destination</a>
                                <a href="guide.html" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div> -->
                        <a href="{{ url('/contact') }}" class="nav-item nav-link @if(Request::url() == url('/contact') ) active @endif">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    @if(Request::url() == url('/'))
    <!-- Carousel Start  in home page -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('themecss/img/banner1.jpeg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Let's Discover The World Together</h1>
                            <a href="{{ url('/contact') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('themecss/img/banner2.jpeg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                            <a href="{{ url('/contact') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
    @else
    <!-- Header Start for other pages -->
    @if(Request::segment(1) == 'package' && Request::segment(2) == 'detail')
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">{{ Request::segment(1) }}</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ url('packages') }}">{{ Request::segment(1) }}</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">{{ Request::segment(3) }}</p>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">{{ Request::segment(1) }}</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">{{ Request::segment(1) }}</p>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Header End -->
    @endif

    @yield('content')

   <!-- Whatsaap button start -->
   <div class="whatsapp-button">
        <!-- Add your WhatsApp icon or button markup here -->
        <a href="https://wa.me/{{ $site_info['whatsapp_number'] ?? '' }}" target="_blank" rel="noopener noreferrer">
        <img src="{{ asset('themecss/img/icons8-whatsapp.svg')  }} " alt="WhatsApp">
        </a>
    </div>
   <!-- End -->
   
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="{{ url('/') }}" class="navbar-brand footer-logo">
                    <!-- <h1 class="text-primary"><span class="text-white">TRAVEL</span>ER</h1> -->
                    <img src="{{ asset($site_info['footer_logo']) }}" />
                </a>
                <p>Experience the epitome of luxury and convenience with Himalayan Queen. Your trusted companion for seamless and memorable travels. Book now and embark on an unforgettable journey.</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start footer-social">
                    <a class="btn btn-outline-primary btn-square mr-2"  href="//{{ $site_info['facebook_link'] ?? '' }}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="//{{ $site_info['instagram_link'] ?? '' }}"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2"  href="//{{ $site_info['youtube_link'] ?? '' }}"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="{{ url('/') }}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white-50 mb-2" href="{{ url('about') }}"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="{{ url('service') }}"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="{{ url('packages') }}"><i class="fa fa-angle-right mr-2"></i>Tour Packages</a>
                    <a class="text-white-50 mb-2" href="{{ url('review') }}"><i class="fa fa-angle-right mr-2"></i>Review</a>
                    <a class="text-white-50 mb-2" href="{{ url('contact') }}"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    <!-- <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <!-- <p><i class="fa fa-map-marker-alt mr-2"></i></p> -->
                <p><a href="tel:{{ $site_info['contact'] ?? '' }}" class="text-white-50" style="text-decoration:none;"><i class="fa fa-phone-alt mr-2"></i>{{ $site_info['contact'] ?? '' }}</a></p>
                <p><a href="tel:+91 8351834061" class="text-white-50" style="text-decoration:none;"><i class="fa fa-phone-alt mr-2"></i>+91 8351834061</a></p>
                <p><a href="mailto:{{ $site_info['site_email'] ?? '' }}" class="text-white-50"><i class="fa fa-envelope mr-2"></i>{{ $site_info['site_email'] ?? '' }}</a</p>
                <!-- <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;"
                            placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-12 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50 text-center">Copyright &copy; <a href="#">Himalyan Queen</a>. All Rights
                    Reserved.</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('themecss/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('themecss/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('themecss/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('themecss/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('themecss/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

   
    <!-- <script type="text/javascript" src="slick/slick.min.js"></script> -->
	<!-- End -->

    <!-- Contact Javascript File -->
    <script src="{{ asset('themecss/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('themecss/mail/contact.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Template Javascript -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('themecss/js/main.js?'.time()) }}"></script>
    <script src="{{ asset('themecss/js/function.js?'.time()) }}"></script>
    
</body>

</html>