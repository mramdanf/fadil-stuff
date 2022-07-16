<?php 
include "koneksi.php";
$a = $_GET['kode'];
$query = "select * from dosen where NID='$a'";
$hasil = mysqli_query($koneksi, $query);
$lihat = mysqli_fetch_array($hasil);
?>
<html>
    <head><link href = "bs/css/bootstrap.min.css" rel="stylesheet"></head>
    <body>
        <div class="container">
            <h2>detail mahasiswa</h2>
            <hr>
            <div class="card" style="width : 18 rem;">
            <img src = "<?php echo $lihat['gambar']; ?> " class ="card-img-top">
            <div class = "card-body">
                <h2 class="card-title"><?php echo $lihat['id'];?></h2>
                <p class="card-title"><?php echo $lihat['jumlah'];?></p>

<a href = "#" class= "btn btn-primary">Go somewhere</a>
</div>
</div>
</div>
</body>
<script src="bs/js/bootstrap.bundle.min.is"></script>
</html>