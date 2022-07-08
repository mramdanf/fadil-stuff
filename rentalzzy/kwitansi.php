<?php 
    include "koneksi_ezzy.php";
    $query = "select * from kwitansi_zz";
    $hasil = mysqli_query($koneksi , $query);
?>

<html >
<head>
  <link href="bs/css/bootstrap.min.css" rel="stylesheet">
  <title>kwitansi</title>
</head>
<a href = "insert-dosen.php" class="btn btn-primary">tambah data</a>
<body>
<a style="font-family: Arial;">
    <div class = "container">
        <h1><font face ='Lobster' color='red'>KWITANSI</font></h1>
        <hr>
        <table class="table table-dark table-striped">
            <thead class ="table-success" align='center'>
                <td>ID</td>
                <td>NAMA</td>
                <td>HARGA/HARI</td>
                <td>KETERANGAN</td>
                <td>STOK</td>
                <td>GAMBAR</td>
                <td></td>
            </thead>
            <tbody align='center'>
                <?php
                    while($lihat = mysqli_fetch_array($hasil)) {
                        echo "<tr>";
                        echo "<td>" . $lihat ['id_barang'] . "</td>";
                        echo "<td> <a href='detail-sepatu.php?kode=". $lihat['id_barang'] . "'>" .$lihat['nama'] .  "</a></td>";
                        echo "<td>" . $lihat ['harga'] . "</td>"; 
                        echo "<td>" . $lihat ['keterangan'] . "</td>";
                        echo "<td>" . $lihat ['stok'] . "</td>";
                        echo "<td> <img src = '" . $lihat ['gambar'] . "' width = '100' height='50'></td>";
                ?>
                        <td>
                            <a href ="edit-barang.php?kode=<?php echo $lihat['id_barang'] ?>" class = "btn btn-primary btn-sm">edit</a>
                            <a href="delet-dosen.php?kode=<?php echo $lihat['NID'] ?>" class = "btn btn-danger btn-sm">delete</a>
                        </td>
                <?php
                        echo "</tr>";
                    }
                ?>
        </tbody>
        </table>
</a>
</div>
<script src="bs/js/bootstrap.bundle.min.js"></script>
