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
    <title>সহ পাঠ্যক্রম তথ্য সম্পাদন - খুলনা বিশ্ববিদ্যালয় স্কুল</title>
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
                            <h4 class="mb-sm-0 font-size-18">সহ পাঠ্যক্রম তথ্য সম্পাদন</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">খুলনা বিশ্ববিদ্যালয় স্কুল</a></li>
                                    <li class="breadcrumb-item active">সহ পাঠ্যক্রম তথ্য সম্পাদন</li>
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
                                            <label for="example-text-input" class="form-label">ছবি</label>
                                            <input class="form-control" type="file" id="example-text-input"
                                                   name="image">
                                        </div>
                                        <div class="mb-3">
                                            <?php
                                            $fetch = $db_handle->runQuery("select * from extracurricular where eid = {$_GET['id']}");
                                            ?>
                                            <img src="<?php echo $fetch[0]['image']; ?>"
                                                 style="max-width: 350px; height: auto;"/>
                                        </div>
                                        <input type="hidden" value="<?php echo $fetch[0]['eid'];?>" name="id"/>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">ছবির ক্যাপশান</label>
                                            <input class="form-control" type="text" id="example-text-input"
                                                   name="caption" value="<?php echo $fetch[0]['image_caption'];?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">পেজ নির্বাচন করুন</label>
                                            <select class="form-select" name="page">
                                                <option value="<?php echo $fetch[0]['page'];?>" selected name="page">
                                                    <?php
                                                    if($fetch[0]['page'] == 1)
                                                        echo 'ক্রীড়া কার্যক্রম';
                                                    if($fetch[0]['page'] == 2)
                                                        echo 'সাংস্কৃতিক কার্যক্রম';
                                                    if($fetch[0]['page'] == 3)
                                                        echo 'স্কাউটস';
                                                    if($fetch[0]['page'] == 4)
                                                        echo 'রেড ক্রিসেন্ট';
                                                    if($fetch[0]['page'] == 5)
                                                        echo 'শিক্ষা সফর';
                                                    if($fetch[0]['page'] == 6)
                                                        echo 'স্টুডেন্ট ক্যাবিনেট';
                                                    if($fetch[0]['page'] == 7)
                                                        echo 'ডিবেটিং ক্লাব';
                                                    if($fetch[0]['page'] == 8)
                                                        echo 'ল্যাংগুয়েজ ক্লাব';
                                                    if($fetch[0]['page'] == 9)
                                                        echo 'বিজ্ঞান মেলা';
                                                    ?>
                                                </option>
                                                <option value="1">ক্রীড়া কার্যক্রম</option>
                                                <option value="2">সাংস্কৃতিক কার্যক্রম</option>
                                                <option value="3">স্কাউটস</option>
                                                <option value="4">রেড ক্রিসেন্ট</option>
                                                <option value="5">শিক্ষা সফর</option>
                                                <option value="6">স্টুডেন্ট ক্যাবিনেট</option>
                                                <option value="7">ডিবেটিং ক্লাব</option>
                                                <option value="8">ল্যাংগুয়েজ ক্লাব</option>
                                                <option value="9">বিজ্ঞান মেলা</option>
                                            </select>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    name="update_extracurriculam">সংরক্ষন করুন
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