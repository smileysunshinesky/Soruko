<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>
    <?php include 'components/externalcss.php'; ?>

</head>

<body>

    <?php include 'components/switcher.php'; ?>

    <!-- Loader -->
    <div id="loader">
        <img src="assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
        <?php include 'components/header.php'; ?>
        <?php include 'components/aside.php'; ?>

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div
                    class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Calendar</h1>
                    </div>
                    <!-- <div>
                        <button class="btn btn-primary-light btn-wave me-2 waves-effect waves-light">
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
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">All Events</div>
                                <a aria-label="anchor" href="javascript:void(0)"
                                    class="btn btn-sm btn-info bg-white text-default border btn-wave"
                                    data-bs-toggle="modal" data-bs-target="#add-event">
                                    <i class="ri-add-line align-middle me-1 fw-medium"></i>Create New Event
                                </a>
                            </div>
                            <div class="card-body p-0">
                                <div id="external-events"
                                    class="border-bottom p-3 d-flex align-items-center justify-content-between flex-wrap">
                                    <div
                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary-transparent">
                                        <div class="fc-event-main text-primary">Calendar Events</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-secondary-transparent"
                                        data-class="bg-secondary-transparent">
                                        <div class="fc-event-main text-secondary">Birthday Events</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-success-transparent"
                                        data-class="bg-success-transparent text-success">
                                        <div class="fc-event-main text-success">Holiday Calendar</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-info-transparent"
                                        data-class="bg-info-transparent text-info">
                                        <div class="fc-event-main text-info">Office Events</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-warning-transparent"
                                        data-class="bg-warning">
                                        <div class="fc-event-main text-warning">Other Events</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-danger-transparent"
                                        data-class="bg-danger">
                                        <div class="fc-event-main text-danger">Festival Events</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-teal-transparent"
                                        data-class="bg-danger">
                                        <div class="fc-event-main text-teal">Timeline Events</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Full Calendar</div>
                            </div>
                            <div class="card-body">
                                <div id='calendar2'></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="p-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="fw-medium">
                                            Activity :
                                        </h6>
                                        <button class="btn btn-primary-light btn-sm btn-wave">View All</button>
                                    </div>
                                </div>
                                <div class="p-3 border-bottom" id="full-calendar-activity">
                                    <ul class="list-unstyled mb-0 fullcalendar-events-activity">
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <p class="mb-1 fw-medium">
                                                    Monday, Jan 1,2023
                                                </p>
                                                <span class="badge bg-light text-default mb-1">12:00PM - 1:00PM</span>
                                            </div>
                                            <p class="mb-0 text-muted fs-12">
                                                Meeting with a client about new project requirement.
                                            </p>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <p class="mb-1 fw-medium">
                                                    Thursday, Dec 29,2022
                                                </p>
                                                <span class="badge bg-success mb-1">Completed</span>
                                            </div>
                                            <p class="mb-0 text-muted fs-12">
                                                Birthday party of niha suka
                                            </p>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <p class="mb-1 fw-medium">
                                                    Wednesday, Jan 3,2023
                                                </p>
                                                <span class="badge bg-warning-transparent mb-1">Reminder</span>
                                            </div>
                                            <p class="mb-0 text-muted fs-12">
                                                WOrk taget for new project is completing
                                            </p>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <p class="mb-1 fw-medium">
                                                    Friday, Jan 20,2023
                                                </p>
                                                <span class="badge bg-light text-default mb-1">06:00PM - 09:00PM</span>
                                            </div>
                                            <p class="mb-0 text-muted fs-12">
                                                Watch new movie with family
                                            </p>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <p class="mb-1 fw-medium">
                                                    Saturday, Jan 07,2023
                                                </p>
                                                <span class="badge bg-danger-transparent mb-1">Due Date</span>
                                            </div>
                                            <p class="mb-0 text-muted fs-12">
                                                Last day to pay the electricity bill and water bill.need to check the
                                                bank details.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-3">
                                    <img src="assets/images/media/media-81.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start::add task modal -->
                <div class="modal fade" id="add-event" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">Add Event</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-4">
                                <div class="row gy-2">
                                    <div class="col-xl-2">
                                        <label for="task-id" class="form-label">Color</label>
                                        <input type="color" class="form-control form-control-color border-0 mt-1" id="task-id" value="#136ad0" title="Choose your color">
                                    </div>
                                    <div class="col-xl-10">
                                        <label for="task-name" class="form-label">Event Name</label>
                                        <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Add Event</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::add task modal -->

            </div>
        </div>
        <!-- End::app-content -->

        <?php include 'components/footer.php'; ?>

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


    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>


    <!-- Custom-Switcher JS -->
    <script src="assets/js/custom-switcher.min.js"></script>

    <!-- Moment JS -->
    <script src="assets/libs/moment/moment.js"></script>

    <!-- Fullcalendar JS -->
    <script src="assets/libs/fullcalendar/index.global.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>

</body>

</html>