<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>
    <?php include 'components/externalcss.php'; ?>

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
                        <h1 class="page-title fw-medium fs-18 mb-2">Ecommerce</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
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
                <!-- End:page-header -->

                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-4 flex-wrap">
                                    <div>
                                        <span class="avatar avatar-lg bg-primary-transparent">
                                            <i class="ri-shopping-bag-line fs-4"></i>
                                        </span>
                                    </div>
                                    <div
                                        class="flex-fill d-flex align-items-center justify-content-between flex-wrap gap-3">
                                        <div>
                                            <div class="mb-3">Total Sales</div>
                                            <div class="text-muted mb-1 fs-12">
                                                <span class="text-dark fs-20 lh-1 vertical-bottom">
                                                    14,732
                                                </span>
                                            </div>
                                            <span class="fs-12 mb-0"><i
                                                    class="ti ti-arrow-narrow-up fs-16 align-middle text-success"></i><span
                                                    class="badge bg-success-transparent text-success mx-1">+4.2%</span></span>
                                        </div>
                                        <div id="total-sales"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-4 flex-wrap">
                                    <div>
                                        <span class="avatar avatar-lg bg-info-transparent">
                                            <i class="ri-bill-line fs-4"></i>
                                        </span>
                                    </div>
                                    <div
                                        class="flex-fill d-flex align-items-center justify-content-between flex-wrap gap-3">
                                        <div>
                                            <div class="mb-3">Total Expenses</div>
                                            <div class="text-muted mb-1 fs-12">
                                                <span class="text-dark fs-20 lh-1 vertical-bottom">
                                                    $28,346.00
                                                </span>
                                            </div>
                                            <div>
                                                <span class="fs-12 mb-0"><i
                                                        class="ti ti-arrow-narrow-up fs-16 align-middle text-success"></i><span
                                                        class="badge bg-success-transparent text-success mx-1">+12.0%</span></span>
                                            </div>
                                        </div>
                                        <div id="total-expenses"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-4 flex-wrap">
                                    <div>
                                        <span class="avatar avatar-lg bg-success-transparent">
                                            <i class="ri-user-3-line fs-4"></i>
                                        </span>
                                    </div>
                                    <div
                                        class="flex-fill d-flex align-items-center justify-content-between flex-wrap gap-3">
                                        <div>
                                            <div class="mb-3">Total Visitors</div>
                                            <div class="text-muted mb-1 fs-12">
                                                <span class="text-dark fs-20 lh-1 vertical-bottom">
                                                    1,29,368
                                                </span>
                                            </div>
                                            <div>
                                                <span class="fs-12 mb-0 text-danger"><i
                                                        class="ti ti-arrow-narrow-down fs-16 align-middle"></i><span
                                                        class="badge bg-danger-transparent mx-1">-7.6%</span></span>
                                            </div>
                                        </div>
                                        <div id="total-visitors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-4 flex-wrap">
                                    <div>
                                        <span class="avatar avatar-lg bg-warning-transparent">
                                            <i class="ri-shopping-cart-2-line fs-4"></i>
                                        </span>
                                    </div>
                                    <div
                                        class="flex-fill d-flex align-items-center justify-content-between flex-wrap gap-3">
                                        <div>
                                            <div class="mb-3">Total Orders</div>
                                            <div class="text-muted mb-1 fs-12">
                                                <span class="text-dark fs-20 lh-1 vertical-bottom">
                                                    35,367
                                                </span>
                                            </div>
                                            <div>
                                                <span class="fs-12 mb-0 text-success"><i
                                                        class="ti ti-arrow-narrow-down fs-16 align-middle"></i><span
                                                        class="badge bg-success-transparent mx-1">+2.5%</span></span>
                                            </div>
                                        </div>
                                        <div id="total-orders"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start: row-2 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Visitors By Browser
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled browser-list mb-0">
                                    <li>
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-xs">
                                                    <img src="assets/images/browsers/chrome.png" alt="">
                                                </span>
                                            </div>
                                            <div class="lh-1 flex-fill">
                                                <div class="d-flex align-items-start flex-wrap gap-2">
                                                    <div class="w-25 me-4">
                                                        <span class="d-block fs-14 mb-2">Chrome</span>
                                                        <span class="fs-12 text-muted d-block">Google, Inc.</span>
                                                    </div>
                                                    <div class="progress progress-xs custom-progress-6 progress-animate mt-1"
                                                        role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar" style="width: 80%">
                                                            <div
                                                                class="progress-bar-value badge bg-primary-transparent">
                                                                48%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-xs">
                                                    <img src="assets/images/browsers/edge.png" alt="">
                                                </span>
                                            </div>
                                            <div class="lh-1 flex-fill">
                                                <div class="d-flex align-items-start flex-wrap gap-2">
                                                    <div class="w-25 me-4">
                                                        <span class="d-block fs-14 mb-2">Edge</span>
                                                        <span class="fs-12 text-muted d-block">Microsoft</span>
                                                    </div>
                                                    <div class="progress progress-xs custom-progress-6 progress-animate mt-1"
                                                        role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-secondary" style="width: 65%">
                                                            <div
                                                                class="progress-bar-value badge bg-secondary-transparent">
                                                                22%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-xs">
                                                    <img src="assets/images/browsers/firefox.png" alt="">
                                                </span>
                                            </div>
                                            <div class="lh-1 flex-fill">
                                                <div class="d-flex align-items-start flex-wrap gap-2">
                                                    <div class="w-25 me-4">
                                                        <span class="d-block fs-14 mb-2">Firefox</span>
                                                        <span class="fs-12 text-muted d-block">Mozilla, Inc.</span>
                                                    </div>
                                                    <div class="progress progress-xs custom-progress-6 progress-animate mt-1"
                                                        role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-warning" style="width: 50%">
                                                            <div
                                                                class="progress-bar-value badge bg-warning-transparent">
                                                                13%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-xs">
                                                    <img src="assets/images/browsers/safari.png" alt="">
                                                </span>
                                            </div>
                                            <div class="lh-1 flex-fill">
                                                <div class="d-flex align-items-start flex-wrap gap-2">
                                                    <div class="w-25 me-4">
                                                        <span class="d-block fs-14 mb-2">Safari</span>
                                                        <span class="fs-12 text-muted d-block">Apple, Inc.</span>
                                                    </div>
                                                    <div class="progress progress-xs custom-progress-6 progress-animate mt-1"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-success" style="width: 40%">
                                                            <div
                                                                class="progress-bar-value badge bg-success-transparent">
                                                                10%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-xs">
                                                    <img src="assets/images/browsers/uc.png" alt="">
                                                </span>
                                            </div>
                                            <div class="lh-1 flex-fill">
                                                <div class="d-flex align-items-start flex-wrap gap-2">
                                                    <div class="w-25 me-4">
                                                        <span class="d-block fs-14 mb-2">UCBrowser</span>
                                                        <span class="fs-12 text-muted d-block">UC , Inc.</span>
                                                    </div>
                                                    <div class="progress progress-xs custom-progress-6 progress-animate mt-1"
                                                        role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-danger" style="width: 30%">
                                                            <div class="progress-bar-value badge bg-danger-transparent">
                                                                8%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-xs">
                                                    <img src="assets/images/browsers/opera.png" alt="">
                                                </span>
                                            </div>
                                            <div class="lh-1 flex-fill">
                                                <div class="d-flex align-items-start flex-wrap gap-2">
                                                    <div class="w-25 me-4">
                                                        <span class="d-block fs-14 mb-2">Opera</span>
                                                        <span class="fs-12 text-muted d-block">Opera, Inc.</span>
                                                    </div>
                                                    <div class="progress progress-xs custom-progress-6 progress-animate mt-1"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-info" style="width: 20%">
                                                            <div class="progress-bar-value badge bg-info-transparent">6%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Sales Overview
                                </div>
                                <button class="btn btn-sm btn-w-xs btn-outline-light">View All<i
                                        class="ti ti-arrow-narrow-right ms-1"></i></button>
                            </div>
                            <div class="card-body pt-0">
                                <div id="product-categories" class="mb-5"></div>
                                <div class="row gy-4">
                                    <div class="col-sm-6 mb-2">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar bg-primary-transparent">
                                                    <i class="ti ti-currency-dollar fs-5"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="fs-12 mb-1 d-block text-muted">Total revenue</span>
                                                <span class="d-block fw-medium mb-0 fs-14">$32,993</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar bg-secondary-transparent">
                                                    <i class="ti ti-percentage fs-5"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="fs-12 mb-1 d-block text-muted">Conversion Rate</span>
                                                <span class="d-block fw-medium mb-0 fs-14">71%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar bg-success-transparent">
                                                    <i class="ti ti-report-analytics fs-5"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="fs-12 mb-1 d-block text-muted">Gross Profit</span>
                                                <span class="d-block fw-medium mb-0 fs-14">$1.85M</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar bg-danger-transparent">
                                                    <i class="ti ti-user-plus fs-5"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="fs-12 mb-1 d-block text-muted">New Customers</span>
                                                <span class="d-block fw-medium mb-0 fs-14">48,242</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Top Selling Categories</div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="earnings"></div>
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
                                    Recent Orders
                                </div>
                                <a href="javascript:void(0);" class="link-primary fw-medium">View All Orders<i
                                        class="ri-arrow-right-s-line ms-1 align-middle"></i></a>
                            </div>
                            <div class="card-body px-0 pt-2 pb-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Payment Mode</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Amount Paid</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="javascript:void(0);"
                                                        class="text-primary text-decoration-underline">#ORD789ABC</a>
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="d-block mb-1">Rupay Card ****2783</span>
                                                        <span class="d-block fs-12 text-muted fw-normal">Card
                                                            Payment</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent">Completed</span></td>
                                                <td>
                                                    <div>
                                                        <span class="d-block mb-1">$1,234.78</span>
                                                        <span class="d-block fs-12 text-muted fw-normal">Nov
                                                            22,2023</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-light btn-wave">
                                                        <i class="fe fe-eye text-muted align-middle me-1"></i>
                                                        View
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0);"
                                                        class="text-primary text-decoration-underline">#ORD253SFW</a>
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="d-block mb-1 fw-normal">Digital Wallet</span>
                                                        <span class="d-block fs-12 text-muted">Online Transaction</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-warning-transparent">Pending</span></td>
                                                <td>
                                                    <div>
                                                        <span class="d-block mb-1">$623.99</span>
                                                        <span class="d-block fs-12 text-muted fw-normal">Nov
                                                            22,2023</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-light btn-wave">
                                                        <i class="fe fe-eye text-muted align-middle me-1"></i>
                                                        View
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0);"
                                                        class="text-primary text-decoration-underline">#ORD356SKF</a>
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="d-block mb-1 fw-normal">Mastro Card ****7893</span>
                                                        <span class="d-block fs-12 text-muted">Card Payment</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-danger-transparent">Cancelled</span></td>
                                                <td>
                                                    <div>
                                                        <span class="d-block mb-1">$1,324</span>
                                                        <span class="d-block fs-12 text-muted fw-normal">Nov
                                                            21,2023</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-light btn-wave">
                                                        <i class="fe fe-eye text-muted align-middle me-1"></i>
                                                        View
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0);"
                                                        class="text-primary text-decoration-underline">#ORD363ESD</a>
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="d-block mb-1 fw-normal">Cash On Delivery</span>
                                                        <span class="d-block fs-12 text-muted">Pay On Delivery</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent">Completed</span></td>
                                                <td>
                                                    <div>
                                                        <span class="d-block mb-1">$1,123.49</span>
                                                        <span class="d-block fs-12 text-muted fw-normal">Nov
                                                            20,2023</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-light btn-wave">
                                                        <i class="fe fe-eye text-muted align-middle me-1"></i>
                                                        View
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <a href="javascript:void(0);"
                                                        class="text-primary text-decoration-underline">#ORD253KSE</a>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div>
                                                        <span class="d-block mb-1 fw-normal">Visa Card ****2563</span>
                                                        <span class="d-block fs-12 text-muted">Card Payment</span>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0"><span
                                                        class="badge bg-success-transparent">Completed</span></td>
                                                <td class="border-bottom-0">
                                                    <div>
                                                        <span class="d-block mb-1">$1,289</span>
                                                        <span class="d-block fs-12 text-muted fw-normal">Nov
                                                            18,2023</span>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <button class="btn btn-sm btn-outline-light btn-wave">
                                                        <i class="fe fe-eye text-muted align-middle me-1"></i>
                                                        View
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Top Customers
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted"
                                        data-bs-toggle="dropdown">
                                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0 top-customers">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-top justify-content-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="assets/images/faces/4.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 fs-14">Emma Wilson</p>
                                                        <p class="mb-0 text-muted fs-12">15 Purchases<i
                                                                class="bi bi-patch-check-fill fs-14 text-primary ms-2"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-muted d-block fs-12">Sale Value</span>
                                                    <span class="fs-14">$1,835</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-top justify-content-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="assets/images/faces/15.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 fs-14">Robert Lewis</p>
                                                        <p class="mb-0 text-muted fs-12">18 Purchases<i
                                                                class="bi bi-patch-check-fill fs-14 text-primary ms-2"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-muted d-block fs-12">Sale Value</span>
                                                    <span class="fs-14">$2,415</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-top justify-content-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="assets/images/faces/5.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 fs-14">Angelina Hose</p>
                                                        <p class="mb-0 text-muted fs-12">21 Purchases<i
                                                                class="bi bi-patch-check-fill fs-14 text-primary ms-2"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-muted d-block fs-12">Sale Value</span>
                                                    <span class="fs-14">$2,341</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-top justify-content-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="assets/images/faces/2.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 fs-14">Samantha Sam</p>
                                                        <p class="mb-0 text-muted fs-12">24 Purchases<i
                                                                class="bi bi-patch-check-fill fs-14 text-primary ms-2"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-muted d-block fs-12">Sale Value</span>
                                                    <span class="fs-14">2,624</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-top justify-content-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="assets/images/faces/14.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 fs-14">Dwayne Smith</p>
                                                        <p class="mb-0 text-muted fs-12">32 Purchases<i
                                                                class="bi bi-patch-check-fill fs-14 text-primary ms-2"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-muted d-block fs-12">Sale Value</span>
                                                    <span class="fs-14">3,172</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Top Countries By Sales
                                </div>
                                <div class="dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="mb-0 list-unstyled top-countries">
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center lh-1">
                                                <span class="avatar avatar-xs me-2">
                                                    <img src="assets/images/flags/canada_flag.jpg" alt="">
                                                </span>
                                                <span class="top-country-name">Canada</span>
                                            </div>
                                            <div class="fs-14 lh-1"><span class="text-success fs-12 fw-normal me-3"><i
                                                        class="ti ti-arrow-narrow-up text-success ms-1"></i>0.78%</span>6,192
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center lh-1">
                                                <span class="avatar avatar-xs me-2">
                                                    <img src="assets/images/flags/french_flag.jpg" alt="">
                                                </span>
                                                <span class="top-country-name">France</span>
                                            </div>
                                            <div class="fs-14 lh-1"><span class="text-success fs-12 fw-normal me-3"><i
                                                        class="ti ti-arrow-narrow-up text-success ms-1"></i>0.12%</span>5,932
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center lh-1">
                                                <span class="avatar avatar-xs me-2">
                                                    <img src="assets/images/flags/spain_flag.jpg" alt="">
                                                </span>
                                                <span class="top-country-name">spain</span>
                                            </div>
                                            <div class="fs-14 lh-1"><span class="text-danger fs-12 fw-normal me-3"><i
                                                        class="ti ti-arrow-narrow-up text-danger ms-1"></i>0.54%</span>5,383
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center lh-1">
                                                <span class="avatar avatar-xs me-2">
                                                    <img src="assets/images/flags/argentina_flag.jpg" alt="">
                                                </span>
                                                <span class="top-country-name">Argentina</span>
                                            </div>
                                            <div class="fs-14 lh-1"><span class="text-success fs-12 fw-normal me-3"><i
                                                        class="ti ti-arrow-narrow-up text-success ms-1"></i>0.25%</span>4,825
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center lh-1">
                                                <span class="avatar avatar-xs me-2">
                                                    <img src="assets/images/flags/uae_flag.jpg" alt="">
                                                </span>
                                                <span class="top-country-name">Uae</span>
                                            </div>
                                            <div class="fs-14 lh-1"><span class="text-success fs-12 fw-normal me-3"><i
                                                        class="ti ti-arrow-narrow-up text-success ms-1"></i>0.56%</span>4,527
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center lh-1">
                                                <span class="avatar avatar-xs me-2">
                                                    <img src="assets/images/flags/germany_flag.jpg" alt="">
                                                </span>
                                                <span class="top-country-name">Germany</span>
                                            </div>
                                            <div class="fs-14 lh-1"><span class="text-danger fs-12 fw-normal me-3"><i
                                                        class="ti ti-arrow-narrow-up text-danger ms-1"></i>0.04%</span>4,501
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center lh-1">
                                                <span class="avatar avatar-xs me-2">
                                                    <img src="assets/images/flags/mexico_flag.jpg" alt="">
                                                </span>
                                                <span class="top-country-name">Mexico</span>
                                            </div>
                                            <div class="fs-14 lh-1"><span class="text-danger fs-12 fw-normal me-3"><i
                                                        class="ti ti-arrow-narrow-up text-danger ms-1"></i>0.47%</span>4,252
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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
                                <div class="card-title">
                                    Products Overview
                                </div>
                                <div class="d-sm-flex">
                                    <div class="me-3 mb-3 mb-sm-0">
                                        <input class="form-control form-control-sm" type="text" placeholder="Search"
                                            aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);"
                                            class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Product Id</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Sales</th>
                                                <th scope="col">Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/ecommerce/png/17.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Niker College Bag</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">#1734-9743</span>
                                                </td>
                                                <td>
                                                    $199.99
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Available</span>
                                                </td>
                                                <td>
                                                    <span class="">3,903</span>
                                                </td>
                                                <td>
                                                    <span class="">$67,899.24</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/ecommerce/png/14.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Dslr Camera (50mm f/1.9 HRM Lens)</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">#1234-4567</span>
                                                </td>
                                                <td>
                                                    $1,299.99
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Available</span>
                                                </td>
                                                <td>
                                                    <span class="">12,435</span>
                                                </td>
                                                <td>
                                                    <span class="">$3,24,781.92</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/ecommerce/png/11.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Outdoor Bomber Jacket</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">#1902-9883</span>
                                                </td>
                                                <td>
                                                    $99.99
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-transparent">Not Available</span>
                                                </td>
                                                <td>
                                                    <span class="">5,143</span>
                                                </td>
                                                <td>
                                                    <span class="">$76,102.76</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/ecommerce/png/5.png" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Light Blue Teddy</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">#8745-1232</span>
                                                </td>
                                                <td>
                                                    $79.00
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-transparent">Limited Deal</span>
                                                </td>
                                                <td>
                                                    <span class=""> 7,183</span>
                                                </td>
                                                <td>
                                                    <span class="">$78,211.83</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm">
                                                                <img src="assets/images/ecommerce/jpg/18.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Orange Smart Watch (24mm)</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">#1962-9033</span>
                                                </td>
                                                <td>
                                                    $199.99
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary-transparent">In Offer</span>
                                                </td>
                                                <td>
                                                    <span class="">10,287</span>
                                                </td>
                                                <td>
                                                    <span class="">$2,32,982.99</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <div class="d-flex align-items-center">
                                    <div>
                                        Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
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

    <!-- Ecommerce-Dashboard JS -->
    <script src="assets/js/ecommerce-dashboard.js"></script>


    <!-- Custom-Switcher JS -->
    <script src="assets/js/custom-switcher.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>