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

            <!--APP-CONTENT START-->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Cards</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Cards</li>
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
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <img src="assets/images/media/media-24.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium">Card title</h6>
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                </ul>
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="card-link text-primary">Card link</a>
                                    <a href="javascript:void(0);" class="card-link text-secondary d-inline-block">Another link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <img src="assets/images/media/media-22.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium">Card title</h6>
                                    <p class="card-text text-muted">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                                    <a href="javascript:void(0);" class="btn btn-primary">Read More</a>
                                </div>
                                <div class="card-footer">
                                    <span class="card-text">Last updated 3 mins ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <img src="assets/images/media/media-23.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <h6 class="mb-3">Only Card Body:</h6>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Featured</div>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title fw-medium">Special title treatment</h6>
                                    <p class="card-text">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                                    <a href="javascript:void(0);" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium mb-2">Card title</h6>
                                    <p class="card-subtitle mb-3 text-muted">Card subtitle</p>
                                    <p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration many variations of passages of Lorem Ipsum available there are so many ways to solve but the majority.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0);" class="card-link text-danger m-1">Buy Now</a>
                                    <a href="javascript:void(0);" class="card-link text-success m-1"><u>Review</u></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->
                    
                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-12">
                            <h6 class="mb-3">Using Grid Markups:</h6>
                            <div class="row row-cols-12">
                                <div class="col">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <img src="assets/images/media/media-25.jpg" class="card-img mb-3" alt="...">
                                            <h6 class="card-title fw-medium">Product A</h6>
                                            <p class="card-text">With supporting text below as a natural
                                                lead-in to additional content.</p>
                                            <a href="javascript:void(0);" class="btn btn-primary">Purchase</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <img src="assets/images/media/media-26.jpg" class="card-img mb-3" alt="...">
                                            <h6 class="card-title fw-medium">Product B</h6>
                                            <p class="card-text">With supporting text below as a natural
                                                lead-in to additional content.</p>
                                            <a href="javascript:void(0);" class="btn btn-secondary">Purchase</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <img src="assets/images/media/media-27.jpg" class="card-img mb-3" alt="...">
                                            <h6 class="card-title fw-medium">Product-C</h6>
                                            <p class="card-text">With supporting text below as a natural
                                                lead-in to additional content.</p>
                                            <a href="javascript:void(0);" class="btn btn-light">Purchase</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-12">
                            <div class="row">
                                <h6 class="mb-3">Quote:</h6>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                          <blockquote class="blockquote mb-0 text-center">
                                            <h6>The greatest glory in living lies not in never falling, but in rising every time we fall.</h6>
                                            <footer class="blockquote-footer mt-2 fs-14">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                          </blockquote>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-xl-12">
                                    <h6 class="mb-3">List Group:</h6>
                                    <div class="row">
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="card custom-card overflow-hidden">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">An item</li>
                                                    <li class="list-group-item">A second item</li>
                                                    <li class="list-group-item">A third item</li>
                                                    <li class="list-group-item">A fourth item</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="card custom-card overflow-hidden">
                                                <div class="card-header">
                                                    Featured
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">An item</li>
                                                    <li class="list-group-item">A second item</li>
                                                    <li class="list-group-item">A third item</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="card custom-card overflow-hidden">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">An item</li>
                                                    <li class="list-group-item">A second item</li>
                                                    <li class="list-group-item">A third item</li>
                                                </ul>
                                                <div class="card-footer border-top-0">
                                                    Card footer
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3-->
                    <h6 class="mb-3">Card Header & Footer:</h6>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card text-center">
                                <div class="card-header border-bottom-0 pb-0">
                                    <span class="ms-auto shadow-lg fs-17"><i class="ri-heart-fill text-danger"></i></span>
                                </div>
                                <div class="card-body pt-1">
                                    <span class="avatar avatar-xl avatar-rounded me-2 mb-2">
                                        <img src="assets/images/faces/5.jpg" alt="img">
                                    </span>
                                    <div class="fw-medium fs-16">Sasha Max</div>
                                    <p class="mb-4 text-muted fs-11">Web Developer</p>
                                    <div class="btn-list">
                                        <button class="btn btn-icon btn-facebook btn-wave">
                                            <i class="ri-facebook-line"></i>
                                        </button>
                                        <button class="btn btn-icon btn-twitter btn-wave">
                                            <i class="ri-twitter-line"></i>
                                        </button>
                                        <button class="btn btn-icon btn-instagram btn-wave">
                                            <i class="ri-instagram-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card border border-primary">
                                <div class="card-body">
                                    <svg class="footer-card-icon my-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#C6CDD1" d="M19 21H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2z"/><path fill="#C6CDD1" d="M11 1H3a2 2 0 0 0-2 2v8h10V1z"/><path fill="#A1ABB2" d="M21 11V3a2 2 0 0 0-2-2h-8v10h10z"/><path fill="#878A8F" d="M1 11v8a2 2 0 0 0 2 2h8V11H1z"/><path fill="#797D82" d="M11 11v10h8a2 2 0 0 0 2-2v-8H11z"/><path fill="#FFF" d="M14 6h5v1h-5z"/><path d="M19 20.75H3a2 2 0 0 1-2-2V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-.25a2 2 0 0 1-2 2z" opacity=".1"/><circle cx="16" cy="16" r="7" fill="#136ad0"/><path d="M16 22.75c-3.08 0-5.704-1.97-6.696-4.713C10.18 20.907 12.85 23 16 23s5.82-2.094 6.696-4.963C21.704 20.781 19.08 22.75 16 22.75z" opacity=".1"/><path fill="#FFF" d="M16 9.25c3.08 0 5.704 1.97 6.696 4.713C21.82 11.093 19.15 9 16 9s-5.82 2.094-6.696 4.963C10.296 11.219 12.92 9.25 16 9.25z" opacity=".2"/><path fill="#FFF" d="M4 6h5v1H4z"/><path fill="#FFF" d="M6 4h1v5H6zM13 14h6v1h-6zM13 17h6v1h-6zM4.379 15.086l.707-.707 3.535 3.535-.707.707z"/><path fill="#FFF" d="m4.379 17.914 3.535-3.535.707.707-3.535 3.535z"/><path fill="#FFF" d="M19 1H3a2 2 0 0 0-2 2v.25a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2V3a2 2 0 0 0-2-2z" opacity=".2"/><linearGradient id="a" x1="14.367" x2="19.862" y1="14.367" y2="19.862" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#3E2723" stop-opacity=".2"/><stop offset="1" stop-color="#3E2723" stop-opacity=".02"/></linearGradient><path fill="url(#a)" d="M19 14v1h-6l2 2h4v1h-6l4.766 4.766a7.014 7.014 0 0 0 5-5L19 14z"/><linearGradient id="b" x1="-.448" x2="23.366" y1="5.662" y2="16.766" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#FFF" stop-opacity=".2"/><stop offset="1" stop-color="#FFF" stop-opacity="0"/></linearGradient><path fill="url(#b)" d="M21 11.11V3a2 2 0 0 0-2-2H3a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8.11A6.974 6.974 0 0 0 16 23c3.86 0 7-3.14 7-7a6.974 6.974 0 0 0-2-4.89z"/></svg>
                                    <p class="mb-0 mt-3 fs-20 fw-medium lh-1">
                                        Calculations
                                    </p>
                                </div>
                                <div class="card-footer">
                                    Lorem Ipsum is therefore always free from repetition, injected humour.
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="assets/images/faces/11.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Adam Smith</div>
                                            <p class="mb-0 text-muted fs-11">28 Years, Male</p>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    If you are going to use, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators.
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between">
                                        <div class="fs-semibold fs-14">28,Nov 2023</div>
                                        <div class="fw-medium text-success">Assistant Professor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header border-bottom-0 pb-0">
                                    <div>
                                        <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                        <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                        <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                        <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                        <span class="text-black op-1"><i class="bi bi-star-fill"></i></span>
                                        <p class="d-block text-muted mb-0 fs-12 fw-medium">1 year ago</p>
                                    </div>    
                                </div>
                                <div class="card-body pt-3">
                                    <div class="fw-medium fs-15 mb-2">Very Great!</div>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-sm avatar-rounded me-2">
                                            <img src="assets/images/faces/12.jpg" alt="img">
                                        </span>
                                        <div class="fw-medium fs-14">Corey Anderson</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card text-center">
                                <div class="card-header">
                                    <div class="card-title">Featured</div>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title fw-medium mb-2">Breaking News !</h6>
                                    <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <a href="javascript:void(0);" class="btn btn-primary mt-2">Read More</a>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary mt-2">Close</a>
                                </div>
                                <div class="card-footer text-muted">
                                    11.32pm
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="d-flex w-100">
                                        <div class="me-4">
                                            <span class="avatar avatar-lg avatar-rounded">
                                                <img src="assets/images/faces/12.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between w-100 flex-wrap">
                                            <div class="me-3">
                                                <p class="text-muted mb-0">Posts</p>
                                                <p class="fw-medium fs-16 mb-0">25</p>
                                            </div>
                                            <div class="me-3">
                                                <p class="text-muted mb-0">Followers</p>
                                                <p class="fw-medium fs-16 mb-0">1253</p>
                                            </div>
                                            <div class="me-3">
                                                <p class="text-muted mb-0">Following</p>
                                                <p class="fw-medium fs-16 mb-0">367</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="fw-medium fs-16">Angelina Caprio</div>
                                    <div class="text-muted fs-11 mb-4">Angular Developer</div>
                                    <p class="fs-14 fw-medium mb-1">About:</p>
                                    <p class="mb-0 card-text">Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <img src="assets/images/media/media-4.jpg" class="card-img mb-3" alt="...">
                                    <h6 class="card-title fw-medium mb-3">Mountains<span class="badge bg-primary float-end fs-10">New</span></h6>
                                    <p class="card-text">With supporting text below as a natural
                                        lead-in.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <img src="assets/images/media/media-9.jpg" class="card-img mb-3" alt="...">
                                    <h6 class="card-title fw-medium mb-3">Hills<span class="badge bg-secondary float-end fs-10">Hot</span></h6>
                                    <p class="card-text">With supporting text below as a natural
                                        lead-in.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <img src="assets/images/media/media-15.jpg" class="card-img mb-3" alt="...">
                                    <h6 class="card-title fw-medium mb-3">Nature<span class="badge bg-light text-dark float-end fs-10">Offer</span></h6>
                                    <p class="card-text">With supporting text below as a natural
                                        lead-in.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between border-bottom-0">
                                    <div class="card-title">
                                        Card With Collapse Button
                                    </div>
                                    <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="ri-arrow-down-s-line fs-18 collapse-open"></i>
                                        <i class="ri-arrow-up-s-line collapse-close fs-18"></i>
                                    </a>
                                </div>
                                <div class="collapse show border-top" id="collapseExample">
                                    <div class="card-body">
                                        <h6 class="card-text fw-medium">Collapsible Card</h6>
                                        <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Card With Close Button
                                    </div>
                                    <a href="javascript:void(0);" data-bs-toggle="card-remove">
                                        <i class="ri-close-line fs-18"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-text fw-medium">Closed Card</h6>
                                    <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Card With Fullscreen Button
                                    </div>
                                    <a href="javascript:void(0);" data-bs-toggle="card-fullscreen">
                                        <i class="ri-fullscreen-line"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-text fw-medium">FullScreen Card</h6>
                                    <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3-->

                    <!-- Start::row-4 -->
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="row">
                                <h6 class="mb-3">Mixins utilities:</h6>
                                <div class="col-xl-12">
                                    <div class="card border border-success mb-3">
                                        <div class="card-header bg-transparent border-bottom border-success">Header</div>
                                        <div class="card-body text-success">
                                            <h6 class="card-title fw-medium">Looking For Success?</h6>
                                            <p class="card-text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-top border-success">Footer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <h6 class="mb-3">Text Alignment:</h6>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="mb-2">
                                                <span class="avatar avatar-md">
                                                    <img src="assets/images/faces/15.jpg" alt="img">
                                                </span>
                                            </div>
                                            <h6 class="card-title fw-medium">Where it come from</h6>
                                            <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                                            <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card text-end custom-card">
                                        <div class="card-body">
                                            <div class="mb-2">
                                                <span class="avatar avatar-md">
                                                    <img src="assets/images/faces/11.jpg" alt="img">
                                                </span>
                                            </div>
                                            <h6 class="card-title fw-medium">What is special?</h6>
                                            <p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                            <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card text-center custom-card">
                                        <div class="card-body">
                                            <div class="mb-2">
                                                <span class="avatar avatar-md">
                                                    <img src="assets/images/faces/3.jpg" alt="img">
                                                </span>
                                            </div>
                                            <h6 class="card-title fw-medium">Why do we use it?</h6>
                                            <p class="card-text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                                            <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-4 -->

                    <!-- Start::row-5 -->
                    <div class="row">
                        <div class="col-xxl-6 col-xl-12">
                            <h6 class="mb-3">Using Utilities:</h6>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card w-75">
                                        <div class="card-header">
                                            <div class="card-title">Using Width 75%</div>
                                        </div> 
                                        <div class="card-body">
                                            <div class="card-text">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nostrum omnis excepturi consequatur molestiae 
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="javascript:void(0);" class="btn btn-primary d-grid">Button</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card w-50">
                                        <div class="card-header">
                                            <div class="card-title">Using Width 50%</div>
                                        </div> 
                                        <div class="card-body">
                                            <div class="card-text">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="javascript:void(0);" class="btn btn-primary d-grid">Button</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-12">
                            <h6 class="mb-3">Navigation:</h6>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-header p-4 pt-3 ps-2">
                                            <ul class="nav nav-tabs card-header-tabs ms-1">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="true" href="javascript:void(0);">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="javascript:void(0);">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Special title treatment</h6>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card text-center custom-card">
                                        <div class="card-header">
                                            <ul class="nav nav-pills card-header-pills ms-1">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="javascript:void(0);">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="javascript:void(0);">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Special title treatment</h6>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-5 -->

                    <!-- Start::row-6 -->
                    <h6 class="mb-3">Image Caps:</h6>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <img src="assets/images/media/media-29.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium">Image caps are widely used in Blog's</h6>
                                    <p class="card-text mb-3 text-muted">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium">Image caps are widely used in Blog's</h6>
                                    <p class="card-text mb-3 text-muted">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound.</p>
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <img src="assets/images/media/media-28.jpg" class="card-img-bottom" alt="...">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text mb-1 text-muted">This is a wider card with supporting text below
                                        as
                                        a natural lead-in to additional content. This content is a
                                        little
                                        bit longer.</p>
                                </div>
                                <img src="assets/images/media/media-31.jpg" class="card-img rounded-0" alt="...">
                                <div class="card-footer">
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <img src="assets/images/media/media-32.jpg" class="card-img-top" alt="...">
                                <div class="card-header">
                                    <div class="card-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text mb-1 text-muted">This is a wider card with supporting text below
                                        as
                                        a natural lead-in to additional content. This content is a
                                        little
                                        bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium mb-1">Image caps are widely used in Blog's</h6>
                                    <p class="card-text mb-1 text-muted">This is a wider card with supporting text below
                                        as
                                        a natural lead-in to additional content. This content is a
                                        little
                                        bit longer.</p>
                                </div>
                                <img src="assets/images/media/media-30.jpg" class="card-img rounded-0" alt="...">
                                <div class="card-body">
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text mb-1 text-muted">This is a wider card with supporting text below
                                        as
                                        a natural lead-in to additional content. This content is a
                                        little
                                        bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <img src="assets/images/media/media-33.jpg" class="card-img-bottom" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- End::row-6 -->

                    <!-- Start::row-7 -->
                    <h6 class="mb-3">Image Overlays:</h6>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card overlay-card">
                                <img src="assets/images/media/media-35.jpg" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0">
                                    <div class="card-header">
                                        <div class="card-title text-fixed-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                    </div>
                                    <div class="card-body text-fixed-white">
                                        <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                        <div class="card-text">Last updated 3 mins ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card overlay-card">
                                <img src="assets/images/media/media-36.jpg" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                    <div class="card-body text-fixed-white">
                                        <div class="card-text text-fixed-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                        <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                        <div class="card-text">Last updated 3 mins ago</div>
                                    </div>
                                    <div class="card-footer text-fixed-white">Last updated 3 mins ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card overlay-card">
                                <img src="assets/images/media/media-34.jpg" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0">
                                    <div class="card-header">
                                        <div class="card-title text-fixed-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                    </div>
                                    <div class="card-body text-fixed-white">
                                        <div class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                    </div>
                                    <div class="card-footer text-fixed-white">Last updated 3 mins ago</div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <!-- End::row-7 -->

                    <!-- Start::row-8 -->
                    <h6 class="mb-3">Horizontal Cards:</h6>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="assets/images/media/media-37.jpg" class="img-fluid rounded-start h-100 w-100" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-header">
                                            <div class="card-title">Horizontal Cards</div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Horizontal cards are awesome!</h6>
                                            <p class="card-text">This is a wider card with supporting text below as a natural .</p>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-header">
                                            <div class="card-title">Horizontal Cards</div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Horizontal cards are awesome!</h6>
                                            <p class="card-text mb-3">This is a wider card with suppo    rting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="assets/images/media/media-38.jpg" class="img-fluid rounded-end h-100 w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium mb-2">Horizontal Cards</h6>
                                            <div class="card-title mb-3">Horizontal cards are awesome!</div>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="assets/images/media/media-39.jpg" class="img-fluid rounded-end h-100 w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-8 -->

                    <!-- Start::row-9 -->
                    <h6 class="mb-3">Background Colored Cards:</h6>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-primary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="assets/images/faces/11.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Adam Smith</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Finished by today</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="assets/images/faces/12.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Elisha Corner</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Completed 24 days back</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-warning">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="assets/images/faces/1.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Sarah Alina</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Completed today</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-info">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="assets/images/faces/8.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Monica Karen</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Pending from 4 days</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-success">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="assets/images/faces/5.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Samantha sid</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">In leave for 1 month</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-danger">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="assets/images/faces/14.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Sebastien steyn</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Completed by Tomorrow</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-light">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="assets/images/faces/13.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Jacob Smith</div>
                                            <p class="mb-0 text-muted op-7 fs-12">Finished by 24,Nov</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-default"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-dark">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="assets/images/faces/16.jpg" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium text-white">Pope Adam</div>
                                            <p class="mb-0 op-7 fs-12 text-white">Completed on 24,may</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-9 -->

                    <!-- Start::row-10 -->
                    <h6 class="mb-3">Colored Border Cards:</h6>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card border border-primary custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Home Page Design
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-primary fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-primary-transparent">Framework</span>
                                        <span class="badge bg-secondary-transparent">Angular</span>
                                        <span class="badge bg-info-transparent">Php</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/2.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/8.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/2.jpg" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-secondary custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Landing Page Design
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-secondary fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-danger-transparent">Laravel</span>
                                        <span class="badge bg-teal-transparent">Codeignitor</span>
                                        <span class="badge bg-success-transparent">Php</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/4.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/6.jpg" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-warning custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Update New Project
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-warning fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-warning-transparent">Html</span>
                                        <span class="badge bg-secondary-transparent">Bootstrap</span>
                                        <span class="badge bg-info-transparent">React</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/1.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/12.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/10.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/16.jpg" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-info custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">New Project Discussion
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-info fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-info-transparent">React</span>
                                        <span class="badge bg-primary-transparent">Typescript</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/3.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/14.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/11.jpg" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-danger custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Recent Projects Testing
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-danger fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-primary-transparent">Ui</span>
                                        <span class="badge bg-secondary-transparent">Angular</span>
                                        <span class="badge bg-info-transparent">Java</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/15.jpg" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-success custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">About Us Page redesign
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-success fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-danger-transparent">Html</span>
                                        <span class="badge bg-warning-transparent">Symphony</span>
                                        <span class="badge bg-success-transparent">Php</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/6.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/9.jpg" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-light custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">New Employees
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-default fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-warning-transparent">Html</span>
                                        <span class="badge bg-info-transparent">Cake Php</span>
                                        <span class="badge bg-success-transparent">React</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/5.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/6.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/7.jpg" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-dark custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Terminated Employees
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-dark fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-primary-transparent">Angular</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/9.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/11.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/12.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="assets/images/faces/15.jpg" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-10 -->

                    <!-- Start::row-11 -->
                    <h6 class="mb-3">Card Groups With Footer:</h6>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card-group">
                                <div class="card custom-card">
                                    <img src="assets/images/media/media-40.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title fw-medium">Delecious food is a blessing!</h6>
                                        <p class="card-text">This is a wider card with supporting text below as
                                            a
                                            natural lead-in to additional content. This content is a little bit
                                            longer.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <img src="assets/images/media/media-42.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title fw-medium">Writing is an art.</h6>
                                        <p class="card-text">This is a wider card with supporting text below as
                                            a
                                            natural lead-in to additional content. This card has even longer
                                            content
                                            than the first to show that equal height action.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <img src="assets/images/media/media-41.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title fw-medium">Is office the best place to earn knowledge?</h6>
                                        <p class="card-text">This card has supporting text below as a natural
                                            lead-in to additional content.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-11 -->

                    <!-- Start::row-12 -->
                    <h6 class="mb-3">Grid Cards:</h6>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col">
                                    <div class="card custom-card">
                                        <img src="assets/images/media/media-44.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Morphology of a typical fruit.</h6>
                                            <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-card">
                                        <img src="assets/images/media/media-43.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Research improves ability & agility !</h6>
                                            <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-card">
                                        <img src="assets/images/media/media-45.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Most tropical areas are suitable</h6>
                                            <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-card">
                                        <img src="assets/images/media/media-46.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Are They seasonal fruits ?</h6>
                                            <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <!-- End::row-12 -->

                    <!-- Start::row-13 -->
                    <h6 class="mb-3">Cards With Link:</h6>
                    <div class="row">
                        <div class="col-xxl-3 col-xl-12">
                            <div class="card custom-card">
                                <a href="javascript:void(0);" class="card-anchor"></a>
                                <img src="assets/images/media/media-23.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium mb-0">Forests are Awesome.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6">
                            <div class="row">
                                <div class="col-xxl-12 col-xl-12">
                                    <div class="card custom-card card-bg-primary">
                                        <a href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="card-body">
                                          <blockquote class="blockquote mb-0 text-center">
                                            <h6 class="text-fixed-white">The best and most beautiful things in the world cannot be seen or even touched — they must be felt with the heart..</h6>
                                            <footer class="blockquote-footer mt-3 fs-14 text-fixed-white op-7">Someone famous as <cite title="Source Title">-Helen Keller</cite></footer>
                                          </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-5 col-xl-12">
                                    <div class="card custom-card">
                                        <a href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <span class="avatar avatar-md">
                                                        <img src="assets/images/faces/15.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="card-text mb-0 fs-14 fw-medium">Atharva Simon.</p>
                                                    <div class="card-title text-muted fs-12 mb-0">Correspondent Professor</div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card border border-info">
                                        <a href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xl">
                                                        <img src="assets/images/faces/8.jpg" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="card-text text-info mb-1 fs-14 fw-medium">Alicia Keys.</p>
                                                    <div class="card-title fs-12 mb-1">Department Of Commerce</div>
                                                    <div class="card-title text-muted fs-11 mb-0">24 Years, Female</div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7 col-xl-12">
                                    <div class="card custom-card">
                                        <a href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="row g-0">
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h6 class="card-title mb-2 fw-medium">Fox is Beautiful ?</h6>
                                                    <p class="card-text mb-0">This is a wild animal with supporting tactics and are very efficient at kill,they are very Dangerous.</p>
                                                    <p class="mb-0 card-text">
                                                        Fox lives mainly in forests and are well known for their hunting skills.
                                                    </p>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="assets/images/media/media-39.jpg" class="img-fluid rounded-sm-end rounded-bottom h-100 w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <a href="javascript:void(0);" class="card-anchor"></a>
                                <img src="assets/images/media/media-47.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium">Most tropical areas are suitable</h6>
                                    <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-13 -->

                </div>
            </div>
            <!--APP-CONTENT CLOSE-->

        
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

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>