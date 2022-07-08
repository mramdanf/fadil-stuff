<?php 
include "koneksi_ezzy.php";
$x = $_GET ['kode'];
$data = mysqli_query($koneksi,"select * from barang_zzy where id_barang='$x'");
$hasil = mysqli_fetch_array($data);
?>

<html>
<head>
    <link href ="bs/css/bootstarp.min.css "rel="stylesheet">
    <script src="https://kit.fontawesome.com/8d855ed8a0.js" crossorigin="anonymous"></script>
    <title>edit data barang</title>
</head>
<body>
    <div class="container">
        <h1 align='center'>edit data barang</h1>
        <hr>
        <form method="POST" action = "edit-proses-barang.php" enctype="multipart/form-data">
                        <pre>
                            id<input type="text" name="id_barang" value="<?php echo $hasil['id_barang']?>"><br>
                            nama<input type="text" name = "nama" value="<?php echo $hasil['nama']?>"><br>
                            harga/hari<input type="text" name= "harga" value="<?php echo $hasil['harga']?>"><br>
                            keterangan<input type="text" name= "keterangan" value="<?php echo $hasil['keterangan']?>"><br>
                            stok<input type="text" name= "stok" value="<?php echo $hasil['stok']?>"><br>
                            <input type="hidden" name="gambar1" value="<?php echo $hasil ['gambar']?>">
                            Foto <input type="file" name="gambar"><br><br><br>
                            <br><br>
                            <input type = "submit"class = "btn btn-primary btn-sm">
                            <a href="barang_zzy.php"><i class="fa-solid fa-angle-left">kembali</i></a>
                            
                        </pre>
        </form>
    </div>
    <scrift src="bs/js/bootstrap.bundle.min.js"></scrift>
</body>
</html>