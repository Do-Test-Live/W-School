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
            window.location.href='Events';s
</script>";
}