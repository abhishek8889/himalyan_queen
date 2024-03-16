@extends('user_layout.master_layout')
@section('content')


<!-- About Start -->
<div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 about-image" src="{{ asset('themecss/img/about.jpg') }} " style="object-fit: cover;">
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
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('themecss/img/about-1.jpg') }}" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('themecss/img/about-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <a href="{{ url('/contact') }}" class="btn btn-primary mt-1">Book Now</a>
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
    <!-- Destination Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Destination</h1>
            </div>
            <div class="row"> -->
                {{--@foreach($destinations as $destination)
                <!-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-cover-image destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('storage/PackageBanner/'.$destination->bannerMedia->image_name) }}" alt="">
                        <a href="{{ url('/destination/'.$destination->slug) }}" class="destination-overlay text-white text-decoration-none" >
                            <h5 class="text-white">{{ $destination->name ?? '' }}</h5>
                            <span>{{ $destination->subtitle ?? '' }}</span>
                        </a>
                    </div>
                </div> -->
                @endforeach --}}
            <!-- </div>
        </div>
    </div> -->
    <!-- Destination end -->
    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Perfect Tour Packages</h1>
            </div>
            <div class="row">
                <!-- Packages list -->
                @foreach($packages as $package)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-cover-image destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('storage/PackageBanner/'.$package->bannerMedia->image_name) }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="{{ route('package.detail',['slug' => $package->slug ]) }}">
                            <h5 class="text-white">{{ $package->name ?? '' }}</h5>
                            <span>{{ $package->banner_title ?? '' }}</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Packages End -->
    <!-- Testimonial Start -->
    @if(count($reviews) > 0)
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Say Our Clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach($reviews as $review)
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="https://t3.ftcdn.net/jpg/05/53/79/60/360_F_553796090_XHrE6R9jwmBJUMo9HKl41hyHJ5gqt9oz.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">
                            {!! $review->review !!}
                        </p>
                        <h5 class="text-truncate">{{ $review->name }}</h5>
                        <!-- <span>Profession</span> -->
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Blog</h6>
                <h1>Latest From Our Blog</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('themecss/img/blog-1.jpg') }}" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="single.html">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="single.html">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="single.html">Dolor justo sea kasd lorem clita justo diam
                                amet</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('themecss/img/blog-2.jpg') }}" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam
                                amet</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('themecss/img/blog-3.jpg') }}" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam
                                amet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->

    <!-- Slick js  -->
    <script type="text/javascript" src="{{ asset('themecss/slick-1.8.1/slick/slick.min.js')}}"></script>
    <!-- <script></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script> -->
<script>
    $('.service-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>
@endsection