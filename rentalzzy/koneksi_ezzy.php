<?php 
$alamat = 'localhost';
$namaDB = 'rental_zzy';
$user = 'root';
$pass = 'Ramdan!@&111';
$koneksi = mysqli_connect($alamat, $user , $pass , $namaDB);
if (!$koneksi){
    die ("koneksi gagal: " . mysqli_connect_error());
}
?>