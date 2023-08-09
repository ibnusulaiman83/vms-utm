<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}"> 
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Bootstrap Css -->
      
        <link href="{{ asset('/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="light" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-start">
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="{{ asset('/assets/images/logo-sm.png') }}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{ asset('/assets/images/logo-dark.png') }}" alt="" height="19">
                                    </span>
                                </a>
    
                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{ asset('/assets/images/logo-sm.png') }}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{ asset('/assets/images/logo-light.png') }}" alt="" height="19">
                                    </span>
                                </a>
                            </div>
    
                            <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </div>
    
                        <div class="float-end">
    
                            <!-- App Search-->
                            <form class="app-search d-none d-lg-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="fa fa-search"></span>
                                </div>
                            </form>

                            <div class="dropdown d-none d-lg-inline-block ms-2">
                                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="me-2" src="{{ asset('/assets/images/flags/us_flag.jpg') }}" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ asset('/assets/images/flags/germany_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ asset('/assets/images/flags/italy_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ asset('/assets/images/flags/french_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ asset('/assets/images/flags/spain_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Spanish </span>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ asset('/assets/images/flags/russia_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Russian </span>
                                    </a>
                                </div>
                            </div>
    
                            <div class="dropdown d-none d-lg-inline-block">
                                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                    <i class="mdi mdi-fullscreen font-size-24"></i>
                                </button>
                            </div>
    
                            <div class="dropdown d-inline-block d-lg-none ms-2">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
    
                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                
    
                            <div class="dropdown d-inline-block ms-1">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-danger rounded-pill">3</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="m-0"> Notifications (258) </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 230px;">
                                        <a href="javascript:void(0);" class="text-reset notification-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-xs">
                                                    <span class="avatar-title border-success rounded-circle ">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </span>
                                                </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Your order is placed</h6>
                                                    <div class="text-muted">
                                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
    
                                        <a href="javascript:void(0);" class="text-reset notification-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-xs">
                                                    <span class="avatar-title border-warning rounded-circle ">
                                                        <i class="mdi mdi-message"></i>
                                                    </span>
                                                </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">New Message received</h6>
                                                    <div class="text-muted">
                                                        <p class="mb-1">You have 87 unread messages</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
    
                                        <a href="javascript:void(0);" class="text-reset notification-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-xs">
                                                    <span class="avatar-title border-info rounded-circle ">
                                                        <i class="mdi mdi-glass-cocktail"></i>
                                                    </span>
                                                </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Your item is shipped</h6>
                                                    <div class="text-muted">
                                                        <p class="mb-1">It is a long established fact that a reader will</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
    
                                        <a href="javascript:void(0);" class="text-reset notification-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-xs">
                                                    <span class="avatar-title border-primary rounded-circle ">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </span>
                                                </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Your order is placed</h6>
                                                    <div class="text-muted">
                                                        <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
    
                                        <a href="javascript:void(0);" class="text-reset notification-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-xs">
                                                    <span class="avatar-title border-warning rounded-circle ">
                                                        <i class="mdi mdi-message"></i>
                                                    </span>
                                                </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">New Message received</h6>
                                                    <div class="text-muted">
                                                        <p class="mb-1">You have 87 unread messages</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-2 border-top">
                                        <a class="btn btn-sm btn-link font-size-14 w-100 text-center" href="javascript:void(0)">
                                            View all
                                        </a>
                                    </div>
                                </div>
                            </div>
    
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user" src="{{ asset('/assets/images/users/user-4.jpg') }}"
                                        alt="Header Avatar">
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i> Profile</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i> Logout</a>
                                </div>
                            </div>
    
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                    <i class="mdi mdi-spin mdi-cog"></i>
                                </button>
                            </div>
    
                        </div>
                    </div>
                </div>

                <div class="top-navigation">
                    <div class="page-title-content">
                        <div class="container-fluid">
                            <!-- start page title -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="page-title-box">
                                        <h4>Horizontal</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Lexa</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Horizontal</a></li>
                                            <li class="breadcrumb-item active">Horizontal</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="state-information d-none d-sm-block">
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="topnav">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">
                                                <i class="ti-dashboard"></i>Vehicle
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">
                                                <i class="ti-support"></i>Vehicle Rent
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

   
            </header>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                © <script>document.write(new Date().getFullYear())</script> UTM Digital <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        
        <!-- JAVASCRIPT -->
        <script src="{{ asset('/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('/libs/morris.js/morris.min.js') }}"></script>
        <script src="{{ asset('/libs/raphael/raphael.min.js') }}"></script>

        <script src="{{ asset('/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>

</html>