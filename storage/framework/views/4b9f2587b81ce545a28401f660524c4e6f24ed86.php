<div>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Article Tags</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Tags</li>
                  </ol>
                </nav>
              </div>
              <div class="col-2">
                <button  data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary d-flex align-items-center px-3 gap-6 mb-3">
                    <i class="ti ti-plus fs-4"></i>
                    <span class="d-none d-md-block fw-medium fs-3">Add Tag</span>
                </button>
                <div class="modal fade" id="add" tabindex="-1"  aria-hidden="true"  wire:ignore.self>
                    <div class="modal-dialog modal-lg">
                        <form wire:submit.prevent="create" class="modal-content border-0">
                            <div class="modal-header text-bg-primary">
                              <h6 class="modal-title text-white">Add Tag</h6>
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="notes-box">
                                <div class="notes-content">
                                  <div>
                                    
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Title *</label>
                                        <input required wire:model='add.title' placeholder="Enter Title" type="text" class="form-control">
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
        <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Tag</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Articles</h6>
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    
                    <td>
                        <span class="fw-normal"><?php echo e($data->title); ?></span>
                    </td>

                    <td>
                        <span class="fw-normal"><?php echo e(count($data?->articles)); ?></span>
                    </td>
                    <td>
                        <div class="dropdown dropstart">
                            <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-6"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <button  data-bs-toggle="modal" data-bs-target="#edit<?php echo e(++$count); ?>"  class="dropdown-item d-flex align-items-center gap-3"><i class="fs-4 ti ti-edit"></i>Edit</button>
                                  
                                </li>
                                <li>
                                    <button wire:click="delete('<?php echo e($data->id); ?>')" class="dropdown-item d-flex align-items-center gap-3"><i class="fs-4 ti ti-trash"></i>Delete</button>
                                </li>
                            </ul>
                            <div class="modal fade" id="edit<?php echo e($count); ?>" tabindex="-1"  aria-hidden="true"  wire:ignore.self>
                                <div class="modal-dialog modal-lg">
                                    <form wire:submit.prevent="update('<?php echo e($data->id); ?>')" class="modal-content border-0">
                                        <div class="modal-header text-bg-primary">
                                          <h6 class="modal-title text-white">Edit Tag</h6>
                                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="notes-box">
                                            <div class="notes-content">
                                              <div>
                                                
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Title *</label>
                                                    <input required wire:model='add.title' placeholder="<?php echo e($data->title); ?>" type="text" class="form-control">
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                

            </tbody>
        </table>
      </div>
</div>
<?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/admin/article-tag-component.blade.php ENDPATH**/ ?>