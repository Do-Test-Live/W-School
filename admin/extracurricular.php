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
    <title>সহ পাঠ্যক্রম - খুলনা বিশ্ববিদ্যালয় স্কুল</title>
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
                            <h4 class="mb-sm-0 font-size-18">সহ পাঠ্যক্রম</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">খুলনা বিশ্ববিদ্যালয় স্কুল</a></li>
                                    <li class="breadcrumb-item active">সহ পাঠ্যক্রম</li>
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
                                        <th>ক্রমিক নাং</th>
                                        <th>ছবি</th>
                                        <th>পেজের নাম</th>
                                        <th>ছবির ক্যাপশান</th>
                                        <th>সম্পাদনা</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $fetch_staff = $db_handle->runQuery("select * from extracurricular where eid != '1' and eid != '4' and eid != '5' and eid != '6' order by eid desc");
                                    $no = $db_handle->numRows("select * from extracurricular where eid != '1' and eid != '4' and eid != '5' and eid != '6' order by eid desc");
                                    for ($i=0; $i<$no; $i++){
                                        ?>
                                        <tr>
                                            <td><?php echo $i+1;?></td>
                                            <td><img src="<?php $img = explode("," ,$fetch_staff[$i]['image']);
                                            echo $img['0'];?>" height="50px"></td>
                                            <td><?php
                                                if($fetch_staff[$i]['page'] == 1)
                                                    echo 'ক্রীড়া কার্যক্রম';
                                                if($fetch_staff[$i]['page'] == 2)
                                                    echo 'সাংস্কৃতিক কার্যক্রম';
                                                if($fetch_staff[$i]['page'] == 3)
                                                    echo 'স্কাউটস';
                                                if($fetch_staff[$i]['page'] == 4)
                                                    echo 'রেড ক্রিসেন্ট';
                                                if($fetch_staff[$i]['page'] == 5)
                                                    echo 'শিক্ষা সফর';
                                                if($fetch_staff[$i]['page'] == 6)
                                                    echo 'স্টুডেন্ট ক্যাবিনেট';
                                                if($fetch_staff[$i]['page'] == 7)
                                                    echo 'ডিবেটিং ক্লাব';
                                                if($fetch_staff[$i]['page'] == 8)
                                                    echo 'ল্যাংগুয়েজ ক্লাব';
                                                if($fetch_staff[$i]['page'] == 9)
                                                    echo 'বিজ্ঞান মেলা';
                                                    ?></td>
                                            <td><?php echo $fetch_staff[$i]['image_caption'];?></td>
                                            <td><a href="Edit_Extracurricular?id=<?php echo $fetch_staff[$i]['eid'];?>"><i data-feather="pen-tool"></i></a></td>
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