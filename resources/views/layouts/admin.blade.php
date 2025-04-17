<?php
  $user = \App\Models\User::find(auth()->user()?->id);
  $setting = \App\Models\AppSetting::first();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
  @livewireStyles

    <!-- solar icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <!-- Include stylesheet -->
  
  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="{{ $setting->logo }}" />

  <!-- Core Css -->
  <link rel="stylesheet" href="assets/css/styles.css" />

  <title>{{ $setting->name }}</title>
   <style>
    span.rounded-md{
      display:none;
    }
    nav.flex{
      display:flex;
      gap:2rem;
    }
    #dt-length-0{
      margin-right:5px;
    }
     
    </style>
<!-- jQuery (Must come first) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">

<!-- DataTables JS (Must come after jQuery) -->
<script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>

</head>

<body>
    @include('sweetalert::alert')

   
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="left-sidebar with-vertical">
          <div><!-- ---------------------------------- -->
            <!-- Start Vertical Layout Sidebar -->
            <!-- ---------------------------------- -->
            <div class="brand-logo d-flex align-items-center justify-content-between">
              <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
                <img src="{{ asset($setting->logo) }}" style="height:100px;width:150px;" class="dark-logo" alt="Logo-Dark">
              </a>
              <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                <i class="ti ti-x"></i>
              </a>
            </div>
    
            <nav class="sidebar-nav scroll-sidebar simplebar-scrollable-y" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 24px;">
              <ul id="sidebarnav">
                @if($user?->role?->title == 'superadmin')
                 <li class="nav-small-cap">
                  <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                  <span class="hide-menu">Admin</span>
                </li>
                <!-- ---------------------------------- -->
                <!-- Dashboard -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}" id="get-url" aria-expanded="false">
                    <span>
                      <i class="ti ti-aperture"></i>
                    </span>
                    <span class="hide-menu">Dashboard</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('admin_users') ? 'active' : '' }}" href="{{ route('admin_users') }}" aria-expanded="false">
                    <span>
                      <i class="ti ti-users"></i>
                    </span>
                    <span class="hide-menu">Users</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('admin_setting') ? 'active' : '' }}" href="{{ route('admin_setting') }}" aria-expanded="false">
                    <span>
                      <i class="ti ti-settings"></i>
                    </span>
                    <span class="hide-menu">Settings</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('admin_templates') ? 'active' : '' }}" href="{{ route('admin_templates') }}" aria-expanded="false">
                    <span>
                      <i class="ti ti-mail"></i>
                    </span>
                    <span class="hide-menu">Email Templates</span>
                  </a>
                </li>
                 <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('admin_navigations') ? 'active' : '' }}" href="{{ route('admin_navigations') }}" aria-expanded="false">
                    <span>
                      <i class="ti ti-link"></i>
                    </span>
                    <span class="hide-menu">Header Menu</span>
                  </a>
                </li>
                @endif
                
                 <li class="nav-small-cap">
                  <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                  <span class="hide-menu">Author</span>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('article_tags') ? 'active' : '' }}" href="{{ route('article_tags') }}" aria-expanded="false">
                    <span>
                      <i class="ti ti-tag"></i>
                    </span>
                    <span class="hide-menu">Article Tags</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('admin_articles') ? 'active' : '' }}" href="{{ route('admin_articles') }}" aria-expanded="false">
                    <span>
                      <i class="ti ti-notes"></i>
                    </span>
                    <span class="hide-menu">Articles</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('admin_event') ? 'active' : '' }}" href="{{ route('admin_event') }}" aria-expanded="false">
                    <span class="d-flex">
                      <i class="ti ti-layout"></i>
                    </span>
                    <span class="hide-menu">Events</span>
                  </a> 
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('admin_adverts') ? 'active' : '' }}" href="{{ route('admin_adverts') }}" aria-expanded="false">
                    <span class="d-flex">
                      <i class="ti ti-ad"></i>
                    </span>
                    <span class="hide-menu">Adverts</span>
                  </a> 
                </li>
               <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('admin_video_tags') ? 'active' : '' }}" href="{{ route('admin_video_tags') }}" aria-expanded="false">
                    <span class="d-flex">
                      <i class="ti ti-tag"></i>
                    </span>
                    <span class="hide-menu">Video Tags</span>
                  </a> 
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('admin_videos') ? 'active' : '' }}" href="{{ route('admin_videos') }}" aria-expanded="false">
                    <span class="d-flex">
                      <i class="ti ti-video"></i>
                    </span>
                    <span class="hide-menu">Videos</span>
                  </a> 
                </li>
                 <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('admin_podcasts') ? 'active' : '' }}" href="{{ route('admin_podcasts') }}" aria-expanded="false">
                    <span class="d-flex">
                      <i class="ti ti-brand-spotify"></i>
                    </span>
                    <span class="hide-menu">Podcasts</span>
                  </a> 
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('admin_episode') ? 'active' : '' }}" href="{{ route('admin_episode') }}" aria-expanded="false">
                    <span class="d-flex">
                      <i class="ti ti-music"></i>
                    </span>
                    <span class="hide-menu">Episodes</span>
                  </a> 
                </li>
                  <li class="sidebar-item">
                  <a class="sidebar-link  {{ Route::is('admin_newsletter') ? 'active' : '' }}" href="{{ route('admin_newsletter') }}" aria-expanded="false">
                    <span class="d-flex">
                      <i class="ti ti-circle-letter-n"></i>
                    </span>
                    <span class="hide-menu">Newsletters</span>
                  </a> 
                </li>
                
              </ul>
            </div></div></div></div><div class="simplebar-placeholder" style="width: 269px; height: 3545px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 25px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></nav>
    
            <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
              <div class="hstack gap-3">
                @if($user?->image)
                <div class="john-img">
                  <img src="{{ asset($user?->image) }}" class="rounded-circle" width="40" height="40" alt="modernize-img">
                </div>
                @endif
                <div class="john-title">
                  <h6 class="mb-0 fs-4 fw-semibold">{{ $user?->first_name }}</h6>
                  <span class="fs-2">{{ $user?->role?->title }}</span>
                </div>
                <a href="{{ route('logout') }}" class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                  <i class="ti ti-power fs-6"></i>
                </a>
              </div>
            </div>
    
            <!-- ---------------------------------- -->
            <!-- Start Vertical Layout Sidebar -->
            <!-- ---------------------------------- -->
          </div>
        </aside>
        <!--  Sidebar End -->
        <div class="page-wrapper">
          <!--  Header Start -->
          <header class="topbar">
            <div class="with-vertical"><!-- ---------------------------------- -->
              <!-- Start Vertical Layout Header -->
              <!-- ---------------------------------- -->
              <nav class="navbar navbar-expand-lg p-0">
                <ul class="navbar-nav">
                  <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
                    <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                      <i class="ti ti-menu-2"></i>
                    </a>
                  </li>
                  
                </ul>
    
               
    
                <div class="d-block d-lg-none py-4">
                  <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
                    <img src="logo.png" style="height: 40px;" class="dark-logo" alt="Logo-Dark">
                  </a>
                </div>
                <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ti ti-dots fs-7"></i>
                </a>
               
              </nav>
              <!-- ---------------------------------- -->
              <!-- End Vertical Layout Header -->
              <!-- ---------------------------------- -->
    
              <!-- ------------------------------- -->
              <!-- apps Dropdown in Small screen -->
              <!-- ------------------------------- -->
              <!--  Mobilenavbar -->
              <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
                <nav class="sidebar-nav scroll-sidebar">
                  <div class="offcanvas-header justify-content-between">
                    <img src="logo.png" style="height:40px;" class="img-fluid">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body h-n80" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -16px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 16px;">
                    <ul id="sidebarnav">
                      <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                          <span>
                            <i class="ti ti-apps"></i>
                          </span>
                          <span class="hide-menu">Apps</span>
                        </a> 
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="./main/app-chat.html" aria-expanded="false">
                          <span>
                            <i class="ti ti-message-dots"></i>
                          </span>
                          <span class="hide-menu">Chat</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="./main/app-calendar.html" aria-expanded="false">
                          <span>
                            <i class="ti ti-calendar"></i>
                          </span>
                          <span class="hide-menu">Calendar</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="./main/app-email.html" aria-expanded="false">
                          <span>
                            <i class="ti ti-mail"></i>
                          </span>
                          <span class="hide-menu">Email</span>
                        </a>
                      </li>
                    </ul>
                  </div></div></div></div><div class="simplebar-placeholder" style="width: 330px; height: 234px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
                </nav>
              </div>
            </div>
            <div class="app-header with-horizontal">
              <nav class="navbar navbar-expand-xl container-fluid p-0">
                <ul class="navbar-nav align-items-center">
                  <li class="nav-item nav-icon-hover-bg rounded-circle d-flex d-xl-none ms-n2">
                    <a class="nav-link sidebartoggler" id="sidebarCollapse" href="javascript:void(0)">
                      <i class="ti ti-menu-2"></i>
                    </a>
                  </li>
                  <li class="nav-item d-none d-xl-block">
                    <a href="./main/index.html" class="text-nowrap nav-link">
                      <img src="./assets/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="modernize-img">
                      <img src="./assets/images/logos/light-logo.svg" class="light-logo" width="180" alt="modernize-img" style="display: none;">
                    </a>
                  </li>
                  <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-xl-flex">
                    <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <i class="ti ti-search"></i>
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav quick-links d-none d-xl-flex align-items-center">
                  <!-- ------------------------------- -->
                  <!-- start apps Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item nav-icon-hover-bg rounded w-auto dropdown d-none d-lg-flex">
                    <div class="hover-dd">
                      <a class="nav-link" href="javascript:void(0)">
                        Apps<span class="mt-1">
                          <i class="ti ti-chevron-down fs-3"></i>
                        </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                        <div class="row">
                          <div class="col-8">
                            <div class="ps-7 pt-7">
                              <div class="border-bottom">
                                <div class="row">
                                  <div class="col-6">
                                    <div class="position-relative">
                                      <a href="./main/app-chat.html" class="d-flex align-items-center pb-9 position-relative">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                          <img src="./assets/images/svgs/icon-dd-chat.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                                        </div>
                                        <div>
                                          <h6 class="mb-1 fw-semibold fs-3">
                                            Chat Application
                                          </h6>
                                          <span class="fs-2 d-block text-body-secondary">New messages arrived</span>
                                        </div>
                                      </a>
                                      <a href="./main/app-invoice.html" class="d-flex align-items-center pb-9 position-relative">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                          <img src="./assets/images/svgs/icon-dd-invoice.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                                        </div>
                                        <div>
                                          <h6 class="mb-1 fw-semibold fs-3">Invoice App</h6>
                                          <span class="fs-2 d-block text-body-secondary">Get latest invoice</span>
                                        </div>
                                      </a>
                                      <a href="./main/app-contact2.html" class="d-flex align-items-center pb-9 position-relative">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                          <img src="./assets/images/svgs/icon-dd-mobile.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                                        </div>
                                        <div>
                                          <h6 class="mb-1 fw-semibold fs-3">
                                            Contact Application
                                          </h6>
                                          <span class="fs-2 d-block text-body-secondary">2 Unsaved Contacts</span>
                                        </div>
                                      </a>
                                      <a href="./main/app-email.html" class="d-flex align-items-center pb-9 position-relative">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                          <img src="./assets/images/svgs/icon-dd-message-box.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                                        </div>
                                        <div>
                                          <h6 class="mb-1 fw-semibold fs-3">Email App</h6>
                                          <span class="fs-2 d-block text-body-secondary">Get new emails</span>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="position-relative">
                                      <a href="./main/page-user-profile.html" class="d-flex align-items-center pb-9 position-relative">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                          <img src="./assets/images/svgs/icon-dd-cart.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                                        </div>
                                        <div>
                                          <h6 class="mb-1 fw-semibold fs-3">
                                            User Profile
                                          </h6>
                                          <span class="fs-2 d-block text-body-secondary">learn more information</span>
                                        </div>
                                      </a>
                                      <a href="./main/app-calendar.html" class="d-flex align-items-center pb-9 position-relative">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                          <img src="./assets/images/svgs/icon-dd-date.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                                        </div>
                                        <div>
                                          <h6 class="mb-1 fw-semibold fs-3">
                                            Calendar App
                                          </h6>
                                          <span class="fs-2 d-block text-body-secondary">Get dates</span>
                                        </div>
                                      </a>
                                      <a href="./main/app-contact.html" class="d-flex align-items-center pb-9 position-relative">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                          <img src="./assets/images/svgs/icon-dd-lifebuoy.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                                        </div>
                                        <div>
                                          <h6 class="mb-1 fw-semibold fs-3">
                                            Contact List Table
                                          </h6>
                                          <span class="fs-2 d-block text-body-secondary">Add new contact</span>
                                        </div>
                                      </a>
                                      <a href="./main/app-notes.html" class="d-flex align-items-center pb-9 position-relative">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                          <img src="./assets/images/svgs/icon-dd-application.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                                        </div>
                                        <div>
                                          <h6 class="mb-1 fw-semibold fs-3">
                                            Notes Application
                                          </h6>
                                          <span class="fs-2 d-block text-body-secondary">To-do and Daily tasks</span>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row align-items-center py-3">
                                <div class="col-8">
                                  <a class="fw-semibold d-flex align-items-center lh-1" href="javascript:void(0)">
                                    <i class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions
                                  </a>
                                </div>
                                <div class="col-4">
                                  <div class="d-flex justify-content-end pe-4">
                                    <button class="btn btn-primary">Check</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-4 ms-n4">
                            <div class="position-relative p-7 border-start h-100">
                              <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                              <ul class="">
                                <li class="mb-3">
                                  <a class="fw-semibold bg-hover-primary" href="./main/page-pricing.html">Pricing Page</a>
                                </li>
                                <li class="mb-3">
                                  <a class="fw-semibold bg-hover-primary" href="./main/authentication-login.html">Authentication
                                    Design</a>
                                </li>
                                <li class="mb-3">
                                  <a class="fw-semibold bg-hover-primary" href="./main/authentication-register.html">Register Now</a>
                                </li>
                                <li class="mb-3">
                                  <a class="fw-semibold bg-hover-primary" href="./main/authentication-error.html">404 Error Page</a>
                                </li>
                                <li class="mb-3">
                                  <a class="fw-semibold bg-hover-primary" href="./main/app-notes.html">Notes App</a>
                                </li>
                                <li class="mb-3">
                                  <a class="fw-semibold bg-hover-primary" href="./main/page-user-profile.html">User Application</a>
                                </li>
                                <li class="mb-3">
                                  <a class="fw-semibold bg-hover-primary" href="./main/page-account-settings.html">Account Settings</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end apps Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown-hover d-none d-lg-block">
                    <a class="nav-link" href="./main/app-chat.html">Chat</a>
                  </li>
                  <li class="nav-item dropdown-hover d-none d-lg-block">
                    <a class="nav-link" href="./main/app-calendar.html">Calendar</a>
                  </li>
                  <li class="nav-item dropdown-hover d-none d-lg-block">
                    <a class="nav-link" href="./main/app-email.html">Email</a>
                  </li>
                </ul>
                <div class="d-block d-xl-none">
                  <a href="./main/index.html" class="text-nowrap nav-link">
                    <img src="./assets/images/logos/dark-logo.svg" width="180" alt="modernize-img">
                  </a>
                </div>
                <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="p-2">
                    <i class="ti ti-dots fs-7"></i>
                  </span>
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                  <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                    <a href="javascript:void(0)" class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                      <i class="ti ti-align-justified fs-7"></i>
                    </a>
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                      <!-- ------------------------------- -->
                      <!-- start language Dropdown -->
                      <!-- ------------------------------- -->
                      <li class="nav-item nav-icon-hover-bg rounded-circle">
                        <a class="nav-link moon dark-layout" href="javascript:void(0)" style="display: flex;">
                          <i class="ti ti-moon moon" style="display: flex;"></i>
                        </a>
                        <a class="nav-link sun light-layout" href="javascript:void(0)" style="display: none;">
                          <i class="ti ti-sun sun" style="display: none;"></i>
                        </a>
                      </li>
                      <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                        <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                          <img src="./assets/images/svgs/icon-flag-en.svg" alt="modernize-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                          <div class="message-body">
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                              <div class="position-relative">
                                <img src="./assets/images/svgs/icon-flag-en.svg" alt="modernize-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20">
                              </div>
                              <p class="mb-0 fs-3">English (UK)</p>
                            </a>
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                              <div class="position-relative">
                                <img src="./assets/images/svgs/icon-flag-cn.svg" alt="modernize-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20">
                              </div>
                              <p class="mb-0 fs-3">中国人 (Chinese)</p>
                            </a>
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                              <div class="position-relative">
                                <img src="./assets/images/svgs/icon-flag-fr.svg" alt="modernize-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20">
                              </div>
                              <p class="mb-0 fs-3">français (French)</p>
                            </a>
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                              <div class="position-relative">
                                <img src="./assets/images/svgs/icon-flag-sa.svg" alt="modernize-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20">
                              </div>
                              <p class="mb-0 fs-3">عربي (Arabic)</p>
                            </a>
                          </div>
                        </div>
                      </li>
                      <!-- ------------------------------- -->
                      <!-- end language Dropdown -->
                      <!-- ------------------------------- -->
    
                      <!-- ------------------------------- -->
                      <!-- start shopping cart Dropdown -->
                      <!-- ------------------------------- -->
                      <li class="nav-item nav-icon-hover-bg rounded-circle">
                        <a class="nav-link position-relative" href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                          <i class="ti ti-basket"></i>
                          <span class="popup-badge rounded-pill bg-danger text-white fs-2">2</span>
                        </a>
                      </li>
                      <!-- ------------------------------- -->
                      <!-- end shopping cart Dropdown -->
                      <!-- ------------------------------- -->
    
                      <!-- ------------------------------- -->
                      <!-- start notification Dropdown -->
                      <!-- ------------------------------- -->
                      <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                        <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                          <i class="ti ti-bell-ringing"></i>
                          <div class="notification bg-primary rounded-circle"></div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                          <div class="d-flex align-items-center justify-content-between py-3 px-7">
                            <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                            <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                          </div>
                          <div class="message-body" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                              <span class="me-3">
                                <img src="./assets/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48" height="48">
                              </span>
                              <div class="w-100">
                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                                <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                              </div>
                            </a>
                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                              <span class="me-3">
                                <img src="./assets/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="48" height="48">
                              </span>
                              <div class="w-100">
                                <h6 class="mb-1 fw-semibold lh-base">New message</h6>
                                <span class="fs-2 d-block text-body-secondary">Salma sent you new message</span>
                              </div>
                            </a>
                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                              <span class="me-3">
                                <img src="./assets/images/profile/user-4.jpg" alt="user" class="rounded-circle" width="48" height="48">
                              </span>
                              <div class="w-100">
                                <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
                                <span class="fs-2 d-block text-body-secondary">Check your earnings</span>
                              </div>
                            </a>
                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                              <span class="me-3">
                                <img src="./assets/images/profile/user-5.jpg" alt="user" class="rounded-circle" width="48" height="48">
                              </span>
                              <div class="w-100">
                                <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks</h6>
                                <span class="fs-2 d-block text-body-secondary">Assign her new tasks</span>
                              </div>
                            </a>
                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                              <span class="me-3">
                                <img src="./assets/images/profile/user-6.jpg" alt="user" class="rounded-circle" width="48" height="48">
                              </span>
                              <div class="w-100">
                                <h6 class="mb-1 fw-semibold lh-base">John received payment</h6>
                                <span class="fs-2 d-block text-body-secondary">$230 deducted from account</span>
                              </div>
                            </a>
                            <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                              <span class="me-3">
                                <img src="./assets/images/profile/user-7.jpg" alt="user" class="rounded-circle" width="48" height="48">
                              </span>
                              <div class="w-100">
                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                                <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                              </div>
                            </a>
                          </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
                          <div class="py-6 px-7 mb-1">
                            <button class="btn btn-outline-primary w-100">See All Notifications</button>
                          </div>
                        </div>
                      </li>
                      <!-- ------------------------------- -->
                      <!-- end notification Dropdown -->
                      <!-- ------------------------------- -->
    
                      <!-- ------------------------------- -->
                      <!-- start profile Dropdown -->
                      <!-- ------------------------------- -->
                      <li class="nav-item dropdown">
                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                          <div class="d-flex align-items-center">
                            <div class="user-profile-img">
                              <img src="./assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="modernize-img">
                            </div>
                          </div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                          <div class="profile-dropdown position-relative" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                            <div class="py-3 px-7 pb-0">
                              <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                            </div>
                            <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                              <img src="./assets/images/profile/user-1.jpg" class="rounded-circle" width="80" height="80" alt="modernize-img">
                              <div class="ms-3">
                                <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                                <span class="mb-1 d-block">Designer</span>
                                <p class="mb-0 d-flex align-items-center gap-2">
                                  <i class="ti ti-mail fs-4"></i> info@modernize.com
                                </p>
                              </div>
                            </div>
                            <div class="message-body">
                              <a href="./main/page-user-profile.html" class="py-8 px-7 mt-8 d-flex align-items-center">
                                <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                  <img src="./assets/images/svgs/icon-account.svg" alt="modernize-img" width="24" height="24">
                                </span>
                                <div class="w-100 ps-3">
                                  <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                  <span class="fs-2 d-block text-body-secondary">Account Settings</span>
                                </div>
                              </a>
                              <a href="./main/app-email.html" class="py-8 px-7 d-flex align-items-center">
                                <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                  <img src="./assets/images/svgs/icon-inbox.svg" alt="modernize-img" width="24" height="24">
                                </span>
                                <div class="w-100 ps-3">
                                  <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
                                  <span class="fs-2 d-block text-body-secondary">Messages &amp; Emails</span>
                                </div>
                              </a>
                              <a href="./main/app-notes.html" class="py-8 px-7 d-flex align-items-center">
                                <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                  <img src="./assets/images/svgs/icon-tasks.svg" alt="modernize-img" width="24" height="24">
                                </span>
                                <div class="w-100 ps-3">
                                  <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
                                  <span class="fs-2 d-block text-body-secondary">To-do and Daily Tasks</span>
                                </div>
                              </a>
                            </div>
                            <div class="d-grid py-4 px-7 pt-8">
                              <div class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9">
                                <div class="row">
                                  <div class="col-6">
                                    <h5 class="fs-4 mb-3 fw-semibold">Unlimited Access</h5>
                                    <button class="btn btn-primary">Upgrade</button>
                                  </div>
                                  <div class="col-6">
                                    <div class="m-n4 unlimited-img">
                                      <img src="./assets/images/backgrounds/unlimited-bg.png" alt="modernize-img" class="w-100">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <a href="./main/authentication-login.html" class="btn btn-outline-primary">Log Out</a>
                            </div>
                          </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
                        </div>
                      </li>
                      <!-- ------------------------------- -->
                      <!-- end profile Dropdown -->
                      <!-- ------------------------------- -->
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </header>
          <!--  Header End -->
    
          <aside class="left-sidebar with-horizontal">
            <!-- Sidebar scroll-->
            <div>
              <!-- Sidebar navigation-->
              <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
                <ul id="sidebarnav">
                  <!-- ============================= -->
                  <!-- Home -->
                  <!-- ============================= -->
                  <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                  </li>
                  <!-- =================== -->
                  <!-- Dashboard -->
                  <!-- =================== -->
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <span>
                        <i class="ti ti-home-2"></i>
                      </span>
                      <span class="hide-menu">Dashboard</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a href="./main/index.html" class="sidebar-link">
                          <i class="ti ti-aperture"></i>
                          <span class="hide-menu">Modern</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/index2.html" class="sidebar-link">
                          <i class="ti ti-shopping-cart"></i>
                          <span class="hide-menu">eCommerce</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/index3.html" class="sidebar-link">
                          <i class="ti ti-currency-dollar"></i>
                          <span class="hide-menu">NFT</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/index4.html" class="sidebar-link">
                          <i class="ti ti-cpu"></i>
                          <span class="hide-menu">Crypto</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/index5.html" class="sidebar-link">
                          <i class="ti ti-activity-heartbeat"></i>
                          <span class="hide-menu">General</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/index6.html" class="sidebar-link">
                          <i class="ti ti-playlist"></i>
                          <span class="hide-menu">Music</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- ============================= -->
                  <!-- Apps -->
                  <!-- ============================= -->
                  <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Apps</span>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <span>
                        <i class="ti ti-archive"></i>
                      </span>
                      <span class="hide-menu">Apps</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a href="./main/app-calendar.html" class="sidebar-link">
                          <i class="ti ti-calendar"></i>
                          <span class="hide-menu">Calendar</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/app-kanban.html" class="sidebar-link">
                          <i class="ti ti-layout-kanban"></i>
                          <span class="hide-menu">Kanban</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/app-chat.html" class="sidebar-link">
                          <i class="ti ti-message-dots"></i>
                          <span class="hide-menu">Chat</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="./main/app-email.html" aria-expanded="false">
                          <span>
                            <i class="ti ti-mail"></i>
                          </span>
                          <span class="hide-menu">Email</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/app-contact.html" class="sidebar-link">
                          <i class="ti ti-phone"></i>
                          <span class="hide-menu">Contact Table</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/app-contact2.html" class="sidebar-link">
                          <i class="ti ti-list-details"></i>
                          <span class="hide-menu">Contact List</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/app-notes.html" class="sidebar-link">
                          <i class="ti ti-notes"></i>
                          <span class="hide-menu">Notes</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/app-invoice.html" class="sidebar-link">
                          <i class="ti ti-file-text"></i>
                          <span class="hide-menu">Invoice</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/page-user-profile.html" class="sidebar-link">
                          <i class="ti ti-user-circle"></i>
                          <span class="hide-menu">User Profile</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/blog-posts.html" class="sidebar-link">
                          <i class="ti ti-article"></i>
                          <span class="hide-menu">Posts</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/blog-detail.html" class="sidebar-link">
                          <i class="ti ti-details"></i>
                          <span class="hide-menu">Detail</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/eco-shop.html" class="sidebar-link">
                          <i class="ti ti-shopping-cart"></i>
                          <span class="hide-menu">Shop</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/eco-shop-detail.html" class="sidebar-link">
                          <i class="ti ti-basket"></i>
                          <span class="hide-menu">Shop Detail</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/eco-product-list.html" class="sidebar-link">
                          <i class="ti ti-list-check"></i>
                          <span class="hide-menu">List</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/eco-checkout.html" class="sidebar-link">
                          <i class="ti ti-brand-shopee"></i>
                          <span class="hide-menu">Checkout</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="./main/eco-add-product.html">
                          <i class="ti ti-file-plus"></i>
                          <span class="hide-menu">Add Product</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="./main/eco-edit-product.html">
                          <i class="ti ti-file-pencil"></i>
                          <span class="hide-menu">Edit Product</span>
                        </a>
                      </li>
                    </ul>
                  </li>
    
                  <!-- ============================= -->
                  <!-- Frontend pages -->
                  <!-- ============================= -->
                  <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Frontend pages</span>
                  </li>
                  <!-- =================== -->
                  <!-- pages -->
                  <!-- =================== -->
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-app-window"></i>
                      </span>
                      <span class="hide-menu">Frontend pages</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a href="./main/frontend-landingpage.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Homepage</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/frontend-aboutpage.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">About Us</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/frontend-contactpage.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Contact Us</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/frontend-blogpage.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Blog</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/frontend-blogdetailpage.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Blog Details</span>
                        </a>
                      </li>
                    </ul>
                  </li>
    
                  <!-- ============================= -->
                  <!-- PAGES -->
                  <!-- ============================= -->
                  <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">PAGES</span>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <span>
                        <i class="ti ti-notebook"></i>
                      </span>
                      <span class="hide-menu">Pages</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a href="./main/page-faq.html" class="sidebar-link">
                          <i class="ti ti-help"></i>
                          <span class="hide-menu">FAQ</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/page-account-settings.html" class="sidebar-link">
                          <i class="ti ti-user-circle"></i>
                          <span class="hide-menu">Account Setting</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/page-pricing.html" class="sidebar-link">
                          <i class="ti ti-currency-dollar"></i>
                          <span class="hide-menu">Pricing</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/widgets-cards.html" class="sidebar-link">
                          <i class="ti ti-cards"></i>
                          <span class="hide-menu">Card</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/widgets-banners.html" class="sidebar-link">
                          <i class="ti ti-ad"></i>
                          <span class="hide-menu">Banner</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/widgets-charts.html" class="sidebar-link">
                          <i class="ti ti-chart-bar"></i>
                          <span class="hide-menu">Charts</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./landingpage/index.html" class="sidebar-link">
                          <i class="ti ti-app-window"></i>
                          <span class="hide-menu">Landing Page</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- ============================= -->
                  <!-- UI -->
                  <!-- ============================= -->
                  <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">UI</span>
                  </li>
                  <!-- =================== -->
                  <!-- UI Elements -->
                  <!-- =================== -->
                  <li class="sidebar-item mega-dropdown">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-layout-grid"></i>
                      </span>
                      <span class="hide-menu">UI</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a href="./main/ui-accordian.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Accordian</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-badge.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Badge</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-buttons.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Buttons</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-dropdowns.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Dropdowns</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-modals.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Modals</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-tab.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Tab</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-tooltip-popover.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Tooltip &amp; Popover</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-notification.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Alerts</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-progressbar.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Progressbar</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-pagination.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Pagination</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-typography.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Typography</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-bootstrap-ui.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Bootstrap UI</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-breadcrumb.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Breadcrumb</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-offcanvas.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Offcanvas</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-lists.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Lists</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-grid.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Grid</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-carousel.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Carousel</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-scrollspy.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Scrollspy</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-spinner.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Spinner</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/ui-link.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Link</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- ============================= -->
                  <!-- Forms -->
                  <!-- ============================= -->
                  <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Forms</span>
                  </li>
                  <!-- =================== -->
                  <!-- Forms -->
                  <!-- =================== -->
                  <li class="sidebar-item">
                    <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-file-text"></i>
                      </span>
                      <span class="hide-menu">Forms</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <!-- form elements -->
                      <li class="sidebar-item">
                        <a href="./main/form-inputs.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Forms Input</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/form-input-groups.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Input Groups</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/form-input-grid.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Input Grid</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/form-checkbox-radio.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Checkbox &amp; Radios</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/form-bootstrap-switch.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Bootstrap Switch</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/form-select2.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Select2</span>
                        </a>
                      </li>
                      <!-- form inputs -->
                      <li class="sidebar-item">
                        <a href="./main/form-basic.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Basic Form</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/form-vertical.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Form Vertical</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/form-horizontal.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Form Horizontal</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/form-actions.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Form Actions</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/form-row-separator.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Row Separator</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/form-bordered.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Form Bordered</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/form-detail.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Form Detail</span>
                        </a>
                      </li>
                      <!-- form wizard -->
                      <li class="sidebar-item">
                        <a href="./main/form-wizard.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Form Wizard</span>
                        </a>
                      </li>
                      <!-- Quill Editor -->
                      <li class="sidebar-item">
                        <a href="./main/form-editor-quill.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Quill Editor</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- ============================= -->
                  <!-- Tables -->
                  <!-- ============================= -->
                  <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Tables</span>
                  </li>
                  <!-- =================== -->
                  <!-- Bootstrap Table -->
                  <!-- =================== -->
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-layout-sidebar"></i>
                      </span>
                      <span class="hide-menu">Tables</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a href="./main/table-basic.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Basic Table</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/table-dark-basic.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Dark Basic Table</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/table-sizing.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Sizing Table</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/table-layout-coloured.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Coloured Table</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/table-datatable-basic.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Basic Initialisation</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/table-datatable-api.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">API</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/table-datatable-advanced.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Advanced Initialisation</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- ============================= -->
                  <!-- Charts -->
                  <!-- ============================= -->
                  <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Charts</span>
                  </li>
                  <!-- =================== -->
                  <!-- Apex Chart -->
                  <!-- =================== -->
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-chart-pie"></i>
                      </span>
                      <span class="hide-menu">Charts</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a href="./main/chart-apex-line.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Line Chart</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/chart-apex-area.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Area Chart</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/chart-apex-bar.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Bar Chart</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/chart-apex-pie.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Pie Chart</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/chart-apex-radial.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Radial Chart</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/chart-apex-radar.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Radar Chart</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- ============================= -->
                  <!-- Icons -->
                  <!-- ============================= -->
                  <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Icons</span>
                  </li>
                  <!-- =================== -->
                  <!-- Tabler Icon -->
                  <!-- =================== -->
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-archive"></i>
                      </span>
                      <span class="hide-menu">Icon</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a href="./main/icon-tabler.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Tabler Icon</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="./main/icon-solar.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Solar Icon</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- multi level -->
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <span class="rounded-3">
                        <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone" class="ti"></iconify-icon>
                      </span>
                      <span class="hide-menu">Multi DD</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a href="./docs/index.html" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Documentation</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 1</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link has-arrow">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2</span>
                        </a>
                        <ul aria-expanded="false" class="collapse second-level">
                          <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link">
                              <i class="ti ti-circle"></i>
                              <span class="hide-menu">Page 2.1</span>
                            </a>
                          </li>
                          <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link">
                              <i class="ti ti-circle"></i>
                              <span class="hide-menu">Page 2.2</span>
                            </a>
                          </li>
                          <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link">
                              <i class="ti ti-circle"></i>
                              <span class="hide-menu">Page 2.3</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 3</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
              <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
          </aside>
    
          <div class="body-wrapper">
            {{ $slot }}
          </div>
         
        </div>
     
      </div>

  

  @livewireScripts

  <script src="assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="assets/js/theme/app.init.js"></script>
  <script src="assets/js/theme/theme.js"></script>
  <script src="assets/js/theme/app.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
      .quill-wrapper {
      height: 200px;
      margin-bottom: 1rem;
    }
    .cke_notifications_area{display:none;}
</style>
{{-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> --}}
<script src="//cdn.ckeditor.com/4.14.1/full-all/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'editor',{
        filebrowserUploadurl: "{{route('upload_image', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

 <script>
  document.addEventListener('DOMContentLoaded', function () {
      // Automatically initialize CKEditor for all textareas with IDs
      document.querySelectorAll('textarea').forEach(function (textarea) {
          // Ensure the textarea has an ID before trying to initialize CKEditor
          if (textarea.id) {
              CKEDITOR.replace(textarea.id,{
                extraPlugins: 'codesnippet',
                codeSnippet_theme: 'monokai_sublime',
                    filebrowserUploadurl: "{{route('upload_image', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                });  
          }
      });
  });
</script>
  
<script>
        
  let table = new DataTable('#table',{
          "paging": true,          // Enable pagination
          "ordering": true,        // Enable sorting
          "info": true,            // Show table info
          "searching": true,       // Enable search
          "autoWidth": false,      // Prevent width changes
          "columnDefs": [
              { "orderable": false, "targets": [0] } // Disable sorting for first column if needed
          ]
      });
</script>














</body>

</html>