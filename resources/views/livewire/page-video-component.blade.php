<div>
  <style>
    .video-container {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        border-radius: 10px;
    }

    .video-container iframe,
    .video-container video {
        width: 100%;
        height: 100%;
        border-radius: 10px;
    }
</style>
    <div class="custom-container mt-3">
        @if(count($videos) == 0)
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
          <div class="text-center">
              <img src="https://img.icons8.com/?size=100&id=45967&format=png&color=000000" alt="No Data Icon" class="mb-3">
              <h4 class="fw-bold text-muted">No Data Available</h4>
              <p class="text-secondary">It looks like there's nothing to show here yet.</p>
          </div>
      </div>
        @endif
        @foreach ($videos as $data)
        <style>
            .blog-bg{
              background:url({{ asset($data->image) }});
            }
          </style>
          <div class="row mb-3">
            <div class="col-lg-6 pe-lg-0 mb-3">
              <div class="video-container">
                @if (Str::contains($data->link, 'youtube.com') || Str::contains($data->link, 'vimeo.com'))
                    <!-- YouTube/Vimeo Embed -->
                    <iframe src="{{ $data->link }}" frameborder="0" allowfullscreen></iframe>
                @else
                    <!-- Direct MP4 Player -->
                    <video controls>
                        <source src="{{ $data->link }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                @endif
            </div>
              </div>
              <div class="col-lg-6 ps-lg-0 mb-3">
                <div class="p-7 p-lg-5 border flex-grow-1 rounded-end-3">
                  <div class="py-4 d-flex flex-column gap-3">
                    <div class="d-flex">
                    
                        <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0"> 
                          Coincrypto Video
                        </p>
                      </div>
                    <h2 class="fw-bolder fs-14 mb-0">
                      {{ $data->title }}
                    </h2>
                
                    <p class="mb-0">
                      {!! $data->description !!}

                     
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-9">
                          <div class="d-flex gap-2">
                            <i class="ti ti-clock fs-5 text-dark"></i>
                            <p class="mb-0 fs-2 fw-semibold text-dark">
                                {{ \Carbon\Carbon::parse($data->event_date)->toTimeString() }}&nbsp;&nbsp;
                                {{ \Carbon\Carbon::parse($data->event_date)->toFormattedDateString()}}&nbsp;
                            
                          </p>
                          </div>
                        
                      </div>
                   
                     
                  </div>
                  <div>
                    <a target="__blank"  href="{{ $data->link }}" class="btn btn-outline-primary py-2 mt-3">Watch Video</a>
                 </div>
                </div>
              </div>
          </div>
        @endforeach

      </div>
</div>
