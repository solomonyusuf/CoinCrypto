<div>
  @livewire('top-event')
    <div class="container mt-3">
      <div class="col-md-5 mb-4">
        <h4 class="fw-semibold mb-1 mt-3">CoinCrypto Events</h4>
        <p class="card-text pt-2">
            CoinCrypto's events are globally recognized.
         </p>
        </div>
        @if(count($events) == 0)
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
          <div class="text-center">
              <img src="https://img.icons8.com/?size=100&id=45967&format=png&color=000000" alt="No Data Icon" class="mb-3">
              <h4 class="fw-bold text-muted">No Data Available</h4>
              <p class="text-secondary">It looks like there's nothing to show here yet.</p>
          </div>
      </div>
        @endif
        @foreach ($events as $event)
        <div class="bg-primary rounded mb-3">
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
</div>
