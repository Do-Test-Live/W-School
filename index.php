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
    <style>
        .card-body{
            min-height: 200px;
        }
    </style>
</head>
<body>

<!--header area start-->
<?php include ('include/header.php');?>
<!--header area end-->

<section style="margin-top: 15rem;">
    <div class="container-fluid">
        <marquee class="marquee-slider">
            **** ২০২৪ শিক্ষাবর্ষে নবম শ্রেণিতে ছাত্র ভর্তি বিজ্ঞপ্তি **** ২০২৪ শিক্ষাবর্ষে ছাত্র ভর্তি বিজ্ঞপ্তি-সংশোধিত
            (তৃতীয় ও ষষ্ঠ ) **** অফিস আদেশ ( অ্যাকাডেমিক ক্যালেন্ডার পরিবর্তন প্রসঙ্গে) ****
        </marquee>

        <div class="carousel slide" id="carouselExampleCaptions">
            <div class="carousel-indicators">
                <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleCaptions"
                        type="button"></button>
                <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleCaptions"
                        type="button"></button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img alt="..." class="d-block w-100" src="assets/images/banner/2.jpg">
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="assets/images/banner/3.jpg">
                </div>
            </div>
            <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleCaptions"
                    type="button">
                <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleCaptions"
                    type="button">
                <span aria-hidden="true" class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row pt-5 pb-5">
            <div class="col-lg-3 order-lg-0 order-1 mt-lg-0 mt-3">
                <div class="row">
                    <div class="col-12">
                            <img src="assets/images/about/1.png" width="100%"
                                 alt="">
                    </div>
                    <div class="col-12">
                        <div style="background: linear-gradient(0deg,#00afef,#00afef);color: white" class="p-3">
                            <p class="text-center">
                                <b class="member-name">তাসলিমা তারু </b><br/>
                                সভাপতি
                            </p>
                            <p class="text-center member-description">
                                পৃথিবীতে যখন থেকে মানুষের পদচারণা ...
                                <a href="Chairman_Introduction" class="text-white">আরো পড়ুন</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 order-0">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="about-institution heading">
                            প্রতিষ্ঠান সম্পর্কে
                        </h2>
                        <p>
                            খুলনা বিশ্ববিদ্যালয় স্কুল খুলনা, দক্ষিণ বঙ্গের এক ঐতিহ্যবাহী বিদ্যাপীঠ। শিক্ষাপ্রতিষ্ঠান
                            হিসাবে ২০০৫ সাল থেকে শিক্ষা বিস্তারে অগ্রণী ভূমিকার স্বাক্ষর রেখে চলেছে। প্রতিষ্ঠানটি
                            শিক্ষার্থীদের শুধু পুঁথিগত বিদ্যা ও কাগজি সার্টিফিকেটের মধ্যে সীমাবদ্ধ রাখে না। পড়ালেখার
                            পাশাপাশি বিভিন্ন কো-কারিকুলাম এক্টিভিটিস এর মাধ্যমে শিক্ষার্থীদের সামাজিক ও নৈতিক মূল্যবোধের
                            জাগরণ ঘটানোর চেষ্টা করে চলেছে। যার ফলস্বরূপ বিদ্যালয়ের প্রাক্তন ছাত্ররা আজ দেশের সেনাপ্রধান,
                            নাসার বিজ্ঞানী, বিশ্ববিদ্যালয়ের শিক্ষক, দেশ পরিচালনার রাজনৈতিক ব্যক্তিত্ব, কবি, সাহিত্যিক,
                            আইনজিবি, লেখক, দেশ ও দেশের বাহিরে বিভিন্ন প্রতিষ্ঠান ও সংগঠনের অন্যতম ব্যক্তি হিসেবে তাদের
                            দ্বায়িত্ব পালন করে চলেছেন। বিদ্যালয়ের প্রতি প্রাক্তন ছাত্রদের রয়েছে অদম্য ভালোবাসা।
                            করোনাকালীন সময় দুঃখী, অসহায়, অসুস্থ মানুষের পাশে থেকেছে। বিদ্যালয়ের বিভিন্ন দিবস উদ্যাপনে
                            শিক্ষকদের পাশাপাশি থেকে কাজ করে চলেছে।
                        </p>
                        <p>বছরের পর বছর ধরে,খুলনা বিশ্ববিদ্যালয় স্কুল ধারাবাহিকভাবে এমন ছাত্র তৈরি করেছে যারা তাদের
                            একাডেমিক সাধনায় পারদর্শী হয়েছে। আমাদের প্রাক্তন ছাত্রদের অনেকেই সম্মানজনক প্রতিষ্ঠানে
                            উচ্চশিক্ষা চালিয়েছেন এবং ব্যবসা, বিজ্ঞান সহ বিভিন্ন ক্ষেত্রে সফল ক্যারিয়ার তৈরি করেছেন।
                            যশোরের সাথে স্কুলের অধিভুক্তি নিশ্চিত করেছে যে আমাদের শিক্ষার্থীরা একটি শক্তিশালী একাডেমিক
                            ভিত্তি পেয়েছে যা তাদের উচ্চ শিক্ষা এবং এর বাইরের চ্যালেঞ্জগুলির জন্য প্রস্তুত করে।</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 order-lg-3 order-2 mt-lg-0 mt-3">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <img src="assets/images/about/2.png" width="100%"
                                 alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div style="background: linear-gradient(0deg,#00afef,#00afef);color: white" class="p-3">
                            <p class="text-center">
                                <b class="member-name">স্বর্ণকমল রায় </b><br/>
                                প্রধান শিক্ষক
                            </p>
                            <p class="text-center member-description">
                                সভ্যতার যে তিলোত্তমা রূপ আমরা দেখছি ...
                                <a href="Headmaster-Introduction" class="text-white">আরো পড়ুন</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 mt-lg-0 mb-3" id="content-slider">
                <div class="row">
                    <div class="col-12">
                        <div class="pt-2 pb-2 notice-header">
                            <h3 class="text-center text-white">Administrative Notice</h3>
                        </div>
                    </div>
                    <?php
                    $fetch_notice = $db_handle->runQuery("select * from notice_board where notice_type = 'Administrative Notice' order by notice_id desc");
                    $no = $db_handle->numRows("select * from notice_board where notice_type = 'Administrative Notice' order by notice_id desc");
                    for ($i = 0; $i < $no; $i++){
                        ?>
                        <div class="col-12 ad-notice">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-outline-secondary position-absolute">
                                        <?php
                                        $joinDateStr = $fetch_notice[$i]['issue_date'];
                                        $joinDate = new DateTime($joinDateStr);
                                        echo $formattedDate = date_format($joinDate, 'd M, Y');?>
                                    </button>
                                    <p class="card-text mt-5">
                                        <?php echo $fetch_notice[$i]['title'];?>
                                    </p>
                                    <div class="text-end">
                                        <a href="admin/<?php echo $fetch_notice[$i]['file'];?>" target="_blank" class="marquee-slider">
                                            আরো পড়ুন
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="col-12">
                        <div class="notice-header pt-3 pb-3 text-end pe-2">
                            <button class="btn btn-light" id="prevBtn"><i class="fa-solid fa-chevron-up"></i></button>
                            <button class="btn btn-light" id="nextBtn"><i class="fa-solid fa-chevron-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-lg-0 mb-3">
                <div class="row">
                    <div class="col-12">
                        <div class="notice-header pt-2 pb-2">
                            <h3 class="text-center text-white">Academic Notice</h3>
                        </div>
                    </div>
                    <?php
                    $fetch_notice = $db_handle->runQuery("select * from notice_board where notice_type = 'Academic Notice' order by notice_id desc");
                    $no = $db_handle->numRows("select * from notice_board where notice_type = 'Academic Notice' order by notice_id desc");
                    for ($i = 0; $i < $no; $i++){
                        ?>
                        <div class="col-12 ad-notice">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-outline-secondary position-absolute">
                                        <?php
                                        $joinDateStr = $fetch_notice[$i]['issue_date'];
                                        $joinDate = new DateTime($joinDateStr);
                                        echo $formattedDate = date_format($joinDate, 'd M, Y');?>
                                    </button>
                                    <p class="card-text mt-5">
                                        <?php echo $fetch_notice[$i]['title'];?>
                                    </p>
                                    <div class="text-end">
                                        <a href="admin/<?php echo $fetch_notice[$i]['file'];?>" target="_blank" class="marquee-slider">
                                            আরো পড়ুন
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="col-12">
                        <div class="notice-header pt-3 pb-3 text-end pe-2">
                            <button class="btn btn-light"><i class="fa-solid fa-chevron-up"></i></button>
                            <button class="btn btn-light"><i class="fa-solid fa-chevron-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-lg-0 mb-3">
                <div class="row">
                    <div class="col-12">
                        <div class="notice-header pt-2 pb-2">
                            <h3 class="text-center text-white">Examination/Result</h3>
                        </div>
                    </div>
                    <?php
                    $fetch_notice = $db_handle->runQuery("select * from notice_board where notice_type = 'Examination/Result' order by notice_id desc");
                    $no = $db_handle->numRows("select * from notice_board where notice_type = 'Examination/Result' order by notice_id desc");
                    for ($i = 0; $i < $no; $i++){
                        ?>
                        <div class="col-12 ad-notice">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-outline-secondary position-absolute">
                                        <?php
                                        $joinDateStr = $fetch_notice[$i]['issue_date'];
                                        $joinDate = new DateTime($joinDateStr);
                                        echo $formattedDate = date_format($joinDate, 'd M, Y');?>
                                    </button>
                                    <p class="card-text mt-5">
                                        <?php echo $fetch_notice[$i]['title'];?>
                                    </p>
                                    <div class="text-end">
                                        <a href="admin/<?php echo $fetch_notice[$i]['file'];?>" target="_blank" class="marquee-slider">
                                            আরো পড়ুন
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="col-12">
                        <div class="notice-header pt-3 pb-3 text-end pe-2">
                            <button class="btn btn-light"><i class="fa-solid fa-chevron-up"></i></button>
                            <button class="btn btn-light"><i class="fa-solid fa-chevron-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-lg-0 mb-3">
                <div class="row">
                    <div class="col-12">
                        <div class="notice-header pt-2 pb-2">
                            <h3 class="text-center text-white">Tuition Fees Notice</h3>
                        </div>
                    </div>
                    <?php
                    $fetch_notice = $db_handle->runQuery("select * from notice_board where notice_type = 'Tuition Fees Notice' order by notice_id desc");
                    $no = $db_handle->numRows("select * from notice_board where notice_type = 'Tuition Fees Notice' order by notice_id desc");
                    for ($i = 0; $i < $no; $i++){
                        ?>
                        <div class="col-12 ad-notice">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-outline-secondary position-absolute">
                                        <?php
                                        $joinDateStr = $fetch_notice[$i]['issue_date'];
                                        $joinDate = new DateTime($joinDateStr);
                                        echo $formattedDate = date_format($joinDate, 'd M, Y');?>
                                    </button>
                                    <p class="card-text mt-5">
                                        <?php echo $fetch_notice[$i]['title'];?>
                                    </p>
                                    <div class="text-end">
                                        <a href="admin/<?php echo $fetch_notice[$i]['file'];?>" target="_blank" class="marquee-slider">
                                            আরো পড়ুন
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="col-12">
                        <div class="notice-header pt-3 pb-3 text-end pe-2">
                            <button class="btn btn-light"><i class="fa-solid fa-chevron-up"></i></button>
                            <button class="btn btn-light"><i class="fa-solid fa-chevron-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="uk-slider-container-offset" uk-slider>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                        <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
                            <?php
                            $fetch = $db_handle->runQuery("select * from event order by event_id desc");
                            $no = $db_handle->numRows("select * from event order by event_id desc");
                            for ($i=0; $i < $no; $i++){
                                ?>
                                <li>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <img src="admin/<?php echo $fetch[$i]['image'];?>" alt="">
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title"><?php echo $fetch[$i]['event_name'];?></h3>
                                            <div class="row border mt-3">
                                                <div class="col-6 border-end text-center pt-3">
                                                    <p><?php
                                                        $startDateStr = $fetch[$i]['start_date'];
                                                        $startDate = new DateTime($startDateStr);
                                                        echo $formattedDate = date_format($startDate, 'd M, Y');
                                                        ?></p>
                                                </div>
                                                <div class="col-6 text-center pt-3">
                                                    <p><?php
                                                        $startTimeStr = $fetch[$i]['start_time'];
                                                        $startTime = new DateTime($startTimeStr);
                                                        echo $formattedTime = date_format($startTime, 'h:i A');
                                                        ?></p>
                                                </div>
                                            </div>
                                            <div class="row border mt-3">
                                                <div class="col-6 border-end text-center pt-3">
                                                    <p><?php
                                                        $endDateStr = $fetch[$i]['end_date'];
                                                        $endDate = new DateTime($endDateStr);
                                                        echo $formattedDate = date_format($endDate, 'd M, Y');
                                                        ?></p>
                                                </div>
                                                <div class="col-6 text-center pt-3">
                                                    <p><?php
                                                        $endTimeStr = $fetch[$i]['end_time'];
                                                        $endTime = new DateTime($endTimeStr);
                                                        echo $formattedTime = date_format($endTime, 'h:i A');
                                                        ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>

                        </ul>
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href
                           uk-slidenav-previous
                           uk-slider-item="previous" style="background: rgba(0,0,0,0.6)"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href
                           uk-slidenav-next
                           uk-slider-item="next" style="background: rgba(0,0,0,0.6)"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row gallery">
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/1.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/2.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/3.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/4.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/5.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/6.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/7.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/8.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/9.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/10.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/11.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/12.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/13.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/14.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/15.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/16.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/17.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/18.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/19.jpg" class="img-fluid"
                     alt="gallery">
            </div>
            <div class="col-12 col-lg-3 col-md-3">
                <img src="assets/images/slider/20.jpg" class="img-fluid"
                     alt="gallery">
            </div>
        </div>
    </div>
</section>

<?php include ('include/footer.php');?>

<?php include ('include/js.php');?>


</body>
</html>
