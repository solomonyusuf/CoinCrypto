<div>
  <div class="container mt-3">
    <div class="mb-3">
          <h4 class="fw-semibold mb-3">Sponsored Articles</h4>
          @if(count($articles) == 0)
          <div class="container d-flex justify-content-center align-items-center min-vh-100">
              <div class="text-center">
                  <img src="https://img.icons8.com/?size=100&id=45967&format=png&color=000000" alt="No Data Icon" class="mb-3">
                  <h4 class="fw-bold text-muted">No Data Available</h4>
                  <p class="text-secondary">It looks like there's nothing to show here yet.</p>
              </div>
          </div>
          @endif
        <div class="row">
          @foreach ($articles as $data)
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden hover-img">
              <div class="position-relative">
                <a href="{{ route('article_detail', [$data->slug, $data->id]) }}">
                <img src="{{ asset($data->image) }}" class="card-img-top" alt="modernize-img">
                </a>
                
                <img src="{{ $data?->article_creators->where(['originator'=> true])->first()?->user?->image ?? $data?->article_creators->first()?->user?->image }}" alt="modernize-img" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" >
              </div>
              <div class="card-body p-4">
                <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">
                  {{ $data?->article_category?->title }}
                </span>
                <a href="{{ route('article_detail', [$data->slug, $data->id]) }}" class="d-block my-4 fs-5 text-dark fw-semibold link-primary">
                {{ $data->title }}
                </a>
                <div class="d-flex align-items-center gap-4">
                  <div class="d-flex gap-2">
                    <i class="ti ti-eye fs-5 text-dark"></i>
                    <p class="mb-0 fs-2 fw-semibold text-dark">{{ $data->views }}</p>
                  </div>
                  <div class="d-flex gap-2">
                    <i class="ti ti-user fs-5 text-dark"></i>
                    <p class="mb-0 fs-2 fw-semibold text-dark">{{ count($data?->article_creators)}}</p>
                  </div>
                  <div class="d-flex align-items-center fs-2 ms-auto">
                    <i class="ti ti-point text-dark"></i>
                    {{ \Carbon\Carbon::parse($data->created_at)->toFormattedDateString()}}&nbsp;
                  {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}

                  </div>
                </div>
              </div>
            </div>
          </div>  
          @endforeach   
        </div>
        {{ $articles->links() }}
    </div>
    <div class="mb-3">
      <h4 class="fw-semibold mb-3">Sponsored Videos</h4>
          @foreach ($videos as $data)
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden hover-img">
              <div class="position-relative">
                <iframe 
                src="{{ $data->link }}" 
                class="card-img-top" 
                frameborder="0" 
                allowfullscreen>
            </iframe>
            
              </div>
              <div class="card-body">
                
                <h6 class="d-block fs-5 text-dark fw-semibold link-primary">
                  {{ $data->title }}
                </h6>
                
              </div>
            </div>
          </div> 
          @endforeach
          {{ $videos->links() }}
    </div>
    <div class="mb-3">
      <h4 class="fw-semibold mb-3">Sponsored Events</h4>
      @foreach ($events as $data)
          <style>
              .blog-bg{
                background:url({{ asset($data->image) }});
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
</div>
