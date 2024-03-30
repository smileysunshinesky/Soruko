<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed" data-theme-mode="light">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> UDON - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">

    <!-- Favicon -->
    <link rel="icon" href="assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Css -->
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="assets/css/styles.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="assets/libs/node-waves/waves.min.css" rel="stylesheet" >

    <!-- SwiperJS Css -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">

    <script>
        if(localStorage.udonlandingdarktheme){
            document.querySelector("html").setAttribute("data-theme-mode","dark")
        }
        if(localStorage.udonlandingrtl){
            document.querySelector("html").setAttribute("dir","rtl")
            document.querySelector("#style")?.setAttribute("href", "assets/libs/bootstrap/css/bootstrap.rtl.min.css");
        }
    </script>


</head>

<body class="landing-body jobs-landing">

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="">
                <p class="switcher-style-head">Theme Color Mode:</p>
                <div class="row switcher-style">
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
                <div class="row switcher-style">
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
            <div class="theme-colors">
                <p class="switcher-style-head">Theme Primary:</p>
                <div class="d-flex align-items-center switcher-style">
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
                    <div class="form-check switch-select me-3 ps-0 mt-1 color-primary-light">
                        <div class="theme-container-primary"></div>
                        <div class="pickr-container-primary"></div>
                    </div>
                </div>
            </div>
            <div>
                <p class="switcher-style-head">reset:</p>
                <div class="text-center">
                    <button id="reset-all" class="btn btn-danger mt-3">Reset</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->

    <div class="landing-page-wrapper">

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
                                <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a href="javascript:void(0);" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
                            <span class="open-toggle">
                                <i class="ri-menu-3-line fs-20"></i>
                            </span>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element align-items-center">
                        <!-- Start::header-link|switcher-icon -->
                        <div class="btn-list d-lg-none d-block">
                            <a href="sign-up-basic.php" class="btn btn-primary-light">
                                Sign Up
                            </a>
                            <button class="btn btn-icon btn-success switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                                <i class="ri-settings-3-line"></i>
                            </button>
                        </div>
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

            <div class="container-xl">
                <!-- Start::main-sidebar -->
                <div class="main-sidebar">

                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills sub-open">
                        <div class="landing-logo-container">
                            <div class="horizontal-logo">
                                <a href="index.php" class="header-logo">
                                    <img src="assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                    <img src="assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                                </a>
                            </div>
                        </div>
                        <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg></div>
                        <ul class="main-menu">
                            <!-- Start::slide -->
                            <li class="slide">
                                <a class="side-menu__item" href="#home">
                                    <span class="side-menu__label">Home</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#jobs" class="side-menu__item">
                                    <span class="side-menu__label">Jobs</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#candidate" class="side-menu__item">
                                    <span class="side-menu__label">Candidates</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <span class="side-menu__label me-2">More</span>
                                    <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Level-1</a>
                                    </li>
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Level-1-1</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Level-2
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="side-menu__item">Level-2-1</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Level-2-2
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="javascript:void(0);" class="side-menu__item">Level-2-2-1</a>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Level-2-2-2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#employers" class="side-menu__item">
                                    <span class="side-menu__label">For Employers</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#career-advice" class="side-menu__item">
                                    <span class="side-menu__label">Career Advice</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                        <div class="d-lg-flex d-none">
                            <div class="btn-list d-lg-flex d-none mt-lg-2 mt-xl-0 mt-0">
                                <a href="sign-up-basic.php" class="btn btn-wave btn-primary">
                                    Sign Up
                                </a>
                                <a href="job-post.php" class="btn btn-wave btn-secondary">
                                    Job Post
                                </a>
                                <button class="btn btn-wave btn-icon btn-light switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                                    <i class="ri-settings-3-line"></i>
                                </button>
                            </div>
                        </div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->
            </div>

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content p-0 landing-main">

            <!-- Start:: Section-1 -->
            <div class="landing-banner" id="home">
                <section class="section pb-0">
                    <div class="container main-banner-container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xxl-7 col-xl-7 col-lg-8">
                                <div class="">
                                    <h5 class="landing-banner-heading mb-3"><span class="text-gradient fw-medium">6000+ </span>Jobs, Find your dream job</h5>
                                    <p class="fs-18 mb-5 op-8 fw-normal text-fixed-white">Register &amp; get free access to latest openings worldwide. Create &amp; submit your resume with few easy steps.</p>
                                    <div class="mb-3 custom-form-group">
                                        <input type="text" class="form-control form-control-lg shadow-sm" placeholder="Job title, Keywords or Company.." 
                                            aria-label="Recipient's username">
                                        <div class="custom-form-btn bg-transparent">
                                            <a href="javascript:void(0);" class="gps-location"><i class="ti ti-current-location"></i></a>
                                            <button class="btn btn-primary border-0" type="button"><i class="bi bi-search me-sm-2"></i> <span>Search</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
            </div>
            <!-- End:: Section-1 -->

            <!-- Start:: Section-2 -->
            <section class="section section-bg " id="jobs">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-5">
                        <div>
                            <p class="fs-12 fw-medium mb-1 text-gradient">FIND JOBS</p>
                            <h3 class="fw-medium mb-0">Browse Jobs by Top Categories</h3>
                            <span class="text-muted fs-15 fw-normal d-block">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="btn btn-wave btn-primary">
                                View All Categories <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card custom-card border shadow-none">
                                <div class="row g-0">
                                    <div class="col-md-3 col-4">
                                        <img src="assets/images/media/jobs-landing/1.jpg" class="img-fluid rounded-start h-100 browse-jobs-image" alt="...">
                                    </div>
                                    <div class="col-md-9 col-8 my-auto">
                                        <div class="card-body">
                                            <h5 class="card-title fw-medium">Business Development</h5>
                                            <p><span class="text-default fw-medium">120 Jobs</span> available</p>
                                            <a class="text-primary fw-medium" href="javascript:void(0);">Explore Jobs<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card custom-card border shadow-none">
                                <div class="row g-0">
                                    <div class="col-md-3 col-4">
                                        <img src="assets/images/media/jobs-landing/2.jpg" class="img-fluid rounded-start h-100 browse-jobs-image" alt="...">
                                    </div>
                                    <div class="col-md-9 col-8 my-auto">
                                        <div class="card-body">
                                            <h5 class="card-title fw-medium">Customer Support</h5>
                                            <p><span class="text-default fw-medium">370 Jobs</span> available</p>
                                            <a class="text-primary fw-medium" href="javascript:void(0);">Explore Jobs<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card custom-card border shadow-none">
                                <div class="row g-0">
                                    <div class="col-md-3 col-4">
                                        <img src="assets/images/media/jobs-landing/3.jpg" class="img-fluid rounded-start h-100 browse-jobs-image" alt="...">
                                    </div>
                                    <div class="col-md-9 col-8 my-auto">
                                        <div class="card-body">
                                            <h5 class="card-title fw-medium">Marketing</h5>
                                            <p><span class="text-default fw-medium">743 Jobs</span> available</p>
                                            <a class="text-primary fw-medium" href="javascript:void(0);">Explore Jobs<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card custom-card border shadow-none">
                                <div class="row g-0">
                                    <div class="col-md-3 col-4">
                                        <img src="assets/images/media/jobs-landing/4.jpg" class="img-fluid rounded-start h-100 browse-jobs-image" alt="...">
                                    </div>
                                    <div class="col-md-9 col-8 my-auto">
                                        <div class="card-body">
                                            <h5 class="card-title fw-medium">Product Management</h5>
                                            <p><span class="text-default fw-medium">156 Jobs</span> available</p>
                                            <a class="text-primary fw-medium" href="javascript:void(0);">Explore Jobs<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card custom-card border shadow-none">
                                <div class="row g-0">
                                    <div class="col-md-3 col-4">
                                        <img src="assets/images/media/jobs-landing/5.jpg" class="img-fluid rounded-start h-100 browse-jobs-image" alt="...">
                                    </div>
                                    <div class="col-md-9 col-8 my-auto">
                                        <div class="card-body">
                                            <h5 class="card-title fw-medium">Accountant</h5>
                                            <p><span class="text-default fw-medium">67 Jobs</span> available</p>
                                            <a class="text-primary fw-medium" href="javascript:void(0);">Explore Jobs<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card custom-card border shadow-none">
                                <div class="row g-0">
                                    <div class="col-md-3 col-4">
                                        <img src="assets/images/media/jobs-landing/6.jpg" class="img-fluid rounded-start h-100 browse-jobs-image" alt="...">
                                    </div>
                                    <div class="col-md-9 col-8 my-auto">
                                        <div class="card-body">
                                            <h5 class="card-title fw-medium">Technical Support</h5>
                                            <p><span class="text-default fw-medium">140 Jobs</span> available</p>
                                            <a class="text-primary fw-medium" href="javascript:void(0);">Explore Jobs<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-2 -->

            <!-- Start:: Section-3 -->
            <section class="section bg-light" id="steps">
                <div class="container text-center">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-xl-6">
                            <p class="fs-12 fw-medium mb-1"><span class="landing-section-heading text-gradient">STEPS</span></p>
                            <h3 class="fw-medium mb-2">How it works ?</h3>
                            <span class="text-muted fs-15 fw-normal d-block">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
                        </div>
                    </div>
                    <div class="row text-start">
                        <div class="col-12 col-md-4">
                            <div class="card custom-card landing-card">
                                <div class="card-body rounded">
                                    <div class="mb-3 ms-1">
                                        <div class="icon-style">
                                            <span class="avatar avatar-lg avatar-rounded bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;isolation:auto;mix-blend-mode:normal;shape-padding:0;text-decoration-color:#000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none" d="m12.5 4.9999251c-2.4670541 0-4.5 2.0329459-4.5 4.5v45c0 2.4670541 2.0329521 4.4999916 4.5 4.5h22a1.5001499 1.5001499 0 1 0 0-3h-22c-0.85695207-2.92e-6 -1.5-0.64305409-1.5-1.5v-45c0-0.85694591 0.64305409-1.5 1.5-1.5h33c0.85694591 0 1.5 0.64305409 1.5 1.5v18a1.5001499 1.5001499 0 1 0 3 0v-18c0-2.4670541-2.0329459-4.5-4.5-4.5z" color="#000" /><rect width="20" height="3" x="19.021" y="20"  rx="1.5" ry="1.5"/><rect width="20" height="3" x="19.021" y="26"  rx="1.5" ry="1.5"/><rect width="12" height="3" x="19.021" y="32"  rx="1.5" ry="1.5"/><path style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;isolation:auto;mix-blend-mode:normal;shape-padding:0;text-decoration-color:#000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none" d="m54.890477 30.837319c-2.1365316-1.2335271-4.9135872-0.48941726-6.1471143 1.6471143l-6.9990234 12.122664a1.50015 1.50015 0 1 0 2.5980762 1.5l6.9990234-12.122664c0.42847293-0.74213689 1.3069012-0.97751103 2.0490381-0.54903811l0.8660254 0.5c0.7421369 0.42847293 0.97751103 1.3069012 0.54903811 2.0490381l-10.717773 18.563728-2.8746289 0.97900337-0.58947268-2.9790034 1.21875-2.1109369a1.50015 1.50015 0 1 0-2.5980762-1.5l-1.5 2.5980762a1.50015 1.50015 0 0 0-0.17276402 1.0414236l1.0310889 5.2141016a1.50015 1.50015 0 0 0 1.955323 1.1289062l5.0310889-1.7141016a1.50015 1.50015 0 0 0 0.81551724-0.6703298l10.999023-19.050867c1.2335271-2.1365316 0.48941727-4.9135872-1.6471143-6.1471143z" color="#000" /></svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h5 class="fw-medium">
                                        Register Your Account
                                    </h5>
                                    <p class="op-8 fs-15">
                                        Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea.
                                    </p>
                                    <a class="mx-1 text-primary fw-medium" href="javascript:void(0);">Register Now<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card custom-card landing-card">
                                <div class="card-body rounded">
                                    <div class="mb-3 ms-1">
                                        <div class="icon-style">
                                            <span class="avatar avatar-lg avatar-rounded bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;isolation:auto;mix-blend-mode:normal;shape-padding:0;text-decoration-color:#000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none" d="M25.5 32c-9.1150542 0-16.5 7.3849458-16.5 16.5v6c0 2.4670542 2.0329458 4.5 4.5 4.5h18a1.50015 1.50015 0 1 0 0-3h-18c-.85694585 0-1.5-.64305415-1.5-1.5v-6c0-7.5049458 5.9950542-13.5 13.5-13.5h13c1.3451063 0 2.6376951.19436413 3.8574219.5546875a1.50015 1.50015 0 1 0 .84960937-2.8769531c-1.4925263-.44091195-3.0733463-.67773438-4.7070312-.67773438zM32 5c-6.60965 0-12 5.39035-12 12s5.39035 12 12 12 12-5.39035 12-12-5.39035-12-12-12zm0 3c4.9883297 0 9 4.0116703 9 9s-4.0116703 9-9 9-9-4.0116703-9-9 4.0116703-9 9-9z" color="#000" /><path style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;isolation:auto;mix-blend-mode:normal;shape-padding:0;text-decoration-color:#000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none" d="m45 37c-6.60965 0-12 5.39035-12 12s5.39035 12 12 12c2.1925542 0 4.343574-0.60010252 6.21875-1.7363281a1.5002912 1.5002912 0 1 0-1.5546875-2.5664063c-1.4065214 0.85225367-3.0194839 1.3027344-4.6640625 1.3027344-4.9883297 0-9-4.0116703-9-9s4.0116703-9 9-9 9 4.0116703 9 9c0 1.644402-0.45065351 3.2576429-1.3027344 4.6640625a1.5002912 1.5002912 0 1 0 2.5664063 1.5546875c1.1359953-1.8750403 1.7363281-4.0264313 1.7363281-6.21875 0-6.60965-5.39035-12-12-12z" color="#000" /><path d="m45 43.999848c-0.831 0-1.5 0.669-1.5 1.5v2h-2c-0.831 0-1.5 0.669-1.5 1.5s0.669 1.5 1.5 1.5h2v2c0 0.831 0.669 1.5 1.5 1.5 0.83100001 0 1.5-0.669 1.5-1.5v-2h2c0.83100001 0 1.5-0.669 1.5-1.5s-0.66899999-1.5-1.5-1.5h-2v-2c0-0.831-0.66899999-1.5-1.5-1.5z" /></svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h5 class="fw-medium">
                                        Complete Your Profile
                                    </h5>
                                    <p class="op-8 fs-15">
                                        Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea.
                                    </p>
                                    <a class="mx-1 text-primary fw-medium" href="javascript:void(0);">Complete Profile<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card custom-card landing-card">
                                <div class="card-body rounded">
                                    <div class="mb-3 ms-1">
                                        <div class="icon-style">
                                            <span class="avatar avatar-lg avatar-rounded bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" viewBox="0 0 64 64"><path style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;isolation:auto;mix-blend-mode:normal;shape-padding:0;text-decoration-color:#000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none" d="m24.5 8c-2.4675144 0-4.5 2.0324856-4.5 4.5v3.5h-10.5c-2.4675142 0-4.5 2.0324854-4.5 4.5v4.0625c0 0.95311676 0.30189465 1.892559 0.875 2.6679688 2.2780134 3.0821421 10.711221 12.769531 26.125 12.769531s23.846986-9.6873908 26.125-12.769531c0.57310844-0.77541208 0.875-1.7148549 0.875-2.6679688v-4.0625c0-2.4675155-2.0324866-4.5-4.5-4.5h-10.5v-3.5c0-2.4675155-2.0324866-4.5-4.5-4.5zm0 3h15c0.84619198 0 1.5 0.65380634 1.5 1.5v5a1.50015 1.50015 0 0 0 1.5 1.5h12c0.84619198 0 1.5 0.65380634 1.5 1.5v4.0625c0 0.32871995-0.0983236 0.6293397-0.28710938 0.88476562-1.9720162 2.6681266-9.555297 11.552734-23.712891 11.552734s-21.740877-8.8846093-23.712891-11.552734c-0.18878705-0.25542828-0.28710938-0.55604878-0.28710938-0.88476562v-4.0625c0-0.84619457 0.65380578-1.5 1.5-1.5h28a1.50015 1.50015 0 1 0 0-3h-14.5v-3.5c0-0.84619481 0.65380519-1.5 1.5-1.5z" color="#000"/><path style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;isolation:auto;mix-blend-mode:normal;shape-padding:0;text-decoration-color:#000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none" d="m6.4765625 30.978516a1.50015 1.50015 0 0 0-1.4765625 1.5214844v19c0 2.4670537 2.0329452 4.5 4.5 4.5h45c2.4670543 0 4.5-2.0329457 4.5-4.5v-19a1.50015 1.50015 0 1 0-3 0v19c0 0.85694314-0.64305686 1.5-1.5 1.5h-45c-0.85694462 0-1.5-0.64305626-1.5-1.5v-19a1.50015 1.50015 0 0 0-1.5234375-1.5214844z" color="#000"/></svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h5 class="fw-medium">
                                        Apply job / Hire
                                    </h5>
                                    <p class="op-8 fs-15">
                                        Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea.
                                    </p>
                                    <a class="mx-1 text-primary fw-medium" href="javascript:void(0);">Apply Now<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-3 -->

            <!-- Start:: Section-4 -->
            <section class="section bg-banner-2 text-fixed-white py-0">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-5 col-xl-4 text-center mt-4 d-lg-block d-none">
                            <img src="assets/images/media/jobs-landing/8.png" width="350" alt="">
                        </div>
                        <div class="col-md-7 col-xl-8">
                            <div class="my-4">
                                <h2 class="fw-medium mb-3 text-fixed-white">Are You Looking For A Job? Just <a href="javascript:void(0);" class="text-fixed-white text-decoration-line"> <u>drop</u> </a> resume..</h2>
                                <p class="mb-4 fs-15 op-8 fw-normal">Est amet sit vero sanctus labore no sed nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum.Est amet sit vero sanctus labore no sed ipsum ipsum nonumy vero sanctus labore.. </p>
                                <a href="javascript:void(0);" class="btn btn-light btn-lg"><i class="ti ti-upload"></i> Upload Your Resume</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            <!-- End:: Section-4 -->

            <!-- Start:: Section-5 -->
            <section class="section" id="features">
                <div class="container">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-xl-6">
                            <p class="fs-12 fw-medium mb-1"><span class="landing-section-heading text-gradient">FIND JOBS</span></p>
                            <h3 class="fw-medium mb-2">Featured Jobs</h3>
                            <span class="text-muted fs-15 fw-normal d-block">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="card custom-card featured-jobs shadow-none">
                                <div class="card-body">
                                    <div class="btn-list float-end">
                                        <a href="javascript:void(0);" class="wishlist-icon" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add to wishlist"><span><i class="bi bi-heart"></i></span></a>
                                        <a href="javascript:void(0);" class="wishlist-icon text-warning" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Featured Jobs"><span><i class="bi bi-star-fill"></i></span></a>
                                    </div>
                                    <div class="d-sm-flex mb-3">
                                        <span class="avatar avatar-lg avatar-rounded bg-primary bg-opacity-10 border"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="var(--primary-color)" d="M21.46777,2.3252A1.00007,1.00007,0,0,0,20.73,2H3.27a1.00039,1.00039,0,0,0-.99609,1.08887l1.52,17a.99944.99944,0,0,0,.72851.87451l7.2002,2A.99628.99628,0,0,0,11.99023,23a1.01206,1.01206,0,0,0,.26709-.03613l7.21973-2a1.00055,1.00055,0,0,0,.729-.875l1.52-17A1,1,0,0,0,21.46777,2.3252Zm-3.19238,16.896L11.99072,20.9624,5.72461,19.22168,4.36328,4H19.63672ZM7.81982,13h6.895l-.32714,3.271-2.56788.917L8.65625,16.05811a1.00017,1.00017,0,1,0-.67285,1.88378l3.5,1.25a1.00291,1.00291,0,0,0,.67285,0l3.5-1.25a1.00044,1.00044,0,0,0,.65869-.84228l.5-5A1.00064,1.00064,0,0,0,15.81982,11H8.72461L8.4248,8h7.895a1,1,0,0,0,0-2h-9a1.00064,1.00064,0,0,0-.99511,1.09961l.5,5A1.00012,1.00012,0,0,0,7.81982,13Z"/></svg></span>
                                        <div class="ms-2">
                                            <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> HTML Developer - Fresher</a></h5>
                                            <a href="javascript:void(0);">Spotech Technical Solutions</a>
                                        </div>
                                    </div> 
                                    <div class="popular-tags mb-3">
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-briefcase text-muted me-1"></i> 13 Openings</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-mortarboard text-muted me-1"></i> Graduate</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-clock text-muted me-1"></i> Min - 2Years</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-medium mb-0 text-default">$25,000 - $35,000</h6>
                                        <a href="" class="text-primary fw-medium fs-14 d-inline-flex align-items-center">
                                            Apply Now <i class="fe fe-arrow-right lh-1 transform-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card featured-jobs shadow-none">
                                <div class="card-body">
                                    <div class="btn-list float-end">
                                        <a href="javascript:void(0);" class="wishlist-icon" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add to wishlist"><span><i class="bi bi-heart"></i></span></a>
                                        <a href="javascript:void(0);" class="wishlist-icon text-warning" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Featured Jobs"><span><i class="bi bi-star-fill"></i></span></a>
                                    </div>
                                    <div class="d-sm-flex mb-3">
                                        <span class="avatar avatar-lg avatar-rounded bg-primary bg-opacity-10 border"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="var(--primary-color)" d="M11.103,10.43793a1.78593,1.78593,0,1,0,2.43957.65362A1.786,1.786,0,0,0,11.103,10.43793Zm8.0047,1.93768q-.17587-.201-.37116-.40308.13641-.14337.264-.28649c1.60583-1.80427,2.28357-3.61371,1.65558-4.70154-.60217-1.043-2.39343-1.35382-4.63593-.91779q-.33132.06482-.659.14624-.06272-.21624-.13343-.43C14.467,3.49042,13.2381,1.99921,11.98206,2,10.77765,2.00055,9.61359,3.39709,8.871,5.5575q-.10959.31969-.20276.64471-.21908-.05375-.44-.0993c-2.366-.48578-4.27167-.16584-4.89844.9226-.601,1.04376.02753,2.74982,1.52851,4.47211q.22329.25562.45922.49976c-.18542.191-.361.38189-.52465.57171-1.4646,1.698-2.05719,3.37616-1.45716,4.41541.61969,1.07348,2.49854,1.42437,4.7854.97436q.278-.05511.55292-.124.10071.35156.22095.697c.73932,2.11706,1.89685,3.46863,3.097,3.4682,1.23944-.00073,2.48194-1.45288,3.23474-3.65875.05945-.17432.11573-.35535.16907-.54175q.35514.08835.71485.1568c2.20336.41687,3.95251.089,4.55145-.951C21.28058,15.93109,20.64288,14.12933,19.10767,12.37561ZM4.07019,7.45184c.38586-.67,1.94324-.93139,3.98608-.512q.19584.04027.39838.09a20.464,20.464,0,0,0-.42126,2.67767,20.88659,20.88659,0,0,0-2.10389,1.6936q-.21945-.22695-.42718-.4649l.00006.00006C4.21631,9.46057,3.708,8.08081,4.07019,7.45184Zm3.88666,5.72809c-.51056-.3866-.98505-.78265-1.41571-1.181.43036-.39587.90515-.79059,1.41467-1.17615q-.02746.58915-.02722,1.1792Q7.929,12.59117,7.95685,13.17993Zm-.00061,3.94061a7.23675,7.23675,0,0,1-2.63971.09314,1.766,1.766,0,0,1-1.241-.65631c-.36407-.63067.11176-1.978,1.36432-3.43023q.23621-.273.48791-.53174a20.49026,20.49026,0,0,0,2.10712,1.70007,20.80226,20.80226,0,0,0,.42621,2.712Q8.21011,17.07023,7.95624,17.12054Zm7.10113-8.03936q-.50309-.317-1.01861-.61365-.5073-.292-1.0268-.56207c.593-.24933,1.17591-.46228,1.73865-.63581A18.21775,18.21775,0,0,1,15.05737,9.08118ZM9.679,5.83521c.63623-1.85114,1.57763-2.98053,2.30352-2.98084.77308-.00037,1.77753,1.21826,2.43433,3.19763q.064.19355.121.38928a20.478,20.478,0,0,0-2.52716.9712,20.06145,20.06145,0,0,0-2.519-.98194Q9.578,6.13062,9.679,5.83521ZM9.27863,7.259a18.30717,18.30717,0,0,1,1.72967.642Q9.95746,8.4433,8.96094,9.0824C9.0412,8.4444,9.148,7.83313,9.27863,7.259ZM8.9624,14.91968q.49695.31813,1.00843.61273.52174.30039,1.05737.57556a18.19577,18.19577,0,0,1-1.74445.66492C9.15161,16.1908,9.04364,15.56879,8.9624,14.91968Zm5.45569,3.14551A7.23556,7.23556,0,0,1,13.18,20.39844l-.00006.00006a1.76585,1.76585,0,0,1-1.18841.747c-.72821.00042-1.65766-1.085-2.28992-2.89545q-.11169-.32108-.20551-.648a20.10863,20.10863,0,0,0,2.52918-1.0097,20.79976,20.79976,0,0,0,2.54736.97851Q14.50141,17.81983,14.41809,18.06519Zm.36224-1.32422c-.56921-.176-1.16058-.39252-1.76214-.64551q.50867-.2677,1.02472-.56543.52955-.30579,1.0321-.62689A18.1524,18.1524,0,0,1,14.78033,16.741Zm.44629-4.74268q.00111.91095-.05688,1.82044c-.49268.33343-1.01282.659-1.554.97143-.53894.31116-1.07293.59711-1.59674.8559q-.82682-.39624-1.62176-.854-.79047-.455-1.54468-.969-.06894-.90921-.06946-1.82172l.00012.00019q-.00063-.91187.06794-1.82184c.49255-.33637,1.00891-.66168,1.54278-.96991.53632-.30969,1.077-.59442,1.61469-.85248q.81664.39688,1.60382.85065.78992.454,1.549.95868.06519.91443.06524,1.83166Zm.95673-5.09283c1.92133-.37372,3.37-.12232,3.73291.50622.3866.66962-.16748,2.1485-1.55383,3.70636l-.00006.00006q-.1149.12891-.23841.25891A20.06118,20.06118,0,0,0,15.98,9.68915a20.04054,20.04054,0,0,0-.40546-2.64893Q15.88486,6.96387,16.18335,6.90546Zm-.12988,3.8847A18.16447,18.16447,0,0,1,17.51483,11.978a18.11912,18.11912,0,0,1-1.45672,1.20831q.02325-.59391.02288-1.18842Q16.08072,11.39389,16.05347,10.79016Zm3.8681,5.78876c-.36346.63116-1.76788.89435-3.65222.53784q-.32391-.06115-.66474-.14557a20.069,20.069,0,0,0,.38746-2.68176,19.93914,19.93914,0,0,0,2.13708-1.71588q.17643.18329.33563.36487v-.00007a7.23437,7.23437,0,0,1,1.40308,2.23792A1.76563,1.76563,0,0,1,19.92157,16.57892Z"/></svg></span>
                                        <div class="ms-2">
                                            <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> React Lead Developer</a></h5>
                                            <a href="javascript:void(0);">Infratech PVT LTD</a>
                                        </div>
                                    </div> 
                                    <div class="popular-tags mb-3">
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-briefcase text-muted me-1"></i> 13 Openings</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-mortarboard text-muted me-1"></i> Graduate</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-clock text-muted me-1"></i> Min - 2Years</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-medium mb-0 text-default">$25,000 - $35,000</h6>
                                        <a href="" class="text-primary fw-medium fs-14 d-inline-flex align-items-center">
                                            Apply Now <i class="fe fe-arrow-right lh-1 transform-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card featured-jobs shadow-none">
                                <div class="card-body">
                                    <div class="btn-list float-end">
                                        <a href="javascript:void(0);" class="wishlist-icon" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add to wishlist"><span><i class="bi bi-heart"></i></span></a>
                                        <a href="javascript:void(0);" class="wishlist-icon text-warning" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Featured Jobs"><span><i class="bi bi-star-fill"></i></span></a>
                                    </div>
                                    <div class="d-sm-flex mb-3">
                                        <span class="avatar avatar-lg avatar-rounded bg-primary bg-opacity-10 border"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="var(--primary-color)" d="M22.86723,3.374a.99906.99906,0,0,0-.86622-.50195l-4.97064-.00391-.00738-.001-3.64356.001a1.00172,1.00172,0,0,0-.81787.42481l-.55859.7959L11.43851,3.291a.9983.9983,0,0,0-.81591-.42286l-3.646-.001H6.97611l-.00146.00018-.00147-.00018H6.96781l-4.97314.02734a.99989.99989,0,0,0-.85742,1.50586L11.15678,21.50586A1.00068,1.00068,0,0,0,12.01957,22h.001a1.00062,1.00062,0,0,0,.86328-.49609L22.8643,4.376A1.00212,1.00212,0,0,0,22.86723,3.374ZM10.10453,4.86816l1.085,1.53321a.99856.99856,0,0,0,.81641.42285h.00146a1.00252,1.00252,0,0,0,.8169-.42481l1.07519-1.53125,1.36267-.001-3.244,5.45373L8.7432,4.86719Zm1.9126,14.14942L3.7393,4.88477l2.66992-.01465,4.75342,7.918a1.00082,1.00082,0,0,0,.85742.48535H12.022l.001-.00012.001.00012h.002a1,1,0,0,0,.85742-.48926l4.708-7.916,2.66949.00293Z"/></svg></span>
                                        <div class="ms-2">
                                            <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Vuejs Frontend Developer</a></h5>
                                            <a href="javascript:void(0);">G Technical Solutions</a>
                                        </div>
                                    </div> 
                                    <div class="popular-tags mb-3">
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-briefcase text-muted me-1"></i> 13 Openings</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-mortarboard text-muted me-1"></i> Graduate</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-clock text-muted me-1"></i> Min - 2Years</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-medium mb-0 text-default">$25,000 - $35,000</h6>
                                        <a href="" class="text-primary fw-medium fs-14 d-inline-flex align-items-center">
                                            Apply Now <i class="fe fe-arrow-right lh-1 transform-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card featured-jobs shadow-none">
                                <div class="card-body">
                                    <div class="btn-list float-end">
                                        <a href="javascript:void(0);" class="wishlist-icon" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add to wishlist"><span><i class="bi bi-heart"></i></span></a>
                                        <a href="javascript:void(0);" class="wishlist-icon text-warning" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Featured Jobs"><span><i class="bi bi-star-fill"></i></span></a>
                                    </div>
                                    <div class="d-sm-flex mb-3">
                                        <span class="avatar avatar-lg avatar-rounded bg-primary bg-opacity-10 border"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="var(--primary-color)" d="M12,2a10.00009,10.00009,0,1,0,10,9.99976A10.01117,10.01117,0,0,0,12,2ZM3.00928,11.99976a8.95547,8.95547,0,0,1,.77844-3.659L8.07654,20.09131A8.99123,8.99123,0,0,1,3.00928,11.99976ZM12,20.99121a8.98726,8.98726,0,0,1-2.54-.36633l2.69788-7.83869,2.7633,7.57135a.84386.84386,0,0,0,.06446.12391A8.97138,8.97138,0,0,1,12,20.99121ZM13.239,7.78436c.54126-.02844,1.02906-.08539,1.02906-.08539a.37165.37165,0,0,0-.05738-.741s-1.4563.11432-2.39648.11432c-.8833,0-2.3678-.11432-2.3678-.11432a.37165.37165,0,0,0-.057.741s.4585.05695.943.08539l1.40075,3.838-1.968,5.90087L6.49133,7.78436C7.033,7.75592,7.52026,7.699,7.52026,7.699a.37166.37166,0,0,0-.05749-.741s-1.45593.11432-2.39612.11432c-.1687,0-.36768-.00415-.57861-.01093A8.98815,8.98815,0,0,1,18.07117,5.36957c-.0387-.00238-.07654-.0072-.11634-.0072A1.55669,1.55669,0,0,0,16.445,6.958a4.21016,4.21016,0,0,0,.88317,2.1087,4.73577,4.73577,0,0,1,.74122,2.47955,10.88314,10.88314,0,0,1-.68409,2.9065l-.897,2.99634ZM16.52,19.771l2.74609-7.9397A8.489,8.489,0,0,0,19.94983,8.611a6.9105,6.9105,0,0,0-.06043-.92456A8.99224,8.99224,0,0,1,16.52,19.771Z"/></svg></span>
                                        <div class="ms-2">
                                            <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Wordpress Developer - Remote</a></h5>
                                            <a href="javascript:void(0);">Hardware Private Solutions</a>
                                        </div>
                                    </div> 
                                    <div class="popular-tags mb-3">
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-briefcase text-muted me-1"></i> 13 Openings</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-mortarboard text-muted me-1"></i> Graduate</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-clock text-muted me-1"></i> Min - 2Years</a>
                                        <a href="javascript:void(0);" class="badge rounded-pill bg-light text-default"><i class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-medium mb-0 text-default">$25,000 - $35,000</h6>
                                        <a href="" class="text-primary fw-medium fs-14 d-inline-flex align-items-center">
                                            Apply Now <i class="fe fe-arrow-right lh-1 transform-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="javascript:void(0);" class="btn btn-lg btn-wave btn-primary">
                            View All Jobs <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </section>
            <!-- End:: Section-5 -->

            <!-- Start:: Section-6 -->
            <section class="section bg-primary landing-Features">
                <div class="container">
                    <div class="row justify-content-center text-center mb-5 text-fixed-white">
                        <div class="col-xl-6">
                            <h3 class="fw-medium mb-2 text-fixed-white">Which Type Of Job You Want ?</h3>
                            <span class="fs-15 fw-normal d-block op-8">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card custom-card feature-style landing-card">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                    <div class="feature-style-icon bg-primary-transparent svg-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><g data-name="Working-Home-Online-Work From Home-Computer"><path d="M28 29h2v2h-2zM34 29h2v2h-2z"/><circle cx="32" cy="52" r="2"/><path d="M60.99 25.89h-.01L33.93 3.31a2.981 2.981 0 0 0-3.85 0L3.1 25.95a3.071 3.071 0 0 0-.74 3.89 2.976 2.976 0 0 0 2.08 1.43 2.921 2.921 0 0 0 .5.05 2.986 2.986 0 0 0 1.93-.71l4.13-3.5V61a1 1 0 0 0 1 1h40a1 1 0 0 0 1-1V27.01l4.13 3.48a3 3 0 0 0 3.86-4.6ZM40 59a1 1 0 0 1-1 1H25a1 1 0 0 1-1-1v-1h16Zm.09-3H23.9l-.69-6.9a1.022 1.022 0 0 1 .26-.77.985.985 0 0 1 .74-.33h15.58a.985.985 0 0 1 .74.33 1.022 1.022 0 0 1 .26.77ZM45 60h-3.18a3 3 0 0 0 .18-1v-1.95l.78-7.75a3.009 3.009 0 0 0-.77-2.31 2.97 2.97 0 0 0-2.22-.99H24.21a2.97 2.97 0 0 0-2.22.99 3.009 3.009 0 0 0-.77 2.31l.78 7.75V59a3 3 0 0 0 .18 1H19V49.87a5.018 5.018 0 0 1 2.93-4.56l6.76-3.07a3.993 3.993 0 0 0 6.62 0l6.76 3.07A5.018 5.018 0 0 1 45 49.87ZM24.07 31.99c-.02 0-.05.01-.07.01a2 2 0 0 1 0-4v3a7.954 7.954 0 0 0 .07.99ZM24 26a4.091 4.091 0 0 0-1 .14V26a9 9 0 0 1 18 0v.14a4.091 4.091 0 0 0-1-.14c-.02 0-.05.01-.07.01a7.99 7.99 0 0 0-15.86 0c-.02 0-.05-.01-.07-.01Zm18 4a2.006 2.006 0 0 1-2 2c-.02 0-.05-.01-.07-.01A7.954 7.954 0 0 0 40 31v-3a2.006 2.006 0 0 1 2 2Zm-4.09-4h-.5l-1.7-1.71a1 1 0 0 0-1.16-.18L30.76 26h-4.67a5.993 5.993 0 0 1 11.82 0ZM26 28h5a1 1 0 0 0 .45-.11l3.35-1.67 1.49 1.49A1.033 1.033 0 0 0 37 28h1v3a6 6 0 0 1-12 0Zm8 10.74V40a2 2 0 0 1-4 0v-1.26a7.822 7.822 0 0 0 4 0ZM51 60h-4V49.87a7.025 7.025 0 0 0-4.11-6.38L36 40.36v-2.44a8.066 8.066 0 0 0 3.43-3.97A5.481 5.481 0 0 0 40 34a3.981 3.981 0 0 0 3-6.62V26a11 11 0 1 0-22 0v1.38A3.981 3.981 0 0 0 24 34a5.481 5.481 0 0 0 .57-.05A8.066 8.066 0 0 0 28 37.92v2.45l-6.89 3.12A7.025 7.025 0 0 0 17 49.87V60h-4V25.42L32 9.31l19 16.01Zm8.82-31.17a.988.988 0 0 1-1.4.13L32.64 7.24a.987.987 0 0 0-1.29 0L5.58 29.08a.986.986 0 0 1-.81.22 1 1 0 0 1-.7-.49 1.083 1.083 0 0 1 .31-1.33L31.36 4.84a1.025 1.025 0 0 1 .64-.23 1 1 0 0 1 .64.23L59.7 27.43a.987.987 0 0 1 .12 1.4Z"/></g></svg>
                                    </div>
                                    <h5 class="mb-1 fw-medium text-default">In Home</h5>
                                    <p class="text-muted">120 Jobs Available</p>
                                    <a class="text-primary fw-medium" href="javascript:void(0);">Explore Jobs<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card custom-card feature-style landing-card">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                    <div class="feature-style-icon bg-primary-transparent svg-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M45 30h2v2h-2zM41 30h2v2h-2zM37 30h2v2h-2z"/><path d="M62 13v-2H42V9c0-3.859-3.141-7-7-7h-6c-3.859 0-7 3.141-7 7v2h-8a1 1 0 0 0-1 1v19c0 .633.13 1.234.346 1.792L2.75 35.532a1 1 0 0 0 0 1.936L16 40.894V46H5v2h11v2H8v2h8v2h-5v2h5.839l14.845 4.948a1.006 1.006 0 0 0 .632 0l15-5A.998.998 0 0 0 48 55V40.894l10-2.586v14.455l-1.895 3.789a1 1 0 0 0 0 .895l2 4a1.001 1.001 0 0 0 1.79 0l2-4a1 1 0 0 0 0-.895L60 52.764V37.791l1.25-.323a1 1 0 0 0 0-1.936l-10.596-2.741A4.938 4.938 0 0 0 51 31V21h5v-2h-5v-2h8v-2h-8v-2h11zm-3 45.764L58.118 57 59 55.236 59.882 57 59 58.764zM24 9c0-2.757 2.243-5 5-5h6c2.757 0 5 2.243 5 5v2h-2V9c0-1.654-1.346-3-3-3h-6c-1.654 0-3 1.346-3 3v2h-2V9zm12 2h-8V9a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2zm-21 2h34v4c0 1.654-1.346 3-3 3H36v-3a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v3H18c-1.654 0-3-1.346-3-3v-4zm34 18c0 .68-.236 1.3-.618 1.804-.006.007-.015.012-.021.02a3.076 3.076 0 0 1-.497.508 3.016 3.016 0 0 1-.5.325c-.03.015-.058.034-.088.048-.161.078-.33.135-.503.182-.042.011-.081.029-.123.038A2.985 2.985 0 0 1 46 34H18c-.222 0-.439-.028-.651-.076-.043-.009-.082-.027-.123-.038a2.866 2.866 0 0 1-.502-.182c-.031-.014-.059-.033-.089-.048a3.002 3.002 0 0 1-.996-.832c-.006-.008-.014-.012-.021-.02A2.975 2.975 0 0 1 15 31V20.974A4.948 4.948 0 0 0 18 22h1v3a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-3h14v3a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-3h1c1.13 0 2.162-.391 3-1.026V31zm-28-9h2v2h-2v-2zm13-2h-4v-2h4v2zm7 2h2v2h-2v-2zm5 32.279-14 4.667-14-4.667V41.412l13.75 3.556a1.008 1.008 0 0 0 .5 0L46 41.412v12.867zM32 42.967 6.993 36.5l7.504-1.941c.457.45.998.811 1.599 1.06.111.046.23.069.343.107.19.063.376.134.575.174.321.065.651.1.986.1h28c.335 0 .665-.035.986-.1.199-.04.385-.112.575-.174.114-.038.233-.061.343-.107a5 5 0 0 0 1.599-1.06l7.504 1.941L32 42.967z"/></svg>
                                    </div>
                                    <h5 class="mb-1 fw-medium text-default">Internship</h5>
                                    <p class="text-muted">120 Jobs Available</p>
                                    <a class="text-primary fw-medium" href="javascript:void(0);">Explore Jobs<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card custom-card feature-style landing-card">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                    <div class="feature-style-icon bg-primary-transparent svg-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66 66"><g data-name="Layer 2"><path d="M66 40.88a13 13 0 0 0-25.91-1.45c-1.51-.19-3.18-.34-5-.46v-2.09a15.25 15.25 0 0 0 5.42-8.51 5.34 5.34 0 0 0 3.21-4.91c0-2.18-.68-3.89-1.78-4.67 0-7.2-.63-11.65-3.24-14.25C34.15 0 23.87 4.17 20.75.36A1 1 0 0 0 19.4.18C13 4.7 10.73 13 12.92 19.3a6.55 6.55 0 0 0-1.21 4.15 5.33 5.33 0 0 0 3.21 4.92 15.26 15.26 0 0 0 5.44 8.53V39C13.3 39.42 0 40.23 0 53.93V65a1 1 0 0 0 1 1h53.44a1 1 0 0 0 1-1V53.64A13 13 0 0 0 66 40.88ZM44.75 58.36V64h-16V52.82l6-11.87c8.62.52 16.9 1.44 18.57 10.85h-2.01a6.56 6.56 0 0 0-6.56 6.56Zm-17-8-2.3-4.59.92-2.92h2.77l.86 2.89ZM19.9 2.3c4.61 3.49 13.92.19 17.4 3.7 2.19 2.18 2.64 6.61 2.65 13.5l-.39.64c-.28-2.22-.45-3.37-.61-4v-.06c-.86-5.94-7.47-6.07-12.59-2.41-2.89 1.8-5.67 1.44-8.73-1.12a1 1 0 0 0-1.63.65l-.78 6.48C12.86 14.76 14.18 6.82 19.9 2.3Zm-3.16 25.05a1 1 0 0 0-.89-.79 3.2 3.2 0 0 1-2.14-3.1 6.59 6.59 0 0 1 .29-1.94A5.18 5.18 0 0 0 15.37 23a1 1 0 0 0 1.54-.72l.86-7.13a8.42 8.42 0 0 0 9.69.19c3.63-2.59 8.85-3.46 9.5 1 0 .27.72 4.83 1 6.86a1 1 0 0 0 1.85.4l1.52-2.5a5.67 5.67 0 0 1 .44 2.36 3.23 3.23 0 0 1-2.15 3.1 1 1 0 0 0-.88.79c-1.25 5.95-5.77 10.1-11 10.1s-9.74-4.15-11-10.1Zm11 12.1a11.8 11.8 0 0 0 5.38-1.3v1.47l-1.78 3.56-.53-1.65a1 1 0 0 0-.95-.7h-4.25a1 1 0 0 0-1 .7l-.52 1.66-1.77-3.52v-1.51a11.87 11.87 0 0 0 5.4 1.29Zm-7 1.5 5.95 11.84V64h-16v-5.64a6.56 6.56 0 0 0-6.56-6.56H2.19C3.86 42.37 12.24 41.46 20.76 41ZM2 53.93a.57.57 0 0 1 0-.13h2.13a4.56 4.56 0 0 1 4.56 4.56V64H2ZM53.44 64h-6.69v-5.64a4.56 4.56 0 0 1 4.56-4.56h2.12c.01.69.01-2.66.01 10.2Zm1.81-12.35c-1-6.06-5-10.62-13.18-11.94a11 11 0 1 1 13.18 11.94Z"/><path d="M57.54 39.87H54v-5.25a1 1 0 0 0-2 0v6.25a1 1 0 0 0 1 1h4.54a1 1 0 0 0 0-2Z"/></g></svg>
                                    </div>
                                    <h5 class="mb-1 fw-medium text-default">Part Time</h5>
                                    <p class="text-muted">120 Jobs Available</p>
                                    <a class="text-primary fw-medium" href="javascript:void(0);">Explore Jobs<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card custom-card feature-style landing-card">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                    <div class="feature-style-icon bg-primary-transparent svg-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M21 28h-5v-.93a1 1 0 0 1 .445-.832l3.774-2.515A3.993 3.993 0 0 0 22 20.4V20a4 4 0 0 0-8 0 1 1 0 0 0 2 0 2 2 0 0 1 4 0v.4a2 2 0 0 1-.891 1.664l-3.773 2.515A2.993 2.993 0 0 0 14 27.07V29a1 1 0 0 0 1 1h6a1 1 0 0 0 0-2Z"/><path d="M31 26h-1v-9a1 1 0 0 0-1.857-.515l-6 10A1 1 0 0 0 23 28h5v1a1 1 0 0 0 2 0v-1h1a1 1 0 0 0 0-2zm-3 0h-3.233L28 20.61zm15 5a1 1 0 0 0 1-1v-1a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1zm6 0a1 1 0 0 0 1-1v-1a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1z"/><path d="M53 42h-3v-2.08A8.028 8.028 0 0 0 53.93 34H55a3.009 3.009 0 0 0 3-3v-1a2.986 2.986 0 0 0-1-2.22V21a5 5 0 0 0-5-5h-1a2.994 2.994 0 0 0-1.67.51 4.712 4.712 0 0 0-.8-1.05A5.005 5.005 0 0 0 45 14h-3.04a21 21 0 1 0-3.05 22.69A8.071 8.071 0 0 0 42 39.92V42h-3a9.014 9.014 0 0 0-9 9v10a1 1 0 0 0 1 1h30a1 1 0 0 0 1-1V51a9.014 9.014 0 0 0-9-9Zm3-12v1a1 1 0 0 1-1 1h-1v-3h1a1 1 0 0 1 1 1ZM23 42a19 19 0 1 1 16.91-27.66 7.16 7.16 0 0 0-1.81.86 17 17 0 1 0-2.01 18.64A2.764 2.764 0 0 0 37 34h1.07c.02.15.04.3.07.45A19.011 19.011 0 0 1 23 42Zm11.48-9.39a15.049 15.049 0 0 1-3.13 2.85l-.48-.84a1 1 0 0 0-1.74 1l.49.84A14.821 14.821 0 0 1 24 37.94V37a1 1 0 0 0-2 0v.95a14.915 14.915 0 0 1-5.61-1.5l.48-.83a1 1 0 0 0-1.74-1l-.48.84a15.165 15.165 0 0 1-4.11-4.11l.84-.48a1 1 0 0 0-1-1.74l-.83.48A14.915 14.915 0 0 1 8.05 24H9a1 1 0 0 0 0-2h-.95a14.915 14.915 0 0 1 1.5-5.61l.83.48a1 1 0 0 0 1.36-.37 1.007 1.007 0 0 0-.36-1.37l-.84-.48a15.165 15.165 0 0 1 4.11-4.11l.48.84a.993.993 0 0 0 1.37.36 1 1 0 0 0 .37-1.36l-.48-.83A14.915 14.915 0 0 1 22 8.05V9a1 1 0 0 0 2 0v-.96a14.83 14.83 0 0 1 5.61 1.5l-.48.84a1 1 0 0 0 .37 1.36.993.993 0 0 0 1.37-.36l.48-.84a14.891 14.891 0 0 1 4.1 4.12l-.83.47a1.007 1.007 0 0 0-.36 1.37 1 1 0 0 0 1.36.37l.83-.48a2 2 0 0 1 .1.21A6.984 6.984 0 0 0 35 21v6.78A2.986 2.986 0 0 0 34 30v1a2.933 2.933 0 0 0 .48 1.61ZM36 30a1 1 0 0 1 1-1h1v3h-1a1 1 0 0 1-1-1Zm2-4v1h-1v-6a4.938 4.938 0 0 1 1.45-3.52 5.007 5.007 0 0 1 3.04-1.45A4.361 4.361 0 0 1 42 16h3a2.988 2.988 0 0 1 3 3 1 1 0 0 0 2 0 1 1 0 0 1 1-1h1a3.009 3.009 0 0 1 3 3v6h-1v-1a3.009 3.009 0 0 0-3-3H41a3.009 3.009 0 0 0-3 3Zm2 7v-7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7a6 6 0 0 1-12 0Zm9.5 11h.5v3.52l-2.42-.96ZM46 45.33l-2-2.66v-1.93a7.822 7.822 0 0 0 4 0v1.93ZM42 44h.5l1.92 2.56-2.42.96Zm18 16h-4v-7a1 1 0 0 0-2 0v7H38v-7a1 1 0 0 0-2 0v7h-4v-9a7.008 7.008 0 0 1 7-7h1v5a1 1 0 0 0 1 1 .937.937 0 0 0 .37-.07L46 48.08l4.63 1.85A.937.937 0 0 0 51 50a1 1 0 0 0 1-1v-5h1a7.008 7.008 0 0 1 7 7Z"/><path d="M46 50a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0v-1a1 1 0 0 0-1-1zm0 5a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0v-1a1 1 0 0 0-1-1zm3.706-21.706a1 1 0 0 0-1.413 0 3.318 3.318 0 0 1-4.582 0 1 1 0 0 0-1.411 1.415 5.239 5.239 0 0 0 7.41 0 1 1 0 0 0-.004-1.415z"/></svg>
                                    </div>
                                    <h5 class="mb-1 fw-medium text-default">Full Time</h5>
                                    <p class="text-muted">120 Jobs Available</p>
                                    <a class="text-primary fw-medium" href="javascript:void(0);">Explore Jobs<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-6 -->

            <!-- Start:: Section-7 -->
            <section class="section bg-banner-1 bg-light py-0" id="candidate">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 d-lg-block d-none text-center mt-4">
                            <img src="assets/images/media/jobs-landing/7.png" width="260" alt="">
                        </div>
                        <div class="col-md-8 my-4">
                            <h2 class="fw-medium mb-3">Are You Looking For A best Candidate? <br> Just <a href="javascript:void(0);" class="text-primary text-decoration-line"> <u>Publish</u> </a> your job here..</h2>
                            <span class="mb-4 fs-15 fw-normal text-muted d-block">Est amet sit vero sanctus labore no sed nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum.Est amet sit vero sanctus labore no sed ipsum ipsum nonumy vero sanctus labore.. </span>
                            <a href="javascript:void(0);" class="btn btn-primary btn-lg"><i class="ti ti-upload"></i> Publish new job</a>
                        </div> 
                    </div>
                </div>
            </section>
            <!-- End:: Section-7 -->

            <!-- Start:: Section-8 -->
            <section class="section">
                <div class="container">
                    <div class="row mb-5 justify-content-center text-center">
                        <p class="fs-12 fw-medium mb-1"><span class="landing-section-heading text-gradient">OUR BLOG</span> </p>
                        <h3 class="fw-medium mb-2">Latest News Updates & Blogs</h3>
                        <div class="col-xl-9">
                            <span class="b-block fw-normal fs-15 text-muted">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card custom-card border shadow-none">
                                <a href="javascript:void(0);">
                                    <img src="assets/images/media/jobs-landing/blog/1.jpg" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <span class="badge bg-secondary blog-badge">Interview</span>
                                    <h5 class="fw-medium mb-1">How to prepare an interview?</h5>
                                    <p class="card-text">The holographic principle, theorized to be a property of quantum gravity, postulates that the description.</p>
                                    <a class="text-primary fw-medium d-flex align-items-center" href="javascript:void(0);">Read this post<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card custom-card border shadow-none">
                                <a href="javascript:void(0);">
                                    <img src="assets/images/media/jobs-landing/blog/2.jpg" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <span class="badge bg-danger blog-badge">Freelancer</span>
                                    <h5 class="fw-medium mb-1">Freelancer vs Employement</h5>
                                    <p class="card-text">The holographic principle, theorized to be a property of quantum gravity, postulates that the description.</p>
                                    <a class="text-primary fw-medium d-flex align-items-center" href="javascript:void(0);">Read this post<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card custom-card border shadow-none">
                                <a href="javascript:void(0);">
                                    <img src="assets/images/media/jobs-landing/blog/3.jpg" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <span class="badge bg-warning blog-badge">Jobmaster</span>
                                    <h5 class="fw-medium mb-1">Job opportunity in jobmaster</h5>
                                    <p class="card-text">The holographic principle, theorized to be a property of quantum gravity, postulates that the description.</p>
                                    <a class="text-primary fw-medium d-flex align-items-center" href="javascript:void(0);">Read this post<i class="ri-arrow-right-s-line align-middle transform-arrow lh-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-8 -->

            <!-- Start:: Section-9 -->
            <section class="section bg-banner-2 text-fixed-white" id="employers">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="fw-medium text-fixed-white">Let Employers easy to find you !</h2>
                            <span class="d-block fw-normal fs-15 op-8">Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labore no sed ipsum ipsum nonumy vero sanctus labore..</span>
                        </div>
                        <div class="col-lg-3 text-end my-auto">
                            <a href="javascript:void(0);" class="btn btn-lg btn-danger">Upload Your Resume</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-9 -->

            <!-- Start:: Section-10 -->
            <section class="section bg-light">
                <div class="container text-center">
                    <div class="row mb-5 justify-content-center text-center">
                        <p class="fs-12 fw-medium mb-1"><span class="landing-section-heading text-gradient">FAQ'S</span></p>
                        <h3 class="fw-medium mb-2">Frequently Asked Questions?</h3>
                        <div class="col-xl-9">
                            <span class="b-block fw-normal fs-15 text-muted">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card text-start featured-card-4">
                                <a href="javascript:void(0);" class="stretched-link"></a>
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 p-2 bg-primary-transparent rounded-circle border border-primary border-opacity-10">
                                            <span class="avatar avatar-rounded bg-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#FFFFFF" d="M11.29,15.29a1.58,1.58,0,0,0-.12.15.76.76,0,0,0-.09.18.64.64,0,0,0-.06.18,1.36,1.36,0,0,0,0,.2.84.84,0,0,0,.08.38.9.9,0,0,0,.54.54.94.94,0,0,0,.76,0,.9.9,0,0,0,.54-.54A1,1,0,0,0,13,16a1,1,0,0,0-.29-.71A1,1,0,0,0,11.29,15.29ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM12,7A3,3,0,0,0,9.4,8.5a1,1,0,1,0,1.73,1A1,1,0,0,1,12,9a1,1,0,0,1,0,2,1,1,0,0,0-1,1v1a1,1,0,0,0,2,0v-.18A3,3,0,0,0,12,7Z"/></svg>
                                            </span>
                                        </div>
                                        <h6 class="fw-medium mb-0">
                                            General Questions
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card text-start featured-card-4">
                                <a href="javascript:void(0);" class="stretched-link"></a>
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 p-2 bg-primary-transparent rounded-circle border border-primary border-opacity-10">
                                            <span class="avatar avatar-rounded bg-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#FFFFFF" d="M21.5,15a3,3,0,0,0-1.9-2.78l1.87-7a1,1,0,0,0-.18-.87A1,1,0,0,0,20.5,4H6.8L6.47,2.74A1,1,0,0,0,5.5,2h-2V4H4.73l2.48,9.26a1,1,0,0,0,1,.74H18.5a1,1,0,0,1,0,2H5.5a1,1,0,0,0,0,2H6.68a3,3,0,1,0,5.64,0h2.36a3,3,0,1,0,5.82,1,2.94,2.94,0,0,0-.4-1.47A3,3,0,0,0,21.5,15Zm-3.91-3H9L7.34,6H19.2ZM9.5,20a1,1,0,1,1,1-1A1,1,0,0,1,9.5,20Zm8,0a1,1,0,1,1,1-1A1,1,0,0,1,17.5,20Z"/></svg>
                                            </span>
                                        </div>
                                        <h6 class="fw-medium mb-0">
                                            Order & Cart
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card text-start featured-card-4">
                                <a href="javascript:void(0);" class="stretched-link"></a>
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 p-2 bg-primary-transparent rounded-circle border border-primary border-opacity-10">
                                            <span class="avatar avatar-rounded bg-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#FFFFFF" d="M20,17.57a4.3,4.3,0,1,0-3.67,2.06A4.37,4.37,0,0,0,18.57,19l1.72,1.73a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM18,17a2.37,2.37,0,0,1-3.27,0,2.32,2.32,0,0,1,0-3.27,2.31,2.31,0,0,1,3.27,0A2.32,2.32,0,0,1,18,17ZM19,3H5A3,3,0,0,0,2,6v9a3,3,0,0,0,3,3H9a1,1,0,0,0,0-2H5a1,1,0,0,1-1-1V9H20v1a1,1,0,0,0,2,0V6A3,3,0,0,0,19,3Zm1,4H4V6A1,1,0,0,1,5,5H19a1,1,0,0,1,1,1ZM10,11H7a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Z"/></svg>
                                            </span>
                                        </div>
                                        <h6 class="fw-medium mb-1">
                                            Payment & Credits
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card text-start featured-card-4">
                                <a href="javascript:void(0);" class="stretched-link"></a>
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 p-2 bg-primary-transparent rounded-circle border border-primary border-opacity-10">
                                            <span class="avatar avatar-rounded bg-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#FFFFFF" d="M1,12.5v5a1,1,0,0,0,1,1H3a3,3,0,0,0,6,0h6a3,3,0,0,0,6,0h1a1,1,0,0,0,1-1V5.5a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v2H6A3,3,0,0,0,3.6,8.7L1.2,11.9a.61.61,0,0,0-.07.14l-.06.11A1,1,0,0,0,1,12.5Zm16,6a1,1,0,1,1,1,1A1,1,0,0,1,17,18.5Zm-7-13a1,1,0,0,1,1-1h9a1,1,0,0,1,1,1v11h-.78a3,3,0,0,0-4.44,0H10Zm-2,6H4L5.2,9.9A1,1,0,0,1,6,9.5H8Zm-3,7a1,1,0,1,1,1,1A1,1,0,0,1,5,18.5Zm-2-5H8v2.78a3,3,0,0,0-4.22.22H3Z"/></svg>
                                            </span>
                                        </div>
                                        <h6 class="fw-medium mb-1">
                                            Shipping
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card text-start featured-card-4">
                                <a href="javascript:void(0);" class="stretched-link"></a>
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 p-2 bg-primary-transparent rounded-circle border border-primary border-opacity-10">
                                            <span class="avatar avatar-rounded bg-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#FFFFFF" d="M11.5,20h-6a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h5V7a3,3,0,0,0,3,3h3v5a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,11.56,2H5.5a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h6a1,1,0,0,0,0-2Zm1-14.59L15.09,8H13.5a1,1,0,0,1-1-1ZM7.5,14h6a1,1,0,0,0,0-2h-6a1,1,0,0,0,0,2Zm4,2h-4a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-4-6h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Zm13.71,6.29a1,1,0,0,0-1.42,0l-3.29,3.3-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0l4-4A1,1,0,0,0,21.21,16.29Z"/></svg>
                                            </span>
                                        </div>
                                        <h6 class="fw-medium mb-1">
                                            Licence
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card text-start featured-card-4">
                                <a href="javascript:void(0);" class="stretched-link"></a>
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 p-2 bg-primary-transparent rounded-circle border border-primary border-opacity-10">
                                            <span class="avatar avatar-rounded bg-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#FFFFFF" d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                            </span>
                                        </div>
                                        <h6 class="fw-medium mb-1">
                                            Invoice
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-10 -->

            <!-- Start:: Section-11 -->
            <section class="section landing-testimonials">
                <div class="container text-center">
                    <div class="row mb-5 justify-content-center text-center">
                        <p class="fs-12 fw-medium mb-1"><span class="landing-section-heading text-gradient">TESTIMONIALS</span> </p>
                        <h3 class="fw-medium mb-2">We never failed to reach expectations</h3>
                        <div class="col-xl-9">
                            <span class="b-block fw-normal fs-15 text-muted">Some of the reviews our clients gave which brings motivation to work for future projects.</span>
                        </div>
                    </div>
                    <div class="swiper pagination-dynamic text-start">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card custom-card featured-card-1 border shadow-none">
                                    <div class="card-body p-4">
                                        <span class="review-quote">
                                            <i class="bi bi-quote"></i>
                                        </span>
                                        <span class="review-quote">
                                            <i class="bi bi-quote"></i>
                                        </span>
                                        <div class="d-flex mb-2 align-items-center">
                                            <span class="avatar avatar-lg avatar-rounded me-2">
                                                <img src="assets/images/faces/11.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 fw-medium fs-16 text-primary">Toni Stark</p>
                                                <p class="fs-10 mb-0 fw-medium text-muted">CEO OF NORJA</p>
                                            </div>
                                        </div>
                                        <span>- Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card featured-card-1 border shadow-none">
                                    <div class="card-body p-4">
                                        <span class="review-quote">
                                            <i class="bi bi-quote"></i>
                                        </span>
                                        <span class="review-quote">
                                            <i class="bi bi-quote"></i>
                                        </span>
                                        <div class="d-flex mb-2 align-items-center">
                                            <span class="avatar avatar-lg avatar-rounded me-2">
                                                <img src="assets/images/faces/1.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 fw-medium fs-16 text-primary">Melissa Blue</p>
                                                <p class="fs-10 mb-0 fw-medium text-muted">MANAGER CHO</p>
                                            </div>
                                        </div>
                                        <span>- Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card featured-card-1 border shadow-none">
                                    <div class="card-body p-4">
                                        <span class="review-quote">
                                            <i class="bi bi-quote"></i>
                                        </span>
                                        <div class="d-flex mb-2 align-items-center">
                                            <span class="avatar avatar-lg avatar-rounded me-2">
                                                <img src="assets/images/faces/14.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 fw-medium fs-16 text-primary">Kiara Advain</p>
                                                <p class="fs-10 mb-0 fw-medium text-muted">CEO OF EMPIRO</p>
                                            </div>
                                        </div>
                                        <span>- Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card featured-card-1 border shadow-none">
                                    <div class="card-body p-4">
                                        <span class="review-quote">
                                            <i class="bi bi-quote"></i>
                                        </span>
                                        <div class="d-flex mb-2 align-items-center">
                                            <span class="avatar avatar-lg avatar-rounded me-2">
                                                <img src="assets/images/faces/8.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 fw-medium fs-16 text-primary">Jhonson Smith</p>
                                                <p class="fs-10 mb-0 fw-medium text-muted">CHIEF SECRETARY MBIO</p>
                                            </div>
                                        </div>
                                        <span>- Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card featured-card-1 border shadow-none">
                                    <div class="card-body p-4">
                                        <span class="review-quote">
                                            <i class="bi bi-quote"></i>
                                        </span>
                                        <div class="d-flex mb-2 align-items-center">
                                            <span class="avatar avatar-lg avatar-rounded me-2">
                                                <img src="assets/images/faces/4.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 fw-medium fs-16 text-primary">Dwayne Stort</p>
                                                <p class="fs-10 mb-0 fw-medium text-muted">CEO ARMEDILLO</p>
                                            </div>
                                        </div>
                                        <span>- Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card featured-card-1 border shadow-none">
                                    <div class="card-body p-4">
                                        <span class="review-quote">
                                            <i class="bi bi-quote"></i>
                                        </span>
                                        <div class="d-flex mb-2 align-items-center">
                                            <span class="avatar avatar-lg avatar-rounded me-2">
                                                <img src="assets/images/faces/9.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 fw-medium fs-16 text-primary">Jasmine Kova</p>
                                                <p class="fs-10 mb-0 fw-medium text-muted">AGGENT AMIO</p>
                                            </div>
                                        </div>
                                        <span>- Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card featured-card-1 border shadow-none">
                                    <div class="card-body p-4">
                                        <span class="review-quote">
                                            <i class="bi bi-quote"></i>
                                        </span>
                                        <div class="d-flex mb-2 align-items-center">
                                            <span class="avatar avatar-lg avatar-rounded me-2">
                                                <img src="assets/images/faces/10.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 fw-medium fs-16 text-primary">Dolph MR</p>
                                                <p class="fs-10 mb-0 fw-medium text-muted">CEO MR BRAND</p>
                                            </div>
                                        </div>
                                        <span>- Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card featured-card-1 border shadow-none">
                                    <div class="card-body p-4">
                                        <span class="review-quote">
                                            <i class="bi bi-quote"></i>
                                        </span>
                                        <div class="d-flex mb-2 align-items-center">
                                            <span class="avatar avatar-lg avatar-rounded me-2">
                                                <img src="assets/images/faces/13.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 fw-medium fs-16 text-primary">Brenda Simpson</p>
                                                <p class="fs-10 mb-0 fw-medium text-muted">CEO AIBMO</p>
                                            </div>
                                        </div>
                                        <span>- Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card featured-card-1 border shadow-none">
                                    <div class="card-body p-4">
                                        <span class="review-quote">
                                            <i class="bi bi-quote"></i>
                                        </span>
                                        <div class="d-flex mb-2 align-items-center">
                                            <span class="avatar avatar-lg avatar-rounded me-2">
                                                <img src="assets/images/faces/6.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 fw-medium fs-16 text-primary">Melissa Blue</p>
                                                <p class="fs-10 mb-0 fw-medium text-muted">MANAGER CHO</p>
                                            </div>
                                        </div>
                                        <span>- Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-11 -->

            <!-- Start:: Section-12 -->
            <section class="section bg-banner" id="career-advice">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="mb-4">
                            <h3 class="fw-medium mb-2 text-fixed-white">&#128512; Your dream job is waiting for you !</h3>
                        </div>
                        <span class="fs-15 fw-normal op-8 d-block mb-4 px-lg-0 px-3">Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labore no sed ipsum ipsum nonumy vero sanctus labore..</span>
                        <a href="javascript:void(0);" class="btn btn-lg btn-light m-1"><i class="bi bi-search me-1"></i> Search Jobs</a>
                        <a href="javascript:void(0);" class="btn btn-lg btn-danger m-1"><i class="bi bi-send me-1"></i> Apply Job Now</a>
                    </div>
                </div>
            </section>
            <!-- End:: Section-12 -->

            <!-- Start:: Footer -->
            <div class="landing-main-footer py-3">
                <div class="container">
                    <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                        <div>
                            <span class="text-fixed-white op-7 fs-14"> © Copyright <span id="year"></span> <a
                                href="javascript:void(0);" class="text-primary fs-15 fw-medium">Udon</a>.
                            </span>
                        </div>
                        <div>
                            <ul class="list-unstyled fw-normal landing-footer-list mb-0">
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-8">Terms Of Service</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-8">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-8">Legal</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-8">Contact</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-fixed-white op-8">Report Abuse</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: Footer -->

        </div>
        <!-- End::app-content -->

    </div>

    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- Popper JS -->
    <script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Color Picker JS -->
    <script src="assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Choices JS -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Swiper JS -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Defaultmenu JS -->
    <script src="assets/js/defaultmenu.min.js"></script>

    <!-- Internal Landing JS -->
    <script src="assets/js/landing.js"></script>

    <!-- Node Waves JS-->
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- Sticky JS -->
    <script src="assets/js/sticky.js"></script>

</body>

</html>