<?php
session_start();
require_once("config/dbController.php");
$db_handle = new DBController();

if (isset($_GET['eventID'])) {
        $data = $db_handle->runQuery("select * FROM `event` WHERE event_id='{$_GET['eventID']}'");
        unlink($data[0]['image']);
        $db_handle->insertQuery("delete from event where event_id=" . $_GET['eventID'] . "");
    echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Events';
</script>";
}

if(isset($_GET['noticeId'])){
    $data = $db_handle->runQuery("select * FROM `notice_board` WHERE notice_id='{$_GET['noticeId']}'");
    unlink($data[0]['image']);
    $db_handle->insertQuery("delete from notice_board where notice_id=" . $_GET['noticeId'] . "");
    echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Notice';
</script>";
}


if(isset($_GET['noc_id'])){
    $data = $db_handle->runQuery("select * FROM `noc` WHERE noc_id='{$_GET['noc_id']}'");
    unlink($data[0]['image']);
    $db_handle->insertQuery("delete from noc where noc_id=" . $_GET['noc_id'] . "");
    echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='NOC';
</script>";
}
