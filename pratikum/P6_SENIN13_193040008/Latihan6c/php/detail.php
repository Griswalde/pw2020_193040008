<?php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

$i = query("SELECT * FROM buku WHERE id = $id")[0];
?>

<html>

<head>

  <title>Buku</title>



  <link rel="stylesheet" href="../css/style.css">

</head>

<body>
  <div class="container">
    <div class="gambar">
      <img src="../assets/img/<?= $i["img"]; ?>" alt="">
    </div>
    <div class="keterangan">
      <p><?= $i["judul buku"]; ?></p>
      <p><?= $i["penulis"]; ?></p>
      <p><?= $i["genre"]; ?></p>
      <p><?= $i["harga"]; ?></p>
    </div>


    <button class="tombol_kembali"> <a href="../index.php">Kembali</a> </button>
  </div>
</body>

</html>