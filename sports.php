<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Khulna University School</title>
    <?php include ('include/css.php');?>
    <style>
        .fixed-top{
            z-index: unset !important;
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
                <h3 class="uk-text-bold">ক্রীড়া কার্যক্রম</h3>
            </div>
        </div>
    </div>
</section>
<section class="mt-5 mb-5">
    <div class="container">
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
            <div>
                <a class="uk-inline" href="assets/images/banner/1.jpg" data-caption="Caption 1">
                    <img src="assets/images/banner/1.jpg" width="1800" height="1200" alt="">
                </a>
            </div>
            <div>
                <a class="uk-inline" href="assets/images/banner/2.jpg" data-caption="Caption 2">
                    <img src="assets/images/banner/2.jpg" width="1800" height="1200" alt="">
                </a>
            </div>
            <div>
                <a class="uk-inline" href="assets/images/banner/3.jpg" data-caption="Caption 3">
                    <img src="assets/images/banner/3.jpg" width="1800" height="1200" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<!--main body content end-->

<?php include ('include/footer.php');?>

<?php include ('include/js.php');?>


</body>
</html>
