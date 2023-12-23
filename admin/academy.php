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
    <title>একাডেমিক তথ্য - খুলনা বিশ্ববিদ্যালয় স্কুল</title>
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
                            <h4 class="mb-sm-0 font-size-18">একাডেমিক তথ্য</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">খুলনা বিশ্ববিদ্যালয় স্কুল</a></li>
                                    <li class="breadcrumb-item active">একাডেমিক তথ্য</li>
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
                                <h4 class="card-title">আচরণ বিধি</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from academy where academy_id = '1'");
                                    ?>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">বর্ননা</label>
                                            <textarea class="form-control"
                                                      name="description"><?php echo $fetch[0]['description']; ?></textarea>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="update_behaviour">সংরক্ষন করুন
                                            </button>
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
                                <h4 class="card-title">একাডেমিক ক্যালেন্ডার</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from academy where academy_id = '2'");
                                    ?>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">বর্ননা</label>
                                            <textarea class="form-control"
                                                      name="description_calender"><?php echo $fetch[0]['description']; ?></textarea>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="update_calender">সংরক্ষন করুন
                                            </button>
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
                                <h4 class="card-title">ক্লাস রুটিন</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from academy where academy_id = '3'");
                                    ?>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">পি ডি এফ নির্বাচন করুন</label>
                                            <input class="form-control" type="file" id="example-text-input"
                                                   name="image" accept="application/pdf">
                                            <?php
                                            $fetch = $db_handle->runQuery("select * from academy where academy_id = '3'");
                                            ?>
                                        </div>
                                        <div class="mb-3">
                                            <iframe src="<?php echo $fetch[0]['file'];?>" width="500" height="500"></iframe>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="update_routine">সংরক্ষন করুন
                                            </button>
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
                                <h4 class="card-title">ছুটির তালিকা</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from academy where academy_id = '4'");
                                    ?>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">বর্ননা</label>
                                            <textarea class="form-control"
                                                      name="description_holiday"><?php echo $fetch[0]['description']; ?></textarea>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="update_holiday">সংরক্ষন করুন
                                            </button>
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
                                <h4 class="card-title">ইউনিফর্ম</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from academy where academy_id = '5'");
                                    ?>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">বর্ননা</label>
                                            <textarea class="form-control"
                                                      name="description_unifrom"><?php echo $fetch[0]['description']; ?></textarea>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="update_uniform">সংরক্ষন করুন
                                            </button>
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
                                <h4 class="card-title">ফী সমূহ</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from academy where academy_id = '6'");
                                    ?>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">পি ডি এফ নির্বাচন করুন</label>
                                            <input class="form-control" type="file" id="example-text-input"
                                                   name="image" accept="application/pdf">
                                            <?php
                                            $fetch = $db_handle->runQuery("select * from academy where academy_id = '6'");
                                            ?>
                                        </div>
                                        <div class="mb-3">
                                            <iframe src="<?php echo $fetch[0]['file'];?>" width="500" height="500"></iframe>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="update_fees">সংরক্ষন করুন
                                            </button>
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
                                <h4 class="card-title">অভিভাবক নির্দেশিকা</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from academy where academy_id = '7'");
                                    ?>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">বর্ননা</label>
                                            <textarea class="form-control"
                                                      name="description_parents"><?php echo $fetch[0]['description']; ?></textarea>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="update_parents">সংরক্ষন করুন
                                            </button>
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
                                <h4 class="card-title">শিক্ষার্থী উপস্থিতি তথ্য</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from academy where academy_id = '8'");
                                    ?>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">বর্ননা</label>
                                            <textarea class="form-control"
                                                      name="description_attendance"><?php echo $fetch[0]['description']; ?></textarea>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="update_attendance">সংরক্ষন করুন
                                            </button>
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

<script>
    CKEDITOR.replace('description');
    CKEDITOR.replace('description_calender');
    CKEDITOR.replace('description_holiday');
    CKEDITOR.replace('description_unifrom');
    CKEDITOR.replace('description_parents');
    CKEDITOR.replace('description_attendance');
</script>
</body>

</html>