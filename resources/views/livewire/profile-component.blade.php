<div>
    <div class="container-fluid mt-2">
        <form enctype="multipart/form-data" wire:submit.prevent="update" class="modal-content border-0">
         
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
                        <input  wire:model='update_image'  type="file" class="form-control" accept="image">
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">First Name *</label>
                        <input   wire:model='add.first_name' placeholder="{{ $data->first_name }}" type="text" class="form-control">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Last Name *</label>
                        <input  wire:model='add.last_name' placeholder="{{ $data->last_name }}" type="text" class="form-control">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Role : {{ $data?->role->title}}</label>
                        <select  wire:model='add.role_id' class="form-control">
                            <option value="">-- Choose --</option>
                            @foreach ($roles as $item)
                             <option value="{{$item->id}}">{{ $item->title }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Info</label>
                        <textarea wire:model='add.info' placeholder="{!! $data->info !!}" type="text" class="form-control"></textarea>
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email *</label>
                        <input  wire:model='add.email' placeholder="{{ $data->email }}" disabled type="email" class="form-control"  >
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">New Password </label>
                        <input  wire:model='add.password' placeholder="Enter Password" type="password" class="form-control" id="exampleInputPassword1">
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
