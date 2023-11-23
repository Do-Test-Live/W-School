<?php
session_start();
require_once("config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$updated_at = date("Y-m-d H:i:s");

if(!isset($_SESSION['admin_id'])){
    echo "
    <script>
    window.location.href = 'Login';
</script>
    ";
}



if(isset($_GET['id'])){
    $admin_id = $_GET['id'];
    $fetch_status = $db_handle->runQuery("select status from admin where admin_id = '$admin_id'");
    if($fetch_status[0]['status'] == 0)
        $status = 1;
    else
        $status = 0;

    $approve_admin = $db_handle->insertQuery("UPDATE `admin` SET `status`='$status',`updated_at`='$updated_at' WHERE `admin_id` = '$admin_id'");
    if($approve_admin){
        echo "
        <script>
        document.cookie = 'alert = 3;';
        window.location.href = 'Account_Approval';
</script>
        ";
    }
}

if(isset($_POST['update_profile_image'])){
    $image = 'Test Image';
    $query = '';
    echo "File Name: " . $_FILES['profile_image']['name'] . "<br>";
    echo "File Size: " . $_FILES['profile_image']['size'] . "<br>";
    echo "File Type: " . $_FILES['profile_image']['type'] . "<br>";
    echo "File Temp Name: " . $_FILES['profile_image']['tmp_name'] . "<br>";
    if (!empty($_FILES['profile_image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['profile_image']['name'];
        $file_size = $_FILES['profile_image']['size'];
        $file_tmp = $_FILES['profile_image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `admin` WHERE admin_id = {$_SESSION['admin_id']}'");
            unlink($data[0]['profile_image']);
            move_uploaded_file($file_tmp, "assets/img/teachers/" . $file_name);
            $image = "assets/img/teachers/" . $file_name;
            $query .= ",`profile_image`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("update admin set " . $query . " where admin_id={$_SESSION['admin_id']}");
    if($data){
        echo $image;
    }
    echo $image;
   /* echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Admin_Profile';
                </script>";*/
}


if(isset($_POST['update_bio'])){
    $bio = $db_handle->checkValue($_POST['bio']);
    $education = $db_handle->checkValue($_POST['education']);
    $experience = $db_handle->checkValue($_POST['experience']);

    $check = $db_handle->numRows("select teacher_info_id from teacher_info where teacher_info_id = {$_SESSION['admin_id']}");
    if($check == 0){
        $insert = $db_handle->insertQuery("INSERT INTO `teacher_info`(`bio`, `education`, `experience`) VALUES ('$bio','$education','$experience')");
        if($insert){
            echo "
            <script>
            document.cookie = 'alert = 3';
            window.location.href='Admin_Profile';
</script>
            ";
        }
    } else{
        $update = $db_handle->insertQuery("UPDATE `teacher_info` SET `bio`='$bio',`education`='$education',`experience`='$experience' WHERE teacher_info_id = {$_SESSION['admin_id']}");
        if($update){
            echo "
            <script>
            document.cookie = 'alert = 3';
            window.location.href='Admin_Profile';
</script>
            ";
        }
    }
}

if(isset($_POST['update_password'])){
    $old = $db_handle->checkValue($_POST['old']);
    $new = $db_handle->checkValue($_POST['new']);

    $select_admin = $db_handle->runQuery("SELECT * FROM admin WHERE admin_id = {$_SESSION['admin_id']} and status = '1'");
    $encryptedPassword = $select_admin[0]['admin_password'];
    $ivFromDatabase = hex2bin($select_admin[0]['pass_key']);
    $keyword = 'SwarnaKamalRoy';
    $method = 'aes-256-cbc';
    $decrypted = openssl_decrypt($encryptedPassword, $method, $keyword, 0, $ivFromDatabase);

    if($decrypted == $old){
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
        $encrypted = openssl_encrypt($new, $method, $keyword, 0, $iv);
        $ivHex = bin2hex($iv);
        $update = $db_handle->insertQuery("UPDATE `admin` SET `admin_password`='$encrypted',`pass_key`='$ivHex' WHERE `admin_id`");
        if($update){
            echo "
            <script>
            document.cookie = 'alert = 3';
            window.location.href='Logout';
</script>
            ";
        }

    } else{
        echo "
            <script>
            document.cookie = 'alert = 6';
            window.location.href='Admin_Profile';
</script>
            ";
    }
}