<?php
$pageTitle = "Home";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>
    <?php include 'components/externalcss.php'; ?>


    <!-- Choices JS -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="assets/js/main.js"></script>


    <!-- Node Waves Css -->
    <link href="assets/libs/node-waves/waves.min.css" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
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

                <!-- Start::page-header -->

                <div
                    class="d-flex align-items-center justify-content-between my-4 page-header-breadcrumb flex-wrap gap-2">
                    <div>
                        <p class="fw-medium fs-20 mb-0">Welcome, Mr. Stark</p>
                        <p class="fs-13 text-muted mb-0">Let's check your today's stats!</p>
                    </div>
                    <div class="btn-list">
                        <button class="btn btn-primary-light btn-wave">
                            <i class='bx bx-crown align-middle'></i> Plan Upgrade
                        </button>
                        <button class="btn btn-secondary-light btn-wave">
                            <i class="ri-upload-cloud-line align-middle"></i> Export Report
                        </button>
                    </div>
                </div>

                <!-- End::page-header -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="mb-2 p-3 pb-0">
                                            <div class="flex-fill fs-15">Total Sales</div>
                                        </div>
                                        <div class="d-flex align-items-center ps-3">
                                            <div class="flex-fill">
                                                <div class="fs-25 fw-normal mb-2">$170k+</div>
                                                <p class="mb-0">
                                                    <i class="ri-arrow-up-line text-primary fs-15 align-middle"></i>
                                                    <span class="text-primary fs-12"> 26.35% last month</span>
                                                </p>
                                            </div>
                                            <div id="sales-card" class="crm-card-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="mb-2 p-3 pb-0">
                                            <div class="flex-fill fs-15">Revenue Generated</div>
                                        </div>
                                        <div class="d-flex align-items-center ps-3">
                                            <div class="flex-fill">
                                                <div class="fs-25 fw-normal mb-2">$115k</div>
                                                <p class="mb-0">
                                                    <i class="ri-arrow-down-line text-danger fs-15 align-middle"></i>
                                                    <span class="text-danger fs-12"> 11.35% last month</span>
                                                </p>
                                            </div>
                                            <div id="revenue-card" class="crm-card-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="mb-2 p-3 pb-0">
                                            <div class="flex-fill fs-15">New Customers</div>
                                        </div>
                                        <div class="d-flex align-items-center ps-3">
                                            <div class="flex-fill">
                                                <div class="fs-25 fw-normal mb-2">1500+</div>
                                                <p class="mb-0">
                                                    <i class="ri-arrow-up-line text-secondary fs-15 align-middle"></i>
                                                    <span class="text-secondary fs-12"> 26.35% last month</span>
                                                </p>
                                            </div>
                                            <div id="customers-card" class="crm-card-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="mb-2 p-3 pb-0">
                                            <div class="flex-fill fs-15">Orders Received</div>
                                        </div>
                                        <div class="d-flex align-items-center ps-3">
                                            <div class="flex-fill">
                                                <div class="fs-25 fw-normal mb-2">30k+</div>
                                                <p class="mb-0">
                                                    <i class="ri-arrow-up-line text-info fs-15 align-middle"></i>
                                                    <span class="text-info fs-12"> 16.35% last month</span>
                                                </p>
                                            </div>
                                            <div id="orders-card" class="crm-card-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-lg-12 col-xxl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Visitors By Country</div>
                                <div class="dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ri-more-fill fs-18 text-muted"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something Else</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled visitors-country">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="d-block fs-14">U.S.A</span>
                                                    <span class="d-block fs-12 text-muted">559/896</span>
                                                </div>
                                                <div class="progress progress-animate progress-xs" role="progressbar"
                                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped bg-primary"
                                                        style="width: 85%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="d-block fs-14">Germany</span>
                                                    <span class="d-block fs-12 text-muted">358/786</span>
                                                </div>
                                                <div class="progress progress-animate progress-xs" role="progressbar"
                                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped bg-secondary"
                                                        style="width: 80%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="d-block fs-14">Russia</span>
                                                    <span class="d-block fs-12 text-muted">296/786</span>
                                                </div>
                                                <div class="progress progress-animate progress-xs" role="progressbar"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped bg-warning"
                                                        style="width: 75%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="d-block fs-14">Brazil</span>
                                                    <span class="d-block fs-12 text-muted">185/786</span>
                                                </div>
                                                <div class="progress progress-animate progress-xs" role="progressbar"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped bg-info"
                                                        style="width: 70%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="d-block fs-14">France</span>
                                                    <span class="d-block fs-12 text-muted">095/786</span>
                                                </div>
                                                <div class="progress progress-animate progress-xs" role="progressbar"
                                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped bg-danger"
                                                        style="width: 65%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="d-block fs-14">China</span>
                                                    <span class="d-block fs-12 text-muted">068/786</span>
                                                </div>
                                                <div class="progress progress-animate progress-xs" role="progressbar"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        style="width: 60%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <div class="text-center">
                                    <a href="javascript:void(0);" class="text-secondary">Full Details <i
                                            class="ri-share-box-line align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xxl-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Earning Reports
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                    <label class="btn btn-outline-light" for="btnradio1">Week</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                    <label class="btn btn-outline-light" for="btnradio2">Month</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                    <label class="btn btn-outline-light" for="btnradio3">Year</label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="earning-reports"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12 col-xxl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Visitors</div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Sort By <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0 pt-2">
                                <div id="visitors" class="py-3 my-2"></div>
                                <div class="row border-top border-block-start-dashed">
                                    <div class="col border-end border-inline-end-dashed">
                                        <div class="text-center p-3">
                                            <span class="fs-14 visit-gender male">Male</span>
                                            <div class="mt-1">
                                                <span class="fs-18">1,654</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col border-end border-inline-end-dashed">
                                        <div class="text-center p-3">
                                            <span class="fs-14 visit-gender female">Female</span>
                                            <div class="mt-1">
                                                <span class="fs-18">1,234</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-xxl-8">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Recent Orders</div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-primary-light"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Sort By <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">S.No</th>
                                                <th class="crm-table-th1">Customer</th>
                                                <th class="crm-table-th2">Order ID</th>
                                                <th class="crm-table-th2">Date</th>
                                                <th class="crm-table-th2">Price</th>
                                                <th class="crm-table-th2">Status</th>
                                                <th class="crm-table-th2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="assets/images/faces/15.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-14">Christopher</h6>
                                                            <p class="mb-0 text-muted">Christopher@mailer.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>#011023-0N3</td>
                                                <td>11 Oct, 2023</td>
                                                <td>$569</td>
                                                <td>
                                                    <span
                                                        class="badge bg-success-transparent ps-3 fs-11 order-status complete">
                                                        Completed
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-primary-light btn-wave me-3"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Edit"><i class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-secondary-light btn-wave"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Download"><i
                                                                class="ri-download-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="assets/images/faces/11.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-14">William</h6>
                                                            <p class="mb-0 text-muted">William@mailer.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>#023023-0D6</td>
                                                <td>05 Oct, 2023</td>
                                                <td>$108</td>
                                                <td>
                                                    <span
                                                        class="badge bg-danger-transparent ps-3 fs-11 order-status cancel">
                                                        Cancelled
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-primary-light btn-wave me-3"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Edit"><i class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-secondary-light btn-wave"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Download"><i
                                                                class="ri-download-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="assets/images/faces/5.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-14">Isabella</h6>
                                                            <p class="mb-0 text-muted">Isabella@mailer.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>#019023-0S2</td>
                                                <td>28 Sep, 2023</td>
                                                <td>$786</td>
                                                <td>
                                                    <span
                                                        class="badge bg-warning-transparent ps-3 fs-11 order-status pending">
                                                        Pending
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-primary-light btn-wave me-3"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Edit"><i class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-secondary-light btn-wave"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Download"><i
                                                                class="ri-download-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="assets/images/faces/10.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-14">Richard</h6>
                                                            <p class="mb-0 text-muted">Richard@mailer.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>#029023-0K5</td>
                                                <td>13 Sep, 2023</td>
                                                <td>$1,438</td>
                                                <td>
                                                    <span
                                                        class="badge bg-success-transparent ps-3 fs-11 order-status complete">
                                                        Completed
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-primary-light btn-wave me-3"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Edit"><i class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-secondary-light btn-wave"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Download"><i
                                                                class="ri-download-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="assets/images/faces/11.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-14">Michael</h6>
                                                            <p class="mb-0 text-muted">Michael@mailer.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>#082023-0R6</td>
                                                <td>29 Aug, 2023</td>
                                                <td>$987</td>
                                                <td>
                                                    <span
                                                        class="badge bg-danger-transparent ps-3 fs-11 order-status cancel">
                                                        Cancelled
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-primary-light btn-wave me-3"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Edit"><i class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-secondary-light btn-wave"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Download"><i
                                                                class="ri-download-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="assets/images/faces/8.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-14">Scarlett</h6>
                                                            <p class="mb-0 text-muted">Scarlett@mailer.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>#091223-0Z7</td>
                                                <td>02 Aug, 2023</td>
                                                <td>$1,159</td>
                                                <td>
                                                    <span
                                                        class="badge bg-warning-transparent ps-3 fs-11 order-status pending">
                                                        Pending
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-primary-light btn-wave me-3"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Edit"><i class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-secondary-light btn-wave"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Download"><i
                                                                class="ri-download-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center border-bottom-0">7</td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="assets/images/faces/7.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fs-14">Olivia</h6>
                                                            <p class="mb-0 text-muted">Olivia@mailer.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">#045023-0L2</td>
                                                <td class="border-bottom-0">28 Jul, 2023</td>
                                                <td class="border-bottom-0">$999</td>
                                                <td class="border-bottom-0">
                                                    <span
                                                        class="badge bg-success-transparent ps-3 fs-11 order-status complete">
                                                        Completed
                                                    </span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-primary-light btn-wave me-3"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Edit"><i class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-secondary-light btn-wave"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Download"><i
                                                                class="ri-download-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12 col-xxl-4">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Customers Activity
                                </div>
                            </div>
                            <div class="card-body p-0 crm-card-chart">
                                <div id="customers-activity" class="px-3"></div>
                                <div class="row border-bottom pb-3">
                                    <div class="col ps-3 p-0">
                                        <div class="text-center">
                                            <span class="fs-18 customer-count new">1586</span>
                                            <div class="fs-14">New Customers</div>
                                        </div>
                                    </div>
                                    <div class="col pe-3 p-0">
                                        <div class="text-center">
                                            <span class="fs-18 customer-count return">486</span>
                                            <div class="fs-14">Return Customers</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md online avatar-rounded me-2">
                                                        <img src="assets/images/faces/12.jpg" alt="img">
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fs-14">Charlette</span>
                                                        <div class="fs-12 text-muted">New Account Created</div>
                                                    </div>
                                                    <div>
                                                        <span>5 mins ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md online avatar-rounded me-2">
                                                        <img src="assets/images/faces/14.jpg" alt="img">
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fs-14">Nicholas James</span>
                                                        <div class="fs-12 text-muted">Upgraded to Premium</div>
                                                    </div>
                                                    <div>
                                                        <span>15 min ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md avatar-rounded me-2">
                                                        <img src="assets/images/faces/16.jpg" alt="img">
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fs-14">Gabe Lackman</span>
                                                        <div class="fs-12 text-muted">New Device LoggedIn</div>
                                                    </div>
                                                    <div>
                                                        <span>31 min ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md online avatar-rounded me-2">
                                                        <img src="assets/images/faces/9.jpg" alt="img">
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="fs-14">Manuel Labor</span>
                                                        <div class="fs-12 text-muted">New Account Created</div>
                                                    </div>
                                                    <div>
                                                        <span>1 hour ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-center">
                                    <a href="javascript:void(0);">
                                        <span class="text-secondary">View All <i
                                                class="ri-share-box-line align-middle"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-3 -->


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
    <?php include 'components/scrolltotop.php'; ?>
    <!-- Scroll To Top -->

    <?php include 'components/externaljs.php'; ?>

</body>

</html>