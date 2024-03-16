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
              <h5 class="card-title">Add Destination</h5>
              <!-- Vertical Form -->
              <form class="row g-3" action="{{ route('destination.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="banner_title" class="form-label">Sub Title</label>
                  <input type="text" class="form-control" name="sub_title" id="banner_title">
                </div>
                <div class="col-12">
                  <label for="banner_media" class="form-label">Banner Media</label>
                  <input type="file" class="form-control" name="banner_media" id="banner_media">
                </div>
                
                <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      $(document).ready(function(){
        // console.log('Hello');
        
      });
    </script>
@endsection