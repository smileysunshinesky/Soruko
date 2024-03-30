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
                        <h1 class="page-title fw-medium fs-18 mb-2">Navs & Tabs</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Navs & Tabs</li>
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


                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Static Tabs
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs border-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="javascript:void(0);">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0);">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0);">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                   Static Pills
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="javascript:void(0);">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0);">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0);">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Default Nav Tabs
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3 border-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" href="#home1"
                                            aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" href="#about1"
                                            aria-selected="false">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" href="#service1"
                                            aria-selected="false">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" href="#license1"
                                            aria-selected="false">License</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active text-muted" id="home1" role="tabpanel">
                                        <b>Lorem Ipsum is simply dummy</b> text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries.
                                    </div>
                                    <div class="tab-pane text-muted" id="about1" role="tabpanel">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, <b>Making it over 2000
                                            years old</b>. Richard McClintock, a Latin professor at Hampden-Sydney
                                        College in Virginia, looked up one of the more obscure Latin words, consectetur.
                                    </div>
                                    <div class="tab-pane text-muted" id="service1" role="tabpanel">
                                        There are many variations of passages of <b>Lorem Ipsum available</b>, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to
                                        use a passage of Lorem Ipsum, you need to be sure there isn't anything.
                                    </div>
                                    <div class="tab-pane text-muted" id="license1" role="tabpanel">
                                        It is a long established fact that a reader will be distracted by the
                                        <b><i>Readable content</i></b> of a page when looking at its layout. The point
                                        of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                        letters, as opposed to using 'Content here, content here', making it look like
                                        readable English.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Justified Nav Tabs
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3 nav-justified nav-style-1 d-sm-flex d-block" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" href="#home1-justified"
                                            aria-selected="false">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" href="#about1-justified"
                                            aria-selected="false">About</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab"
                                            href="#service1-justified" aria-selected="true">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" href="#license1-justified"
                                            aria-selected="false">License</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane text-muted" id="home1-justified" role="tabpanel">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, <b>Making it over 2000
                                            years old</b>. Richard McClintock, a Latin professor at Hampden-Sydney
                                        College in Virginia, looked up one of the more obscure Latin words, consectetur.
                                    </div>
                                    <div class="tab-pane text-muted" id="about1-justified" role="tabpanel">
                                        <b>Lorem Ipsum is simply dummy</b> text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries.
                                    </div>
                                    <div class="tab-pane show active text-muted" id="service1-justified"
                                        role="tabpanel">
                                        There are many variations of passages of <b>Lorem Ipsum available</b>, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to
                                        use a passage of Lorem Ipsum, you need to be sure there isn't anything.
                                    </div>
                                    <div class="tab-pane text-muted" id="license1-justified" role="tabpanel">
                                        It is a long established fact that a reader will be distracted by the
                                        <b><i>Readable content</i></b> of a page when looking at its layout. The point
                                        of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                        letters, as opposed to using 'Content here, content here', making it look like
                                        readable English.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Basic Pill Tabs With Links
                                </div>
                            </div>
                            <div class="card-body">
                                <nav class="nav nav-style-1 nav-pills mb-3" role="tablist">
                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#nav-products" aria-selected="false">Products</a>
                                    <a class="nav-link active" data-bs-toggle="tab" role="tab" href="#nav-cart"
                                        aria-selected="true">Cart <span
                                            class="badge bg-secondary ms-1 rounded-pill">32</span></a>
                                    <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-orders"
                                        aria-selected="false">Orders <span
                                            class="badge bg-success ms-1 rounded-pill">4</span></a>
                                    <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-offers"
                                        aria-selected="false">Offers</a>
                                </nav>
                                <div class="tab-content">
                                    <div class="tab-pane text-muted" id="nav-products" role="tabpanel">
                                        How travel coupons make you a better lover. Why cultural solutions are the new
                                        black. Why mom was right about travel insurances. How family trip ideas can help
                                        you predict the future. <b>How carnival cruises make you a better lover</b>. Why
                                        you'll never succeed at daily deals. 11 ways cheapest flights can find you the
                                        love of your life. The complete beginner's guide to mission trips. If you read
                                        one article about cultural notes read this one. Why you shouldn't eat vacation
                                        package in bed.
                                    </div>
                                    <div class="tab-pane show active text-muted" id="nav-cart" role="tabpanel">
                                        How hotel deals can help you live a better life. <b>How celebrity cruises</b>
                                        aren't as bad as you think. How cultural solutions can help you predict the
                                        future. How to cheat at dog friendly hotels and get away with it. 17 problems
                                        with summer activities. How to cheat at travel agents and get away with it. How
                                        not knowing family trip ideas makes you a rookie. What everyone is saying about
                                        daily deals. How twitter can teach you about carnival cruises. How to start
                                        using cultural solutions.
                                    </div>
                                    <div class="tab-pane text-muted" id="nav-orders" role="tabpanel">
                                        Unbelievable healthy snack success stories. 12 facts about safe food handling
                                        tips that will impress your friends. Restaurant weeks by the numbers. Will
                                        mexican food ever rule the world? The 10 best thai restaurant youtube videos.
                                        How restaurant weeks can make you sick. The complete beginner's guide to cooking
                                        healthy food. Unbelievable food stamp success stories. How whole foods markets
                                        are making the world a better place. 16 things that won't happen in dish
                                        reviews.
                                    </div>
                                    <div class="tab-pane text-muted" id="nav-offers" role="tabpanel">
                                        Why delicious magazines are killing you. Why our world would end if restaurants
                                        disappeared. Why restaurants are on crack about restaurants. How restaurants are
                                        making the world a better place. 8 great articles about minute meals. Why our
                                        world would end if healthy snacks disappeared. Why the world would end without
                                        mexican food. The evolution of chef uniforms. How not knowing food processors
                                        makes you a rookie. Why whole foods markets beat peanut butter on pancakes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Justified Pill Tabs With Links
                                </div>
                            </div>
                            <div class="card-body">
                                <nav class="nav nav-style-6 nav-pills mb-3 nav-justified d-sm-flex d-block" role="tablist">
                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#nav-products-justified" aria-selected="false">Products</a>
                                    <a class="nav-link active" data-bs-toggle="tab" role="tab"
                                        href="#nav-cart-justified" aria-selected="true">Cart <span
                                            class="badge bg-info-transparent ms-1">Full</span></a>
                                    <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-orders-justified"
                                        aria-selected="false">Orders </a>
                                    <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-offers-justified"
                                        aria-selected="false">Offers <span
                                            class="badge bg-warning-transparent ms-1">7</span></a>
                                </nav>
                                <div class="tab-content">
                                    <div class="tab-pane text-muted" id="nav-products-justified" role="tabpanel">
                                        How hotel deals can help you live a better life. <b>How celebrity cruises</b>
                                        aren't as bad as you think. How cultural solutions can help you predict the
                                        future. How to cheat at dog friendly hotels and get away with it. 17 problems
                                        with summer activities. How to cheat at travel agents and get away with it. How
                                        not knowing family trip ideas makes you a rookie. What everyone is saying about
                                        daily deals. How twitter can teach you about carnival cruises. How to start
                                        using cultural solutions.
                                    </div>
                                    <div class="tab-pane show active text-muted" id="nav-cart-justified"
                                        role="tabpanel">
                                        How travel coupons make you a better lover. Why cultural solutions are the new
                                        black. Why mom was right about travel insurances. How family trip ideas can help
                                        you predict the future. <b>How carnival cruises make you a better lover</b>. Why
                                        you'll never succeed at daily deals. 11 ways cheapest flights can find you the
                                        love of your life. The complete beginner's guide to mission trips. If you read
                                        one article about cultural notes read this one. Why you shouldn't eat vacation
                                        package in bed.
                                    </div>
                                    <div class="tab-pane text-muted" id="nav-orders-justified" role="tabpanel">
                                        Unbelievable healthy snack success stories. 12 facts about safe food handling
                                        tips that will impress your friends. Restaurant weeks by the numbers. Will
                                        mexican food ever rule the world? The 10 best thai restaurant youtube videos.
                                        How restaurant weeks can make you sick. The complete beginner's guide to cooking
                                        healthy food. Unbelievable food stamp success stories. How whole foods markets
                                        are making the world a better place. 16 things that won't happen in dish
                                        reviews.
                                    </div>
                                    <div class="tab-pane text-muted" id="nav-offers-justified" role="tabpanel">
                                        Why delicious magazines are killing you. Why our world would end if restaurants
                                        disappeared. Why restaurants are on crack about restaurants. How restaurants are
                                        making the world a better place. 8 great articles about minute meals. Why our
                                        world would end if healthy snacks disappeared. Why the world would end without
                                        mexican food. The evolution of chef uniforms. How not knowing food processors
                                        makes you a rookie. Why whole foods markets beat peanut butter on pancakes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Vertical alignment with lists
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <ul class="nav nav-tabs flex-column nav-style-4" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" role="tab"
                                                    aria-current="page" href="#home-vertical"
                                                    aria-selected="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab"
                                                    aria-current="page" href="#about-vertical"
                                                    aria-selected="true">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab"
                                                    aria-current="page" href="#services-vertical"
                                                    aria-selected="true">Services</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab"
                                                    aria-current="page" href="#contacts-vertical"
                                                    aria-selected="true">Contacts</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="tab-content mt-2 mt-xl-0">
                                            <div class="tab-pane show active text-muted" id="home-vertical"
                                                role="tabpanel">
                                                How hotel deals can help you live a better life. <b>How celebrity
                                                    cruises</b> aren't as bad as you think. How cultural solutions
                                                can help you predict the future. How to cheat at dog friendly hotels
                                                and get away with it. 17 problems with summer activities. How to
                                                cheat at travel agents and get away with it. How not knowing family
                                                trip ideas makes you a rookie. What everyone is saying about daily
                                                deals.
                                            </div>
                                            <div class="tab-pane text-muted" id="about-vertical"
                                                role="tabpanel">
                                                How travel coupons make you a better lover. Why cultural solutions
                                                are the new black. Why mom was right about travel insurances. How
                                                family trip ideas can help you predict the future. <b>How carnival
                                                    cruises make you a better lover</b>. Why you'll never succeed at
                                                daily deals. 11 ways cheapest flights can find you the love of your
                                                life. The complete beginner's guide to mission trips.
                                            </div>
                                            <div class="tab-pane text-muted" id="services-vertical"
                                                role="tabpanel">
                                                Unbelievable healthy snack success stories. 12 facts about safe food
                                                handling tips that will impress your friends. Restaurant weeks by
                                                the numbers. Will mexican food ever rule the world? The 10 best thai
                                                restaurant youtube videos. How restaurant weeks can make you sick.
                                                The complete beginner's guide to cooking healthy food. Unbelievable
                                                food stamp success stories.
                                            </div>
                                            <div class="tab-pane text-muted" id="contacts-vertical"
                                                role="tabpanel">
                                                Why delicious magazines are killing you. Why our world would end if
                                                restaurants disappeared. Why restaurants are on crack about
                                                restaurants. How restaurants are making the world a better place. 8
                                                great articles about minute meals. Why our world would end if
                                                healthy snacks disappeared. Why the world would end without mexican
                                                food. The evolution of chef uniforms.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Vertical alignment with links
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <nav class="nav nav-tabs flex-column nav-style-5" role="tablist">
                                            <a class="nav-link" data-bs-toggle="tab" role="tab"
                                                aria-current="page" href="#home-vertical-link" aria-selected="false"><i
                                                    class="ri-home-smile-line me-2 align-middle d-inline-block"></i>Home</a>
                                            <a class="nav-link" data-bs-toggle="tab" role="tab"
                                            aria-current="page" href="#about-vertical-link" aria-selected="false"><i
                                                    class="ri-archive-drawer-line me-2 align-middle d-inline-block"></i>About</a>
                                            <a class="nav-link active" data-bs-toggle="tab" role="tab"
                                            aria-current="page" href="#services-vertical-link" aria-selected="true"><i
                                                    class="ri-bank-line me-2 align-middle d-inline-block"></i>Services</a>
                                            <a class="nav-link" data-bs-toggle="tab" role="tab"
                                            aria-current="page" href="#contacts-vertical-link" aria-selected="false"><i
                                                    class="ri-contacts-book-2-line me-2 align-middle d-inline-block"></i>Contacts</a>
                                        </nav>
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="tab-content mt-2 mt-xl-0">
                                            <div class="tab-pane text-muted" id="home-vertical-link"
                                                role="tabpanel">
                                                How hotel deals can help you live a better life. <b>How celebrity
                                                    cruises</b> aren't as bad as you think. How cultural solutions
                                                can help you predict the future. How to cheat at dog friendly hotels
                                                and get away with it. 17 problems with summer activities. How to
                                                cheat at travel agents and get away with it. How not knowing family
                                                trip ideas makes you a rookie. What everyone is saying about daily
                                                deals.
                                            </div>
                                            <div class="tab-pane text-muted" id="about-vertical-link"
                                                role="tabpanel">
                                                How travel coupons make you a better lover. Why cultural solutions
                                                are the new black. Why mom was right about travel insurances. How
                                                family trip ideas can help you predict the future. <b>How carnival
                                                    cruises make you a better lover</b>. Why you'll never succeed at
                                                daily deals. 11 ways cheapest flights can find you the love of your
                                                life. The complete beginner's guide to mission trips.
                                            </div>
                                            <div class="tab-pane show active text-muted" id="services-vertical-link"
                                                role="tabpanel">
                                                Unbelievable healthy snack success stories. 12 facts about safe food
                                                handling tips that will impress your friends. Restaurant weeks by
                                                the numbers. <b><i>Will mexican food ever rule the world? The 10 best thai
                                                restaurant youtube videos</i></b>. How restaurant weeks can make you sick.
                                                The complete beginner's guide to cooking healthy food. Unbelievable
                                                food stamp success stories.
                                            </div>
                                            <div class="tab-pane text-muted" id="contacts-vertical-link"
                                                role="tabpanel">
                                                Why delicious magazines are killing you. Why our world would end if
                                                restaurants disappeared. Why restaurants are on crack about
                                                restaurants. How restaurants are making the world a better place. 8
                                                great articles about minute meals. Why our world would end if
                                                healthy snacks disappeared. Why the world would end without mexican
                                                food. The evolution of chef uniforms.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                <!-- Start:: row-5 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Center Aligned Nav
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills justify-content-center nav-style-2 mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#home-center" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#about-center" aria-selected="false">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#services-center" aria-selected="false">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#contacts-center" aria-selected="false">Contacts</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active text-muted" id="home-center" role="tabpanel">
                                        How travel coupons make you a better lover. Why cultural solutions are the new
                                        black. Why mom was right about travel insurances. How family trip ideas can help
                                        you predict the future. <b>How carnival cruises make you a better lover</b>. Why
                                        you'll never succeed at daily deals. 11 ways cheapest flights can find you the
                                        love of your life. The complete beginner's guide to mission trips. If you read
                                        one article about cultural notes read this one. Why you shouldn't eat vacation
                                        package in bed.
                                    </div>
                                    <div class="tab-pane text-muted" id="about-center" role="tabpanel">
                                        How hotel deals can help you live a better life. <b>How celebrity cruises</b>
                                        aren't as bad as you think. How cultural solutions can help you predict the
                                        future. How to cheat at dog friendly hotels and get away with it. 17 problems
                                        with summer activities. How to cheat at travel agents and get away with it. How
                                        not knowing family trip ideas makes you a rookie. What everyone is saying about
                                        daily deals. How twitter can teach you about carnival cruises. How to start
                                        using cultural solutions.
                                    </div>
                                    <div class="tab-pane text-muted" id="services-center" role="tabpanel">
                                        Unbelievable healthy snack success stories. 12 facts about safe food handling
                                        tips that will impress your friends. Restaurant weeks by the numbers. Will
                                        mexican food ever rule the world? The 10 best thai restaurant youtube videos.
                                        How restaurant weeks can make you sick. The complete beginner's guide to cooking
                                        healthy food. Unbelievable food stamp success stories. How whole foods markets
                                        are making the world a better place. 16 things that won't happen in dish
                                        reviews.
                                    </div>
                                    <div class="tab-pane text-muted" id="contacts-center" role="tabpanel">
                                        Why delicious magazines are killing you. Why our world would end if restaurants
                                        disappeared. Why restaurants are on crack about restaurants. How restaurants are
                                        making the world a better place. 8 great articles about minute meals. Why our
                                        world would end if healthy snacks disappeared. Why the world would end without
                                        mexican food. The evolution of chef uniforms. How not knowing food processors
                                        makes you a rookie. Why whole foods markets beat peanut butter on pancakes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Right Aligned Nav
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills justify-content-end nav-style-3 mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#home-right" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#about-right" aria-selected="true">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#services-right" aria-selected="true">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#contacts-right" aria-selected="true">Contacts</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane text-muted" id="home-right" role="tabpanel">
                                        How travel coupons make you a better lover. Why cultural solutions are the new
                                        black. Why mom was right about travel insurances. How family trip ideas can help
                                        you predict the future. <b>How carnival cruises make you a better lover</b>. Why
                                        you'll never succeed at daily deals. 11 ways cheapest flights can find you the
                                        love of your life. The complete beginner's guide to mission trips. If you read
                                        one article about cultural notes read this one. Why you shouldn't eat vacation
                                        package in bed.
                                    </div>
                                    <div class="tab-pane show active text-muted" id="about-right" role="tabpanel">
                                        How hotel deals can help you live a better life. <b>How celebrity cruises</b>
                                        aren't as bad as you think. How cultural solutions can help you predict the
                                        future. How to cheat at dog friendly hotels and get away with it. 17 problems
                                        with summer activities. How to cheat at travel agents and get away with it. How
                                        not knowing family trip ideas makes you a rookie. What everyone is saying about
                                        daily deals. How twitter can teach you about carnival cruises. How to start
                                        using cultural solutions.
                                    </div>
                                    <div class="tab-pane text-muted" id="services-right" role="tabpanel">
                                        Unbelievable healthy snack success stories. 12 facts about safe food handling
                                        tips that will impress your friends. Restaurant weeks by the numbers. Will
                                        mexican food ever rule the world? The 10 best thai restaurant youtube videos.
                                        How restaurant weeks can make you sick. The complete beginner's guide to cooking
                                        healthy food. Unbelievable food stamp success stories. How whole foods markets
                                        are making the world a better place. 16 things that won't happen in dish
                                        reviews.
                                    </div>
                                    <div class="tab-pane text-muted" id="contacts-right" role="tabpanel">
                                        Why delicious magazines are killing you. Why our world would end if restaurants
                                        disappeared. Why restaurants are on crack about restaurants. How restaurants are
                                        making the world a better place. 8 great articles about minute meals. Why our
                                        world would end if healthy snacks disappeared. Why the world would end without
                                        mexican food. The evolution of chef uniforms. How not knowing food processors
                                        makes you a rookie. Why whole foods markets beat peanut butter on pancakes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-5 -->

                <!-- Start:: row-6 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Header Tabs
                                </div>
                                <div>
                                    <ul class="nav nav-tabs justify-content-end nav-tabs-header mb-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#home-header" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#about-header" aria-selected="true">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#services-header" aria-selected="true">Services</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active text-muted" id="home-header"
                                        role="tabpanel">
                                        <ul class="mb-0">
                                            <li class="mb-2">
                                                How hotel deals can help you live a better life. <b>How celebrity
                                                    cruises</b> aren't as bad as you think. How cultural solutions
                                                can help you predict the future. How to cheat at dog friendly hotels
                                                and get away with it. 17 problems with summer activities. How to
                                                cheat at travel agents and get away with it. How not knowing family
                                                trip ideas makes you a rookie. What everyone is saying about daily
                                                deals.
                                            </li>
                                            <li>
                                                How travel coupons make you a better lover. Why cultural solutions
                                                are the new black. Why mom was header about travel insurances. How
                                                family trip ideas can help you predict the future. <b>How carnival
                                                    cruises make you a better lover</b>. Why you'll never succeed at
                                                daily deals. 11 ways cheapest flights can find you the love of your
                                                life. The complete beginner's guide to mission trips.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane text-muted" id="about-header"
                                        role="tabpanel">
                                        <ul class="mb-0">
                                            <li class="mb-2">
                                                How travel coupons make you a better lover. Why cultural solutions
                                                are the new black. Why mom was header about travel insurances. How
                                                family trip ideas can help you predict the future. <b>How carnival
                                                    cruises make you a better lover</b>. Why you'll never succeed at
                                                daily deals. 11 ways cheapest flights can find you the love of your
                                                life. The complete beginner's guide to mission trips.
                                            </li>
                                            <li>
                                                How hotel deals can help you live a better life. <b>How celebrity
                                                    cruises</b> aren't as bad as you think. How cultural solutions
                                                can help you predict the future. How to cheat at dog friendly hotels
                                                and get away with it. 17 problems with summer activities. How to
                                                cheat at travel agents and get away with it. How not knowing family
                                                trip ideas makes you a rookie. What everyone is saying about daily
                                                deals.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane text-muted" id="services-header"
                                        role="tabpanel">
                                        <ul class="mb-0">
                                            <li class="mb-2">
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
                                            </li>
                                            <li>
                                                How travel coupons make you a better lover. Why cultural solutions
                                                are the new black. Why mom was header about travel insurances. How
                                                family trip ideas can help you predict the future. <b>How carnival
                                                    cruises make you a better lover</b>. Why you'll never succeed at
                                                daily deals. 11 ways cheapest flights can find you the love of your
                                                life. The complete beginner's guide to mission trips.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Footer Tabs
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active text-muted" id="home-footer" role="tabpanel">
                                        How travel coupons make you a better lover. Why cultural solutions are the new
                                        black. Why mom was right about travel insurances. How family trip ideas can help
                                        you predict the future. <b>How carnival cruises make you a better lover</b>. Why
                                        you'll never succeed at daily deals. 11 ways cheapest flights can find you the
                                        love of your life. The complete beginner's guide to mission trips. If you read
                                        one article about cultural notes read this one. Why you shouldn't eat vacation
                                        package in bed.
                                    </div>
                                    <div class="tab-pane text-muted" id="about-footer" role="tabpanel">
                                        How hotel deals can help you live a better life. <b>How celebrity cruises</b>
                                        aren't as bad as you think. How cultural solutions can help you predict the
                                        future. How to cheat at dog friendly hotels and get away with it. 17 problems
                                        with summer activities. How to cheat at travel agents and get away with it. How
                                        not knowing family trip ideas makes you a rookie. What everyone is saying about
                                        daily deals. How twitter can teach you about carnival cruises. How to start
                                        using cultural solutions.
                                    </div>
                                    <div class="tab-pane text-muted" id="services-footer" role="tabpanel">
                                        Unbelievable healthy snack success stories. 12 facts about safe food handling
                                        tips that will impress your friends. Restaurant weeks by the numbers. Will
                                        mexican food ever rule the world? The 10 best thai restaurant youtube videos.
                                        How restaurant weeks can make you sick. The complete beginner's guide to cooking
                                        healthy food. Unbelievable food stamp success stories. How whole foods markets
                                        are making the world a better place. 16 things that won't happen in dish
                                        reviews.
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="nav nav-tabs justify-content-end nav-tabs-footer mb-0" role="tablist">
                                    <li class="nav-item m-1">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#home-footer" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#about-footer" aria-selected="true">About</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#services-footer" aria-selected="true">Services</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-6 -->

                <!-- Start:: row-7 -->
                <div class="row">
                    <div class="col-xxl-12 col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Tab Style-1
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-style-1 d-sm-flex d-block" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#orders"
                                            aria-current="page" href="#orders">Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#accepted"
                                            href="#accepted">Accepted</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#declined"
                                            href="#declined">Declined</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="orders" role="tabpanel">
                                        <div class="text-muted"><b>Lorem Ipsum is simply dummy text of the
                                                printing</b> and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s, when an unknown
                                            printer took a galley of type and scrambled.</div>
                                    </div>
                                    <div class="tab-pane" id="accepted" role="tabpanel">
                                        <div class="text-muted">Many desktop publishing packages and web page
                                            editors now use Lorem Ipsum as their default model text, and a search
                                            for <b>'lorem ipsum'</b> will uncover many web sites still in their
                                            infancy. Various versions have evolved over the years.</div>
                                    </div>
                                    <div class="tab-pane" id="declined" role="tabpanel">
                                        <div class="text-muted">There are many variations of passages of Lorem
                                            Ipsum available, but the majority have suffered alteration in some form,
                                            <b>by injected humour</b>, or randomised words which don't look even
                                            slightly believable
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Tab Style-2
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-style-2 nav-justified mb-3 d-sm-flex d-block" id="myTab1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="order-tab" data-bs-toggle="tab"
                                            data-bs-target="#order-tab-pane" type="button" role="tab"
                                            aria-controls="home-tab-pane" aria-selected="true"><i
                                                class="ri-gift-line me-1 align-middle"></i>Ordered</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="confirmed-tab" data-bs-toggle="tab"
                                            data-bs-target="#confirm-tab-pane" type="button" role="tab"
                                            aria-controls="profile-tab-pane" aria-selected="false"><i
                                                class="ri-check-double-line me-1 align-middle"></i>Confirmed</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="shipped-tab" data-bs-toggle="tab"
                                            data-bs-target="#shipped-tab-pane" type="button" role="tab"
                                            aria-controls="contact-tab-pane" aria-selected="false"><i
                                                class="ri-shopping-bag-3-line me-1 align-middle"></i>Shipped</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="delivered-tab" data-bs-toggle="tab"
                                            data-bs-target="#delivered-tab-pane" type="button" role="tab" aria-selected="false"><i
                                                class="ri-truck-line me-1 align-middle"></i>Delivery</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade text-muted" id="order-tab-pane" role="tabpanel"
                                        aria-labelledby="home-tab" tabindex="0">
                                        <ul class="ps-3 mb-0">
                                            <li>Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock.</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade show active text-muted" id="confirm-tab-pane"
                                        role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                        <ul class="ps-3 mb-0">
                                            <li>As opposed to using 'Content here, content here', making it look like
                                                readable English. Many desktop publishing packages and web page editors
                                                now use Lorem Ipsum as their default model text, and a search.</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade text-muted" id="shipped-tab-pane" role="tabpanel"
                                        aria-labelledby="contact-tab" tabindex="0">
                                        <ul class="ps-3 mb-0">
                                            <li>but also the leap into electronic typesetting, remaining essentially
                                                unchanged. It was popularised in the 1960s with the release of Letraset
                                                sheets containing Lorem Ipsum passages, and more recently.</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade text-muted" id="delivered-tab-pane" role="tabpanel" tabindex="0">
                                        <ul class="list-unstyled mb-0">
                                            <li>A Latin professor at Hampden-Sydney College in Virginia, looked up one
                                                of the more obscure Latin words, consectetur, from a Lorem Ipsum
                                                passage, and going through the cites of the word in classical
                                                literature.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Tab-Style-3
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs justify-content-center mb-5 tab-style-3" id="myTab2"
                                    role="tablist">
                                    <li class="nav-item me-0" role="presentation">
                                        <button class="nav-link active home py-1" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home-tab-pane" type="button" role="tab"
                                            aria-controls="home-tab-pane" aria-selected="true">Home</button>
                                    </li>
                                    <li class="nav-item me-0" role="presentation">
                                        <button class="nav-link about py-1" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                                            aria-controls="profile-tab-pane" aria-selected="false">About</button>
                                    </li>
                                    <li class="nav-item me-0" role="presentation">
                                        <button class="nav-link services py-1" id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                                            aria-controls="contact-tab-pane" aria-selected="false">Services</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent1">
                                    <div class="tab-pane fade show active text-muted" id="home-tab-pane"
                                        role="tabpanel" aria-labelledby="home-tab" tabindex="0"><b>Lorem Ipsum is
                                            simply dummy text of the printing</b> and typesetting industry. Lorem
                                        Ipsum has been the industry's.</div>
                                    <div class="tab-pane fade text-muted" id="profile-tab-pane"
                                        role="tabpanel" aria-labelledby="profile-tab" tabindex="0">Many desktop
                                        publishing packages as their default model text, and a search for <b>'lorem ipsum'</b> will over the
                                        years.</div>
                                    <div class="tab-pane fade text-muted" id="contact-tab-pane"
                                        role="tabpanel" aria-labelledby="contact-tab" tabindex="0">There, <b>by injected humour</b>, or randomised
                                        words which don't look even slightly believable.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-7 -->

                <!-- Start:: row-8 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Tab Style-4
                                </div>
                            </div>
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs nav-justified tab-style-4 d-flex" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home1" type="button" role="tab" aria-selected="true">Home</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile1" type="button" role="tab" aria-selected="false">Profile</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-contact1" type="button" role="tab" aria-selected="false">About</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="tab-style-4">
                                    <div class="tab-pane show active" id="nav-home1" role="tabpanel"
                                        aria-labelledby="nav-home-tab" tabindex="0">
                                        <b>Lorem Ipsum is simply dummy</b> text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the leap
                                        into electronic typesetting, remaining essentially unchanged. It was popularised
                                        in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                        passages, and more recently with desktop publishing software like Aldus
                                        PageMaker including versions of Lorem Ipsum.
                                    </div>
                                    <div class="tab-pane" id="nav-profile1" role="tabpanel"
                                        aria-labelledby="nav-profile-tab" tabindex="0">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English. <b>Many
                                            desktop publishing</b> packages and web page editors now use Lorem Ipsum as
                                        their default model text, and a search for 'lorem ipsum' will uncover many web
                                        sites still in their infancy. Various versions have evolved over the years,
                                        sometimes by accident, sometimes on purpos, remaining essentially unchanged.
                                    </div>
                                    <div class="tab-pane" id="nav-contact1" role="tabpanel"
                                        aria-labelledby="nav-contact-tab" tabindex="0">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. <b>If you are going</b> to use a
                                        passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet
                                        tend to repeat predefined chunks as necessary, making this the first true
                                        generator on the Internet. It uses a dictionary of over 200 Latin words,
                                        combined with a handful of model sentence structures.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Tab Style-5
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills mb-3 nav-justified tab-style-5 d-sm-flex d-block" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true">Home</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">About</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">Services</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-disabled" type="button" role="tab"
                                            aria-controls="pills-disabled" aria-selected="false">Contacts</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane show active text-muted" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab" tabindex="0">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English. <b>Many
                                            desktop publishing</b> packages and web page editors now use Lorem Ipsum as
                                        their default model text, and a search for 'lorem ipsum' will uncover many web
                                        sites still in their infancy.
                                    </div>
                                    <div class="tab-pane text-muted" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab" tabindex="0">
                                        <b>Lorem Ipsum is simply dummy</b> text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries, but also the leap
                                        into electronic typesetting, remaining essentially unchanged. It was popularised
                                        in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                        passages.
                                    </div>
                                    <div class="tab-pane text-muted" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab" tabindex="0">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. <b>If you are going</b> to use a
                                        passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet
                                        tend to repeat predefined chunks as necessary, making this the first true
                                        generator on the Internet.
                                    </div>
                                    <div class="tab-pane text-muted" id="pills-disabled" role="tabpanel"
                                        aria-labelledby="pills-disabled-tab" tabindex="0">
                                        <b>Contrary to popular belief</b>, Contrary to popular belief, Lorem Ipsum is
                                        not simply random text. It has roots in a piece of classical Latin literature
                                        from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor
                                        at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of
                                        the word in classical literature, discovered the undoubtable source. Lorem Ipsum
                                        comes from sections.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-8 -->

                <!-- Start:: row-9 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Tab Style-6
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3 tab-style-6" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="products-tab" data-bs-toggle="tab"
                                            data-bs-target="#products-tab-pane" type="button" role="tab"
                                            aria-controls="products-tab-pane" aria-selected="true"><i
                                                class="ri-gift-line me-1 align-middle d-inline-block"></i>Products</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="sales-tab" data-bs-toggle="tab"
                                            data-bs-target="#sales-tab-pane" type="button" role="tab"
                                            aria-controls="sales-tab-pane" aria-selected="false"><i
                                                class="ri-bill-line me-1 align-middle d-inline-block"></i>Sales</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profit-tab" data-bs-toggle="tab"
                                            data-bs-target="#profit-tab-pane" type="button" role="tab"
                                            aria-controls="profit-tab-pane" aria-selected="false"><i
                                                class="ri-money-dollar-box-line me-1 align-middle d-inline-block"></i>Profit</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="expenses-tab" data-bs-toggle="tab"
                                            data-bs-target="#expenses-tab-pane" type="button" role="tab"
                                            aria-controls="expenses-tab-pane" aria-selected="false"><i
                                                class="ri-exchange-box-line me-1 align-middle d-inline-block"></i>Expenses</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active p-0 border-bottom-0 overflow-hidden" id="products-tab-pane"
                                        role="tabpanel" aria-labelledby="products-tab" tabindex="0">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/ecommerce/jpg/3.jpg" alt="img">
                                                            </span>
                                                        </th>
                                                        <td>Stop Watch</td>
                                                        <td>Clocks</td>
                                                        <td>$1,299.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/ecommerce/jpg/4.jpg" alt="img">
                                                            </span>
                                                        </th>
                                                        <td>Camera</td>
                                                        <td>Gadgets</td>
                                                        <td>$7,249.29</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/ecommerce/jpg/6.jpg" alt="img">
                                                            </span>
                                                        </th>
                                                        <td>Shoes</td>
                                                        <td>Footwear</td>
                                                        <td>$799.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade overflow-hidden" id="sales-tab-pane" role="tabpanel"
                                        aria-labelledby="sales-tab" tabindex="0">
                                        <ul class="list-unstyled mb-1">
                                            <li class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        Clothing
                                                    </div>
                                                    <div class="fs-14 fw-medium">32,138</div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        Furniture
                                                    </div>
                                                    <div class="fs-14 fw-medium">12,123</div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        electronics
                                                    </div>
                                                    <div class="fs-14 fw-medium">9,238</div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        food Products
                                                    </div>
                                                    <div class="fs-14 fw-medium">14,234</div>
                                                </div>
                                            </li>
                                            <li class="mb-0">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        Home Appliances
                                                    </div>
                                                    <div class="fs-14 fw-medium">10,249</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade overflow-hidden" id="profit-tab-pane" role="tabpanel"
                                        aria-labelledby="profit-tab" tabindex="0">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        Clothing
                                                    </div>
                                                    <div class="fs-14 fw-medium text-success"><i
                                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>22.75%
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        electronics
                                                    </div>
                                                    <div class="fs-14 fw-medium text-success"><i
                                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>42.24%
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        Furniture
                                                    </div>
                                                    <div class="fs-14 fw-medium text-success"><i
                                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>15.23%
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        Home Appliances
                                                    </div>
                                                    <div class="fs-14 fw-medium text-success"><i
                                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>15.14%
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-0">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        food Products
                                                    </div>
                                                    <div class="fs-14 fw-medium text-success"><i
                                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>31.64%
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade overflow-hidden" id="expenses-tab-pane" role="tabpanel"
                                        aria-labelledby="expenses-tab" tabindex="0">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        Clothing
                                                    </div>
                                                    <div class="fs-14 fw-medium text-danger">-$31,134</div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        electronics
                                                    </div>
                                                    <div class="fs-14 fw-medium text-danger">-$15,256</div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        Furniture
                                                    </div>
                                                    <div class="fs-14 fw-medium text-danger">-$24,156</div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        Home Appliances
                                                    </div>
                                                    <div class="fs-14 fw-medium text-danger">-$18,245</div>
                                                </div>
                                            </li>
                                            <li class="mb-0">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        food Products
                                                    </div>
                                                    <div class="fs-14 fw-medium text-danger">-$18,478</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Vertical Tab Style-1
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-start">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="nav flex-column nav-pills me-3 tab-style-7" id="v-pills-tab"
                                        role="tablist" aria-orientation="vertical">
                                        <button class="nav-link text-start active" id="main-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#main-profile" type="button" role="tab"
                                            aria-controls="main-profile" aria-selected="true"><i
                                                class="ri-shield-user-line me-1 align-middle d-inline-block"></i>Profile</button>
                                        <button class="nav-link text-start" id="man-password-tab" data-bs-toggle="pill"
                                            data-bs-target="#man-password" type="button" role="tab"
                                            aria-controls="man-password" aria-selected="false"><i
                                                class="ri-u-disk-line me-1 align-middle d-inline-block"></i>Password</button>
                                        <button class="nav-link text-start" id="main-team-tab" data-bs-toggle="pill"
                                            data-bs-target="#main-team" type="button" role="tab"
                                            aria-controls="main-team" aria-selected="false"><i
                                                class="ri-group-line me-1 align-middle d-inline-block"></i>Team</button>
                                        <button class="nav-link text-start" id="main-billing-tab" data-bs-toggle="pill"
                                            data-bs-target="#main-billing" type="button" role="tab"
                                            aria-controls="main-billing" aria-selected="false"><i
                                                class="ri-bill-line me-1 align-middle d-inline-block"></i>Billing</button>
                                        <button class="nav-link text-start mb-1" id="main-email-tab" data-bs-toggle="pill"
                                            data-bs-target="#main-email" type="button" role="tab"
                                            aria-controls="main-email" aria-selected="false"><i
                                                class="ri-mail-line me-1 align-middle d-inline-block"></i>Email</button>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane show active" id="main-profile" role="tabpanel" tabindex="0">
                                                <div class="d-sm-flex">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-xxl">
                                                            <img src="assets/images/faces/9.jpg" alt="img">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div class="my-md-auto mt-4 ms-md-3">
                                                            <h5 class="font-weight-semibold ms-2 mb-1 pb-0">Adam Smith</h5>
                                                            <p class="text-muted ms-0 mb-2 pb-2 "> <span class="me-3"><i
                                                                        class="far fa-address-card me-2"></i>Ui/Ux
                                                                    Developer</span> <span class="me-3"><i
                                                                        class="fa fa-taxi me-2"></i>West
                                                                    fransisco,Alabama</span> <span><i
                                                                        class="far fa-flag me-2"></i>New Jersey</span> </p>
                                                            <p class="text-muted ms-0 mb-2"><span><i
                                                                        class="fa fa-phone me-2"></i></span><span
                                                                    class="font-weight-semibold me-2">Phone:</span><span>+94
                                                                    12345 6789</span> </p>
                                                            <p class="text-muted ms-0 mb-2"><span><i
                                                                        class="fa fa-envelope me-2"></i></span><span
                                                                    class="font-weight-semibold me-2">Email:</span><span>spruko.space@gmail.com</span>
                                                            </p>
                                                            <p class="text-muted ms-0 mb-2"><span><i
                                                                        class="fa fa-globe me-2"></i></span><span
                                                                    class="font-weight-semibold me-2">Website:</span><span>sprukotechnologies</span>
                                                            </p>
                                                            <p class="text-muted mb-0 ms-2"><b>Lorem Ipsum</b> is simply
                                                                dummy text of the printing and typesetting industry. Lorem
                                                                Ipsum has been standard.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="man-password" role="tabpanel" tabindex="0">
                                                <ul class="list-unstyled text-muted mb-0">
                                                    <li class="mb-2">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's <b>standard dummy text
                                                            ever since the 1500s</b>, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into electronic
                                                        typesetting, remaining essentially unchanged. It was popularised in
                                                        the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                                        passages, and more recently with desktop publishing software like
                                                        Aldus PageMaker including versions of Lorem Ipsum.
                                                    </li>
                                                    <li class="mb-2">Contrary to popular belief, Lorem Ipsum is not simply
                                                        random text. It has roots in a piece of classical Latin literature
                                                        from 45 BC, making it over 2000 years old. Richard McClintock, a
                                                        Latin professor at Hampden-Sydney College in Virginia,</li>
                                                    <li class="mb-0">There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered alteration in some form.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="main-team" role="tabpanel"
                                                aria-labelledby="main-team-tab" tabindex="0">
                                                <ul class="list-unstyled text-muted mb-0">
                                                    <li class="mb-2">Contrary to popular belief, Lorem Ipsum is not simply
                                                        random text. It has roots in a piece of classical Latin literature
                                                        from 45 BC, making it over 2000 years old. Richard McClintock, a
                                                        Latin professor at Hampden-Sydney College in Virginia,</li>
                                                    <li class="mb-2">There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered alteration in some form.
                                                    </li>
                                                    <li class="mb-0">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's <b>standard dummy text
                                                            ever since the 1500s</b>, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into electronic
                                                        typesetting, remaining essentially unchanged. It was popularised in
                                                        the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                                        passages, and more recently with desktop publishing software like
                                                        Aldus PageMaker including versions of Lorem Ipsum.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="main-billing" role="tabpanel"
                                                aria-labelledby="main-billing-tab" tabindex="0">
                                                <ul class="list-unstyled text-muted mb-0">
                                                    <li class="mb-2">Contrary to popular belief, Lorem Ipsum is not simply
                                                        random text. It has roots in a piece of classical Latin literature
                                                        from 45 BC, making it over 2000 years old. Richard McClintock, a
                                                        Latin professor at Hampden-Sydney College in Virginia,</li>
                                                    <li class="mb-2">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's <b>standard dummy text
                                                            ever since the 1500s</b>, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into electronic
                                                        typesetting, remaining essentially unchanged. It was popularised in
                                                        the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                                        passages, and more recently with desktop publishing software like
                                                        Aldus PageMaker including versions of Lorem Ipsum.
                                                    </li>
                                                    <li class="mb-0">There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered alteration in some form.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="main-email" role="tabpanel"
                                                aria-labelledby="main-email-tab" tabindex="0">
                                                <ul class="list-unstyled text-muted mb-0">
                                                    <li class="mb-2">Contrary to popular belief, Lorem Ipsum is not simply
                                                        random text. It has roots in a piece of classical Latin literature
                                                        from 45 BC, making it over 2000 years old. Richard McClintock, a
                                                        Latin professor at Hampden-Sydney College in Virginia,</li>
                                                    <li class="mb-2">There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered alteration in some form.
                                                    </li>
                                                    <li class="mb-0">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's <b>standard dummy text
                                                            ever since the 1500s</b>, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into electronic
                                                        typesetting, remaining essentially unchanged. It was popularised in
                                                        the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                                        passages, and more recently with desktop publishing software like
                                                        Aldus PageMaker including versions of Lorem Ipsum.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-9 -->

                <!-- Start:: row-10 -->
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Vertical Tab Style-2
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="nav nav-tabs flex-column vertical-tabs-2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" role="tab"
                                                    aria-current="page" href="#home-vertical-custom"
                                                    aria-selected="true">
                                                    <p class="mb-1"><i class="ri-home-4-line"></i></p>
                                                    <p class="mb-0 text-break">Home</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab"
                                                    aria-current="page" href="#about-vertical-custom"
                                                    aria-selected="true">
                                                    <p class="mb-1"><i class="ri-phone-line"></i></p>
                                                    <p class="mb-0 text-break">About</p></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mb-0" data-bs-toggle="tab" role="tab"
                                                    aria-current="page" href="#services-vertical-custom"
                                                    aria-selected="true">
                                                    <p class="mb-1"><i class="ri-customer-service-line"></i></p>
                                                    <p class="mb-0 text-break">Services</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="tab-content">
                                            <div class="tab-pane show active text-muted" id="home-vertical-custom"
                                                role="tabpanel">
                                                <ul class="mb-0">
                                                    <li class="mb-2">
                                                        How hotel deals can help you live a better life. <b>How celebrity
                                                            cruises</b> aren't as bad as you think. How cultural solutions
                                                        can help you predict the future. How to cheat at dog friendly hotels
                                                        and get away with it. 17 problems with summer activities. How to
                                                        cheat at travel agents and get away with it. How not knowing family
                                                        trip ideas makes you a rookie. What everyone is saying about daily
                                                        deals.
                                                    </li>
                                                    <li>
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane text-muted" id="about-vertical-custom"
                                                role="tabpanel">
                                                <ul class="mb-0">
                                                    <li class="mb-2">
                                                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham,How hotel deals can help you live a better life. <b>How celebrity
                                                            cruises</b>
                                                    </li>
                                                    <li>
                                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane text-muted" id="services-vertical-custom"
                                                role="tabpanel">
                                                <ul class="mb-0">
                                                    <li class="mb-2">
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.
                                                    </li>
                                                    <li>
                                                        How hotel deals can help you live a better life. <b>How celebrity
                                                            cruises</b> aren't as bad as you think. How cultural solutions
                                                        can help you predict the future. How to cheat at dog friendly hotels
                                                        and get away with it. 17 problems with summer activities. How to
                                                        cheat at travel agents and get away with it. How not knowing family
                                                        trip ideas makes you a rookie. What everyone is saying about daily
                                                        deals.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Vertical Tabs Style-3
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="nav nav-tabs flex-column vertical-tabs-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active text-break" data-bs-toggle="tab" role="tab"
                                                    aria-current="page" href="#employee-vertical"
                                                    aria-selected="true">
                                                    <i class="ri-map-pin-user-line me-2 align-middle d-inline-block"></i>Employees
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-break" data-bs-toggle="tab" role="tab"
                                                    aria-current="page" href="#customers-vertical"
                                                    aria-selected="true">
                                                    <i class="ri-group-line me-2 align-middle d-inline-block"></i>Customers
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-break mb-2" data-bs-toggle="tab" role="tab"
                                                    aria-current="page" href="#products-vertical"
                                                    aria-selected="true">
                                                    <i class="ri-gift-line me-2 align-middle d-inline-block"></i>Products
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="tab-content">
                                            <div class="tab-pane show active text-muted" id="employee-vertical"
                                                role="tabpanel">
                                                <ul class="mb-0">
                                                    <li class="mb-2">
                                                        How hotel deals can help you live a better life. <b>How celebrity
                                                            cruises</b> aren't as bad as you think. How cultural solutions
                                                        can help you predict the future. How to cheat at dog friendly hotels
                                                        and get away with it. 17 problems with summer activities. How to
                                                        cheat at travel agents and get away with it. How not knowing family
                                                        trip ideas makes you a rookie. What everyone is saying about daily
                                                        deals.
                                                    </li>
                                                    <li>
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane text-muted" id="customers-vertical"
                                                role="tabpanel">
                                                <ul class="mb-0">
                                                    <li class="mb-2">
                                                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham,How hotel deals can help you live a better life. <b>How celebrity
                                                            cruises</b>
                                                    </li>
                                                    <li>
                                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane text-muted" id="products-vertical"
                                                role="tabpanel">
                                                <ul class="mb-0">
                                                    <li class="mb-2">
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.
                                                    </li>
                                                    <li>
                                                        How hotel deals can help you live a better life. <b>How celebrity
                                                            cruises</b> aren't as bad as you think. How cultural solutions
                                                        can help you predict the future. How to cheat at dog friendly hotels
                                                        and get away with it. 17 problems with summer activities. How to
                                                        cheat at travel agents.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-10 -->

                <!-- Start:: row-11 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Tabs with dropdowns
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3 border-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" href="#hometab-dropdown"
                                        aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                                            role="button" aria-expanded="false">Company</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" data-bs-toggle="tab" role="tab" href="#homeabout-dropdown"
                                                aria-selected="false">About</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" href="#homeproducts-dropdown"
                                        aria-selected="false">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Services</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active text-muted" id="hometab-dropdown" role="tabpanel">
                                        <b>Lorem Ipsum is simply dummy</b> text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries.
                                    </div>
                                    <div class="tab-pane text-muted" id="homeabout-dropdown" role="tabpanel">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, <b>Making it over 2000
                                            years old</b>. Richard McClintock, a Latin professor at Hampden-Sydney
                                        College in Virginia, looked up one of the more obscure Latin words, consectetur.
                                    </div>
                                    <div class="tab-pane text-muted" id="homeproducts-dropdown" role="tabpanel">
                                        There are many variations of passages of <b>Lorem Ipsum available</b>, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to
                                        use a passage of Lorem Ipsum, you need to be sure there isn't anything.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Pills with dropdowns
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#pill-products" aria-selected="true">Products</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                                            role="button" aria-expanded="false">Cart</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" data-bs-toggle="tab" role="tab" aria-current="page"
                                                href="#pill-wishlist" aria-selected="false">Wishlist</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Liked</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Save For Later</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Recently Viewed</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#pill-orders" aria-selected="false">Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Offers</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active text-muted" id="pill-products" role="tabpanel">
                                        How travel coupons make you a better lover. Why cultural solutions are the new
                                        black. Why mom was right about travel insurances. How family trip ideas can help
                                        you predict the future. <b>How carnival cruises make you a better lover</b>. Why
                                        you'll never succeed at daily deals.
                                    </div>
                                    <div class="tab-pane text-muted" id="pill-wishlist" role="tabpanel">
                                        How hotel deals can help you live a better life. <b>How celebrity cruises</b>
                                        aren't as bad as you think. How cultural solutions can help you predict the
                                        future. How to cheat at dog friendly hotels and get away with it. 17 problems
                                        with summer activities. How to cheat at travel agents and get away with it.
                                    </div>
                                    <div class="tab-pane text-muted" id="pill-orders" role="tabpanel">
                                        Unbelievable healthy snack success stories. 12 facts about safe food handling
                                        tips that will impress your friends. Restaurant weeks by the numbers. Will
                                        mexican food ever rule the world? The 10 best thai restaurant youtube videos.
                                        How restaurant weeks can make you sick.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-11 -->

                <!-- Start:: row-12 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    FIll Pills
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills nav-fill mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#fill-pill-home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#fill-pill-about" aria-selected="false">Customer-ratings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#fill-pill-services" aria-selected="false">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active text-muted" id="fill-pill-home" role="tabpanel">
                                        How travel coupons make you a better lover. Why cultural solutions are the new
                                        black. Why mom was right about travel insurances. How family trip ideas can help
                                        you predict the future. <b>How carnival cruises make you a better lover</b>. Why
                                        you'll never succeed at daily deals.
                                    </div>
                                    <div class="tab-pane text-muted" id="fill-pill-about" role="tabpanel">
                                        How hotel deals can help you live a better life. <b>How celebrity cruises</b>
                                        aren't as bad as you think. How cultural solutions can help you predict the
                                        future. How to cheat at dog friendly hotels and get away with it. 17 problems
                                        with summer activities. How to cheat at travel agents and get away with it.
                                    </div>
                                    <div class="tab-pane text-muted" id="fill-pill-services" role="tabpanel">
                                        Unbelievable healthy snack success stories. 12 facts about safe food handling
                                        tips that will impress your friends. Restaurant weeks by the numbers. Will
                                        mexican food ever rule the world? The 10 best thai restaurant youtube videos.
                                        How restaurant weeks can make you sick.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    justified Pills
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills nav-justified mb-3 d-sm-flex d-block" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#justified-pill-home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#justified-pill-details" aria-selected="true">Company Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#justified-pill-products" aria-selected="true">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active text-muted" id="justified-pill-home" role="tabpanel">
                                        How travel coupons make you a better lover. Why cultural solutions are the new
                                        black. Why mom was right about travel insurances. How family trip ideas can help
                                        you predict the future. <b>How carnival cruises make you a better lover</b>. Why
                                        you'll never succeed at daily deals.
                                    </div>
                                    <div class="tab-pane text-muted" id="justified-pill-details" role="tabpanel">
                                        How hotel deals can help you live a better life. <b>How celebrity cruises</b>
                                        aren't as bad as you think. How cultural solutions can help you predict the
                                        future. How to cheat at dog friendly hotels and get away with it. 17 problems
                                        with summer activities. How to cheat at travel agents and get away with it.
                                    </div>
                                    <div class="tab-pane text-muted" id="justified-pill-products" role="tabpanel">
                                        Unbelievable healthy snack success stories. 12 facts about safe food handling
                                        tips that will impress your friends. Restaurant weeks by the numbers. Will
                                        mexican food ever rule the world? The 10 best thai restaurant youtube videos.
                                        How restaurant weeks can make you sick.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-12 -->

                <!-- Start:: row-13 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Working with flex utilities
                                </div>
                            </div>
                            <div class="card-body">
                                <nav class="nav nav-pills flex-column flex-sm-row mb-3" role="tablist">
                                    <a class="flex-sm-fill text-sm-center nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                    href="#pill-flex-home" aria-selected="true">Home</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                    href="#pill-flex-big" aria-selected="false">More Data More The Tab Size</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                    href="#pill-flex-about" aria-selected="false">About</a>
                                    <a class="flex-sm-fill text-sm-center nav-link disabled">Services</a>
                                </nav>
                                <div class="tab-content">
                                    <div class="tab-pane show active text-muted" id="pill-flex-home" role="tabpanel">
                                        How travel coupons make you a better lover. Why cultural solutions are the new
                                        black. Why mom was right about travel insurances. How family trip ideas can help
                                        you predict the future. <b>How carnival cruises make you a better lover</b>. Why
                                        you'll never succeed at daily deals. 11 ways cheapest flights can find you the
                                        love of your life. The complete beginner's guide to mission trips. If you read
                                        one article about cultural notes read this one. Why you shouldn't eat vacation
                                        package in bed.
                                    </div>
                                    <div class="tab-pane text-muted" id="pill-flex-big" role="tabpanel">
                                        How hotel deals can help you live a better life. <b>How celebrity cruises</b>
                                        aren't as bad as you think. How cultural solutions can help you predict the
                                        future. How to cheat at dog friendly hotels and get away with it. 17 problems
                                        with summer activities. How to cheat at travel agents and get away with it. How
                                        not knowing family trip ideas makes you a rookie. What everyone is saying about
                                        daily deals. How twitter can teach you about carnival cruises. How to start
                                        using cultural solutions.
                                    </div>
                                    <div class="tab-pane text-muted" id="pill-flex-about" role="tabpanel">
                                        Unbelievable healthy snack success stories. 12 facts about safe food handling
                                        tips that will impress your friends. Restaurant weeks by the numbers. Will
                                        mexican food ever rule the world? The 10 best thai restaurant youtube videos.
                                        How restaurant weeks can make you sick. The complete beginner's guide to cooking
                                        healthy food. Unbelievable food stamp success stories. How whole foods markets
                                        are making the world a better place. 16 things that won't happen in dish
                                        reviews.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-13 -->

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