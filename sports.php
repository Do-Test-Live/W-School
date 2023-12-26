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
<section class="main-body">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="uk-text-bold mt-5">
                    <?php
                    if($id == 2)
                        echo 'ক্রীড়া কার্যক্রম';
                    if($id == 3)
                        echo 'সাংস্কৃতিক কার্যক্রম';
                    if($id == 1)
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
                        echo 'ইংলিশ ক্লাব';
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
        <div class="row">
            <div class="col-12">
                <p><?php
                    $fetch = $db_handle->runQuery("select * from extracurricular where eid='$id' order by eid desc");
                    echo $fetch[0]['description'];?></p>
            </div>
        </div>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
            <?php
            $img = explode("," , $fetch[0]['image']);
            foreach ($img as $image){
                ?>
                <div>
                    <a class="uk-inline" href="admin/<?php echo $image;?>" data-caption="<?php echo $fetch[0]['image_caption'];?>">
                        <img src="admin/<?php echo $image;?>" width="1800" height="1200" alt="">
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
