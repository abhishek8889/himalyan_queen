@extends('user_layout.master_layout')
@section('content')
<!-- Detail start -->
<div class="container-fluid py-5">
   <div class="container pt-5 pb-3">
      <div class="py-5">
         <div class="carousel-container row">
            <!-- Sorry! Lightbox doesn't work - yet. -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  @forelse($galleryMedia as $ind => $gallery)
                     <div class="carousel-main-image carousel-item @if($ind == 0) active @endif" data-slide-number="{{ $ind }}">
                        <img src="{{ asset('storage/PackageBanner/'.$gallery->image_name) }}" class="d-block w-100" alt="..." data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                     </div>
                  @empty
                     <div class="no-image carousel-item active" data-slide-number="0">
                     <svg width="200px" height="200px" viewBox="0 0 200 200" id="icon" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title>no-image</title><path d="M187.5 21.338 178.662 12.5 12.5 178.662 21.338 187.5l12.5 -12.5H162.5a12.519 12.519 0 0 0 12.5 -12.5V33.837ZM162.5 162.5H46.337l48.706 -48.706 14.869 14.869a12.5 12.5 0 0 0 17.675 0L137.5 118.75l25 24.981Zm0 -36.45 -16.162 -16.162a12.5 12.5 0 0 0 -17.675 0L118.75 119.8l-14.856 -14.856L162.5 46.337Z" fill="#636363" /><path fill="#636363"  d="M37.5 137.5v-18.75l31.25 -31.231 8.581 8.588 8.85 -8.85 -8.594 -8.594a12.5 12.5 0 0 0 -17.675 0L37.5 101.075V37.5h100V25H37.5a12.5 12.5 0 0 0 -12.5 12.5v100Z"/><path id="_Transparent_Rectangle_" data-name="&amp;lt;Transparent Rectangle&amp;gt;" class="cls-1" width="32" height="32" d="M0 0H200V200H0V0z"/></svg>   
                     <!-- <img src="https://www.svgrepo.com/show/340721/no-image.svg" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Q1p7bh3SHj8/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery"> -->
                     </div>
                  @endforelse
               </div>
            </div>
            <!-- Carousel Navigation -->
            <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="carousel-bottom row mx-0">
                        @forelse($galleryMedia as $ind => $gallery)
                           @if($ind < 6)
                           <div id="carousel-selector-{{ $ind }}" class="thumb col-2 px-1 py-2 @if($ind == 0) selected @endif" data-target="#myCarousel" data-slide-to="{{ $ind }}">
                              <img src="{{ asset('storage/PackageBanner/'.$gallery->image_name) }}" class="img-fluid" alt="...">
                           </div>
                           @endif
                        @empty
                           <div id="carousel-selector-0" class="thumb col-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                              <img src="https://www.svgrepo.com/show/340721/no-image.svg" class="img-fluid" alt="...">
                           </div>
                        @endforelse
                     </div>
                  </div>
                  @if(count($galleryMedia) > 6)
                  <div class="carousel-item">
                     <div class="row mx-0">
                        @forelse($galleryMedia as $ind => $gallery)
                           @if($ind > 5)
                           <div id="carousel-selector-{{ $ind }}" class="thumb col-2 px-1 py-2 " data-target="#myCarousel" data-slide-to="{{ $ind }}">
                              <img src="{{ asset('storage/PackageBanner/'.$gallery->image_name) }}" class="img-fluid" alt="...">
                           </div>
                           @endif
                        @empty
                           <div id="carousel-selector-0" class="thumb col-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                              <img src="https://www.svgrepo.com/show/340721/no-image.svg" class="img-fluid" alt="...">
                           </div>
                        @endforelse
                        <div class="col-2 px-1 py-2"></div>
                        <div class="col-2 px-1 py-2"></div>
                     </div>
                  </div>
                  @endif
               </div>
               @if(count($galleryMedia) > 6)
                  <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                  </a>
               @endif
            </div>
         </div>
      </div>
      <div class="package_title mt-3 mb-4">
         <h1 class="mt-20">{{ $package->name ?? '' }} </h1>
      </div>
      <div class="row">
         <div class="col-6 col-sm-6 col-md-3">
            <div class="item d-flex align-items-lg-center">
               <div class="icon border border-black-box">
                     <svg width="21px" height="21px" viewBox="0 0 0.446 0.446" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M0.227 0c-0.123 0 -0.223 0.1 -0.223 0.223s0.1 0.223 0.223 0.223 0.223 -0.1 0.223 -0.223c0 -0.123 -0.1 -0.223 -0.223 -0.223zm0 0.42c-0.109 0 -0.197 -0.088 -0.197 -0.197S0.119 0.026 0.227 0.026s0.197 0.088 0.197 0.197 -0.088 0.197 -0.197 0.197zM0.367 0.236v0.026H0.21V0.131h0.026v0.105h0.131z" fill="#5E6D77"/></svg>
               </div>
               <div class="info">
                  <div class="name">Languages</div>
                  <p class="value m-0">
                     Espanol, Francais 
                  </p>
               </div>
            </div>
         </div>
         <div class="col-6 col-sm-6 col-md-3">
            <div class="item d-flex align-items-lg-center">
               <div class="icon border border-black-box">
                  <i class="stt-icon-language"></i> 
               </div>
               <div class="info">
                  <div class="name">Languages</div>
                  <p class="value m-0">
                     Espanol, Francais 
                  </p>
               </div>
            </div>
         </div>
         <div class="col-6 col-sm-6 col-md-3">
            <div class="item d-flex align-items-lg-center">
               <div class="icon border border-black-box">
                  <i class="stt-icon-language"></i> 
               </div>
               <div class="info">
                  <div class="name">Languages</div>
                  <p class="value m-0">
                     Espanol, Francais 
                  </p>
               </div>
            </div>
         </div>
         <div class="col-6 col-sm-6 col-md-3">
            <div class="item d-flex align-items-lg-center">
               <div class="icon border border-black-box">
                  <i class="stt-icon-language"></i> 
               </div>
               <div class="info">
                  <div class="name">Languages</div>
                  <p class="value m-0">
                     Espanol, Francais 
                  </p>
               </div>
            </div>
         </div>
      </div>
      <hr style="margin: 40px 0" />
      <div class="about-details">
         <h3 class="mt-20">About this activity</h3>
         {!! $package->about_activity ?? '' !!}   
      </div>
      <div class="about-details pt-2">
            <h3 class="mt-20">Highlights</h3>
            {!! $package->highlight ?? '' !!}  
            <!-- <ul class="list-group mt-md-4 ultra-ul">
               <li class="list-detail"></i>Discover Hollywood and celebrate its iconic landmarks such as the Walk of Fame. </li>
               <li class="list-detail"></i>Soak in the views of the ever vibrant City of Angels. </li>
               <li class="list-detail"></i>Marvel at the spectacular Hollywood Sign, the quintessential symbol of Los Angeles.</li>
            </ul>                -->
      </div>
      <!-- <hr style="margin: 40px 0" />
      <div class="pt-4">
            <h3>Itinerary</h3>
            <div class="accordion" id="accordionExample">
               <div class="card">
                  <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                     <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group Item #1
                     </button>
                  </h2>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                     <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Collapsible Group Item #2
                     </button>
                  </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                     <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Collapsible Group Item #3
                     </button>
                  </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                  </div>
               </div>
            </div>
      </div> -->
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
<!-- Detail end  -->
@endsection