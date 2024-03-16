@extends('user_layout.master_layout')
@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 about-image" src="{{ asset('themecss/img/about-cover.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">We Provide The Best Tour Packages In Your Budget</h1>
                        <p>
                        We are here to provide you one Of The Best tour & Travel service. 
                        You can book <b>INNOVA CRYSTA</b> from any part of India for <b>KASHMIR</b>, <b>HIMACHAL</b>, <b>UTTRAKHAND</b>, <b>RAJASTHAN </b>,
                        <b>LEH-LADAKH</b> and <b>PUNJAB</b> with Safe & Secure Affordable Price. Embark on a seamless travel experience with our INNOVA CRYSTA Explorer—a car designed for comfort, style, and adventure!</p>
                        
                        <p>
                            Budget-Friendly Packages
                            Transparent Pricing with No Hidden Costs
                            <b>24/7 Customer Support</b> for Your Convenience
                            Don't just travel; embark on a journey filled with memories.
                            Explore the Beauty of India with us.
                        </p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('themecss/img/about-1.jpg') }}" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('themecss/img/about-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <a href="" class="btn btn-primary mt-1">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
        <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Competitive Pricing</h5>
                            <p class="m-0">Live with the heart full of wonderful memories without emptying your pocket.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Services</h5>
                            <p class="m-0">Delivering top-tier services tailored to exceed your expectations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Worldwide Coverage</h5>
                            <p class="m-0">Bringing exceptional services to tourists worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- why choose us start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="text-center mb-3 pb-3">
                <h1>Why Choose Us?</h1>
            </div>
            <div class="about-detail">
                <div class="slick-slider">
                    <div class="about-detail-box"> 
                        <div class="about-detail-icon">
                            <svg fill="#047635" width="100px" height="100px" viewBox="0 0 3 3" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"><path d="M2.75 1.265C2.765 1.2 2.715 1.125 2.65 1.125L1.935 1.025 1.615 0.375a0.1 0.1 0 0 0 -0.05 -0.05 0.125 0.125 0 0 0 -0.175 0.05l-0.315 0.65 -0.715 0.1q-0.055 0 -0.075 0.035a0.12 0.12 0 0 0 0 0.175l0.51 0.5L0.67 2.55q0 0.04 0.015 0.075a0.125 0.125 0 0 0 0.175 0.05L1.5 2.335l0.64 0.34q0.02 0.02 0.065 0.015h0.025a0.125 0.125 0 0 0 0.1 -0.15L2.205 1.825l0.51 -0.5Q2.75 1.305 2.75 1.26"/></svg>
                        </div>    
                        <div>Enjoy your trip with comfort & style</div>
                    </div>
                    <div class="about-detail-box">
                        <div class="about-detail-icon">
                            <svg fill="#047635" width="100px" height="100px" viewBox="0 0 4.5 4.5" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>rupee-solid</title><path class="clr-i-solid clr-i-solid-path-1" d="M2.25 0.25a2 2 0 1 0 2 2 2 2 0 0 0 -2 -2m0.735 1.125H3.25a0.125 0.125 0 0 1 0 0.25H3.03V1.65a0.75 0.75 0 0 1 -0.75 0.775h-0.25l0.855 1.01a0.155 0.155 0 0 1 -0.24 0.205L1.58 2.375A0.155 0.155 0 0 1 1.705 2.115h0.59A0.45 0.45 0 0 0 2.73 1.655V1.63H1.605a0.125 0.125 0 0 1 0 -0.25h1.04A0.45 0.45 0 0 0 2.3 1.19H1.6a0.155 0.155 0 0 1 0 -0.315h1.65a0.125 0.125 0 0 1 0 0.25H2.835a1 1 0 0 1 0.15 0.25"/><path x="0" y="0" width="36" height="36" fill-opacity="0" d="M0 0h4.5v4.5H0z"/></svg>
                        </div>
                        <div>Affordable Pricing, No Hidden Costs</div>
                    </div>
                    <div class="about-detail-box"> 
                        <div class="about-detail-icon">
                            <svg fill="#047635" width="100px" height="100px" viewBox="0 0 3 3" id="rainbow" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color"><path id="secondary" d="M2.125 2.75A0.125 0.125 0 0 1 2 2.625 1.625 1.625 0 0 0 0.375 1a0.125 0.125 0 0 1 0 -0.25 1.875 1.875 0 0 1 1.875 1.875 0.125 0.125 0 0 1 -0.125 0.125M1.25 2.625A0.875 0.875 0 0 0 0.375 1.75a0.125 0.125 0 0 0 0 0.25A0.625 0.625 0 0 1 1 2.625a0.125 0.125 0 0 0 0.25 0" style="fill: #047635;"/><path id="primary" d="M2.625 2.75A0.125 0.125 0 0 1 2.5 2.625 2.125 2.125 0 0 0 0.375 0.5a0.125 0.125 0 0 1 0 -0.25 2.375 2.375 0 0 1 2.375 2.375 0.125 0.125 0 0 1 -0.125 0.125M1.75 2.625A1.375 1.375 0 0 0 0.375 1.25a0.125 0.125 0 0 0 0 0.25A1.125 1.125 0 0 1 1.5 2.625a0.125 0.125 0 0 0 0.25 0" style="fill: #047635;"/></svg>
                        </div> 
                        <div>Budget-Friendly Packages</div>
                    </div>
                    <div class="about-detail-box">
                        <div class="about-detail-icon">
                            <svg fill="#047635" width="100px" height="100px" viewBox="0 0 1.875 1.875" xmlns="http://www.w3.org/2000/svg" id="globe"><path d="m1.498 1.185 -0.09 -0.09a0.622 0.622 0 1 1 -0.877 -0.877l-0.09 -0.09A0.749 0.749 0 0 0 0.875 1.434V1.625h-0.063a0.063 0.063 0 0 0 0 0.125h0.25a0.063 0.063 0 0 0 0 -0.125H1v-0.191a0.748 0.748 0 0 0 0.498 -0.249M0.938 1.125A0.438 0.438 0 1 0 0.5 0.688 0.438 0.438 0 0 0 0.938 1.125m0.125 -0.625 0.045 -0.074a0.313 0.313 0 0 1 0.103 0.113L1.188 0.625h-0.125Zm-0.231 -0.105L0.938 0.5v0.125L1 0.75h0.242a0.313 0.313 0 0 1 -0.188 0.227L1 0.875H0.813L0.631 0.625a0.313 0.313 0 0 1 0.201 -0.231"/></svg>
                        </div>    
                        <div>All India Bookings Accepted</div>
                    </div>
                    <div class="about-detail-box">
                        <div class="about-detail-icon">
                            <svg fill="#047635" width="100px" height="100px" viewBox="0 0 3 3" xmlns="http://www.w3.org/2000/svg"><title>support</title><path width="24" height="24" fill="none" d="M0 0h3v3H0z"/><path d="M1.5 0.25a1 1 0 0 0 -1 1v0.24A0.35 0.35 0 0 0 0.375 1.75a0.35 0.35 0 0 0 0.245 0.325C0.78 2.465 1.105 2.75 1.5 2.75h0.375V2.5H1.5C1.22 2.5 0.96 2.285 0.83 1.95L0.805 1.88 0.73 1.87A0.125 0.125 0 0 1 0.625 1.75 0.15 0.15 0 0 1 0.69 1.64L0.755 1.605V1.375A0.125 0.125 0 0 1 0.88 1.25h1.25a0.125 0.125 0 0 1 0.125 0.125V2H1.745a0.19 0.19 0 1 0 -0.19 0.25H2.5A0.25 0.25 0 0 0 2.75 2V1.75A0.25 0.25 0 0 0 2.5 1.5V1.25a1 1 0 0 0 -1 -1"/></svg>
                        </div>
                        <div>24/7 Customer Support</div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us end -->

    <!-- Registration Start -->
    <!-- <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> For Honeymoon</h1>
                    </div>
                    <p class="text-white">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Select a destination</option>
                                        <option value="1">destination 1</option>
                                        <option value="2">destination 1</option>
                                        <option value="3">destination 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">Sign Up Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Registration End -->


    <!-- Team Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
                <h1>Our Travel Guides</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('themecss/img/team-1.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Guide Name</h5>
                            <p class="m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('themecss/img/team-2.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Guide Name</h5>
                            <p class="m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('themecss/img/team-3.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Guide Name</h5>
                            <p class="m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('themecss/img/team-4.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Guide Name</h5>
                            <p class="m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->
    <script>
        $(document).ready(function () {
        $('.slick-slider').slick({
            autoplaySpeed: 2000, 
            dots: false, 
            infinite: true, 
            speed: 500, 
            slidesToShow: 5, 
            slidesToScroll: 1,
            arrows: false,
            responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    dots: true,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    dots: true,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    dots: true,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1,
                    dots: true,
                    slidesToScroll: 1,
                }
            },
        ]
        });
    });
    </script>
@endsection