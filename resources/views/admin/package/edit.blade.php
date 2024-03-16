@extends('admin_layout.master_layout')
@section('content')
<section class="section">
      <div class="row">
        <div class="mb-2">
          <a href="{{ url()->previous() }}" class="text text-primary"> <i class="bi bi-arrow-left"></i> Back</a>
        </div>
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Package</h5>
              <!-- Vertical Form -->
              <form class="row g-3" action="{{ route('package.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $package->id ?? '' }}" />
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="inputNanme4" value="{{ $package->name ?? '' }}">
                </div>
                <div class="col-12">
                  <label for="banner_media" class="form-label">Banner Media</label>
                  <input type="file" class="form-control" name="banner_media" id="banner_media" >
                </div>
                <div class="col-12">
                  <label for="banner_title" class="form-label">Banner Title</label>
                  <input type="text" class="form-control" name="banner_title" id="banner_title" value="{{ $package->banner_title ?? '' }}">
                </div>
                <!-- Select destination -->
                <div class="col-12">
                  <label for="destination" class="form-label">Select Destinations</label>
                  <div class="choose_destination row">
                   
                    @foreach($destinations as $destination)

                    <div class="col-md-2 mt-2">
                      <input type="checkbox" name="destination_id[]" id="destination_{{ $destination->id ?? '' }}" value="{{ $destination->id ?? '' }}" <?php if(in_array($destination->id, json_decode($package->destination_id))){ echo "checked";} ?>>
                      <label for="destination_{{ $destination->id ?? '' }}">{{ $destination->name ?? '' }}</label>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="col-12">
                  <label for="banner_gallery" class="form-label">Gallery</label>
                  <input type="file" class="form-control" name="gallery[]" id="banner_gallery" multiple="multiple" />
                </div>
                <div class="col-12">
                  <label for="about_activity" class="form-label">About Activity</label>
                  <textarea class="tinymce-editor" name="about_activity">
                    {{ $package->about_activity ?? '' }}
                  </textarea>
                </div>
                <div class="col-12">
                  <label for="highlight" class="form-label">Highlight</label>
                  <textarea class="tinymce-editor" name="highlight">
                    {{ $package->highlight ?? '' }}
                  </textarea>
                </div>
                <div class="text-left">
                  <button type="submit" class="btn btn-primary">Edit</button>
                  <a href="{{ route('package.delete',['id' => $package->id]) }}" class="btn btn-danger">Delete</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection