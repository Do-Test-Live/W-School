<?php
session_start();
require_once("admin/config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

$id = $_GET['id'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Khulna University School</title>
    <?php include ('include/css.php');?>
    <style>
        .fixed-top{
            z-index: 1 !important;
        }
    </style>
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
                <h3 class="uk-text-bold">
                    <?php
                    if($id == 1)
                        echo 'ক্রীড়া কার্যক্রম';
                    if($id == 2)
                        echo 'সাংস্কৃতিক কার্যক্রম';
                    if($id == 3)
                        echo 'স্কাউটস';
                    if($id == 4)
                        echo 'রেড ক্রিসেন্ট';
                    if($id == 5)
                        echo 'শিক্ষা সফর';
                    if($id == 6)
                        echo 'স্টুডেন্ট ক্যাবিনেট';
                    if($id == 7)
                        echo 'ডিবেটিং ক্লাব';
                    if($id == 8)
                        echo 'ল্যাংগুয়েজ ক্লাব';
                    if($id == 9)
                        echo 'বিজ্ঞান মেলা';
                    ?>
                </h3>
            </div>
        </div>
    </div>
</section>
<section class="mt-5 mb-5">
    <div class="container">
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
            <?php
            $fetch = $db_handle->runQuery("select * from extracurricular where eid='1' order by eid desc");
            $no = $db_handle->numRows("select * from extracurricular where eid='1' order by eid desc");
            for ($i=0; $i<$no; $i++){
                ?>
                <div>
                    <a class="uk-inline" href="admin/<?php echo $fetch[$i]['image'];?>" data-caption="<?php echo $fetch[$i]['image_caption'];?>">
                        <img src="admin/<?php echo $fetch[$i]['image'];?>" width="1800" height="1200" alt="">
                    </a>
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


</body>
</html>
