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
              <h5 class="card-title">Add Package</h5>
              <!-- Vertical Form -->
              <form class="row g-3" action="{{ route('package.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="banner_media" class="form-label">Banner Media</label>
                  <input type="file" class="form-control" name="banner_media" id="banner_media">
                </div>
                <div class="col-12">
                  <label for="banner_title" class="form-label">Banner Title</label>
                  <input type="text" class="form-control" name="banner_title" id="banner_title">
                </div>
                <!-- Select destination -->
                <div class="col-12">
                  <label for="destination" class="form-label">Select Destinations</label>
                    <div class="choose_destination row">
                    @foreach($destinations as $destination)
                    <div class="col-md-2 mt-2">
                      <input type="checkbox" name="destination_id[]" id="destination_{{ $destination->id ?? '' }}" value="{{ $destination->id ?? '' }}">
                      <label for="destination_{{ $destination->id ?? '' }}">{{ $destination->name ?? '' }}</label>
                    </div>
                      @endforeach
                    </div>
                  <!-- <select name="destination_id" id="">
                    @foreach($destinations as $destination)
                    <option value="{{ $destination->id ?? '' }}">{{ $destination->name ?? '' }} </option>
                    @endforeach
                  </select> -->
                  <!-- <input type="text" class="form-control" name="banner_title" id="destination"> -->
                </div>
                <!--  -->

                <div class="col-12">
                  <label for="banner_gallery" class="form-label">Gallery</label>
                  <input type="file" class="form-control" name="gallery[]" id="banner_gallery" multiple="multiple" />
                </div>
                <div class="col-12">
                  <label for="about_activity" class="form-label">About Activity</label>
                  <textarea class="tinymce-editor" name="about_activity">
                    <p>Enter your activity here.</p>
                  </textarea>

                </div>

                <div class="col-12">
                  <label for="highlight" class="form-label">Highlight</label>
                  <textarea class="tinymce-editor" name="highlight">
                    <p>Enter your highlights here.</p>
                  </textarea>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection