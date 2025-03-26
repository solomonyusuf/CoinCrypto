<div>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Podcast Episodes</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Episodes</li>
                  </ol>
                </nav>
              </div>
              <div class="col-2">
                <button  data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary d-flex align-items-center px-3 gap-6 mb-3">
                    <i class="ti ti-plus fs-4"></i>
                    <span class="d-none d-md-block fw-medium fs-3">Add Episode</span>
                </button>
                <div class="modal fade" id="add" tabindex="-1"  aria-hidden="true"  wire:ignore.self>
                    <div class="modal-dialog modal-lg">
                        <form action="{{ route('create_episode') }}" method="post" class="modal-content border-0">
                            @csrf
                            <div class="modal-header text-bg-primary">
                              <h6 class="modal-title text-white">Add Episode</h6>
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="notes-box">
                                <div class="notes-content">
                                  <div>
                                    
                                    <div class="mb-3">
                                        <label  class="form-label">Image</label>
                                        <input required  name='image'  type="file" class="form-control">
                                      </div>
                                      <div class="mb-3">
                                          <label  class="form-label">Title *</label>
                                          <input required name='title' placeholder="" type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                          <label  class="form-label">Description</label>
                                          <textarea  name='description' placeholder="" type="text" class="form-control"></textarea>
                                        </div>
                                          
                                        <div class="mb-3">
                                          <label  class="form-label">Podcast *</label>
                                          <select required name='podcast_id' class="form-control">
                                            <option selected value="">--- Choose ---</option>
                                            @foreach ($podcasts as $data)
                                              <option value="{{  $data->id }}">{{ $data->title }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                            <label  class="form-label">Link *</label>
                                            <input required name='link' placeholder="" type="text" class="form-control">
                                          </div>
                                          <div class="mb-3">
                                            <label  class="form-label">Castbox </label>
                                            <input  name='castbox' placeholder="" type="text" class="form-control">
                                          </div>
                                          <div class="mb-3">
                                            <label  class="form-label">Itunes </label>
                                            <input name='itunes' placeholder="" type="text" class="form-control">
                                          </div>
                                            
                                          <div class="mb-3">
                                            <label  class="form-label">Spotify </label>
                                            <input name='spotify' placeholder="" type="text" class="form-control">
                                          </div>
                                           <div class="mb-3">
                                            <label  class="form-label">Podchaser </label>
                                            <input name='podchaser' placeholder="" type="text" class="form-control">
                                          </div>
                                          <div class="mb-3">
                                            <label  class="form-label">Visible * (show to users)</label>
                                            <select required name="visible" class="form-control">
                                              <option selected value="1"> true</option>
                                              <option value="0"> false</option>
                                            </select>
                                          </div>
                                
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <div class="d-flex gap-6">
                                <button class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Discard</button>
                                <button type="submit"  class="btn btn-primary">Submit</button>
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
        <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Episode</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Podcast</h6>
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($episodes as $data)
                <tr>
                    
                    <td>
                        <div class="d-flex align-items-center">
                            
                            <img src="{{ asset($data->image) }}" class="rounded-circle" width="40" height="40">
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">{{ $data->title}}</h6>
                             </div>
                        </div>
                   </td>

                    <td>
                        <span class="fw-normal">{{ $data->podcast->title}}</span>
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
                                    <a href="{{ route('delete_episode', $data->id) }}" class="dropdown-item d-flex align-items-center gap-3"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                            </ul>
                            <div class="modal fade" id="edit{{ $count }}" tabindex="-1"  aria-hidden="true"  wire:ignore.self>
                                <div class="modal-dialog modal-lg">
                                    <form action="{{ route('update_episode', $data->id) }}" method="post" class="modal-content border-0">
                                        @csrf
                                        <div class="modal-header text-bg-primary">
                                          <h6 class="modal-title text-white">Edit Episode</h6>
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
                                                    <label  class="form-label">Image</label>
                                                    <input  name='image'  type="file" class="form-control">
                                                  </div>
                                                  <div class="mb-3">
                                                      <label class="form-label">Title *</label>
                                                      <input value="{{ $data->title }}" name='title' placeholder="" type="text" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                      <label  class="form-label">Description</label>
                                                      <textarea  name='description' placeholder="" type="text" class="form-control">{{ $data->description }}</textarea>
                                                    </div>
                                                      
                                                    <div class="mb-3">
                                                      <label  class="form-label">Podcast *</label>
                                                      <select name='podcast_id' class="form-control">
                                                        <option selected value="">--- Choose ---</option>
                                                        @foreach ($podcasts as $item)
                                                        @if($data->podcast_id == $item->id)
                                                          <option value="{{  $item->id }}" selected>{{ $item->title }}</option>
                                                          @else
                                                          <option value="{{  $item->id }}">{{ $item->title }}</option>
                                                        @endif
                                                        @endforeach
                                                      </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label  class="form-label">Link *</label>
                                                        <input value="{{ $data->link }}" name='link' placeholder="" type="text" class="form-control">
                                                      </div>
                                                      <div class="mb-3">
                                                        <label  class="form-label">Castbox </label>
                                                        <input value="{{ $data->castbox }}" name='castbox' placeholder="" type="text" class="form-control">
                                                      </div>
                                                      <div class="mb-3">
                                                        <label  class="form-label">Itunes </label>
                                                        <input value="{{ $data->itunes }}" name='itunes' placeholder="" type="text" class="form-control">
                                                      </div>
                                                        
                                                      <div class="mb-3">
                                                        <label  class="form-label">Spotify </label>
                                                        <input value="{{ $data->spotify }}" name='spotify' placeholder="" type="text" class="form-control">
                                                      </div>
                                                       <div class="mb-3">
                                                        <label  class="form-label">Podchaser </label>
                                                        <input name='podchaser' value="{{ $data->podchaser }}" placeholder="" type="text" class="form-control">
                                                      </div>
                                                      <div class="mb-3">
                                                        <label  class="form-label">Visible * (show to users)</label>
                                                        <select required name="visible" class="form-control">
                                                          @if ($data->visible == true)
                                                          <option selected value="1"> true</option>
                                                          <option value="0"> false</option>
                                                          @else 
                                                          <option  value="1"> true</option>
                                                          <option selected value="0"> false</option>
                                                          @endif
                                                        </select>
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
