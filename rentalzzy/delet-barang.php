<?php 
include "koneksi_ezzy.php";
$x = $_GET ['kode'];
mysqli_query($koneksi , "delete from barang_zzy where id_barang='$x'");
header("location:barang_zzy.php")
?>