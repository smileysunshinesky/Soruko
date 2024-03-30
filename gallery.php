<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> UDON - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin dashboard,admin template,admin panel,bootstrap admin dashboard,html template,sales dashboard,dashboard,template dashboard,admin,html and css template,admin dashboard bootstrap,personal dashboard,crypto dashboard,stocks dashboard,admin panel template">

    <!-- Favicon -->
    <link rel="icon" href="assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Choices JS -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="assets/js/main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style Css -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="assets/libs/node-waves/waves.min.css" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="assets/libs/glightbox/css/glightbox.min.css">

</head>

<body>

    <!-- Start::Switcher -->
    <?php include 'components/switcher.php'; ?>
    <!-- End::Switcher -->

    <!-- Start::Loader -->
    <?php include 'components/loader.php'; ?>
    <!-- Start::Loader -->

    <div class="page">
        <!-- Start::app-header -->
        <?php include 'components/header.php'; ?>
        <!-- End::app-header -->
        <!-- Start::app-sidebar -->
        <?php include 'components/aside.php'; ?>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div
                    class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Links</h1>
                    </div>
                    <!-- <div class="btn-list">
                        <button class="btn btn-primary-light btn-wave me-2">
                            <i class="bx bx-crown align-middle"></i> Plan Upgrade
                        </button>
                        <button class="btn btn-secondary-light btn-wave me-0">
                            <i class="ri-upload-cloud-line align-middle"></i> Export Report
                        </button>
                    </div> -->
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <a href="assets/images/media/media-40.jpg" class="glightbox card" data-gallery="gallery1">
                            <img src="assets/images/media/media-40.jpg" alt="image">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <a href="assets/images/media/media-41.jpg" class="glightbox card" data-gallery="gallery1">
                            <img src="assets/images/media/media-41.jpg" alt="image">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <a href="assets/images/media/media-42.jpg" class="glightbox card" data-gallery="gallery1">
                            <img src="assets/images/media/media-42.jpg" alt="image">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <a href="assets/images/media/media-43.jpg" class="glightbox card" data-gallery="gallery1">
                            <img src="assets/images/media/media-43.jpg" alt="image">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <a href="assets/images/media/media-44.jpg" class="glightbox card" data-gallery="gallery1">
                            <img src="assets/images/media/media-44.jpg" alt="image">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <a href="assets/images/media/media-45.jpg" class="glightbox card" data-gallery="gallery1">
                            <img src="assets/images/media/media-45.jpg" alt="image">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <a href="assets/images/media/media-46.jpg" class="glightbox card" data-gallery="gallery1">
                            <img src="assets/images/media/media-46.jpg" alt="image">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <a href="assets/images/media/media-60.jpg" class="glightbox card" data-gallery="gallery1">
                            <img src="assets/images/media/media-60.jpg" alt="image">
                        </a>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

        <!-- Footer Start -->
        <?php include 'components/footer.php'; ?>
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



    <!-- Custom-Switcher JS -->
    <script src="assets/js/custom-switcher.min.js"></script>

    <!-- Gallery JS -->
    <script src="assets/libs/glightbox/js/glightbox.min.js"></script>
    <script src="assets/js/gallery.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>