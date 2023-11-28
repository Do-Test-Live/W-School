<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>
                <li>
                    <a href="Dashboard">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">ড্যাশবোর্ড</span>
                    </a>
                </li>
                <?php
                if($admin_details[0]['role'] == '0'){
                    ?>
                    <li>
                        <a href="Account_Approval">
                            <i data-feather="users"></i>
                            <span data-key="t-dashboard">একাউন্ট অনুমোদন</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="grid"></i>
                            <span data-key="t-apps">প্রতিষ্ঠান পরিচিতি</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="About_Institution">
                                    <i data-feather="monitor"></i>
                                    <span data-key="t-dashboard">প্রতিষ্ঠান সম্পর্কে</span>
                                </a>
                            </li>
                            <li>
                                <a href="Aim">
                                    <i data-feather="bookmark"></i>
                                    <span data-key="t-dashboard">লক্ষ্য ও উদ্দেশ্য</span>
                                </a>
                            </li>
                            <li>
                                <a href="History">
                                    <i data-feather="corner-up-left"></i>
                                    <span data-key="t-dashboard">ইতিহাস</span>
                                </a>
                            </li>
                            <li>
                                <a href="Structure">
                                    <i data-feather="feather"></i>
                                    <span data-key="t-dashboard">ভৌত অবকাঠামো</span>
                                </a>
                            </li>
                            <li>
                                <a href="Year_Plan">
                                    <i data-feather="share-2"></i>
                                    <span data-key="t-dashboard">বার্ষিক কর্ম পরিকল্পনা</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="sun"></i>
                            <span data-key="t-apps">প্রশাসনিক তথ্য</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="Governing_Body">
                                    <i data-feather="stop-circle"></i>
                                    <span data-key="t-dashboard">পরিচালনা পর্ষদ তথ্য</span>
                                </a>
                            </li>
                            <li>
                                <a href="Chairman-List">
                                    <i data-feather="user-plus"></i>
                                    <span data-key="t-dashboard">সভাপতির তালিকা</span>
                                </a>
                            </li>
                            <li>
                                <a href="Headmaster_List">
                                    <i data-feather="user-plus"></i>
                                    <span data-key="t-dashboard">প্রধান শিক্ষকদের তালিকা</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="airplay"></i>
                            <span data-key="t-apps">শিক্ষক এবং কর্মচারী</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="Staffs">
                                    <i data-feather="box"></i>
                                    <span data-key="t-dashboard">কর্মচারী তথ্য</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="Extracurricular">
                            <i data-feather="anchor"></i>
                            <span data-key="t-dashboard">সহ পাঠ্যক্রম</span>
                        </a>
                    </li>
                    <li>
                        <a href="Complains">
                            <i data-feather="alert-triangle"></i>
                            <span data-key="t-dashboard">অভিযোগ</span>
                        </a>
                    </li>
                    <li>
                        <a href="Activity">
                            <i data-feather="activity"></i>
                            <span data-key="t-dashboard">এ্যাকটিভিটি লগ</span>
                        </a>
                    </li>
                    <?php
                }
                ?>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>