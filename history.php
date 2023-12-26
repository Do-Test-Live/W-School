<?php
session_start();
require_once("admin/config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

$fetch_institute_info = $db_handle->runQuery("select * from history where id = '1'");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>ইতিহাস - খুলনা বিশ্ববিদ্যালয় স্কুল</title>
    <?php include ('include/css.php');?>
</head>
<body>

<!--header area start-->
<?php include ('include/header.php');?>
<!--header area end-->

<!--main body content start-->
<section class="main-body">
    <div class="container">
        <div class="uk-cover-container uk-height-medium">
            <img src="admin/<?php echo $fetch_institute_info[0]['image'];?>" alt="" uk-cover>
        </div>
    </div>
</section>
<section>
    <div class="container mt-5">
        <?php echo $fetch_institute_info[0]['description'];?>
    </div>
</section>

<!--main body content end-->

<?php include ('include/footer.php');?>

<?php include ('include/js.php');?>


</body>
</html>
