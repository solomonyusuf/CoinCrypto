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
      <div class="col-md-5 mb-4">
        <h4 class="fw-semibold mb-1 mt-3">Newsletters</h4>
        <p class="card-text pt-2">
            CoinCrypto's newsletters keeps you updated with latest data.
         </p>
        </div>
        <div class="row justify-content-center">
           @foreach ($newsletters as $data)
           
           <div class="col-md-6 col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{ $data->title}}</h5>
                <p class="card-subtitle mb-2 d-flex align-items-center">
                  <img src="{{ $data->host_image }}" style="height:30px;width:30px;border-radius:15px;"/> {{ $data->host_name }}
                </p>
                <p class="card-text pt-1">
                 {!! $data->description !!}
                </p>
                <button  data-bs-toggle="modal" data-bs-target="#subscribe{{ ++$count }}" class="dropdown-item d-flex align-items-center gap-3"><i class="fs-4 ti ti-edit"></i>Subscribe</button>
                <div class="modal fade" id="subscribe{{ $count }}" tabindex="-1"  aria-hidden="true" >
                  <div class="modal-dialog modal-md">
                      <form enctype="multipart/form-data" action="{{ route('subscribe', $data->id) }}" method="post" class="modal-content border-0">
                        @csrf  
                        <div class="modal-header text-bg-primary">
                            <h6 class="modal-title text-white">Subscribe To Newsletter</h6>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="notes-box">
                              <div class="notes-content">
                                <div>
                                  
                                  <div class="mb-3">
                                      <label  class="form-label">Email *</label>
                                      <input required name='email'  placeholder="" type="email" class="form-control">
                                    </div>
                                    
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <div class="d-flex gap-6">
                              <button class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Discard</button>
                              <button type="submit" data-bs-dismiss="modal"  class="btn btn-primary">Submit</button>
                            </div>
                  
                          </div>
                      </form>
                      <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
              </div>          
              </div>
            </div>
          </div>
    
               
           @endforeach
        </div>
    </div>
    @endif
</div>
