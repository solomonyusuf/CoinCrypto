<div>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Users</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Users</li>
                  </ol>
                </nav>  
              </div>
              <div class="col-2">
                <button  data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary d-flex align-items-center px-3 gap-6 mb-3">
                    <i class="ti ti-plus fs-4"></i>
                    <span class="d-none d-md-block fw-medium fs-3">Add User</span>
                </button>
                <div class="modal modal-lg fade" id="add" tabindex="-1"  aria-hidden="true"  wire:ignore.self>
                    <div class="modal-dialog">
                        <form enctype="multipart/form-data" action="{{ route('create_user') }}" method="POST" class="modal-content border-0">
                          @csrf 
                          <div class="modal-header text-bg-primary">
                              <h6 class="modal-title text-white">Add User</h6>
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="notes-box">
                                <div class="notes-content">
                                  
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Image</label>
                                      <input  name='image'  type="file" class="form-control" accept="image">
                                    </div>
                                     <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Title </label>
                                      <input  name='title'   type="text" class="form-control">
                                    </div>
                                     <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">First Name *</label>
                                      <input  name='first_name'   type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Last Name *</label>
                                      <input  name='last_name'  type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Role</label>
                                      <select  name='role_id' class="form-control">
                                          <option value="">-- Choose --</option>
                                          @foreach ($roles as $item)
                                           <option value="{{$item->id}}">{{ $item->title }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Info</label>
                                      <textarea name='info' value="" type="text" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Linkedin Url</label>
                                      <input  name='linkedin'   type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Twitter Url</label>
                                      <input  name='twitter'   type="text" class="form-control">
                                    </div>
                                     <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Email *</label>
                                      <input  name='email' type="email" class="form-control"  >
                                    </div>
                                    <div class="mb-4">
                                      <label for="exampleInputPassword1" class="form-label"> Password </label>
                                      <input  name='password' placeholder="Enter Password" type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                  </div>
                              

                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <div class="d-flex gap-6">
                                <button class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Discard</button>
                                <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Submit</button>
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
        
        <table id="table" class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Full Name</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Role</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Email</h6>
                    </th>
                     <th>
                        <h6 class="fs-4 fw-semibold mb-0">Publish</h6>
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $data)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            
                            <img src="{{ asset($data->image) ?? 'https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-1.jpg' }}" class="rounded-circle" width="40" height="40">
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">{{ $data->first_name.' '.$data->last_name}}</h6>
                                <span class="fw-normal">{{ $data->email }}</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-primary-subtle text-primary d-inline-flex align-items-center gap-1">
                            {{ $data?->role?->title }}
                        </span>
                    </td>
                    <td>
                        <span class="fw-normal">{{ $data->email }}</span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <span class="fw-normal">{{ count($data?->article_creators) }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="dropdown dropstart">
                            <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-6"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <button  data-bs-toggle="modal" data-bs-target="#edit{{ ++$count }}"  class="dropdown-item d-flex align-items-center gap-3"><i class="fs-4 ti ti-edit"></i>Edit</button>
                                  
                                </li>
                                <li>
                                    <button wire:click="delete('{{$data->id}}')" class="dropdown-item d-flex align-items-center gap-3"><i class="fs-4 ti ti-trash"></i>Delete</button>
                                </li>
                            </ul>
                            <div class="modal fade modal-lg" id="edit{{ $count }}" tabindex="-1"  aria-hidden="true"  wire:ignore.self>
                                <div class="modal-dialog">
                                    <form enctype="multipart/form-data" action="{{ route('update_user', $data->id) }}" method="post" class="modal-content border-0">
                                      @csrf  
                                      <div class="modal-header text-bg-primary">
                                          <h6 class="modal-title text-white">Edit User</h6>
                                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
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
                                                    <label for="exampleInputEmail1" class="form-label">Title </label>
                                                    <input  name='title' value="{{ $data->title }}"   type="text" class="form-control">
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
                                                    <label for="exampleInputEmail1" class="form-label">Role : {{ $data?->role->title}}</label>
                                                    <select  name='role_id' class="form-control">
                                                        @foreach ($roles as $item)
                                                        @if($data->role_id == $item->id)
                                                         <option value="{{$item->id}}" selected>{{ $item->title }}</option>
                                                         @else
                                                         <option value="{{$item->id}}">{{ $item->title }}</option>
                                                      @endif
                                                         @endforeach
                                                    </select>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Info</label>
                                                    <textarea name='info' value="" type="text" class="form-control">{!! $data->info !!}</textarea>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Linkedin Url</label>
                                                    <input  name='linkedin' value="{{ $data->linkedin }}"    type="text" class="form-control">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Twitter Url</label>
                                                    <input  name='twitter' value="{{ $data->twitter }}"    type="text" class="form-control">
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
                                            <button class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Discard</button>
                                            <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Submit</button>
                                          </div>
                                
                                        </div>
                                    </form>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                    </td>
                </tr> 
                @endforeach
                

            </tbody>
        </table>
      </div>
</div>




 
