<?php
include "koneksi_ezzy.php";
$a = $_POST['id_barang'];
$b = $_POST['nama'];
$c = $_POST['harga'];
$d = $_POST['keterangan'];
$e = $_POST['stok'];
$f = $_POST['gambar1'];
// echo $a.$b.$c.$d.$e.$f; untuk mengecek

if(file_exists($_FILES['gambar']['tmp_name'])){
    echo $b;
   

    $namafile = $_FILES ['gambar']['name'];
    $namasementara = $_FILES['gambar']['tmp_name'];
    $folder = "foto/";
    $hasil_upload = move_uploaded_file($namasementara , $folder . $namafile);
    $lokasi = $folder . $namafile;
    

mysqli_query($koneksi,"update barang_zzy set  nama='$b' , harga='$c' , keterangan='$d' , stok='$e' , gambar='$lokasi' where id_barang=$a");
}else{

    mysqli_query($koneksi,"update barang_zzy set  nama='$b' , harga='$c' , keterangan='$d' , stok='$e' , gambar='$f' where id_barang=$a");
}


header ("location:barang_zzy.php")
?>
