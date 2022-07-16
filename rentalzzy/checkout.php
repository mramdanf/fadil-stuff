<?php 
include "koneksi_ezzy.php";
$x = $_GET ['kode'];
$data = mysqli_query($koneksi,"select * from barang_zzy where id_barang='$x'");
$hasil = mysqli_fetch_array($data);
?>

<html>
<head>
    <link href ="bs/css/bootstarp.min.css "rel="stylesheet">
    <title>checkout rental zzy</title>
</head>
<body>
    <div class="container">
        <h1 align = "center">jumlah yang di inginkan</h1>
        <hr>
                                <pre>
                                <form method="POST" action = "checkout-proses-barang.php" enctype="multipart/form-data">
                                id anda<input type="text" name="id_pelanggan"><br>
                                id<input type="text" name="id_barang" value="<?php echo $hasil['id_barang']?>"><br>
                                nama<input type="text" name = "nama" value="<?php echo $hasil['nama']?>"disabled><br>
                                harga/hari<input type="text" name= "harga" value="<?php echo $hasil['harga']?>"disabled><br>
                                tanggal pinjam<input type = "date" name = "tgl_pinjam"><br>
                                tanggal pengembalian<input type = "date" name = "tgl_pengembalian"><br>
                                keterangan<input type="text" name= "keterangan" value="<?php echo $hasil['keterangan']?>"disabled><br>                            
                                Foto <img scr = '"<?php $hasil ['gambar']?>"' width = '100' height='50' disable><br>
                                jumlah<input type="text" name= "jumlah"><br>
                                <input type="submit" value="simpan" class =" btn btn-succes">
                                </form>
                                </pre>
</div>
<a href = detail-checkout.php>ss bukti</a>

<scrift src="bs/js/bootstrap.bundle.min.js"></scrift>
</body>
</html>
