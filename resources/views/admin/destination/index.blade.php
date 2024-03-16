@extends('admin_layout.master_layout')
@section('content')
<section class="section">
    <div class="row align-items-top">
        <div class="card"> 
        <h5 class="pt-3">Destinations</h5>
        <table class="table pt-3">
            <thead>
                <tr>
                    <th scope="col">Sr. no.</th>
                    <th scope="col"></th>
                    <th scope="col">Destination</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $count = 0;
            ?>
            @forelse($destinations as $destination)
                <?php 
                    $count = $count + 1;
                ?>
                <tr>
                    <th scope="row">{{ $count }}</th>
                    <td>
                       <div>
                           <img src="{{ asset('storage/PackageBanner/'.$destination->bannerMedia->image_name) }}" alt="{{ $destination->bannerMedia->image_name ?? '' }}" width="80px" height="80px">
                       </div>
                    </td>
                    <td>{{ $destination->name ?? '' }}</td>
                    <td>
                        <a href="{{ route('destination.edit',['id' => $destination->id ]) }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="{{ route('destination.delete',['id' => $destination->id]) }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <th></th>
                    <td class="text text-danger">No Destinations in list.</td>
                    <td></td>
                    <td></td>
                </tr>
            @endforelse
            </tbody> 
        </table>
        </div>
        <div class="d-flex">
        {!! $destinations->links() !!}
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