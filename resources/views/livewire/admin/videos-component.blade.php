<div>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Videos</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Videos</li>
                  </ol>
                </nav>
              </div>
              <div class="col-2">
                <button  data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary d-flex align-items-center px-3 gap-6 mb-3">
                    <i class="ti ti-plus fs-4"></i>
                    <span class="d-none d-md-block fw-medium fs-3">Add Video</span>
                </button>
                <div class="modal fade" id="add" tabindex="-1"  aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <form enctype="multipart/form-data" action="{{ route('create_video') }}" method="post" class="modal-content border-0">
                          @csrf  
                          <div class="modal-header text-bg-primary">
                              <h6 class="modal-title text-white">Add Video</h6>
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="notes-box">
                                <div class="notes-content">
                                  <div>
                                    <div class="mb-3">
                                      <label  class="form-label">Banner</label>
                                      <input required  name='image'  type="file" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">Title *</label>
                                        <input required name='title' placeholder="" type="text" class="form-control">
                                      </div>
                                      <div class="mb-3">
                                        <label  class="form-label">Cover Video *</label>
                                        <input required name='link' placeholder="" type="text" class="form-control">
                                      </div>
                                       <div class="mb-3">
                                        <label  class="form-label">Content *</label>
                                        <textarea id="editor" name="description" style="height:400px;"  placeholder="" type="text" class="form-control"></textarea>
                                      </div>
                                      <div class="mb-3">
                                        <label  class="form-label">Meta Tags *</label>
                                        <textarea  name='meta_tags' value="" type="text" class="form-control"></textarea>
                                      </div>
                                      <div class="mb-3">
                                        <label  class="form-label">Meta description *</label>
                                        <textarea  name='meta_description' value="" type="text" class="form-control"></textarea>
                                      </div>
                                      <div class="mb-3">
                                        <label  class="form-label">Sponsored *</label>
                                        <select required name='sponsored' class="form-control">
                                          <option selected value="">--- Choose ---</option>
                                          <option value="1"> true</option>
                                          <option value="0"> false</option>
                                        </select>
                                      </div>
                                      <div class="mb-3">
                                        <label  class="form-label">Visible * (show to users) </label>
                                        <select required name='visible' class="form-control">
                                          <option selected value="">--- Choose ---</option>
                                          <option value="1"> true</option>
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
        </div>
        <table id="table"  class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Title</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Category</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Visible</h6>
                    </th>
                    
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $data)
                    
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="{{ asset($data->image) }}"><img src="{{ asset($data->image) }}" class="rounded-circle" width="40" height="40"></a>
                            <div class="ms-3">
                                <h6 class="fw-semibold mb-0">{{ $data->title }}</h6>
                            </div>
                        </div>
                       
                    </td>
                    <td>
                        <h6>
                           {{ $data?->video_category?->title }}
                        </h6>
                    </td>
                    <td>
                        <span class="badge bg-primary-subtle text-primary d-inline-flex align-items-center gap-1">
                            @if($data->visible == true)
                                true
                                @else
                                false
                            @endif
                        </span>
                    </td>
                    
                    <td>
                        <div class="dropdown dropstart">
                            <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-6"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <button  data-bs-toggle="modal" data-bs-target="#edit{{ ++$count }}" class="dropdown-item d-flex align-items-center gap-3"><i class="fs-4 ti ti-edit"></i>Edit</button>
                                   
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="{{ route('delete_video', $data->id) }}"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                            </ul>
                            <div class="modal fade" id="edit{{ $count }}" tabindex="-1"  aria-hidden="true" >
                                <div class="modal-dialog modal-xl">
                                    <form enctype="multipart/form-data" action="{{ route('update_video', $data->id) }}" method="post" class="modal-content border-0">
                                      @csrf  
                                      <div class="modal-header text-bg-primary">
                                          <h6 class="modal-title text-white">Edit Video</h6>
                                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="notes-box">
                                            <div class="notes-content">
                                                <div>
                                                    @if($data->image)
                                                    <div class="mb-3">
                                                    <img src="{{ asset($data->image) }}" style="height:50px;" />
                                                    </div>
                                                    @endif
                                                  <div class="mb-3">
                                                    <label  class="form-label">Banner</label>
                                                    <input   name='image'  type="file" class="form-control">
                                                  </div>
                                                  
                                                  <div class="mb-3">
                                                      <label  class="form-label">Title *</label>
                                                      <input required value="{{ $data->title }}" name='title' placeholder="" type="text" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label  class="form-label">Cover Video *</label>
                                                        <input value="{{ $data->link }}" required name='link' placeholder="" type="text" class="form-control">
                                                      </div>
                                                     <div class="mb-3"  wire:ignore>
                                                      <label  class="form-label">Content *</label>
                                                      <textarea id="text{{ $count }}"  required name="description" style="height:400px;"  placeholder="" type="text" class="form-control">{!! $data->description !!}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                      <label  class="form-label">Meta Tags *</label>
                                                      <textarea  name='meta_tags' value="" type="text" class="form-control">{{ $data->meta_tags }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                      <label  class="form-label">Meta description *</label>
                                                      <textarea  name='meta_description' value="" type="text" class="form-control">{{ $data->meta_description }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                      <label  class="form-label">Sponsored *</label>
                                                      <select required name='sponsored' class="form-control">
                                                        @if ($data->sponsored == true)
                                                        <option selected value="1"> true</option>
                                                        <option value="0"> false</option>
                                                        @else 
                                                        <option  value="1"> true</option>
                                                        <option selected value="0"> false</option>
                                                        @endif
                                                      </select>
                                                    </div>
                                                    <div class="mb-3">
                                                      <label  class="form-label">Visible * (show to users) </label>
                                                      <select required name='visible' class="form-control">
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
                                            <button type="submit" data-bs-dismiss="modal"  class="btn btn-primary">Submit</button>
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
       
     
   <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('textarea').forEach((textarea) => {
            ClassicEditor
                .create(textarea, {
                    toolbar: [
                        'heading', '|', 'bold', 'italic', 'underline', 'link', '|', 
                        'bulletedList', 'numberedList', 'blockQuote', '|', 
                        'undo', 'redo', '|', 'imageUpload', 'mediaEmbed', 'insertTable'
                    ],
                    image: {
                        toolbar: [
                            'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight',
                            '|', 'imageTextAlternative', 'toggleImageCaption', 'imageResize'
                        ],
                        styles: [
                            'alignLeft', 'alignRight', 'full'
                        ],
                        resizeUnit: 'px'
                    },
                    ckfinder: {
                        uploadurl: "{{route('upload_image', ['_token' => csrf_token() ])}}",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        } // Laravel image upload route
                    },
                    wordCount: {
                        onUpdate: stats => {
                            console.log(`Words: ${stats.words}, Characters: ${stats.characters}`);
                        }
                    }})
                    .then(editor => {
                    textarea.dataset.editorInstance = editor;
                })
                .catch(error => console.error(error));
        });
    });
</script>  
</div>
