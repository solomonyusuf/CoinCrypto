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
</head>

<body>
  <!-- ------------------------------------- -->
  <!-- Top Bar Start -->
  <!-- ------------------------------------- -->
  <div class="d-none d-md-block topbar-image bg-primary py-1 rounded-0 mb-0 alert alert-dismissible fade show" role="alert">
        <div class="d-flex justify-content-center gap-sm-3 gap-2 align-items-center text-center flex-md-nowrap flex-wrap">
            <div class="card text-white bg-dark p-1">
                <a title="View price details " class="d-flex align-items-center text-decoration-none text-white px-2" href="/price/bitcoin">
                    <div class="d-flex align-items-center">
                        <span class="fw-bolder text-uppercase">BTC</span>
                        <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" height="20" width="20" fill="none">
                            <path d="M9.60482 12.1042L6.64401 9.14179C6.60316 9.10095 6.57253 9.05668 6.55211 9.009C6.53169 8.96133 6.52148 8.91319 6.52148 8.86458C6.52148 8.76736 6.55586 8.68229 6.62461 8.60938C6.69336 8.53646 6.78398 8.5 6.89648 8.5H13.1048C13.2173 8.5 13.3079 8.5375 13.3767 8.6125C13.4454 8.6875 13.4798 8.775 13.4798 8.875C13.4798 8.88889 13.439 8.97758 13.3573 9.14106L10.3965 12.1042C10.3409 12.1597 10.2784 12.2014 10.209 12.2292C10.1395 12.2569 10.0701 12.2708 10.0007 12.2708C9.93121 12.2708 9.86176 12.2569 9.79232 12.2292C9.72287 12.2014 9.66037 12.1597 9.60482 12.1042Z" fill="#FF0000"></path>
                        </svg>
                    </div>
                    <div class="ms-3">
                        <span class="fw-monospace fs-6">$86,237.53</span>
                        <span class="text-danger ms-2">-0.63%</span>
                    </div>
                </a>
            </div>
           

            <div class="card text-white bg-dark p-1">
                    <a title="View price details " class="d-flex align-items-center text-decoration-none text-white px-2" href="/price/bitcoin">
                        <div class="d-flex align-items-center">
                            <span class="fw-bolder text-uppercase">ETH</span>
                            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" height="20" width="20" fill="none">
                                <path d="M9.60482 12.1042L6.64401 9.14179C6.60316 9.10095 6.57253 9.05668 6.55211 9.009C6.53169 8.96133 6.52148 8.91319 6.52148 8.86458C6.52148 8.76736 6.55586 8.68229 6.62461 8.60938C6.69336 8.53646 6.78398 8.5 6.89648 8.5H13.1048C13.2173 8.5 13.3079 8.5375 13.3767 8.6125C13.4454 8.6875 13.4798 8.775 13.4798 8.875C13.4798 8.88889 13.439 8.97758 13.3573 9.14106L10.3965 12.1042C10.3409 12.1597 10.2784 12.2014 10.209 12.2292C10.1395 12.2569 10.0701 12.2708 10.0007 12.2708C9.93121 12.2708 9.86176 12.2569 9.79232 12.2292C9.72287 12.2014 9.66037 12.1597 9.60482 12.1042Z" fill="#FF0000"></path>
                            </svg>
                        </div>
                        <div class="ms-3">
                            <span class="fw-monospace fs-6">$6,237.53</span>
                            <span class="text-success ms-2">+1.63%</span>
                        </div>
                    </a>
            </div>
            
            <div class="card text-white bg-dark p-1">
                    <a title="View price details " class="d-flex align-items-center text-decoration-none text-white px-2" href="/price/bitcoin">
                        <div class="d-flex align-items-center">
                            <span class="fw-bolder text-uppercase">TRX</span>
                            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" height="20" width="20" fill="none">
                                <path d="M9.60482 12.1042L6.64401 9.14179C6.60316 9.10095 6.57253 9.05668 6.55211 9.009C6.53169 8.96133 6.52148 8.91319 6.52148 8.86458C6.52148 8.76736 6.55586 8.68229 6.62461 8.60938C6.69336 8.53646 6.78398 8.5 6.89648 8.5H13.1048C13.2173 8.5 13.3079 8.5375 13.3767 8.6125C13.4454 8.6875 13.4798 8.775 13.4798 8.875C13.4798 8.88889 13.439 8.97758 13.3573 9.14106L10.3965 12.1042C10.3409 12.1597 10.2784 12.2014 10.209 12.2292C10.1395 12.2569 10.0701 12.2708 10.0007 12.2708C9.93121 12.2708 9.86176 12.2569 9.79232 12.2292C9.72287 12.2014 9.66037 12.1597 9.60482 12.1042Z" fill="#FF0000"></path>
                            </svg>
                        </div>
                        <div class="ms-3">
                            <span class="fw-monospace fs-6">$6,237.53</span>
                            <span class="text-success ms-2">+1.63%</span>
                        </div>
                    </a>
            </div>
           
        </div>
 </div>
  <!-- ------------------------------------- -->
  <!-- Top Bar End -->
  <!-- ------------------------------------- -->

  <!-- ------------------------------------- -->
  <!-- Header Start -->
  <!-- ------------------------------------- -->
  <header class="header-fp p-0 w-100">
    <nav class="navbar navbar-expand-lg bg-primary-subtle py-1 py-lg-3">
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
              <a class="nav-link fs-4 fw-bold text-dark link-primary" wire:navigate href="">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active fs-4 fw-bold text-dark link-primary" wire:navigate href="">Prices</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link fs-4 fw-bold text-dark link-primary d-flex gap-2" wire:navigate href="">Trending
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary" wire:navigate href="">Global</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary" wire:navigate href="">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary" wire:navigate href="">Contact</a>
            </li>
          </ul>
          <div class="px-2">
            <a wire:navigate href="{{route('login')}}" class="btn btn-primary py-8">Sign In</a>
          </div>
           <div  class="px-2">
            <a wire:navigate href="{{route('register')}}" class="btn btn-outline-primary py-8">Sign Up</a>
          </div>
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
          <a href="../main/frontend-aboutpage.html" class="px-0 fs-4 d-block text-dark link-primary w-100 py-2">
            About Us
          </a>
        </li>

        <li class="mb-1">
          <a href="../main/frontend-blogpage.html" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Blog
          </a>
        </li>

        <li class="mb-1">
          <a href="../main/frontend-portfoliopage.html" class="px-0 fs-4 d-flex align-items-center justify-content-start gap-2 w-100 py-2 text-dark link-primary">
            Portfolio
            <span class="badge text-primary bg-primary-subtle fs-2 fw-bolder hstack">New</span>
          </a>
        </li>

        <li class="mb-1">
          <a href="../main/index.html" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Dashboard
          </a>
        </li>

        <li class="mb-1">
          <a href="../main/frontend-pricingpage.html" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Pricing
          </a>
        </li>

        <li class="mb-1">
          <a href="../main/frontend-contactpage.html" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Contact
          </a>
        </li>
        <li class="mt-3">
          <a href="../main/authentication-login.html" class="btn btn-primary w-100">Log In</a>
        </li>
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
    <div class="container-fluid">
      <div class="border-bottom">
        <div class="row mb-sm-12 mb-4">
          <div class="col-md-3 col-6">
            <h3 class="fs-4 fw-semibold mb-7">Applications</h3>
            <ul class="d-flex flex-column gap-9">
              <li>
                <a href="../main/app-kanban.html" class="fs-4 text-body link-primary">Kanban</a>
              </li>
              <li>
                <a href="../main/app-invoice.html" class="fs-4 text-body link-primary">Invoice
                  List</a>
              </li>
              <li>
                <a href="../main/eco-shop.html" class="fs-4 text-body link-primary">eCommerce</a>
              </li>
              <li>
                <a href="../main/app-chat.html" class="fs-4 text-body link-primary">Chat</a>
              </li>
              <li>
                <a href="../main/app-calendar.html" class="fs-4 text-body link-primary">Calendar</a>
              </li>
              <li>
                <a href="../main/blog-posts.html" class="fs-4 text-body link-primary">Blog</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 col-6">
            <h3 class="fs-4 fw-semibold mb-7">Forms</h3>
            <ul class="d-flex flex-column gap-9">
              <li>
                <a href="../main/form-basic.html" class="fs-4 text-body link-primary">Form
                  Basic</a>
              </li>
              <li>
                <a href="../main/form-horizontal.html" class="fs-4 text-body link-primary">Form
                  Horizontal</a>
              </li>
              <li>
                <a href="../main/form-wizard.html" class="fs-4 text-body link-primary">Form
                  Wizard</a>
              </li>
              <li>
                <a href="../main/form-bootstrap-validation.html" class="fs-4 text-body link-primary">Form Validation
                </a>
              </li>
              <li>
                <a href="../main/form-editor-quill.html" class="fs-4 text-body link-primary">Quill Editor</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 col-6">
            <h3 class="fs-4 fw-semibold mb-7">Tables</h3>
            <ul class="d-flex flex-column gap-9">
              <li>
                <a href="../main/table-basic.html" class="fs-4 text-body link-primary">Basic
                  Table</a>
              </li>
              <li>
                <a href="../main/table-dark-basic.html" class="fs-4 text-body link-primary">Table
                  Dark Basic</a>
              </li>
              <li>
                <a href="../main/table-sizing.html" class="fs-4 text-body link-primary">Table
                  Sizing</a>
              </li>
              <li>
                <a href="../main/table-layout-coloured.html" class="fs-4 text-body link-primary">Coloured Table</a>
              </li>
              <li>
                <a href="../main/table-datatable-basic.html" class="fs-4 text-body link-primary">Basic Initialisation</a>
              </li>
              <li>
                <a href="../main/table-datatable-api.html" class="fs-4 text-body link-primary">API</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 col-6">
            <h3 class="fs-4 fw-semibold mb-7">Follow us</h3>
            <div class="d-flex gap-9">
              <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Facebook">
                <img src="../assets/images/frontend-pages/icon-facebook.svg" alt="facebook">
              </a>
              <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Twitter">
                <img src="../assets/images/frontend-pages/icon-twitter.svg" alt="twitter">
              </a>
              <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Instagram">
                <img src="../assets/images/frontend-pages/icon-instagram.svg" alt="instagram">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between py-7 flex-md-nowrap flex-wrap gap-sm-0 gap-3">
        <div class="d-flex gap-3 align-items-center">
          <img src="../assets/images/logos/favicon.png" alt="icon">
          <p class="fs-4 mb-0">All rights reserved by Modernize. </p>
        </div>
        <div>
          <p class="mb-0">Produced by <a target="_blank" href="https://adminmart.com/" class="text-primary link-primary">AdminMart</a>.</p>
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
  <script src="assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="assets/js/theme/app.init.js"></script>
  <script src="assets/js/theme/theme.js"></script>
  <script src="assets/js/theme/app.min.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="assets/js/frontend-landingpage/homepage.js"></script>
</body>

</html>