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
                                <h4 class="card-title">প্রোফাইলের ছবি</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">ছবি</label>
                                            <input class="form-control" type="file" id="example-text-input"
                                                   name="image">
                                        </div>
                                        <div class="mb-3">
                                            <?php
                                            $fetch = $db_handle->runQuery("select * from admin where admin_id = {$_GET['id']}");
                                            ?>
                                            <img src="<?php echo $fetch[0]['profile_image']; ?>"
                                                 style="max-width: 350px; height: auto;"/>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="update_profile_image">সংরক্ষন করুন</button>
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
                                <h4 class="card-title">পরিচিতি</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from teacher_info where admin_id = {$_SESSION['admin_id']}");
                                    $no_fetch = $db_handle->numRows("select * from teacher_info where admin_id = {$_SESSION['admin_id']}");
                                    ?>
                                    <form action="Update" method="post">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">মোবাইল নম্বর</label>
                                            <input class="form-control" name="contact_no" required value="<?php echo $fetch[0]['contact_no'];?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">বিষয়ের নাম</label>
                                            <input class="form-control" name="subject" required value="<?php echo $fetch[0]['subject'];?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">নিজের সম্পর্কে</label>
                                            <textarea class="form-control" name="bio"><?php if($no_fetch > 0) echo $fetch[0]['bio'];?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">শিক্ষাগত যোগ্যতা</label>
                                            <textarea class="form-control" name="education"><?php if($no_fetch > 0) echo $fetch[0]['education'];?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">অভিজ্ঞতা</label>
                                            <textarea class="form-control" name="experience"><?php if($no_fetch > 0) echo $fetch[0]['experience'];?></textarea>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="update_bio">সংরক্ষন করুন</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">পাসওয়ার্ড পরিবর্তন</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="Update" method="post">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">পুরাতন পাসওয়ার্ড</label>
                                            <input type="password" class="form-control" name="old" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">নতুন পাসওয়ার্ড</label>
                                            <input type="password" class="form-control" name="new" required/>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="update_password">সংরক্ষন করুন</button>
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