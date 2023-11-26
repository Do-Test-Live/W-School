<?php
session_start();
require_once("admin/config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

$fetch_institute_info = $db_handle->runQuery("select * from about_institution where id = '1'");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Khulna University School</title>
    <?php include ('include/css.php');?>
</head>
<body>

<!--header area start-->
<?php include ('include/header.php');?>
<!--header area end-->

<!--main body content start-->
<section style="margin-top: 15rem">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="uk-text-bold">পরিচালনা পর্ষদ তথ্য</h3>
            </div>
        </div>
    </div>
</section>
<section class="mt-5 mb-5">
    <div class="container">
        <div class="uk-child-width-1-3@m" uk-grid>
            <?php
            $fetch_members = $db_handle->runQuery("select * from governing_body");
            $no = $db_handle->numRows("select * from governing_body");
            for ($i=0; $i<$no; $i++){
                ?>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top p-3">
                            <img src="admin/<?php echo $fetch_members[$i]['image'];?>" width="1600" height="1000" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title"><?php echo $fetch_members[$i]['name'];?></h3>
                            <p>দায়িত্ব গ্রহনের তারিখঃ <?php $joinDateStr = $fetch_members[$i]['join_date'];
                                                $joinDate = new DateTime($joinDateStr);
                                                echo $formattedDate = date_format($joinDate, 'd M, Y');?></p>
                            <p>মোবাইলঃ <?php echo $fetch_members[$i]['contact_no'];?></p>
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

<?php include ('include/footer.php');?>

<?php include ('include/js.php');?>

<script>
    new DataTable('#example');
</script>
</body>
</html>
