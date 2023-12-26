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
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="uk-text-bold">কর্মচারীদের তালিকা</h3>
            </div>
        </div>
    </div>
</section>
<section class="mt-5 mb-5">
    <div class="container">
        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
                <th>ক্রমিক নাং</th>
                <th>নাম</th>
                <th>ছবি</th>
                <th>পদবী</th>
                <th>যোগদানের তারিখ</th>
                <th>দায়িত্ব ত্যাগের তারিখ</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $fetch = $db_handle->runQuery("SELECT * FROM `staffs`");
            $no = $db_handle->numRows("SELECT * FROM `staffs`");
            for ($i=0; $i<$no; $i++){
                ?>
                <tr>
                    <td><?php echo $i+1;?></td>
                    <td><?php echo $fetch[$i]['name'];?></td>
                    <td><img src="admin/<?php echo $fetch[$i]['image'];?>" height="50px" width="50px"/></td>
                    <td><?php echo $fetch[$i]['position'];?></td>
                    <td><?php
                        $joinDateStr = $fetch[$i]['join_date'];
                        $joinDate = new DateTime($joinDateStr);
                        echo $formattedDate = date_format($joinDate, 'd M, Y');
                        ?></td>
                    <td><?php
                        if($fetch[$i]['present'] == 'on'){
                            echo 'বর্তমানে কর্মরত।';
                        } else{
                            $joinDateStr = $fetch[$i]['leave_date'];
                            $joinDate = new DateTime($joinDateStr);
                            echo $formattedDate = date_format($joinDate, 'd M, Y');
                        }
                        ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</section>
<!--main body content end-->

<?php include('include/footer.php'); ?>

<?php include('include/js.php'); ?>

<script>
    new DataTable('#example');
</script>
</body>
</html>
