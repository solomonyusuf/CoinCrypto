<div>
 
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
                <span>
                  {!! \Illuminate\Support\Str::limit($data->description, 50, '..') !!}
                </span>
              </div>
            </div>
          </div> 
          @endforeach

      </div>
</div>
