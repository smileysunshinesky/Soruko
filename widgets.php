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

<link rel="stylesheet" href="assets/libs/jsvectormap/css/jsvectormap.min.css">

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
                        <h1 class="page-title fw-medium fs-18 mb-2">Widgets</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Widgets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Widgets</li>
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
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="avatar bg-primary-transparent svg-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.5-6H14a.5.5 0 1 0 0-1h-4a2.5 2.5 0 1 1 0-5h1V6h2v2h2.5v2H10a.5.5 0 1 0 0 1h4a2.5 2.5 0 1 1 0 5h-1v2h-2v-2H8.5v-2z"/></svg>
                                    </div>
                                    <div>
                                        <div id="Revenue-chart"></div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="text-muted mb-1">Total Balance</p>
                                    <h4 class="fw-medium mb-0">$3,425.00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="avatar bg-info-transparent svg-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M5 3v16h16v2H3V3h2zm15.293 3.293l1.414 1.414L16 13.414l-3-2.999-4.293 4.292-1.414-1.414L13 7.586l3 2.999 4.293-4.292z"/></svg>
                                    </div>
                                    <div>
                                        <div id="Net-profit"></div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="text-muted mb-1">Total Spending</p>
                                    <h4 class="fw-medium mb-0">$2,423.00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="avatar bg-danger-transparent svg-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2 20h20v2H2v-2zm2-8h2v7H4v-7zm5 0h2v7H9v-7zm4 0h2v7h-2v-7zm5 0h2v7h-2v-7zM2 7l10-5 10 5v4H2V7zm2 1.236V9h16v-.764l-8-4-8 4zM12 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                    </div>
                                    <div>
                                        <div id="Orders"></div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="text-muted mb-1">Total Saved</p>
                                    <h4 class="fw-medium mb-0">$5,125.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Sales statistics
                                </div>
                                <a class="fw-medium link-primary text-decoration-underline" href="javascript:void(0);">Advanced Report</a>
                            </div>
                            <div class="card-body">
                                <div id="sales-statistics"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header">
                                <div class="card-title">
                                    Budget
                                </div>
                            </div>
                            <div class="card-body p-0 pb-5 position-relative">
                                <div class="p-3 border-bottom border-block-end-dashed">
                                    <div class="d-flex justify-content-between">
                                        <div>Profit</div>
                                        <div class="fs-15">$4567.34</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="text-muted">$1870.01 of $2,305.54</div>
                                        <div class="fw-medium">Over</div>
                                    </div>
                                </div>
                                <div class="p-3 border-bottom border-block-end-dashed">
                                    <div class="d-flex justify-content-between">
                                        <div>Profit</div>
                                        <div class="fs-15">$2668.3435</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="text-muted">$44860.00 of $12,525.10</div>
                                        <div class="fw-medium">Over</div>
                                    </div>
                                </div>
                                <div class="p-3 mb-2">
                                    <div class="d-flex">
                                        <div class="bg-primary svg-white avatar avatar-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                height="24">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M12 2a6 6 0 0 1 6 6v1h4v2h-1.167l-.757 9.083a1 1 0 0 1-.996.917H4.92a1 1 0 0 1-.996-.917L3.166 11H2V9h4V8a6 6 0 0 1 6-6zm6.826 9H5.173l.667 8h12.319l.667-8zM13 13v4h-2v-4h2zm-4 0v4H7v-4h2zm8 0v4h-2v-4h2zm-5-9a4 4 0 0 0-3.995 3.8L8 8v1h8V8a4 4 0 0 0-3.8-3.995L12 4z" />
                                            </svg>
                                        </div>
                                        <div class="ms-3 my-auto">
                                            <div class="fw-medium ">Groceries</div>
                                            <p class="text-muted fs-13 ">Food & Dinning</p>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="fw-medium text-success fs-15">$2600.00</div>
                                            <div class="text-muted fs-12 text-end">Availabel</div>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-2">
                                        <div class="bg-secondary svg-white avatar avatar-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="24" height="24">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M4 6.414L.757 3.172l1.415-1.415L5.414 5h15.242a1 1 0 0 1 .958 1.287l-2.4 8a1 1 0 0 1-.958.713H6v2h11v2H5a1 1 0 0 1-1-1V6.414zM6 7v6h11.512l1.8-6H6zm-.5 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm12 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                            </svg>
                                        </div>
                                        <div class="ms-3 my-auto">
                                            <div class="fw-medium ">Shoping</div>
                                            <p class="text-muted fs-13 ">styles & passion</p>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="fw-medium text-success fs-15">$3650.00</div>
                                            <div class="text-muted fs-12 text-end">Availabel</div>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-2">
                                        <div class="svg-white bg-danger svg-white avatar avatar-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="24" height="24">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M18.159 10A6.002 6.002 0 0 0 6.84 10H18.16zM6.583 13a6.002 6.002 0 0 0 11.08 2.057h3.304A9.003 9.003 0 0 1 8.612 20.12c-2.744 1.491-5.113 1.8-6.422.491-1.344-1.34-.628-4.851 1.313-8.373a23.624 23.624 0 0 1 2.499-3.665c.359-.433.735-.852 1.125-1.252-.275.055-1.88.851-3.412 2.714a9.004 9.004 0 0 1 9.468-7.009c3.095-1.402 5.974-1.726 7.192-.51 1.125 1.123 1.062 2.995.125 5.242-.01.021-.018.043-.027.064A8.96 8.96 0 0 1 21.5 12c0 .338-.019.672-.055 1H6.583zm1.422 6.799a9.03 9.03 0 0 1-3.972-4.742c-1.161 2.282-1.46 4.19-.469 5.18.813.812 2.438.624 4.438-.436l.003-.002zM20.172 7.292a8.19 8.19 0 0 1 .015-.034c.75-1.622.813-2.994.125-3.806-.869-.868-2.54-.75-4.522.168a9.032 9.032 0 0 1 4.382 3.672z" />
                                            </svg>
                                        </div>
                                        <div class="ms-3 my-auto">
                                            <div class="fw-medium ">Browser</div>
                                            <p class="text-muted fs-13 ">Bills</p>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="fw-medium text-success fs-15">$8520.00</div>
                                            <div class="text-muted fs-12 text-end">Availabel</div>
                                        </div>
                                    </div>
                                </div>
                                <div id="budget-chart" class="budget-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="row">
					<div class="col-xxl-3 col-sm-6">
						<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex align-items-top justify-content-between mb-4">
									<div class="flex-fill d-flex align-items-top">
										<div class="me-2">
											<span class="avatar avatar-md text-primary border bg-light"><i class="ti ti-users fs-18"></i></span>
										</div>
										<div class="flex-fill">
											<p class="fw-medium fs-14 mb-0">Total Candidates</p>
											<p class="mb-0 text-muted fs-12 op-7">Magna sit elitr kasd consetetur.</p>
										</div>
									</div>
									<div>
										<a href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-icon btn-sm btn-light"><i class="ti ti-dots"></i></a>
										<ul class="dropdown-menu">
											<li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
											<li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
											<li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
										</ul>
									</div>
								</div>
								<div class="d-flex align-items-center mb-0">
									<p class="mb-0 fs-20 fw-medium">2,460</p>
									<span class="text-muted ms-2"><i class="ti ti-trending-up align-middle text-success me-1 d-inline-block"></i>2.5%</span>
								</div>
								<div class="d-flex align-items-center">
									<div class="flex-fill">
										<div class="progress progress-xs">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 14%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="ms-3">
										<span class="fs-12 text-muted">14% Target</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-sm-6">
						<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex align-items-top justify-content-between mb-4">
									<div class="flex-fill d-flex align-items-top">
										<div class="me-2">
											<span class="avatar avatar-md text-secondary border bg-light"><i class="ti ti-user-circle fs-18"></i></span>
										</div>
										<div class="flex-fill">
											<p class="fw-medium fs-14 mb-0">Recruiters</p>
											<p class="mb-0 text-muted fs-12 op-7">Elitr at gubergren sit sed.</p>
										</div>
									</div>
									<div>
										<a href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-icon btn-sm btn-light"><i class="ti ti-dots"></i></a>
										<ul class="dropdown-menu">
											<li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
											<li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
											<li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
										</ul>
									</div>
								</div>
								<div class="d-flex align-items-center mb-0">
									<p class="mb-0 fs-20 fw-medium">7,539</p>
									<span class="text-muted ms-2"><i class="ti ti-trending-up align-middle text-success me-1 d-inline-block"></i>3.1%</span>
								</div>
								<div class="d-flex align-items-center">
									<div class="flex-fill">
										<div class="progress progress-xs">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="ms-3">
										<span class="fs-12 text-muted">55% Target</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-sm-6">
						<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex align-items-top justify-content-between mb-4">
									<div class="flex-fill d-flex align-items-top">
										<div class="me-2">
											<span class="avatar avatar-md text-success border bg-light"><i class="ti ti-view-360 fs-18"></i></span>
										</div>
										<div class="flex-fill">
											<p class="fw-medium fs-14 mb-0">Page Views</p>
											<p class="mb-0 text-muted fs-12 op-7">Sed duo ut sanctus gubergren.</p>
										</div>
									</div>
									<div>
										<a href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-icon btn-sm btn-light"><i class="ti ti-dots"></i></a>
										<ul class="dropdown-menu">
											<li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
											<li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
											<li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
										</ul>
									</div>
								</div>
								<div class="d-flex align-items-center mb-0">
									<p class="mb-0 fs-20 fw-medium">13,693</p>
									<span class="text-muted ms-2"><i class="ti ti-trending-up align-middle text-success me-1 d-inline-block"></i>5.4%</span>
								</div>
								<div class="d-flex align-items-center">
									<div class="flex-fill">
										<div class="progress progress-xs">
											<div class="progress-bar bg-success" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="ms-3">
										<span class="fs-12 text-muted">24% Target</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-sm-6">
						<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex align-items-top justify-content-between mb-4">
									<div class="flex-fill d-flex align-items-top">
										<div class="me-2">
											<span class="avatar avatar-md text-indigo border bg-light"><i class="ti ti-view-360 fs-18"></i></span>
										</div>
										<div class="flex-fill">
											<p class="fw-medium fs-14 mb-0">Total Subscriptions</p>
											<p class="mb-0 text-muted fs-12 op-7">Invidunt magna voluptua.</p>
										</div>
									</div>
									<div>
										<a href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-icon btn-sm btn-light"><i class="ti ti-dots"></i></a>
										<ul class="dropdown-menu">
											<li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
											<li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
											<li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
										</ul>
									</div>
								</div>
								<div class="d-flex align-items-center mb-0">
									<p class="mb-0 fs-20 fw-medium">1,116</p>
									<span class="text-muted ms-2"><i class="ti ti-trending-down align-middle text-danger me-1 d-inline-block"></i>3.2%</span>
								</div>
								<div class="d-flex align-items-center">
									<div class="flex-fill">
										<div class="progress progress-xs">
											<div class="progress-bar bg-indigo" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="ms-3">
										<span class="fs-12 text-muted">67% Target</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!-- End::row-2 -->

                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-xl-3 border-end border-inline-end-dashed">
                                        <div class="d-flex flex-wrap align-items-top p-4">
                                            <div class="me-3 lh-1">
                                                <span class="avatar avatar-md avatar-rounded bg-primary-transparent">
                                                    <i class="ti ti-package fs-18"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <h5 class="fw-medium mb-1">45,280</h5>
                                                <p class="text-muted mb-0 fs-12">Total Products</p>
                                            </div>
                                            <div>
                                                <span class="badge bg-success-transparent"><i class="ri-arrow-up-s-line align-middle me-1 d-inline-block"></i>1.31%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 border-end border-inline-end-dashed">
                                        <div class="d-flex flex-wrap align-items-top p-4">
                                            <div class="me-3 lh-1">
                                                <span class="avatar avatar-md avatar-rounded bg-secondary-transparent">
                                                    <i class="ti ti-rocket fs-18"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <h5 class="fw-medium mb-1">10,500</h5>
                                                <p class="text-muted mb-0 fs-12">Total Sales</p>
                                            </div>
                                            <div>
                                                <span class="badge bg-danger-transparent"><i class="ri-arrow-down-s-line align-middle me-1"></i>1.14%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 border-end border-inline-end-dashed">
                                        <div class="d-flex flex-wrap align-items-top p-4">
                                            <div class="me-3 lh-1">
                                                <span class="avatar avatar-md avatar-rounded bg-success-transparent">
                                                    <i class="ti ti-wallet fs-18"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <h5 class="fw-medium mb-1">$69,270</h5>
                                                <p class="text-muted mb-0 fs-12">Income</p>
                                            </div>
                                            <div>
                                                <span class="badge bg-success-transparent"><i class="ri-arrow-up-s-line align-middle me-1 d-inline-block"></i>2.58%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="d-flex flex-wrap align-items-top p-4">
                                            <div class="me-3 lh-1">
                                                <span class="avatar avatar-md avatar-rounded bg-warning-transparent">
                                                    <i class="ti ti-packge-import fs-18"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <h5 class="fw-medium mb-1">12,088</h5>
                                                <p class="text-muted mb-0 fs-12">Total Orders</p>
                                            </div>
                                            <div>
                                                <span class="badge bg-success-transparent"><i class="ri-arrow-up-s-line align-middle me-1 d-inline-block"></i>12.05%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card card-bg-primary text-fixed-white">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-top p-4 flex-wrap">
                                    <div class="me-3 lh-1">
                                        <span class="avatar avatar-md avatar-rounded bg-white text-primary shadow-sm">
                                            <i class="ti ti-coin fs-18"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <h5 class="fw-medium mb-1 text-fixed-white">$21,520</h5>
                                        <p class="op-7 mb-0 fs-12">Expenses</p>
                                    </div>
                                    <div>
                                        <span class="badge bg-success"><i class="ri-arrow-up-s-line align-middle me-1 d-inline-block"></i>14.69%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-3 -->

                <!-- Start::row-4 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3">
                                        <span class="avatar avatar-sm shadow-sm avatar-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-info" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M94.3 71.4c-.5-3.6-2.3-6.4-5.4-8.2-1.4-.8-3.1-1.4-4.7-2.1.2-.1.3-.3.4-.3 7.9-4.1 7.2-16.3 1.5-20.5-2.3-1.7-4.9-2.8-7.7-3.4-2-.4-3.9-.7-6-1.1 0-3.5.1-8.5.1-12.4H65c0 3.8-.1 8.7-.1 12.1H59c0-3.5 0-8.3.1-12.1h-7.4c0 4-.1 8.8-.1 12.3-5.1 0-10-.1-15-.1 0 2.7 0 5.3-.1 7.9h3c.9 0 1.9 0 2.8.1 2.6.2 3.9 1.6 3.9 4.2l-.3 31.9c0 2.3-1 3.3-3.3 3.3h-5c-.5 3-1 5.9-1.6 8.9 5 .1 10 .1 15 .2 0 3.8 0 8.7-.1 12.7h7.4c0-4 .1-8.7.1-12.5 2.1.1 4 .1 5.9.2 0 3.8-.1 8.4-.1 12.3h7.4c0-4 .1-8.7.1-12.4.3 0 .5-.1.6-.1 3.5-.6 7.2-.9 10.6-1.7 4.5-1.1 8.1-3.7 9.9-8.2 1.7-3.6 2-7.2 1.5-11zM59 44.3c4.6 0 9.1-.4 13.4 1.5 2.8 1.2 4.2 3.5 4 6.3-.2 2.9-1.9 5-4.8 6-4.1 1.3-8.3 1.3-12.7 1.1 0-5 .1-9.8.1-14.9zm16.2 37.1c-4.1 1.8-8.5 1.8-12.8 1.9-1.2 0-2.4-.1-3.8-.1.1-5.5.1-10.9.2-16.4 5.6 0 11.2-.4 16.5 1.9 2.7 1.2 4.3 3.3 4.3 6.4 0 3.1-1.6 5.1-4.4 6.3z"/></svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between fs-14 mb-2">
                                            <span class="flex-fill">Bitcoin</span>
                                            <span class="ms-1 text-muted">BTC</span>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <h5 class="fw-medium mb-0">$12,800</h5>
                                            <div class="flex-fill">
                                                <span class="ms-2 badge bg-success-transparent rounded-pill">+25.8%</span>
                                            </div>
                                            <div id="btcCoin"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3">
                                        <span class="avatar avatar-sm shadow-sm avatar-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-success" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M65.2 87.2v22.7l28.1-39.5zM92.3 63.1l-27.1-45v32.7zM65.2 53.3v28l26.9-15.7zM35.8 63.1l27-45v32.7zM62.8 53.3v28L35.9 65.6zM62.8 87.2v22.7L34.7 70.4z"/></svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between fs-14 mb-2">
                                            <span class="flex-fill">Ethereum</span>
                                            <span class="ms-1 text-muted">ETH</span>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <h5 class="fw-medium mb-0">$18,600</h5>
                                            <div class="flex-fill">
                                                <span class="ms-2 badge bg-success-transparent rounded-pill">+12.9%</span>
                                            </div>
                                            <div id="ethCoin"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3">
                                        <span class="avatar avatar-sm shadow-sm avatar-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-danger" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M20.8 89.3c1.4-4.1 2.7-7.9 4.1-11.8.1-.4.9-.7 1.3-.7 2.3-.1 4.7 0 7 0H79c1.2 0 1.8-.4 2.1-1.5 2.5-7.5 5.2-15 7.8-22.5.1-.4.2-.8.4-1.4H33.8c1.4-4.2 2.8-8.1 4.1-12 .1-.3.7-.6 1.1-.6 1.4-.1 2.8 0 4.2 0 18.8 0 37.6.1 56.3-.1 5.6-.1 11.6 4.3 9.2 12.5-1.8 6.1-4.1 12.1-6.2 18.2-.7 2.1-1.4 4.1-2.1 6.2-2.6 7.2-7.9 11.6-15.2 13.6-.7.2-1.4.2-2.1.2H22.3c-.4-.1-.8-.1-1.5-.1z"/><path fill="#fff" d="M55.9 58.1c-1.4 4-2.8 7.7-4.2 11.4-.1.3-.7.5-1 .5H19.2c-.1 0-.3-.1-.6-.2 1.3-3.7 2.6-7.3 4-10.9.1-.3.7-.7 1-.7 10.7-.1 21.4-.1 32.3-.1z"/></svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between fs-14 mb-2">
                                            <span class="flex-fill">Dash</span>
                                            <span class="ms-1 text-muted">DSH</span>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <h5 class="fw-medium mb-0">$16,580</h5>
                                            <div class="flex-fill">
                                                <span class="ms-2 badge bg-success-transparent rounded-pill">+15.7%</span>
                                            </div>
                                            <div id="dshCoin"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3">
                                        <span class="avatar avatar-sm shadow-sm avatar-rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-warning" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M63.8 22.6c3.7-.1 7.2.6 10.2 2.7 1.4.9 2.4.8 3.6-.5 2.4-2.6 5-5 7.5-7.6.9-.9 1.8-1.5 2.9-.2 1.1 1.1.8 2-.2 2.9-2.6 2.6-5 5.2-7.6 7.8-1.1 1.1-1.3 1.9-.5 3.3 5.8 10.4 2.9 22.5-8.6 28.1-1.1.5-2.3.8-3.5 1-1.4.3-1.9 1-1.9 2.5.1 3 .1 6 0 8.9 0 1.6.5 2.3 2.1 2.7 6.2 1.5 10.6 5.2 13.3 10.9 2.6 5.5 1.9 15.4-3.8 21.3-4.8 4.9-13.2 6.9-19.5 4.4-7.5-3-12.1-9.6-12.2-17.5-.1-9.6 5.1-16.4 14.3-19 1.4-.4 2.2-1 2.1-2.5-.1-3.4 0-6.8-.2-10.2 0-.6-1.1-1.4-1.8-1.6-6-1.6-10.4-5.2-12.9-10.8-5.6-13 4.3-27.4 16.7-26.6zM79 92.8c0-7.9-6.9-15.1-14.5-15.1-8-.1-15.3 7-15.4 15-.1 7.9 7.3 15.6 14.9 15.5 8.1-.1 15-7.2 15-15.4zM49.3 41.1c0 8.6 6.6 15.6 14.9 15.6 7.7 0 14.8-7.1 14.8-15.1 0-7.4-5.5-15.2-14.7-15-8.4.1-14.9 6.3-15 14.5z"/></svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between fs-14 mb-2">
                                            <span class="flex-fill">Golem</span>
                                            <span class="ms-1 text-muted">GLM</span>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <h5 class="fw-medium mb-0">$12,545</h5>
                                            <div class="flex-fill">
                                                <span class="ms-2 badge bg-success-transparent rounded-pill">+12.1%</span>
                                            </div>
                                            <div id="glmCoin"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-4 -->

                <!-- Start::row-5 -->
                <div class="row">
                    <div class="col-xxl-2 col-xl-4 col-lg-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-top justify-content-between">
                                            <div class="flex-fill">
                                                <p class="mb-0 text-muted">Total Candidates</p>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-5 fw-medium">9,231</span>
                                                    <span class="fs-12 text-success ms-2"><i class="ti ti-trending-up me-1 d-inline-block"></i>0.5%</span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-primary-transparent text-primary fs-18">
                                                    <i class="bi bi-people-fill fs-16"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-top justify-content-between">
                                            <div class="flex-fill">
                                                <p class="mb-0 text-muted">Total Subscriptions</p>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-5 fw-medium">3,571</span>
                                                    <span class="fs-12 text-success ms-2"><i class="ti ti-trending-up me-1 d-inline-block"></i>0.42%</span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-secondary-transparent text-secondary fs-18">
                                                    <i class="bi bi-person-lines-fill fs-16"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-top justify-content-between">
                                            <div class="flex-fill">
                                                <p class="mb-0 text-muted">Page Views</p>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-5 fw-medium">1,986</span>
                                                    <span class="fs-12 text-success ms-2"><i class="ti ti-trending-up me-1 d-inline-block"></i>5.1%</span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-success-transparent text-success fs-18">
                                                    <i class="bi bi-eye-fill fs-16"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-top justify-content-between">
                                            <div class="flex-fill">
                                                <p class="mb-0 text-muted">New Registrations</p>
                                                <div class="d-flex align-items-center">
                                                    <span class="fs-5 fw-medium">773</span>
                                                    <span class="fs-12 text-success ms-2"><i class="ti ti-trending-up me-1 d-inline-block"></i>3.5%</span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-info-transparent text-info fs-18">
                                                    <i class="bi bi-file-earmark-text-fill fs-16"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-8 col-lg-12">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-top mb-2">
                                            <div class="flex-fill">
                                                <p class="mb-0 text-muted">Total Recruiters</p>
                                            </div>
                                            <div class="ms-2">
                                                <span class="avatar avatar-md bg-info fs-18">
                                                    <i class="bi bi-person-square"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="fs-5 fw-medium">9,231</span>
                                        <span class="fs-12 text-success ms-1"><i class="ti ti-trending-up me-1 d-inline-block"></i>0.5%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card card-bg-primary text-fixed-white">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top mb-2">
                                            <div class="flex-fill">
                                                <p class="mb-0 op-7">Premium Recruiters</p>
                                            </div>
                                            <div class="ms-2">
                                                <span class="avatar avatar-md bg-secondary shadow-sm fs-18">
                                                    <i class="bi bi-person-square"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="fs-5 fw-medium">9,231</span>
                                        <span class="fs-12 op-7 ms-1"><i class="ti ti-trending-up me-1 d-inline-block"></i>0.5%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="p-3">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-md avatar-rounded bg-secondary me-2">
                                                    <i class="bi bi-receipt fs-16"></i>
                                                </span>
                                                <p class="mb-0 flex-fill text-muted">Total Revenue</p>
                                            </div>
                                            <span class="fs-5 fw-medium">$12,897</span>
                                            <span class="fs-12 text-success ms-1"><i class="ti ti-trending-up me-1 d-inline-block"></i>3.5%</span>
                                        </div>
                                        <div id="totalRevenue1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <span class="avatar avatar-md avatar-rounded bg-success me-2">
                                                <i class="bi bi-people fs-16"></i>
                                            </span>
                                            <p class="mb-0 flex-fill text-muted">Active Members</p>
                                        </div>
                                        <span class="fs-5 fw-medium">$12,897</span>
                                        <span class="fs-12 text-success ms-1"><i class="ti ti-trending-up me-1 d-inline-block"></i>3.5%</span>
                                        <div class="fw-normal d-flex align-items-center mb-2 mt-3">
                                            <p class="mb-0 flex-fill">Active Candidates</p>
                                            <span>3,274</span>
                                        </div>
                                        <div class="progress progress-xs mb-4">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="fw-normal d-flex align-items-center mb-2">
                                            <p class="mb-0 flex-fill">Active Recruiters</p>
                                            <span>8,726</span>
                                        </div>
                                        <div class="progress progress-xs mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="d-grid">
                                            <a href="javascript:void(0);" class="text-primary">View Details <i class="ti ti-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-7 col-lg-7">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-fill d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar rounded-2 text-bg-primary fs-20"><i class="bi bi-people"></i></span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 ">Premium Recruiters</p>
                                                    <span class="text-success fs-12">7 New</span>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-primary-light rounded-pill btn-wave transform-arrow" data-bs-toggle="tooltip" aria-label="View All"><i class="bi bi-chevron-right transform-arrow"></i></a>
                                            </div>
                                        </div>
                                        <p class="mb-3 fs-5 fw-medium">386</p>
                                        <p class="mb-2 text-muted fw-normal">Recents</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="avatar-list-stacked">
                                                <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle overflow-hidden" data-bs-toggle="tooltip" aria-label="Mis x matched"><img src="assets/images/faces/2.jpg" alt="img" class="w-100"></a>
                                                <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle overflow-hidden" data-bs-toggle="tooltip" aria-label="Barbel Bob"><img src="assets/images/faces/12.jpg" alt="img" class="w-100"></a>
                                                <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle overflow-hidden" data-bs-toggle="tooltip" aria-label="Phan Rel"><img src="assets/images/faces/20.jpg" alt="img" class="w-100"></a>
                                                <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle overflow-hidden bg-primary text-fixed-white" data-bs-toggle="tooltip">+4</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-fill">
                                                <p class="mb-1 fs-5 fw-medium text-default">1,773</p>
                                                <p class="mb-0 text-muted">Active Members</p>
                                                <p class="mb-0 fs-11"><a href="javascript:void(0);" class="text-success text-decoration-underline">View All</a></p>
                                            </div>
                                            <div class="ms-2">
                                                <span class="avatar text-bg-info rounded-circle fs-20"><i class="bi bi-people-fill"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-fill">
                                                <p class="mb-1 fs-5 fw-medium text-default">116</p>
                                                <p class="mb-0 text-muted">Registrations</p>
                                                <p class="mb-0 fs-11"><a href="javascript:void(0);" class="text-success text-decoration-underline">View All</a></p>
                                            </div>
                                            <div class="ms-2">
                                                <span class="avatar text-bg-success rounded-circle fs-20"><i class="bi bi-file-earmark-text"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-5 col-lg-5">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card card-bg-primary">
                                    <div class="card-header justify-content-between border-bottom-0">
                                        <div class="card-title">
                                            Premium Recruiters
                                        </div>
                                        <div>
                                            <button class="btn btn-sm btn-icon text-bg-primary transform-arrow border-0"><i class="ti ti-chevron-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-top">
                                            <div class="flex-fill overflow-hidden">
                                                <p class="mb-2 lh-1 fs-5 fw-medium">9,231</p>
                                                <p class="mb-0 fs-12 text-fixed-white op-7">
                                                    <span><i class="bi bi-caret-up-fill"></i> 2.3%</span>
                                                    <span class="op-7 ms-1">From Last Month</span>
                                                </p>
                                            </div>
                                            <div>
                                                <span class="avatar avatar-sm bg-success avatar-rounded"><i class="bi bi-people-fill"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3">
                                            <div class="d-flex flex-wrap mb-1">
                                                <a href="javascript:void(0);" class="pe-2">
                                                    <span class="avatar border text-muted text-primary"><i class="ri-apple-fill fs-18"></i></span>
                                                </a>
                                                <div class="flex-fill">
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-1">
                                                        <span class="fw-medium">Apple</span>
                                                        <span class="text-success text-end"><i class="ti ti-trending-up fs-11 me-1 d-inline-block"></i>0.14%</span>
                                                    </div>
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between fs-12 mb-3">
                                                        <span class="text-muted">$12,289.44</span>
                                                        <span class="text-success text-end">+$1,780.80</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="flex-fill btn btn-sm btn-light me-2">Short</a>
                                                <a href="javascript:void(0);" class="flex-fill btn btn-sm btn-primary-light">Buy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3">
                                            <div class="d-flex flex-wrap mb-1">
                                                <a href="javascript:void(0);" class="pe-2">
                                                    <span class="avatar border text-muted text-primary"><i class="ri-bit-coin-fill fs-18"></i></span>
                                                </a>
                                                <div class="flex-fill">
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-1">
                                                        <span class="fw-medium">Bitcoin</span>
                                                        <span class="text-success text-end"><i class="ti ti-trending-up fs-11 me-1 d-inline-block"></i>2.14%</span>
                                                    </div>
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between fs-12 mb-3">
                                                        <span class="text-muted">$58,151.02</span>
                                                        <span class="text-success text-end">+$5,745.62</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="flex-fill btn btn-sm btn-light me-2">Short</a>
                                                <a href="javascript:void(0);" class="flex-fill btn btn-sm btn-primary-light">Buy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-5 -->

                <!-- Start::row-6 -->
                <div class="row">
                    <div class="col-xl-2">
                        <div class="card custom-card border border-primary bg-primary-transparent">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="avatar avatar-md bg-primary shadow-sm avatar-rounded mb-2">
                                        <i class="ri-briefcase-2-line fs-16"></i>
                                    </span>
                                    <p class="fs-14 fw-medium mb-2">Total Sales</p>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <h5 class="mb-0 fw-medium">15,800</h5>
                                        <span class="badge bg-success-transparent rounded-pill ms-1">+25.8%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="card custom-card border border-secondary bg-secondary-transparent">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="avatar avatar-md bg-secondary shadow-sm avatar-rounded mb-2">
                                        <i class="ri-bill-line fs-16"></i>
                                    </span>
                                    <p class="fs-14 fw-medium mb-2">Total Tax</p>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <h5 class="mb-0 fw-medium">$12,650</h5>
                                        <span class="badge bg-success-transparent rounded-pill ms-1">+12.2%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="card custom-card border border-info bg-info-transparent">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="avatar avatar-md bg-info shadow-sm avatar-rounded mb-2">
                                        <i class="ri-line-chart-line fs-16"></i>
                                    </span>
                                    <p class="fs-14 fw-medium mb-2">Total Expenses</p>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <h5 class="mb-0 fw-medium">$7,566</h5>
                                        <span class="badge bg-danger-transparent rounded-pill ms-1">-3.21%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="card custom-card border border-warning bg-warning-transparent">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="avatar avatar-md bg-warning shadow-sm avatar-rounded mb-2">
                                        <i class="ri-money-dollar-box-line fs-16"></i>
                                    </span>
                                    <p class="fs-14 fw-medium mb-2">Sales Profit</p>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <h5 class="mb-0 fw-medium">$7,474</h5>
                                        <span class="badge bg-success-transparent rounded-pill ms-1">+36.03%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="card custom-card border border-danger bg-danger-transparent">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="avatar avatar-md bg-danger shadow-sm avatar-rounded mb-2">
                                        <i class="ri-profile-line fs-16"></i>
                                    </span>
                                    <p class="fs-14 fw-medium mb-2">Opex Ratio</p>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <h5 class="mb-0 fw-medium">32%</h5>
                                        <span class="badge bg-success-transparent rounded-pill ms-1">+0.89%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="card custom-card border border-success bg-success-transparent">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="avatar avatar-md bg-success shadow-sm avatar-rounded mb-2">
                                        <i class="ri-wallet-2-line fs-16"></i>
                                    </span>
                                    <p class="fs-14 fw-medium mb-2">Total Income</p>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <h5 class="mb-0 fw-medium">$14,800</h5>
                                        <span class="badge bg-success-transparent rounded-pill ms-1">+7.45%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-6 -->

                <!-- Start:: row-7 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Users By Country
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap justify-content-between mb-5">
                                    <div class="me-5 d-flex align-items-center">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded bg-primary-transparent text-primary"><i class="ri-user-3-line fs-16"></i></span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="fs-18 mb-0 text-primary fw-medium">25,350</p>
                                            <span class="text-muted fs-12">This month</span>
                                        </div>
                                    </div>
                                    <div class="me-3 d-flex align-items-center">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded bg-light text-default"><i class="ri-user-3-line fs-16"></i></span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="fs-18 mb-0 fw-medium">19,200</p>
                                            <span class="text-muted fs-12">Last month</span>
                                        </div>
                                    </div>
                                    <div class="me-3 d-flex align-items-center">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded bg-success-transparent"><i class="ri-user-3-line fs-16"></i></span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="fs-18 mb-0 text-success fw-medium">1,24,890</p>
                                            <span class="text-muted fs-12">This Year</span>
                                        </div>
                                    </div>
                                    <div class="me-3 d-flex align-items-center">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded bg-secondary-transparent"><i class="ri-user-3-line fs-16"></i></span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="fs-18 mb-0 text-secondary fw-medium">97,799</p>
                                            <span class="text-muted fs-12">Last Year</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="h-100 my-auto">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div><i class="ri-checkbox-blank-circle-fill text-primary fs-8 me-1 align-middle d-inline-block"></i>Brazil</div>
                                                        <div>1,290</div>
                                                        <div class="text-success"><i class="ri-arrow-up-s-line align-middle me-1 d-inline-block"></i>2.90%</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div><i class="ri-checkbox-blank-circle-fill text-secondary fs-8 me-1 align-middle d-inline-block"></i>Greenland</div>
                                                        <div>2,596</div>
                                                        <div class="text-danger"><i class="ri-arrow-down-s-line align-middle me-1 d-inline-block"></i>1.1%</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div><i class="ri-checkbox-blank-circle-fill text-success fs-8 me-1 align-middle d-inline-block"></i>Russia</div>
                                                        <div>3,710</div>
                                                        <div class="text-success"><i class="ri-arrow-up-s-line align-middle me-1 d-inline-block"></i>0.8%</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div><i class="ri-checkbox-blank-circle-fill text-warning fs-8 me-1 align-middle d-inline-block"></i>Palestine</div>
                                                        <div>1,116</div>
                                                        <div class="text-danger"><i class="ri-arrow-up-s-line align-middle me-1 d-inline-block"></i>10.06%</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div><i class="ri-checkbox-blank-circle-fill text-danger fs-8 me-1 align-middle d-inline-block"></i>Canada</div>
                                                        <div>12,150</div>
                                                        <div class="text-success"><i class="ri-arrow-up-s-line align-middle me-1 d-inline-block"></i>9.05%</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                        <div id="users-map"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Recent Tasks
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown">
                                        View All<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Title</th>
                                                <th>Assigned To</th>
                                                <th>Progress</th>
                                                <th>Status</th>
                                                <th>Due Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Server Side Validation</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/10.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-xs bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                            +2
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary-transparent">In Progress</span>
                                                </td>
                                                <td>
                                                    17-04-2023
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Multipurpose Dashboard Template</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/6.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-transparent">Pending</span>
                                                </td>
                                                <td>
                                                    14-05-2023
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>Documentation Project</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/15.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/11.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-xs bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                            +1
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Completed</span>
                                                </td>
                                                <td>
                                                    20-04-2023
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>HR Management Template Design</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/5.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/12.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/13.jpg" alt="img">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary-transparent">In Progress</span>
                                                </td>
                                                <td>
                                                    29-05-2023
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>Developing Backend</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/1.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/9.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-xs bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                            +3
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary-transparent">In Progress</span>
                                                </td>
                                                <td>
                                                    25-05-2023
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06</td>
                                                <td>	Design New Dashboard Template</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/12.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="assets/images/faces/16.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-xs bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                            +3
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Completed</span>
                                                </td>
                                                <td>
                                                    04-05-2023
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-7 -->

                <!-- Start::row-8 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Recent Applicants</div>
                            </div>
                            <div class="card-body">
                                <div id="views"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Sessions By Device</div>
                            </div>
                            <div class="card-body">
                                <div id="sessionsByDevice"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Target Report</div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Details
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pb-3">
                                <div class="mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="float-end text-primary" fill="currentColor" width="36px" height="36px" viewBox="0 0 24 24"><path fill="currentColor" d="M11,9h4a1,1,0,0,0,0-2H13V6a1,1,0,0,0-2,0V7a3,3,0,0,0,0,6h2a1,1,0,0,1,0,2H9a1,1,0,0,0,0,2h2v1a1,1,0,0,0,2,0V17a3,3,0,0,0,0-6H11a1,1,0,0,1,0-2Zm1-8A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z"/></svg>
                                    <p class="text-primary fw-500 mb-2">Revenue by week</p>
                                    <h4 class="mb-2 fw-medium">$54,125.03</h4>
                                    <span class="text-danger me-1 fs-14"> - 1.3%<i class="ri-arrow-down-s-fill align-middle ms-1"></i>  </span>
                                    <span class="text-muted fs-12">33% of target reached</span>
                                </div>
                                <div id="report"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-8 -->

                <!-- Start::row-9 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Upcoming Events
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary-light">View All</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <nav class="nav nav-style-1 nav-pills mb-4 nav-justified" role="tablist">
                                    <a class="nav-link px-2 active" data-bs-toggle="tab" role="tab" aria-current="page" href="#mon" aria-selected="false" tabindex="-1">
                                        <span class="d-block mb-1">09</span>
                                        <span class="d-block mb-0 op-7 fs-12">Mon</span>
                                    </a>
                                    <a class="nav-link px-2" data-bs-toggle="tab" role="tab" href="#tue" aria-selected="false" tabindex="-1">
                                        <span class="d-block mb-1">10</span>
                                        <span class="d-block mb-0 op-7 fs-12">Tue</span>
                                    </a>
                                    <a class="nav-link px-2" data-bs-toggle="tab" role="tab" href="#wed" >
                                        <span class="d-block mb-1">11</span>
                                        <span class="d-block mb-0 op-7 fs-12">Wed</span>
                                    </a>
                                    <a class="nav-link px-2" data-bs-toggle="tab" role="tab" href="#thu" aria-selected="true">
                                        <span class="d-block mb-1">12</span>
                                        <span class="d-block mb-0 op-7 fs-12">Thu</span>
                                    </a>
                                    <a class="nav-link px-2" data-bs-toggle="tab" role="tab" href="#fri" aria-selected="true">
                                        <span class="d-block mb-1">13</span>
                                        <span class="d-block mb-0 op-7 fs-12">Fri</span>
                                    </a>
                                    <a class="nav-link px-2" data-bs-toggle="tab" role="tab" href="#sat" aria-selected="true">
                                        <span class="d-block mb-1">14</span>
                                        <span class="d-block mb-0 op-7 fs-12">Sat</span>
                                    </a>
                                    <a class="nav-link px-2" data-bs-toggle="tab" role="tab" href="#sun" aria-selected="true">
                                        <span class="d-block mb-1">15</span>
                                        <span class="d-block mb-0 op-7 fs-12">Sun</span>
                                    </a>
                                </nav>
                                <div class="tab-content pt-3 my-3">
                                    <div class="tab-pane show active border-0 p-0" id="mon" role="tabpanel">
                                        <ul class="list-unstyled mb-0 upcoming-events-list">
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Meeting with client</p>
                                                        <p class="mb-0 text-muted">Video Conference</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block "></i>9:00am - 10:00am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Lunch with team members</p>
                                                        <p class="mb-0 text-muted">Dolores Ait Labore Sit</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>12:00pm - 12:45am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">General board meeting</p>
                                                        <p class="mb-0 text-muted">Golden PArk</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4:00pm - 5:30pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Create New Registration Page</p>
                                                        <p class="mb-0 text-muted">2UA Project</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>5:00pm - 5:45pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="tue" role="tabpanel">
                                        <ul class="list-unstyled mb-0 upcoming-events-list">
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Meeting with client</p>
                                                        <p class="mb-0 text-muted">Video Conference</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>9:00am - 10:00am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Lunch with team members</p>
                                                        <p class="mb-0 text-muted">Dolores Ait Labore Sit</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>12:00pm - 12:45am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">General board meeting</p>
                                                        <p class="mb-0 text-muted">Golden PArk</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4:00pm - 5:30pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Create New Registration Page</p>
                                                        <p class="mb-0 text-muted">2UA Project</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>5:00pm - 5:45pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="wed" role="tabpanel">
                                        <ul class="list-unstyled mb-0 upcoming-events-list">
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Meeting with client</p>
                                                        <p class="mb-0 text-muted">Video Conference</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>9:00am - 10:00am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Lunch with team members</p>
                                                        <p class="mb-0 text-muted">Dolores Ait Labore Sit</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>12:00pm - 12:45am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">General board meeting</p>
                                                        <p class="mb-0 text-muted">Golden PArk</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4:00pm - 5:30pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Create New Registration Page</p>
                                                        <p class="mb-0 text-muted">2UA Project</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>5:00pm - 5:45pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="thu" role="tabpanel">
                                        <ul class="list-unstyled mb-0 upcoming-events-list">
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Meeting with client</p>
                                                        <p class="mb-0 text-muted">Video Conference</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>9:00am - 10:00am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Lunch with team members</p>
                                                        <p class="mb-0 text-muted">Dolores Ait Labore Sit</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>12:00pm - 12:45am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">General board meeting</p>
                                                        <p class="mb-0 text-muted">Golden PArk</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4:00pm - 5:30pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Create New Registration Page</p>
                                                        <p class="mb-0 text-muted">2UA Project</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>5:00pm - 5:45pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="fri" role="tabpanel">
                                        <ul class="list-unstyled mb-0 upcoming-events-list">
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Meeting with client</p>
                                                        <p class="mb-0 text-muted">Video Conference</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>9:00am - 10:00am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Lunch with team members</p>
                                                        <p class="mb-0 text-muted">Dolores Ait Labore Sit</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>12:00pm - 12:45am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">General board meeting</p>
                                                        <p class="mb-0 text-muted">Golden PArk</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4:00pm - 5:30pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Create New Registration Page</p>
                                                        <p class="mb-0 text-muted">2UA Project</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>5:00pm - 5:45pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="sat" role="tabpanel">
                                        <ul class="list-unstyled mb-0 upcoming-events-list">
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Meeting with client</p>
                                                        <p class="mb-0 text-muted">Video Conference</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>9:00am - 10:00am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Lunch with team members</p>
                                                        <p class="mb-0 text-muted">Dolores Ait Labore Sit</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>12:00pm - 12:45am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">General board meeting</p>
                                                        <p class="mb-0 text-muted">Golden PArk</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4:00pm - 5:30pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Create New Registration Page</p>
                                                        <p class="mb-0 text-muted">2UA Project</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>5:00pm - 5:45pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="sun" role="tabpanel">
                                        <ul class="list-unstyled mb-0 upcoming-events-list">
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Meeting with client</p>
                                                        <p class="mb-0 text-muted">Video Conference</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>9:00am - 10:00am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Lunch with team members</p>
                                                        <p class="mb-0 text-muted">Dolores Ait Labore Sit</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>12:00pm - 12:45am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">General board meeting</p>
                                                        <p class="mb-0 text-muted">Golden PArk</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4:00pm - 5:30pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top justify-conent-between">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-14">Create New Registration Page</p>
                                                        <p class="mb-0 text-muted">2UA Project</p>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>5:00pm - 5:45pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Timeline
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary-light btn-wave">View All</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled timeline-widget mb-0 my-3">
                                    <li class="timeline-widget-list">
                                        <div class="d-flex align-items-top">
                                            <div class="me-5 text-center">
                                                <span class="d-block fs-20 fw-medium">02</span>
                                                <span class="d-block fs-12 text-muted">Mon</span>
                                            </div>
                                            <div class="d-flex flex-wrap flex-fill align-items-center justify-content-between">
                                                <div>
                                                    <p class="mb-1 text-truncate timeline-widget-content text-wrap">You have an announcement - Ipsum Est Diam Eirmod</p>
                                                    <p class="mb-0 fs-12 lh-1 text-muted">10:00AM<span class="badge bg-primary-transparent ms-2">Announcement</span></p>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-widget-list">
                                        <div class="d-flex align-items-top">
                                            <div class="me-5 text-center">
                                                <span class="d-block fs-20 fw-medium">15</span>
                                                <span class="d-block fs-12 text-muted">Sun</span>
                                            </div>
                                            <div class="d-flex flex-wrap flex-fill align-items-center justify-content-between">
                                                <div>
                                                    <p class="mb-1 text-truncate timeline-widget-content text-wrap">National holiday - Vero Jayanti</p>
                                                    <p class="mb-0 fs-12 lh-1 text-muted"><span class="badge bg-warning-transparent">Holiday</span></p>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-widget-list">
                                        <div class="d-flex align-items-top">
                                            <div class="me-5 text-center">
                                                <span class="d-block fs-20 fw-medium">23</span>
                                                <span class="d-block fs-12 text-muted">Mon</span>
                                            </div>
                                            <div class="d-flex flex-wrap flex-fill align-items-center justify-content-between">
                                                <div>
                                                    <p class="mb-1 text-truncate timeline-widget-content text-wrap">John pup birthday - Team Member</p>
                                                    <p class="mb-4 fs-12 lh-1 text-muted">09:00AM<span class="badge bg-success-transparent ms-2">Birthday</span></p>
                                                    <p class="mb-1 text-truncate timeline-widget-content text-wrap">Amet sed no dolor kasd - Et Dolores Tempor Erat</p>
                                                    <p class="mb-0 fs-12 lh-1 text-muted">04:00PM<span class="badge bg-primary-transparent ms-2">Announcement</span></p>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-widget-list">
                                        <div class="d-flex align-items-top">
                                            <div class="me-5 text-center">
                                                <span class="d-block fs-20 fw-medium">31</span>
                                                <span class="d-block fs-12 text-muted">Tue</span>
                                            </div>
                                            <div class="d-flex flex-wrap flex-fill align-items-center justify-content-between">
                                                <div>
                                                    <p class="mb-1 text-truncate timeline-widget-content text-wrap">National Holiday - Dolore Ipsum</p>
                                                    <p class="mb-0 fs-12 lh-1 text-muted"><span class="badge bg-warning-transparent">Holiday</span></p>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Traffic Sources
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Browser</th>
                                                <th>Sessions</th>
                                                <th>Views</th>
                                                <th>Traffic</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-rounded avatar-sm p-2 bg-primary me-2">
                                                            <i class="ri-google-fill fs-18 text-fixed-white"></i>
                                                        </span>
                                                        <div class="fw-medium">Google</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span><i class="ri-arrow-up-s-fill me-1 text-success align-middle fs-18"></i>23,379</span>
                                                </td>
                                                <td>
                                                    <span>16,890</span>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-rounded avatar-sm p-2 bg-primary me-2">
                                                            <i class="ri-safari-line fs-18 text-fixed-white"></i>
                                                        </span>
                                                        <div class="fw-medium">Safari</div>
                                                    </div>

                                                </td>
                                                <td>
                                                    <span><i class="ri-arrow-up-s-fill me-1 text-success align-middle fs-18"></i>78,973</span>
                                                </td>
                                                <td>
                                                    <span>29,906</span>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-rounded avatar-sm p-2 bg-primary me-2">
                                                            <i class="ri-opera-fill fs-18 text-fixed-white"></i>
                                                        </span>
                                                        <div class="fw-medium">Opera</div>
                                                    </div>

                                                </td>
                                                <td>
                                                    <span><i class="ri-arrow-up-s-fill me-1 text-success align-middle fs-18"></i>12,457</span>
                                                </td>
                                                <td>
                                                    <span>8,674</span>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-rounded avatar-sm p-2 bg-primary me-2">
                                                            <i class="ri-edge-fill fs-18 text-fixed-white"></i>
                                                        </span>
                                                        <div class="fw-medium">Edge</div>
                                                    </div>

                                                </td>
                                                <td>
                                                    <span><i class="ri-arrow-up-s-fill me-1 text-success align-middle fs-18"></i>8,570</span>
                                                </td>
                                                <td>
                                                    <span>4,980</span>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 71%" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-rounded avatar-sm p-2 bg-primary me-2">
                                                            <i class="ri-firefox-fill fs-18 text-fixed-white"></i>
                                                        </span>
                                                        <div class="fw-medium">Firefox</div>
                                                    </div>

                                                </td>
                                                <td>
                                                    <span><i class="ri-arrow-up-s-fill me-1 text-success align-middle fs-18"></i>6,135</span>
                                                </td>
                                                <td>
                                                    <span>4,436</span>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-rounded avatar-sm p-2 bg-primary me-2">
                                                            <i class="ri-ubuntu-fill fs-18 text-fixed-white"></i>
                                                        </span>
                                                        <div class="fw-medium">Ubuntu</div>
                                                    </div>

                                                </td>
                                                <td>
                                                    <span><i class="ri-arrow-up-s-fill me-1 text-success align-middle fs-18"></i>4,789</span>
                                                </td>
                                                <td>
                                                    <span>2,447</span>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-9 -->

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


    <!-- Apex Charts JS -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- JSVector Maps JS -->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>

    <!-- JSVector Maps MapsJS -->
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!-- Index JS -->
    <script src="assets/js/widgets.js"></script>

    
<!-- Custom-Switcher JS -->
<script src="assets/js/custom-switcher.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>