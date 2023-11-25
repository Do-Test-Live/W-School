<?php
session_start();
require_once("config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$admin_details = $db_handle->runQuery("select * from admin where admin_id = {$_SESSION['admin_id']}");
if(!isset($_SESSION['admin_id']) || $admin_details[0]['role'] != '0'){
    echo "
    <script>
    window.location.href = 'Logout';
</script>
    ";
}
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Dashboard - Khulna University School</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Khulna University School" name="description" />
    <meta content="FrogBid" name="author" />
    <!--include css file-->
    <?php include ('include/css.php');?>

</head>

<body>

<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <!--include header-->
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
                            <h4 class="mb-sm-0 font-size-18">একাউন্ট অনুমোদন</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">খুলনা বিশ্ববিদ্যালয় স্কুল</a></li>
                                    <li class="breadcrumb-item active">একাউন্ট অনুমোদন</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>ক্রমিক নম্বর</th>
                                        <th>নাম</th>
                                        <th>ইমেইল</th>
                                        <th>অবস্থা</th>
                                        <th>অবস্থার পরিবর্তন</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $select_account = $db_handle->runQuery("select * from admin order by admin_id desc");
                                    $no_select_account = $db_handle->numRows("select * from admin order by admin_id desc");
                                    for ($i=0; $i<$no_select_account; $i++){
                                        ?>
                                        <tr>
                                            <td><?php echo $i+1;?></td>
                                            <td><?php echo $select_account[$i]['admin_name'];?></td>
                                            <td><?php echo $select_account[$i]['admin_email'];?></td>
                                            <td><?php
                                                if($select_account[$i]['status'] == '1'){
                                                    ?>
                                                    <span class="badge bg-soft-success text-success">Approved</span>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <span class="badge bg-soft-danger text-danger">Pending</span>
                                                    <?php
                                                }
                                                ?></td>
                                            <td><a href="Update?id=<?php echo $select_account[$i]['admin_id'];?>"><i class="fas fa-edit"></i></a></td>
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
