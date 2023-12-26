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
                <h3 class="uk-text-bold">NOC তালিকা</h3>
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
                <th>শিরোনাম</th>
                <th>তারিখ</th>
                <th>ডাউনলোড</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $fetch = $db_handle->runQuery("SELECT * FROM `noc` order by noc_id desc");
            $no = $db_handle->numRows("SELECT * FROM `noc` order by noc_id desc");
            for ($i=0; $i<$no; $i++){
                ?>
                <tr>
                    <td><?php echo $i+1;?></td>
                    <td><?php echo $fetch[$i]['title'];?></td>
                    <td><?php
                        $joinDateStr = $fetch[$i]['date'];
                        $joinDate = new DateTime($joinDateStr);
                        echo $formattedDate = date_format($joinDate, 'd M, Y');
                        ?></td>
                    <td><a href="admin/<?php echo $fetch[$i]['file'];?>" target="_blank" class="btn btn-primary">Download</a></td>
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
