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
        a{
            color: black;
            text-decoration: none;
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
                <h3 class="uk-text-bold mt-5">শিক্ষকবৃন্দের তালিকা</h3>
            </div>
        </div>
        <div class="uk-child-width-1-3@m" uk-grid>
            <?php
            $fetch = $db_handle->runQuery("select * from admin, teacher_info where admin.admin_id = teacher_info.admin_id and admin.status='1' order by admin.admin_id;");
            $no = $db_handle->numRows("select * from admin, teacher_info where admin.admin_id = teacher_info.admin_id order by admin.admin_id");
            for ($i=0; $i<$no; $i++){
                ?>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="admin/<?php echo $fetch[$i]['profile_image'];?>" width="1800" height="1200" alt="">
                        </div>
                        <div class="uk-card-body">
                            <div class="text-center">
                                <h3 class="uk-card-title"><?php echo $fetch[$i]['admin_name'];?></h3>
                                <p><?php
                                    if($fetch[$i]['role'] == '0')
                                        echo 'প্রধান শিক্ষক (' . $fetch[$i]['subject'].')';
                                    else echo 'সহকারি শিক্ষক (' . $fetch[$i]['subject'].')';
                                    ?></p>
                                <a style="font-size: 20px; font-weight:bold;" href="callto: +88<?php echo $fetch[$i]['contact_no'];?>"><?php echo $fetch[$i]['contact_no'];?></a></br>
                                <a href="mailto:<?php echo $fetch[$i]['admin_email'];?>"><span uk-icon="mail"></span> <?php echo $fetch[$i]['admin_email'];?></a>
                            </div>
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
