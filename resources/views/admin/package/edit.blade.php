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
                    @if($package->destination_id != "null" && !empty($package->destination_id))
                      @foreach($destinations as $destination)
                      <div class="col-md-2 mt-2">
                        <input type="checkbox" name="destination_id[]" id="destination_{{ $destination->id ?? '' }}" value="{{ $destination->id ?? '' }}" <?php if(in_array($destination->id, json_decode($package->destination_id))){ echo "checked";} ?>>
                        <label for="destination_{{ $destination->id ?? '' }}">{{ $destination->name ?? '' }}</label>
                      </div>
                      @endforeach
                    @else
                      @foreach($destinations as $destination)
                      <div class="col-md-2 mt-2">
                        <input type="checkbox" name="destination_id[]" id="destination_{{ $destination->id ?? '' }}" value="{{ $destination->id ?? '' }}">
                        <label for="destination_{{ $destination->id ?? '' }}">{{ $destination->name ?? '' }}</label>
                      </div>
                      @endforeach
                    @endif
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
                <!-- itenerary -->
                
                <div class="col-12">
                  <label for="highlight" class="form-label">Itinerary</label>
                  <div class="btn btn-primary" id="add_itinerary">Add +</div>
                  <div class="my-2" id="itinerary_box">
                    @foreach($itineraries as $key =>  $list)
                   
                    <div class="card p-2 " id="day-{{$key}}">
                      <a href="javascript:void(0)" class="text text-danger remove-itenerary float-right " target="day-{{$key}}"> <i class="bi bi-x-lg"></i></a>
                      <input type="hidden" name="itenirary[{{$key}}][id]" value="{{ $list->id ?? '' }}">
                      <div class="num_of_day my-4">
                        <label for="number_of_day ">Title for day </label>
                        <input type="text" placeholder="" name="itenirary[{{$key}}][title]" id="number_of_day" class="form-control" value="{{ $list->day ?? '' }}" />
                      </div>
                      <div class="plan_for_day my-4">
                        <label for="number_of_day ">Plan for the day </label>
                        <textarea class="form-control"  name="itenirary[{{$key}}][plan]"  cols="30" rows="5" placeholder="" >{!! $list->plans ?? '' !!}</textarea>
                      </div>
                    </div>
                    @endforeach
                  </div>
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
    <script>
      
      $(document).ready(function(){
        var num_of_day = 0;

        $("#add_itinerary").on('click',function(e){
          e.preventDefault();
          num_of_day = num_of_day + 1;

          $("#itinerary_box").append(`
              <div class="card p-2 " id="day-${num_of_day}">
                <a href="javascript:void(0)" class="text text-danger remove-itenerary float-right " target="day-${num_of_day}"> <i class="bi bi-x-lg"></i></a>
                <div class="num_of_day my-4">
                  <label for="number_of_day ">Title for day </label>
                  <input type="text" placeholder="" name="itenirary[${num_of_day}][title]" id="number_of_day" class="form-control"/>
                </div>
                <div class="plan_for_day my-4">
                  <label for="number_of_day ">Plan for the day </label>
                  <textarea class="form-control"  name="itenirary[${num_of_day}][plan]" cols="30" rows="5" placeholder="" ></textarea>
                </div>
              </div>
          `);

        });
        
      })

      $(document).on('click',".remove-itenerary" , function(e){
        e.preventDefault();
        $(`#${$(this).attr('target')}`).remove();
      });
    </script>
@endsection