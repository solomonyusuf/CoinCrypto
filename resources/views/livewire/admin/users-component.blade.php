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
              <div class="col-3">
                <a href="javascript:void(0)" class="btn btn-primary d-flex align-items-center px-3 gap-6 mb-3">
                    <i class="ti ti-plus fs-4"></i>
                    <span class="d-none d-md-block fw-medium fs-3">Add User</span>
                  </a>
               </div>
              
            </div>
          </div>
        </div>
        <table class="table text-nowrap mb-0 align-middle">
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
                            
                            <img src="{{ $data->image ?? 'https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-1.jpg' }}" class="rounded-circle" width="40" height="40">
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
                            <div class="progress text-bg-light w-100 h-4">
                                <div class="progress-bar" role="progressbar" aria-label="Example 4px high" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="fw-normal">60%</span>
                        </div>
                    </td>
                    <td>
                        <div class="dropdown dropstart">
                            <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-6"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                </li>
                                <li>
                                    <button wire:click="delete('{{$data->id}}')" class="dropdown-item d-flex align-items-center gap-3"><i class="fs-4 ti ti-trash"></i>Delete</button>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr> 
                @endforeach
                

            </tbody>
        </table>
      </div>
</div>
