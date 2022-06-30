<?php 
include "koneksi_ezzy.php";
$x = $_GET ['kode'];
$data = mysqli_query($koneksi,"select * from barang_zzy where id_sepatu='$x'");
$hasil = mysqli_fetch_array($data);
?>

<html>
<head>
    <link href ="bs/css/bootstarp.min.css "rel="stylesheet">
    <title>edit data sepatu</title>
</head>
<body>
    <div class="container">
        <h1>edit data sepatu</h1>
        <hr>
        <form method="POST" action = "edit-proses-barang.php" enctype="multipart/form-data">
            id<input type="text" name="id_sepatu" value="<?php echo $hasil['id_sepatu']?>"><br>
            nama<input type="text" name = "nama_sepatu" value="<?php echo $hasil['nama_sepatu']?>"><br>
            warna<input type="text" name= "warna_sepatu" value="<?php echo $hasil['warna_sepatu']?>"><br>
            ukuran<input type="text" name= "ukuran" value="<?php echo $hasil['ukuran']?>"><br>
            harga<input type="text" name= "harga" value="<?php echo $hasil['harga']?>"><br>
            <input type="hidden" name="gambar1" value="<? echo $hasil ['gambar'];?>">
            Foto <input type="file" name="gambar"><br><br><br>
            <br><br>
            <input type="submit" value="rubah" class =" btn btn-succes">
            <a href="barang_zzy.php" class="btn btn-warning">batal</a>
        </form>
    </div>
    <scrift src="bs/js/bootstrap.bundle.min.js"></scrift>
</body>
</html>