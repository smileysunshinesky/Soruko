<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> UDON - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin dashboard,admin template,admin panel,bootstrap admin dashboard,html template,sales dashboard,dashboard,template dashboard,admin,html and css template,admin dashboard bootstrap,personal dashboard,crypto dashboard,stocks dashboard,admin panel template">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/brand-logos/favicon.ico" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="assets/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="assets/css/styles.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="assets/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">


<link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">


</head>

<body>

    <!-- Start Switcher -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom d-block p-0">
        <div class="d-flex align-items-center justify-content-between p-3">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <nav class="border-top border-block-start-dashed">
            <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                    type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                    type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
            </div>
        </nav>
    </div>
    <div class="offcanvas-body">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                tabindex="0">
                <div class="">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-light-theme">
                                    Light
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                    checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-dark-theme">
                                    Dark
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
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
                                <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-rtl">
                                    RTL
                                </label>
                                <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
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
                                <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                    checked>
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
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                    checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-classic">
                                    Classic
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-modern">
                                    Modern
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
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
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                    checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-boxed">
                                    Boxed
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
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
                                <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                    checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-scroll">
                                    Scrollable
                                </label>
                                <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
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
            <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                <div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Menu Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-light" checked>
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-dark">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-gradient">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-transparent"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                    type="radio" name="menu-colors" id="switcher-menu-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Header Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                    id="switcher-header-light" checked>
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                    id="switcher-header-dark">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                    id="switcher-header-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                    id="switcher-header-gradient">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                    id="switcher-header-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
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
                                <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                    id="switcher-primary2">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                    id="switcher-primary3">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                    id="switcher-primary4">
                            </div>
                            <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                <div class="theme-container-primary"></div>
                                <div class="pickr-container-primary"  onchange="updateChartColor(this.value)"></div>
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
                                <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                    id="switcher-background2">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-4" type="radio"
                                    name="theme-background" id="switcher-background3">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-5" type="radio"
                                    name="theme-background" id="switcher-background4">
                            </div>
                            <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
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
                                <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                    id="switcher-bg-img2">
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
            <div class="d-flex justify-content-center canvas-footer flex-wrap">
                <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1 w-100">Reset</a> 
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->


    <!-- Loader -->
<div id="loader" >
    <img src="assets/images/media/loader.svg" alt="">
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
                    <a href="index.php" class="header-logo">
                        <img src="assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                        <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                        <img src="assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                        <img src="assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                    </a>
                </div>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element mx-lg-0 mx-2">
                <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element header-search d-md-block d-none">
                <!-- Start::header-link -->
                <input type="text" class="header-search-bar form-control border-0 bg-body" placeholder="Search for Results...">
                <a href="javascript:void(0);" class="header-search-icon border-0">
                    <i class="bi bi-search"></i>
                </a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element --> 
            <div class="header-element ms-3 d-lg-block d-none my-auto">
                <!-- Start::dashboards list -->
                <div class="dropdown my-auto">
                    <a href="javascript:void(0);" class="btn bg-body header-dashboards-button text-start d-flex align-items-center justify-content-between" data-bs-toggle="dropdown" aria-expanded="false">
                    </a> 
                    <ul class="dropdown-menu dashboard-dropdown" role="menu">
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index.php">Sales Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-1.php">Analytics Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-2.php">Ecommerce Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-3.php">CRM Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-4.php">HRM Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-5.php">NFT Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-6.php">Crypto Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-7.php">Jobs Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-8.php">Projects Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-9.php">Courses Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-10.php">Stocks Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-11.php">Personal Dashboard</a></li>
                        <li><a class="dropdown-item dashboards-dropdown-item" href="index-12.php">Customer Dashboard</a></li>
                    </ul>
                </div>
                <!-- End::dashboards list -->
            </div>
            <!-- End::header-element -->

        </div>
        <!-- End::header-content-left -->

        <!-- Start::header-content-right -->
        <ul class="header-content-right">

            <!-- Start::header-element -->
            <li class="header-element d-md-none d-block">
                <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#header-responsive-search">
                    <!-- Start::header-link-icon -->
                    <i class="bi bi-search header-link-icon"></i>
                    <!-- End::header-link-icon -->
                </a>  
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element country-selector">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                    <img src="assets/images/flags/us_flag.jpg" alt="img" class="rounded-circle">
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="assets/images/flags/us_flag.jpg" alt="img">
                            </span>
                            English
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="assets/images/flags/spain_flag.jpg" alt="img" >
                            </span>
                            Spanish
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="assets/images/flags/french_flag.jpg" alt="img" >
                            </span>
                            French
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="assets/images/flags/germany_flag.jpg" alt="img" >
                            </span>
                            German
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="assets/images/flags/italy_flag.jpg" alt="img" >
                            </span>
                            Italian
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <span class="avatar avatar-xs lh-1 me-2">
                                <img src="assets/images/flags/russia_flag.jpg" alt="img" >
                            </span>
                            Russian
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element header-theme-mode">
                <!-- Start::header-link|layout-setting -->
                <a href="javascript:void(0);" class="header-link layout-setting">
                    <span class="light-layout">
                        <!-- Start::header-link-icon -->
                        <i class="bi bi-moon header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                    <span class="dark-layout">
                        <!-- Start::header-link-icon -->
                        <i class="bi bi-brightness-high header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                </a>
                <!-- End::header-link|layout-setting -->
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element cart-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                    <i class="bi bi-cart2 header-link-icon"></i>
                    <span class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-16">Cart Items<span class="badge bg-success-transparent ms-1 fs-12 rounded-circle" id="cart-data">5</span></p>
                            <span><span class="text-muted me-1">Total:</span><span class="text-primary fw-medium">$14,289</span></span>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="assets/images/ecommerce/jpg/9.jpg" alt="img" class="avatar me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark">
                                            <a href="cart.php">Pink High Heel Sandals</a>
                                        </div>
                                        <div>
                                            <span class="fw-medium mb-1">$499.00</span>
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Quantity: 01</li>
                                            <li><span class="badge bg-light text-default border">In Stock</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="assets/images/ecommerce/jpg/10.jpg" alt="img" class="avatar me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark">
                                            <a href="cart.php">Blue Denim Jacket</a>
                                        </div>
                                        <div>
                                            <span class="fw-medium mb-1">$129.79</span>
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item">
                                            <li>Quantity: 02</li>
                                            <li><span class="badge bg-light text-default border">In Stock</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="assets/images/ecommerce/jpg/13.jpg" alt="img" class="avatar me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark">
                                            <a href="cart.php">Yellow Backpack (24L)</a>
                                        </div>
                                        <div>
                                            <span class="fw-medium mb-1">$99.99</span>
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Quantity: 01</li>
                                            <li><span class="badge bg-light text-default border">In Stock</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="assets/images/ecommerce/jpg/16.jpg" alt="img" class="avatar me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark">
                                            <a href="cart.php">Multi Color Dress for Girls (3Y - 4Y)</a>
                                        </div>
                                        <div>
                                            <span class="fw-medium mb-1">$1.499.00</span>
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Quantity: 02</li>
                                            <li><span class="badge bg-danger-transparent border">Out Of Stock</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="assets/images/ecommerce/jpg/18.jpg" alt="img" class="avatar me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark">
                                            <a href="cart.php">Xavier Smart Watch</a>
                                        </div>
                                        <div>
                                            <span class="fw-medium mb-1">$49.79</span>
                                            <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Quantity: 03</li>
                                            <li><span class="badge bg-light text-default border">In Stock</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item border-top">
                        <div class="text-center">
                            <a href="checkout.php" class="link-primary text-decoration-underline">Proceed to checkout</a>
                        </div>
                    </div>
                    <div class="p-5 empty-item d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-primary-transparent">
                                <i class="ri-shopping-cart-2-line fs-2"></i>
                            </span>
                            <h6 class="fw-medium mb-1 mt-3">Your Cart is Empty</h6>
                            <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                            <a href="products.php" class="btn btn-primary btn-wave btn-sm m-1" data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element notifications-dropdown d-xl-block d-none">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                    <i class="bi bi-bell header-link-icon"></i>
                    <span class="header-icon-pulse bg-secondary rounded pulse pulse-secondary"></span>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-16">Notifications</p>
                            <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-notification-scroll">
                        <li class="dropdown-item">
                            <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar avatar-rounded">
                                        <img src="assets/images/faces/11.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-medium"><a href="notifications.php">John Doe</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Hey there! What's up?</span>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                    </div>
                                 </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar bg-secondary-transparent avatar-rounded">
                                        <img src="assets/images/faces/21.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-medium"><a href="notifications.php">Customer Support</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Great job on resolving the issue! Thank you!</span>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x"></i></a>
                                    </div>
                                 </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar bg-pink-transparent avatar-rounded">
                                        <img src="assets/images/faces/20.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-medium"><a href="notifications.php">Digital Marketing Trends</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Next Thursday at 2:30 PM</span>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x"></i></a>
                                    </div>
                                 </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar bg-danger-transparent avatar-rounded"><i class="ti ti-circle-check fs-18"></i></span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-medium"><a href="notifications.php">Amount: $50.00 paid for the order</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Transaction ID: 123456789</span>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x"></i></a>
                                    </div>
                                 </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar bg-success-transparent avatar-rounded">
                                        <img src="assets/images/faces/6.jpg" alt="">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-medium"><a href="notifications.php">Samantha</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Would you like to connect?</span>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x"></i></a>
                                    </div>
                                 </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item1 border-top">
                        <div class="text-center">
                            <a href="notifications.php" class="link-primary text-decoration-underline">View All</a>
                        </div>
                    </div>
                    <div class="p-5 empty-item1 d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                <i class="ri-notification-off-line fs-2"></i>
                            </span>
                            <h6 class="fw-medium mt-3">No New Notifications</h6>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element header-fullscreen">
                <!-- Start::header-link -->
                <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                    <i class="bi bi-fullscreen full-screen-open header-link-icon"></i>
                    <i class="bi bi-fullscreen-exit full-screen-close header-link-icon d-none"></i>
                </a>
                <!-- End::header-link -->
            </li>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="me-sm-2 me-0">
                            <img src="assets/images/faces/9.jpg" alt="img" class="avatar avatar-sm avatar-rounded">
                        </div>
                        <div class="d-xl-block d-none lh-1">
                            <span class="fw-medium lh-1">Mr. Stark</span>
                        </div>
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                    <li><a class="dropdown-item d-flex align-items-center" href="profile.php"><i class="bi bi-person fs-18 me-2 op-7"></i>Profile</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="mail.php"><i class="bi bi-envelope fs-16 me-2 op-7"></i>Inbox <span class="ms-auto badge bg-light border text-default">19</span></a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="to-do-list.php"><i class="bi bi-check-square fs-16 me-2 op-7"></i>Task Manager</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="mail-settings.php"><i class="bi bi-gear fs-16 me-2 op-7"></i>Settings</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="chat.php"><i class="bi bi-headset fs-18 me-2 op-7"></i>Support</a></li>
                    <li><a class="dropdown-item d-flex align-items-center" href="sign-in-cover.php"><i class="bi bi-box-arrow-right fs-18 me-2 op-7"></i>Log Out</a></li>
                </ul>
            </li>  
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <li class="header-element">
                <!-- Start::header-link|switcher-icon -->
                <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                    <i class="bi bi-gear header-link-icon border-0"></i>
                </a>
                <!-- End::header-link|switcher-icon -->
            </li>
            <!-- End::header-element -->

        </ul>
        <!-- End::header-content-right -->

    </div>
    <!-- End::main-header-container -->

</header>
<!-- /app-header -->
        <!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.php" class="header-logo">
            <img src="assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
            <img src="assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
            <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-house side-menu__icon"></i>
                        <span class="side-menu__label">Dashboards</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Dashboards</a>
                        </li>
                        <li class="slide">
                            <a href="index.php" class="side-menu__item">Sales</a>
                        </li>
                        <li class="slide">
                            <a href="index-1.php" class="side-menu__item">Analytics</a>
                        </li>
                        <li class="slide">
                            <a href="index-2.php" class="side-menu__item">Ecommerce</a>
                        </li>
                        <li class="slide">
                            <a href="index-3.php" class="side-menu__item">Crm</a>
                        </li>
                        <li class="slide">
                            <a href="index-4.php" class="side-menu__item">HRM</a>
                        </li>
                        <li class="slide">
                            <a href="index-5.php" class="side-menu__item">NFT</a>
                        </li>
                        <li class="slide">
                            <a href="index-6.php" class="side-menu__item">Crypto</a>
                        </li>
                        <li class="slide">
                            <a href="index-7.php" class="side-menu__item">Jobs</a>
                        </li>
                        <li class="slide">
                            <a href="index-8.php" class="side-menu__item">Projects</a>
                        </li>
                        <li class="slide">
                            <a href="index-9.php" class="side-menu__item">Courses</a>
                        </li>
                        <li class="slide">
                            <a href="index-10.php" class="side-menu__item">Stocks</a>
                        </li>
                        <li class="slide">
                            <a href="index-11.php" class="side-menu__item">Personal</a>
                        </li>
                        <li class="slide">
                            <a href="index-12.php" class="side-menu__item">Customer</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-file-earmark side-menu__icon"></i>
                        <span class="side-menu__label">Pages</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 pages-ul">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Pages</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Blog
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="blog.php" class="side-menu__item">Blog</a>
                                </li>
                                <li class="slide">
                                    <a href="blog-details.php" class="side-menu__item">Blog Details</a>
                                </li>
                                <li class="slide">
                                    <a href="blog-create.php" class="side-menu__item">Create Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="chat.php" class="side-menu__item">Chat</a>
                        </li>
                        <li class="slide">
                            <a href="contacts.php" class="side-menu__item">Contacts</a>
                        </li>
                        <li class="slide">
                            <a href="contact-us.php" class="side-menu__item">Contact Us</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="add-products.php" class="side-menu__item">Add Products</a>
                                </li>
                                <li class="slide">
                                    <a href="cart.php" class="side-menu__item">Cart</a>
                                </li>
                                <li class="slide">
                                    <a href="checkout.php" class="side-menu__item">Checkout</a>
                                </li>
                                <li class="slide">
                                    <a href="edit-products.php" class="side-menu__item">Edit Products</a>
                                </li>
                                <li class="slide">
                                    <a href="order-details.php" class="side-menu__item">Order Details</a>
                                </li>
                                <li class="slide">
                                    <a href="orders.php" class="side-menu__item">Orders</a>
                                </li>
                                <li class="slide">
                                    <a href="products.php" class="side-menu__item">Products</a>
                                </li>
                                <li class="slide">
                                    <a href="product-details.php" class="side-menu__item">Product Details</a>
                                </li>
                                <li class="slide">
                                    <a href="products-list.php" class="side-menu__item">Products List</a>
                                </li>
                                <li class="slide">
                                    <a href="wishlist.php" class="side-menu__item">Wishlist</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Email
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="mail.php" class="side-menu__item">Mail App</a>
                                </li>
                                <li class="slide">
                                    <a href="mail-settings.php" class="side-menu__item">Mail Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="empty.php" class="side-menu__item">Empty</a>
                        </li>
                        <li class="slide">
                            <a href="faq's.php" class="side-menu__item">FAQ's</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">File Manager
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="file-manager.php" class="side-menu__item">File Manager</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Invoice
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="invoice-create.php" class="side-menu__item">Create Invoice</a>
                                </li>
                                <li class="slide">
                                    <a href="invoice-details.php" class="side-menu__item">Invoice Details</a>
                                </li>
                                <li class="slide">
                                    <a href="invoice-list.php" class="side-menu__item">Invoice List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="landing.php" class="side-menu__item">Landing</a>
                        </li>
                        <li class="slide">
                            <a href="landing-jobs.php" class="side-menu__item">Jobs Landing</a>
                        </li>
                        <li class="slide">
                            <a href="notifications.php" class="side-menu__item">Notifications</a>
                        </li>
                        <li class="slide">
                            <a href="pricing.php" class="side-menu__item">Pricing</a>
                        </li>
                        <li class="slide">
                            <a href="profile.php" class="side-menu__item">Profile</a>
                        </li>
                        <li class="slide">
                            <a href="reviews.php" class="side-menu__item">Reviews</a>
                        </li>
                        <li class="slide">
                            <a href="team.php" class="side-menu__item">Team</a>
                        </li>
                        <li class="slide">
                            <a href="terms_conditions.php" class="side-menu__item">Terms & Conditions</a>
                        </li>
                        <li class="slide">
                            <a href="timeline.php" class="side-menu__item">Timeline</a>
                        </li>
                        <li class="slide">
                            <a href="to-do-list.php" class="side-menu__item">To Do List</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-key side-menu__icon"></i>
                        <span class="side-menu__label">Authentication</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Authentication</a>
                        </li>
                        <li class="slide">
                            <a href="coming-soon.php" class="side-menu__item">Coming Soon</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Create Password
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="create-password-basic.php" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="create-password-cover.php" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>      
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Lock Screen
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="lockscreen-basic.php" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="lockscreen-cover.php" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>     
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Reset Password
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="reset-password-basic.php" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="reset-password-cover.php" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>     
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Sign Up
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="sign-up-basic.php" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="sign-up-cover.php" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li>  
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Sign In
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="sign-in-basic.php" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="sign-in-cover.php" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Two Step Verification
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="two-step-verification-basic.php" class="side-menu__item">Basic</a>
                                </li>
                                <li class="slide">
                                    <a href="two-step-verification-cover.php" class="side-menu__item">Cover</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="slide">
                            <a href="under-maintenance.php" class="side-menu__item">Under Maintenance</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-exclamation-triangle side-menu__icon"></i>
                        <span class="side-menu__label">Error</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Error</a>
                        </li>
                        <li class="slide">
                            <a href="401-error.php" class="side-menu__item">401 - Error</a>
                        </li>
                        <li class="slide">
                            <a href="404-error.php" class="side-menu__item">404 - Error</a>
                        </li>
                        <li class="slide">
                            <a href="500-error.php" class="side-menu__item">500 - Error</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-grid side-menu__icon"></i>
                        <span class="side-menu__label">Apps</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Apps</a>
                        </li>
                        <li class="slide">
                            <a href="calendar.php" class="side-menu__item">Full Calendar</a>
                        </li>
                        <li class="slide">
                            <a href="gallery.php" class="side-menu__item">Gallery</a>
                        </li>
                        <li class="slide">
                            <a href="sweet_alerts.php" class="side-menu__item">Sweet Alerts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Projects
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="projects-list.php" class="side-menu__item">Projects List</a>
                                </li>
                                <li class="slide">
                                    <a href="projects-overview.php" class="side-menu__item">Project Overview</a>
                                </li>
                                <li class="slide">
                                    <a href="projects-create.php" class="side-menu__item">Create Project</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Task
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="task-kanban-board.php" class="side-menu__item">Kanban Board</a>
                                </li>
                                <li class="slide">
                                    <a href="task-list-view.php" class="side-menu__item">List View</a>
                                </li>
                                <li class="slide">
                                    <a href="task-details.php" class="side-menu__item">Task Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Jobs
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="job-details.php" class="side-menu__item">Job Details</a>
                                </li>
                                <li class="slide">
                                    <a href="job-company-search.php" class="side-menu__item">Search Company</a>
                                </li>
                                <li class="slide">
                                    <a href="job-search.php" class="side-menu__item">Search Jobs</a>
                                </li>
                                <li class="slide">
                                    <a href="job-post.php" class="side-menu__item">Job Post</a>
                                </li>
                                <li class="slide">
                                    <a href="jobs-list.php" class="side-menu__item">Jobs List</a>
                                </li>
                                <li class="slide">
                                    <a href="job-candidate-search.php" class="side-menu__item">Search Candidate</a>
                                </li>
                                <li class="slide">
                                    <a href="job-candidate-details.php" class="side-menu__item">Candidate Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">NFT
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="nft-marketplace.php" class="side-menu__item">Market Place</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-details.php" class="side-menu__item">NFT Details</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-create.php" class="side-menu__item">Create NFT</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-wallet-integration.php" class="side-menu__item">Wallet Integration</a>
                                </li>
                                <li class="slide">
                                    <a href="nft-live-auction.php" class="side-menu__item">Live Auction</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">CRM
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="crm-contacts.php" class="side-menu__item">Contacts</a>
                                </li>
                                <li class="slide">
                                    <a href="crm-companies.php" class="side-menu__item">Companies</a>
                                </li>
                                <li class="slide">
                                    <a href="crm-deals.php" class="side-menu__item">Deals</a>
                                </li>
                                <li class="slide">
                                    <a href="crm-leads.php" class="side-menu__item">Leads</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Crypto
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="crypto-transactions.php" class="side-menu__item">Transactions</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-currency-exchange.php" class="side-menu__item">Currency Exchange</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-buy_sell.php" class="side-menu__item">Buy & Sell</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-marketcap.php" class="side-menu__item">Marketcap</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-wallet.php" class="side-menu__item">Wallet</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-layers side-menu__icon"></i>
                        <span class="side-menu__label">Nested Menu</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Nested Menu</a>
                        </li>
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2.1</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2.2
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child3">
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2.2.1</a>
                                        </li>
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2.2.2</a>
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
                        <i class="bi bi-archive side-menu__icon"></i>
                        <span class="side-menu__label">Ui Elements</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 mega-menu">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Ui Elements</a>
                        </li>
                        <li class="slide">
                            <a href="alerts.php" class="side-menu__item">Alerts</a>
                        </li>
                        <li class="slide">
                            <a href="badge.php" class="side-menu__item">Badge</a>
                        </li>
                        <li class="slide">
                            <a href="breadcrumb.php" class="side-menu__item">Breadcrumb</a>
                        </li>
                        <li class="slide">
                            <a href="buttons.php" class="side-menu__item">Buttons</a>
                        </li>
                        <li class="slide">
                            <a href="buttongroup.php" class="side-menu__item">Button Group</a>
                        </li>
                        <li class="slide">
                            <a href="cards.php" class="side-menu__item">Cards</a>
                        </li>
                        <li class="slide">
                            <a href="dropdowns.php" class="side-menu__item">Dropdowns</a>
                        </li>
                        <li class="slide">
                            <a href="images_figures.php" class="side-menu__item">Images & Figures</a>
                        </li>
                        <li class="slide">
                            <a href="listgroup.php" class="side-menu__item">List Group</a>
                        </li>
                        <li class="slide">
                            <a href="navs_tabs.php" class="side-menu__item">Navs & Tabs</a>
                        </li>
                        <li class="slide">
                            <a href="object-fit.php" class="side-menu__item">Object Fit</a>
                        </li>
                        <li class="slide">
                            <a href="pagination.php" class="side-menu__item">Pagination</a>
                        </li>
                        <li class="slide">
                            <a href="popovers.php" class="side-menu__item">Popovers</a>
                        </li>
                        <li class="slide">
                            <a href="progress.php" class="side-menu__item">Progress</a>
                        </li>
                        <li class="slide">
                            <a href="spinners.php" class="side-menu__item">Spinners</a>
                        </li>
                        <li class="slide">
                            <a href="toasts.php" class="side-menu__item">Toasts</a>
                        </li>
                        <li class="slide">
                            <a href="tooltips.php" class="side-menu__item">Tooltips</a>
                        </li>
                        <li class="slide">
                            <a href="typography.php" class="side-menu__item">Typography</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-award side-menu__icon"></i>
                        <span class="side-menu__label">Utilities</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Utilities</a>
                        </li>
                        <li class="slide">
                            <a href="avatars.php" class="side-menu__item">Avatars</a>
                        </li>
                        <li class="slide">
                            <a href="borders.php" class="side-menu__item">Borders</a>
                        </li>
                        <li class="slide">
                            <a href="breakpoints.php" class="side-menu__item">Breakpoints</a>
                        </li>
                        <li class="slide">
                            <a href="colors.php" class="side-menu__item">Colors</a>
                        </li>
                        <li class="slide">
                            <a href="columns.php" class="side-menu__item">Columns</a>
                        </li>
                        <li class="slide">
                            <a href="flex.php" class="side-menu__item">Flex</a>
                        </li>
                        <li class="slide">
                            <a href="gutters.php" class="side-menu__item">Gutters</a>
                        </li>
                        <li class="slide">
                            <a href="helpers.php" class="side-menu__item">Helpers</a>
                        </li>
                        <li class="slide">
                            <a href="position.php" class="side-menu__item">Position</a>
                        </li>
                        <li class="slide">
                            <a href="more.php" class="side-menu__item">Additional Content</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-file-earmark-text side-menu__icon"></i>
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
                                    <a href="form_inputs.php" class="side-menu__item">Inputs</a>
                                </li>
                                <li class="slide">
                                    <a href="form_check_radios.php" class="side-menu__item">Checks & Radios</a>
                                </li>
                                <li class="slide">
                                    <a href="form_input_group.php" class="side-menu__item">Input Group</a>
                                </li>
                                <li class="slide">
                                    <a href="form_select.php" class="side-menu__item">Form Select</a>
                                </li>
                                <li class="slide">
                                    <a href="form_range.php" class="side-menu__item">Range Slider</a>
                                </li>
                                <li class="slide">
                                    <a href="form_input_masks.php" class="side-menu__item">Input Masks</a>
                                </li>
                                <li class="slide">
                                    <a href="form_file_uploads.php" class="side-menu__item">File Uploads</a>
                                </li>
                                <li class="slide">
                                    <a href="form_dateTime_pickers.php" class="side-menu__item">Date,Time Picker</a>
                                </li>
                                <li class="slide">
                                    <a href="form_color_pickers.php" class="side-menu__item">Color Pickers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="floating_labels.php" class="side-menu__item">Floating Labels</a>
                        </li>
                        <li class="slide">
                            <a href="form_layout.php" class="side-menu__item">Form Layouts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="quill_editor.php" class="side-menu__item">Quill Editor</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="form_validation.php" class="side-menu__item">Validation</a>
                        </li>
                        <li class="slide">
                            <a href="form_select2.php" class="side-menu__item">Select2</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-snow side-menu__icon"></i>
                        <span class="side-menu__label">Advanced UI</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Advanced Ui</a>
                        </li>
                        <li class="slide">
                            <a href="accordions_collpase.php" class="side-menu__item">Accordions & Collapse</a>
                        </li>
                        <li class="slide">
                            <a href="carousel.php" class="side-menu__item">Carousel</a>
                        </li>
                        <li class="slide">
                            <a href="draggable-cards.php" class="side-menu__item">Draggable Cards</a>
                        </li>
                        <li class="slide">
                            <a href="modals_closes.php" class="side-menu__item">Modals & Closes</a>
                        </li>
                        <li class="slide">
                            <a href="navbar.php" class="side-menu__item">Navbar</a>
                        </li>
                        <li class="slide">
                            <a href="offcanvas.php" class="side-menu__item">Offcanvas</a>
                        </li>
                        <li class="slide">
                            <a href="placeholders.php" class="side-menu__item">Placeholders</a>
                        </li>
                        <li class="slide">
                            <a href="ratings.php" class="side-menu__item">Ratings</a>
                        </li>
                        <li class="slide">
                            <a href="scrollspy.php" class="side-menu__item">Scrollspy</a>
                        </li>
                        <li class="slide">
                            <a href="swiperjs.php" class="side-menu__item">Swiper JS</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="widgets.php" class="side-menu__item">
                        <i class="bi bi-gift side-menu__icon"></i>
                        <span class="side-menu__label">Widgets</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-layout-text-window side-menu__icon"></i>
                        <!-- <i class="bi bi-table"></i> -->
                        <span class="side-menu__label">Tables</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Tables</a>
                        </li>
                        <li class="slide">
                            <a href="tables.php" class="side-menu__item">Tables</a>
                        </li>
                        <li class="slide">
                            <a href="grid-tables.php" class="side-menu__item">Grid JS Tables</a>
                        </li>
                        <li class="slide">
                            <a href="data-tables.php" class="side-menu__item">Data Tables</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-bar-chart side-menu__icon"></i>
                        <span class="side-menu__label">Charts</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Charts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="apex-line-charts.php" class="side-menu__item">Line Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-area-charts.php" class="side-menu__item">Area Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-column-charts.php" class="side-menu__item">Column Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-bar-charts.php" class="side-menu__item">Bar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-mixed-charts.php" class="side-menu__item">Mixed Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-rangearea-charts.php" class="side-menu__item">Range Area Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-timeline-charts.php" class="side-menu__item">Timeline Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-funnel-charts.php" class="side-menu__item">Funnel Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-candlestick-charts.php" class="side-menu__item">CandleStick
                                        Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-boxplot-charts.php" class="side-menu__item">Boxplot Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-bubble-charts.php" class="side-menu__item">Bubble Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-scatter-charts.php" class="side-menu__item">Scatter Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-heatmap-charts.php" class="side-menu__item">Heatmap Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-treemap-charts.php" class="side-menu__item">Treemap Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-pie-charts.php" class="side-menu__item">Pie Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-radialbar-charts.php" class="side-menu__item">Radialbar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-radar-charts.php" class="side-menu__item">Radar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-polararea-charts.php" class="side-menu__item">Polararea Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="chartjs-charts.php" class="side-menu__item">Chartjs Charts</a>
                        </li>
                        <li class="slide">
                            <a href="echarts.php" class="side-menu__item">Echart Charts</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bi bi-geo-alt side-menu__icon"></i>
                        <span class="side-menu__label">Maps</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Maps</a>
                        </li>
                        <li class="slide">
                            <a href="google-maps.php" class="side-menu__item">Google Maps</a>
                        </li>
                        <li class="slide">
                            <a href="leaflet-maps.php" class="side-menu__item">Leaflet Maps</a>
                        </li>
                        <li class="slide">
                            <a href="vector-maps.php" class="side-menu__item">Vector Maps</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="icons.php" class="side-menu__item">
                        <i class="bi bi-shop side-menu__icon"></i>
                        <span class="side-menu__label">Icons</span>
                    </a>
                </li>
                <!-- End::slide -->

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Product Details</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="btn-list">
                        <button class="btn btn-primary-light btn-wave me-2">
                            <i class="bx bx-crown align-middle"></i> Plan Upgrade
                        </button>
                        <button class="btn btn-secondary-light btn-wave me-0">
                            <i class="ri-upload-cloud-line align-middle"></i> Export Report
                        </button>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row gx-5">
                                    <div class="col-xxl-5 col-xl-12">
                                        <div class="row">
                                            <div class="col-xxl-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 mb-md-4 mb-3">
                                                <div class="swiper swiper-preview-details bg-light product-details-page">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide" id="img-container">
                                                            <img class="img-fluid" src="assets/images/ecommerce/png/1.png" alt="img">
                                                        </div>
                                                        <div class="swiper-slide image-container">
                                                            <img class="img-fluid" src="assets/images/ecommerce/png/2.png" alt="img">
                                                        </div>
                                                        <div class="swiper-slide image-container">
                                                            <img class="img-fluid" src="assets/images/ecommerce/png/3.png" alt="img">
                                                        </div>
                                                        <div class="swiper-slide image-container">
                                                            <img class="img-fluid" src="assets/images/ecommerce/png/4.png" alt="img">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
                                                </div>
                                                <div class="swiper swiper-view-details mt-2">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img class="img-fluid" src="assets/images/ecommerce/png/1.png" alt="img">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img class="img-fluid" src="assets/images/ecommerce/png/2.png" alt="img">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img class="img-fluid" src="assets/images/ecommerce/png/3.png" alt="img">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img class="img-fluid" src="assets/images/ecommerce/png/4.png" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 d-md-block d-none">
                                                <p class="fs-15 fw-medium mb-5 text-decoration-underline">Similar Products :</p>
                                                <div class="row gy-5">
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="text-center position-relative">
                                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                                            <div class="similar-products-image me-2"> 
                                                                <img src="assets/images/ecommerce/png/7.png" class="rounded" alt=""> 
                                                            </div> 
                                                            <h5 class="mb-2 fs-14 fw-medium mt-1">Hand bag for women small</h5> 
                                                            <div class="d-flex gap-3 align-items-center justify-content-center">
                                                                <div class="d-flex align-items-center justify-content-center"> 
                                                                    <h5 class="mb-0 fw-medium"> $699 </h5> 
                                                                    <p class="mb-0 text-muted"> <span class="text-success fs-11 ms-1">25% off</span> 
                                                                    </p>
                                                                </div> 
                                                                <div> 
                                                                    <span class="badge bg-warning-transparent rounded-1 border border-warning">4.4<i class="ri-star-s-fill ms-1"></i></span> 
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="text-center position-relative">
                                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                                             <div class="similar-products-image me-2"> 
                                                                <img src="assets/images/ecommerce/png/9.png" class="rounded" alt=""> 
                                                            </div> 
                                                            <h5 class="mb-2 fs-14 fw-medium mt-1">Omega Sports shoes series 3</h5> 
                                                            <div class="d-flex gap-3 align-items-center justify-content-center">
                                                                <div class="d-flex align-items-center justify-content-center"> 
                                                                    <h5 class="mb-0 fw-medium"> $1,299 </h5> 
                                                                    <p class="mb-0 text-muted"> <span class="text-success fs-11 ms-1">25% off</span> 
                                                                    </p>
                                                                </div> 
                                                                <div> 
                                                                    <span class="badge bg-warning-transparent rounded-1 border border-warning">4.1<i class="ri-star-s-fill ms-1"></i></span> 
                                                                </div> 
                                                            </div>    
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="text-center position-relative">
                                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                                             <div class="similar-products-image me-2"> 
                                                                <img src="assets/images/ecommerce/png/10.png" class="rounded" alt=""> 
                                                            </div> 
                                                            <h5 class="mb-2 fs-14 fw-medium mt-1">Omega Sports shoes series 3</h5> 
                                                            <div class="d-flex gap-3 align-items-center justify-content-center">
                                                                <div class="d-flex align-items-center justify-content-center"> 
                                                                    <h5 class="mb-0 fw-medium"> $1,999 </h5> 
                                                                    <p class="mb-0 text-muted"> <span class="text-success fs-11 ms-1">25% off</span> 
                                                                    </p>
                                                                </div> 
                                                                <div> 
                                                                    <span class="badge bg-warning-transparent rounded-1 border border-warning">4.7<i class="ri-star-s-fill ms-1"></i></span> 
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="text-center position-relative">
                                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                                            <div class="similar-products-image me-2"> 
                                                                <img src="assets/images/ecommerce/png/8.png" class="rounded" alt=""> 
                                                            </div> 
                                                            <h5 class="mb-2 fs-14 fw-medium mt-1">Omega Sports shoes series 3</h5> 
                                                            <div class="d-flex gap-3 align-items-center justify-content-center">
                                                                <div class="d-flex align-items-center justify-content-center"> 
                                                                    <h5 class="mb-0 fw-medium"> $499 </h5> 
                                                                    <p class="mb-0 text-muted"> <span class="text-success fs-11 ms-1">25% off</span> 
                                                                    </p>
                                                                </div> 
                                                                <div> 
                                                                    <span class="badge bg-warning-transparent rounded-1 border border-warning">4.3<i class="ri-star-s-fill ms-1"></i></span> 
                                                                </div> 
                                                            </div>    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-7 col-xl-12">
                                        <div class="row gx-5">
                                            <div class="col-xl-12 mt-xxl-0 mt-3">
                                                <div>
                                                    <p class="fs-3 fw-medium mb-0">SPKORA Faux Leather Women Handbags Shoulder Hobo Bag Purse With Long Chain Strap</p>
                                                    <p class="fs-18 mb-4">
                                                        <i class="ri-star-s-fill text-warning align-middle"></i>
                                                        <i class="ri-star-s-fill text-warning align-middle"></i>
                                                        <i class="ri-star-s-fill text-warning align-middle"></i>
                                                        <i class="ri-star-s-fill text-warning align-middle"></i>
                                                        <i class="ri-star-half-s-fill text-warning align-middle"></i>
                                                        <span class="fw-medium text-muted ms-1">4.3<a class="text-secondary" href="javascript:void(0);">(2.4k Reviews)</a></span>
                                                    </p>
                                                    <div class="row mb-4">
                                                        <div class="col-xxl-3 col-xl-12">
                                                            <p class="mb-1 lh-1 fs-11 text-success fw-medium">Special Offer</p>
                                                            <p class="mb-1"><span class="h3"><sup class="fs-14">$</sup>1,299<sup class="fs-14">.00</sup></span><span class="ms-3 badge bg-danger-transparent">50% Off</span></p>
                                                            <p class="mb-0 text-muted fs-12">M.R.P-<s>$2,599.00</s></p>
                                                        </div>
                                                        <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-xxl-0 mt-3">
                                                            <p class="mb-2 fs-15 fw-medium">Leather Material</p>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="strap-material" id="strap1" checked="">
                                                                <label class="btn btn-sm btn-outline-light text-default" for="strap1">Faux Leather</label>
                                                                <input type="radio" class="btn-check" name="strap-material" id="strap2">
                                                                <label class="btn btn-sm btn-outline-light text-default" for="strap2">Original Leather</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                            <p class="fs-15 fw-medium mb-2">Colors :</p>
                                                            <p class="mb-0 d-flex">
                                                                <a class="color-1 product-colors selected" href="javascript:void(0)">
                                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                                </a>
                                                                <a class="color-2 product-colors" href="javascript:void(0)">
                                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                                </a>
                                                                <a class="color-3 product-colors" href="javascript:void(0)">
                                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                                </a>
                                                                <a class="color-4 product-colors" href="javascript:void(0)">
                                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4 btn-list">
                                                        <a href="checkout.php" class="btn btn-primary btn-w-lg mb-2">Buy Now</a>
                                                        <a href="cart.php" class="btn btn-danger btn-w-lg mb-2">Add To Cart</a>
                                                    </div>
                                                    <div class="mb-4">
                                                        <p class="fs-15 fw-medium mb-1">Description :</p>
                                                        <p class="text-muted mb-0">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati accusamus, quaerat nam quo optio reiciendis harum reprehenderit omnis tempora adipisci in iste aperiam unde, repellendus possimus explicabo veritatis? Dignissimos, id.
                                                        </p>
                                                    </div>
                                                    <!-- <div class="mb-4">
                                                        <div class="row justify-content-center">
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                                <div class="ecommerce-assurance">
                                                                    <p class="mb-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 168 168"><path fill="#0bceb2" d="M82.002 44.119a29 29 0 1 0 28.999 29 29.033 29.033 0 0 0-28.999-29Zm0 53.999a25 25 0 1 1 25-24.999 25.027 25.027 0 0 1-25 24.999Z"/><path fill="#2d4356" d="m95.281 68.305-7.95-1.121-3.546-6.972a2 2 0 0 0-3.566 0l-3.545 6.972-7.95 1.12a2 2 0 0 0-1.095 3.434l5.716 5.41L72 84.77a2 2 0 0 0 2.879 2.13l7.124-3.636 7.125 3.635a2 2 0 0 0 2.879-2.129l-1.347-7.622 5.717-5.41a2 2 0 0 0-1.095-3.433Zm-8.153 6.677a1.998 1.998 0 0 0-.596 1.8l.836 4.73-4.457-2.275a1.999 1.999 0 0 0-1.818 0l-4.457 2.275.836-4.73a1.998 1.998 0 0 0-.596-1.8l-3.483-3.296 4.871-.687a2 2 0 0 0 1.504-1.074l2.234-4.394 2.235 4.394a2 2 0 0 0 1.503 1.074l4.871.687Z"/><path fill="#2d4356" d="M92.169 114.835c.753-.176 2.427.598 3.833 1.292v-4.408a7.799 7.799 0 0 0-4.741-.78c-2.28.532-3.913 2.719-5.493 4.834-.992 1.328-2.492 3.336-3.291 3.345h-.004c-.791 0-2.385-2.042-3.337-3.263-1.628-2.086-3.311-4.243-5.61-4.73a4.846 4.846 0 0 0-1.014-.104c-1.953 0-3.996 1.07-5.983 2.11-1.504.788-3.783 1.978-4.537 1.63-.657-.303-1.174-2.773-1.484-4.25-.547-2.608-1.112-5.306-3.013-6.758-1.888-1.443-4.68-1.329-7.387-1.217-1.45.061-4.155.17-4.622-.387-.495-.596.153-3.107.54-4.61.653-2.528 1.326-5.143.29-7.205-1.05-2.08-3.594-3.155-6.056-4.195-1.348-.57-3.855-1.63-4.03-2.345-.173-.712 1.574-2.762 2.512-3.862 1.72-2.018 3.496-4.104 3.473-6.43-.026-2.31-1.842-4.351-3.599-6.326-.966-1.086-2.766-3.11-2.606-3.836.155-.7 2.625-1.8 3.952-2.39 2.45-1.092 4.984-2.221 6-4.333.994-2.063.27-4.654-.429-7.16-.42-1.502-1.122-4.016-.625-4.64.52-.65 3.217-.593 4.83-.555 2.634.06 5.35.117 7.126-1.3 1.85-1.476 2.359-4.166 2.851-6.768.283-1.494.756-3.996 1.427-4.32.73-.353 3.11.833 4.53 1.543 2.368 1.182 4.811 2.404 7.074 1.879 2.277-.532 3.91-2.717 5.49-4.831.992-1.33 2.493-3.338 3.294-3.346h.005c.79 0 2.383 2.041 3.335 3.263 1.627 2.085 3.31 4.242 5.608 4.73 2.263.48 4.666-.785 7-2.008 1.504-.788 3.772-1.973 4.532-1.632.66.304 1.177 2.777 1.487 4.254.547 2.608 1.112 5.305 3.014 6.759 1.887 1.44 4.678 1.32 7.382 1.214 1.454-.063 4.156-.172 4.623.388.497.594-.151 3.108-.538 4.609-.652 2.528-1.326 5.143-.289 7.204 1.049 2.079 3.595 3.156 6.058 4.197 1.346.57 3.854 1.63 4.028 2.343.173.71-1.574 2.761-2.513 3.862-1.719 2.018-3.496 4.103-3.471 6.427.025 2.313 1.842 4.356 3.6 6.33.965 1.087 2.764 3.108 2.602 3.835-.154.7-2.625 1.802-3.953 2.393-.31.138-.62.276-.929.417.267.094.534.191.794.308a10.034 10.034 0 0 1 3.223 2.26c2.25-1.064 4.286-2.315 4.772-4.514.602-2.722-1.495-5.078-3.522-7.357-1.089-1.223-2.579-2.899-2.588-3.715-.008-.826 1.45-2.538 2.517-3.79 1.972-2.313 4.01-4.705 3.354-7.402-.65-2.668-3.551-3.895-6.357-5.081-1.543-.653-3.656-1.546-4.044-2.313-.36-.717.19-2.849.591-4.405.726-2.813 1.547-6-.263-8.17-1.729-2.075-4.846-1.946-7.86-1.823-1.712.07-4.052.166-4.788-.396-.721-.55-1.188-2.776-1.529-4.401-.61-2.91-1.24-5.92-3.729-7.066-2.544-1.166-5.347.3-8.06 1.721-1.466.768-3.474 1.82-4.312 1.64-.873-.186-2.268-1.974-3.286-3.28-1.853-2.374-3.763-4.814-6.535-4.8-2.78.028-4.65 2.53-6.458 4.951-.986 1.32-2.338 3.129-3.193 3.33-.852.192-2.892-.821-4.38-1.563-2.73-1.364-5.554-2.774-8.055-1.566-2.486 1.2-3.062 4.24-3.617 7.179-.307 1.618-.726 3.833-1.417 4.384-.645.514-2.898.464-4.544.428-3.09-.067-6.29-.138-8.044 2.06-1.773 2.222-.884 5.404-.1 8.21.405 1.45 1.017 3.643.677 4.35-.38.79-2.486 1.728-4.024 2.412-2.771 1.236-5.637 2.512-6.229 5.18-.602 2.723 1.495 5.08 3.523 7.36 1.088 1.223 2.578 2.897 2.587 3.71.009.828-1.45 2.541-2.517 3.792-1.972 2.313-4.01 4.706-3.355 7.403.652 2.67 3.554 3.897 6.36 5.083 1.542.651 3.655 1.545 4.041 2.31.36.717-.19 2.851-.59 4.408-.726 2.811-1.548 5.999.261 8.17 1.732 2.073 4.848 1.944 7.858 1.822 1.71-.07 4.054-.168 4.793.398.72.55 1.187 2.776 1.527 4.4.61 2.91 1.24 5.92 3.728 7.063 2.544 1.175 5.35-.298 8.064-1.72 1.463-.766 3.468-1.818 4.311-1.637.872.185 2.268 1.973 3.287 3.279 1.842 2.361 3.747 4.801 6.49 4.801h.046c2.778-.03 4.646-2.532 6.454-4.95.987-1.322 2.34-3.132 3.196-3.332Z"/><path fill="#0bceb2" d="M135.223 107.7a5.607 5.607 0 0 0-5.074-8.45l-3.526-.003a7.575 7.575 0 0 0 .11-1.693c-.188-1.712-.686-6.222-4.445-7.884a6.181 6.181 0 0 0-2.532-.552q-.144 0-.287.007a6.004 6.004 0 0 0-3.442 1.333 6.53 6.53 0 0 0-2.207 5.82c.008.146.017.29.017.432v.493c-.523 1.062-2.03 3.422-2.562 4.254l-.027.042c-.308.092-.659.194-1.02.298a3.977 3.977 0 0 0-2.227-.68h-4a4.004 4.004 0 0 0-4 4v12a4.004 4.004 0 0 0 4 4h4a3.961 3.961 0 0 0 2.534-.93c.073.001.142.005.217.005.352 0 .77-.013 1.189-.026l.6-.018a6.76 6.76 0 0 0 1.831.824 4.002 4.002 0 0 0 1.032.137l12.003.003a5.81 5.81 0 0 0 5.848-5.756v-.094a5.671 5.671 0 0 0 1.146-3.42c0-.162-.007-.321-.02-.476a5.654 5.654 0 0 0 .881-3.036 5.111 5.111 0 0 0-.039-.63Zm-27.222 9.418h-4v-12h4Zm22.148-10.525s1.113.854 1.113 1.737a1.806 1.806 0 0 1-1.853 1.756 2.742 2.742 0 0 1 .992 1.756 1.805 1.805 0 0 1-1.848 1.759 3.065 3.065 0 0 1 .703 1.755 1.803 1.803 0 0 1-1.85 1.756l-11.996-.003c-.644-.173-1.12-.684-1.737-.903a2.998 2.998 0 0 0-.78-.062c-.269 0-.579.009-.892.018v-10.715a14.837 14.837 0 0 0 1.888-.619c.238-.502 3.948-5.935 3.948-7.007V96.71c0-1.096-.3-2.336.675-3.118a2.039 2.039 0 0 1 1.157-.472l.088-.002a2.262 2.262 0 0 1 .914.21c1.572.696 1.926 3.208 2.085 4.65a23.823 23.823 0 0 1-1.29 5.265l8.683.007a1.67 1.67 0 0 1 1.851 1.585 1.806 1.806 0 0 1-1.85 1.758Z"/><circle cx="2" cy="149.119" r="2" fill="#2d4356"/><path fill="#2d4356" d="M11 147.119H8a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4zm149 0h-3a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4z"/><circle cx="166" cy="149.119" r="2" fill="#2d4356"/><path fill="#0bceb2" d="M118.154 155.119h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm-60 0h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm45.846 0H64a2 2 0 0 0 0 4h15.94v2H72a2 2 0 0 0 0 4h25a2 2 0 0 0 0-4h-8.94v-2H104a2 2 0 0 0 0-4z"/><path fill="#2d4356" d="M150.721 147.119h-39.734l.14-12.338 15.307 3.372a1.846 1.846 0 0 0 .193.032 3.002 3.002 0 0 0 2.996-1.498 2.918 2.918 0 0 0-.348-3.356l-6.785-7.632-3.267-.004h-2.034l7.088 7.973-14.682-3.234a2.032 2.032 0 0 0-1.68.373 1.942 1.942 0 0 0-.76 1.513l-.146 12.933-16.497-21.92a15.311 15.311 0 0 1-2.934 2.699l15.872 21.087H60.56l16.196-21.521a18.709 18.709 0 0 1-2.847-2.816L57 145.256l-.147-12.936a1.942 1.942 0 0 0-.76-1.513 2.04 2.04 0 0 0-1.68-.373l-14.681 3.234 14.254-16.035a25.407 25.407 0 0 1-1.286-4.514l-18.004 20.255a2.902 2.902 0 0 0-.31 3.314 3.009 3.009 0 0 0 2.994 1.497 1.846 1.846 0 0 0 .194-.032l15.306-3.373.142 12.339H17.279a2.017 2.017 0 1 0 0 4H150.72a2.017 2.017 0 1 0 0-4zM114 26.119a3 3 0 1 0-3-3 3.003 3.003 0 0 0 3 3zm0-4.5a1.5 1.5 0 1 1-1.5 1.5 1.501 1.501 0 0 1 1.5-1.5zm26 29.378a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM6 36.119a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm136-35.5a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM30 50.997a2 2 0 1 0-2 2 2.002 2.002 0 0 0 2-2zm-3 0a1 1 0 1 1 1 1 1.001 1.001 0 0 1-1-1z"/><path fill="#0bceb2" d="m12.72 5.368 1.487-1.955-.939-.532-.954 2.19h-.032l-.97-2.175-.955.548 1.471 1.909v.031l-2.301-.297v1.064l2.317-.297v.031l-1.487 1.908.892.564 1.017-2.206h.031l.939 2.19.986-.563L12.72 5.9v-.031l2.362.282V5.087L12.72 5.4v-.032zM44.258 19.07l-.856 1.099.513.325.586-1.271h.018l.541 1.262.568-.325-.865-1.081v-.018l1.36.162v-.613l-1.36.181v-.018l.856-1.127-.541-.306-.55 1.261h-.018l-.558-1.252-.55.315.847 1.1v.018l-1.325-.172v.613l1.334-.171v.018zM164.724 30.786v-1.044l-2.317.307v-.031l1.459-1.918-.921-.521-.936 2.148h-.032l-.95-2.133-.938.537 1.444 1.872v.031l-2.257-.292v1.044l2.272-.291v.03l-1.459 1.872.875.553.999-2.164h.029l.921 2.148.968-.552-1.474-1.842v-.03l2.317.276zM80.004 5.407l1.258-1.655-.795-.45-.807 1.853h-.027l-.82-1.84-.809.464 1.245 1.615v.026l-1.946-.251v.9l1.959-.251v.026l-1.258 1.615.755.477.861-1.867h.026l.794 1.853.835-.476-1.271-1.589v-.026l1.998.238v-.9l-1.998.264v-.026z"/></svg>
                                                                    </p>
                                                                    <p class="fs-14 fw-medium mb-0">Assured Quality</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mt-sm-0 mt-3">
                                                                <div class="ecommerce-assurance">
                                                                    <p class="mb-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><linearGradient id="a" x1="32" x2="32" y1="63.723" y2=".835" gradientTransform="matrix(1 0 0 -1 0 63.89)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2ab793"/><stop offset="1" stop-color="#2c98b5"/></linearGradient><path fill="url(#a)" d="M53 26V13.4L32 1.9 11 13.4v25.2l21 11.6 21-11.5V33h-2v4.4L32 47.9l-13-7.2V19l12 6.6V45h2V25.6l18-9.9V26h2zm-3.1-12L32 23.9l-11.9-6.6 17.7-10L49.9 14zM35.6 6.1 18 16.2 14.1 14 32 4.1l3.6 2zM17 39.6l-4-2.2V15.7l4 2.2v21.7z"/><linearGradient id="b" x1="35.769" x2="35.769" y1="63.723" y2=".835" gradientTransform="matrix(1 0 0 -1 0 63.89)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2ab793"/><stop offset="1" stop-color="#2c98b5"/></linearGradient><path fill="url(#b)" d="M38 26v2h6c7.2 0 13 5.8 13 13s-5.8 13-13 13H16.4l5.3-5.3-1.4-1.4-7.8 7.7 8.8 7.7 1.3-1.5-6-5.2H44c8.3 0 15-6.7 15-15s-6.7-15-15-15h-6z"/></svg>
                                                                    </p>
                                                                    <p class="fs-14 fw-medium mb-0">
                                                                        Easy Exchange
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mt-sm-0 mt-3">
                                                                <div class="ecommerce-assurance">
                                                                    <p class="mb-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 168 168"><path fill="#2d4356" d="M56 93.534V80.415a1.862 1.862 0 0 1 .473-1.23l12.984-14.73a2.121 2.121 0 0 1 1.596-.705H107v18.13h-3.027a2 2 0 0 0-1.56.75A29.22 29.22 0 0 1 89.9 91.785a1.995 1.995 0 0 0-.937.617l-8.99 10.59a2.299 2.299 0 0 1-3.001.354c-1.639-1.12-1.74-1.597-1.425-3.029a10.313 10.313 0 0 1 2.33-4.47l4.987-5.749a1.998 1.998 0 0 0 .445-1.726l-1.85-8.706a2.869 2.869 0 0 0-1.852-1.834l-9.285-1.814a1.996 1.996 0 0 0-1.873.628l-6.613 7.378a2 2 0 0 0-.51 1.335v5.321a17.844 17.844 0 0 1 4-.846v-3.71l5.343-5.962 7.1 1.387 1.42 6.68-4.333 4.997a15.351 15.351 0 0 0-1.503 2.058A13.993 13.993 0 1 0 81 107.75c0-.206-.022-.406-.03-.61a6.051 6.051 0 0 0 2.051-1.558l8.638-10.174a33.3 33.3 0 0 0 13.256-9.528h2.098A3.998 3.998 0 0 0 111 89.75h12a4.005 4.005 0 0 0 4-4v-24a4.005 4.005 0 0 0-4-4h-12a3.987 3.987 0 0 0-3.444 2H71.053a6.124 6.124 0 0 0-4.597 2.06L53.472 76.54A5.86 5.86 0 0 0 52 80.415v17.407a18.127 18.127 0 0 1 4-4.288zm11 24.216a10 10 0 0 1 0-20 9.884 9.884 0 0 1 4.765 1.228c-.046.172-.094.343-.133.516-.846 3.86.981 5.72 3.075 7.15a6.172 6.172 0 0 0 2.284.955c0 .051.009.1.009.151a10.011 10.011 0 0 1-10 10zm44-56h12v24h-12zm-24.942-17.5a3 3 0 1 0-3-3 3.003 3.003 0 0 0 3 3zm0-4.5a1.5 1.5 0 1 1-1.5 1.5 1.501 1.501 0 0 1 1.5-1.5zm39-20.5a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm-64-6a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm74 18a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm-118 31a2 2 0 1 0-2 2 2.002 2.002 0 0 0 2-2zm-3 0a1 1 0 1 1 1 1 1.001 1.001 0 0 1-1-1z"/><path fill="#0bceb2" d="m45.641 41.261 1.487-1.955-.939-.532-.954 2.19h-.032l-.97-2.175-.955.548 1.471 1.909v.031l-2.301-.297v1.064l2.316-.297v.031l-1.486 1.908.891.564 1.018-2.206h.031l.939 2.19.986-.563-1.502-1.878v-.031l2.362.282V40.98l-2.362.312v-.031zM8.834 29.317l-.856 1.099.514.324.586-1.27h.017l.541 1.261.568-.324-.865-1.082v-.018l1.36.163v-.613l-1.36.18v-.018l.856-1.126-.54-.306-.55 1.261h-.018l-.559-1.253-.55.316.848 1.099v.018l-1.325-.171v.613l1.333-.171v.018zM159.058 61.963V60.92l-2.317.307v-.031l1.458-1.918-.921-.522-.936 2.148h-.031l-.951-2.133-.937.538 1.443 1.872v.031l-2.257-.292v1.043l2.272-.291v.031l-1.458 1.872.875.553.998-2.165h.03l.921 2.149.967-.552-1.473-1.842v-.031l2.317.276zM158.501 19.836l1.258-1.655-.794-.45-.808 1.853h-.027l-.82-1.84-.809.464 1.245 1.615v.026l-1.946-.251v.9l1.959-.252v.027l-1.258 1.615.755.477.861-1.867h.026l.795 1.853.834-.476-1.271-1.589v-.027l1.998.239v-.9l-1.998.264v-.026z"/><circle cx="2" cy="135.75" r="2" fill="#2d4356"/><path fill="#2d4356" d="M11 133.75H8a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4zm149 0h-3a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4z"/><circle cx="166" cy="135.75" r="2" fill="#2d4356"/><path fill="#0bceb2" d="M118.154 141.75h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm-60 0h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm45.846 0H64a2 2 0 0 0 0 4h15.94v2H72a2 2 0 0 0 0 4h25a2 2 0 0 0 0-4h-8.94v-2H104a2 2 0 0 0 0-4z"/><path fill="#2d4356" d="M150.721 133.75h-6.932a14 14 0 1 0-19.578 0H17.28a2.017 2.017 0 1 0 0 4H150.72a2.017 2.017 0 1 0 0-4Zm-26.721-10a10 10 0 1 1 10 10 10.011 10.011 0 0 1-10-10Z"/><path fill="#0bceb2" d="M26 133.75a2.002 2.002 0 0 1-2-2v-16a2.002 2.002 0 0 1 2-2h16a2.002 2.002 0 0 1 2 2v16a2.002 2.002 0 0 1-2 2h5.65a5.96 5.96 0 0 0 .35-2v-16a6.007 6.007 0 0 0-6-6H26a6.007 6.007 0 0 0-6 6v16a5.96 5.96 0 0 0 .35 2zm66 0a2.002 2.002 0 0 1-2-2v-16a2.002 2.002 0 0 1 2-2h16a2.002 2.002 0 0 1 2 2v16a2.002 2.002 0 0 1-2 2h5.65a5.96 5.96 0 0 0 .35-2v-16a6.007 6.007 0 0 0-6-6H92a6.007 6.007 0 0 0-6 6v16a5.96 5.96 0 0 0 .35 2z"/></svg>
                                                                    </p>
                                                                    <p class="fs-14 fw-medium mb-0">
                                                                        Hand Picked
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="mb-4">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <p class="fs-15 fw-medium mb-3">Product Details :</p>
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered text-nowrap">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row" class="fw-medium">
                                                                                    Brand
                                                                                </th>
                                                                                <td>Orange.Inc</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" class="fw-medium">
                                                                                    Model Name
                                                                                </th>
                                                                                <td>
                                                                                    Orange watch series 4
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" class="fw-medium">
                                                                                    Color
                                                                                </th>
                                                                                <td>
                                                                                    Raging Brass
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" class="fw-medium">
                                                                                    Style
                                                                                </th>
                                                                                <td>
                                                                                    GPS
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" class="fw-medium">
                                                                                    Special Features
                                                                                </th>
                                                                                <td>
                                                                                    Original Leather
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-4">
                                                                    <p class="fs-15 fw-medium mb-3">Features :</p>
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <ul class="mb-0">
                                                                                <li class="text-muted mb-3">
                                                                                    Dial height: 44 mm
                                                                                </li>
                                                                                <li class="text-muted mb-3">
                                                                                    Dial width: 35 mm
                                                                                </li>
                                                                                <li class="text-muted mb-3">
                                                                                    SpO2
                                                                                </li>
                                                                                <li class="text-muted mb-3">
                                                                                    30+ sports mode
                                                                                </li>
                                                                                <li class="text-muted mb-3">
                                                                                    Upto 12 days battery life
                                                                                </li>
                                                                                <li class="text-muted">
                                                                                    Water resistant
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <ul class="mb-0">
                                                                                <li class="text-muted mb-3">
                                                                                    Battery powered
                                                                                </li>
                                                                                <li class="text-muted mb-3">
                                                                                    Country of origin: USA
                                                                                </li>
                                                                                <li class="text-muted">
                                                                                    1-year warranty against manufacturing defects
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="mb-5">
                                                                <div class="offer-promotion mb-4 rounded-2 border border-warning border-opacity-10">
                                                                    <div class="d-xxl-flex d-lg-block d-sm-flex flex-wrap justify-content-between align-items-center gap-2">
                                                                        <div class="text-warning my-auto">Use Code <span class="promotion-code fw-medium">FIRBUY</span><a class="fs-10 text-warning ms-1 d-inline-block" href="javascript:void(0);">T&C.</a></div>
                                                                        <div class="my-2">
                                                                            <span class="bg-warning-transparent text-default fs-12 offer-details mb-0 rounded-2">Get it for <span class="text-success fw-medium">$1,099</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4">
                                                                    <p class="text-danger mb-0 fs-16">Only 5 left in stock.</p>
                                                                    <p class="mb-0 fs-12 lh-lg">Sold by <span class="text-primary me-1"><u>Regaltos PVT.LTD</u></span>and quality checked by <span class="text-primary"><u>Spruko Tchnologies</u>.</span></p>
                                                                </div>
                                                                <div class="mb-4">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item">
                                                                            <div class="lh-1">
                                                                                <span class="text-success fw-medium fs-14 d-flex align-items-center"><i class="ti ti-discount-2 fs-18 me-1"></i>3 Available offers</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="fs-12 text-default">
                                                                                <span class="text-success me-1 fw-medium">Bank Offer:</span><span class="flex-fill">5% off upto 500 on min purchase of $999<a href="javascript:void(0);" class="text-primary ms-1">View.</a></span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="fs-12 text-default">
                                                                                <span class="text-success me-1 fw-medium">Emi:</span><span class="flex-fill">No cost emi on selected bank card on min purchase of $1,499<a href="javascript:void(0);" class="text-primary ms-1">View.</a></span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item p-0">
                                                                            <ul class="collapse list-group" id="offers-more">
                                                                                <li class="list-group-item border-0 border-bottom">
                                                                                    <div class="fs-12 text-default">
                                                                                        <span class="text-success me-1 fw-medium">Free Delivery:</span><span class="flex-fill">Free delivery on first order<a href="javascript:void(0);" class="text-primary ms-1">View.</a></span>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item border-0">
                                                                                    <div class="fs-12 text-default">
                                                                                        <span class="text-success me-1 fw-medium">Promotion:</span><span class="flex-fill">Offer upto 30% on grosery on purchase of this item<a href="javascript:void(0);" class="text-primary ms-1">T&C.</a></span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="list-group-item border-top-0">
                                                                            <a class="text-success fs-12" data-bs-toggle="collapse" href="#offers-more" role="button" aria-expanded="false" aria-controls="offers-more"><u>More Offers</u></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="mb-4">
                                                                    <p class="mb-0 fw-medium">Returns:</p>
                                                                    <p class="fs-12 text-muted">Min 7 days return and exchange policy. Return Policies may vary based on products and promotions. For full details on our Returns Policies, please <a href="javascript:void(0);" class="text-primary">click here</a>․</p>
                                                                </div>
                                                                <div class="alert alert-light mb-4 fs-12 text-muted" role="alert">
                                                                    <a href="javascript:void(0);"><i class="ri-map-pin-line me-1 align-middle text-primary fs-15 d-inline-block"></i></a>Select location to find out estimated delivery date
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="mb-0">
                                                                <p class="fs-15 fw-medium mb-3">Reviews & Ratings :</p>
                                                                <div class="row gy-5">
                                                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
                                                                        <div class="d-flex align-items-top mb-3">
                                                                            <div class="me-2 lh-1">
                                                                                <i class="ri-star-fill fs-25 text-warning"></i>
                                                                            </div>
                                                                            <div class="lh-1">
                                                                                <p class="mb-1">4.2 out of 5</p>
                                                                                <p class="mb-0 text-muted fs-11">Based on (23,435) ratings</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-3">
                                                                            <div class="fs-12 me-2 fw-medium">5 <i class="ri-star-fill fs-10"></i></div>
                                                                            <div class="progress progress-xs flex-fill">
                                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-muted ms-2 fs-12">(10,893)</div>
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-3">
                                                                            <div class="fs-12 me-2 fw-medium">4 <i class="ri-star-fill fs-10"></i></div>
                                                                            <div class="progress progress-xs flex-fill">
                                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-muted ms-2 fs-12">(6,534)</div>
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-3">
                                                                            <div class="fs-12 me-2 fw-medium">3 <i class="ri-star-fill fs-10"></i></div>
                                                                            <div class="progress progress-xs flex-fill">
                                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-muted ms-2 fs-12">(4,342)</div>
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-3">
                                                                            <div class="fs-12 me-2 fw-medium">2 <i class="ri-star-fill fs-10"></i></div>
                                                                            <div class="progress progress-xs flex-fill">
                                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-muted ms-2 fs-12">(1,432)</div>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="fs-12 me-2 fw-medium">1 <i class="ri-star-fill fs-10"></i></div>
                                                                            <div class="progress progress-xs flex-fill">
                                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-muted ms-2 fs-12">(1,453)</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                                                        <div class="border rounded p-3">
                                                                            <div class="d-sm-flex d-block align-items-top mb-3">
                                                                                <div class="d-flex flex-fill">
                                                                                    <div class="me-2">
                                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                                            <img src="assets/images/faces/15.jpg" alt="">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="lh-1 me-2">
                                                                                        <p class="mb-1 fw-medium fs-14">Alex Carey</p>
                                                                                        <div class="mb-1">
                                                                                            <i class="ri-star-s-fill text-warning align-middle fs-12"></i>
                                                                                            <i class="ri-star-s-fill text-warning align-middle fs-12"></i>
                                                                                            <i class="ri-star-s-fill text-warning align-middle fs-12"></i>
                                                                                            <i class="ri-star-s-fill text-warning align-middle fs-12"></i>
                                                                                            <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                                                        </div>
                                                                                        <div class="fs-11 text-muted">
                                                                                            Reviewed on 24 nov,2022
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                                                    <span class="badge bg-success">Verified Purchase</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ps-sm-4 ps-0 mb-3">
                                                                                <p class="fw-medium mb-1 ps-2">Wonderful product&#128512;</p>
                                                                                <p class="mb-0 fs-12 text-muted ps-2">Really this product is very good quality and best for daily use... It supports Spo2.. Very well.. </p>
                                                                            </div>
                                                                            <div class="product-images ps-sm-4 ps-0">
                                                                                <div class="row">
                                                                                    <div class="col-xl-6">
                                                                                        <div class="products-review-images">
                                                                                            <a href="javascript:void(0);">
                                                                                                <img src="assets/images/ecommerce/png/13.png" alt="">
                                                                                            </a>
                                                                                            <a href="javascript:void(0);">
                                                                                                <img src="assets/images/ecommerce/png/15.png" alt="">
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                                        <button class="btn btn-sm btn-light me-2">Report abuse</button>
                                                                                        <button class="btn btn-sm btn-icon btn-primary-light me-2">
                                                                                            <i class="ri-thumb-up-line"></i>
                                                                                        </button>
                                                                                        <button class="btn btn-sm btn-icon btn-primary-light">
                                                                                            <i class="ri-thumb-down-line"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

        
        <!-- Footer Start -->
<footer class="footer mt-auto py-3 bg-white text-center">
    <div class="container">
        <span class="text-muted"> Copyright © <span id="year"></span> <a
                href="javascript:void(0);" class="text-dark fw-medium">Udon</a>.
            Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                <span class="fw-medium text-primary text-decoration-underline">Spruko</span>
            </a> All
            rights
            reserved
        </span>
    </div>
</footer>
<!-- Footer End -->
        <div class="modal fade" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" class="form-control border-end-0" placeholder="Search Anything ..."
                        aria-label="Search Anything ..." aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button"
                        id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

    
<!-- Scroll To Top -->
<div class="scrollToTop">
    <span class="arrow"><i class="ti ti-arrow-narrow-up fs-20"></i></span>
</div>
<div id="responsive-overlay"></div>
<!-- Scroll To Top -->

<!-- Popper JS -->
<script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Defaultmenu JS -->
<script src="assets/js/defaultmenu.min.js"></script>

<!-- Node Waves JS-->
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- Sticky JS -->
<script src="assets/js/sticky.js"></script>

<!-- Simplebar JS -->
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/js/simplebar.js"></script>

<!-- Color Picker JS -->
<script src="assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>


    
<!-- Custom-Switcher JS -->
<script src="assets/js/custom-switcher.min.js"></script>

    <!-- Swiper JS -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Internal Product-Details JS -->
    <script src="assets/js/product-details.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>