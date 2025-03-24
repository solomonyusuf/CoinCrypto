<div>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Articles</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Articles</li>
                  </ol>
                </nav>
              </div>
              <div class="col-2">
                <button  data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary d-flex align-items-center px-3 gap-6 mb-3">
                    <i class="ti ti-plus fs-4"></i>
                    <span class="d-none d-md-block fw-medium fs-3">Add Article</span>
                </button>
                <div class="modal fade" id="add" tabindex="-1"  aria-hidden="true"  wire:ignore.self>
                    <div class="modal-dialog modal-xl">
                        <form enctype="multipart/form-data" action="{{ route('create_article') }}" method="post" class="modal-content border-0">
                          @csrf  
                          <div class="modal-header text-bg-primary">
                              <h6 class="modal-title text-white">Add Article</h6>
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
                                        <label  class="form-label">Info</label>
                                        <textarea  name='info' placeholder="" type="text" class="form-control"></textarea>
                                      </div>
                                       {{-- <div class="mb-3"  wire:ignore>
                                        <label  class="form-label">Content *</label>
                                        <textarea id="editor"  name="content" style="height:400px;"  placeholder="" type="text" class="form-control"></textarea>
                                      </div> --}}
                                      <div class="mb-3">
                                        <label  class="form-label">Tag *</label>
                                        <select required name='category_id' class="form-control">
                                          <option selected value="">--- Choose ---</option>
                                          @foreach ($categories as $data)
                                            <option value="{{  $data->id }}">{{ $data->title }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                      <div class="mb-3">
                                        <label  class="form-label">Newsletter *</label>
                                        <select required name='newsletter_id' class="form-control">
                                          <option selected value="">--- Choose ---</option>
                                          @foreach ($newsletters as $data)
                                            <option value="{{  $data->id }}">{{ $data->title }}</option>
                                          @endforeach
                                        </select>
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
                                        <label  class="form-label">Visible * (show to users)</label>
                                        <select required name="visible" class="form-control">
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
                                <button type="submit" data-bs-dismiss="modal"  class="btn btn-primary">Proceed To Editor</button>
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
        
        <div class="tab-content">
          <form class="input-group mt-2 mb-2">
            @csrf
            <input type="text" name="search" value="{{ request()?->search }}" class="form-control" placeholder="Search..." aria-label="Search">
            <button class="btn btn-primary" type="submit">
                <i class="ti ti-search"></i>
            </button>
          </form>
          <div class="row">
         
            @foreach ($articles as $data)
              <div class="col-md-12">
                <div class="card card-body">
                  <span class="side-stick"></span>
                  <h6 class="note-title text-truncate text-uppercase w-75 mb-0"> 
                    {{ $data->article_category->title }} 
                  </h6>
                  <h6 class="note-title text-truncate w-75 mb-0"> 
                    {{ $data->title }} 
                  </h6>
                  <p class="note-date fs-2">
                    {{ \Carbon\Carbon::parse($data->created_at)->toFormattedDateString()}}
                    {{ \Carbon\Carbon::parse($data->created_at)->format('g:i A') }}
                  </p>
                  <div class="note-content">
                    <p class="note-inner-content" data-notecontent="Blandit urlus porttitor aasfs. Integer posuere erat a ante venenatis."> 
                      {!! \Illuminate\Support\Str::limit($data->content, 200, '...') !!}
                    </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="d-flex gap-2">
                      <i class="ti ti-eye fs-5 text-dark"></i>
                      <p class="mb-0 fs-2 fw-semibold text-dark">{{ $data->views}}</p>
                    </div>
                    
                    <button data-bs-toggle="modal" data-bs-target="#edit{{ ++$count }}" style="background: transparent; border:0;" class="link me-1">
                      <i class="ti ti-edit fs-4 favourite-note"></i>
                    </button>

                    <a href="{{ route('delete_article', $data->id) }}" style="background: transparent; border:0;" class="link text-danger ms-2">
                      <i class="ti ti-trash fs-4 remove-note"></i>
                    </a>
                    
                  </div>
                </div>
              </div>
              <div class="modal fade" id="edit{{ $count }}" tabindex="-1"  aria-hidden="true" >
                <div class="modal-dialog modal-xl">
                    <form enctype="multipart/form-data" action="{{ route('update_article', $data->id) }}" method="post" class="modal-content border-0">
                      @csrf  
                      <div class="modal-header text-bg-primary">
                          <h6 class="modal-title text-white">Edit Article</h6>
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
                                  <label  class="form-label">Image</label>
                                  <input name="image"  type="file" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Title *</label>
                                    <input required name='title' value="{{ $data->title }}" type="text" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                    <label  class="form-label">Info *</label>
                                    <textarea  name='info' value="" type="text" class="form-control">{{ $data->info }}</textarea>
                                  </div>
                                  <div class="mb-3"  wire:ignore>
                                    {{-- <label  class="form-label">Content *</label> --}}
                                    {{-- <textarea id="text{{ $count }}" name="content" style="height:400px;"  placeholder="" type="text" class="form-control">
                                      {!! $data->content !!}
                                    </textarea> --}}
                                    <a href="{{ route('admin_editor', $data->id) }}"  class="btn btn-primary"> Proceed To Editor </a>
                         
                                  </div>
                                  <div class="mb-3">
                                    <label  class="form-label">Newsletter *</label>
                                    <select required name='newsletter_id' class="form-control">
                                      <option selected value="">--- Choose ---</option>
                                      @foreach ($newsletters as $item)
                                      @if($item->id == $data->newsletter_id)
                                      <option selected value="{{$item->id}}">{{ $item->title }}</option>
                                      @else
                                      <option value="{{  $item->id }}">{{ $item->title }}</option>
                                    @endif
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="mb-3">
                                    <label  class="form-label">Tag *</label>
                                    <select required name='category_id' class="form-control">
                                      @foreach ($categories as $item)
                                      @if($item->id == $data->category_id)
                                        <option selected value="{{$item->id}}">{{ $item->title }}</option>
                                        @else
                                        <option value="{{  $item->id }}">{{ $item->title }}</option>
                                      @endif
                                    @endforeach
                                    </select>
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                
                        </div>
                    </form>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
            @endforeach
            
             
          </div>
        
        </div>
        {{ $articles->links() }}
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

