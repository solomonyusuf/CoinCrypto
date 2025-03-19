<?php
  $user = \App\Models\User::find(auth()->user()?->id);
?>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.css">
  <link rel="stylesheet" href="assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
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
    #dt-length-0
    {
      margin:4px;
    }
  </style>
  <style>
      .countdown-box {
          width: 80px;
          height: 100px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          background: white;
          border-radius: 8px;
          font-size: 20px;
          font-weight: bold;
          color: black;
      }
      .countdown-label {
          font-size: 12px;
          color: gray;
      }
      .countdown-container {
          background: var(--bs-primary);
          padding: 15px;
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 5px;
      }
      .register-btn {
          background: black;
          color: white;
          padding: 10px 20px;
          font-weight: bold;
          text-decoration: none;
          border-radius: 5px;
      }
      .close-btn {
          color: white;
          font-size: 20px;
          cursor: pointer;
          margin-left: auto;
      }
  </style>
   <style>
    .video-container {
        position: relative;
        width: 100%;
        height: 50vh;
        overflow: hidden;
        border-radius: 10px;
    }

    .video-container iframe,
    .video-container video {
        width: 100%;
        height: 100%;
        border-radius: 10px;
    }
</style>
<style>
  .subscribe-box {
      background: #f8f9fa;
      padding: 20px;
      border-radius: 8px;
  }
  .btn-subscribe {
      background: #ffcc00;
      border: none;
      color: black;
      font-weight: bold;
      width: 100%;
  }
  .newsletter-item {
      border-bottom: 1px solid #ddd;
      padding-bottom: 10px;
      margin-bottom: 10px;
  }
  .newsletter-item:last-child {
      border-bottom: none;
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
        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="border-0 p-0 shadow-none">
          <i class="ti ti-menu-2 fs-8 text-primary"></i>
        </button>
        <a wire:navigate href="{{route('home')}}" class="text-nowrap logo-img">
           <img src="logo.png" style="height:40px;" alt="Logo-light" />
        </a>
        {{-- <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <i class="ti ti-menu-2 fs-8"></i>
        </button> --}}
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

          @if(auth()?->user())
          <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
           <li class="nav-item px-2">
              <a class="nav-link pe-0" href="{{ route('profile') }}" id="drop1" aria-expanded="false">
                <div class="d-flex align-items-center">
                  <img src="{{ $user?->image }}" class="rounded-circle" width="30" height="30" >
                </div>
              </a>
            </li>
            <li class="nav-item px-2">
              <a href="{{ route('logout') }}" class="btn btn-outline-danger py-8"> Logout </a>
            </li>
          </ul>
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
  <footer style="background:#e7e5f4;">
    <div class="container-fluid mt-5">
      <div class="border-bottom">
        <div class="row mb-sm-12 mb-4 ">
          <div class="col-md-6 col-sm-12 mt-3">
            <a wire:navigate href="{{route('home')}}" class="text-nowrap logo-img mb-4">
              <img src="logo.png" style="height:40px;" alt="Logo-light" />
           </a>
            <h3 class="fs-4 fw-semibold mb-3 mt-5">DISCLOSURE & POLICES</h3>
            <div>
              <p>
                CoinCrypto is a media outlet that covers the cryptocurrency industry. Its journalists abide by a strict set of editorial policies. CoinCrypto has adopted a set of principles aimed at ensuring the integrity, editorial independence and freedom from bias of its publications.
              </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-12 mt-5 px-1">
            <h3 class="fs-4 fw-semibold mb-7">News</h3>
            <ul class="d-flex flex-column gap-9">
              <li>
                <a href="{{ route('home') }}#latest" class="fs-4 text-body link-primary">Latest</a>
              </li>
              <li>
                <a href="{{ route('home') }}#top" class="fs-4 text-body link-primary">Top Stories</a>
              </li>
               <li>
                <a href="{{ route('events') }}" class="fs-4 text-body link-primary">Events</a>
              </li>
               <li>
                <a href="{{ route('podcasts') }}" class="fs-4 text-body link-primary">Podcasts</a>
              </li>
               
              
            </ul>
          </div>
          <div class="col-md-3 col-sm-12 mt-5">
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
 
 </body>

</html>