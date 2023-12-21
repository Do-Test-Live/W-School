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

<section style="margin-top: 15rem;">
    <div class="container-fluid">
        <marquee class="marquee-slider">
            **** ২০২৪ শিক্ষাবর্ষে নবম শ্রেণিতে ছাত্র ভর্তি বিজ্ঞপ্তি **** ২০২৪ শিক্ষাবর্ষে ছাত্র ভর্তি বিজ্ঞপ্তি-সংশোধিত
            (তৃতীয় ও ষষ্ঠ ) **** অফিস আদেশ ( অ্যাকাডেমিক ক্যালেন্ডার পরিবর্তন প্রসঙ্গে) ****
        </marquee>

        <div class="carousel slide" id="carouselExampleCaptions">
            <div class="carousel-indicators">
                <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0"
                        data-bs-target="#carouselExampleCaptions" type="button"></button>
                <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleCaptions"
                        type="button"></button>
                <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleCaptions"
                        type="button"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img alt="..." class="d-block w-100" src="assets/images/banner/1.jpg">
                </div>
                <div class="carousel-item">
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
                                দক্ষিণ- পূর্ব বাংলার অন্যতম প্রাচীন ও ঐতিহ্যবাহী শিক্ষা প্রতিষ্ঠান ...
                                <a href="#" class="text-white">আরো পড়ুন</a>
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
                            দক্ষিণ- পূর্ব বাংলার অন্যতম প্রাচীন ও ঐতিহ্যবাহী শিক্ষা প্রতিষ্ঠান ফেনী সরকারী কলেজ
                            প্রতিষ্ঠার গোড়াপত্তন হয় ১৯১৮ সালে খান বাহাদুর বজলুল হকের নেতৃত্বে একটি ট্রাস্ট বোর্ড গঠনের
                            মাধ্যমে। কলেজের জম্ম- লগ্নে প্রথম গভর্ণিং বডির সদস্য ছিলেন মরহুম খান বাহাদুর আবদুল আজিজ,
                            মরহুম খান সাহেব মৌলভী বজলুল হক, মরহুম মৌলভী আব্দুল খালেক, মরহুম মৌলভী হাছান আলী, মরহুম মৌলভী
                            আবদুস সাত্তার, সর্বপ্রয়াত শ্রীরমণী মোহান গোস্বাামী, সর্বপ্রয়াত শ্রীগুরু দাস কর, শ্রীকালিজয়
                            চক্রবতী প্রমুখ। কমিটির প্রথম সভাপতি ছিলেন ফেনীর তখনকার মহকুমা প্রশাসক জনাব আকরামুজ্জামান খান
                            এবং প্রথম সেক্রেটারী ছিলেন মরহুম মৌলভী আব্দুল খালেক।
                        </p>
                        <p>
                            তাঁরা ফেনী হাই স্কুল ( বর্তমান ফেনী সরকারী পাইলট উচ্চ মাধ্যমিক বিদ্যালয়) কর্তৃপক্ষের থেকে
                            বার্ষিক এক টাকা চার আনা খাজনায় বর্তমান মূল কলা ভবনের জায়গাটা পত্তন নিয়ে কলেজ নির্মাণের কাজ
                            শুরু করেন। কলেজ প্রতিষ্ঠা লগ্নে কোলকাতা ও রেঙ্গুন প্রবাসী এ অঞ্চলের কর্মজীবী মানুষেরা কলেজ
                            স্থাপনের জন্য উদারহস্তে বিপুল অর্থ সাহায্য করেছিলেন।
                        </p>
                        <div class="row">
                            <div class="col-12 text-end">
                                <a class="btn mt-5 details-button" href="#">
                                    আরো পড়ুন
                                </a>
                            </div>
                        </div>
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
                                দক্ষিণ- পূর্ব বাংলার অন্যতম প্রাচীন ও ঐতিহ্যবাহী শিক্ষা প্রতিষ্ঠান ...
                                <a href="#" class="text-white">আরো পড়ুন</a>
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
                    <div class="col-12 ad-notice">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-10-2023
                                </button>
                                <p class="card-text mt-5">
                                    কলেজ ক্যাম্পাসে ছাত্রদের
                                    মোবাইল ব্যবহার প্রসঙ্গে-২০২৩<br/><br/>
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 ad-notice">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    ২০২৪ শিক্ষাবর্ষে নবম
                                    শ্রেণিতে ছাত্র ভর্তি বিজ্ঞপ্তি
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 ad-notice">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    জরুরি নোটিশ ( ছাত্রদের অভিনীত নাটক ‘ডাকঘর’ মঞ্চায়ন প্রসঙ্গে)
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 ad-notice">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    Test 1
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 ad-notice">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    Test 2
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 ad-notice">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    Test 3
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    একাদশ শ্রেণির ভর্তি ও
                                    প্রয়োজনীয় কাগজপত্র সংক্রান্ত নোটিশ
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    জনাব মোঃ ওসমান আলী এর অনাপত্তি সনদপত্র (NOC)
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    ঢাকা রেসিডেনসিয়াল মডেল কলেজে কর্মরত মো: মুরাদুজ্জামান আকন্দ
                                    এর পাসপোর্ট করার জন্য অনাপত্তি সনদ( NOC) প্রদান প্রসঙ্গে।
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    শিক্ষকদের জন্য ছয়তলা ভিত
                                    বিশিষ্ঠ আবাসিক ভবনের দরপত্র উন্মুক্তকরণ প্রসঙ্গে
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    অধ্যক্ষ মহোদয়ের সাথে শিক্ষক-কর্মকর্তা-কর্মচারী ও অন্যান্য সংশ্লিষ্ঠ
                                    ব্যক্তিবর্গের সাক্ষাৎকারের সময়সূচি-২০২৩
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    ২০২৩-২০২৪ শিক্ষাবর্ষে একাদশ
                                    শ্রেণিতে ভর্তির বিজ্ঞপ্তি
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    শিক্ষকদের আবাসিক ভবনের
                                    দরপত্র উন্মুক্তকরণের তারিখ স্থগিত প্রসঙ্গে
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    গাড়ী পার্কিং অনুমোদন
                                    প্রাপ্তের তালিকা ও পার্কিং স্থান
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-secondary position-absolute">
                                    10-12-2023
                                </button>
                                <p class="card-text mt-5">
                                    দরপত্র বিজ্ঞপ্তি (
                                    শিক্ষকদের জন্য ৬তলা আবাসিক ভবন নির্মাণ )
                                </p>
                                <div class="text-end">
                                    <a href="#" class="marquee-slider">
                                        আরো পড়ুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
