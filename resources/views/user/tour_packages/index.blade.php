@extends('user_layout.master_layout')
@section('content')
    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Perfect Tour Packages</h1>
            </div>
            <div class="row">
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


    <!-- Destination Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Destination</h1>
            </div>
            <div class="row">   
                {{-- @foreach($destinations as $destination)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-cover-image destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('storage/PackageBanner/'.$destination->bannerMedia->image_name) }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="{{ url('/destination/'.$destination->slug) }}">
                            <h5 class="text-white">{{ $destination->name ?? '' }}</h5>
                            <span>{{ $destination->subtitle ?? '' }}</span>
                        </a>
                    </div>
                </div>
                @endforeach --}}
            </div>
        </div>
    </div> -->
    <!-- Destination Start -->

@endsection