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


<!-- Prism CSS -->
<link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">

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
                        <h1 class="page-title fw-medium fs-18 mb-2">Accordions</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Accordions</li>
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
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Basic Accordion
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use
                                                to
                                                style each element. These classes control the overall appearance, as
                                                well as
                                                the
                                                showing and hiding via CSS transitions. You can modify any of this with
                                                custom
                                                CSS or overriding our default variables. It's also worth noting that
                                                just
                                                about
                                                any HTML can go within the <code>.accordion-body</code>, though the
                                                transition
                                                does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden
                                                by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use
                                                to
                                                style each element. These classes control the overall appearance, as
                                                well as
                                                the
                                                showing and hiding via CSS transitions. You can modify any of this with
                                                custom
                                                CSS or overriding our default variables. It's also worth noting that
                                                just
                                                about
                                                any HTML can go within the <code>.accordion-body</code>, though the
                                                transition
                                                does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden
                                                by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use
                                                to
                                                style each element. These classes control the overall appearance, as
                                                well as
                                                the
                                                showing and hiding via CSS transitions. You can modify any of this with
                                                custom
                                                CSS or overriding our default variables. It's also worth noting that
                                                just
                                                about
                                                any HTML can go within the <code>.accordion-body</code>, though the
                                                transition
                                                does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion" id="accordionExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true"
                aria-controls="collapseOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseOne" class="accordion-collapse collapse show"
            aria-labelledby="headingOne" data-bs-parent="#accordionExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use
                to
                style each element. These classes control the overall appearance, as
                well as
                the
                showing and hiding via CSS transitions. You can modify any of this with
                custom
                CSS or overriding our default variables. It's also worth noting that
                just
                about
                any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
                transition
                does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                aria-expanded="false" aria-controls="collapseTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseTwo" class="accordion-collapse collapse"
            aria-labelledby="headingTwo" data-bs-parent="#accordionExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden
                by
                default, until the collapse plugin adds the appropriate classes that we
                use
                to
                style each element. These classes control the overall appearance, as
                well as
                the
                showing and hiding via CSS transitions. You can modify any of this with
                custom
                CSS or overriding our default variables. It's also worth noting that
                just
                about
                any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
                transition
                does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                aria-expanded="false" aria-controls="collapseThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseThree" class="accordion-collapse collapse"
            aria-labelledby="headingThree" data-bs-parent="#accordionExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden
                by
                default, until the collapse plugin adds the appropriate classes that we
                use
                to
                style each element. These classes control the overall appearance, as
                well as
                the
                showing and hiding via CSS transitions. You can modify any of this with
                custom
                CSS or overriding our default variables. It's also worth noting that
                just
                about
                any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
                transition
                does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Always Open Accordion
                                    <p class="text-muted subtitle fs-12 fw-normal">Omit the <code>data-bs-parent</code>
                                        attribute on each
                                        <code>.accordion-collapse</code>
                                        to make accordion items stay open when another item is opened.
                                    </p>
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use
                                                to style each element. These classes control the overall appearance, as
                                                well
                                                as the showing and hiding via CSS transitions. It's also worth
                                                noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden
                                                by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use
                                                to style each element. These classes control the overall appearance, as
                                                well
                                                as the showing and hiding via CSS transitions. You can modify any of
                                                this
                                                with custom CSS or overriding our default variables. It's also worth
                                                noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden
                                                by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use
                                                to style each element. These classes control the overall appearance, as
                                                well
                                                as the showing and hiding via CSS transitions. You can modify any of
                                                this
                                                with custom CSS or overriding our default variables. It's also worth
                                                noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion" id="accordionPanelsStayOpenExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="panelsStayOpen-headingOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
            aria-labelledby="panelsStayOpen-headingOne"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use
                to style each element. These classes control the overall appearance, as
                well
                as the showing and hiding via CSS transitions. It's also worth
                noting
                that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;,
                though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="panelsStayOpen-headingTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTwo"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden
                by
                default, until the collapse plugin adds the appropriate classes that we
                use
                to style each element. These classes control the overall appearance, as
                well
                as the showing and hiding via CSS transitions. You can modify any of
                this
                with custom CSS or overriding our default variables. It's also worth
                noting
                that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;,
                though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="panelsStayOpen-headingThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                aria-expanded="false" aria-controls="panelsStayOpen-collapseThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingThree"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden
                by
                default, until the collapse plugin adds the appropriate classes that we
                use
                to style each element. These classes control the overall appearance, as
                well
                as the showing and hiding via CSS transitions. You can modify any of
                this
                with custom CSS or overriding our default variables. It's also worth
                noting
                that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;,
                though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Flush Accordion
                                    <p class="subtitle text-muted fs-12 fw-normal">
                                        Add <code>.accordion-flush</code> to remove the default
                                        <code>background-color</code>,
                                        some borders, and some rounded corners to render accordions edge-to-edge with
                                        their
                                        parent container.
                                    </p>
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion,
                                                which is
                                                intended to demonstrate the <code>.accordion-flush</code> class.
                                                This is
                                                the
                                                first item's accordion body.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion,
                                                which is
                                                intended to demonstrate the <code>.accordion-flush</code> class.
                                                This is
                                                the
                                                second item's accordion body. Let's imagine this being filled
                                                with
                                                some
                                                actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingThree"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion,
                                                which is
                                                intended to demonstrate the <code>.accordion-flush</code> class.
                                                This is
                                                the
                                                third item's accordion body. Nothing more exciting happening
                                                here in
                                                terms
                                                of content, but just filling up the space to make it look, at
                                                least
                                                at
                                                first
                                                glance, a bit more representative of how this would look in a
                                                real-world
                                                application.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-flush" id="accordionFlushExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="flush-headingOne"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                aria-expanded="false" aria-controls="flush-collapseOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="flush-collapseOne" class="accordion-collapse collapse"
            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample"&gt;
            &lt;div class="accordion-body"&gt;Placeholder content for this accordion,
                which is
                intended to demonstrate the &lt;code&gt;.accordion-flush&lt;/code&gt; class.
                This is
                the
                first item's accordion body.&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="flush-headingTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                aria-expanded="false" aria-controls="flush-collapseTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="flush-collapseTwo" class="accordion-collapse collapse"
            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample"&gt;
            &lt;div class="accordion-body"&gt;Placeholder content for this accordion,
                which is
                intended to demonstrate the &lt;code&gt;.accordion-flush&lt;/code&gt; class.
                This is
                the
                second item's accordion body. Let's imagine this being filled
                with
                some
                actual content.&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="flush-headingThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                aria-expanded="false" aria-controls="flush-collapseThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="flush-collapseThree" class="accordion-collapse collapse"
            aria-labelledby="flush-headingThree"
            data-bs-parent="#accordionFlushExample"&gt;
            &lt;div class="accordion-body"&gt;Placeholder content for this accordion,
                which is
                intended to demonstrate the &lt;code&gt;.accordion-flush&lt;/code&gt; class.
                This is
                the
                third item's accordion body. Nothing more exciting happening
                here in
                terms
                of content, but just filling up the space to make it look, at
                least
                at
                first
                glance, a bit more representative of how this would look in a
                real-world
                application.&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->


                <!-- Start:: row-3 -->
                <h6 class="mb-3">Light Colors:</h6>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Primary
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-primary" id="accordionPrimaryExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPrimaryOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsePrimaryOne" aria-expanded="true"
                                                aria-controls="collapsePrimaryOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="collapsePrimaryOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingPrimaryOne"
                                            data-bs-parent="#accordionPrimaryExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPrimaryTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePrimaryTwo"
                                                aria-expanded="false" aria-controls="collapsePrimaryTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="collapsePrimaryTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingPrimaryTwo"
                                            data-bs-parent="#accordionPrimaryExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPrimaryThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePrimaryThree"
                                                aria-expanded="false" aria-controls="collapsePrimaryThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="collapsePrimaryThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingPrimaryThree"
                                            data-bs-parent="#accordionPrimaryExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-primary" id="accordionPrimaryExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingPrimaryOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsePrimaryOne" aria-expanded="true"
                aria-controls="collapsePrimaryOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsePrimaryOne" class="accordion-collapse collapse show"
            aria-labelledby="headingPrimaryOne"
            data-bs-parent="#accordionPrimaryExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingPrimaryTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapsePrimaryTwo"
                aria-expanded="false" aria-controls="collapsePrimaryTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsePrimaryTwo" class="accordion-collapse collapse"
            aria-labelledby="headingPrimaryTwo"
            data-bs-parent="#accordionPrimaryExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingPrimaryThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapsePrimaryThree"
                aria-expanded="false" aria-controls="collapsePrimaryThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsePrimaryThree" class="accordion-collapse collapse"
            aria-labelledby="headingPrimaryThree"
            data-bs-parent="#accordionPrimaryExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Secondary
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-secondary" id="accordionSecondaryExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSecondaryOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSecondaryOne" aria-expanded="true"
                                                aria-controls="collapseSecondaryOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="collapseSecondaryOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingSecondaryOne"
                                            data-bs-parent="#accordionSecondaryExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSecondaryTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSecondaryTwo"
                                                aria-expanded="false" aria-controls="collapseSecondaryTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="collapseSecondaryTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingSecondaryTwo"
                                            data-bs-parent="#accordionSecondaryExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSecondaryThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSecondaryThree"
                                                aria-expanded="false" aria-controls="collapseSecondaryThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="collapseSecondaryThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingSecondaryThree"
                                            data-bs-parent="#accordionSecondaryExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-secondary" id="accordionSecondaryExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingSecondaryOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseSecondaryOne" aria-expanded="true"
                aria-controls="collapseSecondaryOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseSecondaryOne" class="accordion-collapse collapse show"
            aria-labelledby="headingSecondaryOne"
            data-bs-parent="#accordionSecondaryExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingSecondaryTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseSecondaryTwo"
                aria-expanded="false" aria-controls="collapseSecondaryTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseSecondaryTwo" class="accordion-collapse collapse"
            aria-labelledby="headingSecondaryTwo"
            data-bs-parent="#accordionSecondaryExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingSecondaryThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseSecondaryThree"
                aria-expanded="false" aria-controls="collapseSecondaryThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseSecondaryThree" class="accordion-collapse collapse"
            aria-labelledby="headingSecondaryThree"
            data-bs-parent="#accordionSecondaryExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <h6 class="mb-3">Solid Colors:</h6>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Primary
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-solid-primary" id="accordionPrimarySolidExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPrimarySolidOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsePrimarySolidOne" aria-expanded="true"
                                                aria-controls="collapsePrimarySolidOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="collapsePrimarySolidOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingPrimarySolidOne"
                                            data-bs-parent="#accordionPrimarySolidExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPrimarySolidTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePrimarySolidTwo"
                                                aria-expanded="false" aria-controls="collapsePrimarySolidTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="collapsePrimarySolidTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingPrimarySolidTwo"
                                            data-bs-parent="#accordionPrimarySolidExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPrimarySolidThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePrimarySolidThree"
                                                aria-expanded="false" aria-controls="collapsePrimarySolidThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="collapsePrimarySolidThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingPrimarySolidThree"
                                            data-bs-parent="#accordionPrimarySolidExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-solid-primary" id="accordionPrimarySolidExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingPrimarySolidOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsePrimarySolidOne" aria-expanded="true"
                aria-controls="collapsePrimarySolidOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsePrimarySolidOne" class="accordion-collapse collapse show"
            aria-labelledby="headingPrimarySolidOne"
            data-bs-parent="#accordionPrimarySolidExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingPrimarySolidTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapsePrimarySolidTwo"
                aria-expanded="false" aria-controls="collapsePrimarySolidTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsePrimarySolidTwo" class="accordion-collapse collapse"
            aria-labelledby="headingPrimarySolidTwo"
            data-bs-parent="#accordionPrimarySolidExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingPrimarySolidThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapsePrimarySolidThree"
                aria-expanded="false" aria-controls="collapsePrimarySolidThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsePrimarySolidThree" class="accordion-collapse collapse"
            aria-labelledby="headingPrimarySolidThree"
            data-bs-parent="#accordionPrimarySolidExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Secondary
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-solid-secondary" id="accordionSecondarySolidExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSecondarySolidOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSecondarySolidOne" aria-expanded="true"
                                                aria-controls="collapseSecondarySolidOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="collapseSecondarySolidOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingSecondarySolidOne"
                                            data-bs-parent="#accordionSecondarySolidExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSecondarySolidTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSecondarySolidTwo"
                                                aria-expanded="false" aria-controls="collapseSecondarySolidTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="collapseSecondarySolidTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingSecondarySolidTwo"
                                            data-bs-parent="#accordionSecondarySolidExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSecondarySolidThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSecondarySolidThree"
                                                aria-expanded="false" aria-controls="collapseSecondarySolidThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="collapseSecondarySolidThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingSecondarySolidThree"
                                            data-bs-parent="#accordionSecondarySolidExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-solid-secondary" id="accordionSecondarySolidExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingSecondarySolidOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseSecondarySolidOne" aria-expanded="true"
                aria-controls="collapseSecondarySolidOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseSecondarySolidOne" class="accordion-collapse collapse show"
            aria-labelledby="headingSecondarySolidOne"
            data-bs-parent="#accordionSecondarySolidExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingSecondarySolidTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseSecondarySolidTwo"
                aria-expanded="false" aria-controls="collapseSecondarySolidTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseSecondarySolidTwo" class="accordion-collapse collapse"
            aria-labelledby="headingSecondarySolidTwo"
            data-bs-parent="#accordionSecondarySolidExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingSecondarySolidThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseSecondarySolidThree"
                aria-expanded="false" aria-controls="collapseSecondarySolidThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseSecondarySolidThree" class="accordion-collapse collapse"
            aria-labelledby="headingSecondarySolidThree"
            data-bs-parent="#accordionSecondarySolidExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                <!-- Start:: row-5 -->
                <h6 class="mb-3">Colored Borders:</h6>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Primary
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-border-primary accordions-items-seperate"
                                    id="accordionprimaryborderExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingborderprimaryOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#primaryBorderOne" aria-expanded="true"
                                                aria-controls="primaryBorderOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="primaryBorderOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingborderprimaryOne"
                                            data-bs-parent="#accordionprimaryborderExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingborderprimaryTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#primaryBorderTwo"
                                                aria-expanded="false" aria-controls="primaryBorderTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="primaryBorderTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingborderprimaryTwo"
                                            data-bs-parent="#accordionprimaryborderExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingborderprimaryThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#primaryBorderThree"
                                                aria-expanded="false" aria-controls="primaryBorderThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="primaryBorderThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingborderprimaryThree"
                                            data-bs-parent="#accordionprimaryborderExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-border-primary accordions-items-seperate"
    id="accordionprimaryborderExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingborderprimaryOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#primaryBorderOne" aria-expanded="true"
                aria-controls="primaryBorderOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="primaryBorderOne" class="accordion-collapse collapse show"
            aria-labelledby="headingborderprimaryOne"
            data-bs-parent="#accordionprimaryborderExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingborderprimaryTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#primaryBorderTwo"
                aria-expanded="false" aria-controls="primaryBorderTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="primaryBorderTwo" class="accordion-collapse collapse"
            aria-labelledby="headingborderprimaryTwo"
            data-bs-parent="#accordionprimaryborderExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingborderprimaryThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#primaryBorderThree"
                aria-expanded="false" aria-controls="primaryBorderThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="primaryBorderThree" class="accordion-collapse collapse"
            aria-labelledby="headingborderprimaryThree"
            data-bs-parent="#accordionprimaryborderExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Success
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-border-success accordions-items-seperate"
                                    id="accordionsuccessborderExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingbordersuccessOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#successBorderOne" aria-expanded="true"
                                                aria-controls="successBorderOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="successBorderOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingbordersuccessOne"
                                            data-bs-parent="#accordionsuccessborderExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingbordersuccessTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#successBorderTwo"
                                                aria-expanded="false" aria-controls="successBorderTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="successBorderTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingbordersuccessTwo"
                                            data-bs-parent="#accordionsuccessborderExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingbordersuccessThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#successBorderThree"
                                                aria-expanded="false" aria-controls="successBorderThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="successBorderThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingbordersuccessThree"
                                            data-bs-parent="#accordionsuccessborderExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-border-success accordions-items-seperate"
    id="accordionsuccessborderExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingbordersuccessOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#successBorderOne" aria-expanded="true"
                aria-controls="successBorderOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="successBorderOne" class="accordion-collapse collapse show"
            aria-labelledby="headingbordersuccessOne"
            data-bs-parent="#accordionsuccessborderExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingbordersuccessTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#successBorderTwo"
                aria-expanded="false" aria-controls="successBorderTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="successBorderTwo" class="accordion-collapse collapse"
            aria-labelledby="headingbordersuccessTwo"
            data-bs-parent="#accordionsuccessborderExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingbordersuccessThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#successBorderThree"
                aria-expanded="false" aria-controls="successBorderThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="successBorderThree" class="accordion-collapse collapse"
            aria-labelledby="headingbordersuccessThree"
            data-bs-parent="#accordionsuccessborderExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
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
                                    Example
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    <a class="btn btn-primary collapsed mb-2" data-bs-toggle="collapse"
                                        href="#collapseExample" role="button" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Link with href
                                    </a>
                                    <button class="btn btn-secondary collapsed mb-2" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        Button with data-bs-target
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body mb-0">
                                        Some placeholder content for the collapse component. This panel
                                        is
                                        hidden by default but revealed when the user activates the
                                        relevant
                                        trigger.
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="mb-0"&gt;
    &lt;a class="btn btn-primary collapsed mb-2" data-bs-toggle="collapse"
        href="#collapseExample" role="button" aria-expanded="false"
        aria-controls="collapseExample"&gt;
        Link with href
    &lt;/a&gt;
    &lt;button class="btn btn-secondary collapsed mb-2" type="button"
        data-bs-toggle="collapse" data-bs-target="#collapseExample"
        aria-expanded="false" aria-controls="collapseExample"&gt;
        Button with data-bs-target
    &lt;/button&gt;
&lt;/p&gt;
&lt;div class="collapse" id="collapseExample"&gt;
    &lt;div class="card card-body mb-0"&gt;
        Some placeholder content for the collapse component. This panel
        is
        hidden by default but revealed when the user activates the
        relevant
        trigger.
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Targets Collapse
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    <a class="btn btn-primary mb-2" data-bs-toggle="collapse"
                                        href="#multiCollapseExample1" role="button" aria-expanded="false"
                                        aria-controls="multiCollapseExample1">Toggle first element</a>
                                    <button class="btn btn-success mb-2" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#multiCollapseExample2" aria-expanded="false"
                                        aria-controls="multiCollapseExample2">Toggle second
                                        element</button>
                                    <button class="btn btn-danger mb-2" type="button" data-bs-toggle="collapse"
                                        data-bs-target=".multi-collapse" aria-expanded="false"
                                        aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle
                                        both elements</button>
                                </p>
                                <div class="row">
                                    <div class="col m-1">
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="card card-body mb-0">
                                                Some placeholder content for the first collapse
                                                component of
                                                this multi-collapse example. This panel is hidden by
                                                default
                                                but revealed when the user activates the relevant
                                                trigger.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col m-1">
                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <div class="card card-body mb-0">
                                                Some placeholder content for the second collapse
                                                component
                                                of this multi-collapse example. This panel is hidden by
                                                default but revealed when the user activates the
                                                relevant
                                                trigger.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="mb-0"&gt;
    &lt;a class="btn btn-primary mb-2" data-bs-toggle="collapse"
        href="#multiCollapseExample1" role="button" aria-expanded="false"
        aria-controls="multiCollapseExample1"&gt;Toggle first element&lt;/a&gt;
    &lt;button class="btn btn-success mb-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#multiCollapseExample2" aria-expanded="false"
        aria-controls="multiCollapseExample2"&gt;Toggle second
        element&lt;/button&gt;
    &lt;button class="btn btn-danger mb-2" type="button" data-bs-toggle="collapse"
        data-bs-target=".multi-collapse" aria-expanded="false"
        aria-controls="multiCollapseExample1 multiCollapseExample2"&gt;Toggle
        both elements&lt;/button&gt;
&lt;/p&gt;
&lt;div class="row"&gt;
    &lt;div class="col m-1"&gt;
        &lt;div class="collapse multi-collapse" id="multiCollapseExample1"&gt;
            &lt;div class="card card-body mb-0"&gt;
                Some placeholder content for the first collapse
                component of
                this multi-collapse example. This panel is hidden by
                default
                but revealed when the user activates the relevant
                trigger.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col m-1"&gt;
        &lt;div class="collapse multi-collapse" id="multiCollapseExample2"&gt;
            &lt;div class="card card-body mb-0"&gt;
                Some placeholder content for the second collapse
                component
                of this multi-collapse example. This panel is hidden by
                default but revealed when the user activates the
                relevant
                trigger.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-6 -->

                <!-- Start:: row-7 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Custom Icon Accordion
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingcustomicon1One">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsecustomicon1One" aria-expanded="true"
                                                aria-controls="collapsecustomicon1One">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="collapsecustomicon1One" class="accordion-collapse collapse show"
                                            aria-labelledby="headingcustomicon1One"
                                            data-bs-parent="#accordioncustomicon1Example">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingcustomicon1Two">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two"
                                                aria-expanded="false" aria-controls="collapsecustomicon1Two">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="collapsecustomicon1Two" class="accordion-collapse collapse"
                                            aria-labelledby="headingcustomicon1Two"
                                            data-bs-parent="#accordioncustomicon1Example">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingcustomicon1Three">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three"
                                                aria-expanded="false" aria-controls="collapsecustomicon1Three">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="collapsecustomicon1Three" class="accordion-collapse collapse"
                                            aria-labelledby="headingcustomicon1Three"
                                            data-bs-parent="#accordioncustomicon1Example">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingcustomicon1One"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsecustomicon1One" aria-expanded="true"
                aria-controls="collapsecustomicon1One"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsecustomicon1One" class="accordion-collapse collapse show"
            aria-labelledby="headingcustomicon1One"
            data-bs-parent="#accordioncustomicon1Example"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingcustomicon1Two"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two"
                aria-expanded="false" aria-controls="collapsecustomicon1Two"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsecustomicon1Two" class="accordion-collapse collapse"
            aria-labelledby="headingcustomicon1Two"
            data-bs-parent="#accordioncustomicon1Example"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingcustomicon1Three"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three"
                aria-expanded="false" aria-controls="collapsecustomicon1Three"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsecustomicon1Three" class="accordion-collapse collapse"
            aria-labelledby="headingcustomicon1Three"
            data-bs-parent="#accordioncustomicon1Example"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Custom Accordion
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion customized-accordion accordions-items-seperate" id="customizedAccordion">
                                    <div class="accordion-item custom-accordion-primary">
                                        <h2 class="accordion-header" id="customizedAccordionOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#customized-AccordionOne" aria-expanded="true"
                                                aria-controls="customized-AccordionOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="customized-AccordionOne" class="accordion-collapse collapse show"
                                            aria-labelledby="customizedAccordionOne" data-bs-parent="#customizedAccordion">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item custom-accordion-secondary">
                                        <h2 class="accordion-header" id="customizedAccordionTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#customized-AccordionTwo" aria-expanded="false"
                                                aria-controls="customized-AccordionTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="customized-AccordionTwo" class="accordion-collapse collapse"
                                            aria-labelledby="customizedAccordionTwo" data-bs-parent="#customizedAccordion">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item custom-accordion-danger">
                                        <h2 class="accordion-header" id="customizedAccordionThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#customized-AccordionThree" aria-expanded="false"
                                                aria-controls="customized-AccordionThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="customized-AccordionThree" class="accordion-collapse collapse"
                                            aria-labelledby="customizedAccordionThree" data-bs-parent="#customizedAccordion">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion customized-accordion accordions-items-seperate" id="customizedAccordion"&gt;
    &lt;div class="accordion-item custom-accordion-primary"&gt;
        &lt;h2 class="accordion-header" id="customizedAccordionOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#customized-AccordionOne" aria-expanded="true"
                aria-controls="customized-AccordionOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="customized-AccordionOne" class="accordion-collapse collapse show"
            aria-labelledby="customizedAccordionOne" data-bs-parent="#customizedAccordion"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item custom-accordion-secondary"&gt;
        &lt;h2 class="accordion-header" id="customizedAccordionTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#customized-AccordionTwo" aria-expanded="false"
                aria-controls="customized-AccordionTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="customized-AccordionTwo" class="accordion-collapse collapse"
            aria-labelledby="customizedAccordionTwo" data-bs-parent="#customizedAccordion"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item custom-accordion-danger"&gt;
        &lt;h2 class="accordion-header" id="customizedAccordionThree"&gt;
            &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#customized-AccordionThree" aria-expanded="false"
                aria-controls="customized-AccordionThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="customized-AccordionThree" class="accordion-collapse collapse"
            aria-labelledby="customizedAccordionThree" data-bs-parent="#customizedAccordion"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-7 -->

                <!-- Start:: row-9 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Left Aligned Icons
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordionicon-left accordions-items-seperate"
                                    id="accordioniconLeftExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingleftOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseleftOne" aria-expanded="true"
                                                aria-controls="collapseleftOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="collapseleftOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingleftOne" data-bs-parent="#accordioniconLeftExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingleftTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseLeftTwo"
                                                aria-expanded="false" aria-controls="collapseLeftTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="collapseLeftTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingleftTwo" data-bs-parent="#accordioniconLeftExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden
                                                by default, until the collapse plugin adds the appropriate classes that
                                                we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You
                                                can modify any of this with custom CSS or overriding our default
                                                variables. It's also worth noting that just about any HTML can go within
                                                the <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingleftThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseLeftThree"
                                                aria-expanded="false" aria-controls="collapseLeftThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="collapseLeftThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingleftThree"
                                            data-bs-parent="#accordioniconLeftExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden
                                                by default, until the collapse plugin adds the appropriate classes that
                                                we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You
                                                can modify any of this with custom CSS or overriding our default
                                                variables. It's also worth noting that just about any HTML can go within
                                                the <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion accordionicon-left accordions-items-seperate"
    id="accordioniconLeftExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingleftOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseleftOne" aria-expanded="true"
                aria-controls="collapseleftOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseleftOne" class="accordion-collapse collapse show"
            aria-labelledby="headingleftOne" data-bs-parent="#accordioniconLeftExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingleftTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseLeftTwo"
                aria-expanded="false" aria-controls="collapseLeftTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseLeftTwo" class="accordion-collapse collapse"
            aria-labelledby="headingleftTwo" data-bs-parent="#accordioniconLeftExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden
                by default, until the collapse plugin adds the appropriate classes that
                we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You
                can modify any of this with custom CSS or overriding our default
                variables. It's also worth noting that just about any HTML can go within
                the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit
                overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingleftThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseLeftThree"
                aria-expanded="false" aria-controls="collapseLeftThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseLeftThree" class="accordion-collapse collapse"
            aria-labelledby="headingleftThree"
            data-bs-parent="#accordioniconLeftExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden
                by default, until the collapse plugin adds the appropriate classes that
                we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You
                can modify any of this with custom CSS or overriding our default
                variables. It's also worth noting that just about any HTML can go within
                the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit
                overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Without Icon
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordionicon-none accordions-items-seperate"
                                    id="accordioniconnoIconExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingnoIconOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsenoIconOne" aria-expanded="true"
                                                aria-controls="collapsenoIconOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="collapsenoIconOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingnoIconOne"
                                            data-bs-parent="#accordioniconnoIconExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we
                                                use to style each element. These classes control the overall appearance,
                                                as well as the showing and hiding via CSS transitions. You can modify
                                                any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingnoIconTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsenoIconTwo"
                                                aria-expanded="false" aria-controls="collapsenoIconTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="collapsenoIconTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingnoIconTwo"
                                            data-bs-parent="#accordioniconnoIconExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden
                                                by default, until the collapse plugin adds the appropriate classes that
                                                we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You
                                                can modify any of this with custom CSS or overriding our default
                                                variables. It's also worth noting that just about any HTML can go within
                                                the <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingnoIconThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsenoIconThree"
                                                aria-expanded="false" aria-controls="collapsenoIconThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="collapsenoIconThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingnoIconThree"
                                            data-bs-parent="#accordioniconnoIconExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden
                                                by default, until the collapse plugin adds the appropriate classes that
                                                we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You
                                                can modify any of this with custom CSS or overriding our default
                                                variables. It's also worth noting that just about any HTML can go within
                                                the <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="accordion accordionicon-none accordions-items-seperate"
    id="accordioniconnoIconExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingnoIconOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsenoIconOne" aria-expanded="true"
                aria-controls="collapsenoIconOne"&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsenoIconOne" class="accordion-collapse collapse show"
            aria-labelledby="headingnoIconOne"
            data-bs-parent="#accordioniconnoIconExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                default, until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions. You can modify
                any of this with custom CSS or overriding our default variables. It's
                also worth noting that just about any HTML can go within the
                &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingnoIconTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapsenoIconTwo"
                aria-expanded="false" aria-controls="collapsenoIconTwo"&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsenoIconTwo" class="accordion-collapse collapse"
            aria-labelledby="headingnoIconTwo"
            data-bs-parent="#accordioniconnoIconExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden
                by default, until the collapse plugin adds the appropriate classes that
                we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You
                can modify any of this with custom CSS or overriding our default
                variables. It's also worth noting that just about any HTML can go within
                the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit
                overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingnoIconThree"&gt;
            &lt;button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapsenoIconThree"
                aria-expanded="false" aria-controls="collapsenoIconThree"&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapsenoIconThree" class="accordion-collapse collapse"
            aria-labelledby="headingnoIconThree"
            data-bs-parent="#accordioniconnoIconExample"&gt;
            &lt;div class="accordion-body"&gt;
                &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden
                by default, until the collapse plugin adds the appropriate classes that
                we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You
                can modify any of this with custom CSS or overriding our default
                variables. It's also worth noting that just about any HTML can go within
                the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit
                overflow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-9 -->

                <!-- Start:: row-10 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Horizontal Collapse</div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseWidthExample" aria-expanded="false"
                                        aria-controls="collapseWidthExample">
                                        Toggle width collapse
                                    </button>
                                </p>
                                <div style="min-height: 120px;">
                                    <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                        <div class="card card-body" style="width: 230px;">
                                            This is some placeholder content for a horizontal collapse. It's
                                            hidden
                                            by default and shown when triggered.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p&gt;
    &lt;button class="btn btn-primary" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseWidthExample" aria-expanded="false"
        aria-controls="collapseWidthExample"&gt;
        Toggle width collapse
    &lt;/button&gt;
&lt;/p&gt;
&lt;div style="min-height: 120px;"&gt;
    &lt;div class="collapse collapse-horizontal" id="collapseWidthExample"&gt;
        &lt;div class="card card-body" style="width: 230px;"&gt;
            This is some placeholder content for a horizontal collapse. It's
            hidden
            by default and shown when triggered.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-10 -->
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

    <!-- Prism JS -->
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/js/prism-custom.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>