<?php
session_start();
require_once("admin/config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$result = 0;
if(isset($_POST['submit_complain'])){
    $name = $db_handle->checkValue($_POST['name']);
    $contact_no = $db_handle->checkValue($_POST['contact_no']);
    $class = $db_handle->checkValue($_POST['class']);
    $description = $db_handle->checkValue($_POST['description']);
    $inserted_at= date("Y-m-d H:i:s");

    $insert = $db_handle->insertQuery("INSERT INTO `complain`(`name`, `contact_no`, `class`, `description`, `inserted_at`) VALUES ('$name','$contact_no','$class','$description','$inserted_at')");
    if($insert){
        $result = 1;
    }
}

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
    <?php
    if($result == 1){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>অভিনন্দন!</strong> আপনার অনুরোধটি সফল ভাবে গ্রহন করা হয়েছে।
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="uk-text-bold">অভিযোগ ফর্ম</h3>
            </div>
        </div>
    </div>
</section>
<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 col-md-4">
                <div>
                    <div class="uk-card uk-card-default uk-card-large uk-card-body">
                        <h3 class="uk-card-title">যোগাযোগঃ</h3>
                        <ul style="justify-content: unset;line-height: 2.5">
                            <li><a href="callto:+8802477734158" class="footer-link"><span uk-icon="receiver" class="uk-icon"></span> +8802477734158</a></li>
                            <li><a href="callto:+8801309136990" class="footer-link"><span uk-icon="receiver" class="uk-icon"></span> +8801309136990</a></li>
                            <li><a href="mailto:kus05ku@gmail.com" class="footer-link"><span uk-icon="mail" class="uk-icon"></span> kus05ku@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 col-md-8">
                <form class="uk-form-horizontal uk-margin-large" action="#" method="post">
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">নাম*</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="সম্পূর্ন নাম" name="name" required>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">মোবাইল নাম্বার*</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="মোবাইল নাম্বার" name="contact_no" required>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">শ্রেনী</label>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-horizontal-select" name="class">
                                <option>শ্রেনী নির্বাচন করুন</option>
                                <option value="৩য়">৩য় শ্রেণী</option>
                                <option value="৪র্থ">৪র্থ শ্রেণী</option>
                                <option value="৫ম">৫ম শ্রেণী</option>
                                <option value="৬ষ্ঠ">৬ষ্ঠ শ্রেণী</option>
                                <option value="৭ম">৭ম শ্রেণী</option>
                                <option value="৮ম">৮ম শ্রেণী</option>
                                <option value="৯ম">৯ম শ্রেণী</option>
                                <option value="১০ম">১০ম শ্রেণী</option>
                            </select>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">অভিযোগের বর্ননা*</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-textarea" name="description" required></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <button type="submit" name="submit_complain" class="uk-button uk-button-primary">দাখিল করুন</button>
                        </div>
                    </div>
                </form>
            </div>
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
