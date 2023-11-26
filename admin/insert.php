<?php
session_start();
require_once("config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$inserted_at= date("Y-m-d H:i:s");

if(isset($_POST['register'])){
    $fullName = $db_handle->checkValue($_POST['fullName']);
    $email = $db_handle->checkValue($_POST['email']);
    $password = $db_handle->checkValue($_POST['password']);

    $check_email = $db_handle->numRows("select admin_id from admin where admin_email = '$email'");

    if($check_email > '0'){
        echo "
        <script>
        document.cookie = 'alert = 5;';
        window.location.href = 'Register';
</script>
        ";
    } else{
        $keyword = 'SwarnaKamalRoy'; // Use the same keyword for encryption and decryption
        $method = 'aes-256-cbc';
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));

        $encrypted = openssl_encrypt($password, $method, $keyword, 0, $iv);
        $ivHex = bin2hex($iv);

// Store $encrypted and $ivHex in the database
        $inserted_at = date("Y-m-d H:i:s");
        $insert = $db_handle->insertQuery("INSERT INTO `admin`(`admin_name`, `admin_email`, `admin_password`, `pass_key`, `role`, `inserted_at`) VALUES ('$fullName','$email','$encrypted','$ivHex','1','$inserted_at')");
        if($insert){
            echo "
        <script>
        document.cookie = 'alert = 3;';
        window.location.href = 'Register';
</script>
        ";
        }
    }
}


if (isset($_POST['insert_governing_body'])){
    $name = $db_handle->checkValue($_POST['name']);
    $position = $db_handle->checkValue($_POST['position']);
    $join_date = $db_handle->checkValue($_POST['join_date']);
    $contact_no = $db_handle->checkValue($_POST['contact_no']);
    $email = $db_handle->checkValue($_POST['email']);
    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
        } else {
            move_uploaded_file($file_tmp, "assets/img/governing_body/" . $file_name);
            $image = "assets/img/governing_body/" . $file_name;
        }
    }

    $data = $db_handle->insertQuery("INSERT INTO `governing_body`(`name`, `image`, `position`, `contact_no`, `email`, `join_date`, `inserted_at`) VALUES ('$name','$image','$position','$contact_no','$email','$join_date','$inserted_at')");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Governing_Body';
</script>";
    }
}


if(isset($_POST['insert_chairman'])){
    $name = $db_handle->checkValue($_POST['name']);
    $join_date = $db_handle->checkValue($_POST['join_date']);
    $end_date = $db_handle->checkValue($_POST['end_date']);
    $present = $db_handle->checkValue($_POST['present']);
    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
        } else {
            move_uploaded_file($file_tmp, "assets/img/chairman/" . $file_name);
            $image = "assets/img/chairman/" . $file_name;
        }
    }

    $data = $db_handle->insertQuery("INSERT INTO `chairman_list`(`chairman_name`, `image`, `join_date`, `leave_date`,`present`) VALUES ('$name','$image','$join_date','$end_date','$present')");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Chairman-List';
        </script>";
    }
}


if(isset($_POST['insert_headmaster'])){
    $name = $db_handle->checkValue($_POST['name']);
    $join_date = $db_handle->checkValue($_POST['join_date']);
    $end_date = $db_handle->checkValue($_POST['end_date']);
    $present = $db_handle->checkValue($_POST['present']);
    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
        } else {
            move_uploaded_file($file_tmp, "assets/img/headmaster/" . $file_name);
            $image = "assets/img/headmaster/" . $file_name;
        }
    }

    $data = $db_handle->insertQuery("INSERT INTO `headmaster`(`headmaster_name`, `image`, `join_date`, `leave_date`,`present`) VALUES ('$name','$image','$join_date','$end_date','$present')");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Headmaster_List';
        </script>";
    }
}