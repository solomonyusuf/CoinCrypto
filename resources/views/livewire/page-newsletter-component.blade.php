<div>
    @if(count($newsletters) == 0)
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
          <div class="text-center">
              <img src="https://img.icons8.com/?size=100&id=45967&format=png&color=000000" alt="No Data Icon" class="mb-3">
              <h4 class="fw-bold text-muted">No Data Available</h4>
              <p class="text-secondary">It looks like there's nothing to show here yet.</p>
          </div>
      </div>
        @endif
    @if($newsletters)
    <div class="container-fluid">
        <h4 class="fw-semibold mb-4 mt-3">Newsletters</h4>
        <div class="row justify-content-center">
           @foreach ($newsletters as $data)
           
           <div class="col-md-6 col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{ $data->title}}</h5>
                <p class="card-subtitle mb-2 d-flex align-items-center">
                  <img src="{{ $data->host_image }}" style="height:30px;width:30px;border-radius:15px;"/> {{ $data->host_name }}
                </p>
                <p class="card-text pt-2">
                 {!! $data->description !!}
                </p>
              </div>
            </div>
          </div>
    
               
           @endforeach
        </div>
    </div>
    @endif
</div>
