<?php 
include "koneksi_ezzy.php";

$a = $_POST['jumlah'];
$b = $_POST['id_barang'];
$c = $_POST['id_pelanggan'];
$d = $_POST['tgl_pinjam'];
$e = $_POST['tgl_pengembalian'];

$g = mysqli_query(
    $koneksi, "select * from barang_zzy where id_barang = '$b'"
);
$h = mysqli_fetch_array($g);
$i = $h['stok'];
$j = $i - $a;
$result = mysqli_query(
        $koneksi , "update barang_zzy set stok = '$j' where id_barang = '$b'"
    );
$peminjaman = mysqli_query(
    $koneksi , "insert into peminjaman_zzy values ('', '$b' , '$c' , '$d' , '$e' , '$a' , '')"
);
if ($result || $peminjaman){
    header ("location:barang_zzy.php");

}
?>