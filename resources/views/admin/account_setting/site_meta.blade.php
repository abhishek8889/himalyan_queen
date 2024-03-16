@extends('admin_layout.master_layout')
@section('content')
<style>
  .site-images {
    background: #00000029;
    padding: 36px;
    border-radius: 10px;
    margin-top: 13px;
  }
</style>
<section class="section">
      <div class="row">
        <div class="mb-2">
          <a href="{{ url()->previous() }}" class="text text-primary"> <i class="bi bi-arrow-left"></i> Back</a>
        </div>
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Site Information</h5>
              <!-- Vertical Form -->
              <form class="row g-3" action="{{ route('update.site.meta') }}" method="POST" enctype="multipart/form-data">
                @csrf
               
                @foreach($siteMeta as $meta )
                
                @if( $meta->meta_key == 'site_email')
                <div class="col-12">
                  <label for="inputNanme" class="form-label">{{ $meta->meta_name ?? '' }}</label>
                  <input type="text" class="form-control" name="{{ $meta->meta_key }}" id="" value="{{ $meta->meta_value ?? ''  }}" />
                </div>
                @endif

                @if( $meta->meta_key == 'contact')
                <div class="col-12">
                  <label for="inputNanme" class="form-label">{{ $meta->meta_name ?? '' }}</label>
                  <input type="text" class="form-control" name="{{ $meta->meta_key }}" id="" value="{{ $meta->meta_value ?? ''  }}" />
                </div>
                @endif

                @if( $meta->meta_key == 'whatsapp_number')
                <div class="col-12">
                  <label for="inputNanme" class="form-label">{{ $meta->meta_name ?? '' }}</label>
                  <input type="text" class="form-control" name="{{ $meta->meta_key }}" id="" value="{{ $meta->meta_value ?? ''  }}" />
                </div>
                @endif

                @if( $meta->meta_key == 'facebook_link')
                <div class="col-12">
                  <label for="inputNanme" class="form-label">{{ $meta->meta_name ?? '' }}</label>
                  <input type="text" class="form-control" name="{{ $meta->meta_key }}" id="" value="{{ $meta->meta_value ?? ''  }}" />
                </div>
                @endif


                @if( $meta->meta_key == 'instagram_link')
                <div class="col-12">
                  <label for="inputNanme" class="form-label">{{ $meta->meta_name ?? '' }}</label>
                  <input type="text" class="form-control" name="{{ $meta->meta_key }}" id="" value="{{ $meta->meta_value ?? ''  }}" />
                </div>
                @endif


                @if( $meta->meta_key == 'youtube_link')
                <div class="col-12">
                  <label for="inputNanme" class="form-label">{{ $meta->meta_name ?? '' }}</label>
                  <input type="text" class="form-control" name="{{ $meta->meta_key }}" id="" value="{{ $meta->meta_value ?? ''  }}" />
                </div>
                @endif


                @if( $meta->meta_key == 'admin_email')
                <div class="col-12">
                  <label for="inputNanme" class="form-label">{{ $meta->meta_name ?? '' }}</label>
                  <input type="text" class="form-control" name="{{ $meta->meta_key }}" id="" value="{{ $meta->meta_value ?? ''  }}" />
                </div>
                @endif
                @endforeach

                <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Rigth side  -->
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Logos</h5>
              <!-- Vertical Form -->
              @foreach($siteMeta as $meta )
                @if( $meta->meta_key == 'header_logo')
                <form class="row g-3" action="{{ route('update.site.meta') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="col-12">
                    <label for="header_logo" class="form-label " >{{ $meta->meta_name ?? '' }}
                      <span class="upload-logo-icon">
                        <i class="bi bi-cloud-upload"></i>  
                      </span>
                      <div class="site-images">
                        <img src="{{ asset($meta->meta_value) }}" height="70" width="90%" alt="header_logo" class="upload_logo">
                      </div>
                    </label>
                    
                    <input type="file" style="display:none;" class="form-control upload_input"  name="header_logo" id="header_logo" value="" />
                    <div class="submit_image my-2" style="display:none;">
                      <button type="submit" class="btn btn-primary">Update Image</button>
                    </div>
                  </div>
                </form>
                @endif
                @if( $meta->meta_key == 'footer_logo')
                <hr>
                <form class="row g-3" action="{{ route('update.site.meta') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="col-12 mt-4">
                    <label for="footer_logo" class="form-label footer_logo">{{ $meta->meta_name ?? '' }}
                      <span class="upload-logo-icon">
                        <i class="bi bi-cloud-upload"></i>  
                      </span>
                      <div class="site-images">
                        <img src="{{ asset($meta->meta_value) }}"  height="70" width="90%" alt="footer logo" class="upload_logo">
                      </div>
                    </label>
                    <input type="file" style="display:none;" class="form-control upload_input" name="footer_logo" id="footer_logo" value="" />
                    <div class="submit_image my-2" style="display:none;">
                      <button type="submit" class="btn btn-primary">Update Image</button>
                    </div>
                  </div>
                </form>
                @endif
              @endforeach
            </div>
          </div>
        </div>
        <!-- end -->
      </div>
    </section>
    <script>
        $('input[type="file"]').on('change',function(e){
          e.preventDefault();
          $(this).siblings('.submit_image').show();
        });
        
      // });
    </script>
@endsection