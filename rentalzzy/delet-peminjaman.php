<?php 
include "koneksi_ezzy.php";
$x = $_GET ['kode'];
    $barang = mysqli_query(
        $koneksi , "select * from barang_zzy where id_barang='$c'");
    $stok = mysqli_fetch_array($barang);
    $stok['stok'];
    $a = mysqli_query(
        $koneksi , "select * from peminjaman_zzy where id_peminjaman='$x'");
    $b = mysqli_fetch_array($a);
    $c = mysqli_fetch_array($a); // ngambil id barang
    $c['id_barang'];
    $d = $b['jumlah'];
    $hasil = $stok + $d;
    $tambah = mysqli_query(
        $koneksi , "update barang_zzy set stok = '$hasil' where id_barang = $c");
    $hapus = mysqli_query($koneksi , "delete from peminjaman_zzy where id_peminjaman='$x'");
    if ($tambah|| $hapus){
    header("location:peminjaman_zzy.php");
    }
?>