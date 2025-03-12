<div>
    <div class="custom-container mt-3">
        @foreach ($events as $data)
        <style>
            .blog-bg{
              background:url({{ asset('/storage/'.$data->image) }});
            }
          </style>
          <div class="row mb-3">
            <div class="col-lg-6 pe-lg-0 mb-3">
                <div class="blog-bg d-flex flex-column justify-content-between p-9 h-100 rounded-start-3 flex-grow-1">
                 </div>
              </div>
              <div class="col-lg-6 ps-lg-0 mb-3">
                <div class="p-7 p-lg-5 border flex-grow-1 rounded-end-3">
                  <div class="py-4 d-flex flex-column gap-3">
                    <div class="d-flex">
                    
                        <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0"> 
                          Coincrypto Event
                        </p>
                      </div>
                    <h2 class="fw-bolder fs-14 mb-0">
                      {{ $data->title }}
                    </h2>
                
                    <p class="mb-0">
                      {!! $data->content !!}

                     
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-9">
                          <div class="d-flex gap-2">
                            <i class="ti ti-clock fs-5 text-dark"></i>
                            <p class="mb-0 fs-2 fw-semibold text-dark">{{ \Carbon\Carbon::parse($data->event_date)->diffForHumans() }}
                          </p>
                          </div>
                        <div class="d-flex gap-2">
                          <i class="ti ti-calender"></i>
                          <p class="mb-0 fs-2 fw-semibold text-dark">
                            {{ \Carbon\Carbon::parse($data->event_date)->toFormattedDateString()}}&nbsp;
                            </p>
                        </div>
                      </div>
                   
                     
                  </div>
                  <div>
                    <a  href="{{ $data->catgory }}" class="btn btn-outline-primary py-2 mt-3">Register</a>
                 </div>
                </div>
              </div>
          </div>
        @endforeach

      </div>
</div>
