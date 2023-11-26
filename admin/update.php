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


if(isset($_POST['update_institution_info'])){
    $description = $db_handle->checkValue($_POST['description']);
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `about_institution` WHERE id = '1'");
            unlink($data[0]['image']);
            move_uploaded_file($file_tmp, "assets/img/banners/" . $file_name);
            $image = "assets/img/banners/" . $file_name;
            $query .= ",`image`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("update about_institution set description = '$description',updated_at = '$updated_at' " . $query . " where id ='1'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='About_Institution';
</script>";
    }
}

if(isset($_POST['update_aim'])){
    $description = $db_handle->checkValue($_POST['description']);
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `aim` WHERE id = '1'");
            unlink($data[0]['image']);
            move_uploaded_file($file_tmp, "assets/img/banners/" . $file_name);
            $image = "assets/img/banners/" . $file_name;
            $query .= ",`image`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("update aim set description = '$description',updated_at = '$updated_at' " . $query . " where id ='1'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Aim';
</script>";
    }
}

if(isset($_POST['update_history'])){
    $description = $db_handle->checkValue($_POST['description']);
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `history` WHERE id = '1'");
            unlink($data[0]['image']);
            move_uploaded_file($file_tmp, "assets/img/banners/" . $file_name);
            $image = "assets/img/banners/" . $file_name;
            $query .= ",`image`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("update history set description = '$description',updated_at = '$updated_at' " . $query . " where id ='1'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='History';
</script>";
    }
}

if(isset($_POST['update_structure'])){
    $description = $db_handle->checkValue($_POST['description']);
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `structure` WHERE id = '1'");
            unlink($data[0]['image']);
            move_uploaded_file($file_tmp, "assets/img/banners/" . $file_name);
            $image = "assets/img/banners/" . $file_name;
            $query .= ",`image`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("update structure set description = '$description',updated_at = '$updated_at' " . $query . " where id ='1'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='History';
</script>";
    }
}

if(isset($_POST['update_yearplan'])){
    $description = $db_handle->checkValue($_POST['description']);
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `yearly_plan` WHERE id = '1'");
            unlink($data[0]['image']);
            move_uploaded_file($file_tmp, "assets/img/banners/" . $file_name);
            $image = "assets/img/banners/" . $file_name;
            $query .= ",`image`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("update yearly_plan set description = '$description',updated_at = '$updated_at' " . $query . " where id ='1'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Year_Plan';
</script>";
    }
}

if(isset($_POST['update_governing_body'])){
    $id = $db_handle->checkValue($_POST['id']);
    $name = $db_handle->checkValue($_POST['name']);
    $position = $db_handle->checkValue($_POST['position']);
    $join_date = $db_handle->checkValue($_POST['join_date']);
    $contact_no = $db_handle->checkValue($_POST['contact_no']);
    $email = $db_handle->checkValue($_POST['email']);
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `governing_body` WHERE governing_body_id = '$id'");
            unlink($data[0]['image']);
            move_uploaded_file($file_tmp, "assets/img/governing_body/" . $file_name);
            $image = "assets/img/governing_body/" . $file_name;
            $query .= ",`image`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("update governing_body set `name`='$name',updated_at = '$updated_at',`position`='$position',`contact_no`='$contact_no',`email`='$email',`join_date`='$join_date' " . $query . " where governing_body_id ='$id'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Governing_Body';
</script>";
    }
}


if(isset($_POST['update_chairman'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $name = $db_handle->checkValue($_POST['name']);
    $join_date = $db_handle->checkValue($_POST['join_date']);
    $leave_date = $db_handle->checkValue($_POST['leave_date']);
    $present = $db_handle->checkValue($_POST['present']);
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `chairman_list` WHERE id = '$id'");
            unlink($data[0]['image']);
            move_uploaded_file($file_tmp, "assets/img/chairman/" . $file_name);
            $image = "assets/img/chairman/" . $file_name;
            $query .= ",`image`='" . $image . "'";
        }
    }
    $data = $db_handle->insertQuery("UPDATE `chairman_list` SET `chairman_name`='$name',`join_date`='$join_date',`leave_date`='$leave_date',`present`='$present' " . $query . " where id ='$id'");
    if ($data) {
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Chairman-List';
</script>";
    }
}



if(isset($_POST['update_headmaster'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $name = $db_handle->checkValue($_POST['name']);
    $join_date = $db_handle->checkValue($_POST['join_date']);
    $leave_date = $db_handle->checkValue($_POST['leave_date']);
    $present = $db_handle->checkValue($_POST['present']);
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `chairman_list` WHERE id = '$id'");
            unlink($data[0]['image']);
            move_uploaded_file($file_tmp, "assets/img/headmaster/" . $file_name);
            $image = "assets/img/headmaster/" . $file_name;
            $query .= ",`image`='" . $image . "'";
        }
    }
    $data = $db_handle->insertQuery("UPDATE `headmaster` SET `headmaster_name`='$name',`join_date`='$join_date',`leave_date`='$leave_date',`present`='$present' " . $query . " where id ='$id'");
    if ($data) {
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Headmaster_List';
</script>";
    }
}