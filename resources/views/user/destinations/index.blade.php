@extends('user_layout.master_layout')
@section('content')
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">   
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
            <h1>Destination Related Packages</h1>
        </div>
        <div class="row">
            <!-- Packages list -->
            @foreach($packages as $package)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                    <a class="package-box-image" href="{{ route('package.detail',['slug' => $package->slug ]) }}">
                        <img class="img-fluid" src="{{ asset('storage/PackageBanner/'.$package->bannerMedia->image_name) }}" alt="{{ $package->bannerMedia->image_name ?? '' }}">
                    </a>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                            <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                            <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                        </div>
                        <a class="h5 text-decoration-none" href="{{ route('package.detail',['slug' => $package->slug ]) }}">{{ $package->name ?? '' }}</a>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                <h5 class="m-0">$350</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Packages End -->
@endsection