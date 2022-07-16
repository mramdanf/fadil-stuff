<?php
include "koneksi_ezzy.php";
$a = $_POST ['id_peminjaman'];
$b = $_POST ['id_barang'];
$c = $_POST ['id_pelanggan'];
$d = $_POST ['tgl_pinjam'];
$e = $_POST ['tgl_pengembalian'];
$f = $_POST ['jumlah'];
$g = $_POST ['status'];
// if($a == 'id_peminjaman' || $b == 'id_barang' || $c == 'id_peminjam' || $d == 'tgl_pinjam' || $e == 'tgl_pengembalian' || $f == 'jumlah'){
//     mysqli_query($koneksi,"insert into peminjaman_zzy values ('$a','$b','$c', '$d' , '$e' , '$f' )"); 
//     echo $a = $_POST ['id_peminjaman'];
//     echo $b = $_POST ['id_barang'];
//     echo $c = $_POST ['id_peminjam'];
//     echo $d = $_POST ['tgl_pinjam'];
//     echo $e = $_POST ['tgl_pengembalian'];
//     echo $f = $_POST ['jumlah'];
// }
$result = mysqli_query(
    $koneksi, 
    "update peminjaman_zzy set id_barang = '$b' , id_pelanggan = '$c' , tgl_pinjam = '$d' , tgl_pengembalian = '$e' , 
    jumlah = '$f' , status = '$g' where id_peminjaman = '$a'");
if ($result) {
    header ("location:peminjaman_zzy.php");
} else {
    echo "query error: ".mysqli_error($koneksi);
}
?>
