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
              <h5 class="card-title">Change password</h5>
              <!-- Vertical Form -->
              <form class="row g-3" action="{{ route('change.password') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Old password</label>
                  <input type="password" class="form-control" name="old_pass" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="new_pass" class="form-label">New password</label>
                  <input type="password" class="form-control" name="password" id="new_pass">
                </div>
                <div class="col-12">
                  <label for="confirm_new_pass" class="form-label">Confirm new password</label>
                  <input type="password" class="form-control" name="password_confirmation" id="confirm_new_pass">
                </div>

                <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
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