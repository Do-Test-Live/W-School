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
                    <?php
                }
                ?>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>