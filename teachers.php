<?php
session_start();
require_once("admin/config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Khulna University School</title>
    <?php include('include/css.php'); ?>
    <style>
        p{
            font-size: 20px;
        }
    </style>
</head>
<body>

<!--header area start-->
<?php include('include/header.php'); ?>
<!--header area end-->

<!--main body content start-->
<section style="margin-top: 15rem">
    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col-12 text-center">
                <h3 class="uk-text-bold">শিক্ষকবৃন্দের তালিকা</h3>
            </div>
        </div>
        <div class="uk-child-width-1-4@m" uk-grid>
            <?php
            $fetch = $db_handle->runQuery("select * from admin, teacher_info where admin.admin_id = teacher_info.admin_id and admin.status='1';");
            $no = $db_handle->numRows("select * from admin, teacher_info where admin.admin_id = teacher_info.admin_id");
            for ($i=0; $i<$no; $i++){
                ?>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="admin/<?php echo $fetch[$i]['profile_image'];?>" width="1800" height="1200" alt="">
                            </div>
                            <div class="uk-card-body text-center">
                                <h3 class="uk-card-title"><?php echo $fetch[$i]['admin_name'];?></h3>
                                <p><?php
                                    if($fetch[$i]['role'] == '0')
                                        echo 'Head Master';
                                    else echo 'Assistant Teacher';
                                    ?></p>
                                <p>CN: <?php echo $fetch[$i]['contact_no'];?></p>
                            </div>
                        </div>
                    </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<!--main body content end-->

<?php include('include/footer.php'); ?>

<?php include('include/js.php'); ?>


</body>
</html>
