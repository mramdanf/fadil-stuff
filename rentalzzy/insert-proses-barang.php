<?php
include "koneksi_ezzy.php";
$a = $_POST['id_barang'];
$b = $_POST['nama'];
$c = $_POST['harga'];
$d = $_POST['keterangan'];
$e = $_POST['stok'];
$f = $_POST['gambar'];
//echo $a.$b.$c.$d.$e.$f; untuk mengecek

if(file_exists($_FILES['gambar']['tmp_name'])){
    $namafile = $_FILES ['gambar']['name'];
    $namasementara = $_FILES['gambar']['tmp_name'];
    $folder = "foto/";
    $hasil_upload = move_uploaded_file($namasementara , $folder . $namafile);
    $lokasi = $folder . $namafile;
mysqli_query($koneksi,"insert into barang_zzy values ('$a' , '$b' , '$c' , '$d' , '$e' , '$lokasi')");
//echo $a.$b.$c.$d.$e.$f; 
}

header ("location:barang_zzy.php")
?>
