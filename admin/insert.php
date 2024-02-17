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

if(isset($_POST['insert_stuff'])){
    $name = $db_handle->checkValue($_POST['name']);
    $join_date = $db_handle->checkValue($_POST['join_date']);
    $end_date = $db_handle->checkValue($_POST['end_date']);
    $present = $db_handle->checkValue($_POST['present']);
    $position = $db_handle->checkValue($_POST['position']);
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
            move_uploaded_file($file_tmp, "assets/img/stuffs/" . $file_name);
            $image = "assets/img/stuffs/" . $file_name;
        }
    }

    $data = $db_handle->insertQuery("INSERT INTO `staffs`(`image`, `name`, `position`, `join_date`, `leave_date`, `inserted_at`,`present`) VALUES ('$image','$name','$position','$join_date','$end_date','$inserted_at','$present')");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Stuffs';
        </script>";
    }
}

if(isset($_POST['insert_extracurriculam'])){
    $caption = $db_handle->checkValue($_POST['caption']);
    $page = $db_handle->checkValue($_POST['page']);

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
            move_uploaded_file($file_tmp, "assets/img/extracurriculam/" . $file_name);
            $image = "assets/img/extracurriculam/" . $file_name;
        }
    }

    $data = $db_handle->insertQuery("INSERT INTO `extracurricular`(`image`, `image_caption`, `page`, `inserted_at`) VALUES ('$image','$caption','$page','$inserted_at')");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Extracurricular';
        </script>";
    }
}

if (isset($_POST['insert_event_data'])){
    $name = $db_handle->checkValue($_POST['name']);
    $start_date = $db_handle->checkValue($_POST['start_date']);
    $start_time = $db_handle->checkValue($_POST['start_time']);
    $end_date = $db_handle->checkValue($_POST['end_date']);
    $end_time = $db_handle->checkValue($_POST['end_time']);
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
            move_uploaded_file($file_tmp, "assets/img/events/" . $file_name);
            $image = "assets/img/events/" . $file_name;
        }
    }

    $data = $db_handle->insertQuery("INSERT INTO `event`(`event_name`, `image`, `start_date`, `start_time`, `end_date`, `end_time`, `inserted_at`) 
VALUES ('$name','$image','$start_date','$start_time','$end_date','$end_time','$inserted_at')");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Events';s
</script>";
    }
}

if(isset($_POST['insert_notice'])){
    $name = $db_handle->checkValue($_POST['name']);
    $issue_date = $db_handle->checkValue($_POST['issue_date']);
    $category = $db_handle->checkValue($_POST['category']);
    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "pdf") {
            $image = '';
        } else {
            move_uploaded_file($file_tmp, "assets/img/notice/" . $file_name);
            $image = "assets/img/notice/" . $file_name;
        }
    }
    $data = $db_handle->insertQuery("INSERT INTO `notice_board`(`notice_type`, `title`, `issue_date`, `file`, `inserted_at`) VALUES ('$category','$name','$issue_date','$image','$inserted_at')");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Notice';
</script>";
    }
}

if(isset($_POST['insert_noc'])){
    $name = $db_handle->checkValue($_POST['name']);
    $date = $db_handle->checkValue($_POST['date']);
    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "pdf") {
            $image = '';
        } else {
            move_uploaded_file($file_tmp, "assets/img/noc/" . $file_name);
            $image = "assets/img/noc/" . $file_name;
        }
    }
    $data = $db_handle->insertQuery("INSERT INTO `noc`(`title`, `file`, `date`, `inserted_at`) VALUES ('$name','$image','$date','$inserted_at')");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='NOC';
</script>";
    }
}

if(isset($_POST['gallery-image'])){
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
            move_uploaded_file($file_tmp, "assets/img/gallery/" . $file_name);
            $image = "assets/img/gallery/" . $file_name;
        }
    }
    $data = $db_handle->insertQuery("INSERT INTO `gallery` (`image`, `inserted_at`) VALUES ('$image','$inserted_at')");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Gallery';
</script>";
    }
}