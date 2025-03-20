<div>
  @livewire('top-event')
    <div class="container mt-3">
      <div class="col-md-5 mb-4">
        <h4 class="fw-semibold mb-1 mt-3">CoinCrypto Videos</h4>
        <p class="card-text pt-2">
            CoinCrypto's video broadcast relevant news.
         </p>
        </div>
        @if(count($videos) == 0)
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
          <div class="text-center">
              <img src="https://img.icons8.com/?size=100&id=45967&format=png&color=000000" alt="No Data Icon" class="mb-3">
              <h4 class="fw-bold text-muted">No Data Available</h4>
              <p class="text-secondary">It looks like there's nothing to show here yet.</p>
          </div>
      </div>
        @endif
        <div class="row justify-content-center">
        <div class="bg-primary mb-3">
          <div class="container mt-4">
            <div class="row">
                <!-- Featured Video -->
                <div class="col-md-8">
                    <div class="card bg-dark border-0">
                      <iframe 
                      src="{{ $video->link }}" 
                      frameborder="0" 
                      width="100%"
                      height="250"
                      style="border-radius: 10px;"
                      allowfullscreen>
                      </iframe> 
                        <div class="card-body">
                            <h2 class="text-light fw-semibold">{{ $video->title }}</h2>
                            <span class="text-light">{!! \Illuminate\Support\Str::limit($video->description,500,'...') !!}</span>
                        </div>
                    </div>
                </div>
                
                <!-- Up Next Videos -->
                <div class="col-md-4">
                    <h5 class="text-uppercase text-light">Up Next</h5>
                    <div class="list-group">
                      @if(count($videos) > 1)
                      @for($i = 1; $i < 5; $i++)
                          <?php $data = $videos[$i] ?? null; ?>
                          @if($data)
                              <div class="gap-1 justify-content-between list-group-item list-group-item-action bg-dark border-0 border-bottom text-light d-flex">
                                  {{ $data->title }}
                                  <iframe 
                                      src="{{ $data->link }}" 
                                      frameborder="0" 
                                      width="150"
                                      height="100"
                                      style="border-radius: 10px;"
                                      allowfullscreen>
                                  </iframe> 
                              </div>
                          @endif
                      @endfor
                  @endif
                  
                        
                    </div>
                </div>
            </div>
        </div>
    
        </div>
        @if(count($videos) >= 5)
         @for($i = 5; $i < count($videos); $i++)
          <?php
           $data = $videos[$i] ?? null;
          ?> 
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
                <span>
                  {!! \Illuminate\Support\Str::limit($data->description, 50, '..') !!}
                </span>
              </div>
            </div>
          </div> 
          @endfor
          @endif

      </div>
    </div>
</div>
