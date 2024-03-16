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
                        <a class="h5 text-decoration-none" href="{{ route('package.detail',['slug' => $package->slug ]) }}">{{ $package->name ?? '' }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Packages End -->
@endsection