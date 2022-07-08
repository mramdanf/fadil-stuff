<html>
<head>
    <link href ="bs/css/bootstarp.min.css "rel="stylesheet">
    <title>insert data stok</title>
</head>
<body>
    <div class="container">
        <h1 align = "center">Tambah data sepatu</h1>
        <hr>
                                <pre>
                                <form method="POST" action = "insert-proses-barang.php" enctype="multipart/form-data">
                                    ID BARANG<input type="text" name= "id_barang"><br>
                                    NAMA<input type="text" name = "nama"><br>
                                    HARGA<input type="text" name="harga"><br>
                                    KETERANGAN<input type="text" name="keterangan"><br><br>
                                    STOK<input type = "text" name = "stok"><br>
                                    GAMBAR<input type="file" name="gambar"><br>
                                    <input type="submit" value="simpan" class =" btn btn-succes">
                                </form>
                                </pre>
</div>
<scrift src="bs/js/bootstrap.bundle.min.js"></scrift>
</body>
</html>
