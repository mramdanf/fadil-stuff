<?php 
    include "koneksi_ezzy.php";
    include "blok-zzy.php";
    $query = "select * from peminjaman_zzy";
    $hasil = mysqli_query($koneksi , $query);
?>

<html>
<head>
  <link href="bs/css/bootstrap.min.css" rel="stylesheet">
  <title>tersedia</title>
</head>
<hr>
<?php if($_SESSION["level"] == 'admin'){ ?>
<a href = "insert-peminjaman.php" class="btn btn-primary">tambah data</a>
<?php } ?>
</hr>
<body>
<!DOCTYPE html>


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="main.css">
  <link href="style.css">
  <title>Document</title>
</head>

<body id="body-pd">
 <a style="font-family: Arial;">
    <div class = "container">
        <h1><font face ='Lobster' color='red'>PEMINJAMAN</font></h1>
        <hr>
        <table class="table table-dark table-striped">
            <thead class ="table-success" align='center'>
                <td>ID</td>
                <td>ID_BARANG</td>
                <td>ID_PELANGGAN</td>
                <td>TANGGAL PEMINJAMAN</td>
                <td>TANGGAL PENGEMBALIAN</td>
                <td>JUMLAH</td>
                <td>STATUS</td>
                <td></td>
            </thead>
            <tbody align='center'>
                <?php
                    while($lihat = mysqli_fetch_array($hasil)) {
                        echo "<tr>";
                        echo "<td>" . $lihat ['id_peminjaman'] . "</td>";
                        echo "<td>" . $lihat ['id_barang'] . "</td>";
                        echo "<td>" . $lihat ['id_pelanggan'] . "</td>"; 
                        echo "<td>" . $lihat ['tgl_pinjam'] . "</td>";
                        echo "<td>" . $lihat ['tgl_pengembalian'] . "</td>";
                        echo "<td>" . $lihat ['jumlah'] . "</td>";
                        echo "<td>" . $lihat ['status'] . "</td>";
                ?>
                        <td>
                <?php if ($_SESSION['level'] == 'admin'){ ?>
                        <a href = "edit-peminjaman.php?kode=<?php echo $lihat['id_peminjaman'] ?>" class = "btn btn-primary btn-sm">edit</a>
                        <a href = "delet-peminjaman.php?kode=<?php echo $lihat['id_peminjaman'] ?>" class = "btn btn-danger btn-sm">hapus</a>
                <?php } ?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="main.js"></script>

    
</body>
</html>