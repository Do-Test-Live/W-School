<?php
session_start();
require_once("config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

if(isset($_SESSION['admin_id'])){
    echo "
    <script>
    window.location.href = 'Dashboard';
</script>
    ";
}

if (isset($_POST['login'])) {
    $email = $db_handle->checkValue($_POST['email']);
    $password = $db_handle->checkValue($_POST['password']);
    $inserted_at = date("Y-m-d H:i:s");
    $select_admin = $db_handle->runQuery("SELECT * FROM admin WHERE admin_email = '$email' and status = '1'");
    $encryptedPassword = $select_admin[0]['admin_password'];
    $ivFromDatabase = hex2bin($select_admin[0]['pass_key']);

    $keyword = 'SwarnaKamalRoy'; // Use the same keyword for encryption and decryption
    $method = 'aes-256-cbc';

    $decrypted = openssl_decrypt($encryptedPassword, $method, $keyword, 0, $ivFromDatabase);

// Compare decrypted password with the user-provided password
    if ($decrypted === $password) {
        $insert_activity = $db_handle->insertQuery("INSERT INTO `activity`(`admin_id`, `start_time`) VALUES ({$select_admin[0]['admin_id']},'$inserted_at')");
        $select_activity_id = $db_handle->runQuery("select activity_id from activity order by activity_id desc limit 1");
        // Passwords match, proceed with login
        $_SESSION['admin_id'] = $select_admin[0]['admin_id'];
        $_SESSION['activity_id'] = $select_activity_id[0]['activity_id'];
        echo "
        <script>
        document.cookie = 'alert = 1;';
        window.location.href = 'Dashboard';
</script>
        ";
    } else {
        // Passwords don't match
        echo "
        <script>
        document.cookie = 'alert = 5;';
        window.location.href = 'Login';
</script>
        ";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Admin Login - Khulna University School </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- preloader css -->
    <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css"/>

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/toastr/css/toastr.min.css">

</head>

<body>

<!-- <body data-layout="horizontal"> -->
<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="index.html" class="d-block auth-logo">
                                    <h4 class="mb-sm-0 font-size-18 mt-3">Khulna University School</h4>
                                </a>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h5 class="mb-0">Welcome Back !</h5>
                                </div>
                                <form class="mt-4 pt-2" action="#" method="post">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="username"
                                               placeholder="Enter Email">
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <label class="form-label">Password</label>
                                            </div>
                                        </div>

                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" placeholder="Enter password"
                                                   aria-label="Password" name="password"
                                                   aria-describedby="password-addon">
                                            <button class="btn btn-light shadow-none ms-0" type="button"
                                                    id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit"
                                                name="login">Log In
                                        </button>
                                    </div>
                                </form>

                                <div class="mt-5 text-center">
                                    <p class="text-muted mb-0">Don't have an account ? <a href="Register"
                                                                                          class="text-primary fw-semibold">
                                            Signup now </a></p>
                                </div>
                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">©
                                    <script>document.write(new Date().getFullYear())</script>
                                    Khulna University School
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end col -->
            <div class="col-xxl-9 col-lg-8 col-md-7">
                <div class="auth-bg pt-md-5 p-4 d-flex">
                    <div class="bg-overlay bg-primary"></div>
                    <ul class="bg-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- end bubble effect -->
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-7">
                            <div class="p-0 p-sm-4 px-xl-0">
                                <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <!-- end carouselIndicators -->
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <div class="testi-contain text-white">
                                                <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                <h4 class="mt-4 fw-medium lh-base text-white">“সভ্যতার ক্রমবিবর্তনের
                                                    সাথে সাথে শিক্ষা যখন প্রাতিষ্ঠানিক রূপ লাভ করে তখন থেকেই বিদ্যালয়ের
                                                    ভুমিকা গুরুত্বপূর্ণ হয়ে উঠেছে। এই বিদ্যালয়ই শিক্ষা দান বা বিস্তারের
                                                    কেন্দ্রবিন্দু। শিক্ষা সম্পর্কে পুরাতন অনেক ধারণা পরিবর্তিত হয়েছে এবং
                                                    যুগ পরিবর্তনের সাথে সাথে শিক্ষাদানের পদ্ধতিরও পরিবর্তন হয়েছে। এসকল
                                                    বিষয় বিবেচনা করে এবং মানসম্মত শিক্ষা নিশ্চিত করার বাসনা নিয়ে যাত্রা
                                                    শুরু হয় খুলনা বিশ্ববিদ্যালয় স্কুলের। ”</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end carousel-inner -->
                                </div>
                                <!-- end review carousel -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>


<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="assets/libs/pace-js/pace.min.js"></script>
<!-- password addon init -->
<script src="assets/js/pages/pass-addon.init.js"></script>
<script src="assets/toastr/js/toastr.min.js"></script>
<script src="assets/js/toastr-init.js"></script>

</body>

</html>