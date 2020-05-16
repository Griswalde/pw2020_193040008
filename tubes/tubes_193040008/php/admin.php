<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $result = query("SELECT * FROM buku WHERE
                        id LIKE '%$keyword%' OR
                        img LIKE '%$keyword%' OR
                        `judul buku` LIKE '%$keyword%' OR
                        penulis LIKE '%$keyword%' OR
                        genre LIKE '%$keyword%' 
                        ");

  // harusnya nama field gak boleh ada spasinya yang judul buku
} else {
  $result = query("SELECT * FROM buku");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body style="background-image: url(../image/tt.jpg);">
  <!-- awal navbar -->
  <nav class="navbar">
    <form class="navbar-form  navbar-left" action="" method="get">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="keyword" autocomplete="off" id="keyword">
      </div>
      <button type="submit" class="btn btn-default" name="cari" id="cari">Submit</button>
    </form>
    <div class="container-fluid  btn-primary">
      <!-- Brand and toggle get grouped for better mobile display -->
      <form class="navbar-form  navbar-right">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <button type="submit" class="btn btn-default"><a href="tambah.php">Tambah Data buku</a></button>
          <button type="submit" class="btn btn-default"><a href="logout.php">Log Out</a></button>
        </div><!-- /.container-fluid -->
      </form>
  </nav>
  <!-- akhir navbar -->
  <div class="container" id="container">

    <div class="contener" align="center">


      <div class="atur">
        <h3 style="margin: 50px; color: white;">Daftar Buku</h3>



        <table class="table table-bordered" style="color: black;">

          <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>judul buku</th>
            <th>Penulis</th>
            <th>Genre</th>
            <th>Harga</th>

          </tr>

          <?php if (empty($result)) : ?>
            <tr>
              <td colspan="6">data tidak ditemukan</td>
            </tr>
          <?php endif; ?>

          <?php $i = 1; ?>
          <?php foreach ($result as $s) : ?>
            <tr align="center">
              <td><?= $i++;  ?></td>
              <td><img src="../assets/img/<?= $s['img']; ?>" style="width: 50px; height: 50px;"></td>
              <td><?= $s['judul buku']; ?></td>
              <td><?= $s['penulis']; ?></td>
              <td><?= $s['genre']; ?></td>
              <td><?= $s['harga']; ?></td>
              <td>
                <a href="ubah.php?id=<?= $s['id']; ?>">Ubah</a> |
                <a href="Hapus.php?id=<?= $s['id']; ?>" onclick="return confirm('yakin!');">Hapus</a>
              </td>


            </tr>
          <?php endforeach; ?>
        </table>

      </div>
    </div>

  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="../js/script1.js"></script>

</body>

</html>