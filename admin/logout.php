<?php
session_start();
$activity_id = $_SESSION['activity_id'];
require_once("config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

$inserted_at = date("Y-m-d H:i:s");

$end_activity = $db_handle->insertQuery("UPDATE `activity` SET `end_time`='$inserted_at' WHERE `activity_id` = '$activity_id'");


if($end_activity){
    session_unset();
    session_destroy();
    echo "
<script>
document.cookie = 'alert = 2;';
window.location.href = 'Login';
</script>
";
}