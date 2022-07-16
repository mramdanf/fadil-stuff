<?php 
include "koneksi_ezzy.php";
$x = $_GET ['kode'];
$data = mysqli_query($koneksi,"select * from peminjaman_zzy where id_peminjaman='$x'");
$hasil = mysqli_fetch_array($data);
?>

<html>
<head>
    <link href ="bs/css/bootstarp.min.css "rel="stylesheet">
    <script src="https://kit.fontawesome.com/8d855ed8a0.js" crossorigin="anonymous"></script>
    <title>edit data peminjaman</title>
</head>
<body>
    <div class="container">
        <h1 align='center'>edit data peminjaman</h1>
        <hr>
        <form method="POST" action = "edit-peminjaman-proses.php" enctype="multipart/form-data">
                        <pre>
                            ID<input type="text" name="id_peminjaman" value="<?php echo $hasil['id_peminjaman']?>"><br>
                            ID BARANG<input type="text" name = "id_barang" value="<?php echo $hasil['id_barang']?>"><br>
                            ID PELANGGAN<input type="text" name= "id_pelanggan" value="<?php echo $hasil['id_pelanggan']?>"><br>
                            TANGGAL PINJAM<input type="text" name= "tgl_pinjam" value="<?php echo $hasil['tgl_pinjam']?>"><br>
                            TANGGAL PENGEMBALIAN<input type="text" name= "tgl_pengembalian" value="<?php echo $hasil['tgl_pengembalian']?>"><br>
                            JUMLAH<input type="text" name= "jumlah" value="<?php echo $hasil['jumlah']?>"><br>
                            STATUS<input type="text" name="status" value="<?php echo $hasil['status']?>"><br><br><br>
                            <br><br>
                            <input type = "submit"class = "btn btn-primary btn-sm">
                            <a href="peminjaman_zzy.php"><i class="fa-solid fa-angle-left">kembali</i></a>
                            
                        </pre>
        </form>
    </div>
    <scrift src="bs/js/bootstrap.bundle.min.js"></scrift>
</body>
</html>