<div>
  <div class="container mt-3">
    @if(count($articles) > 0)
    <div class="mb-3">
      <div class="col-md-5 mb-4">
        <h4 class="fw-semibold mb-1 mt-3">Sponsored Articles</h4>
        <p class="card-text pt-2">
            CoinCrypto's sponsored articles
         </p>
        </div>
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
          <div class="col-md-6 col-sm-12 border-bottom">
            <a href="{{ route('article_detail', [$data->slug, $data->id]) }}" class="gap-1 border-0 shadow-0 d-flex py-2">
              <div class="card-body d-flex gap-2">
                <div class="text-warning round-48 rounded-1  justify-content-center">
                  <img src="{{ asset($data->image) }}" style="height:50px;width:50px;border-radius:25px;" alt="">
                </div>
                <div class="">
                  <h4 class="fs-4 mb-0">{{ $data->title }}</h4>
                  <p class="mb-0 mt-2">
                    {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
      
                  </p>
                </div>
              </div>
            </a>
          </div>
          @endforeach   
        </div>
        {{ $articles->links() }}
    </div>
    @endif
    @if(count($videos) > 0)
    <div class="mb-3">
      <div class="col-md-5 mb-4">
        <h4 class="fw-semibold mb-1 mt-3">Sponsored Videos</h4>
        <p class="card-text pt-2">
            CoinCrypto's sponsored videos
         </p>
        </div>
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
    @endif
    
    @if(count($events) > 0)
    <div class="mb-3">
      
      <div class="col-md-5 mb-4">
        <h4 class="fw-semibold mb-1 mt-3">Sponsored Events</h4>
        <p class="card-text pt-2">
            CoinCrypto's sponsored events
         </p>
        </div>
      @foreach ($events as $event)
      <div class="bg-primary rounded">
        <div class="d-flex relative shadow-md container-fluid justify-center items-center">
          <div class="row d-flex justify-content-between justify-content-center items-center pt-1 pb-1 w-100">
            <div class="col-md-5 col-sm-12 d-flex gap-2 justify-content-center pb-4">
              <div>
                <img src="{{ $event?->image }}" alt="user" width="120" height="120" class="rounded-circle ms-3">
              </div>
            <div>
            <h3 class="text-white fw-semibold mt-4 mb-3">
              {{ $event->title }}
            </h3>
            <span class="text-white mt-2 mb-1 ">
              {!! $event->content !!}
            </span>
            <a href="{{ $event->category }}" class="register-btn ms-3">Register Now</a>
              
           </div>
             
            </div>
            <div class="col-md-7 col-sm-12 justify-content-center ">
              <div class="countdown-container">
                <div class="row align-items-center">
                  <div class="countdown-box">
                      <span id="days">{{ \Carbon\Carbon::parse($event->created_at)->day }}</span>
                      <span class="countdown-label">{{ \Carbon\Carbon::parse($event->created_at)->format('F') }}</span>
                  </div>
                  
              </div>
              
                
            </div>
            </div>
    
          </div>
         </div>
      </div>
       @endforeach
    </div>
    @endif
  
  </div>
</div>
