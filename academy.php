<?php
session_start();
require_once("admin/config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
if(isset($_GET['id'])){
    $fetch_institute_info = $db_handle->runQuery("select * from academy where academy_id = {$_GET['id']}");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>একাডেমিক তথ্য - খুলনা বিশ্ববিদ্যালয় স্কুল</title>
    <?php include ('include/css.php');?>
</head>
<body>

<!--header area start-->
<?php include ('include/header.php');?>
<!--header area end-->

<!--main body content start-->
<section style="margin-top: 15rem">
    <div class="container">
        <div class="uk-cover-container uk-height-medium">
            <img src="assets/images/img.png" alt="" uk-cover>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h3 class="uk-text-bold">
                    <?php
                    if($_GET['id'] == '1')
                        echo 'আচরণ বিধি';
                    elseif($_GET['id'] == '1')
                        echo 'একাডেমিক ক্যালেন্ডার';
                    elseif($_GET['id'] == '4')
                        echo 'ছুটির তালিকা';
                    elseif($_GET['id'] == '5')
                        echo 'ইউনিফর্ম';
                    elseif($_GET['id'] == '7')
                        echo 'অভিভাবক নির্দেশিকা';
                    elseif($_GET['id'] == '8')
                        echo 'শিক্ষার্থী উপস্থিতি তথ্য';
                    ?>
                </h3>
            </div>
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
