<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> SPRUHA - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">


    <!-- Choices JS -->
    <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Main Theme Js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Style Css -->
    <link href="{{ asset('assets/css/styles.min.css') }}" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="{{ asset('assets/libs/node-waves/waves.min.css') }}" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">

</head>

<body>

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        {{-- <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div> --}}
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home"
                        aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-profile" type="button" role="tab"
                        aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel"
                    aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style"
                                        id="switcher-light-theme" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style"
                                        id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction"
                                        id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction"
                                        id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-vertical" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-regular" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-classic">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width"
                                        id="switcher-full-width" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width"
                                        id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel"
                    aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio"
                                        name="header-colors" id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio"
                                        name="header-colors" id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio"
                                        name="header-colors" id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Header"
                                        type="radio" name="header-colors" id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Header"
                                        type="radio" name="header-colors" id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio"
                                        name="theme-primary" id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio"
                                        name="theme-primary" id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio"
                                        name="theme-primary" id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio"
                                        name="theme-background" id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div
                                    class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio"
                                        name="theme-background" id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid canvas-footer">
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-secondary btn-block m-1">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


    <!-- Loader -->
    <div id="loader">
        <img src="{{ asset('assets/images/media/media-79.svg') }}" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                                <img src="{{ asset('assets/images/brand-logos/desktop-logo.png') }}" alt="logo"
                                    class="desktop-logo') }}">
                                <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}" alt="logo"
                                    class="toggle-logo') }}">
                                <img src="{{ asset('assets/images/brand-logos/desktop-dark.png') }}" alt="logo"
                                    class="desktop-dark') }}">
                                <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                                    class="toggle-dark') }}">
                                <img src="{{ asset('assets/images/brand-logos/desktop-white.png') }}" alt="logo"
                                    class="desktop-white') }}">
                                <img src="{{ asset('assets/images/brand-logos/toggle-white.png') }}" alt="logo"
                                    class="toggle-white') }}">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                            data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="main-header-center d-none d-lg-block  header-link">
                        <div class="input-group">
                            <div class="input-group-btn search-panel">
                                <select class="js-example-basic-single" name="state" data-trigger>
                                    <option value="s-1">Choose one</option>
                                    <option value="s-2">T-Projects...</option>
                                    <option value="s-3">Microsoft Project</option>
                                    <option value="s-4">Risk Management</option>
                                    <option value="s-5">Team Building</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" id="typehead"
                                placeholder="Search for results..." autocomplete="off">
                            <button class="btn btn-primary"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <div id="headersearch" class="header-search">
                            <div class="p-3">
                                <div class="">
                                    <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                                    <div class="ps-2">
                                        <a href="javascript:void(0)" class="search-tags"><i
                                                class="fe fe-search me-2"></i>People<span></span></a>
                                        <a href="javascript:void(0)" class="search-tags"><i
                                                class="fe fe-search me-2"></i>Pages<span></span></a>
                                        <a href="javascript:void(0)" class="search-tags"><i
                                                class="fe fe-search me-2"></i>Articles<span></span></a>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-semibold text-muted mb-2 fs-13">Apps and pages</p>
                                    <ul class="ps-2 list-unstyled">
                                        <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                            <a href="full-calendar.html"><span><i
                                                        class='bx bx-calendar me-2 fs-14 bg-primary-transparent p-2 rounded-circle '></i>Calendar</span></a>
                                        </li>
                                        <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                            <a href="mail-inbox.html"><span><i
                                                        class='bx bx-envelope me-2 fs-14 bg-primary-transparent p-2 rounded-circle'></i>Mail</span></a>
                                        </li>
                                        <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                            <a href="buttons.html"><span><i
                                                        class='bx bx-dice-1 me-2 fs-14 bg-primary-transparent p-2 rounded-circle '></i>Buttons</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                                    <ul class="ps-2 list-unstyled">
                                        <li class="p-1 align-items-center text-muted mb-1 search-app">
                                            <a href="javascript:void(0)"
                                                class="text-primary"><u>http://spruko/html/spruko.com</u></a>
                                        </li>
                                        <li class="p-1 align-items-center text-muted mb-1 search-app">
                                            <a href="javascript:void(0)"
                                                class="text-primary"><u>http://spruko/demo/spruko.com</u></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="py-3 border-top px-0">
                                <div class="text-center">
                                    <a href="javascript:void(0)"
                                        class="text-primary text-decoration-underline fs-15">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting -->
                        <a href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <!-- Start::header-link-icon -->
                                <i class="fe fe-moon header-link-icon lh-2"></i>
                                <!-- End::header-link-icon -->
                            </span>
                            <span class="dark-layout">
                                <!-- Start::header-link-icon -->
                                <i class="fe fe-sun header-link-icon lh-2"></i>
                                <!-- End::header-link-icon -->
                            </span>
                        </a>
                        <!-- End::header-link|layout-setting -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element country-selector">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle country-Flag"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle cx="256" cy="256" r="256" fill="#f0f0f0" />
                                    <g fill="#0052b4">
                                        <path
                                            d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z" />
                                    </g>
                                    <g fill="#d80027">
                                        <path
                                            d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z" />
                                        <path
                                            d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z" />
                                    </g>
                                </svg>
                            </span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{ asset('assets/images/flags/6.jpg') }}" alt="img">
                                    </span>
                                    English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{ asset('assets/images/flags/5.jpg') }}" alt="img">
                                    </span>
                                    Spanish
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{ asset('assets/images/flags/1.jpg') }}" alt="img">
                                    </span>
                                    French
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{ asset('assets/images/flags/2.jpg') }}" alt="img">
                                    </span>
                                    German
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{ asset('assets/images/flags/3.jpg') }}" alt="img">
                                    </span>
                                    Italian
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{ asset('assets/images/flags/4.jpg') }}" alt="img">
                                    </span>
                                    Russian
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen  d-xl-flex d-none">
                        <!-- Start::header-link -->
                        <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                            <i class="fe fe-maximize full-screen-open header-link-icon"></i>
                            <i class="fe fe-minimize full-screen-close header-link-icon d-none"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element cart-dropdown d-xl-flex d-none">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <i class="fe fe-shopping-cart header-link-icon"></i>
                            <span class="badge bg-primary header-icon-badge" id="cart-icon-badge">5</span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end"
                            data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Cart Items</p>
                                    <span class="badge bg-primary rounded-pill" id="cart-data">5 Items</span>
                                </div>
                            </div>
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-center cart-dropdown-item">
                                        <img src="{{ asset('assets/images/ecommerce/jpg/1.jpg') }}" alt="img"
                                            class="avatar avatar-sm br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-medium">
                                                    <a href="ecommerce-cart.html" class="text-dark">Smart Watch</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1 fw-medium">$1,299.00</span>
                                                </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Qty: 1</li>
                                                    <li>Status: <span class="text-success">In Stock</span></li>
                                                </ul>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ri-delete-bin-2-line"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-center cart-dropdown-item">
                                        <img src="{{ asset('assets/images/ecommerce/jpg/3.jpg') }}" alt="img"
                                            class="avatar avatar-sm br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-medium">
                                                    <a href="ecommerce-cart.html" class="text-dark">Flowers</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1 fw-medium">$179.29</span>
                                                </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item">
                                                    <li>Qty: 2</li>
                                                    <li><span class="badge bg-pink-transparent fs-10">Free
                                                            shipping</span></li>
                                                </ul>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ri-delete-bin-2-line"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-center cart-dropdown-item">
                                        <img src="{{ asset('assets/images/ecommerce/jpg/5.jpg') }}" alt="img"
                                            class="avatar avatar-sm br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-medium">
                                                    <a href="ecommerce-cart.html" class="text-dark">Running Shoes</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1 fw-medium">$29.00</span>
                                                </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Qty: 4</li>
                                                    <li>Status: <span class="text-danger">Out Stock</span></li>
                                                </ul>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ri-delete-bin-2-line"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-center cart-dropdown-item">
                                        <img src="{{ asset('assets/images/ecommerce/jpg/4.jpg') }}" alt="img"
                                            class="avatar avatar-sm br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-medium">
                                                    <a href="ecommerce-cart.html" class="text-dark">Furniture</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1 fw-medium">$4,999.00</span>
                                                </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Gray</li>
                                                    <li>50LB</li>
                                                </ul>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ri-delete-bin-2-line"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-center cart-dropdown-item">
                                        <img src="{{ asset('assets/images/ecommerce/jpg/6.jpg') }}" alt="img"
                                            class="avatar avatar-sm br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-medium">
                                                    <a href="ecommerce-cart.html" class="text-dark">Tourist Bag</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1 fw-medium">$129.00</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Qty: 1</li>
                                                    <li>Status: <span class="text-success">In Stock</span></li>
                                                </ul>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ri-delete-bin-2-line"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item border-top">
                                <div class="d-grid">
                                    <a href="ecommerce-checkout.html" class="btn btn-primary">Proceed to checkout</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                        <i class="ri-shopping-cart-2-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                                    <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy
                                        :)</span>
                                    <a href="ecommerce-products.html" class="btn btn-primary btn-wave btn-sm m-1"
                                        data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                            <i class="fe fe-bell header-link-icon"></i>
                            <span class="badge bg-secondary header-icon-badge pulse pulse-secondary"
                                id="notification-icon-badge">5</span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end"
                            data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                                    <span class="badge bg-secondary rounded-pill" id="notifiation-data">5
                                        Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md online bg-primary-transparent br-5"><img
                                                    alt="avatar"
                                                    src="{{ asset('assets/images/faces/5.jpg') }}"></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0"><a href="notifications-list.html"
                                                        class="text-dark">Congratulate <strong>Olivia James</strong>
                                                        for New template start</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">Oct
                                                    15 12:32pm</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md offline bg-secondary-transparent br-5"><img
                                                    alt="avatar"
                                                    src="{{ asset('assets/images/faces/2.jpg') }}"></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0"><a href="notifications-list.html"
                                                        class="text-dark"><strong>Joshua Gray</strong> New Message
                                                        Received</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">Oct
                                                    13 02:56am</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md online bg-pink-transparent br-5"><img
                                                    alt="avatar"
                                                    src="{{ asset('assets/images/faces/3.jpg') }}"></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0"><a href="notifications-list.html"
                                                        class="text-dark"><strong>Elizabeth Lewis</strong> added new
                                                        schedule realease</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">Oct
                                                    12 10:40pm</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md online bg-warning-transparent br-5"><img
                                                    alt="avatar"
                                                    src="{{ asset('assets/images/faces/5.jpg') }}"></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-normal"><a href="notifications-list.html"
                                                        class="text-dark">Delivered Successful to
                                                        <strong>Micky</strong> </a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">Order
                                                    <span class="text-warning">ID: #005428</span> had been
                                                    placed</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md offline bg-success-transparent br-5"><img
                                                    alt="avatar"
                                                    src="{{ asset('assets/images/faces/1.jpg') }}"></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-normal"><a href="notifications-list.html"
                                                        class="text-dark">You got 22 requests form
                                                        <strong>Facebook</strong></a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">Today
                                                    at 08:08pm</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="d-grid">
                                    <a href="notifications-list.html" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                        <i class="ri-notification-off-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-shortcuts-dropdown d-xl-flex d-none">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" id="notificationDropdown" aria-expanded="false">
                            <i class="fe fe-grid header-link-icon"></i>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end"
                            aria-labelledby="notificationDropdown">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Related Apps</p>
                                </div>
                            </div>
                            <div class="dropdown-divider mb-0"></div>
                            <div class="main-header-shortcuts p-2" id="header-shortcut-scroll">
                                <div class="row g-2">
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="text-dark">
                                            <div class="text-center p-3 related-app">
                                                <span class="avatar avatar-sm rounded-2 p-1 bg-primary-transparent">
                                                    <img src="{{ asset('assets/images/apps/figma.png') }}"
                                                        alt="">
                                                </span>
                                                <span class="d-block fs-12">Figma</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="text-dark">
                                            <div class="text-center p-3 related-app">
                                                <span class="avatar avatar-sm rounded-2 p-1 bg-primary-transparent">
                                                    <img src="{{ asset('assets/images/apps/microsoft-powerpoint.png') }}"
                                                        alt="">
                                                </span>
                                                <span class="d-block fs-12">Power Point</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="text-dark">
                                            <div class="text-center p-3 related-app">
                                                <span class="avatar avatar-sm rounded-2 p-1 bg-primary-transparent">
                                                    <img src="{{ asset('assets/images/apps/microsoft-word.png') }}"
                                                        alt="">
                                                </span>
                                                <span class="d-block fs-12">MS Word</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="text-dark">
                                            <div class="text-center p-3 related-app">
                                                <span class="avatar avatar-sm rounded-2 p-1 bg-primary-transparent">
                                                    <img src="{{ asset('assets/images/apps/calender.png') }}"
                                                        alt="">
                                                </span>
                                                <span class="d-block fs-12">Calendar</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="text-dark">
                                            <div class="text-center p-3 related-app">
                                                <span class="avatar avatar-sm rounded-2 p-1 bg-primary-transparent">
                                                    <img src="{{ asset('assets/images/apps/sketch.png') }}"
                                                        alt="">
                                                </span>
                                                <span class="d-block fs-12">Sketch</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="text-dark">
                                            <div class="text-center p-3 related-app">
                                                <span class="avatar avatar-sm rounded-2 p-1 bg-primary-transparent">
                                                    <img src="{{ asset('assets/images/apps/google-docs.png') }}"
                                                        alt="">
                                                </span>
                                                <span class="d-block fs-12">Docs</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="text-dark">
                                            <div class="text-center p-3 related-app">
                                                <span class="avatar avatar-sm rounded-2 p-1 bg-primary-transparent">
                                                    <img src="{{ asset('assets/images/apps/google.png') }}"
                                                        alt="">
                                                </span>
                                                <span class="d-block fs-12">Google</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="text-dark">
                                            <div class="text-center p-3 related-app">
                                                <span class="avatar avatar-sm rounded-2 p-1 bg-primary-transparent">
                                                    <img src="{{ asset('assets/images/apps/translate.png') }}"
                                                        alt="">
                                                </span>
                                                <span class="d-block fs-12">Translate</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="text-dark">
                                            <div class="text-center p-3 related-app">
                                                <span class="avatar avatar-sm rounded-2 p-1 bg-primary-transparent">
                                                    <img src="{{ asset('assets/images/apps/google-sheets.png') }}"
                                                        alt="">
                                                </span>
                                                <span class="d-block fs-12">Sheets</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <div class="d-grid">
                                    <a href="javascript:void(0);" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="header-link-icon">
                                    <img src="{{ asset('assets/images/faces/1.jpg') }}" alt="img"
                                        width="32" height="32" class="rounded-circle">
                                </div>
                                <div class="d-none">
                                    <p class="fw-semibold mb-0">Angelica</p>
                                    <span class="op-7 fw-normal d-block fs-11">Web Designer</span>
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                            aria-labelledby="mainHeaderProfile">
                            <Li>
                                <div class="header-navheading border-bottom">
                                    <h6 class="main-notification-title">Sonia Taylor</h6>
                                    <p class="main-notification-text mb-0">Web Designer</p>
                                </div>
                            </Li>
                            <li><a class="dropdown-item d-flex border-bottom" href="profile.html"><i
                                        class="fe fe-user fs-16 align-middle me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item d-flex border-bottom" href="mail-inbox.html"><i
                                        class="fe fe-inbox fs-16 align-middle me-2"></i>Inbox <span
                                        class="badge bg-success ms-auto">25</span></a></li>
                            <li><a class="dropdown-item d-flex border-bottom border-block-end"
                                    href="notifications-list.html"><i
                                        class="fe fe-compass fs-16 align-middle me-2"></i>Activity</a></li>
                            <li><a class="dropdown-item d-flex border-bottom" href="settings.html"><i
                                        class="fe fe-settings fs-16 align-middle me-2"></i>Settings</a></li>
                            <li><a class="dropdown-item d-flex border-bottom" href="chat.html"><i
                                        class="fe fe-headphones fs-16 align-middle me-2"></i>Support</a></li>
                            <li><a class="dropdown-item d-flex" href="signin.html"><i
                                        class="fe fe-power fs-16 align-middle me-2"></i>Log Out</a></li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element right-sidebar d-xl-flex d-none">
                        <a href="javascript:void(0);" class="header-link right-sidebar" data-bs-toggle="offcanvas"
                            data-bs-target="#right-sidebar-canvas">
                            <i class="fe fe-align-right header-icons header-link-icon"></i>
                        </a>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                            data-bs-target="#switcher-canvas">
                            <i class="fe fe-settings header-link-icon"></i>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.html" class="header-logo">
                    <img src="{{ asset('assets/images/brand-logos/desktop-white.png') }}" class="desktop-white"
                        alt="logo">
                    <img src="{{ asset('assets/images/brand-logos/toggle-white.png') }}" class="toggle-white"
                        alt="logo">
                    <img src="{{ asset('assets/images/brand-logos/desktop-logo.png') }}" class="desktop-logo"
                        alt="logo">
                    <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" class="toggle-dark"
                        alt="logo">
                    <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}" class="toggle-logo"
                        alt="logo">
                    <img src="{{ asset('assets/images/brand-logos/desktop-dark.png') }}" class="desktop-dark"
                        alt="logo">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Dashboard</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="index.html" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-home side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-wallet side-menu__icon"></i>
                                <span class="side-menu__label">Crypto Currencies</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Crypto Currencies</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-dashboard.html" class="side-menu__item">Dashboard</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-market.html" class="side-menu__item">Marketcap</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-currency-exchange.html" class="side-menu__item">Currency
                                        exchange</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-buy-sell.html" class="side-menu__item">Buy & Sell</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-wallet.html" class="side-menu__item">Wallet</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-transactions.html" class="side-menu__item">Transactions</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-shopping-cart-full side-menu__icon"></i>
                                <span class="side-menu__label">ECommerce</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">E-Commerce</a>
                                </li>
                                <li class="slide">
                                    <a href="ecommerce-dashboard.html" class="side-menu__item">Dashboard</a>
                                </li>
                                <li class="slide">
                                    <a href="ecommerce-products.html" class="side-menu__item">Products</a>
                                </li>
                                <li class="slide">
                                    <a href="ecommerce-product-details.html" class="side-menu__item">Product
                                        Details</a>
                                </li>
                                <li class="slide">
                                    <a href="ecommerce-cart.html" class="side-menu__item">Cart</a>
                                </li>
                                <li class="slide">
                                    <a href="ecommerce-wishlist.html" class="side-menu__item">Wishlist</a>
                                </li>
                                <li class="slide">
                                    <a href="ecommerce-checkout.html" class="side-menu__item">Checkout</a>
                                </li>
                                <li class="slide">
                                    <a href="ecommerce-orders.html" class="side-menu__item">Orders</a>
                                </li>
                                <li class="slide">
                                    <a href="ecommerce-add-product.html" class="side-menu__item">Add Product</a>
                                </li>
                                <li class="slide">
                                    <a href="ecommerce-account.html" class="side-menu__item">Account</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Landing</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="landing.html" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-layout side-menu__icon"></i>
                                <span class="side-menu__label">Landing Page</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Applications</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-write side-menu__icon"></i>
                                <span class="side-menu__label">Apps</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Apps</a>
                                </li>
                                <li class="slide">
                                    <a href="widgets.html" class="side-menu__item">Widgets</a>
                                </li>
                                <li class="slide">
                                    <a href="sweet_alerts.html" class="side-menu__item">Sweet Alerts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Mail<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="mail-inbox.html" class="side-menu__item">Mail-Inbox</a>
                                        </li>
                                        <li class="slide">
                                            <a href="viewmail.html" class="side-menu__item">View-Mail</a>
                                        </li>
                                        <li class="slide">
                                            <a href="mail-compose.html" class="side-menu__item">Mail-Compose</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Maps<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                                        </li>
                                        <li class="slide">
                                            <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                                        </li>
                                        <li class="slide">
                                            <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Tables<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="tables.html" class="side-menu__item">Tables</a>
                                        </li>
                                        <li class="slide">
                                            <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                                        </li>
                                        <li class="slide">
                                            <a href="data-tables.html" class="side-menu__item">Data Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Blog<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="blog.html" class="side-menu__item">Blog Page</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-post.html" class="side-menu__item">Blog Post</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">File Manager<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="file-manager.html" class="side-menu__item">File Manager</a>
                                        </li>
                                        <li class="slide">
                                            <a href="file-manager-list.html" class="side-menu__item">File Manager
                                                List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="file-details.html" class="side-menu__item">File Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="icons.html" class="side-menu__item">Icons</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Components</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-package side-menu__icon"></i>
                                <span class="side-menu__label">Elements</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1 mega-menu">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Elements</a>
                                </li>
                                <li class="slide">
                                    <a href="accordions_collpase.html" class="side-menu__item">Accordions &
                                        Collapse</a>
                                </li>
                                <li class="slide">
                                    <a href="alerts.html" class="side-menu__item">Alerts</a>
                                </li>
                                <li class="slide">
                                    <a href="avatars.html" class="side-menu__item">Avatars</a>
                                </li>
                                <li class="slide">
                                    <a href="breadcrumb.html" class="side-menu__item">Breadcrumbs</a>
                                </li>
                                <li class="slide">
                                    <a href="buttons.html" class="side-menu__item">Buttons</a>
                                </li>
                                <li class="slide">
                                    <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                                </li>
                                <li class="slide">
                                    <a href="badge.html" class="side-menu__item">Badge</a>
                                </li>
                                <li class="slide">
                                    <a href="dropdowns.html" class="side-menu__item">Dropdowns</a>
                                </li>
                                <li class="slide">
                                    <a href="images_figures.html" class="side-menu__item">Images & Figures</a>
                                </li>
                                <li class="slide">
                                    <a href="listgroup.html" class="side-menu__item">List Group</a>
                                </li>
                                <li class="slide">
                                    <a href="navs_tabs.html" class="side-menu__item">Navs & Tabs</a>
                                </li>
                                <li class="slide">
                                    <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                                </li>
                                <li class="slide">
                                    <a href="pagination.html" class="side-menu__item">Pagination</a>
                                </li>
                                <li class="slide">
                                    <a href="popovers.html" class="side-menu__item">Popovers</a>
                                </li>
                                <li class="slide">
                                    <a href="progress.html" class="side-menu__item">Progress</a>
                                </li>
                                <li class="slide">
                                    <a href="spinners.html" class="side-menu__item">Spinners</a>
                                </li>
                                <li class="slide">
                                    <a href="typography.html" class="side-menu__item">Typography</a>
                                </li>
                                <li class="slide">
                                    <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                                </li>
                                <li class="slide">
                                    <a href="toasts.html" class="side-menu__item">Toasts</a>
                                </li>
                                <li class="slide">
                                    <a href="tags.html" class="side-menu__item">Tags</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-briefcase side-menu__icon"></i>
                                <span class="side-menu__label">Advanced UI</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Advanced UI</a>
                                </li>
                                <li class="slide">
                                    <a href="carousel.html" class="side-menu__item">Carousel</a>
                                </li>
                                <li class="slide">
                                    <a href="full-calendar.html" class="side-menu__item">Full Calendar</a>
                                </li>
                                <li class="slide">
                                    <a href="draggable-cards.html" class="side-menu__item">Draggable Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="chat.html" class="side-menu__item">Chat</a>
                                </li>
                                <li class="slide">
                                    <a href="contacts.html" class="side-menu__item">Contacts</a>
                                </li>
                                <li class="slide">
                                    <a href="cards.html" class="side-menu__item">Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="timeline.html" class="side-menu__item">Timeline</a>
                                </li>
                                <li class="slide">
                                    <a href="search.html" class="side-menu__item">Search</a>
                                </li>
                                <li class="slide">
                                    <a href="userlist.html" class="side-menu__item">Userlist</a>
                                </li>
                                <li class="slide">
                                    <a href="notification.html" class="side-menu__item">Notification</a>
                                </li>
                                <li class="slide">
                                    <a href="treeview.html" class="side-menu__item">Tree-view</a>
                                </li>
                                <li class="slide">
                                    <a href="modals_closes.html" class="side-menu__item">Modals & Closes</a>
                                </li>
                                <li class="slide">
                                    <a href="navbar.html" class="side-menu__item">Navbar</a>
                                </li>
                                <li class="slide">
                                    <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                                </li>
                                <li class="slide">
                                    <a href="placeholders.html" class="side-menu__item">Placeholders</a>
                                </li>
                                <li class="slide">
                                    <a href="ratings.html" class="side-menu__item">ratings</a>
                                </li>
                                <li class="slide">
                                    <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Other Pages</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-palette side-menu__icon"></i>
                                <span class="side-menu__label">Pages</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Pages</a>
                                </li>
                                <li class="slide">
                                    <a href="profile.html" class="side-menu__item">Profile</a>
                                </li>
                                <li class="slide">
                                    <a href="aboutus.html" class="side-menu__item">About Us</a>
                                </li>
                                <li class="slide">
                                    <a href="settings.html" class="side-menu__item">Settings</a>
                                </li>
                                <li class="slide">
                                    <a href="invoice.html" class="side-menu__item">Invoice</a>
                                </li>
                                <li class="slide">
                                    <a href="pricing.html" class="side-menu__item">Pricing</a>
                                </li>
                                <li class="slide">
                                    <a href="gallery.html" class="side-menu__item">Gallery</a>
                                </li>
                                <li class="slide">
                                    <a href="notifications-list.html" class="side-menu__item">Notifications List</a>
                                </li>
                                <li class="slide">
                                    <a href="faq.html" class="side-menu__item">Faqs</a>
                                </li>
                                <li class="slide">
                                    <a href="success-message.html" class="side-menu__item">Success Message</a>
                                </li>
                                <li class="slide">
                                    <a href="danger-message.html" class="side-menu__item">Danger Message</a>
                                </li>
                                <li class="slide">
                                    <a href="warning-message.html" class="side-menu__item">Warning Message</a>
                                </li>
                                <li class="slide">
                                    <a href="empty.html" class="side-menu__item">Empty Page</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-shield side-menu__icon"></i>
                                <span class="side-menu__label">Utilities</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Utilities</a>
                                </li>
                                <li class="slide">
                                    <a href="breakpoints.html" class="side-menu__item">Breakpoints</a>
                                </li>
                                <li class="slide">
                                    <a href="display.html" class="side-menu__item">Display</a>
                                </li>
                                <li class="slide">
                                    <a href="borders.html" class="side-menu__item">Borders</a>
                                </li>
                                <li class="slide">
                                    <a href="colors.html" class="side-menu__item">Colors</a>
                                </li>
                                <li class="slide">
                                    <a href="flex.html" class="side-menu__item">Flex</a>
                                </li>
                                <li class="slide">
                                    <a href="columns.html" class="side-menu__item">Columns</a>
                                </li>
                                <li class="slide">
                                    <a href="gutters.html" class="side-menu__item">Gutters</a>
                                </li>
                                <li class="slide">
                                    <a href="helpers.html" class="side-menu__item">Helpers</a>
                                </li>
                                <li class="slide">
                                    <a href="position.html" class="side-menu__item">Position</a>
                                </li>
                                <li class="slide">
                                    <a href="more.html" class="side-menu__item">More</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-menu side-menu__icon"></i>
                                <span class="side-menu__label">Submenu</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Submenu</a>
                                </li>
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Submenu-01</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Submenu-02
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Level-01</a>
                                        </li>
                                        <li class="slide has-sub">
                                            <a href="javascript:void(0);" class="side-menu__item">Level-02
                                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                            <ul class="slide-menu child3">
                                                <li class="slide">
                                                    <a href="javascript:void(0);"
                                                        class="side-menu__item">Level-11</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="javascript:void(0);"
                                                        class="side-menu__item">Level-12</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-lock side-menu__icon"></i>
                                <span class="side-menu__label">Authentication</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Authentication</a>
                                </li>
                                <li class="slide">
                                    <a href="signin.html" class="side-menu__item">Sign In</a>
                                </li>
                                <li class="slide">
                                    <a href="signup.html" class="side-menu__item">Sign Up</a>
                                </li>
                                <li class="slide">
                                    <a href="forgot.html" class="side-menu__item">Forgot Password</a>
                                </li>
                                <li class="slide">
                                    <a href="reset.html" class="side-menu__item">Reset Password</a>
                                </li>
                                <li class="slide">
                                    <a href="lockscreen.html" class="side-menu__item">Lockscreen</a>
                                </li>
                                <li class="slide">
                                    <a href="underconstruction.html" class="side-menu__item">UnderConstruction</a>
                                </li>
                                <li class="slide">
                                    <a href="404.html" class="side-menu__item">404 Error</a>
                                </li>
                                <li class="slide">
                                    <a href="500.html" class="side-menu__item">500 Error</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Forms &amp; Charts</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-receipt side-menu__icon"></i>
                                <span class="side-menu__label">Forms</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Forms</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="form_inputs.html" class="side-menu__item">Inputs</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_check_radios.html" class="side-menu__item">Checks &
                                                Radios</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_input_group.html" class="side-menu__item">Input Group</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_select.html" class="side-menu__item">Form Select</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_range.html" class="side-menu__item">Range Slider</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_input_masks.html" class="side-menu__item">Input Masks</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_file_uploads.html" class="side-menu__item">File
                                                Uploads</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_dateTime_pickers.html" class="side-menu__item">Date,Time
                                                Picker</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_color_pickers.html" class="side-menu__item">Color
                                                Picker</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="floating_labels.html" class="side-menu__item">Floating Labels</a>
                                </li>
                                <li class="slide">
                                    <a href="form_layout.html" class="side-menu__item">Form Layouts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Editor<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="quill_editor.html" class="side-menu__item">Quill Editor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="form_validation.html" class="side-menu__item">Validation</a>
                                </li>
                                <li class="slide">
                                    <a href="form_select2.html" class="side-menu__item">Select2</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-bar-chart-alt side-menu__icon"></i>
                                <span class="side-menu__label">Charts</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>

                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="chartjs-charts.html" class="side-menu__item">ChartJS</a>
                                </li>
                                <li class="slide">
                                    <a href="echarts.html" class="side-menu__item">Echart</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Apex Charts<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="apex-line-charts.html" class="side-menu__item">Line Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-area-charts.html" class="side-menu__item">Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-column-charts.html" class="side-menu__item">Column
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bar-charts.html" class="side-menu__item">Bar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-mixed-charts.html" class="side-menu__item">Mixed
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-timeline-charts.html" class="side-menu__item">Timeline
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-candlestick-charts.html"
                                                class="side-menu__item">CandleStick Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bubble-charts.html" class="side-menu__item">Bubble
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-scatter-charts.html" class="side-menu__item">Scatter
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-treemap-charts.html" class="side-menu__item">Treemap
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radar-charts.html" class="side-menu__item">Radar
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-polararea-charts.html" class="side-menu__item">Polararea
                                                Charts</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                            fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Start::page-header -->

                {{-- <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                    <div>
                        <h2 class="main-content-title fs-24 mb-1">Welcome To Dashboard</h2>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project Dashboard</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">
                            <button type="button"
                                class="btn btn-white btn-icon-text my-2 me-2 d-inline-flex align-items-center">
                                <i class="fe fe-download me-2 fs-14"></i> Import
                            </button>
                            <button type="button"
                                class="btn btn-white btn-icon-text my-2 me-2 d-inline-flex align-items-center">
                                <i class="fe fe-filter me-2 fs-14"></i> Filter
                            </button>
                            <button type="button"
                                class="btn btn-primary my-2 btn-icon-text d-inline-flex align-items-center">
                                <i class="fe fe-download-cloud me-2 fs-14"></i> Download Report
                            </button>
                        </div>
                    </div>
                </div> --}}

                <!-- End::page-header -->

                <!-- Start::row-1 -->
                {{-- <div class="row row-sm">
                    <div class="col-sm-12 col-lg-12 col-xl-8">
                        <!-- Start::row -->
                        <div class="row row-sm banner-img">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="card bg-primary custom-card card-box">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="offset-xl-3 offset-sm-6 col-xl-8 col-sm-6 col-12 img-bg ">
                                                <h4 class="d-flex mb-3">
                                                    <span class="fw-bold text-fixed-white ">Sonia Taylor!</span>
                                                </h4>
                                                <p class="tx-white-7 mb-1">You have two projects to finish, you had
                                                    completed <b class="text-warning">57%</b> from your montly
                                                    level,
                                                    Keep going to your level
                                            </div>
                                            <img src="{{ asset('assets/images/pngs/29.png') }}" alt="user-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End::row -->

                        <!-- Start::row -->
                        <div class="row row-sm">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg"
                                                    enable-background="new 0 0 24 24" height="24"
                                                    viewBox="0 0 24 24" width="24">
                                                    <g>
                                                        <rect height="14" opacity=".3" width="14" x="5"
                                                            y="5" />
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                            <g>
                                                                <path
                                                                    d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z" />
                                                                <rect height="5" width="2" x="7" y="12" />
                                                                <rect height="10" width="2" x="15" y="7" />
                                                                <rect height="3" width="2" x="11" y="14" />
                                                                <rect height="2" width="2" x="11" y="10" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="card-item-title mb-2">
                                                <label class="main-content-label fs-13 fw-bold mb-1">Total
                                                    Revenue</label>
                                                <span class="d-block fs-12 mb-0 text-muted">Previous month vs this
                                                    months</span>
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-stat">
                                                    <h4 class="fw-bold">$5,900.00</h4>
                                                    <small><b class="text-success">55%</b> higher</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24"
                                                    viewBox="0 0 24 24" width="24">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path
                                                        d="M12 4c-4.41 0-8 3.59-8 8 0 1.82.62 3.49 1.64 4.83 1.43-1.74 4.9-2.33 6.36-2.33s4.93.59 6.36 2.33C19.38 15.49 20 13.82 20 12c0-4.41-3.59-8-8-8zm0 9c-1.94 0-3.5-1.56-3.5-3.5S10.06 6 12 6s3.5 1.56 3.5 3.5S13.94 13 12 13z"
                                                        opacity=".3" />
                                                    <path
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z" />
                                                </svg>
                                            </div>
                                            <div class="card-item-title mb-2">
                                                <label class="main-content-label fs-13 fw-bold mb-1">New
                                                    Employees</label>
                                                <span class="d-block fs-12 mb-0 text-muted">Employees joined this
                                                    month</span>
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-stat">
                                                    <h4 class="fw-bold">15</h4>
                                                    <small><b class="text-success">5%</b> Increased</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg"
                                                    height="24" viewBox="0 0 24 24" width="24">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path
                                                        d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1.23 13.33V19H10.9v-1.69c-1.5-.31-2.77-1.28-2.86-2.97h1.71c.09.92.72 1.64 2.32 1.64 1.71 0 2.1-.86 2.1-1.39 0-.73-.39-1.41-2.34-1.87-2.17-.53-3.66-1.42-3.66-3.21 0-1.51 1.22-2.48 2.72-2.81V5h2.34v1.71c1.63.39 2.44 1.63 2.49 2.97h-1.71c-.04-.97-.56-1.64-1.94-1.64-1.31 0-2.1.59-2.1 1.43 0 .73.57 1.22 2.34 1.67 1.77.46 3.66 1.22 3.66 3.42-.01 1.6-1.21 2.48-2.74 2.77z"
                                                        opacity=".3" />
                                                    <path
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z" />
                                                </svg>
                                            </div>
                                            <div class="card-item-title  mb-2">
                                                <label class="main-content-label fs-13 fw-bold mb-1">Total
                                                    Expenses</label>
                                                <span class="d-block fs-12 mb-0 text-muted">Previous month vs this
                                                    months</span>
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-stat">
                                                    <h4 class="fw-bold">$8,500</h4>
                                                    <small><b class="text-danger">12%</b> decrease</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End::row -->

                        <!-- Start::row -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header border-bottom-0">
                                        <div>
                                            <label class="card-title">Project Budget</label> <span
                                                class="d-block fs-12 mb-0 text-muted">The Project Budget is a tool
                                                used by project managers to estimate the total cost of a
                                                project</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="project"></div>
                                    </div>
                                </div>
                            </div><!-- col end -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header d-block border-bottom-0 pb-0">
                                        <div>
                                            <div class="d-md-flex">
                                                <label class="main-content-label my-auto pt-2">Today tasks</label>
                                                <div class="ms-auto mt-3 d-flex">
                                                    <div class="me-3 d-flex text-muted fs-13"><span
                                                            class="legend bg-primary rounded-circle"></span>Project
                                                    </div>
                                                    <div class="d-flex text-muted fs-13"><span
                                                            class="legend bg-light rounded-circle"></span>Inprogress
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="d-block fs-12 mt-2 mb-0 text-muted"> UX UI & Backend
                                                Developement. </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6 my-auto">
                                                <h6 class="mb-3 fs-14 fw-normal">Project-Budget</h6>
                                                <div class="text-start">
                                                    <h3 class="fw-bold me-3 mb-2 text-primary">$5,240</h3>
                                                    <p class="fs-13 my-auto text-muted">May 28 - June 01 (2018)</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 my-auto">
                                                <div id="todaytask"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col end -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header  border-bottom-0 pb-0">
                                        <div>
                                            <div class="d-flex">
                                                <label class="main-content-label my-auto pt-2">Top Inquiries</label>
                                            </div>
                                            <span class="d-block fs-12 mt-2 mb-0 text-muted"> project work involves
                                                a group of students investigating . </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mt-1">
                                            <div class="col-5">
                                                <span class="">Brand identity</span>
                                            </div>
                                            <div class="col-3 my-auto">
                                                <div class="progress ht-6 my-auto progress-animate">
                                                    <div class="progress-bar ht-6 wd-80p" role="progressbar"
                                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex">
                                                    <span class="fs-13"><i
                                                            class="text-success fe fe-arrow-up"></i><b>24.75%</b></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-5">
                                                <span class="">UI & UX design</span>
                                            </div>
                                            <div class="col-3 my-auto">
                                                <div class="progress ht-6 my-auto progress-animate">
                                                    <div class="progress-bar ht-6 wd-70p" role="progressbar"
                                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex">
                                                    <span class="fs-13"><i
                                                            class="text-danger fe fe-arrow-down"></i><b>12.34%</b></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-5">
                                                <span class="">Product design</span>
                                            </div>
                                            <div class="col-3 my-auto">
                                                <div class="progress ht-6 my-auto progress-animate">
                                                    <div class="progress-bar ht-6 wd-40p" role="progressbar"
                                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex">
                                                    <span class="fs-13"><i
                                                            class="text-success  fe fe-arrow-up"></i><b>12.75%</b></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col end -->
                            <div class="col-lg-12">
                                <div class="card custom-card mg-b-20 tasks">
                                    <div class="card-body">
                                        <div class="card-header border-bottom-0 pt-0 ps-0 pe-0 pb-2 d-flex">
                                            <div>
                                                <div class="card-title">Tasks</div>
                                                <p class="mb-0 fs-12 mb-3 text-muted">A task is accomplished by
                                                    a set deadline, and must contribute toward work-related
                                                    objectives.</p>
                                            </div>
                                            <div class="ms-auto d-flex flex-wrap gap-2">
                                                <div class="contact-search3 me-3 ">
                                                    <button type="button" class="btn border-0"><i
                                                            class="fe fe-search fw-semibold text-muted"
                                                            aria-hidden="true"></i></button>
                                                    <input type="text" class="form-control h-6" id="typehead1"
                                                        placeholder="Search here..." autocomplete="off">
                                                </div>
                                                <div class="ms-auto d-flex dropdown">
                                                    <a href="javascript:void(0);"
                                                        class="btn dropdown-toggle btn-sm btn-wave waves-effect waves-light btn-primary d-inline-flex align-items-center"
                                                        id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                        aria-expanded="false"><i
                                                            class="ri-equalizer-line me-1"></i>Sort by</a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item"
                                                                href="javascript:void(0);">Task</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="javascript:void(0);">Team</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="javascript:void(0);">Status</a></li>
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="fa fa-cog me-2"></i>Settings</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive tasks">
                                            <table class="table card-table table-vcenter text-nowrap mb-0 border">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-lg-10p">Task</th>
                                                        <th class="wd-lg-20p text-center">Team</th>
                                                        <th class="wd-lg-20p text-center">Open task</th>
                                                        <th class="wd-lg-20p">Priority</th>
                                                        <th class="wd-lg-20p">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-medium">
                                                            <div class="form-check">
                                                                <input checked="" type="checkbox"
                                                                    class="form-check-input me-4 rounded">
                                                                <label class="form-check-label">Evaluating the
                                                                    design</label>
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <div class="avatar-list-stacked my-auto float-end">
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/1.jpg') }}">
                                                                </div>
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/2.jpg') }}">
                                                                </div>
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/3.jpg') }}">
                                                                </div>
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/4.jpg') }}">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">18<i class=""></i></td>
                                                        <td class="text-primary">High</td>
                                                        <td><span
                                                                class="badge bg-pill rounded-pill bg-primary-transparent">Completed</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-medium">
                                                            <div class="form-check">
                                                                <input type="checkbox"
                                                                    class="form-check-input me-4 rounded">
                                                                <label class="form-check-label">Generate ideas for
                                                                    design</label>
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <div class="avatar-list-stacked my-auto float-end">
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/5.jpg') }}">
                                                                </div>
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/6.jpg') }}">
                                                                </div>
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/7.jpg') }}">
                                                                </div>
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/8.jpg') }}">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">34<i class=""></i></td>
                                                        <td class="text-secondary">Normal</td>
                                                        <td><span
                                                                class="badge bg-pill rounded-pill bg-warning-transparent">Pending</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-medium">
                                                            <div class="form-check">
                                                                <input type="checkbox"
                                                                    class="form-check-input me-4 rounded" checked>
                                                                <label class="form-check-label">Define the
                                                                    problem</label>
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <div class="avatar-list-stacked my-auto float-end">
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/11.jpg') }}">
                                                                </div>
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/12.jpg') }}">
                                                                </div>
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/9.jpg') }}">
                                                                </div>
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/10.jpg') }}">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">25<i class=""></i></td>
                                                        <td class="text-warning">Low</td>
                                                        <td><span
                                                                class="badge bg-pill rounded-pill bg-primary-transparent">Completed</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-medium">
                                                            <div class="form-check">
                                                                <input type="checkbox"
                                                                    class="form-check-input me-4 rounded">
                                                                <label class="form-check-label">Empathize with
                                                                    users</label>
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <div class="avatar-list-stacked my-auto float-end">
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/7.jpg') }}">
                                                                </div>
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/9.jpg') }}">
                                                                </div>
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/11.jpg') }}">
                                                                </div>
                                                                <div class="avatar avatar-rounded avatar-sm">
                                                                    <img alt="avatar" class="rounded-circle"
                                                                        src="{{ asset('assets/images/faces/12.jpg') }}">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">37<i class=""></i></td>
                                                        <td class="text-primary">High</td>
                                                        <td><span
                                                                class="badge bg-pill rounded-pill bg-danger-transparent">Rejected</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="float-end mt-3">
                                            <nav aria-label="Page navigation" class="pagination-style-3">
                                                <ul class="pagination mb-0 flex-wrap">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="javascript:void(0);">
                                                            Prev
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link"
                                                            href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="javascript:void(0);">2</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0);">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="javascript:void(0);">16</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link text-primary"
                                                            href="javascript:void(0);">
                                                            next
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- col end -->
                        </div>
                        <!-- End::row -->

                    </div><!-- col end -->

                    <div class="col-sm-12 col-lg-12 col-xl-4 banner-img">
                        <div class="card custom-card card-dashboard-calendar">
                            <label class="main-content-label mb-2 pt-1">Recent transactions</label>
                            <span class="d-block fs-12 mb-2 text-muted">Projects where development work is on
                                completion</span>
                            <table class="table m-b-0 transcations mt-2">
                                <tbody>
                                    <tr>
                                        <td class="wd-5p">
                                            <div class="main-img-user avatar-md">
                                                <img alt="avatar" class="rounded-circle me-3"
                                                    src="{{ asset('assets/images/faces/5.jpg') }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-middle ms-3">
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1">Flicker</h6>
                                                    <p class="mb-0 fs-13 text-muted">App improvement</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-inline-block">
                                                <h6 class="mb-2 fs-15 fw-semibold">$45.234<i
                                                        class="fas fa-level-up-alt ms-2 text-success m-l-10"></i>
                                                </h6>
                                                <p class="mb-0 tx-11 text-muted">12 Jan 2020</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="wd-5p">
                                            <div class="main-img-user avatar-md">
                                                <img alt="avatar" class="rounded-circle me-3"
                                                    src="{{ asset('assets/images/faces/6.jpg') }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-middle ms-3">
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1">Intoxica</h6>
                                                    <p class="mb-0 fs-13 text-muted">Milestone</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-inline-block">
                                                <h6 class="mb-2 fs-15 fw-semibold">$23.452<i
                                                        class="fas fa-level-down-alt ms-2 text-danger m-l-10"></i>
                                                </h6>
                                                <p class="mb-0 tx-11 text-muted">23 Jan 2020</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="wd-5p">
                                            <div class="main-img-user avatar-md">
                                                <img alt="avatar" class="rounded-circle me-3"
                                                    src="{{ asset('assets/images/faces/7.jpg') }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-middle ms-3">
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1">Digiwatt</h6>
                                                    <p class="mb-0 fs-13 text-muted">Sales executive</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-inline-block">
                                                <h6 class="mb-2 fs-15 fw-semibold">$78.001<i
                                                        class="fas fa-level-down-alt ms-2 text-danger m-l-10"></i>
                                                </h6>
                                                <p class="mb-0 tx-11 text-muted">4 Apr 2020</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="wd-5p">
                                            <div class="main-img-user avatar-md">
                                                <img alt="avatar" class="rounded-circle me-3"
                                                    src="{{ asset('assets/images/faces/8.jpg') }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-middle ms-3">
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1">Flicker</h6>
                                                    <p class="mb-0 fs-13 text-muted">Milestone2</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-inline-block">
                                                <h6 class="mb-2 fs-15 fw-semibold">$37.285<i
                                                        class="fas fa-level-up-alt ms-2 text-success m-l-10"></i>
                                                </h6>
                                                <p class="mb-0 tx-11 text-muted">4 Apr 2020</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="wd-5p pb-0">
                                            <div class="main-img-user avatar-md">
                                                <img alt="avatar" class="rounded-circle me-3"
                                                    src="{{ asset('assets/images/faces/4.jpg') }}">
                                            </div>
                                        </td>
                                        <td class="pb-0">
                                            <div class="d-flex align-middle ms-3">
                                                <div class="d-inline-block">
                                                    <h6 class="mb-1">Flicker</h6>
                                                    <p class="mb-0 fs-13 text-muted">App improvement</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pb-0">
                                            <div class="d-inline-block">
                                                <h6 class="mb-2 fs-15 fw-semibold">$25.341<i
                                                        class="fas fa-level-down-alt ms-2 text-danger m-l-10"></i>
                                                </h6>
                                                <p class="mb-0 tx-11 text-muted">4 Apr 2020</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-item-title">
                                            <label class="main-content-label fs-13 fw-bold mb-2">Project
                                                Launch</label>
                                            <span class="d-block fs-12 mb-0 text-muted">the project is going to
                                                launch</span>
                                        </div>
                                        <p class="mb-0 fs-24 mt-2"><b class="text-primary">145 days</b></p>
                                        <a href="javascript:void(0)" class="text-muted">12 Monday, Oct 2020 </a>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('assets/images/pngs/28.png') }}" alt="image"
                                            class="best-emp">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-header d-flex">
                                <div>
                                    <label class="main-content-label mb-2 pt-2">On going projects</label>
                                    <span class="d-block fs-12 mb-2 text-muted">Projects where development work is
                                        on completion</span>
                                </div>
                            </div>
                            <div class="card-body pt-2 mt-0">
                                <div class="list-card">
                                    <div class="d-flex">
                                        <div class="avatar-list-stacked d-flex align-items-center">
                                            <div class="avatar avatar-rounded avatar-xs">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/images/faces/1.jpg') }}">
                                            </div>
                                            <div class="avatar avatar-rounded avatar-xs">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/images/faces/2.jpg') }}">
                                            </div>
                                            <div class="avatar avatar-rounded avatar-xs">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/images/faces/3.jpg') }}">
                                            </div>
                                            <div class="avatar avatar-rounded avatar-xs">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/images/faces/4.jpg') }}">
                                            </div>
                                            <div class="ms-3">Design team</div>
                                        </div>
                                        <div class="ms-auto float-end">
                                            <div class="">
                                                <a href="javascript:void(0)" class="option-dots"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class="fe fe-more-horizontal"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0)">Today</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Last Week</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Last
                                                        Month</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Last Year</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item mt-2">
                                        <div class="card-item-body">
                                            <div class="card-item-stat">
                                                <small class="fs-10 text-primary fw-semibold">25 August
                                                    2020</small>
                                                <h6 class=" mt-2">Mobile app design</h6>
                                            </div>
                                            <div id="ongoingprojects"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-card mb-0">
                                    <div class="d-flex">
                                        <div class="avatar-list-stacked d-flex align-items-center">
                                            <div class="avatar avatar-rounded avatar-xs">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/images/faces/5.jpg') }}">
                                            </div>
                                            <div class="avatar avatar-rounded avatar-xs">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/images/faces/6.jpg') }}">
                                            </div>
                                            <div class="avatar avatar-rounded avatar-xs">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/images/faces/7.jpg') }}">
                                            </div>
                                            <div class="avatar avatar-rounded avatar-xs">
                                                <img alt="avatar" class="rounded-circle"
                                                    src="{{ asset('assets/images/faces/8.jpg') }}">
                                            </div>
                                            <div class="ms-3">Design team</div>
                                        </div>
                                        <div class="ms-auto float-end">
                                            <div class="">
                                                <a href="javascript:void(0)" class="option-dots"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class="fe fe-more-horizontal"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0)">Today</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Last Week</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Last
                                                        Month</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Last Year</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item mt-2">
                                        <div class="card-item-body">
                                            <div class="card-item-stat">
                                                <small class="fs-10 text-primary fw-semibold">12 JUNE
                                                    2020</small>
                                                <h6 class=" mt-2">Website Redesign</h6>
                                            </div>
                                            <div id="ongoingprojects2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <label class="main-content-label my-auto">Website Design</label>
                                    <div class="ms-auto  d-flex">
                                        <div class="me-3 d-flex text-muted fs-13">Running</div>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <span class="fs-15 text-muted">Task completed : 7/10</span>
                                    </div>
                                    <div id="websitedesign"></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mt-4">
                                            <div class="d-flex mb-2">
                                                <h5 class="fs-15 my-auto text-muted fw-normal">Client :
                                                </h5>
                                                <h5 class="fs-15 my-auto ms-3">John Deo</h5>
                                            </div>
                                            <div class="d-flex mb-0">
                                                <h5 class="fs-13 my-auto text-muted fw-normal">Deadline :
                                                </h5>
                                                <h5 class="fs-13 my-auto text-muted ms-2">25 Dec 2020</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-auto">
                                        <div class="mt-3">
                                            <div class="">
                                                <img alt="" class="ht-50"
                                                    src="{{ asset('assets/images/pngs/21.png') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- col end -->
                </div> --}}
                <!-- End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <span class="input-group">
                            <input type="search" class="form-control px-2 " placeholder="Search..."
                                aria-label="Username">
                            <a href="javascript:void(0);" class="input-group-text bg-primary text-white"
                                id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                        </span>
                        <div class="mt-3">
                            <div class="">
                                <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                                <div class="ps-2">
                                    <a href="javascript:void(0)" class="search-tags"><i
                                            class="fe fe-search me-2"></i>People<span></span></a>
                                    <a href="javascript:void(0)" class="search-tags"><i
                                            class="fe fe-search me-2"></i>Pages<span></span></a>
                                    <a href="javascript:void(0)" class="search-tags"><i
                                            class="fe fe-search me-2"></i>Articles<span></span></a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-semibold text-muted mb-2 fs-13">Apps and pages</p>
                                <ul class="ps-2">
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                        <a href="full-calendar.html"><span><i
                                                    class='bx bx-calendar me-2 fs-14 bg-primary-transparent p-2 rounded-circle '></i>Calendar</span></a>
                                    </li>
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                        <a href="mail.html"><span><i
                                                    class='bx bx-envelope me-2 fs-14 bg-primary-transparent p-2 rounded-circle'></i>Mail</span></a>
                                    </li>
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                        <a href="buttons.html"><span><i
                                                    class='bx bx-dice-1 me-2 fs-14 bg-primary-transparent p-2 rounded-circle '></i>Buttons</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                                <ul class="ps-2">
                                    <li class="p-1 align-items-center  mb-1 search-app">
                                        <a href="javascript:void(0)"
                                            class="text-primary"><u>http://spruko/html/spruko.com</u></a>
                                    </li>
                                    <li class="p-1 align-items-center mb-1 search-app">
                                        <a href="javascript:void(0)"
                                            class="text-primary"><u>http://spruko/demo/spruko.com</u></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-block">
                        <div class="text-center">
                            <a href="javascript:void(0)" class="text-primary text-decoration-underline fs-15">View
                                all results</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted"> Copyright © <span id="year"></span> <a href="javascript:void(0);"
                        class="text-dark fw-semibold">Spruha</a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by <a
                        href="javascript:void(0);">
                        <span class="fw-semibold text-primary text-decoration-underline">Spruko</span>
                    </a> All
                    rights
                    reserved
                </span>
            </div>
        </footer>
        <!-- Footer End -->
        <!-- Start Right-Sidebar -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="right-sidebar-canvas"
            aria-labelledby="offcanvasRightLabel1">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title text-default" id="offcanvasRightLabel1">Todo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 sidebar-right">
                <div class="d-flex p-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm1"
                            checked="">
                        <label class="form-check-label" for="checkebox-sm1"> Hangout With friends </label>
                    </div>
                    <span class="ms-auto">
                        <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm2">
                        <label class="form-check-label" for="checkebox-sm2"> Prepare for presentation </label>
                    </div>
                    <span class="ms-auto">
                        <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm3">
                        <label class="form-check-label" for="checkebox-sm3"> Prepare for presentation </label>
                    </div>
                    <span class="ms-auto">
                        <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm4"
                            checked="">
                        <label class="form-check-label" for="checkebox-sm4"> System Updated </label>
                    </div>
                    <span class="ms-auto">
                        <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm5">
                        <label class="form-check-label" for="checkebox-sm5"> Do something more </label>
                    </div>
                    <span class="ms-auto">
                        <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm6">
                        <label class="form-check-label" for="checkebox-sm6"> System Updated </label>
                    </div>
                    <span class="ms-auto">
                        <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm7"
                            checked="">
                        <label class="form-check-label" for="checkebox-sm7"> Find an Idea </label>
                    </div>
                    <span class="ms-auto">
                        <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top mb-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm8"
                            checked="">
                        <label class="form-check-label" for="checkebox-sm8"> Project review </label>
                    </div>
                    <span class="ms-auto">
                        <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i>
                    </span>
                </div>
                <h5 class="px-4 Overviews">Overview</h5>
                <div class="p-4">
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Founder &amp; CEO</span> <span>24</span>
                        </div>
                        <div class="progress mb-3 progress-sm progress-animate" role="progressbar"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-primary" style="width: 25%"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>UX Designer</span> <span>1</span>
                        </div>
                        <div class="progress mb-3 progress-sm progress-animate" role="progressbar"
                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-secondary" style="width: 10%"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Recruitment</span> <span>87</span>
                        </div>
                        <div class="progress mb-3 progress-sm progress-animate" role="progressbar"
                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 45%"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Software Engineer</span> <span>32</span>
                        </div>
                        <div class="progress mb-3 progress-sm progress-animate" role="progressbar"
                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-info" style="width: 30%"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Project Manager</span> <span>32</span>
                        </div>
                        <div class="progress progress-sm progress-animate" role="progressbar" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-danger" style="width: 30%"></div>
                        </div><!-- progress -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Right-Sidebar -->



    </div>


    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="fe fe-arrow-up"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS -->
    <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Defaultmenu JS -->
    <script src="{{ asset('assets/js/defaultmenu.min.js') }}"></script>

    <!-- Node Waves JS-->
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- Sticky JS -->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>


    <!-- JSVector Maps JS -->
    <script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>

    <!-- JSVector Maps MapsJS -->
    <script src="{{ asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!-- Apex Charts JS -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Main-Dashboard -->
    <script src="{{ asset('assets/js/index.js') }}"></script>


    <!-- Custom-Switcher JS -->
    <script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
