<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

$i = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil Diubah!');
          document.location.href = admin.php;
          </script>";
  } else {
    echo "<script>
          alert('Data Gagal Diubah!');
          document.location.href = admin.php;
          </script>";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Ubah Data Buku</title>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-image: url(../issets/img/buku.jpg); background-position: -100px;">
  <div class="con" style="margin-left: 500px;">
    <h3 style="color: white;">Form Ubah Data Buku</h3>

    <div class="row">
      <div class="col-lg-6 col-md-8">
        <div class="thumbnail">
          <div class="caption">

            <form action="" method="POST">
              <ul>
                <li>
                  <label for="id">NO:</label>
                  <input type="text" name="id" id="id" required autofocus value="<?= $i['id'] ?>"><br><br>
                </li>
                <li>
                  <label for="gambar">Gambar :</label>
                  <input type="text" name="gambar" id="gambar" required value="<?= $i['img'] ?>"><br><br>
                </li>
                <li>
                  <label for="judul_buku">Judul Buku :</label>
                  <input type="text" name="judul_buku" id="judul_buku" required value="<?= $i['judul buku'] ?>"><br><br>
                </li>
                <li>
                  <label for="genre">genre :</label>
                  <select name="genre" id="genre" required>
                    <option value="">----------Pilih Genre Buku----------</option>
                    <option value="Fantasy" <?= $i['genre'] == 'Fantasy' ? 'selected' : '' ?>>Fantasy</option>
                    <option value="Comedy" <?= $i['genre'] == 'Comedy' ? 'selected' : '' ?>>Comedy</option>
                    <option value="Horror" <?= $i['genre'] == 'Horror' ? 'selected' : '' ?>>Horror</option>
                    <option value="Romance" <?= $i['genre'] == 'Romance' ? 'selected' : '' ?>>Romance</option>
                  </select>
                </li><br>
                <li>
                  <label for="harga">Harga Buku : Rp.</label>
                  <input type="text" name="harga" id="harga" required value="<?= $i['harga'] ?>"><br><br>
                </li><br> <br>
                <button type="submit" name="ubah">Ubah Data!</button>
                <button type="submit" class="submit">
                  <a href="../index.php">Kembali</a>
                </button>
              </ul>
            </form>
</body>

</html>