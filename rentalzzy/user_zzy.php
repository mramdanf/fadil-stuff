<?php
include "koneksi_ezzy.php";
$query = "select * from user";
$hasil = mysqli_query($koneksi , $query);
$lihat = $hasil;
?>
<html>
<head>
    <link href = "bs/css/bootstrap.min.css" rel="stylesheet">
    <title>user terdaftar</title>
</head>
    <body>
<table class="table table-dark table-striped">
    <tr class="table-success">
        <td>id</td>
        <td>username</td>
        <td>level</td>    
        <td>password</td>
        </tr>
        <?php
        while($lihat = mysqli_fetch_array($hasil)){
    echo "<tr>";
    echo "<td>" . $lihat ['id'] . "</td>";
    echo "<td>" . $lihat ['username'] . "</td>";
    echo "<td>" . $lihat ['level'] . "</td>";
    echo "<td>" . $lihat ['password'] . "</td>";
        }?>
</table>
<scrift src="bs/js/bootstrap.bundle.min.js"></scrift>
</body>
</html>