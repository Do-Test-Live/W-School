<?php
session_start();
require_once("config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

if(!isset($_SESSION['admin_id'])){
    echo "
    <script>
    window.location.href = 'Login';
</script>
    ";
}
$admin_details = $db_handle->runQuery("select * from admin where admin_id = {$_SESSION['admin_id']}");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Edit Profile - Khulna University School</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--include css files-->
    <?php include ('include/css.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.21.0/ckeditor.js"
            integrity="sha512-ff67djVavIxfsnP13CZtuHqf7VyX62ZAObYle+JlObWZvS4/VQkNVaFBOO6eyx2cum8WtiZ0pqyxLCQKC7bjcg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <!--including header-->
    <?php include ('include/header.php');?>

    <!-- ========== Left Sidebar Start ========== -->
    <?php include ('include/sidebar.php');?>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">প্রোফাইল পরিবর্তন</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">খুলনা বিশ্ববিদ্যালয় স্কুল</a></li>
                                    <li class="breadcrumb-item active">প্রোফাইল পরিবর্তন</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profile Image</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="Update" class="dropzone dz-clickable" id="profileImage" method="post" enctype="multipart/form-data">
                                        <div class="dz-message needsclick">
                                            <div class="mb-3">
                                                <i class="display-4 text-muted bx bx-cloud-upload"></i>
                                            </div>
                                            <h5>Drop files here or click to upload.</h5>
                                            <input type="file" name="profile_image" style="display: none;" />
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="update_profile_image">Save Files</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">About</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from teacher_info where teacher_info_id = {$_SESSION['admin_id']}");
                                    $no_fetch = $db_handle->numRows("select * from teacher_info where teacher_info_id = {$_SESSION['admin_id']}");
                                    ?>
                                    <form action="Update" method="post">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Bio</label>
                                            <textarea class="form-control" name="bio" required><?php if($no_fetch > 0) echo $fetch[0]['bio'];?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Educational Details</label>
                                            <textarea class="form-control" name="education" required><?php if($no_fetch > 0) echo $fetch[0]['education'];?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Experience</label>
                                            <textarea class="form-control" name="experience" required><?php if($no_fetch > 0) echo $fetch[0]['experience'];?></textarea>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="update_bio">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update Password</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="Update" method="post">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Old Password</label>
                                            <input type="password" class="form-control" name="old" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">New Password</label>
                                            <input type="password" class="form-control" name="new" required/>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="update_password">Update Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!--include footer-->
        <?php include ('include/footer.php');?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include ('include/layout_design.php');?>
<!-- /Right-bar -->



<!-- JAVASCRIPT -->
<?php include ('include/js.php');?>

<script>
    Dropzone.options.profileImage = {
        paramName: "profile_image",
        acceptedFiles: ".png, .jpg, .jpeg",
        addRemoveLinks: true,
        maxFiles: 1
    };

    CKEDITOR.replace('education');
    CKEDITOR.replace('bio');
    CKEDITOR.replace('experience');
</script>

</body>

</html>