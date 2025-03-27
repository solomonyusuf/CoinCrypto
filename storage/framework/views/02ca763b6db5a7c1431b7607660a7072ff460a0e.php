<div>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Newsletters</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Newsletters</li>
                  </ol>
                </nav>
              </div>
              <div class="col-2">
                <button  data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary d-flex align-items-center px-3 gap-6 mb-3">
                    <i class="ti ti-plus fs-4"></i>
                    <span class="d-none d-md-block fw-medium fs-3"> Newsletter</span>
                </button>
                <div class="modal fade" id="add" tabindex="-1"  aria-hidden="true"  wire:ignore.self>
                    <div class="modal-dialog modal-xl">
                        <form enctype="multipart/form-data" action="<?php echo e(route('create_newsletter')); ?>" method="post" class="modal-content border-0">
                          <?php echo csrf_field(); ?>  
                          <div class="modal-header text-bg-primary">
                              <h6 class="modal-title text-white">Add Newsletter</h6>
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
                                        <input required value="<?php echo e(auth()->user()->id); ?>" name='user_id' hidden>
                                      </div>
                                      
                                       <div class="mb-3"  wire:ignore>
                                        <label  class="form-label">Description *</label>
                                        <textarea id="editor"  name="description" style="height:400px;"  placeholder="" type="text" class="form-control"></textarea>
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
        
        <div class="tab-content">
          <form class="input-group mt-2 mb-2">
            <?php echo csrf_field(); ?>
            <input type="text" name="search" value="<?php echo e(request()?->search); ?>" class="form-control" placeholder="Search..." aria-label="Search">
            <button class="btn btn-primary" type="submit">
                <i class="ti ti-search"></i>
            </button>
          </form>
          <div id="note-full-container" class="note-has-grid row">
            <?php $__currentLoopData = $letters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4 single-note-item all-category">
                <div class="card card-body">
                  <span class="side-stick"></span>
                  <h6 class="note-title text-truncate w-75 mb-0"> 
                    <?php echo e($data->title); ?> </h6>
                  <p class="note-date fs-2">
                    Host: <?php echo e($data->user->first_name.' '.$data->user->last_name); ?>

                  </p>
                  <div class="note-content">
                    <p class="note-inner-content" > 
                      Subscriptions: <?php echo e(number_format(count($data?->subscriptions))); ?> |  Releases: <?php echo e(number_format(count($data?->releases))); ?>

                    </p>
                    <p class="note-inner-content" > 
                     
                    </p>
                  </div>
                  <div class="d-flex align-items-center">
                    
                     <a href="<?php echo e(route('release_news', $data->id)); ?>" style="background: transparent; border:0;" class="link me-1">
                      <i class="ti ti-article fs-4 "></i>
                      Release news
                     </a>
                    
                    <button data-bs-toggle="modal" data-bs-target="#edit<?php echo e($count); ?>" style="background: transparent; border:0;" class="link me-1">
                      <i class="ti ti-edit fs-4 favourite-note"></i>
                    </button>

                    <a href="<?php echo e(route('delete_newsletter', $data->id)); ?>" style="background: transparent; border:0;" class="link text-danger ms-2">
                      <i class="ti ti-trash fs-4 remove-note"></i>
                    </a>
                    
                  </div>
                </div>
              </div>
              <div class="modal fade" id="release<?php echo e($count); ?>" tabindex="-1"  aria-hidden="true" >
                <div class="modal-dialog modal-xl">
                    <form enctype="multipart/form-data" action="<?php echo e(route('create_publication', $data->id)); ?>" method="post" class="modal-content border-0">
                      <?php echo csrf_field(); ?>  
                      <div class="modal-header text-bg-primary">
                          <h6 class="modal-title text-white">Publication Release</h6>
                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="notes-box">
                            <div class="notes-content">
                              <div>
                               
                                  <div class="mb-3"  wire:ignore>
                                    <label  class="form-label">Content *</label>
                                    <textarea id="text<?php echo e($count); ?>" name="content" style="height:400px;"  placeholder="" type="text" class="form-control">
                                     </textarea>
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
              <div class="modal fade" id="edit<?php echo e($count); ?>" tabindex="-1"  aria-hidden="true" >
                <div class="modal-dialog modal-xl">
                    <form enctype="multipart/form-data" action="<?php echo e(route('update_newsletter', $data->id)); ?>" method="post" class="modal-content border-0">
                      <?php echo csrf_field(); ?>  
                      <div class="modal-header text-bg-primary">
                          <h6 class="modal-title text-white">Edit Newsletter</h6>
                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="notes-box">
                            <div class="notes-content">
                              <div>
                                <?php if($data->image): ?>
                                <div class="mb-3">
                                  <img src="<?php echo e(asset($data->image)); ?>" style="height:50px;" />
                                  </div>
                                <?php endif; ?>
                                <div class="mb-3">
                                  <label  class="form-label">Banner</label>
                                  <input  name='image'  type="file" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Title *</label>
                                    <input required name='title' value="<?php echo e($data->title); ?>" type="text" class="form-control">
                                  </div>
                                  
                                  <div class="mb-3"  wire:ignore>
                                    <label  class="form-label">Description *</label>
                                    <textarea id="text<?php echo e($count); ?>" name="description" style="height:400px;"  placeholder="" type="text" class="form-control">
                                      <?php echo $data->description; ?>

                                    </textarea>
                                  </div>
                                  
                                  <div class="mb-3">
                                    <label  class="form-label">Visible * (show to users)</label>
                                    <select required name="visible" class="form-control">
                                      <?php if($data->visible == true): ?>
                                      <option selected value="1"> true</option>
                                      <option value="0"> false</option>
                                      <?php else: ?> 
                                      <option  value="1"> true</option>
                                      <option selected value="0"> false</option>
                                      <?php endif; ?>
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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
             
          </div>
        
        </div>
        <div class="container mt-2 mb-2">
          <nav>
              <ul class="pagination justify-content-center">
                  <!-- Previous Button -->
                  <li class="page-item <?php echo e($letters->onFirstPage() ? 'disabled' : ''); ?>">
                      <a class="page-link" href="<?php echo e($letters->previousPageUrl()); ?>" tabindex="-1">Previous</a>
                  </li>
      
                  <!-- Page Numbers -->
                  <?php for($i = 1; $i <= $letters->lastPage(); $i++): ?>
                      <li class="page-item <?php echo e($letters->currentPage() == $i ? 'active' : ''); ?>">
                          <a class="page-link" href="<?php echo e($letters->url($i)); ?>"><?php echo e($i); ?></a>
                      </li>
                  <?php endfor; ?>
      
                  <!-- Next Button -->
                  <li class="page-item <?php echo e($letters->hasMorePages() ? '' : 'disabled'); ?>">
                      <a class="page-link" href="<?php echo e($letters->nextPageUrl()); ?>">Next</a>
                  </li>
              </ul>
          </nav>
      </div>
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
                        uploadurl: "<?php echo e(route('upload_image', ['_token' => csrf_token() ])); ?>",
                        headers: {
                            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
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

<?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/admin/newsletter-component.blade.php ENDPATH**/ ?>