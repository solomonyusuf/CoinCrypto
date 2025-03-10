<div>


<div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="assets/images/svgs/icon-user-male.svg" width="50" height="50" class="mb-3" >
                    <p class="fw-semibold fs-3 text-primary mb-1">
                      Users
                    </p>
                    <h5 class="fw-semibold text-primary mb-0">{{ number_format($users) }}</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 zoom-in bg-warning-subtle shadow-none">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="assets/images/svgs/icon-briefcase.svg" width="50" height="50" class="mb-3" >
                      <p class="fw-semibold fs-3 text-warning mb-1">Articles</p>
                      <h5 class="fw-semibold text-warning mb-0">{{ number_format($articles) }}</h5>
                    </div>
                  </div>
                </div>
              </div>
        </div>
       

         <div class="row">
            <div class="col-md-6">
              <div class="card border-0 zoom-in bg-info-subtle shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="assets/images/svgs/icon-mailbox.svg" width="50" height="50" class="mb-3" >
                    <p class="fw-semibold fs-3 text-info mb-1">Newsletters</p>
                    <h5 class="fw-semibold text-info mb-0">{{ number_format($newsletters) }}</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card border-0 zoom-in bg-danger-subtle shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="./assets/images/svgs/icon-favorites.svg" width="50" height="50" class="mb-3">
                    <p class="fw-semibold fs-3 text-danger mb-1">Events</p>
                    <h5 class="fw-semibold text-danger mb-0">{{ number_format($events) }}</h5>
                  </div>
                </div>
              </div>
            </div> 
         </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card border-0 zoom-in bg-info-subtle shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="assets/img/video.png" width="50" height="50" class="mb-3">
                    <p class="fw-semibold fs-3 text-info mb-1">Videos</p>
                    <h5 class="fw-semibold text-info mb-0">{{ number_format($videos) }}</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card border-0 zoom-in bg-danger-subtle shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="assets/img/podcast.png" width="50" height="50" class="mb-3" >
                    <p class="fw-semibold fs-3 text-danger mb-1">Podcasts</p>
                    <h5 class="fw-semibold text-danger mb-0">{{ number_format($podcasts) }}</h5>
                  </div>
                </div>
              </div>
            </div> 
         </div>
</div>




</div>
