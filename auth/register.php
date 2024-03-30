<?php require_once "UserController.php"; ?>
<?php
$pageTitle = "Register";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php echo $pageTitle; ?>
    </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="../assets/js/authentication-main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style Css -->
    <link href="../assets/css/styles.css" rel="stylesheet">

    <!-- Icons Css -->
    <link href="../assets/css/icons.css" rel="stylesheet">

</head>

<body class="authentication-background">

    <!-- Start::Switcher -->
    <?php include '../components/switcher.php'; ?>
    <!-- End::Switcher -->

    <div class="container-lg">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="card custom-card my-4">
                    <div class="card-body p-5">
                        <form action="register.php" method="POST" autocomplete="">
                            <div class="mb-3 d-flex justify-content-center">
                                <a href="index.php">
                                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo"
                                        class="desktop-logo">
                                    <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo"
                                        class="desktop-dark">
                                </a>
                            </div>
                            <p class="h5 mb-2 text-center">Sign Up</p>
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="signup-firstname" class="form-label text-default">First
                                        Name<sup>*</sup></label>
                                    <input type="text" class="form-control form-control-lg" id="signup-firstname"
                                        name="firstname" required placeholder="First name"
                                        value="<?php echo $firstname ?>">
                                </div>
                                <div class="col-xl-12">
                                    <label for="signup-lastname" class="form-label text-default">Last
                                        Name<sup>*</sup></label>
                                    <input type="text" class="form-control form-control-lg" id="signup-lastname"
                                        name="lastname" required placeholder="Last name"
                                        value="<?php echo $lastname ?>">
                                </div>
                                <div class="col-xl-12">
                                    <label for="signup-email" class="form-label text-default">Email<sup>*</sup></label>
                                    <input type="email" class="form-control form-control-lg" id="signup-email"
                                        name="email" required placeholder="Email" value="<?php echo $email ?>">
                                </div>
                                <div class="col-xl-12">
                                    <label for="signup-password"
                                        class="form-label text-default">Password<sup>*</sup></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control form-control-lg" id="signup-password"
                                            placeholder="password" name="password">
                                        <a href="javascript:void(0);" class="show-password-button text-muted"
                                            onclick="createpassword('signup-password',this)" id="button-addon2"><i
                                                class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-2">
                                    <label for="signup-confirmpassword" class="form-label text-default">Confirm
                                        Password<sup>*</sup></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control form-control-lg"
                                            id="signup-confirmpassword" placeholder="confirm password" name="cpassword">
                                        <a href="javascript:void(0);" class="show-password-button text-muted"
                                            onclick="createpassword('signup-confirmpassword',this)"
                                            id="button-addon21"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button class="btn btn-lg btn-success" type="submit" name="signup">Sign Up</button>
                            </div>
                            <div class="text-center">
                                <p class="text-muted mt-3 mb-0">Already have an account? <a href="sign-in-basic.php"
                                        class="text-primary">Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Show Password JS -->
    <script src="../assets/js/show-password.js"></script>

</body>

</html>