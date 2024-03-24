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

    </style>
</head>
<body>

<!--header area start-->
<?php include ('include/header.php');?>
<!--header area end-->

<section class="main-body">
    <div class="container-fluid">
        <marquee class="marquee-slider">
            <?php
            $notice = $db_handle->runQuery("select * from notice_board order by notice_id desc limit 4");
            $no_notice = $db_handle->numRows("select * from notice_board order by notice_id desc limit 4");
            for ($i = 0; $i < $no_notice; $i++) {
                ?>
                <a href="admin/<?php echo $notice[$i]['file']; ?>" target="_blank"
                   style="text-decoration: none"><?php echo $notice[$i]['title']; ?></a> ***
                <?php
            }
            ?>
        </marquee>

        <div class="carousel slide" id="carouselExampleCaptions">
            <div class="carousel-inner">
                <?php
                $fetch_banner = $db_handle->runQuery("select * from main_banner");
                $no_fetch_banner = $db_handle->numRows("select * from main_banner");
                for ($i=0; $i<$no_fetch_banner; $i++){
                    ?>
                    <div class="carousel-item <?php if ($i == 0) echo 'active';?>">
                        <img alt="Khulna University School" class="d-block w-100" src="<?php echo $fetch_banner[$i]['file'];?>">
                    </div>
                    <?php
                }
                ?>
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
                                <b class="member-name">মোসাঃ তাছলিমা খাতুন</b><br/>
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
                    <div class="card-body" style="text-align: justify">
                        <h2 class="about-institution heading">
                            প্রতিষ্ঠান সম্পর্কে
                        </h2>
                        <p>
                            খুলনা বিশ্ববিদ্যালয় স্কুল খুলনা, দক্ষিণ বঙ্গের এক ঐতিহ্যবাহী বিদ্যাপীঠ। শিক্ষাপ্রতিষ্ঠান
                            হিসাবে ২০০৫ সাল থেকে শিক্ষা বিস্তারে অগ্রণী ভূমিকার স্বাক্ষর রেখে চলেছে। প্রতিষ্ঠানটি
                            শিক্ষার্থীদের শুধু পুঁথিগত বিদ্যা ও কাগজি সার্টিফিকেটের মধ্যে সীমাবদ্ধ রাখে না। পড়ালেখার
                            পাশাপাশি বিভিন্ন কো-কারিকুলাম এক্টিভিটিস এর মাধ্যমে শিক্ষার্থীদের সামাজিক ও নৈতিক মূল্যবোধের
                            জাগরণ ঘটানোর চেষ্টা করে চলেছে। বিদ্যালয়ের প্রতি প্রাক্তন ছাত্রদের রয়েছে অদম্য ভালোবাসা।
                            বিদ্যালয়ের বিভিন্ন দিবস উদ্যাপনে শিক্ষকদের পাশাপাশি থেকে কাজ করে চলেছে।
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
            <div class="col-lg-3 mt-lg-0 mb-3" id="content-slider2">
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
                        <div class="col-12 ad-notice ad-notice2">
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
                            <button class="btn btn-light" id="prev2"><i class="fa-solid fa-chevron-up"></i></button>
                            <button class="btn btn-light" id="next2"><i class="fa-solid fa-chevron-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-lg-0 mb-3" id="content-slider3">
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
                        <div class="col-12 ad-notice ad-notice3">
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
                            <button class="btn btn-light" id="prev3"><i class="fa-solid fa-chevron-up"></i></button>
                            <button class="btn btn-light" id="next3"><i class="fa-solid fa-chevron-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-lg-0 mb-3" id="content-slider4">
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
                        <div class="col-12 ad-notice ad-notice4">
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
                            <button class="btn btn-light" id="prev4"><i class="fa-solid fa-chevron-up"></i></button>
                            <button class="btn btn-light" id="next4"><i class="fa-solid fa-chevron-down"></i></button>
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
        <div class="row text-center">
            <div class="col-12">
                <h2 class="about-institution heading">স্কুল গ্যালারি</h2>
            </div>
        </div>
        <div class="row gallery">
            <?php
            $fetch_gallery = $db_handle->runQuery("select * from gallery order by id desc limit 8");
            $no_fetch_gallery = $db_handle->numRows("select * from gallery order by id desc limit 8");
            for ($i=0; $i < $no_fetch_gallery; $i++){
                ?>
                <div class="col-12 col-lg-3 col-md-3">
                    <img src="admin/<?php echo $fetch_gallery[$i]['image'];?>" class="img-fluid"
                         alt="gallery">
                </div>
                <?php
            }
            ?>
        </div>
        <div class="row text-center">
            <div class="col-12 mt-5">
                <a class="uk-button uk-button-primary" href="Gallery">আরও দেখুন</a>
            </div>
        </div>
    </div>
    <!-- Fullscreen image preview modal -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImg">
        <button id="prevBtn" class="prev" onclick="showPrevImage();">&#10094;</button>
        <button id="nextBtn" class="next" onclick="showNextImage()">&#10095;</button>

    </div>
</section>

<?php include ('include/footer.php');?>

<?php include ('include/js.php');?>

<script>
    // Get the modal
    var modal = document.getElementById("imageModal");

    // Get the image and insert it inside the modal
    var images = document.querySelectorAll('.gallery img');
    var modalImg = document.getElementById("modalImg");
    var currentImageIndex = 0;

    // Function to open the modal with the clicked image
    images.forEach(function(img, index){
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            currentImageIndex = index;
        }
    });

    // Function to close the modal
    var span = document.getElementsByClassName("close")[0];
    modal.onclick = function(event) {
        if (event.target == modal || event.target == span) {
            closeModal();
        }
    }

    // Function to close the modal
    function closeModal() {
        modal.style.display = "none";
    }

    // Function to show the next image
    function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        modalImg.src = images[currentImageIndex].src;
    }

    // Function to show the previous image
    function showPrevImage() {
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        modalImg.src = images[currentImageIndex].src;
    }



    // Keyboard navigation
    document.onkeydown = function(event) {
        event = event || window.event;
        if (modal.style.display === "block") {
            if (event.keyCode == '37') { // Left arrow key
                showPrevImage();
            } else if (event.keyCode == '39') { // Right arrow key
                showNextImage();
            } else if (event.keyCode == '27') { // Escape key
                closeModal();
            }
        }
    };

</script>
</body>
</html>
