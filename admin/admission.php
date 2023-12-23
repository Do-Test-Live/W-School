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
    <title>ভর্তি সংক্রান্ত তথ্য - খুলনা বিশ্ববিদ্যালয় স্কুল</title>
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
                            <h4 class="mb-sm-0 font-size-18">ভর্তি সংক্রান্ত তথ্য</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">খুলনা বিশ্ববিদ্যালয় স্কুল</a></li>
                                    <li class="breadcrumb-item active">ভর্তি সংক্রান্ত তথ্য</li>
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
                                <h4 class="card-title">প্রস্পেক্টাস</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from admission_info where id = '1'");
                                    ?>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">প্রস্পেক্টাস</label>
                                            <input class="form-control" type="file" name="prospectus" accept="application/pdf">
                                        </div>
                                        <div class="mb-3">
                                            <iframe src="<?php echo $fetch[0]['filelink'];?>" width="500" height="500"></iframe>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="update_prospectus">সংরক্ষন করুন</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">ভর্তির নিয়ামাবলি</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from admission_info where id = '2'");
                                    ?>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">ভর্তির নিয়ামাবলি</label>
                                            <input class="form-control" type="file" name="prospectus" accept="application/pdf">
                                        </div>
                                        <div class="mb-3">
                                            <iframe src="<?php echo $fetch[0]['filelink'];?>" width="500" height="500"></iframe>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="update_admission_rules">সংরক্ষন করুন</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">ভর্তি পরিক্ষার সিলেবাস</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from admission_info where id = '3'");
                                    ?>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">ভর্তি পরিক্ষার সিলেবাস</label>
                                            <input class="form-control" type="file" name="prospectus" accept="application/pdf">
                                        </div>
                                        <div class="mb-3">
                                            <iframe src="<?php echo $fetch[0]['filelink'];?>" width="500" height="500"></iframe>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="update_admission_syllabus">সংরক্ষন করুন</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">ভর্তি পরিক্ষার ফলাফল</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from admission_info where id = '4'");
                                    ?>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">ভর্তি পরিক্ষার ফলাফল</label>
                                            <input class="form-control" type="file" name="prospectus" accept="application/pdf">
                                        </div>
                                        <div class="mb-3">
                                            <iframe src="<?php echo $fetch[0]['filelink'];?>" width="500" height="500"></iframe>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="update_admission_result">সংরক্ষন করুন</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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

</body>

</html>