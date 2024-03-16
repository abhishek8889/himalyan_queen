@extends('admin_layout.master_layout')
@section('content')
<section class="section">
    <div class="row align-items-top">
        <div class="col-lg-12">
            <div class="card">
                <h5 class="card-title px-2">Package List </h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sr. no.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Banner Title</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $count = 0;
                    ?>
                    @forelse($packages as $package)
                    <?php 
                        $count = $count + 1;
                    ?>
                    <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>
                            <img src="{{ asset('storage/PackageBanner/'.$package->bannerMedia->image_name) }}" alt="{{ $package->bannerMedia->image_name ?? '' }}" width="80" height="80px">
                            <span class="ml-3">{{ $package->name ?? '' }}</span>
                        </td>
                        <td>{{ $package->banner_title ?? '' }}</td>
                        <td>
                            <a href="{{ route('package.edit',['id' => $package->id]) }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{ route('package.delete',['id' => $package->id]) }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <th></th>
                        <td class="text text-danger text-left">No package found</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforelse
                    </tbody> 
                </table>
                <!-- Pagination  -->
                <div class="d-flex">
                    {!! $packages->links() !!}
                </div>
                <!-- End -->
            </div>
        </div>
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