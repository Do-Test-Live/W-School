<header>
    <div class="container-fluid">
        <div class="row header-badge">
            <div class="col-12 col-lg-4 logo-holder">
                <a href="Home">
                    <img src="assets/images/logo.png" class="logo">
                </a>
            </div>
            <div class="col-8 d-none d-lg-block my-auto">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-end">
                        <ul style="list-style: none; padding: 0;">
                            <li class="header-right"><span uk-icon="receiver"></span> +8802477734158</li>
                            <li class="header-right"><span uk-icon="receiver"></span> 01309136990</li>
                            <li class="header-right"><span uk-icon="mail"></span> kus05ku@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav id="myNavbar" class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler ms-auto" data-bs-target="#navbarSupportedContent"
                        data-bs-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 fw-bold">
                        <li class="nav-item">
                            <a href="Home" class="nav-link"><i class="fa-solid fa-house-chimney"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                               role="button">
                                প্রতিষ্ঠান পরিচিতি
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="About-Institution">প্রতিষ্ঠান সম্পর্কে</a></li>
                                <li><a class="dropdown-item" href="Aim">লক্ষ্য ও উদ্দেশ্য</a></li>
                                <!--<li><a class="dropdown-item" href="History">ইতিহাস</a></li>-->
                                <li><a class="dropdown-item" href="Structure">ভৌত অবকাঠামো</a></li>
                                <!--<li><a class="dropdown-item" href="Yearly_Plan">বার্ষিক কর্ম পরিকল্পনা</a></li>-->
                                <li><a class="dropdown-item" href="Headmaster-Introduction">প্রধান শিক্ষক পরিচিতি</a></li>
                                <li><a class="dropdown-item" href="Gallery">স্কুল গ্যালারি</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                               role="button">
                                প্রশাসনিক তথ্য
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Chairman_Introduction">সভাপতির বাণী</a></li>
                                <li><a class="dropdown-item" href="Headmaster-Introduction">প্রধান শিক্ষকের বাণী</a></li>
                                <!--<li><a class="dropdown-item" href="Board-Member">পরিচালনা পর্ষদ তথ্য</a></li>
                                <li><a class="dropdown-item" href="Chairman_List">সভাপতির তালিকা</a></li>
                                <li><a class="dropdown-item" href="Headmaster_List">প্রধান শিক্ষকের তালিকা</a></li>-->
                                <li><a class="dropdown-item" href="NOC">NOC</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                               role="button">
                                শিক্ষক এবং কর্মচারী
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Teachers">শিক্ষকবৃন্দের তালিকা</a></li>
                                <li><a class="dropdown-item" href="Staffs">কর্মচারীদের তালিকা</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                               role="button">
                                একাডেমিক তথ্য
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Academy?id=1">আচরণ বিধি</a></li>
                                <li><a class="dropdown-item" href="Academy?id=2">একাডেমিক ক্যালেন্ডার</a></li>
                                <?php
                                $fetch_link = $db_handle->runQuery("select * from academy where academy_id = '3'");
                                ?>
                                <li><a class="dropdown-item" href="admin/<?php echo $fetch_link[0]['file'];?>" target="_blank">ক্লাস রুটিন</a></li>
                                <li><a class="dropdown-item" href="Academy?id=4">ছুটির তালিকা</a></li>
                                <li><a class="dropdown-item" href="Academy?id=5">ইউনিফর্ম</a></li>
                                <?php
                                $fetch_link2 = $db_handle->runQuery("select * from academy where academy_id = '6'");
                                ?>
                                <li><a class="dropdown-item" href="admin/<?php echo $fetch_link[0]['file'];?>" target="_blank">ফী সমূহ</a></li>
                                <li><a class="dropdown-item" href="Academy?id=7">অভিভাবক নির্দেশিকা </a></li>
                                <li><a class="dropdown-item" href="Academy?id=8">শিক্ষার্থী তথ্য</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                               role="button">
                                সহ পাঠ্যক্রম
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Extraxuricullam?id=2">ক্রীড়া কার্যক্রম</a></li>
                                <li><a class="dropdown-item" href="Extraxuricullam?id=3">সাংস্কৃতিক ক্লাব</a></li>
                                <li><a class="dropdown-item" href="Extraxuricullam?id=7">ডিবেটিং ক্লাব</a></li>
                                <li><a class="dropdown-item" href="Extraxuricullam?id=8">ইংলিশ ক্লাব</a></li>
                                <li><a class="dropdown-item" href="Extraxuricullam?id=9">বিজ্ঞান ক্লাব</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                               role="button">
                                ভর্তি সংক্রান্ত তথ্য
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                $prospectus = $db_handle->runQuery("select filelink from admission_info where id = '1'");
                                $admission_rules = $db_handle->runQuery("select filelink from admission_info where id = '2'");
                                $syllabus = $db_handle->runQuery("select filelink from admission_info where id = '3'");
                                $result = $db_handle->runQuery("select filelink from admission_info where id = '4'");
                                ?>
                                <li><a class="dropdown-item" href="admin/<?php echo $prospectus[0]['filelink'];?>" target="_blank">প্রস্পেক্টাস</a></li>
                                <li><a class="dropdown-item" href="admin/<?php echo $admission_rules[0]['filelink'];?>" target="_blank">ভর্তির নিয়ামাবলি</a></li>
                                <li><a class="dropdown-item" href="admin/<?php echo $syllabus[0]['filelink'];?>" target="_blank">ভর্তি পরিক্ষার সিলেবাস</a></li>
                                <li><a class="dropdown-item" href="admin/<?php echo $result[0]['filelink'];?>" target="_blank">ভর্তি পরিক্ষার ফলাফল</a></li>
                            </ul>
                        </li>
                        <!--<li class="nav-item dropdown">
                            <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                               role="button">
                                ফলাফল
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">অভ্যন্তরীণ ফলাফল</a></li>
                                <li><a class="dropdown-item" href="#">পাবলিক পরিক্ষার ফলাফল</a></li>
                                <li><a class="dropdown-item" href="#">বৃ্ত্তি পরিক্ষার ফলাফল</a></li>
                            </ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="Complain" class="nav-link">অভিযোগ বাক্স</a>
                        </li>
                    </ul><!--
                    <form class="d-flex" role="search">
                        <input aria-label="Search" class="form-control me-2" placeholder="Search" type="search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>-->
                </div>
            </div>
        </nav>
    </div>
</header>