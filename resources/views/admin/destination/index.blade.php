@extends('admin_layout.master_layout')
@section('content')
<section class="section">
    <div class="row align-items-top">
        @foreach($destinations as $destination)
        <?php 
            // $banner_media = $destination
            if(isset($destination->banner_media)){
                $banner_media_id = json_decode($destination->banner_media);
                $banner_media = App\Models\Media::find($banner_media_id);
                $banner_media_url = asset('storage/PackageBanner/'.$banner_media->image_name);
                $image_name = $banner_media->image_name;
            }
        
        ?>
        <div class="col-lg-4">
            <div class="card">
                <img src="{{ $banner_media_url }}" class="card-img-top" alt="{{ $image_name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $destination->name ?? '' }}</h5>
                    <p class="card-text">{{ $destination->banner_title ?? '' }}</p>
                    <?php
                    if(isset($destination->about_activity)){
                        echo $destination->about_activity;
                    }
                    ?>
                    <?php 
                    if(isset($destination->highlight)){
                        echo $destination->highlight;
                    }
                    ?>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<script>
   // Set the options that I want
toastr.options = {
  "closeButton": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

$(document).ready(function onDocumentReady() {  
  setInterval(function doThisEveryTwoSeconds() {
    toastr.success("Hello World!");
  }, 2000);   // 2000 is 2 seconds  
});
</script>
@endsection