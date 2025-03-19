<div>
    <div class="container-fluid mt-2">
        <form enctype="multipart/form-data" action="{{ route('update_profile') }}" method="post" class="modal-content border-0">
         @csrf
            <div class="modal-body">
              <div class="notes-box">
                <div class="notes-content">

                  <div>
                    @if($data->image)
                    <div class="mb-3">
                       <img src="{{ asset($data->image) }}" style="height:60px;" />
                      </div>
                      @endif
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image</label>
                        <input  name='image'  type="file" class="form-control" accept="image">
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">First Name *</label>
                        <input  name='first_name' value="{{ $data->first_name }}" type="text" class="form-control">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Last Name *</label>
                        <input  name='last_name' value="{{ $data->last_name }}" type="text" class="form-control">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Info</label>
                        <textarea name='info' value="" type="text" class="form-control">{!! $data->info !!}</textarea>
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email *</label>
                        <input  name='email' value="{{ $data->email }}" disabled type="email" class="form-control"  >
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">New Password </label>
                        <input  name='password' placeholder="Enter Password" type="password" class="form-control" id="exampleInputPassword1">
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="d-flex gap-6">
                <button type="submit"  class="btn btn-primary">Submit</button>
              </div>
    
            </div>
        </form>
    </div>
</div>
