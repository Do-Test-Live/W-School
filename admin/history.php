<?php
session_start();
require_once("config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

if (!isset($_SESSION['admin_id'])) {
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
    <meta charset="utf-8"/>
    <title>প্রতিষ্ঠান সম্পর্কে - খুলনা বিশ্ববিদ্যালয় স্কুল</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--include css files-->
    <?php include('include/css.php'); ?>

</head>

<body>

<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <!--including header-->
    <?php include('include/header.php'); ?>

    <!-- ========== Left Sidebar Start ========== -->
    <?php include('include/sidebar.php'); ?>
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
                            <h4 class="mb-sm-0 font-size-18">ইতিহাস</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">খুলনা বিশ্ববিদ্যালয়
                                            স্কুল</a></li>
                                    <li class="breadcrumb-item active">ইতিহাস</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <div>
                                    <form action="Update" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">পেজ ব্যানার</label>
                                            <input class="form-control" type="file" id="example-text-input"
                                                   name="image">
                                        </div>
                                        <div class="mb-3">
                                            <?php
                                            $fetch_about_image = $db_handle->runQuery("select * from history where id = '1'");
                                            ?>
                                            <img src="<?php echo $fetch_about_image[0]['image']; ?>"
                                                 style="max-width: 350px; height: auto;"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">বর্ননা</label>
                                            <textarea class="form-control"
                                                      name="description"><?php echo $fetch_about_image[0]['description']; ?></textarea>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="update_history">সংরক্ষন করুন
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row-->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!--include footer-->
        <?php include('include/footer.php'); ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include('include/layout_design.php'); ?>
<!-- /Right-bar -->


<!-- JAVASCRIPT -->
<?php include('include/js.php'); ?>

<script>
    CKEDITOR.replace('description');
</script>

</body>

</html>