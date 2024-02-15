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
<section class="main-body">
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 col-lg-4 col-md-4">
                <img src="assets/images/about/1.png" style="border: 2px solid #f5831a;">
            </div>
            <div class="col-6 col-lg-8 col-md-8 my-auto">
                <p>
                    <b class="member-name">মোসাঃ তছলিমা খাতুন</b><br/>
                    সভাপতি
                </p>
                <p class="member-description">যোগদানের তারিখঃ ***</p>
                <p class="member-description">শিক্ষাগত যোগ্যতাঃ ***</p>
                <p class="member-description">মোবাইল নাম্বারঃ ***</p>
            </div>
        </div>
        <div class="row mt-5">
            <p>পৃথিবীতে যখন থেকে মানুষের পদচারণা তখন থেকেই মানুষ প্রত্যক্ষ এবং পরোক্ষভাবে শিক্ষা গ্রহণ করে আসছে। সভ্যতার
                ক্রমবিবর্তনের সাথে সাথে শিক্ষা যখন প্রাতিষ্ঠানিক রূপ লাভ করে তখন থেকেই বিদ্যালয়ের ভুমিকা গুরুত্বপূর্ণ
                হয়ে উঠেছে। এই বিদ্যালয়ই শিক্ষা দান বা বিস্তারের কেন্দ্রবিন্দু। শিক্ষা সম্পর্কে পুরাতন অনেক ধারণা
                পরিবর্তিত হয়েছে এবং যুগ পরিবর্তনের সাথে সাথে শিক্ষাদানের পদ্ধতিরও পরিবর্তন হয়েছে। এসকল বিষয় বিবেচনা করে
                এবং মানসম্মত শিক্ষা নিশ্চিত করার বাসনা নিয়ে যাত্রা শুরু হয় খুলনা বিশ্ববিদ্যালয় স্কুলের। এই স্কুলটি
                বিশ্ববিদ্যালয়ের 'শিক্ষা স্কুল' এর ল্যাবরেটরি স্কুল হিসেবে পরিচালিত। আমাদের লক্ষ্য হলো আধুনিক,
                মানসম্মত,যুগোপযোগী, অভিজ্ঞতা নির্ভর শিক্ষা নিশ্চিত করে শিক্ষার্থীদের আদর্শ,দক্ষ,মানবিক বৈশ্বিক নাগরিক
                হিসেবে গড়ে ওঠার ভিত্তি তৈরি করা এবং উচ্চতর শিক্ষালাভের আকাঙ্খার বীজ বপন করা। যেহেতু আমাদের বিদ্যালয়টি
                শিক্ষা স্কুলের আওতাধীন সেজন্য আমরা চেষ্টা করি এই ডিসিপ্লিনের শিক্ষকবৃন্দ এবং শিক্ষার্থীদের গবেষণালব্ধ
                জ্ঞান এবং প্রজ্ঞাকে কাজে লাগিয়ে খুলনা বিশ্ববিদ্যালয় স্কুলটিকে একটি আদর্শ শিক্ষা বান্ধব প্রতিষ্ঠানে
                উন্নীত করতে। আমি বিশ্বাস করি আমাদের শিক্ষকমণ্ডলী,শিক্ষার্থী এবং অভিভাবকগণের সমন্বিত প্রচেষ্টায় আমরা
                অভীষ্ট অর্জনে সফল হবো।</p>
        </div>
    </div>
</section>

<!--main body content end-->

<?php include('include/footer.php'); ?>

<?php include('include/js.php'); ?>


</body>
</html>
