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
    <title>অনুষ্ঠান সূচী - খুলনা বিশ্ববিদ্যালয় স্কুল</title>
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
                            <h4 class="mb-sm-0 font-size-18">অনুষ্ঠান সূচী তথ্য</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">খুলনা বিশ্ববিদ্যালয় স্কুল</a></li>
                                    <li class="breadcrumb-item active">অনুষ্ঠান সূচী তথ্য</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 mb-3">
                        <div class="card-body">
                            <div>
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">অনুষ্ঠান সূচী যুক্ত করুন</button>

                                <!-- sample modal content -->
                                <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">অনুষ্ঠান সূচী যুক্ত করুন</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="Insert" method="post" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">ছবি</label>
                                                        <input class="form-control" type="file" id="example-text-input"
                                                               name="image" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">অনুষ্ঠানের শিরোনাম</label>
                                                        <input class="form-control" type="text" id="example-text-input"
                                                               name="name" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">অনুষ্ঠান শুরুর তারিখ</label>
                                                        <input class="form-control" type="date" id="example-text-input"
                                                               name="start_date" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">অনুষ্ঠান শুরুর সময়</label>
                                                        <input class="form-control" type="time" id="example-text-input"
                                                               name="start_time">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">অনুষ্ঠান শেষের তারিখ</label>
                                                        <input class="form-control" type="date" id="example-text-input"
                                                               name="end_date">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">অনুষ্ঠান শেষের সময়</label>
                                                        <input class="form-control" type="time" id="example-text-input"
                                                               name="end_time">
                                                    </div>
                                                    <div class="text-center mt-4">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">বাতিন করুন</button>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                                name="insert_event_data">সংরক্ষন করুন
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div> <!-- end preview-->

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
                                        <th>ক্রমিক নাং</th>
                                        <th>নাম</th>
                                        <th>ছবি</th>
                                        <th>পদবী</th>
                                        <th>টেলিফোন নাম্বার</th>
                                        <th>ইমেইল</th>
                                        <th>দায়িত্ব গ্রহনের তারিখ</th>
                                        <th>সম্পাদন করুন</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $fetch = $db_handle->runQuery("select * from event order by event_id desc");
                                    $no = $db_handle->numRows("select * from event order by event_id desc");
                                    for ($i=0; $i<$no; $i++){
                                        ?>
                                        <tr>
                                            <td><?php echo $i+1;?></td>
                                            <td><?php echo $fetch[$i]['event_name'];?></td>
                                            <td><img src="<?php echo $fetch[$i]['image'];?>" height="50px"> </td>
                                            <td><?php
                                                $startDateStr = $fetch[$i]['start_date'];
                                                $startDate = new DateTime($startDateStr);
                                                echo $formattedDate = date_format($startDate, 'd M, Y');
                                                ?></td>
                                            <td><?php
                                                $startTimeStr = $fetch[$i]['start_time'];
                                                $startTime = new DateTime($startTimeStr);
                                                echo $formattedTime = date_format($startTime, 'h:i A');
                                                ?></td>
                                            <td><?php
                                                $endDateStr = $fetch[$i]['end_date'];
                                                $endDate = new DateTime($endDateStr);
                                                echo $formattedDate = date_format($endDate, 'd M, Y');
                                                ?></td>
                                            <td><?php
                                                $endTimeStr = $fetch[$i]['end_time'];
                                                $endTime = new DateTime($endTimeStr);
                                                echo $formattedTime = date_format($endTime, 'h:i A');
                                                ?></td>
                                            <td>
                                                <a href="Edit_Event?id=<?php echo $fetch[$i]['event_id'];?>"><i data-feather="pen-tool"></i></a>
                                                <a href="Delete?eventID=<?php echo $fetch[$i]['event_id'];?>"><i data-feather="trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div>
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