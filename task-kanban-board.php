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


    <link rel="stylesheet" href="assets/libs/filepond/filepond.min.css">
    <link rel="stylesheet" href="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">

    <link rel="stylesheet" href="assets/libs/dragula/dragula.min.css">

</head>

<body>

    <!-- Start Switcher -->
    <?php include 'components/switcher.php'; ?>
    <!-- End Switcher -->


    <!-- Loader -->
    <?php include 'components/loader.php'; ?>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        <?php include 'components/header.php'; ?>
        <!-- /app-header -->
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
                        <h1 class="page-title fw-medium fs-18 mb-2">Kanban Board</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Task</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kanban Board</li>
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
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <div class="row kanban-board">
                                        <div class="col-xl-5">
                                            <button class="btn btn-primary me-2" data-bs-toggle="modal"
                                                data-bs-target="#add-board"><i
                                                    class="ri-add-line me-1 fw-medium align-middle"></i>New
                                                Board</button>
                                        </div>
                                        <div class="col-xl-7 mt-2 my-xxl-0">
                                            <select class="form-control kanban-sortby" data-trigger
                                                name="choices-single-default" id="choices-single-default">
                                                <option value="">Sort By</option>
                                                <option value="Newest">Newest</option>
                                                <option value="Date Added">Date Added</option>
                                                <option value="Type">Type</option>
                                                <option value="A - Z">A - Z</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-rounded">
                                            <img src="assets/images/faces/2.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img src="assets/images/faces/8.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img src="assets/images/faces/2.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img src="assets/images/faces/10.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img src="assets/images/faces/4.jpg" alt="img">
                                        </span>
                                        <span class="avatar avatar-rounded">
                                            <img src="assets/images/faces/13.jpg" alt="img">
                                        </span>
                                        <a class="avatar bg-primary avatar-rounded text-fixed-white"
                                            href="javascript:void(0);">
                                            +8
                                        </a>
                                    </div>
                                    <div class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <button class="btn btn-light" type="submit">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start::row-2 -->
                <div class="UDON-kanban-board">
                    <div class="kanban-tasks-type new">
                        <div class="pe-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="d-block fw-medium fs-15">NEW - 04</span>
                                <div>
                                    <a aria-label="anchor" href="javascript:void(0)"
                                        class="btn btn-sm bg-white text-default border btn-wave" data-bs-toggle="modal"
                                        data-bs-target="#add-task">
                                        <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="kanban-tasks" id="new-tasks">
                            <div id="new-tasks-draggable" data-view-btn="new-tasks">
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3 kanban-board-head">
                                            <div class="d-flex text-muted justify-content-between mb-1 fs-12 fw-medium">
                                                <div><i
                                                        class="ri-time-line me-1 align-middle d-inline-block"></i>Created
                                                    - 28 May</div>
                                                <div>2 days left</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="task-badges"><span
                                                        class="badge bg-white text-default border">#SPK - 11</span><span
                                                        class="ms-1 badge bg-outline-primary">UI/UX</span></div>
                                                <div class="dropdown">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kanban-content mt-2">
                                                <h6 class="fw-medium mb-1 fs-15">New Dashboard design.</h6>
                                                <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit, Nulla soluta consectetur sit amet elit
                                                    dolor sit amet.</div>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-primary">
                                                        <span class="me-1"><i
                                                                class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">12</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-muted">
                                                        <span class="me-1"><i
                                                                class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">02</span>
                                                    </a>
                                                </div>
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/11.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/12.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/7.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/8.jpg" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3 kanban-board-head">
                                            <div class="d-flex text-muted justify-content-between mb-1 fs-12 fw-medium">
                                                <div><i
                                                        class="ri-time-line me-1 align-middle d-inline-block"></i>Created
                                                    - 30 May</div>
                                                <div>2 days left</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="task-badges"><span
                                                        class="badge bg-white text-default border">#SPK - 05</span><span
                                                        class="ms-1 badge bg-outline-secondary">Marketing</span><span
                                                        class="ms-1 badge bg-outline-warning">Finance</span></div>
                                                <div class="dropdown">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kanban-content mt-2">
                                                <h6 class="fw-medium mb-1 fs-15">Marketing next projects.</h6>
                                                <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Nulla soluta </div>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-primary">
                                                        <span class="me-1"><i
                                                                class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">40</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-muted">
                                                        <span class="me-1"><i
                                                                class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">08</span>
                                                    </a>
                                                </div>
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/13.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/6.jpg" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3 kanban-board-head">
                                            <div class="d-flex text-muted justify-content-between mb-1 fs-12 fw-medium">
                                                <div><i
                                                        class="ri-time-line me-1 align-middle d-inline-block"></i>Created
                                                    - 02 Jun</div>
                                                <div>1 days left</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="task-badges"><span
                                                        class="badge bg-white text-default border">#SPK - 08</span><span
                                                        class="ms-1 badge bg-outline-success">Designing</span></div>
                                                <div class="dropdown">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kanban-content mt-2">
                                                <div class="task-image mt-2">
                                                    <img src="assets/images/media/media-36.jpg"
                                                        class="img-fluid rounded kanban-image" alt="">
                                                </div>
                                                <h6 class="fw-medium mb-0 mt-2">Design multi usage landing.</h6>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-primary">
                                                        <span class="me-1"><i
                                                                class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">16</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-muted">
                                                        <span class="me-1"><i
                                                                class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">28</span>
                                                    </a>
                                                </div>
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/2.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/8.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/5.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/10.jpg" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid view-more-button mt-3">
                            <button class="btn btn-primary-light btn-wave">View More</button>
                        </div>
                    </div>
                    <div class="kanban-tasks-type todo">
                        <div class="pe-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="d-block fw-medium fs-15">TODO - 36</span>
                                <div>
                                    <a aria-label="anchor" href="javascript:void(0)"
                                        class="btn btn-sm bg-white text-default border btn-wave" data-bs-toggle="modal"
                                        data-bs-target="#add-task">
                                        <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="kanban-tasks" id="todo-tasks">
                            <div id="todo-tasks-draggable" data-view-btn="todo-tasks">
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3 kanban-board-head">
                                            <div class="d-flex text-muted justify-content-between mb-1 fs-12 fw-medium">
                                                <div><i
                                                        class="ri-time-line me-1 align-middle d-inline-block"></i>Created
                                                    - 01 Jun</div>
                                                <div>10 days left</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="task-badges"><span
                                                        class="badge bg-white text-default border">#SPK - 07</span><span
                                                        class="ms-1 badge bg-outline-danger">Admin</span><span
                                                        class="ms-1 badge bg-white border text-default">Authentication</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kanban-content mt-2">
                                                <h6 class="fw-medium mb-1 fs-15">Adding Authentication Pages.</h6>
                                                <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Nulla soluta </div>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-primary">
                                                        <span class="me-1"><i
                                                                class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">06</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-muted">
                                                        <span class="me-1"><i
                                                                class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">02</span>
                                                    </a>
                                                </div>
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/9.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/8.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/14.jpg" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3 kanban-board-head">
                                            <div class="d-flex text-muted justify-content-between mb-1 fs-12 fw-medium">
                                                <div><i
                                                        class="ri-time-line me-1 align-middle d-inline-block"></i>Created
                                                    - 05 Jun</div>
                                                <div>14 days left</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="task-badges"><span
                                                        class="badge bg-white text-default border">#SPK - 15</span><span
                                                        class="ms-1 badge bg-outline-success">Planning</span></div>
                                                <div class="dropdown">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kanban-content mt-2">
                                                <div class="task-image mt-2">
                                                    <img src="assets/images/media/media-41.jpg"
                                                        class="img-fluid rounded kanban-image" alt="">
                                                </div>
                                                <h6 class="fw-medium mb-0 mt-2">New Project Discussion.</h6>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-primary">
                                                        <span class="me-1"><i
                                                                class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">17</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-muted">
                                                        <span class="me-1"><i
                                                                class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">06</span>
                                                    </a>
                                                </div>
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/2.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/8.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/5.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/10.jpg" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid view-more-button mt-3">
                            <button class="btn btn-primary-light btn-wave">View More</button>
                        </div>
                    </div>
                    <div class="kanban-tasks-type in-progress">
                        <div class="pe-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="d-block fw-medium fs-15">ON GOING - 25</span>
                                <div>
                                    <a aria-label="anchor" href="javascript:void(0)"
                                        class="btn btn-sm bg-white text-default border btn-wave" data-bs-toggle="modal"
                                        data-bs-target="#add-task">
                                        <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="kanban-tasks" id="inprogress-tasks">
                            <div id="inprogress-tasks-draggable" data-view-btn="inprogress-tasks">
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3 kanban-board-head">
                                            <div class="d-flex text-muted justify-content-between mb-1 fs-12 fw-medium">
                                                <div><i
                                                        class="ri-time-line me-1 align-middle d-inline-block"></i>Created
                                                    - 02 Jun</div>
                                                <div>5 days left</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="task-badges"><span
                                                        class="badge bg-white text-default border">#SPK - 13</span><span
                                                        class="ms-1 badge bg-outline-primary">UI Design</span><span
                                                        class="ms-1 badge bg-outline-danger">Development</span></div>
                                                <div class="dropdown">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kanban-content mt-2">
                                                <h6 class="fw-medium mb-1 fs-15">Create Calendar & Mail pages.</h6>
                                                <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Nulla soluta </div>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-primary">
                                                        <span class="me-1"><i
                                                                class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">05</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-muted">
                                                        <span class="me-1"><i
                                                                class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">13</span>
                                                    </a>
                                                </div>
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/13.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/6.jpg" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3 kanban-board-head">
                                            <div class="d-flex text-muted justify-content-between mb-1 fs-12 fw-medium">
                                                <div><i
                                                        class="ri-time-line me-1 align-middle d-inline-block"></i>Created
                                                    - 03 Jun</div>
                                                <div>12 days left</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="task-badges"><span
                                                        class="badge bg-light text-default ms-1">#SPK - 09</span><span
                                                        class="ms-1 badge bg-outline-info">Product</span></div>
                                                <div class="dropdown">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kanban-content mt-2">
                                                <h6 class="fw-medium mb-1 fs-15">Project design Figma,Sketch.</h6>
                                                <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Nulla soluta </div>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-primary">
                                                        <span class="me-1"><i
                                                                class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">02</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-muted">
                                                        <span class="me-1"><i
                                                                class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">0</span>
                                                    </a>
                                                </div>
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/12.jpg" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid view-more-button mt-3">
                            <button class="btn btn-primary-light btn-wave">View More</button>
                        </div>
                    </div>
                    <div class="kanban-tasks-type inreview">
                        <div class="pe-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="d-block fw-medium fs-15">IN REVIEW - 02</span>
                                <div>
                                    <a aria-label="anchor" href="javascript:void(0)"
                                        class="btn btn-sm bg-white text-default border btn-wave" data-bs-toggle="modal"
                                        data-bs-target="#add-task">
                                        <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="kanban-tasks" id="inreview-tasks">
                            <div id="inreview-tasks-draggable" data-view-btn="inreview-tasks">
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3 kanban-board-head">
                                            <div class="d-flex text-muted justify-content-between mb-1 fs-12 fw-medium">
                                                <div><i
                                                        class="ri-time-line me-1 align-middle d-inline-block"></i>Created
                                                    - 05 Jun</div>
                                                <div>14 days left</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="task-badges"><span
                                                        class="badge bg-white text-default border">#SPK - 15</span><span
                                                        class="ms-1 badge bg-purple-transparent">Review</span></div>
                                                <div class="dropdown">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kanban-content mt-2">
                                                <div class="task-image mt-2">
                                                    <img src="assets/images/media/media-43.jpg"
                                                        class="img-fluid rounded kanban-image" alt="">
                                                </div>
                                                <h6 class="fw-medium mb-0 mt-2">Design Architecture strategy.</h6>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-primary">
                                                        <span class="me-1"><i
                                                                class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">09</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-muted">
                                                        <span class="me-1"><i
                                                                class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">35</span>
                                                    </a>
                                                </div>
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/3.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/5.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/7.jpg" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid view-more-button mt-3">
                            <button class="btn btn-primary-light btn-wave">View More</button>
                        </div>
                    </div>
                    <div class="kanban-tasks-type completed">
                        <div class="pe-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="d-block fw-medium fs-15">COMPLETED - 36</span>
                                <div>
                                    <a aria-label="anchor" href="javascript:void(0)"
                                        class="btn btn-sm bg-white text-default border btn-wave" data-bs-toggle="modal"
                                        data-bs-target="#add-task">
                                        <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="kanban-tasks" id="completed-tasks">
                            <div id="completed-tasks-draggable" data-view-btn="completed-tasks">
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3 kanban-board-head">
                                            <div class="d-flex text-muted justify-content-between mb-1 fs-12 fw-medium">
                                                <div><i
                                                        class="ri-time-line me-1 align-middle d-inline-block"></i>Created
                                                    - 12 Jun</div>
                                                <div class="text-success"><i
                                                        class="ri-check-fill me-1 align-middle d-inline-block"></i>Done
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="task-badges"><span
                                                        class="badge bg-white text-default border">#SPK - 04</span><span
                                                        class="ms-1 badge bg-outline-success">UI/UX</span></div>
                                                <div class="dropdown">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kanban-content mt-2">
                                                <h6 class="fw-medium mb-1 fs-15">Sash project update.</h6>
                                                <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Nulla soluta </div>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-primary">
                                                        <span class="me-1"><i
                                                                class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">18</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-muted">
                                                        <span class="me-1"><i
                                                                class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">03</span>
                                                    </a>
                                                </div>
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/6.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/13.jpg" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3 kanban-board-head">
                                            <div class="d-flex text-muted justify-content-between mb-1 fs-12 fw-medium">
                                                <div><i
                                                        class="ri-time-line me-1 align-middle d-inline-block"></i>Created
                                                    - 10 Jun</div>
                                                <div class="text-success"><i
                                                        class="ri-check-fill me-1 align-middle d-inline-block"></i>Done
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="task-badges"><span
                                                        class="badge bg-white text-default border">#SPK - 10</span><span
                                                        class="ms-1 badge bg-outline-info">Development</span></div>
                                                <div class="dropdown">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kanban-content mt-2">
                                                <h6 class="fw-medium mb-1 fs-15">React JS new version update.</h6>
                                                <div class="kanban-task-description">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Nulla soluta </div>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-primary">
                                                        <span class="me-1"><i
                                                                class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">22</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-muted">
                                                        <span class="me-1"><i
                                                                class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">12</span>
                                                    </a>
                                                </div>
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/10.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/11.jpg" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/1.jpg" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body p-0">
                                        <div class="p-3 kanban-board-head">
                                            <div class="d-flex text-muted justify-content-between mb-1 fs-12 fw-medium">
                                                <div><i
                                                        class="ri-time-line me-1 align-middle d-inline-block"></i>Created
                                                    - 07 Jun</div>
                                                <div class="text-success"><i
                                                        class="ri-check-fill me-1 align-middle d-inline-block"></i>Done
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="task-badges"><span
                                                        class="badge bg-white text-default border">#SPK - 16</span><span
                                                        class="ms-1 badge bg-outline-primary">Discussion</span></div>
                                                <div class="dropdown">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-line me-1 align-middle d-inline-block"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-edit-line me-1 align-middle d-inline-block"></i>Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kanban-content mt-2">
                                                <div class="task-image mt-2">
                                                    <img src="assets/images/media/media-69.jpg"
                                                        class="img-fluid rounded kanban-image bg-light" alt="">
                                                </div>
                                                <h6 class="fw-medium mb-0 mt-2">Project discussion with client.</h6>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-primary">
                                                        <span class="me-1"><i
                                                                class="ri-thumb-up-fill align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">11</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-muted">
                                                        <span class="me-1"><i
                                                                class="ri-message-2-line align-middle fw-normal"></i></span><span
                                                            class="fw-medium fs-12">05</span>
                                                    </a>
                                                </div>
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="assets/images/faces/4.jpg" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid view-more-button mt-3">
                            <button class="btn btn-primary-light btn-wave">View More</button>
                        </div>
                    </div>
                </div>
                <!--End::row-2 -->

                <!-- Start::add board modal -->
                <div class="modal fade" id="add-board" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">Add Board</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-4">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <label for="board-title" class="form-label">Task Board Title</label>
                                        <input type="text" class="form-control" id="board-title"
                                            placeholder="Board Title">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Add Board</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::add board modal -->

                <!-- Start::add task modal -->
                <div class="modal fade" id="add-task" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">Add Task</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-4">
                                <div class="row gy-2">
                                    <div class="col-xl-6">
                                        <label for="task-name" class="form-label">Task Name</label>
                                        <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="task-id" class="form-label">Task ID</label>
                                        <input type="text" class="form-control" id="task-id" placeholder="Task ID">
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="text-area" class="form-label">Task Description</label>
                                        <textarea class="form-control" id="text-area" rows="2"
                                            placeholder="Write Description"></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="text-area" class="form-label">Task Images</label>
                                        <input type="file" class="multiple-filepond" name="filepond" multiple
                                            data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                    </div>
                                    <div class="col-xl-12">
                                        <label class="form-label">Assigned To</label>
                                        <select class="form-control" name="choices-multiple-remove-button1"
                                            id="choices-multiple-remove-button1" multiple>
                                            <option value="Choice 1">Angelina May</option>
                                            <option value="Choice 2">Kiara advain</option>
                                            <option value="Choice 3">Hercules Jhon</option>
                                            <option value="Choice 4">Mayor Kim</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <label class="form-label">Target Date</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-text text-muted"> <i
                                                        class="ri-calendar-line"></i> </div>
                                                <input type="text" class="form-control" id="targetDate"
                                                    placeholder="Choose date and time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label class="form-label">Tags</label>
                                        <select class="form-control" name="choices-multiple-remove-button2"
                                            id="choices-multiple-remove-button2" multiple>
                                            <option value="">Select Tag</option>
                                            <option value="UI/UX">UI/UX</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Designing">Designing</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Authentication">Authentication</option>
                                            <option value="Product">Product</option>
                                            <option value="Development">Development</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Add Task</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::add task modal -->

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

    <!-- Filepond JS -->
    <script src="assets/libs/filepond/filepond.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script
        src="assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js"></script>
    <script src="assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js"></script>

    <!-- Flat Picker JS -->
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- Dragula JS -->
    <script src="assets/libs/dragula/dragula.min.js"></script>

    <!-- Internal Task  JS -->
    <script src="assets/js/task-kanban-board.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>