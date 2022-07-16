<?php 
    include "koneksi_ezzy.php";
    $kodePeminjaman = $_GET ['kode'];

    $getPeminjaman = mysqli_query($koneksi , "select * from peminjaman_zzy where id_peminjaman='$kodePeminjaman'");
    $peminjaman = mysqli_fetch_assoc($getPeminjaman);
    $getPeminjamanRow = mysqli_num_rows($getPeminjaman);
    if ($getPeminjamanRow <= 0) {
        echo "Query get peminjaman gagal";
        exit();
    }

    $jumlahDipinjam = $peminjaman['jumlah'];
    $idBarang = $peminjaman['id_barang'];
    $updateStock = mysqli_query($koneksi , "update barang_zzy set stok = stok + '$jumlahDipinjam' where id_barang = '$idBarang'");
    $updateStockResult = mysqli_affected_rows($koneksi);
    
    if ($updateStockResult <= 0) {
        echo "Query pengembalian stok gagal";
        exit();
    }

    $deletePeminjaman = mysqli_query($koneksi , "delete from peminjaman_zzy where id_peminjaman='$kodePeminjaman'");
    $deletePeminjamanResult = mysqli_affected_rows($koneksi);
    if ($deletePeminjamanResult <= 0) {
        echo "Query delete peminjaman gagal";
        exit();
    }

    header("location:peminjaman_zzy.php");
?>