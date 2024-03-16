@extends('user_layout.master_layout')
@section('content')
<!-- Detail start -->
<div class="container-fluid py-5">
   <div class="container pt-5 pb-3">
      <div class="py-5">
         <div class="detail-slick-slider">
            @forelse($galleryMedia as $ind => $gallery)
               <div class="slick-image-gallery">
                  <img src="{{ asset('storage/PackageBanner/'.$gallery->image_name) }}" alt="..." >
               </div>
            @empty
               <div class="no-image carousel-item active" data-slide-number="0">
               <svg width="200px" height="200px" viewBox="0 0 200 200" id="icon" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title>no-image</title><path d="M187.5 21.338 178.662 12.5 12.5 178.662 21.338 187.5l12.5 -12.5H162.5a12.519 12.519 0 0 0 12.5 -12.5V33.837ZM162.5 162.5H46.337l48.706 -48.706 14.869 14.869a12.5 12.5 0 0 0 17.675 0L137.5 118.75l25 24.981Zm0 -36.45 -16.162 -16.162a12.5 12.5 0 0 0 -17.675 0L118.75 119.8l-14.856 -14.856L162.5 46.337Z" fill="#636363" /><path fill="#636363"  d="M37.5 137.5v-18.75l31.25 -31.231 8.581 8.588 8.85 -8.85 -8.594 -8.594a12.5 12.5 0 0 0 -17.675 0L37.5 101.075V37.5h100V25H37.5a12.5 12.5 0 0 0 -12.5 12.5v100Z"/><path id="_Transparent_Rectangle_" data-name="&amp;lt;Transparent Rectangle&amp;gt;" class="cls-1" width="32" height="32" d="M0 0H200V200H0V0z"/></svg>   
               <!-- <img src="https://www.svgrepo.com/show/340721/no-image.svg" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Q1p7bh3SHj8/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery"> -->
               </div>
            @endforelse
         </div>
      </div>
      <div class="package_title mt-3 mb-4">
         <h1 class="mt-20">{{ $package->name ?? '' }} </h1>
      </div>
      <div class="row">
         <div class="col-12 col-sm-6 col-md-3 package-info">
            <div class="item d-flex align-items-lg-center">
               <div class="icon border border-black-box">
                  <i class="fas fa-hand-holding-usd"></i>
               </div>
               <div class="info">
                  <div class="name">Budget-Friendly</div>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-3 package-info">
            <div class="item d-flex align-items-lg-center">
               <div class="icon border border-black-box">
                  <i class="fas fa-rupee-sign"></i>
               </div>
               <div class="info">
                  <div class="name">Affordable Pricing</div>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-3 package-info">
            <div class="item d-flex align-items-lg-center">
               <div class="icon border border-black-box">
                  <i class="fas fa-check-double"></i>
               </div>
               <div class="info">
                  <div class="name">Bookings Accepted</div>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-3 package-info">
            <div class="item d-flex align-items-lg-center">
               <div class="icon border border-black-box">
                  <i class="fas fa-phone-alt"></i>
               </div>
               <div class="info">
                  <div class="name">24/7 Support</div>
               </div>
            </div>
         </div>
      </div>
      <hr style="margin: 40px 0" />
      <!-- Itenaries -->
      @if(count($package->itineraries) > 0)
      <div class="about-details pt-2">
         <h3 class="mt-20 mb-3">Itinerary</h3>
         <div id="accordion">
            @foreach($package->itineraries as $key => $itinerary)
            <div class="card mb-2">
               <div class="card-header card-head-box" id="heading-{{ $key }}">
                  <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-{{ $key }}" aria-expanded="@if($key == 0) true @else false @endif" aria-controls="collapseOne">
                      {!! $itinerary->day ?? '' !!}
                  </button>
                  </h5>
               </div>

               <div id="collapse-{{ $key }}" class="collapse @if($key == 0) show @endif" aria-labelledby="heading-{{ $key }}" data-parent="#accordion">
                  <div class="card-body">
                     {!! $itinerary->plans ?? '' !!}
                  </div>
               </div>
            </div>
            @endforeach
         </div>         
      </div>
      @endif
      <div class="package-extra-info pt-4">
         @if(!empty($package->about_activity))
         <div class="about-details">
            <h3 class="mt-20  mb-3">About this activity</h3>
            <div class="detail-information">
            {!! $package->about_activity ?? '' !!}   
            </div>
         </div>
         @endif
         @if(!empty($package->highlight))
         <div class="about-details pt-2">
            <h3 class="mt-20  mb-3">Highlights</h3>
            <div class="detail-information">
            {!! $package->highlight ?? '' !!}  
            </div>
         </div>
         @endif
      </div>
      
      <hr style="margin: 40px 0" />
      <div class="pt-4">
         <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="contact-form bg-white" style="padding: 30px;">
               <div class="text-left mb-3 pb-3">
                  <h3>Connect For Ride !!</h3>
                  <h5>Your Destination Awaits Your Call</h5>
               </div>
                  @if(session('success'))
                  <div id="success" class="text text-success">
                        {{ session('success') }}   
                  </div>
                  @endif
                  <form action="{{ url('/sendMail') }}" id="queryForm" method="POST" >
                     @csrf
                     <input type="hidden" name="type" value="booking"/>
                     <div class="form-row">
                        <div class="control-group col-sm-6">
                           <input type="text" class="form-control p-4" name="name" id="name" placeholder="Your Name"/>
                           <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group col-sm-6">
                           <input type="email" class="form-control p-4" name="email" id="email" placeholder="Your Email" />
                           <p class="help-block text-danger"></p>
                        </div>
                     </div>
                     <div class="control-group">
                        <input type="number" class="form-control p-4" name="contact" id="contact" placeholder="Your Contact Number"/>
                        <p class="help-block text-danger"></p>
                     </div>
                     <div class="control-group">
                        <input type="text" class="form-control p-4" name="subject" id="subject" placeholder="Subject" />
                        <p class="help-block text-danger"></p>
                     </div>
                     <div class="control-group">
                        <textarea class="form-control py-3 px-4" rows="5" id="message" name="description" placeholder="Message"></textarea>
                        <p class="help-block text-danger"></p>
                     </div>
                     <div class="text-center">
                        <button class="btn btn-primary py-3 px-4" type="submit">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
        $(document).ready(function () {
        $('.detail-slick-slider').slick({
            arrows: true, 
            prevArrow: '<button type="button" class="slick-prev"> < </button>', // Custom previous arrow
            nextArrow: '<button type="button" class="slick-next"> > </button>', // 
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true, 
            speed: 500, 
            slidesToShow: 1, 
            slidesToScroll: 1,
            customPaging: function(slider, i) {
                if (i < 3) {
                    return '<button type="button" role="button" tabindex="0"></button>';
                }
                return '';
            }
      //       responsive: [
      //       {
      //           breakpoint: 1200,
      //           settings: {
      //               slidesToShow: 4,
      //               dots: true,
      //               slidesToScroll: 2,
      //           }
      //       },
      //       {
      //           breakpoint: 992,
      //           settings: {
      //               slidesToShow: 3,
      //               dots: true,
      //               slidesToScroll: 2,
      //           }
      //       },
      //       {
      //           breakpoint: 768,
      //           settings: {
      //               slidesToShow: 2,
      //               dots: true,
      //               slidesToScroll: 1,
      //           }
      //       },
      //       {
      //           breakpoint: 520,
      //           settings: {
      //               slidesToShow: 1,
      //               dots: true,
      //               slidesToScroll: 1,
      //           }
      //       },
      //   ]
        });
    });
    </script>
<!-- Detail end  -->
@endsection