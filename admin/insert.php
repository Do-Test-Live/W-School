<?php
session_start();
require_once("config/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

if(isset($_POST['register'])){
    $fullName = $db_handle->checkValue($_POST['fullName']);
    $email = $db_handle->checkValue($_POST['email']);
    $password = $db_handle->checkValue($_POST['password']);
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
        document.cookie = 'alert = 4;';
        window.location.href = 'Register';
</script>
        ";
    }
}