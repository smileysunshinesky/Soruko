<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>
    <?php include 'components/externalcss.php'; ?>

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
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home"
                        aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-profile" type="button" role="tab" aria-controls="switcher-profile"
                        aria-selected="false">Theme Colors</button>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
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
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr"
                                        checked>
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
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
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
                                        data-bs-placement="top" title="Gradient Header" type="radio"
                                        name="header-colors" id="switcher-header-gradient">
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
                                    <div class="pickr-container-primary" onchange="updateChartColor(this.value)"></div>
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
                <div class="d-flex justify-content-center canvas-footer flex-wrap">
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1 w-100">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


    <!-- Loader -->
    <div id="loader">
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
                        <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                            data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-search d-md-block d-none">
                        <!-- Start::header-link -->
                        <input type="text" class="header-search-bar form-control border-0 bg-body"
                            placeholder="Search for Results...">
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
                            <a href="javascript:void(0);"
                                class="btn bg-body header-dashboards-button text-start d-flex align-items-center justify-content-between"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            </a>
                            <ul class="dropdown-menu dashboard-dropdown" role="menu">
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index.php">Sales
                                        Dashboard</a></li>
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index-1.php">Analytics
                                        Dashboard</a></li>
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index-2.php">Ecommerce
                                        Dashboard</a></li>
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index-3.php">CRM
                                        Dashboard</a></li>
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index-4.php">HRM
                                        Dashboard</a></li>
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index-5.php">NFT
                                        Dashboard</a></li>
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index-6.php">Crypto
                                        Dashboard</a></li>
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index-7.php">Jobs
                                        Dashboard</a></li>
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index-8.php">Projects
                                        Dashboard</a></li>
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index-9.php">Courses
                                        Dashboard</a></li>
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index-10.php">Stocks
                                        Dashboard</a></li>
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index-11.php">Personal
                                        Dashboard</a></li>
                                <li><a class="dropdown-item dashboards-dropdown-item" href="index-12.php">Customer
                                        Dashboard</a></li>
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
                        <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                            data-bs-target="#header-responsive-search">
                            <!-- Start::header-link-icon -->
                            <i class="bi bi-search header-link-icon"></i>
                            <!-- End::header-link-icon -->
                        </a>
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class="header-element country-selector">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
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
                                        <img src="assets/images/flags/spain_flag.jpg" alt="img">
                                    </span>
                                    Spanish
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="assets/images/flags/french_flag.jpg" alt="img">
                                    </span>
                                    French
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="assets/images/flags/germany_flag.jpg" alt="img">
                                    </span>
                                    German
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="assets/images/flags/italy_flag.jpg" alt="img">
                                    </span>
                                    Italian
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="assets/images/flags/russia_flag.jpg" alt="img">
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
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <i class="bi bi-cart2 header-link-icon"></i>
                            <span class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-16">Cart Items<span
                                            class="badge bg-success-transparent ms-1 fs-12 rounded-circle"
                                            id="cart-data">5</span></p>
                                    <span><span class="text-muted me-1">Total:</span><span
                                            class="text-primary fw-medium">$14,289</span></span>
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
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-x"></i></a>
                                                </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Quantity: 01</li>
                                                    <li><span class="badge bg-light text-default border">In Stock</span>
                                                    </li>
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
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-x"></i></a>
                                                </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item">
                                                    <li>Quantity: 02</li>
                                                    <li><span class="badge bg-light text-default border">In Stock</span>
                                                    </li>
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
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-x"></i></a>
                                                </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Quantity: 01</li>
                                                    <li><span class="badge bg-light text-default border">In Stock</span>
                                                    </li>
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
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-x"></i></a>
                                                </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Quantity: 02</li>
                                                    <li><span class="badge bg-danger-transparent border">Out Of
                                                            Stock</span></li>
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
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-x"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Quantity: 03</li>
                                                    <li><span class="badge bg-light text-default border">In Stock</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item border-top">
                                <div class="text-center">
                                    <a href="checkout.php" class="link-primary text-decoration-underline">Proceed to
                                        checkout</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-primary-transparent">
                                        <i class="ri-shopping-cart-2-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-medium mb-1 mt-3">Your Cart is Empty</h6>
                                    <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                                    <a href="products.php" class="btn btn-primary btn-wave btn-sm m-1"
                                        data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class="header-element notifications-dropdown d-xl-block d-none">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
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
                                                <span class="text-muted fw-normal fs-12 header-notification-text">Hey
                                                    there! What's up?</span>
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
                                    <div class="d-flex align-items-center">
                                        <div class="pe-2 lh-1">
                                            <span class="avatar bg-secondary-transparent avatar-rounded">
                                                <img src="assets/images/faces/21.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-medium"><a href="notifications.php">Customer
                                                        Support</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">Great
                                                    job on resolving the issue! Thank you!</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x"></i></a>
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
                                                <p class="mb-0 fw-medium"><a href="notifications.php">Digital Marketing
                                                        Trends</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">Next
                                                    Thursday at 2:30 PM</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-center">
                                        <div class="pe-2 lh-1">
                                            <span class="avatar bg-danger-transparent avatar-rounded"><i
                                                    class="ti ti-circle-check fs-18"></i></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-medium"><a href="notifications.php">Amount: $50.00
                                                        paid for the order</a></p>
                                                <span
                                                    class="text-muted fw-normal fs-12 header-notification-text">Transaction
                                                    ID: 123456789</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x"></i></a>
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
                                                <span class="text-muted fw-normal fs-12 header-notification-text">Would
                                                    you like to connect?</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="text-center">
                                    <a href="notifications.php" class="link-primary text-decoration-underline">View
                                        All</a>
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
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="me-sm-2 me-0">
                                    <img src="assets/images/faces/9.jpg" alt="img"
                                        class="avatar avatar-sm avatar-rounded">
                                </div>
                                <div class="d-xl-block d-none lh-1">
                                    <span class="fw-medium lh-1">Mr. Stark</span>
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                            aria-labelledby="mainHeaderProfile">
                            <li><a class="dropdown-item d-flex align-items-center" href="profile.php"><i
                                        class="bi bi-person fs-18 me-2 op-7"></i>Profile</a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="mail.php"><i
                                        class="bi bi-envelope fs-16 me-2 op-7"></i>Inbox <span
                                        class="ms-auto badge bg-light border text-default">19</span></a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="to-do-list.php"><i
                                        class="bi bi-check-square fs-16 me-2 op-7"></i>Task Manager</a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="mail-settings.php"><i
                                        class="bi bi-gear fs-16 me-2 op-7"></i>Settings</a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="chat.php"><i
                                        class="bi bi-headset fs-18 me-2 op-7"></i>Support</a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="sign-in-cover.php"><i
                                        class="bi bi-box-arrow-right fs-18 me-2 op-7"></i>Log Out</a></li>
                        </ul>
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                            data-bs-target="#switcher-canvas">
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
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
                                            <a href="projects-overview.php" class="side-menu__item">Project
                                                Overview</a>
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
                                            <a href="job-candidate-search.php" class="side-menu__item">Search
                                                Candidate</a>
                                        </li>
                                        <li class="slide">
                                            <a href="job-candidate-details.php" class="side-menu__item">Candidate
                                                Details</a>
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
                                            <a href="nft-wallet-integration.php" class="side-menu__item">Wallet
                                                Integration</a>
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
                                            <a href="crypto-currency-exchange.php" class="side-menu__item">Currency
                                                Exchange</a>
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
                                                    <a href="javascript:void(0);"
                                                        class="side-menu__item">Nested-2.2.1</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="javascript:void(0);"
                                                        class="side-menu__item">Nested-2.2.2</a>
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
                                            <a href="form_dateTime_pickers.php" class="side-menu__item">Date,Time
                                                Picker</a>
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
                                            <a href="apex-rangearea-charts.php" class="side-menu__item">Range Area
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-timeline-charts.php" class="side-menu__item">Timeline
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-funnel-charts.php" class="side-menu__item">Funnel Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-candlestick-charts.php" class="side-menu__item">CandleStick
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-boxplot-charts.php" class="side-menu__item">Boxplot
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bubble-charts.php" class="side-menu__item">Bubble Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-scatter-charts.php" class="side-menu__item">Scatter
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-heatmap-charts.php" class="side-menu__item">Heatmap
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-treemap-charts.php" class="side-menu__item">Treemap
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-pie-charts.php" class="side-menu__item">Pie Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radialbar-charts.php" class="side-menu__item">Radialbar
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radar-charts.php" class="side-menu__item">Radar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-polararea-charts.php" class="side-menu__item">Polararea
                                                Charts</a>
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
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                            width="24" height="24" viewBox="0 0 24 24">
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
                <div
                    class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Crypto</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Crypto</li>
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
                <!-- End::page-header -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="swiper swiper-basic">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg"
                                                            alt="" class="avatar avatar-sm">
                                                    </div>
                                                    <div>Bitcoin - $34,563</div>
                                                    <div class="text-green">+0.57%</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg"
                                                            alt="" class="avatar avatar-sm">
                                                    </div>
                                                    <div>Solana - $34,563</div>
                                                    <div class="text-danger">-0.045%</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg"
                                                            alt="" class="avatar avatar-sm">
                                                    </div>
                                                    <div>Binance - $34,563</div>
                                                    <div class="text-danger">-0.12%</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg"
                                                            alt="" class="avatar avatar-sm">
                                                    </div>
                                                    <div>Cardano - $34,563</div>
                                                    <div class="text-green">+0.23%</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg"
                                                            alt="" class="avatar avatar-sm">
                                                    </div>
                                                    <div>Etherium - $34,563</div>
                                                    <div class="text-green">+1.78%</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg"
                                                            alt="" class="avatar avatar-sm">
                                                    </div>
                                                    <div>Tether - $34,563</div>
                                                    <div class="text-danger">-0.27%</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/xrp-xrp-logo.svg"
                                                            alt="" class="avatar avatar-sm invert-1">
                                                    </div>
                                                    <div>XRP - $34,563</div>
                                                    <div class="text-green">+0.34%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <img src="assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg"
                                        class="crypto-main-card-icon" alt="">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center gap-3 flex-fill">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg"
                                                    alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Bitcoin - BTC</div>
                                    </div>
                                    <div>
                                        <span class="badge bg-success-transparent">0.41%</span>
                                    </div>
                                </div>
                                <div class="h4 mb-0">
                                    0.8531 BTC
                                </div>
                                <span class="d-block text-muted ">
                                    29471.02 USD
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <img src="assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg"
                                        class="crypto-main-card-icon" alt="">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center gap-3 flex-fill">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg"
                                                    alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Etherium - ETH</div>
                                    </div>
                                    <div>
                                        <span class="badge bg-success-transparent">1.18%</span>
                                    </div>
                                </div>
                                <div class="h4 mb-0">
                                    3.28353 ETH
                                </div>
                                <span class="d-block text-muted ">
                                    5965.91 USD
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <img src="assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg"
                                        class="crypto-main-card-icon" alt="">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center gap-3 flex-fill">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg"
                                                    alt="">
                                            </span>
                                        </div>
                                        <div class="fs-14">Tether - USDT</div>
                                    </div>
                                    <div>
                                        <span class="badge bg-danger-transparent">-0.05%</span>
                                    </div>
                                </div>
                                <div class="h4 mb-0">
                                    302.1442 USDT
                                </div>
                                <span class="d-block text-muted ">
                                    302.1442 USD
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <img src="assets/images/crypto-currencies/crypto-icons/xrp-xrp-logo.svg"
                                        class="crypto-main-card-icon invert-1" alt="">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center gap-3 flex-fill">
                                        <div class="lh-1">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="assets/images/crypto-currencies/crypto-icons/xrp-xrp-logo.svg"
                                                    alt="" class="invert-1">
                                            </span>
                                        </div>
                                        <div class="fs-14">XRP - XRP</div>
                                    </div>
                                    <div>
                                        <span class="badge bg-success-transparent">0.01%</span>
                                    </div>
                                </div>
                                <div class="h4 mb-0">
                                    2452.234 XRP
                                </div>
                                <span class="d-block text-muted">
                                    1385.24 USD
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Market Cap
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Sort By <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" style="">
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled crypto-marketcap-list">
                                    <li>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                            <div class="d-flex align-items-center gap-3 w-sm-25">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded p-2 bg-light">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg"
                                                            alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block fs-15">Bitcoin</span>
                                                    <span class="d-block text-muted">BTC</span>
                                                </div>
                                            </div>
                                            <div id="btc-marketcap"></div>
                                            <div class="text-end w-sm-25">
                                                <span>$1.32 Trillion</span>
                                                <span class="d-block text-success">25.02%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                            <div class="d-flex align-items-center gap-3 w-sm-25">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded p-2 bg-light">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg"
                                                            alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block fs-15">Etherium</span>
                                                    <span class="d-block text-muted">ETH</span>
                                                </div>
                                            </div>
                                            <div id="eth-marketcap"></div>
                                            <div class="text-end w-sm-25">
                                                <span>$216.56 Billion</span>
                                                <span class="d-block text-success">0.78%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                            <div class="d-flex align-items-center gap-3 w-sm-25">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded p-2 bg-light">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg"
                                                            alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block fs-15">Tether</span>
                                                    <span class="d-block text-muted">USDT</span>
                                                </div>
                                            </div>
                                            <div id="usdt-marketcap"></div>
                                            <div class="text-end w-sm-25">
                                                <span>$84,610,539,823</span>
                                                <span class="d-block text-success">0.01%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                            <div class="d-flex align-items-center gap-3 w-sm-25">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded p-2 bg-light">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg"
                                                            alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block fs-15">Solana</span>
                                                    <span class="d-block text-muted">SOL</span>
                                                </div>
                                            </div>
                                            <div id="sol-marketcap"></div>
                                            <div class="text-end w-sm-25">
                                                <span>$15,014,256,174</span>
                                                <span class="d-block text-success">8.80%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                            <div class="d-flex align-items-center gap-3 w-sm-25">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded p-2 bg-light">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg"
                                                            alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block fs-15">Cardano</span>
                                                    <span class="d-block text-muted">ADA</span>
                                                </div>
                                            </div>
                                            <div id="ada-marketcap"></div>
                                            <div class="text-end w-sm-25">
                                                <span>$10.62 Billion</span>
                                                <span class="d-block text-success">1.36%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                            <div class="d-flex align-items-center gap-3 w-sm-25">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded p-2 bg-light">
                                                        <img src="assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg"
                                                            alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block fs-15">Binance</span>
                                                    <span class="d-block text-muted">BNB</span>
                                                </div>
                                            </div>
                                            <div id="bnb-marketcap"></div>
                                            <div class="text-end w-sm-25">
                                                <span>$34.37 Billion</span>
                                                <span class="d-block text-success">0.35%</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title flex-fill">
                                    Crypto Analysis
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary btn-sm btn-wave">1D</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">1W</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">1M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm btn-wave">1Y</button>
                                </div>
                                <div class="btn-group ms-2">
                                    <button type="button" class="btn btn-outline-light border btn-sm dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="avatar avatar-xs avatar-rounded me-2 align-middle"><img
                                                src="assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg"
                                                alt=""></span>Bitcoin
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);"><span
                                                    class="avatar avatar-xs avatar-rounded me-2 align-middle"><img
                                                        src="assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg"
                                                        alt=""></span>Etherium</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><span
                                                    class="avatar avatar-xs avatar-rounded me-2 align-middle"><img
                                                        src="assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg"
                                                        alt=""></span>Tether</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><span
                                                    class="avatar avatar-xs avatar-rounded me-2 align-middle"><img
                                                        src="assets/images/crypto-currencies/crypto-icons/xrp-xrp-logo.svg"
                                                        alt=""></span>XRP</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><span
                                                    class="avatar avatar-xs avatar-rounded me-2 align-middle"><img
                                                        src="assets/images/crypto-currencies/crypto-icons/tron-trx-logo.svg"
                                                        alt=""></span>TRON</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap p-3 border-bottom border-block-end-dashed">
                                    <div class="me-3">
                                        <span class="avatar avatar-md avatar-rounded p-2 bg-light">
                                            <img src="assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg"
                                                alt="">
                                        </span>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-sm-evenly flex-fill">
                                        <div class="m-sm-0 m-2">
                                            <span>Symbol</span>
                                            <p class="mb-0">BTC</p>
                                        </div>
                                        <div class="m-sm-0 m-2">
                                            <span>Price Benchmark</span>
                                            <p class="mb-0">128.00%</p>
                                        </div>
                                        <div class="m-sm-0 m-2">
                                            <span>Price (USD)</span>
                                            <p class="text-success mb-0">$34,254.80</p>
                                        </div>
                                        <div class="m-sm-0 m-2">
                                            <span>Change (24H)</span>
                                            <p class="text-danger mb-0">-0.24%</p>
                                        </div>
                                        <div class="m-sm-0 m-2">
                                            <span>Market Cap</span>
                                            <p class="mb-0">$1.32T</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="crypto-analysis"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Recent Trades
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary-light">View All</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table card-table table-vcenter text-nowrap mb-0">
                                        <tbody class="active-tab">
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="mb-0">Bitcoin - <span
                                                                    class="text-muted">(0.0092312)</span></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="avatar avatar-sm bg-success-transparent">
                                                        <i class="ti ti-trending-up fs-18"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="align-items-center text-center">
                                                        <div class="d-flex align-items-center fw-medium">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="assets/images/faces/4.jpg" alt="">
                                                            </span>
                                                            <span class="ms-2">Emiley Jackson</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted">24,Nov 2023</span>
                                                </td>
                                                <td>
                                                    <div class="align-items-center text-end">
                                                        <span class="fs-12 text-muted mb-1">Delivered Time</span>
                                                        <p class="mb-0">04:24PM -
                                                            <span class="fs-11 text-danger fw-medium">Sent</span>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="mb-0">Etherium - <span
                                                                    class="text-muted">(0.9207702)</span></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="avatar avatar-sm bg-danger-transparent">
                                                        <i class="ti ti-trending-down fs-18"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="align-items-center text-center">
                                                        <div class="d-flex align-items-center fw-medium">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="assets/images/faces/15.jpg" alt="">
                                                            </span>
                                                            <span class="ms-2">Jackie Shraff</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted">25,Jan 2024</span>
                                                </td>
                                                <td>
                                                    <div class="align-items-center text-end">
                                                        <span class="fs-12 text-muted mb-1">Received Time</span>
                                                        <p class="mb-0">11:57PM -
                                                            <span class="fs-11 text-success fw-medium">Received</span>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="mb-0">Tether - <span
                                                                    class="text-muted">(0.83092333)</span></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="avatar avatar-sm bg-success-transparent">
                                                        <i class="ti ti-trending-up fs-18"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="align-items-center text-center">
                                                        <div class="d-flex align-items-center fw-medium">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="assets/images/faces/11.jpg" alt="">
                                                            </span>
                                                            <span class="ms-2">Toni Stark</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted">16,Jan 2024</span>
                                                </td>
                                                <td>
                                                    <div class="align-items-center text-end">
                                                        <span class="fs-12 text-muted mb-1">Received Time</span>
                                                        <p class="mb-0">02:28AM -
                                                            <span class="fs-11 text-success fw-medium">Received</span>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="mb-0">Solana - <span
                                                                    class="text-muted">(0.0092363)</span></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="avatar avatar-sm bg-danger-transparent">
                                                        <i class="ti ti-trending-down fs-18"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="align-items-center text-center">
                                                        <div class="d-flex align-items-center fw-medium">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="assets/images/faces/5.jpg" alt="">
                                                            </span>
                                                            <span class="ms-2">Jessica May</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted">31,Dec 2023</span>
                                                </td>
                                                <td>
                                                    <div class="align-items-center text-end">
                                                        <span class="fs-12 text-muted mb-1">Sent Time</span>
                                                        <p class="mb-0">10:08AM -
                                                            <span class="fs-11 text-info fw-medium">Processing</span>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="mb-0">Cardano - <span
                                                                    class="text-muted">(1.00009023)</span></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="avatar avatar-sm bg-success-transparent">
                                                        <i class="ti ti-trending-up fs-18"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="align-items-center text-center">
                                                        <div class="d-flex align-items-center fw-medium">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="assets/images/faces/12.jpg" alt="">
                                                            </span>
                                                            <span class="ms-2">Lieonel Marsi</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted">18,Jan 2024</span>
                                                </td>
                                                <td>
                                                    <div class="align-items-center text-end">
                                                        <span class="fs-12 text-muted mb-1">Received Time</span>
                                                        <p class="mb-0">06:05PM -
                                                            <span class="fs-11 text-success fw-medium">Received</span>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="align-items-center">
                                                            <p class="mb-0">Binance - <span
                                                                    class="text-muted">(22.345332)</span></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span class="avatar avatar-sm bg-danger-transparent">
                                                        <i class="ti ti-trending-down fs-18"></i>
                                                    </span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="align-items-center text-center">
                                                        <div class="d-flex align-items-center fw-medium">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="assets/images/faces/10.jpg" alt="">
                                                            </span>
                                                            <span class="ms-2">Christian Ronan</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span class="text-muted">12,Dec 2023</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="align-items-center text-end">
                                                        <span class="fs-12 text-muted mb-1">Received Time</span>
                                                        <p class="mb-0">12:23PM -
                                                            <span class="fs-11 text-danger fw-medium">Sent</span>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header">
                                <div class="card-title">
                                    Investments
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-20 me-3 lh-1">
                                                            <span
                                                                class="avatar avatar-sm bg-primary-transparent svg-primary crypto-investments"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    enable-background="new 0 0 24 24"
                                                                    viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M14.075,24v-3.188c3.779-0.207,6.305-1.167,6.642-4.756c0.264-2.88-1.084-4.165-3.223-4.682l0.001-0.002c1.289-0.665,2.109-1.846,1.919-3.811c-0.249-2.688-2.438-3.589-5.339-3.84V0h-2.256v3.619c-0.586,0-1.186,0.015-1.787,0.03V0.001H7.776v3.722c-0.829,0.025-1.795,0.013-4.526,0v2.422c1.781-0.032,2.715-0.147,2.929,1.004V17.34c-0.136,0.914-0.861,0.782-2.475,0.753L3.25,20.796c4.113,0,4.526,0.015,4.526,0.015v3.188h2.256v-3.143c0.615,0.015,1.216,0.015,1.787,0.015V24H14.075z M10.077,6.306c1.274,0,5.259-0.399,5.259,2.275c0,2.555-3.985,2.26-5.259,2.26V6.306z M10.077,18.106v-4.992c1.523,0,6.188-0.428,6.188,2.496C16.265,18.431,11.6,18.106,10.077,18.106z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                        <div class="mt-1">
                                                            <h6 class="mb-0 fs-12 mb-0">BTC/USD</h6>
                                                            <span class="text-success fs-11"><i
                                                                    class="fa fa-caret-up me-1"></i>2.04%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0">$15,245</h6>
                                                    <small class="fs-11 text-muted">340.5 USD</small>
                                                </td>
                                                <td>
                                                    <div class="mb-0 d-flex align-items-center gap-1"><span
                                                            class="badge badge-sm bg-danger-transparent text-danger">USD</span><span
                                                            class="rtl-rotate"> <i
                                                                class="bi bi-arrow-right-short text-muted fs-16"></i>
                                                        </span> <span
                                                            class="badge badge-sm bg-success-transparent text-success">BTC</span>
                                                    </div>
                                                    <small class="fs-11 text-muted">1.00 = 0.0000121</small>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Completed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-20 me-3 lh-1">
                                                            <span
                                                                class="avatar avatar-sm bg-secondary-transparent svg-secondary crypto-investments">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 128 128">
                                                                    <path
                                                                        d="M65.7 96.4V128l39.2-55.1zM103.4 62.7L65.7 0v45.6zM65.7 49.2v38.9l37.4-21.9zM24.7 62.7L62.4 0v45.6zM62.4 49.2v38.9L24.9 66.2zM62.3 96.4V128L23.1 72.9z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-12 mb-0">ETH/USD</h6>
                                                            <span class="text-success fs-11"><i
                                                                    class="fa fa-caret-up me-1"></i>3.05%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0">$10,283</h6>
                                                    <small class="fs-11 text-muted">340.5 USD</small>
                                                </td>
                                                <td>
                                                    <div class="mb-0 d-flex align-items-center gap-1"><span
                                                            class="badge badge-sm bg-danger-transparent text-danger">USD</span><span
                                                            class="rtl-rotate"> <i
                                                                class="bi bi-arrow-right-short text-muted fs-16"></i>
                                                        </span> <span
                                                            class="badge badge-sm bg-success-transparent text-success">ETH</span>
                                                    </div>
                                                    <small class="fs-11 text-muted">1.00 = 0.0475</small>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-transparent">Cancelled</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-20 me-3 lh-1">
                                                            <span
                                                                class="avatar avatar-sm bg-danger-transparent svg-danger  crypto-investments">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    enable-background="new 0 0 32 32"
                                                                    viewBox="0 0 32 32">
                                                                    <path
                                                                        d="M21.022 3.305c.481 2.917 8.449 5.085 3.016 13.286-.086.129-.294.079-.314-.075-.435-3.378-1.004-5.469-3.349-6.963-.052-.033-.112-.048-.171-.033-.869.218-3.112 1.461-4.123 2.863-.052.072-.137.107-.224.09-1.878-.37-3.788-1.111-4.744-2.376-.068-.09-.186-.123-.284-.067-1.344.768-2.697 2.537-2.82 6.577-.005.169-.232.23-.314.082C4.249 10.48 6.491 6.091 11.736 4.097c.135-.051.281.034.312.175.456 2.061 2.844 3.936 3.67 4.532.132.095.303.015.332-.145.457-2.496 2.757-4.809 4.665-5.559C20.858 3.045 20.997 3.154 21.022 3.305zM16.5 21H15v-1h1.5c.275 0 .5.224.5.5S16.775 21 16.5 21zM18 23.5c0 .276-.225.5-.5.5.146 0-2.347 0-2.5 0v-1c-.103 0 2.321 0 2.5 0C17.775 23 18 23.224 18 23.5z">
                                                                    </path>
                                                                    <path
                                                                        d="M16,14c-4.418,0-8,3.582-8,8s3.582,8,8,8s8-3.582,8-8S20.418,14,16,14z M17.35,26H17v1.5h-1V26h-1v1.5h-1V26h-0.5
                                                                    c-0.276,0-0.5-0.224-0.5-0.5c0-0.154,0-7.246,0-7c0-0.276,0.224-0.5,0.5-0.5H14v-1.5h1V18h1v-1.5h1v1.551
                                                                    c1.45,0.296,2.406,1.837,1.829,3.34c0.767,0.485,1.258,1.37,1.159,2.364C19.857,25.058,18.66,26,17.35,26z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-12 mb-0">BSD/USD</h6>
                                                            <span class="text-danger fs-11"><i
                                                                    class="fa fa-caret-down me-1"></i>0.45%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0">$568.123</h6>
                                                    <small class="fs-11 text-muted">198.2 USD</small>
                                                </td>
                                                <td>
                                                    <div class="mb-0 d-flex align-items-center gap-1"><span
                                                            class="badge badge-sm bg-danger-transparent text-danger">USD</span><span
                                                            class="rtl-rotate"> <i
                                                                class="bi bi-arrow-right-short text-muted fs-16"></i>
                                                        </span> <span
                                                            class="badge badge-sm bg-success-transparent text-success">BSD</span>
                                                    </div>
                                                    <small class="fs-11 text-muted">1.00 = 0.00227</small>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-transparent">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-20 me-3 lh-1">
                                                            <span
                                                                class="avatar avatar-sm bg-success-transparent svg-success crypto-investments">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 128 128">
                                                                    <path
                                                                        d="M3 99.8C5 94 6.8 88.6 8.8 83.1c.2-.5 1.2-1 1.8-1 3.3-.1 6.6 0 9.9 0h64.6c1.7 0 2.5-.5 3-2.2 3.6-10.6 7.3-21.2 11-31.8.2-.6.3-1.1.6-2H21.4c2-5.9 3.9-11.4 5.9-16.9.2-.4 1-.8 1.5-.8 2-.1 3.9 0 5.9 0 26.5 0 53 .2 79.6-.1 7.9-.1 16.3 6 12.9 17.6-2.5 8.7-5.8 17.1-8.7 25.6-1 2.9-2 5.9-3 8.7-3.7 10.2-11.2 16.3-21.5 19.2-.9.3-1.9.3-2.9.3H5.2c-.6.1-1.3.1-2.2.1z">
                                                                    </path>
                                                                    <path
                                                                        d="M52.6 55.6c-2 5.6-3.9 10.9-5.9 16-.1.4-.9.7-1.4.7H.8c-.2 0-.4-.1-.8-.3 1.9-5.2 3.7-10.3 5.7-15.4.2-.5 1-1 1.5-1h45.4z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-12 mb-0">DASH/USD</h6>
                                                            <span class="text-success fs-11"><i
                                                                    class="fa fa-caret-up me-1"></i>1.05%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0">$10,283</h6>
                                                    <small class="fs-11 text-muted">273.5 USD</small>
                                                </td>
                                                <td>
                                                    <div class="mb-0 d-flex align-items-center gap-1"><span
                                                            class="badge badge-sm bg-danger-transparent text-danger">USD</span><span>
                                                            <i class="bi bi-arrow-right-short text-muted fs-16"></i>
                                                        </span> <span
                                                            class="badge badge-sm bg-success-transparent text-success">DASH</span>
                                                    </div>
                                                    <small class="fs-11 text-muted">1.00 = 0.00005</small>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Completed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-20 me-3 lh-1">
                                                            <span
                                                                class="avatar avatar-sm bg-warning-transparent svg-warning crypto-investments">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 128 128">
                                                                    <path
                                                                        d="M123 26.8c0 12.5-9.3 24.6-22.9 26.2-2.4.3-4.9.3-7.3.8-7.8 1.6-11.2 11.1-6 17.1 2.1 2.5 5.1 3.4 8.3 3.7 3.3.4 6.8.5 9.9 1.6 10.1 3.4 15.9 10.7 17.6 21.2 2.3 14.2-7.3 27-20.6 30-14.5 3.3-29.5-6.5-32.1-21.1-1.2-6.4.1-12.3 3-17.9 1.2-2.4 2.2-4.7 2.1-7.5-.2-4.4-3-8-7.4-9.5-3.8-1.3-8.1-.1-10.8 3.2-1.7 2.1-3.1 4.5-4.8 6.6-6.9 8.3-15.9 11.2-26.3 8.9-10.5-2.5-17.3-9.3-19.9-19.7C2 55.6 11.4 40.6 26.4 37.8c11-2.1 20 1.5 26.8 10.5 1.4 1.9 2.7 4.1 4.4 5.7 5.5 5.5 15.4 2.8 17.3-4.7.7-2.9.1-5.7-1.3-8.4-2.5-4.8-4.3-9.9-4.1-15.4C69.9 12.8 80 1.9 92.6.2c14.2-1.8 27.3 7.5 30 21.7.2 1.6.3 3.3.4 4.9z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-12 mb-0">RIPPLE/USD</h6>
                                                            <span class="text-danger fs-11"><i
                                                                    class="fa fa-caret-down me-1"></i>0.45%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0">$568.123</h6>
                                                    <small class="fs-11 text-muted">198.2 USD</small>
                                                </td>
                                                <td>
                                                    <div class="mb-0 d-flex align-items-center gap-1"><span
                                                            class="badge badge-sm bg-danger-transparent text-danger">USD</span><span
                                                            class="rtl-rotate"> <i
                                                                class="bi bi-arrow-right-short text-muted fs-16"></i>
                                                        </span> <span
                                                            class="badge badge-sm bg-success-transparent text-success">RIPPLE</span>
                                                    </div>
                                                    <small class="fs-11 text-muted">1.00 = 0.00142</small>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Completed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-20 me-3 lh-1">
                                                            <span
                                                                class="avatar avatar-sm bg-info-transparent svg-info crypto-investments">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 128 128">
                                                                    <path
                                                                        d="M18.629 74.359c.934 3.61 4.17 6.009 7.707 6.009.654 0 1.318-.082 1.98-.254L36 78.124V120a8 8 0 0 0 8 8h53.652c4.418 0 8.831-3.484 9.856-7.782l2.289-8.436c1.024-4.298-1.727-7.782-6.145-7.782H65V70.054l12.374-3.204a8 8 0 0 0 5.74-9.75l-1.036-8.995c-.937-3.622-4.144-6.037-7.633-6.037-.63 0-1.27.08-1.908.244L65 44.264V8c0-4.418-4.582-8-9-8H44a8 8 0 0 0-8 8v44.334l-12.667 3.28a8 8 0 0 0-5.74 9.75l1.036 8.995zm5.707-14.873L40 55.431V8c0-2.206 1.794-4 4-4h12c2.43 0 5 2.056 5 4V49.431l12.54-3.246c.298-.078.603-.117.905-.117 1.677 0 3.166 1.147 3.697 2.816l1.1 9.218a4.005 4.005 0 0 1-2.87 4.876L61 66.958V108h42.652c.887 0 1.588.269 1.974.758.379.48.481 1.204.292 2.046l-2.27 8.367-.017.06-.014.06c-.598 2.508-3.386 4.709-5.965 4.709H44c-2.206 0-4-1.794-4-4V72.956l-12.687 3.286c-.32.083-.65.126-.977.126-1.723 0-3.241-1.136-3.77-2.79l-1.1-9.216a4.005 4.005 0 0 1 2.87-4.876z">
                                                                    </path>
                                                                    <circle cx="48" cy="46" r="2"></circle>
                                                                    <circle cx="74" cy="116.083" r="2"></circle>
                                                                    <path
                                                                        d="M48 118h17a2 2 0 000-4H50V84.5a2 2 0 00-4 0V116a2 2 0 002 2zM48 40a2 2 0 002-2V14h3a2 2 0 000-4h-5a2 2 0 00-2 2v26a2 2 0 002 2z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-12 mb-0">LTC/USD</h6>
                                                            <span class="text-success fs-11"><i
                                                                    class="fa fa-caret-up me-1"></i>2.13%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="mb-0">$12,5817</h6>
                                                    <small class="fs-11 text-muted">298.5 USD</small>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="mb-0 d-flex align-items-center gap-1"><span
                                                            class="badge badge-sm bg-danger-transparent text-danger">USD</span><span
                                                            class="rtl-rotate"> <i
                                                                class="bi bi-arrow-right-short text-muted fs-16"></i>
                                                        </span> <span
                                                            class="badge badge-sm bg-success-transparent text-success">LTC</span>
                                                    </div>
                                                    <small class="fs-11 text-muted">1.00 = 0.0321</small>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-transparent">Cancelled</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                            <div class="card-header justify-content-between">
                                <div class="card-title">Crypto Currency Prices</div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-wave waves-effect waves-light">1D</button>
                                    <button type="button"
                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1W</button>
                                    <button type="button"
                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1M</button>
                                    <button type="button"
                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1Y</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap nft-table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>#</th>
                                                <th>Currency Name</th>
                                                <th>Price</th>
                                                <th>24h %</th>
                                                <th>7d %</th>
                                                <th>Circulating supply</th>
                                                <th>Volume</th>
                                                <th>Market Cap</th>
                                                <th>1 Week change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <span class="fs-15 text-muted"><i class="ri-star-line"></i></span>
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Bitcoin</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $34,283.53
                                                </td>
                                                <td>
                                                    <span class="text-green">39.23%</span>
                                                </td>
                                                <td>
                                                    <span class="text-green">16.78%</span>
                                                </td>
                                                <td>
                                                    19,528,893 BTC
                                                </td>
                                                <td>
                                                    $17,031,617,150
                                                </td>
                                                <td>
                                                    $669,649,033,571
                                                </td>
                                                <td>
                                                    <div id="bitcoin-change"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <span class="fs-15 text-muted"><i class="ri-star-line"></i></span>
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Etherium</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $1,800.81

                                                </td>
                                                <td>
                                                    <span class="text-green">58.63%</span>
                                                </td>
                                                <td>
                                                    <span class="text-green">12.43%</span>
                                                </td>
                                                <td>
                                                    120,269,517 ETH
                                                </td>
                                                <td>
                                                    $7,487,642,074
                                                </td>
                                                <td>
                                                    $216,466,869,907
                                                </td>
                                                <td>
                                                    <div id="etherium-change"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <span class="fs-15 text-muted"><i class="ri-star-line"></i></span>
                                                </td>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Tether - USDT</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $1.00
                                                </td>
                                                <td>
                                                    <span class="text-green">49.30%</span>
                                                </td>
                                                <td>
                                                    <span class="text-green">25.63%</span>
                                                </td>
                                                <td>
                                                    84,605,973,813 USDT
                                                </td>
                                                <td>
                                                    $28,979,751,192
                                                </td>
                                                <td>
                                                    $84,641,938,780
                                                </td>
                                                <td>
                                                    <div id="tether-change"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <span class="fs-15 text-muted"><i class="ri-star-line"></i></span>
                                                </td>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Solana - SOL</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $35.97
                                                </td>
                                                <td>
                                                    <span class="text-green">144.58%</span>
                                                </td>
                                                <td>
                                                    <span class="text-green">53.26%</span>
                                                </td>
                                                <td>
                                                    419,294,203 SOL
                                                </td>
                                                <td>
                                                    $1,332,401,692
                                                </td>
                                                <td>
                                                    $15,083,616,607
                                                </td>
                                                <td>
                                                    <div id="solana-change"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <span class="fs-15 text-muted"><i class="ri-star-line"></i></span>
                                                </td>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Cardano - ADA</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $0.3008
                                                </td>
                                                <td>
                                                    <span class="text-green">51.15%</span>
                                                </td>
                                                <td>
                                                    <span class="text-green">37.25%</span>
                                                </td>
                                                <td>
                                                    35,243,310,843 ADA
                                                </td>
                                                <td>
                                                    $230,065,465
                                                </td>
                                                <td>
                                                    $10,600,249,889
                                                </td>
                                                <td>
                                                    <div id="cardano-change"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center border-bottom-0">
                                                    <span class="fs-15 text-muted"><i class="ri-star-line"></i></span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    6
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Binance - BNB</div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    $227.36
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span class="text-green">25.85%</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span class="text-green">15.57%</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    151,703,773 BNB
                                                </td>
                                                <td class="border-bottom-0">
                                                    $277,569,562
                                                </td>
                                                <td class="border-bottom-0">
                                                    $34,488,924,548
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div id="binance-change"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <div>
                                        Showing 5 Entries <i class="bi bi-arrow-right ms-2"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
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
                                                    <a class="page-link text-primary" href="javascript:void(0);">
                                                        next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

            </div>
        </div>
        <!-- End::app-content -->


        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted"> Copyright © <span id="year"></span> <a href="javascript:void(0);"
                        class="text-dark fw-medium">Udon</a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                        <span class="fw-medium text-primary text-decoration-underline">Spruko</span>
                    </a> All
                    rights
                    reserved
                </span>
            </div>
        </footer>
        <!-- Footer End -->
        <div class="modal fade" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group">
                            <input type="text" class="form-control border-end-0" placeholder="Search Anything ..."
                                aria-label="Search Anything ..." aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2"><i
                                    class="bi bi-search"></i></button>
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

    <!-- Swiper JS -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Crypto-Dashboard JS -->
    <script src="assets/js/crypto-dashboard.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>


    <!-- Custom-Switcher JS -->
    <script src="assets/js/custom-switcher.min.js"></script>

</body>

</html>