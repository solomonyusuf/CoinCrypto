<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @livewireStyles

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="icon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="assets/css/styles.css" />

  <title>Coin Crypto News</title>
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css" />
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  
  <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>

</head>
<style>
  @keyframes slideLeft {
    from {
        transform: translateX(0%);
    }
    to {
        transform: translateX(-100%);
    }
}

.slide-container {
    overflow: hidden;
    width: 100%;
    position: relative;
}

.slide-animation1 {
    display: flex;
    flex-wrap: nowrap; /* Prevents wrapping */
    white-space: nowrap; /* Keeps content in a single line */
    animation: slideLeft 15s linear infinite;
}

.slide-animation1:hover {
    animation-play-state: paused; /* Pause animation on hover */
}

.card {
    flex: 0 0 auto; /* Prevent shrinking */
    min-width: 250px; /* Ensure all cards have equal width */
    margin-right: 10px; /* Space between cards */
}
.blog-bg iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

  </style>
<body>
    @include('sweetalert::alert')

  <!-- ------------------------------------- -->
  <!-- Top Bar Start -->
  <!-- ------------------------------------- -->
  @livewire('top-ticker-component')
  <!-- ------------------------------------- -->
  <!-- Top Bar End -->
  <!-- ------------------------------------- -->

  <!-- ------------------------------------- -->
  <!-- Header Start -->
  <!-- ------------------------------------- -->
  <header class="header-fp p-0 w-100">
    <nav class="navbar navbar-expand-lg bg-primary-subtle py-2 py-sm-3 py-lg-3">
      <div class="custom-container d-flex align-items-center justify-content-between">
        <a wire:navigate href="{{route('home')}}" class="text-nowrap logo-img">
           <img src="logo.png" style="height:40px;" alt="Logo-light" />
        </a>
        <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <i class="ti ti-menu-2 fs-8"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 gap-xl-7 gap-8 mb-lg-0">
            <li class="nav-item">
              <a  class="nav-link fs-4 fw-bold text-dark link-primary {{ Route::is('home') ? 'active' : '' }}" wire:navigate href="{{ route('home') }}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary {{ Route::is('prices') ? 'active' : '' }}"  wire:navigate href="{{ route('prices') }}">Prices</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary {{ Route::is('events') ? 'active' : '' }}"  wire:navigate href="{{ route('events') }}">Events</a>
            </li>
            @if(auth()?->user())
            <li class="nav-item dropdown">
              <a class="nav-link fs-4 fw-bold text-dark link-primary d-flex gap-2 {{ Route::is('videos') ? 'active' : '' }}"  wire:navigate href="{{ route('videos') }}">Videos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary {{ Route::is('sponsored') ? 'active' : '' }}"  wire:navigate href="{{ route('sponsored') }}">Sponsored</a>
            </li>

            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary {{ Route::is('podcasts') ? 'active' : '' }}"  wire:navigate href="{{ route('podcasts') }}">Podcasts</a>
            </li>
             <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary {{ Route::is('newsletters') ? 'active' : '' }}"  wire:navigate href="{{ route('newsletters') }}">Newsletters</a>
            </li>
            @endif
          </ul>
          @if(!auth()?->user())
          <div class="px-2">
            <a wire:navigate href="{{route('login')}}" class="btn btn-primary py-8">Sign In</a>
          </div>
           <div  class="px-2">
            <a wire:navigate href="{{route('register')}}" class="btn btn-outline-primary py-8">Sign Up</a>
          </div>
          @endif
          @if(Route::has('login'))
          @if(auth()?->user() && \App\Models\User::find(auth()?->user()?->id)?->role->title != 'member')
          <div  class="px-2">
            <a wire:navigate href="{{route('dashboard')}}" class="btn btn-outline-primary py-8">Dashboard</a>
          </div>
          @endif
            
          @endif
        </div>
      </div>
    </nav>
  </header>
  <!-- ------------------------------------- -->
  <!-- Header End -->
  <!-- ------------------------------------- -->

  <!-- ------------------------------------- -->
  <!-- Responsive Sidebar Start -->
  <!-- ------------------------------------- -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <a wire:navigate href="{{route('home')}}">
        <img src="logo.png" style="height:40px;" alt="Logo-light" />
      </a>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="list-unstyled ps-0">
        <li class="mb-1">
          <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }} px-0 fs-4 d-block text-dark link-primary w-100 py-2">
           News
          </a>
        </li>

        <li class="mb-1">
          <a href="{{ route('prices') }}" class="{{ Route::is('prices') ? 'active' : '' }} px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Prices
          </a>
        </li>

        <li class="mb-1">
          <a href="{{ route('events') }}" class="{{ Route::is('events') ? 'active' : '' }} px-0 fs-4 d-flex align-items-center justify-content-start gap-2 w-100 py-2 text-dark link-primary">
            Events
          </a>
        </li>
        @if(auth()?->user())
        <li class="mb-1">
          <a href="{{ route('videos') }}" class="{{ Route::is('videos') ? 'active' : '' }} px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Videos
          </a>
        </li>
      <li class="mb-1">
          <a href="{{ route('sponsored') }}" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Sponsored
          </a>
        </li>
        <li class="mb-1">
          <a href="{{ route('podcasts') }}" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Podcasts
          </a>
        </li>
        <li class="mb-1">
          <a href="{{ route('newsletters') }}" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Newsletters
          </a>
        </li>
        @endif
        @if(!auth()?->user())
        <li class="mb-3">
          <a wire:navigate href="{{route('login')}}" class="btn btn-primary py-8">Sign In</a>
        </li>
         <li  class="">
          <a wire:navigate href="{{route('register')}}" class="btn btn-outline-primary py-8">Sign Up</a>
         </li>
        @endif
        @if(Route::has('login'))
        @if(auth()?->user() && \App\Models\User::find(auth()?->user()?->id)?->role->title != 'member')
        <li  class="">
          <a wire:navigate href="{{route('dashboard')}}" class="btn btn-outline-primary py-8">Dashboard</a>
        </li>
        @endif
        @endif
     
      </ul>
    </div>
  </div>
  <!-- ------------------------------------- -->
  <!-- Responsive Sidebar End -->
  <!-- ------------------------------------- -->

  <div class="main-wrapper overflow-hidden mb-3">
        {{$slot}}
  </div>

  <!-- ------------------------------------- -->
  <!-- Footer Start -->
  <!-- ------------------------------------- -->
  <footer>
    <div class="container-fluid mt-5">
      <div class="border-bottom">
        <div class="row mb-sm-12 mb-4">
          <div class="col-md-3 col-6">
            <h3 class="fs-4 fw-semibold mb-7">News</h3>
            <ul class="d-flex flex-column gap-9">
              <li>
                <a href="" class="fs-4 text-body link-primary">Latest</a>
              </li>
              <li>
                <a href="" class="fs-4 text-body link-primary">Top Stories</a>
              </li>
               
              
            </ul>
          </div>
          <div class="col-md-3 col-6">
            <h3 class="fs-4 fw-semibold mb-7">Events</h3>
            <ul class="d-flex flex-column gap-9">
              <li>
                <a href="" class="fs-4 text-body link-primary">Upcoming</a>
              </li>
              <li>
                <a href="" class="fs-4 text-body link-primary">All</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 col-6">
            <h3 class="fs-4 fw-semibold mb-7">Podcasts</h3>
            <ul class="d-flex flex-column gap-9">
              <li>
                <a href="" class="fs-4 text-body link-primary">Latest</a>
              </li>
              <li>
                <a href="" class="fs-4 text-body link-primary">Episodes</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 col-6">
            <h3 class="fs-4 fw-semibold mb-7">Socical</h3>
            <div class="d-flex gap-9">
              <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Facebook">
                <i class="ti ti-brand-facebook"></i>
              </a>
              <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Twitter">
                <i class="ti ti-brand-twitter"></i>
              </a>
              <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Instagram">
                <i class="ti ti-brand-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between py-7 flex-md-nowrap flex-wrap gap-sm-0 gap-3">
        <div class="d-flex gap-3 align-items-center">
          <img src="icon.png" style="height:45px;" alt="icon">
          <p class="fs-4 mb-0">All rights reserved by CoinCrypto. </p>
        </div>
        
      </div>
    </div>
  </footer>
  <!-- ------------------------------------- -->
  <!-- Footer End -->
  <!-- ------------------------------------- -->

  <!-- Scroll Top -->
  <a href="javascript:void(0)" class="top-btn btn btn-primary d-flex align-items-center justify-content-center round-54 p-0 rounded-circle">
    <i class="ti ti-arrow-up fs-7"></i>
  </a>

  @livewireScripts
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="assets/js/theme/app.init.js"></script>
  <script src="assets/js/theme/theme.js"></script>
  <script src="assets/js/theme/app.min.js"></script>

  <!-- solar icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="assets/js/frontend-landingpage/homepage.js"></script>
 <script>
                $(document).ready(function () {
                    $('#pricesTable').DataTable({
                        processing: true,
                        responsive: true, // Makes it mobile-friendly
                        stateSave: true, // Saves user settings (like sorting, filtering)
                        pagingType: "full_numbers", // Advanced pagination controls
                        order: [[0, "desc"]], // Default sorting (change column index if needed)
                        dom: "Bfrtip", // Enables Buttons
                        buttons: [
                            {
                                extend: "copy",
                                text: "📋 Copy",
                                className: "btn btn-secondary",
                            },
                            {
                                extend: "csv",
                                text: "📥 CSV",
                                className: "btn btn-success",
                            },
                            {
                                extend: "excel",
                                text: "📊 Excel",
                                className: "btn btn-primary",
                            },
                            {
                                extend: "pdf",
                                text: "📄 PDF",
                                className: "btn btn-danger",
                            },
                            {
                                extend: "print",
                                text: "🖨️ Print",
                                className: "btn btn-info",
                            },
                        ],
                        language: {
                            search: "🔍 Search:",
                            lengthMenu: "Show _MENU_ entries",
                            zeroRecords: "No matching records found",
                            info: "Showing _START_ to _END_ of _TOTAL_ entries",
                            infoFiltered: "(filtered from _MAX_ total entries)",
                        },
                        
                    });
                });
            </script>
</body>

</html>