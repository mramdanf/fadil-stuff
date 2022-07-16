<?php 
include "koneksi_ezzy.php";
?>
<html>
    <head><link href = "bs/css/bootstrap.min.css" rel="stylesheet">
</head>
<body><div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">barang yang di rent</h5>
    <p class="card-text"><?php echo $_SESSION['id']; ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</body>
<script src="bs/js/bootstrap.bundle.min.is"></script>
</html>