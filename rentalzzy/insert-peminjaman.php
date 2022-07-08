<html>
<head>
    <link href ="bs/css/bootstarp.min.css "rel="stylesheet">
    <title>insert data dosen</title>
</head>
<body>
    <div class="container">
        <h1>TAMBAH KWITANSI</h1>
        <hr>
        <form method="POST" action = "insert-peminjaman-proses.php" enctype="multipart/form-data">
            ID<input type="text" name="id_peminjaman"><br>
            ID_BARANG<input type="text" name = "id_barang"><br>
            ID_PELANGGAN<input type="text" name= "id_peminjam"><br>
            TANGGAL PINJAMAN<input type="text" name="tgl_pinjam"><br>
            TANGGAL PENGEMBALIAN<input type="text" name = "tgl_pengembalian"><br>
            JUMLAH<input type="text" name = "jumlah"><br>
            <input type = "submit" name = "masukan">
</form>
</div>
<script src="bs/js/bootstrap.bundle.min.js"></script>
</body>
</html>
