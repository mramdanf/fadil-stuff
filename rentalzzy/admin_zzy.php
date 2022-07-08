<?php 
    include "koneksi_ezzy.php";
    $query = "select * from admin_zzy";
    $hasil = mysqli_query($koneksi , $query)
?>
<html>
  <head><link href="bs/css/bootstrap.min.css" rel="stylesheet"></head>
  <h1><marquee behavior='alternate'><font face='arial' color='blue'>ADMIN RENT ZZY</font></marquee></h1>
<body>
  <table class="table table-dark table-striped">
    <thead class = "table-success" align='center'>
        <td>ID</td>  
        <td>NAMA</td>
        <td>NO TELPON</td>
    <thead>
    <tbody align='center'>
        <?php
            while($lihat = mysqli_fetch_array($hasil)){
                echo "<tr>";
                echo "<td>" . $lihat['id_admin'] . "</td>";
                echo "<td>" . $lihat['nama'] . "</td>";
                echo "<td>" . $lihat['no_telp'] . "</td>";
            }
        ?>
    </tbody>
    <table>
    <script src="bs/js/bootstrap.bundle.min.js"></script>
</body>
</html>
