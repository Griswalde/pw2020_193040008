<?php

// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url

$bk = query("SELECT * FROM buku WHERE id = $id")[0];
?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Document</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <div class="container">
       <div class="gambar">
           <img src="../assets/img/<?= $bk["img"]; ?>" alt="">

       </div>
   <div class="keterangan">
      <p><?= $bk["judul buku"]; ?></p>
      <p><?= $bk["penulis"]; ?></p>
      <p><?= $bk["genre"]; ?></p>
      <p><?= $bk["harga"]; ?></p>
   </div>

    <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
    </div>
  </body>
  </html>