<?php
include "koneksi_ezzy.php";
session_start();
$user = $_POST['user'];
$password = $_POST['password'];
$getUserQuery = "select * from user where username='$user' and password='$password'";
$hasil     = mysqli_query($koneksi, $getUserQuery);
$dataUser  = mysqli_fetch_assoc($hasil);
$cek       = mysqli_num_rows($hasil);

if ($cek == 1) {
    $_SESSION['username']       = $user;
    $_SESSION['level']  = $dataUser['level'];

    // Mencari jenis user
    if ($user = 'username' || $password = 'password') {
        header("location:barang_zzy.php");
    } 
     else {
    $error = "User dan password salah";
    echo $error;
}
}

function prettyPrint($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
?>