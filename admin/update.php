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
            $data = $db_handle->runQuery("select * FROM `admin` WHERE admin_id = {$_SESSION['admin_id']}");
            unlink($data[0]['profile_image']);
            move_uploaded_file($file_tmp, "assets/img/teachers/" . $file_name);
            $image = "assets/img/teachers/" . $file_name;
           echo $query .= "`profile_image`='" . $image . "'";

        }
    }

    $data = $db_handle->insertQuery("update admin set " . $query . " where admin_id={$_SESSION['admin_id']}");
    if($data){
        echo "
        <script>
                document.cookie = 'alert = 3;';
                window.location.href='Admin_Profile';
                </script>";
    }
}


if(isset($_POST['update_bio'])){
    $bio = $db_handle->checkValue($_POST['bio']);
    $contact_no = $db_handle->checkValue($_POST['contact_no']);
    $education = $db_handle->checkValue($_POST['education']);
    $experience = $db_handle->checkValue($_POST['experience']);
    $subject = $db_handle->checkValue($_POST['subject']);

    $check = $db_handle->numRows("select teacher_info_id from teacher_info where admin_id = {$_SESSION['admin_id']}");
    if($check == 0){
        $insert = $db_handle->insertQuery("INSERT INTO `teacher_info`(`bio`, `education`, `experience`,`contact_no`,`admin_id`,`subject`) VALUES ('$bio','$education','$experience','$contact_no',{$_SESSION['admin_id']},'$subject')");
        if($insert){
            echo "
            <script>
            document.cookie = 'alert = 3';
            window.location.href='Admin_Profile';
</script>
            ";
        }
    } else{
        $update = $db_handle->insertQuery("UPDATE `teacher_info` SET `bio`='$bio',`education`='$education',`experience`='$experience',`contact_no` = '$contact_no',`subject` = '$subject' WHERE admin_id = {$_SESSION['admin_id']}");
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

if(isset($_POST['update_staff'])){
    $id = $db_handle->checkValue($_POST['id']);
    $name = $db_handle->checkValue($_POST['name']);
    $name = $db_handle->checkValue($_POST['position']);
    $join_date = $db_handle->checkValue($_POST['join_date']);
    $leave_date = $db_handle->checkValue($_POST['leave_date']);
    $present = $db_handle->checkValue($_POST['present']);
    $position = $db_handle->checkValue($_POST['position']);
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
            move_uploaded_file($file_tmp, "assets/img/stuffs/" . $file_name);
            $image = "assets/img/stuffs/" . $file_name;
            $query .= ",`image`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("UPDATE `staffs` SET `name`='$name',`position`='$position',`join_date`='$join_date',`leave_date`='$leave_date',`present`='$present',`updated_at`='$updated_at' " . $query . " WHERE `id` = '$id'");
    if ($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Staffs';
</script>";
    }
}


if (isset($_POST['update_extracurriculam'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $caption = $db_handle->checkValue($_POST['caption']);
    $description = $db_handle->checkValue($_POST['description']);
    $image = '';
    $query = '';
    $uploaded_file_names = []; // Array to store uploaded file names

    if (!empty($_FILES['image']['tmp_name'][0])) {
        // At least one image is selected

        $dataFileName = []; // Array to store the file names

        // Loop through each uploaded image file
        foreach ($_FILES['image']['tmp_name'] as $index => $uploadedFile) {
            $originalFileName = $_FILES['image']['name'][$index];
            $file_tmp = $_FILES['image']['tmp_name'][$index];
            $RandomAccountNumber = mt_rand(1, 99999);
            $dataFileName[] = 'assets/img/extracurriculam/' . $RandomAccountNumber . '_' . $originalFileName;
            move_uploaded_file($file_tmp, "assets/img/extracurriculam/" . $RandomAccountNumber . '_' . $originalFileName);
        }

        $databaseValue = implode(',', $dataFileName);
        $query .= ",`image`='" . $databaseValue . "'";
        $fetch_image = $db_handle->runQuery("select image from extracurricular WHERE eid={$id}");
        $img = explode(',', $fetch_image[0]['image']);
        foreach ($img as $i) {
            unlink($i);
        }
    }

    // Update the database with the new information
    $updated_at = date('Y-m-d H:i:s');
    $data = $db_handle->insertQuery("UPDATE `extracurricular` SET `image_caption`='$caption',`updated_at`='$updated_at',`description`='$description'" . $query . " WHERE `eid`='$id'");
    if ($data) {
        echo "<script>
            document.cookie = 'alert = 3';
            window.location.href='Extracurricular';
</script>";
    }
}


if(isset($_POST['update_prospectus'])){
    $file = '';
    if (!empty($_FILES['prospectus']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['prospectus']['name'];
        $file_size = $_FILES['prospectus']['size'];
        $file_tmp = $_FILES['prospectus']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "pdf") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `admission_info` WHERE id = '1'");
            unlink($data[0]['filelink']);
            move_uploaded_file($file_tmp, "assets/files/admission/" . $file_name);
            $file = "assets/files/admission/" . $file_name; // Ensure correct assignment here
        }
    }
    $data = $db_handle->insertQuery("UPDATE `admission_info` SET `filelink`='$file',`updated_at`='$updated_at' WHERE `id` = '1'");
    if ($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Admission';
</script>";
    }
}



if(isset($_POST['update_admission_rules'])){
    $file = '';
    if (!empty($_FILES['prospectus']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['prospectus']['name'];
        $file_size = $_FILES['prospectus']['size'];
        $file_tmp = $_FILES['prospectus']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "pdf") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `admission_info` WHERE id = '2'");
            unlink($data[0]['filelink']);
            move_uploaded_file($file_tmp, "assets/files/admission/" . $file_name);
            $file = "assets/files/admission/" . $file_name; // Ensure correct assignment here
        }
    }
    $data = $db_handle->insertQuery("UPDATE `admission_info` SET `filelink`='$file',`updated_at`='$updated_at' WHERE `id` = '2'");
    if ($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Admission';
</script>";
    }
}




if(isset($_POST['update_admission_syllabus'])){
    $file = '';
    if (!empty($_FILES['prospectus']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['prospectus']['name'];
        $file_size = $_FILES['prospectus']['size'];
        $file_tmp = $_FILES['prospectus']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "pdf") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `admission_info` WHERE id = '3'");
            unlink($data[0]['filelink']);
            move_uploaded_file($file_tmp, "assets/files/admission/" . $file_name);
            $file = "assets/files/admission/" . $file_name; // Ensure correct assignment here
        }
    }
    $data = $db_handle->insertQuery("UPDATE `admission_info` SET `filelink`='$file',`updated_at`='$updated_at' WHERE `id` = '3'");
    if ($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Admission';
</script>";
    }
}

if(isset($_POST['update_event'])){
    $id = $db_handle->checkValue($_POST['id']);
    $name = $db_handle->checkValue($_POST['name']);
    $start_date = $db_handle->checkValue($_POST['start_date']);
    $start_time = $db_handle->checkValue($_POST['start_time']);
    $end_date = $db_handle->checkValue($_POST['end_date']);
    $end_time = $db_handle->checkValue($_POST['end_time']);
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
            $data = $db_handle->runQuery("select * FROM `event` WHERE event_id = '$id'");
            unlink($data[0]['image']);
            move_uploaded_file($file_tmp, "assets/img/events/" . $file_name);
            $image = "assets/img/events/" . $file_name;
            $query .= ",`image`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("UPDATE `event` SET `event_name`='$name',`start_date`='$start_date',`start_time`='$start_time',`end_date`='$end_date',`end_time`='$end_time',`updated_at`='$updated_at'" . $query . " where event_id ='$id'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Events';
</script>";
    }
}


if(isset($_POST['update_notice'])){
    $id = $db_handle->checkValue($_POST['id']);
    $name = $db_handle->checkValue($_POST['name']);
    $issue_date = $db_handle->checkValue($_POST['issue_date']);
    $category = $db_handle->checkValue($_POST['category']);
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "pdf") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `notice_board` WHERE notice_id = '$id'");
            unlink($data[0]['image']);
            move_uploaded_file($file_tmp, "assets/img/notice/" . $file_name);
            $image = "assets/img/notice/" . $file_name;
            $query .= ",`file`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("UPDATE `notice_board` SET `notice_type`='$category',`title`='$name',`issue_date`='$issue_date',`updated_at`='$updated_at'" . $query . " where notice_id ='$id'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Notice';
</script>";
    }
}

if(isset($_POST['update_noc'])){
    $id = $db_handle->checkValue($_POST['id']);
    $name = $db_handle->checkValue($_POST['name']);
    $date = $db_handle->checkValue($_POST['date']);
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "pdf") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `noc` WHERE noc_id = '$id'");
            unlink($data[0]['image']);
            move_uploaded_file($file_tmp, "assets/img/noc/" . $file_name);
            $image = "assets/img/noc/" . $file_name;
            $query .= ",`file`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("UPDATE `noc` SET `title`='$name',`date`='$date', `updated_at` = '$updated_at'" . $query . " where noc_id ='$id'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='NOC';
</script>";
    }
}

if(isset($_POST['update_behaviour'])){
    $description = $db_handle->checkValue($_POST['description']);
    $data = $db_handle->insertQuery("update academy set description = '$description' where academy_id = '1'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Academy';
</script>";
    }
}

if(isset($_POST['update_calender'])){
    $description = $db_handle->checkValue($_POST['description_calender']);
    $data = $db_handle->insertQuery("update academy set description = '$description' where academy_id = '2'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Academy';
</script>";
    }
}

if(isset($_POST['update_routine'])){
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "pdf") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `academy` WHERE academy_id = '3'");
            unlink($data[0]['file']);
            move_uploaded_file($file_tmp, "assets/img/academy/" . $file_name);
            $image = "assets/img/academy/" . $file_name;
            $query .= "`file`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("UPDATE `academy` SET " . $query . " where academy_id ='3'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Academy';
</script>";
    }
}

if(isset($_POST['update_holiday'])){
    $description = $db_handle->checkValue($_POST['description_holiday']);
    $data = $db_handle->insertQuery("update academy set description = '$description' where academy_id = '4'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Academy';
</script>";
    }
}

if(isset($_POST['update_uniform'])){
    $description = $db_handle->checkValue($_POST['description_unifrom']);
    $data = $db_handle->insertQuery("update academy set description = '$description' where academy_id = '5'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Academy';
</script>";
    }
}

if(isset($_POST['update_fees'])){
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "pdf") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `academy` WHERE academy_id = '6'");
            unlink($data[0]['file']);
            move_uploaded_file($file_tmp, "assets/img/academy/" . $file_name);
            $image = "assets/img/academy/" . $file_name;
            $query .= "`file`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("UPDATE `academy` SET " . $query . " where academy_id ='6'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Academy';
</script>";
    }
}

if(isset($_POST['update_parents'])){
    $description = $db_handle->checkValue($_POST['description_parents']);
    $data = $db_handle->insertQuery("update academy set description = '$description' where academy_id = '7'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Academy';
</script>";
    }
}

if(isset($_POST['update_attendance'])){
    $description = $db_handle->checkValue($_POST['description_attendance']);
    $data = $db_handle->insertQuery("update academy set description = '$description' where academy_id = '8'");
    if($data){
        echo "
        <script>
            document.cookie = 'alert = 3';
            window.location.href='Academy';
</script>";
    }
}