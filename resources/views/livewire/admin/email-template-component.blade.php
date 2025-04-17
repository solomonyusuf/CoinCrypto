<div>
      <div class="container-fluid">
          <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Mail Templates</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Mail Templates</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
  
  
        <form action="{{ route('update_template') }}" method="POST">
              @csrf
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link d-flex active" data-bs-toggle="tab" href="#item1" role="tab">
                          <span><i class="ti ti-login fs-4"></i>
                          </span>
                          <span class="d-none d-md-block ms-2">Login </span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link d-flex" data-bs-toggle="tab" href="#item2" role="tab">
                          <span><i class="ti ti-user fs-4"></i>
                          </span>
                          <span class="d-none d-md-block ms-2">Register</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link d-flex" data-bs-toggle="tab" href="#item3" role="tab">
                          <span><i class="ti ti-restore"></i> </span>
                          <span class="d-none d-md-block ms-2">Reset</span>
                      </a>
                  </li>
                   <li class="nav-item">
                      <a class="nav-link d-flex" data-bs-toggle="tab" href="#item4" role="tab">
                          <span><i class="ti ti-rss"></i> </span>
                          <span class="d-none d-md-block ms-2">Subscription</span>
                      </a>
                  </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                  <div class="tab-pane active" id="item1" role="tabpanel">
                   
                    <div class="mb-3 mt-5">
                        <input name="login_subject" value="{{ $setting->login_subject }}"  type="text" class="form-control" id="exampleInputtext1" placeholder="">
                    </div>
                    <div class="mb-3 mt-2">
                        <textarea name="login_mail" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->login_mail }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                  </div>
                  <div class="tab-pane p-3" id="item2" role="tabpanel">
                    <div class="mb-3 mt-5">
                        <input name="register_subject" value="{{ $setting->register_subject }}"  type="text" class="form-control" id="exampleInputtext1" placeholder="">
                    </div>
                    <div class="mb-3 mt-2">
                        <textarea name="register_mail" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->register_mail }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                          
                  </div>
                  <div class="tab-pane p-3" id="item3" role="tabpanel">
                    <div class="mb-3 mt-5">
                        <input name="reset_subject" value="{{ $setting->reset_subject }}"  type="text" class="form-control" id="exampleInputtext1" placeholder="">
                    </div>
                    <div class="mb-3 mt-2">
                        <textarea name="reset_mail" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->reset_mail }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                         
                  </div>
                  <div class="tab-pane p-3" id="item4" role="tabpanel">
                    <div class="mb-3 mt-5">
                        <input name="activate_newsletter_subject" value="{{ $setting->activate_newsletter_subject }}"  type="text" class="form-control" id="exampleInputtext1" placeholder="">
                    </div>
                    <div class="mb-3 mt-2">
                        <textarea name="activate_newsletter_mail" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->activate_newsletter_mail }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                  </div>
                  
                  
              </div>
            </form>
  
    </div>
  
    <script>
      document.addEventListener('DOMContentLoaded', function () {
          document.querySelectorAll('textarea:not(.ignore-editor)').forEach((textarea) => {
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
                          styles: ['alignLeft', 'alignRight', 'full'],
                          resizeUnit: 'px'
                      },
                      ckfinder: {
                          uploadUrl: "{{ route('upload_image') }}?_token={{ csrf_token() }}",
                          headers: {
                              'X-CSRF-TOKEN': '{{ csrf_token() }}'
                          }
                      },
                      wordCount: {
                          onUpdate: stats => {
                              console.log(`Words: ${stats.words}, Characters: ${stats.characters}`);
                          }
                      }
                  })
                  .then(editor => {
                      textarea.dataset.editorInstance = editor;
                  })
                  .catch(error => console.error(error));
          });
      });
  </script>
  
  </body>

  </div>
   