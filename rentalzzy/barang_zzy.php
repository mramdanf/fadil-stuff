
<?php 
    include "koneksi_ezzy.php";
    $query = "select * from barang_zzy";
    $hasil = mysqli_query($koneksi , $query);
?>

<html >
<head>
  <link href="bs/css/bootstrap.min.css" rel="stylesheet">
  <title>SEPATU</title>
</head>
<hr>
<a href = "insert-dosen.php" class="btn btn-primary">tambah data</a>
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
  <header class="header" id="header">
    <div class="header_toggle">
      <i class='bx bx-menu' id="header-toggle"></i>
    </div>
    <div class="header_img">
      <img src="https://i.imgur.com/hczKIze.jpg" alt="">
    </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div>
        <a href="#" class="nav_logo">
          <i class='bx bx-layer nav_logo-icon'></i>
          <span class="nav_logo-name">BBBootstrap</span>
        </a>
        <div class="nav_list">
          <a href="#" class="nav_link active">
            <i class='bx bx-grid-alt nav_icon'></i>
            <span class="nav_name">Dashboard</span>
          </a>
          <a href="#" class="nav_link">
            <i class='bx bx-user nav_icon'></i>
            <span class="nav_name">Users</span>
          </a>
          <a href="#" class="nav_link">
            <i class='bx bx-message-square-detail nav_icon'></i>
            <span class="nav_name">Messages</span>
          </a>
          <a href="#" class="nav_link">
            <i class='bx bx-bookmark nav_icon'></i>
            <span class="nav_name">Bookmark</span>
          </a>
          <a href="#" class="nav_link">
            <i class='bx bx-folder nav_icon'></i>
            <span class="nav_name">Files</span>
          </a>
          <a href="#" class="nav_link">
            <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
            <span class="nav_name">Stats</span>
          </a>
        </div>
      </div>
      <a href="#" class="nav_link">
        <i class='bx bx-log-out nav_icon'></i>
        <span class="nav_name">SignOut</span>
      </a>
    </nav>
  </div>


<a style="font-family: Arial;">
    <div class = "container">
        <h1><font face ='Lobster' color='red'>SEPATU</font></h1>
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
                        echo "<td>" . $lihat ['harga/hari'] . "</td>"; 
                        echo "<td>" . $lihat ['keterangan'] . "</td>";
                        echo "<td>" . $lihat ['stok'] . "</td>";
                        echo "<td> <img src = '" . $lihat ['gambar'] . "' width = '100' height='50'></td>";
                ?>
                        <td>
                            <a href ="edit-barang.php?kode=<?php echo $lihat['id_sepatu'] ?>" class = "btn btn-primary btn-sm">edit</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="main.js"></script>

    
</body>
</html>