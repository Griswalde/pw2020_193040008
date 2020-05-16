<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil Ditambahkan!');
          document.location.href = admin.php;
          </script>";
  } else {
    echo "<script>
          alert('Data Gagal Ditambahkan!');
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
  <title>Form Tambah Data Buku</title>
</head>

<body>
  <h3>
    <center>Form Tambah Data Buku</center>
  </h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="id">NO:</label>
        <input type="text" name="id" id="id" required autofocus><br><br>
      </li>
      <li>
        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar" required><br><br>
      </li>
      <li>
        <label for="judul_buku">Judul Buku :</label>
        <input type="text" name="judul_buku" id="judul_buku" required><br><br>
      </li>
      <li>
        <label for="genre">genre :</label>
        <select name="genre" id="genre" required>
          <option value="">----------Pilih Genre Buku----------</option>
          <option value="Fantasy">Fantasy</option>
          <option value="Comedy">Comedy</option>
          <option value="Horror">Horror</option>
          <option value="Romance">Romance</option>
        </select>
      </li><br>
      <li>
        <label for="harga">harga : Rp.</label>
        <input type="text" name="harga" id="harga" required><br><br>
      </li><br> <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit" class="submit">
        <a href="../index.php">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>