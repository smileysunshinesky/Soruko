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

<body class="landing-body">

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
                                <a href="#about" class="side-menu__item">
                                    <span class="side-menu__label">About</span>
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
                                        <a href="#services" class="side-menu__item">Services</a>
                                    </li>
                                    <li class="slide">
                                        <a href="#expectations" class="side-menu__item">Expectations</a>
                                    </li>
                                    <li class="slide">
                                        <a href="#features" class="side-menu__item">Features</a>
                                    </li>
                                    <li class="slide">
                                        <a href="#workflow" class="side-menu__item">Work Flow</a>
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
                                <a href="#pricing" class="side-menu__item">
                                    <span class="side-menu__label">Pricing</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#team" class="side-menu__item">
                                    <span class="side-menu__label">Team</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#faqs" class="side-menu__item">
                                    <span class="side-menu__label">FAQ's</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#testimonials" class="side-menu__item">
                                    <span class="side-menu__label">Testimonials</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#contact" class="side-menu__item">
                                    <span class="side-menu__label">Contact Us</span>
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
        <div class="main-content landing-main px-0">

            <!-- Start:: Section-1 -->
            <div class="landing-banner" id="home">
                <section class="section">
                    <div class="container main-banner-container pb-lg-0">
                        <div class="row">
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-8">
                                <div class="py-lg-5">
                                    <div class="mb-3">
                                        <h6 class="fw-medium text-fixed-white op-9">BRILLIANCE IN EXECUTION</h6>
                                    </div>
                                    <p class="landing-banner-heading mb-3">Your sure stop place for best theme ends here with <span class="text-gradient">UDON !</span></p>
                                    <div class="fs-16 mb-5 text-fixed-white op-7">UDON - Now you can use this admin template to design stunning dashboards that will wow your target viewers or users to no end.</div>
                                    <a href="index.php" class="m-1 btn btn-lg btn-secondary">
                                        View Demos
                                        <i class="ri-eye-line ms-2 align-middle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4 my-auto">
                                <div class="text-end landing-main-image landing-heading-img">
                                    <img src="assets/images/media/landing/1.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End:: Section-1 -->

            <!-- Start:: Section-2 -->
            <section class="section" id="about">
                <div class="container position-relative">
                    <div class="text-center">
                        <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading text-gradient">ABOUT</span></p>
                        <h3 class="fw-medium mb-2">Innovative solutions for You!</h3>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-15 mb-5 fw-normal">We work for helping you achieve your goals</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card landing-card border shadow-none">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-rounded avatar-xl bg-outline-primary">
                                            <i class="bi bi-lightbulb fs-3"></i>
                                        </span> 
                                    </div>
                                    <h4 class="fw-medium">Smart Services</h4>
                                    <p class="fs-15 text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elitipsum dolor sit, amet consectetur</p>
                                    <a href="javascript:void(0);" class="fw-medium text-primary">Read More<i class="ti ti-arrow-narrow-right ms-2 fs-5 align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card landing-card border shadow-none">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-rounded avatar-xl bg-outline-info">
                                            <i class="bi bi-chat-dots fs-3"></i>
                                        </span> 
                                    </div>
                                    <h4 class="fw-medium">24/7 Customer Support</h4>
                                    <p class="fs-15 text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elitipsum dolor sit, amet consectetur</p>
                                    <a href="javascript:void(0);" class="fw-medium text-info">Read More<i class="ti ti-arrow-narrow-right ms-2 fs-5 al align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card landing-card border shadow-none">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-rounded avatar-xl bg-outline-warning">
                                            <i class="bi bi-people fs-3"></i>
                                        </span> 
                                    </div>
                                    <h4 class="fw-medium">Experienced Staff</h4>
                                    <p class="fs-15 text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elitipsum dolor sit, amet consectetur</p>
                                    <a href="javascript:void(0);" class="fw-medium text-warning">Read More<i class="ti ti-arrow-narrow-right ms-2 fs-5 align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-2 -->

            <!-- Start:: Section-3 -->
            <section class="section section-bg" id="services">
                <div class="container">
                    <div class="text-center">
                        <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading text-gradient">SERVICES</span></p>
                        <h3 class="fw-medium mb-2">Best Services You Get</h3>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-15 mb-5 fw-normal">Nemo enim ipsam voluptatem quia voluptas sit aspernatur</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-primary-transparent border border-primary border-opacity-10">
                                            <i class="bx bx-globe fs-3"></i>
                                        </span>
                                    </div>
                                    <h4 class="fw-medium">Business Audit</h4>
                                    <p class="fs-15 text-muted mb-0">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet dolorem ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-warning-transparent border border-warning border-opacity-10">
                                            <i class="bx bx-dollar fs-3"></i>
                                        </span>
                                    </div>
                                    <h4 class="fw-medium">Marketing</h4>
                                    <p class="fs-15 text-muted mb-0">Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-info-transparent border border-info border-opacity-10">
                                            <i class="bx bx-box fs-3"></i>
                                        </span>
                                    </div>
                                    <h4 class="fw-medium">Trading</h4>
                                    <p class="fs-15 text-muted mb-0">Quasi architecto beatae vitae dicta sunt explicabo. Nemo enim.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-success-transparent border border-success border-opacity-10">
                                            <i class="bx bx-basket fs-3"></i>
                                        </span>
                                    </div>
                                    <h4 class="fw-medium">Ecommerce</h4>
                                    <p class="fs-15 text-muted mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiiss.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-danger-transparent border border-danger border-opacity-10">
                                            <i class="bx bx-wallet fs-3"></i>
                                        </span>
                                    </div>
                                    <h4 class="fw-medium">Financial Plans</h4>
                                    <p class="fs-15 text-muted mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-secondary-transparent border border-secondary border-opacity-10">
                                            <i class="bx bx-envelope fs-3"></i>
                                        </span>
                                    </div>
                                    <h4 class="fw-medium">Email Services</h4>
                                    <p class="fs-15 text-muted mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-teal-transparent border border-teal border-opacity-10">
                                            <i class="bx bx-user-check fs-3"></i>
                                        </span>
                                    </div>
                                    <h4 class="fw-medium">Skilled</h4>
                                    <p class="fs-15 text-muted mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-pink-transparent border border-pink border-opacity-10">
                                            <i class="bx bx-calendar-check fs-3"></i>
                                        </span>
                                    </div>
                                    <h4 class="fw-medium">Planning</h4>
                                    <p class="fs-15 text-muted mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-3 -->

            <!-- Start:: Section-4 -->
            <section class="section" id="expectations">
                <div class="container">
                    <div class="row gx-5 mx-0">
                        <div class="col-xl-5">
                            <div class="home-proving-image">
                                <img src="assets/images/media/landing/2.png" alt="" class="img-fluid rounded">
                            </div>
                            <div class="proving-pattern-1"></div>
                        </div>
                        <div class="col-xl-7 my-auto">
                            <div class="heading-section text-start mb-4">
                                <div class="heading-subtitle fw-medium"><span class="landing-section-heading text-gradient">THE BEST!</span></div>
                                <h2 class="heading-title">Exceeding your Expectations !</h2>
                                <div class="heading-description fs-16">Welcome to Vibro, where we offer a unique and tailored
                                    experience that is sure to exceed your expectations. Choose us and let us show you
                                    what true excellence looks like</div>
                            </div>
                            <div class="row gy-3 mb-0">
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-checkbox-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="fs-15">
                                                We have years of experience in our industry and have built a reputation.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-checkbox-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="fs-15">
                                                Our team is made up of experienced and professional individuals.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-checkbox-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="fs-15">
                                                We understand that every client is unique, and we tailor our services.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-checkbox-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="fs-15">
                                                Our services are designed to be convenient and hassle-free, saving you
                                                time and effort.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-checkbox-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="fs-15">
                                                We provide 24/7 support each day in a week for all 365 days.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-4 -->

            <!-- Start:: Section-5 -->
            <section class="section landing-Features" id="features">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-7 my-auto">
                            <div class="d-flex align-items-center justify-content-center trusted-companies sub-card-companies flex-wrap mb-3 mb-xl-0 gap-4">
                                <div class="trust-img"><img src="assets/images/media/landing/web/1.png" alt="img" class="border-0"></div>
                                <div class="trust-img"><img src="assets/images/media/landing/web/2.png" alt="img" class="border-0"></div>
                                <div class="trust-img"><img src="assets/images/media/landing/web/4.png" alt="img" class="border-0"></div>
                                <div class="trust-img"><img src="assets/images/media/landing/web/5.png" alt="img" class="border-0"></div>
                                <div class="trust-img"><img src="assets/images/media/landing/web/6.png" alt="img" class="border-0"></div>
                                <div class="trust-img"><img src="assets/images/media/landing/web/1.png" alt="img" class="border-0"></div>
                                <div class="trust-img me-0"><img src="assets/images/media/landing/web/5.png" alt="img" class="border-0"></div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="heading-section text-center mb-0">
                                <h2 class="text-fixed-white text-center fw-medium">World Class Features</h2>
                                <div class="fs-16 text-fixed-white text-center op-8">Ullamco ea commodo.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.perspiciatis unde omnis.</div>
                                <div class="mt-4 d-flex align-items-center justify-content-center">
                                    <a href="index.php" class="btn btn-lg btn-warning me-3 mb-sm-0">Get Started Now</a>
                                    <a href="index.php" class="mb-sm-0 text-fixed-white text-decoration-underline link-offset-1">Discover More<i class="fe fe-arrow-right fs-14 align-text-bottom ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-5 -->

            <!-- Start:: Section-6 -->
            <section class="section section-bg" id="workflow">
                <div class="container">
                    <div class="text-center">
                        <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading text-gradient">WORK FLOW</span></p>
                        <h3 class="fw-medium mb-2">Our work flow is Awesome !</h3>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-15 mb-5 fw-normal">Our work flow starts right from the booking of the appointment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="px-3">
                                <div class="card custom-card landing-card mb-5">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <span class="svg-gradient mx-auto svg-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="Finance"><path fill="#b94eed" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;" d="M-432.873 1359.588a.5.5 0 0 0-.227.059l-8.212 4.355.468.885 7.772-4.123 2.746 5.18.883-.469-2.98-5.621a.5.5 0 0 0-.45-.266z" color="#000" transform="translate(456.5 -1353.371)" class="color2b79c2 svgShape"></path><path fill="#b94eed" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;" d="M-436.693 1357.387a.5.5 0 0 0-.346.144l-4.941 4.94.707.709 4.587-4.586 2.403 2.402.707-.707-2.756-2.756a.5.5 0 0 0-.361-.146z" color="#000" transform="translate(456.5 -1353.371)" class="color2b79c2 svgShape"></path><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;" d="M-440.936 1365.371v1h11.436c.563 0 1 .437 1 1v13c0 .563-.437 1-1 1h-19c-.563 0-1-.437-1-1v-10.76h-1v10.76c0 1.1.9 2 2 2h19c1.1 0 2-.9 2-2v-13c0-1.1-.9-2-2-2h-11.436z" color="#000" transform="translate(456.5 -1353.371)" fill="#6a4eed" class="color000000 svgShape"></path><path style="isolation:auto;mix-blend-mode:normal;" d="M-440.5 1367.37h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm0 2h1v1h-1zm0 8h1v1h-1zm0 2h1v1h-1zm-2 0h1v1h-1zm-16-8h1v1h-1zm0 2h1v1h-1zm0 2h1v1h-1zm0 2h1v1h-1zm0 2h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1z" color="#000" transform="translate(456.5 -1353.371)" fill="#6a4eed" class="color000000 svgShape"></path><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;" d="M-434 1371.371a2.506 2.506 0 0 0-2.5 2.5c0 1.376 1.124 2.5 2.5 2.5h6a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-6zm0 1h5.5v3h-5.5c-.84 0-1.5-.66-1.5-1.5s.66-1.5 1.5-1.5z" color="#000" transform="translate(456.5 -1353.371)" fill="#6a4eed" class="color000000 svgShape"></path><path style="isolation:auto;mix-blend-mode:normal;" d="M-434.5 1373.37h1v1h-1z" color="#000" transform="translate(456.5 -1353.371)" fill="#6a4eed" class="color000000 svgShape"></path><path fill="#b94eed" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;" d="M-446.5 1359.37c-3.308 0-6 2.691-6 6 0 3.307 2.692 6 6 6s6-2.693 6-6c0-3.309-2.692-6-6-6zm0 1c2.767 0 5 2.232 5 5 0 2.766-2.233 5-5 5s-5-2.234-5-5c0-2.768 2.233-5 5-5z" color="#000" transform="translate(456.5 -1353.371)" class="color2b79c2 svgShape"></path><path fill="#b94eed" d="M11.21 13.538q0-.19-.066-.35-.066-.16-.216-.299-.144-.139-.383-.256-.233-.118-.566-.228-.443-.122-.799-.282-.349-.164-.599-.383-.244-.219-.377-.505-.127-.287-.127-.661 0-.346.11-.632.117-.286.328-.497.216-.21.521-.345.305-.135.683-.181v-.926h.782v.93q.776.105 1.198.602.427.493.427 1.348h-.97q0-.283-.073-.518-.066-.236-.2-.409-.133-.172-.332-.27-.2-.096-.455-.096-.266 0-.46.071-.195.072-.328.203-.127.126-.194.307-.061.18-.061.4 0 .202.061.366.067.16.216.295.15.135.389.257.244.118.599.231.455.13.804.295.35.16.588.375.239.215.36.497.123.282.123.652 0 .362-.128.653-.128.286-.36.497-.233.21-.566.337-.333.126-.75.168v.808h-.77v-.808q-.35-.037-.677-.156-.327-.118-.582-.34-.25-.224-.4-.56-.15-.342-.15-.818h.977q0 .358.105.594t.277.375q.172.139.383.193.211.055.422.055.294 0 .521-.067.233-.071.388-.198.161-.13.245-.311.083-.185.083-.413z" class="color2b79c2 svgShape"></path></svg></span>
                                        </div>
                                        <h4 class="fw-medium">Emphasize Efficiency</h4>
                                        <div class="mb-0">
                                            <span class="fs-15 text-muted">Our workflow is designed to minimize wasted time,which enables you to complete tasks faster and more efficiently.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="avatar avatar-md avatar-rounded bg-primary-transparent text-primary fw-medium border-0 workflow-bottom-design">01</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="px-3">
                                <div class="text-center mb-5">
                                    <span class="avatar avatar-md avatar-rounded  bg-primary-transparent text-primary fw-medium border-0 workflow-top-design">02</span>
                                </div>
                                <div class="card custom-card landing-card">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <span class="svg-gradient mx-auto svg-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" id="IdeaConcept"><path fill="#b94eed" d="M64 13.481a2 2 0 0 0 2-2V8.5a2 2 0 0 0-4 0v2.981a2 2 0 0 0 2 2zM73.941 15.487a2 2 0 0 0 2.62-1.064l1.161-2.747a2 2 0 0 0-3.685-1.557l-1.161 2.747a2.001 2.001 0 0 0 1.065 2.621zM83.472 21.545a1.99 1.99 0 0 0 1.414-.586l2.108-2.108a2 2 0 1 0-2.828-2.828l-2.108 2.108a2 2 0 0 0 1.414 3.414zM87.531 29.074a2 2 0 0 0 2.62 1.064l2.747-1.161a2 2 0 1 0-1.557-3.685l-2.747 1.161a2.002 2.002 0 0 0-1.063 2.621zM89.538 39.012a2 2 0 0 0 2 2h2.981a2 2 0 0 0 0-4h-2.981a2 2 0 0 0-2 2zM51.439 14.423a2 2 0 1 0 3.684-1.557l-1.16-2.747a2 2 0 1 0-3.685 1.557l1.161 2.747zM43.114 20.959c.391.39.902.585 1.414.585s1.024-.195 1.415-.586a2 2 0 0 0 0-2.829l-2.108-2.108a2 2 0 0 0-2.829 2.829l2.108 2.109zM35.101 28.978l2.748 1.161a2 2 0 1 0 1.556-3.685l-2.748-1.161a2 2 0 1 0-1.556 3.685zM33.481 41.012h2.982a2 2 0 0 0 0-4h-2.982a2 2 0 0 0 0 4zM51.075 55.369a3.886 3.886 0 0 1 1.497 3.063v.965a2 2 0 0 0 2 2H64a2 2 0 0 0 2-2v-12.18c3.492-.894 6.084-4.057 6.084-7.822 0-4.457-3.626-8.083-8.084-8.083s-8.084 3.626-8.084 8.083c0 3.766 2.593 6.929 6.084 7.822v10.18h-5.502a7.863 7.863 0 0 0-2.944-5.168 16.743 16.743 0 0 1-6.41-13.217c0-4.782 2.046-9.357 5.613-12.553 3.617-3.24 8.292-4.729 13.163-4.192 7.858.866 14.255 7.473 14.88 15.368.449 5.66-1.938 11.125-6.385 14.617a7.796 7.796 0 0 0-2.988 6.172v6.728c0 .559-.458 1.013-1.02 1.013h-1.521a2 2 0 0 0-2 2 2.89 2.89 0 0 1-2.887 2.886 2.89 2.89 0 0 1-2.887-2.886 2 2 0 0 0-2-2h-4.541a2 2 0 0 0 0 4h2.837c.859 2.825 3.489 4.886 6.591 4.886 3.109 0 5.74-2.071 6.594-4.905 2.68-.1 4.834-2.293 4.834-4.994v-6.728a3.82 3.82 0 0 1 1.459-3.026 20.835 20.835 0 0 0 7.901-18.079C84 27.383 76.249 19.381 66.358 18.291c-5.932-.655-11.86 1.238-16.27 5.188a20.883 20.883 0 0 0-6.944 15.532c0 6.418 2.891 12.38 7.931 16.358zm8.841-15.973A4.089 4.089 0 0 1 64 35.313c2.252 0 4.084 1.832 4.084 4.083S66.252 43.479 64 43.479s-4.084-1.832-4.084-4.083z" class="color1ac6bd svgShape"></path><path fill="#6a4eed" d="M96.027 94.564a2 2 0 0 0-2 2v5.777L66 116.272V97.087a2 2 0 0 0-4 0v19.173l-27.896-13.984V96.63a2 2 0 0 0-4 0v6.881c0 .04.009.077.012.117.004.072.01.143.022.214.011.064.026.125.043.186.017.062.034.124.057.184.023.061.05.12.079.178a1.842 1.842 0 0 0 .326.477c.043.046.089.089.136.13.049.043.098.086.151.124.056.041.116.077.177.112.035.02.065.046.102.065l31.896 15.989c.017.008.035.011.052.019.096.045.196.079.299.108.037.011.073.026.111.034.14.031.285.05.434.05.149 0 .293-.019.433-.05.037-.008.071-.023.108-.033.104-.029.205-.063.302-.108.016-.007.033-.01.048-.017l32.027-15.919c.037-.018.067-.044.102-.064.062-.036.124-.072.182-.114.053-.038.1-.08.148-.122a1.907 1.907 0 0 0 .373-.439c.034-.055.063-.112.092-.169.029-.058.056-.116.079-.177s.041-.123.058-.186c.016-.061.032-.121.043-.183.012-.072.018-.144.022-.218.002-.04.012-.077.012-.117v-7.017a2.005 2.005 0 0 0-2.003-2.001z" class="color5277a3 svgShape"></path><path fill="#6a4eed" d="m115.301 75.97-14.739-4.841L115.785 61l.011-.009c.014-.009.025-.022.039-.032a2.017 2.017 0 0 0 .439-.432c.11-.147.201-.304.266-.472.003-.008.009-.013.012-.021.017-.045.023-.092.036-.138.02-.07.042-.138.055-.21.012-.065.015-.13.02-.195.005-.064.012-.127.011-.191-.001-.066-.01-.131-.018-.196-.007-.064-.013-.127-.027-.19-.014-.064-.035-.126-.055-.189-.019-.061-.037-.121-.063-.181-.029-.068-.067-.132-.104-.196-.023-.04-.039-.083-.065-.122l-.02-.025c-.043-.063-.095-.12-.146-.178-.037-.042-.07-.088-.11-.126-.043-.042-.094-.077-.141-.115-.056-.045-.109-.093-.169-.131-.039-.025-.083-.043-.124-.066-.076-.041-.151-.083-.23-.114-.009-.003-.016-.009-.025-.012l-25.304-9.436a2 2 0 0 0-1.398 3.748l21.633 8.067-14.426 9.598-13.023-6.473a2 2 0 0 0-1.78 3.582l10.455 5.197-27.53 13.685-27.421-13.746 10.332-5.134a2 2 0 1 0-1.78-3.582l-12.881 6.4-14.361-9.628 21.431-7.965a2 2 0 0 0-1.393-3.749l-25.093 9.326a2 2 0 0 0-.417 3.536l15.172 10.171-14.897 4.914a2.001 2.001 0 0 0-.264 3.691L44.459 95.58a1.995 1.995 0 0 0 1.514.109l18.023-5.92 17.943 5.958a2.002 2.002 0 0 0 1.52-.107l32.107-15.959a1.997 1.997 0 0 0 1.104-1.935 1.994 1.994 0 0 0-1.369-1.756zM45.505 91.632 18.57 78.244l13.376-4.413 26.82 13.445-13.261 4.356zm36.913.039-13.183-4.377L96.182 73.9l13.24 4.349-27.004 13.422z" class="color5277a3 svgShape"></path></svg>
                                            </span>
                                        </div>
                                        <h4 class="fw-medium">Flexibility</h4>
                                        <div class="mb-0">
                                            <span class="fs-15 text-muted">Our workflow is designed to be flexible and adaptable to changing circumstances &amp; quickly respond.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="px-3">
                                <div class="card custom-card landing-card mb-5">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <span class="svg-gradient mx-auto svg-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" id="services1"><path fill="#6a4eed" d="M347.73 266.36c-3.31 0-6-2.69-6-6l0-18.31c0-47.28-38.46-85.74-85.73-85.74-47.28 0-85.74 38.46-85.74 85.74l0 18.31c0 3.31-2.68 6-6 6-3.31 0-6-2.69-6-6l0-18.31c0-53.89 43.85-97.74 97.74-97.74 53.89 0 97.73 43.85 97.73 97.74l0 18.31c0 3.31-2.68 6-6 6zM289.3 354.14c-3.2 0-5.86-2.53-5.99-5.75-.14-3.32 2.43-6.11 5.74-6.25 29.56-1.23 33.76-25.21 33.93-26.23.52-3.26 3.59-5.49 6.84-4.99 3.26.51 5.51 3.53 5.02 6.8-1.79 12.01-13.56 35.09-45.29 36.41-.08 0-.17.01-.25.01z" class="color5a5a5a svgShape"></path><path fill="#6a4eed" d="M268.43 367.69c-15.07 0-26.88-8.59-26.88-19.55 0-10.97 11.81-19.55 26.88-19.55 15.07 0 26.87 8.58 26.87 19.55 0 10.96-11.81 19.55-26.87 19.55zm0-27.1c-8.38 0-14.88 4.06-14.88 7.55 0 3.49 6.5 7.55 14.88 7.55 8.37 0 14.87-4.06 14.87-7.55 0-3.49-6.5-7.55-14.87-7.55zM347.73 322.83l-18.82 0c-3.31 0-6-2.69-6-6l0-56.47c0-3.32 2.69-6 6-6l18.82 0c18.88 0 34.24 15.36 34.24 34.23 0 18.88-15.36 34.24-34.24 34.24zm-12.82-12l12.82 0c12.26 0 22.24-9.98 22.24-22.24 0-12.26-9.98-22.23-22.24-22.23l-12.82 0 0 44.47zM183.09 322.83l-18.82 0c-18.88 0-34.24-15.36-34.24-34.24 0-18.87 15.36-34.23 34.24-34.23l18.82 0c3.31 0 6 2.69 6 6l0 56.47c0 3.32-2.69 6-6 6zm-18.82-56.47c-12.27 0-22.24 9.97-22.24 22.23 0 12.26 9.97 22.24 22.24 22.24l12.82 0 0-44.47-12.82 0 0 0z" class="color5a5a5a svgShape"></path><path fill="#b94eed" d="M256 460.6c-0.82,0 -1.63,-0.17 -2.4,-0.5 -72.15,-31.47 -111.87,-69.94 -132.49,-96.67 -22.66,-29.38 -27.95,-51.26 -28.16,-52.18 -0.11,-0.44 -0.16,-0.9 -0.16,-1.36l0 -191.33c0,-2.48 1.52,-4.7 3.82,-5.6l157.21 -61.15c1.4,-0.55 2.96,-0.55 4.35,0l157.22 61.15c2.3,0.9 3.82,3.12 3.82,5.6l0 191.33c0,0.46 -0.05,0.91 -0.16,1.36 -0.21,0.92 -5.5,22.8 -28.16,52.18 -20.62,26.73 -60.34,65.19 -132.49,96.67 -0.77,0.33 -1.58,0.5 -2.4,0.5zm-151.21 -151.49c0.99,3.55 7,22.79 26.35,47.66 19.53,25.13 57.01,61.22 124.86,91.28 67.85,-30.06 105.33,-66.15 124.86,-91.28 19.33,-24.84 25.34,-44.07 26.35,-47.66l0 -186.45 -151.21 -58.82 -151.21 58.82 0 186.45z" class="colorcced00 svgShape"></path><path fill="#b94eed" d="M256 512c-0.82,0 -1.63,-0.17 -2.4,-0.5 -90.52,-39.49 -140.33,-87.71 -166.17,-121.22 -28.32,-36.71 -34.9,-63.94 -35.17,-65.08 -0.11,-0.45 -0.16,-0.91 -0.16,-1.36l0 -240.86c0,-2.47 1.52,-4.69 3.83,-5.59l197.9 -76.98c1.39,-0.54 2.95,-0.54 4.35,0l197.89 76.98c2.31,0.9 3.83,3.12 3.83,5.59l0 240.86c0,0.45 -0.06,0.91 -0.16,1.36 -0.27,1.14 -6.85,28.37 -35.17,65.08 -25.84,33.51 -75.65,81.73 -166.17,121.22 -0.77,0.33 -1.58,0.5 -2.4,0.5zm-191.9 -188.93c1.13,4.08 8.6,28.68 33.36,60.56 24.76,31.89 72.32,77.75 158.54,115.81 86.67,-38.26 134.31,-84.39 159.06,-116.49 24.47,-31.72 31.73,-55.81 32.84,-59.88l0 -235.98 -191.9 -74.65 -191.9 74.65 0 235.98z" class="colorcced00 svgShape"></path></svg>
                                            </span>
                                        </div>
                                        <h4 class="fw-medium">Quality Control</h4>
                                        <div class="mb-0">
                                            <span class="fs-15 text-muted">Our workflow is designed to ensure quality control,which enables you to produce high-quality services for customers.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="avatar avatar-md avatar-rounded bg-primary-transparent text-primary fw-medium border-0 workflow-bottom-design">03</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-6 -->

            <!-- Start:: Section-7 -->
            <section class="section" id="pricing">
                <div class="container">
                    <div class="text-center">
                        <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading text-gradient">PRICING</span></p>
                        <h3 class="fw-medium mb-2">We offer most affordable Pricing</h3>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-15 mb-5 fw-normal">Our plans are most affordable and are mainly placed by focussing every category.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card custom-card landing-card pricing-card border shadow-none">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <p class="fs-18 fw-medium mb-1">Intro</p>
                                        <p class="text-justify fw-medium mb-1">
                                            <span class="fs-2">$</span><span class="fs-2 me-1">0</span>
                                            <span class="fs-24"><span class="fs-20">/</span> month</span>
                                        </p>
                                        <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <p class="fs-12 mb-2 text-primary">Billed monthly on regular basis!</p>
                                    </div>
                                    <ul class="text-justify list-unstyled pricing-body ps-0">
                                        <li class="mb-3"><span class="me-1"><i class="ri-checkbox-circle-line align-middle fs-16 text-success d-inline-block"></i></span> 2 Free Services
                                        </li>
                                        <li class="mb-3"><span class="me-1"><i class="ri-checkbox-circle-line align-middle fs-16 text-success d-inline-block"></i></span>1 Month Pack
                                        </li>
                                        <li class="mb-3"><span class="me-1"><i class="ri-close-circle-line align-middle fs-16 op-5 d-inline-block"></i></span> No  Agreement</li>
                                        <li class="mb-3"><span class="me-1"><i class="ri-close-circle-line align-middle fs-16 op-5 d-inline-block"></i></span> Money
                                            BackGuarantee</li>
                                        <li class="mb-0"><span class="me-1"><i class="ri-close-circle-line align-middle fs-16 op-5 d-inline-block"></i></span> 24/7 support</li>
                                    </ul>
                                    <div class="text-center border-top-0 pt-4 d-grid">
                                        <button type="button" class="btn btn-lg btn-primary text-fixed-white">
                                            <span class="ms-4 me-4">Get a quote</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card custom-card landing-card pricing-card border shadow-none">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <p class="fs-18 fw-medium mb-1">Basic</p>
                                        <p class="text-justify fw-medium mb-1">
                                            <span class="fs-2">$</span><span class="fs-2 me-1">29</span>
                                            <span class="fs-24"><span class="fs-20">/</span> month</span>
                                        </p>
                                        <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <p class="fs-12 mb-2 text-primary">Billed monthly on regular basis!</p>
                                    </div>
                                    <ul class="text-justify list-unstyled pricing-body ps-0">
                                        <li class="mb-3"><span class="me-1"><i class="ri-checkbox-circle-line align-middle fs-16 text-success d-inline-block"></i></span> 5 Free Services
                                        </li>
                                        <li class="mb-3"><span class="me-1"><i class="ri-checkbox-circle-line align-middle fs-16 text-success d-inline-block"></i></span>3 Months Pack
                                        </li>
                                        <li class="mb-3"><span class="me-1"><i class="ri-checkbox-circle-line align-middle fs-16 text-success d-inline-block"></i></span> 3 Months Agreement</li>
                                        <li class="mb-3"><span class="me-1"><i class="ri-checkbox-circle-line align-middle fs-16 text-success d-inline-block"></i></span> Money
                                            BackGuarantee</li>
                                        <li class="mb-0"><span class="me-1"><i class="ri-close-circle-line align-middle fs-16 op-5 d-inline-block"></i></span> 24/7 support</li>
                                    </ul>
                                    <div class="text-center border-top-0 pt-4 d-grid">
                                        <button type="button" class="btn btn-lg btn-primary text-fixed-white">
                                            <span class="ms-4 me-4">Get a quote</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card pricing-card border custom-card landing-card border-primary shadow-none">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <p class="fs-18 fw-medium mb-1">Popular</p>
                                        <p class="text-justify fw-medium mb-1">
                                            <span class="fs-2">$</span><span class="fs-2 me-1">49</span>
                                            <span class="fs-24"><span class="fs-20">/</span> month</span>
                                        </p>
                                        <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <p class="fs-12 mb-2 text-primary">Billed monthly on regular basis!</p>
                                    </div>
                                    <ul class="text-justify list-unstyled pricing-body ps-0">
                                        <li class="mb-3"><span class="me-1"><i class="ri-checkbox-circle-line align-middle fs-16 text-success d-inline-block"></i></span> 10 Free Services
                                        </li>
                                        <li class="mb-3"><span class="me-1"><i class="ri-checkbox-circle-line align-middle fs-16 text-success d-inline-block"></i></span>6 Months Pack
                                        </li>
                                        <li class="mb-3"><span class="me-1"><i class="ri-checkbox-circle-line align-middle fs-16 text-success d-inline-block"></i></span> 6 Months  Agreement</li>
                                        <li class="mb-3"><span class="me-1"><i class="ri-checkbox-circle-line align-middle fs-16 text-success d-inline-block"></i></span> Money
                                            BackGuarantee</li>
                                        <li class="mb-0"><span class="me-1"><i class="ri-checkbox-circle-line align-middle fs-16 text-success d-inline-block"></i></span> 24/7 support</li>
                                    </ul>
                                    <div class="text-center border-top-0 pt-4 d-grid">
                                        <button type="button" class="btn btn-lg btn-primary text-fixed-white">
                                            <span class="ms-4 me-4">Get a quote</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-7 -->

            <!-- Start:: Section-8 -->
            <section class="section section-bg" id="team">
                <div class="container">
                    <div class="text-center">
                        <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading text-gradient">TEAM</span></p>
                        <h3 class="fw-medium mb-2">The people who make our organization Successful</h3>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-15 mb-5 fw-normal">Our team is made up of real people who are passionate about what they do.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card overlay-card team-card reveal">
                                <img src="assets/images/media/landing/team/1.png" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h5 class="mb-0">Joseph Aniston</h5>
                                <p class="mb-0 fs-15">Director</p>
                                <div class="d-flex justify-content-center mt-3">
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light"><i class="bx bxl-twitter"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light ms-2"><i class="bx bxl-facebook"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light ms-2"><i class="bx bxl-instagram"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light ms-2"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card overlay-card team-card reveal">
                                <img src="assets/images/media/landing/team/2.png" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h5 class="mb-0">Luke Harper</h5>
                                <p class="mb-0 fs-15">Manager</p>
                                <div class="d-flex justify-content-center mt-3">
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light"><i class="bx bxl-twitter"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light ms-2"><i class="bx bxl-facebook"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light ms-2"><i class="bx bxl-instagram"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light ms-2"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card overlay-card team-card reveal">
                                <img src="assets/images/media/landing/team/3.png" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h5 class="mb-0">Melissa Queen</h5>
                                <p class="mb-0 fs-15">Creative Director</p>
                                <div class="d-flex justify-content-center mt-3">
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light"><i class="bx bxl-twitter"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light ms-2"><i class="bx bxl-facebook"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light ms-2"><i class="bx bxl-instagram"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light ms-2"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card overlay-card team-card reveal">
                                <img src="assets/images/media/landing/team/4.png" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h5 class="mb-0">Teressa Smith</h5>
                                <p class="mb-0 fs-15">Board Director</p>
                                <div class="d-flex justify-content-center mt-3">
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light"><i class="bx bxl-twitter"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light ms-2"><i class="bx bxl-facebook"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light ms-2"><i class="bx bxl-instagram"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pil btn-primary-light ms-2"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-8 -->

            <!-- Start:: Section-9 -->
            <section class="section" id="faqs">
                <div class="container text-center">
                    <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading text-gradient">F.A.Q</span></p>
                    <h3 class="fw-medium mb-2">Frequently asked questions ?</h3>
                    <div class="row justify-content-center">
                        <div class="col-xl-7">
                            <p class="text-muted fs-15 mb-5 fw-normal">We have shared some of the most frequently asked questions to help you out.</p>
                        </div>
                    </div>
                    <div class="row text-start">
                        <div class="col-xl-12">
                            <div class="row gy-2">
                                <div class="col-xl-6">
                                    <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate" id="accordionFAQ1">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1One">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsecustomicon1One" aria-expanded="true"
                                                    aria-controls="collapsecustomicon1One">
                                                     Where can I subscribe to your newsletter?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1One" class="accordion-collapse collapse show"
                                                aria-labelledby="headingcustomicon1One"
                                                data-bs-parent="#accordionFAQ1">
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
                                                    Where can in edit my address?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Two" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Two"
                                                data-bs-parent="#accordionFAQ1">
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
                                                    What are your opening hours?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Three" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Three"
                                                data-bs-parent="#accordionFAQ1">
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
                                            <h2 class="accordion-header" id="headingcustomicon1Four">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Four"
                                                    aria-expanded="false" aria-controls="collapsecustomicon1Four">
                                                    Do I have the right to return an item?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Four" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Four"
                                                data-bs-parent="#accordionFAQ1">
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
                                            <h2 class="accordion-header" id="headingcustomicon1Five">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Five"
                                                    aria-expanded="false" aria-controls="collapsecustomicon1Five">
                                                    General Terms & Conditions (GTC)
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Five" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Five"
                                                data-bs-parent="#accordionFAQ1">
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
                                            <h2 class="accordion-header" id="headingcustomicon1Six">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Six"
                                                    aria-expanded="false" aria-controls="collapsecustomicon1Six">
                                                    Do I need to create an account to make an order?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Six" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Six"
                                                data-bs-parent="#accordionFAQ1">
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
                                <div class="col-xl-6">
                                    <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate" id="accordionFAQ2">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon2Five">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Five"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2Five">
                                                    General Terms & Conditions (GTC)
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2Five" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2Five"
                                                data-bs-parent="#accordionFAQ2">
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
                                            <h2 class="accordion-header" id="headingcustomicon2Six">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Six"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2Six">
                                                    Do I need to create an account to make an order?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2Six" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2Six"
                                                data-bs-parent="#accordionFAQ2">
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
                                            <h2 class="accordion-header" id="headingcustomicon2One">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsecustomicon2One" aria-expanded="true"
                                                    aria-controls="collapsecustomicon2One">
                                                     Where can I subscribe to your newsletter?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2One" class="accordion-collapse collapse "
                                                aria-labelledby="headingcustomicon2One"
                                                data-bs-parent="#accordionFAQ2">
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
                                            <h2 class="accordion-header" id="headingcustomicon2Two">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Two"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2Two">
                                                    Where can in edit my address?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2Two" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2Two"
                                                data-bs-parent="#accordionFAQ2">
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
                                            <h2 class="accordion-header" id="headingcustomicon2Three">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Three"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2Three">
                                                    What are your opening hours?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2Three" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2Three"
                                                data-bs-parent="#accordionFAQ2">
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
                                            <h2 class="accordion-header" id="headingcustomicon2Four">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Four"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2Four">
                                                    Do I have the right to return an item?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2Four" class="accordion-collapse collapse show"
                                                aria-labelledby="headingcustomicon2Four"
                                                data-bs-parent="#accordionFAQ2">
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
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-9 -->

            <!-- Start:: Section-10 -->
            <section class="section landing-Features" id="testimonials">
                <div class="container reviews-container">
                    <div class="row gy-3">
                        <div class="col-xl-4">
                            <div class="text-start mb-0 mt-4 heading-section">
                                <p class="fs-12 fw-medium text-success mb-1"><span class="fs-14 text-fixed-white">Testimonials</span></p>
                                <div class="fs-2 text-fixed-white">Have a look at what people say About Us</div>
                                <div class="fs-15 text-fixed-white op-8">We care about our customer satisfaction and experience.</div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="swiper pagination-dynamic testimonialSwiperService">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="avatar rounded-circle me-2">
                                                        <img src="assets/images/faces/3.jpg" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 fw-medium fs-14">Brenda Hans</p>
                                                        <p class="mb-0 fs-11 fw-normal op-8">brendahans@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="op-8">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="fw-medium fs-11 text-fixed-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read More</a></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                    <div class="d-flex align-items-center">
                                                        <span class="op-8">Rating : </span>
                                                        <span class="fs-warning d-block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="float-end fs-12 fw-medium op-8 text-end">
                                                        <span>12 days ago</span>
                                                        <span class="d-block fs-12 text-green"><i>Brenda Hans</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="avatar rounded-circle me-2">
                                                        <img src="assets/images/faces/9.jpg" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 fw-medium fs-14">Json Taylor</p>
                                                        <p class="mb-0 fs-11 fw-normal op-8">jsontaylor@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="op-8">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="fw-medium fs-11 text-fixed-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read More</a></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                    <div class="d-flex align-items-center">
                                                        <span class="op-8">Rating : </span>
                                                        <span class="fs-warning d-block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="float-end fs-12 fw-medium op-8 text-end">
                                                        <span>9 days ago</span>
                                                        <span class="d-block fs-12 text-green"><i>Json Taylor</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="avatar rounded-circle me-2">
                                                        <img src="assets/images/faces/8.jpg" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 fw-medium fs-14">Amanda Nanes</p>
                                                        <p class="mb-0 fs-11 fw-normal op-8">amandananes212@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="op-8">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="fw-medium fs-11 text-fixed-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read More</a></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                    <div class="d-flex align-items-center">
                                                        <span class="op-8">Rating : </span>
                                                        <span class="fs-warning d-block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="float-end fs-12 fw-medium op-8 text-end">
                                                        <span>6 days ago</span>
                                                        <span class="d-block fs-12 text-green"><i>Amanda Nanes</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="avatar rounded-circle me-2">
                                                        <img src="assets/images/faces/10.jpg" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 fw-medium fs-14">Lucas Tope</p>
                                                        <p class="mb-0 fs-11 fw-normal op-8">lucastope1999@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="op-8">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="fw-medium fs-11 text-fixed-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read More</a></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                    <div class="d-flex align-items-center">
                                                        <span class="op-8">Rating : </span>
                                                        <span class="fs-warning d-block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="float-end fs-12 fw-medium op-8 text-end">
                                                        <span>10 days ago</span>
                                                        <span class="d-block fs-12 text-green"><i>Lucas Tope</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="avatar rounded-circle me-2">
                                                        <img src="assets/images/faces/1.jpg" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 fw-medium fs-14">Jenny kingston</p>
                                                        <p class="mb-0 fs-11 fw-normal op-8">jennykingston345@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="op-8">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="fw-medium fs-11 text-fixed-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read More</a></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                    <div class="d-flex align-items-center">
                                                        <span class="op-8">Rating : </span>
                                                        <span class="fs-warning d-block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="float-end fs-12 fw-medium op-8 text-end">
                                                        <span>16 days ago</span>
                                                        <span class="d-block fs-12 text-green"><i>Jenny Kingston</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="avatar rounded-circle me-2">
                                                        <img src="assets/images/faces/5.jpg" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 fw-medium fs-14">Alex Carey</p>
                                                        <p class="mb-0 fs-11 fw-normal op-8">alexcarey21@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="op-8">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="fw-medium fs-11 text-fixed-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read More</a></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                    <div class="d-flex align-items-center">
                                                        <span class="op-8">Rating : </span>
                                                        <span class="fs-warning d-block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="float-end fs-12 fw-medium op-8 text-end">
                                                        <span>1 month ago</span>
                                                        <span class="d-block fs-12 text-green"><i>Alex Carey</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-10 -->

            <!-- Start:: Section-11 -->
            <section class="section" id="contact">
                <div class="container text-center">
                    <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading">CONTACT US</span></p>
                    <h3 class="fw-medium mb-2">Have any questions ? We would love to hear from you.</h3>
                    <div class="row justify-content-center">
                        <div class="col-xl-9">
                            <p class="text-muted fs-15 mb-5 fw-normal">You can contact us anytime regarding any queries or deals,dont hesitate to clear your doubts before trying our product.</p>
                        </div>
                    </div>
                    <div class="row text-start">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="card custom-card border shadow-none overflow-hidden">
                                <div class="card-body p-0">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d30444.274596168965!2d78.54114692513858!3d17.48198883339408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d17.4886524!2d78.5495041!4m5!1s0x3bcb9c7ec139a15d%3A0x326d1c90786b2ab6!2sspruko%20technologies!3m2!1d17.474805099999998!2d78.570258!5e0!3m2!1sen!2sin!4v1670225507254!5m2!1sen!2sin"  height="380" style="border:0;width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="card custom-card  overflow-hidden section-bg border overflow-hidden shadow-none">
                                <div class="card-body">
                                    <div class="row gy-3 mt-2 px-3">
                                        <div class="col-xl-6">
                                            <div class="row gy-3">
                                                <div class="col-xl-12">
                                                    <label for="contact-address-name" class="form-label ">Full Name :</label>
                                                    <input type="text" class="form-control " id="contact-address-name" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="contact-address-phone" class="form-label ">Phone No :</label>
                                                    <input type="text" class="form-control " id="contact-address-phone" placeholder="Enter Phone No">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="contact-address-address" class="form-label ">Address :</label>
                                                    <textarea class="form-control " id="contact-address-address" rows="1"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="contact-address-message" class="form-label ">Message :</label>
                                            <textarea class="form-control " id="contact-address-message" rows="8"></textarea>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="d-flex  mt-4 ">
                                                <div class="">
                                                    <div class="btn-list">
                                                        <button class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <button class="btn btn-primary  btn-wave">Send Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-11 -->

            <!-- Start:: Section-12 -->
            <section class="section landing-footer text-fixed-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12 mb-md-0 mb-3">
                            <div class="px-4">
                                <p class="fw-medium mb-3"><a href="index.php"><img src="assets/images/brand-logos/desktop-dark.png" alt=""></a></p>
                                <p class="mb-2 op-6 fw-normal">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit et magnam, fuga est mollitia eius, quo illum illo inventore optio aut quas omnis rem. Dolores accusantium aspernatur minus ea incidunt.
                                </p>
                                <p class="mb-0 op-6 fw-normal">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem ea esse ad</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium mb-3 text-fixed-white">PAGES</h6>
                                <ul class="list-unstyled op-6 fw-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Email</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Projects</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Contacts</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Portfolio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium text-fixed-white">INFO</h6>
                                <ul class="list-unstyled op-6 fw-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Our Team</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Contact US</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">About</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Services</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Blog</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium text-fixed-white">CONTACT</h6>
                                <ul class="list-unstyled fw-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-home-4-line me-1 align-middle"></i> New York, NY 10012, US</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-mail-line me-1 align-middle"></i> info@fmail.com</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-phone-line me-1 align-middle"></i> +(555)-1920 1831</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-printer-line me-1 align-middle"></i> +(123) 1293 123</a>
                                    </li>
                                    <li class="mt-3">
                                        <p class="mb-2 fw-medium op-8">FOLLOW US ON :</p>
                                        <div class="mb-0">
                                            <div class="btn-list">
                                                <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-facebook-line fw-bold"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-twitter-line fw-bold"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                    <i class="ri-instagram-line fw-bold"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                    <i class="ri-github-line fw-bold"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                    <i class="ri-youtube-line fw-bold"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-12 -->

            <div class="text-center landing-main-footer py-3">
                <span class="text-muted fs-15"> Copyright © <span id="year"></span> <a
                    href="javascript:void(0);" class="text-primary fw-medium"><u>UDON</u></a>.
                Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);" class="text-primary fw-medium"><u>
                Spruko</u>
                </a> All
                rights
                reserved
                </span>
            </div>

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