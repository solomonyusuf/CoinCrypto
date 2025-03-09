<div>

    <style>
        .main-wrapper{
            background: url('assets/img/bg1.svg');
        }
    </style>
    <div class="d-flex mt-5 mb-5 align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
            <div class="card mb-0">
              <div class="card-body">
                <a href="" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                  <img src="logo.png" style="height:40px;" alt="Logo-light" style="display: none;">
                </a>
             
                <div class="position-relative text-center my-4">
                  <p class="mb-0 fs-4 px-3 d-inline-block bg-body text-dark z-index-5 position-relative">
                    Account recovery
                  </p>
                  <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                </div>
                <form wire:submit.prevent="submit">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input required wire:model="email" placeholder="Enter Email" type="email" class="form-control">
                  </div>
                  
                  <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Continue</button>
                  <div class="d-flex align-items-center justify-content-center">
    
                    <a class="text-primary fw-medium ms-2" wire:navigate href="{{route('login')}}">Login account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>