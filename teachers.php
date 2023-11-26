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
        <div class="uk-child-width-1-4@m gap-4" uk-grid>
            <?php
            $fetch = $db_handle->runQuery("select * from admin, teacher_info where admin.admin_id = teacher_info.teacher_info_id");
            $no = $db_handle->numRows("select * from admin, teacher_info where admin.admin_id = teacher_info.teacher_info_id");
            for ($i=0; $i<$no; $i++){
                ?>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-circle" width="60" height="60" src="admin/<?php echo $fetch[$i]['profile_image'];?>" alt="Avatar">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom"><?php echo $fetch[$i]['admin_name'];?></h3>
                                <p class="uk-text-meta uk-margin-remove-top"><?php if($fetch[$i]['role'] == '0') echo 'প্রধান শিক্ষক'; else echo 'শিক্ষক';?></p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p><?php $bio = $fetch[$i]['bio'];
                            echo substr($bio, 0, 500);?>...</p>
                        <p>মোমাইল নম্বরঃ <?php echo $fetch[$i]['contact_no'];?></p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="#" class="uk-button uk-button-text">বিস্তারিত দেখুন</a>
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
