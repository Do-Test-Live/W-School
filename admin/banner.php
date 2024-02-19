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
    <title>খুলনা বিশ্ববিদ্যালয় স্কুল</title>
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
                            <h4 class="mb-sm-0 font-size-18">মূল ব্যনার</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">খুলনা বিশ্ববিদ্যালয় স্কুল</a></li>
                                    <li class="breadcrumb-item active">মূল ব্যনার</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <?php
                if(isset($_GET['banner_id'])){
                    $select_image = $db_handle->runQuery("select * from main_banner where banner_id = {$_GET['banner_id']}");
                    $id = $select_image[0]['banner_id'];
                    ?>
                    <div class="row">
                        <form action="Update" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="example-text-input" class="form-label">ছবি নির্বাচন করুন (রেজুলেশনঃ ১৯২০*৮০০)</label>
                                <input class="form-control" type="file" name="image" accept="image/*" required>
                                <input type="hidden" value="<?php echo $id?>" name="id">
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary waves-effect waves-light" name="banner_image">সংরক্ষন করুন</button>
                            </div>
                        </form>
                        <div class="row">
                            <img src="../<?php echo $select_image[0]['file'];?>" style="height: 250px; width: auto;">
                        </div>
                    </div>
                    <?php
                }
                ?>

                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>ক্রমিক নম্বর</th>
                                        <th>ছবি</th>
                                        <th>মুছে ফেলুন</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $select_image = $db_handle->runQuery("select * from main_banner");
                                    $no_select_image = $db_handle->numRows("select * from main_banner");
                                    for ($i=0; $i<$no_select_image; $i++){
                                        ?>
                                        <tr>
                                            <td><?php echo $i+1;?></td>
                                            <td><a href="../<?php echo $select_image[$i]['file'];?>" target="_blank"><img src="../<?php echo $select_image[$i]['file'];?>" style="height: 50px; width: auto;"></td>
                                            <td><a href="Banner?banner_id=<?php echo $select_image[$i]['banner_id'];?>"><i class="fas fa-edit"></i></a></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
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