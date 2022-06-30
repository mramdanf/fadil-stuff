<?php
include "koneksi_ezzy.php";
$a = $_POST['id_sepatu'];
$b = $_POST['nama_sepatu'];
$c = $_POST['warna_sepatu'];
$d = $_POST['ukuran'];
$e = $_POST['harga'];
$f = $_POST['gambar'];

if(file_exists($_FILES['gambar']['tmp_name'])){
    $namafile = $_FILES ['gambar']['name'];
    $namasementara = $_FILES['gambar']['tmp_name'];
    $folder = "foto/";
    $hasil_upload = move_uploaded_file($namasementara , $folder . $namafile);
    $lokasi = $folder . $namafile;
    

mysqli_query($koneksi,"update barang_zzy set nama_sepatu='$b', warna_sepatu='$c' , ukuran='$d' , harga='$e' , gambar='$lokasi' where id_sepatu='$a'");
}else{
    mysqli_query($koneksi,"update barang_zzy set nama_sepatu='$b', warna_sepatu='$c' , ukuran='$d' , harga='$e' , gambar='$f' where id_sepatu='$a'");
}

header ("location:barang_zzy.php")
?>
