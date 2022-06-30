<?php 
include "koneksi.php";
$x = $_GET 'kode' ;

$data = mysqli_query ($koneksi, "select * from mahasiswa where nim='$X'");
$hasil = mysqli_fetch_array($data);
$a = $hasil['gambar'];
unlink["$a"];

mysqli_query($koneksi, "delete from mahasiswa where nim='$x'");
header("location:mahasiswa.php");