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
    <?php include ('include/css.php');?>
</head>
<body>

<!--header area start-->
<?php include ('include/header.php');?>
<!--header area end-->

<!--main body content start-->
<section style="margin-top: 20rem">
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 col-lg-4 col-md-4">
                <img src="assets/images/about/2.png" style="border: 2px solid #f5831a;">
            </div>
            <div class="col-6 col-lg-8 col-md-8 my-auto">
                <p>
                    <b class="member-name">স্বর্ণকমল রায় </b><br/>
                    প্রধান শিক্ষক
                </p>
                <p class="member-description">যোগদানের তারিখঃ ১ জানুয়ারি, ২০২০</p>
                <p class="member-description">শিক্ষাগত যোগ্যতাঃ ***</p>
                <p class="member-description">মোবাইল নাম্বারঃ ০১৭১৭২৫০০৯৩</p>
            </div>
        </div>
        <div class="row mt-5">
            <p> সভ্যতার যে তিলোত্তমা রূপ আমরা দেখছি তা শুধু সম্ভব হয়েছে শিক্ষার উৎকর্ষতার কারণে। তাইতো যে সকল জাতি আজ
                উন্নত বলে সমাদৃত তাদের শিক্ষা ব্যবস্থা সমৃদ্ধ বলেই তারা উন্নত। তাইতো আজ সকলেই শিক্ষার মান উন্নত করার
                চেষ্টায় ব্রতী হয়েছে। কারণ মানসম্মত আদর্শ শিক্ষা স্বনির্ভর, মানবিক ও দক্ষ জাতি গঠনে সবচেয়ে বেশি ভুমিকা
                রাখে। খুলনা বিশ্ববিদ্যালয়ের "শিক্ষা "স্কুলের গবেষণা স্কুল হিসেবে পরিচালিত খুলনা বিশ্ববিদ্যালয় স্কুলটি
                আদর্শ মানসম্মত শিক্ষা নিশ্চিত করার লক্ষ্য ও উদ্দেশ্য নিয়ে যাত্রা শুরু করে। এই বিদ্যালয়ের রয়েছে দক্ষ
                পরিচালনা পর্ষদ যাঁদের সক্রিয় তত্ত্বাবধান এবং দিকনির্দেশনায় পরিচালিত হয় বিদ্যালয়ের কার্যক্রম।
                বিশ্ববিদ্যালয় প্রশাসনের নিয়ন্ত্রণে থাকার কারণে বিদ্যালয়ের কার্যক্রম স্বচ্ছতা এবং জবাবদিহিতার আওতায় থাকে।
                আমাদের বিদ্যালয়ে রয়েছে একঝাঁক দক্ষ ও মেধাবী শিক্ষক যাদের সম্মিলিত প্রয়াসে এই বিদ্যালয়ের উন্নয়ন লেখ
                উর্দ্ধমুখী। আধুনিক, মানসম্মত অভিজ্ঞতা নির্ভর যোগ্যতা ভিত্তিক শিক্ষা দানে তারা বদ্ধপরিকর। শিক্ষার্থীদের
                পড়াশোনার পাশাপাশি তাদের ভিতর সুপ্ত থাকা প্রতিভাকে জাগিয়ে তুলে সেগুলোর বিকাশ ঘটানোর জন্য আমাদের রয়েছে
                বিভিন্ন ক্লাব। আমাদের লক্ষ্য হোল শিক্ষার্থীদের পরিপূর্ণ রূপে শিক্ষিত করা যাতে করে তারা নিজের জন্য,
                সমাজের জন্য উপযোগী হয়ে উঠতে পারে।আমি আশাকরি সকলের সমন্বিত প্রচেষ্টায় আমরা লক্ষ্য অর্জনে সফল হবো।</p>
        </div>
    </div>
</section>

<!--main body content end-->

<?php include ('include/footer.php');?>

<?php include ('include/js.php');?>


</body>
</html>
