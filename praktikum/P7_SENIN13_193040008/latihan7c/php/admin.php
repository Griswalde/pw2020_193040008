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
  <style>
    table {
      margin: auto;
      background-color: seagreen;
      font-family: arial;
    }

    img {
      border-radius: 20px;
    }

    .ubah {
      background-color: black;
      color: white;
      border-radius: 10px;
    }

    .hapus {
      background-color: maroon;
      color: white;
      border-radius: 10px;
    }

    .kembali {
      background-color: blueviolet;
      color: white;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <h1 class="head">ADMIN</h1>
  <div class="kotak">
    <div class="logout">
      <a href="logout.php">Logout</a>
    </div>
    <div class="add">
      <button><a href="tambah.php">Tambah Data</a></button>
    </div>
    <form action="" method="get">
      <input type="text" name="keyword" size="50" placeholder="Masukkan Keyword Di Pencarian..." autocomplete="off" autofocus>
      <button type="submit" name="cari">
        Cari!
      </button>
    </form>
    <table border="1" cellpadding="12" cellspacing="0">
      <tr>
      <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Genre</th>
        <th>Harga</th>
      </tr>
      <?php if (empty($result)) : ?>
        <tr>
          <td colspan="6">
            <h1>Data tidak ada!</h1>
          </td>
        </tr>
      <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($result as $i) : ?>
          <tr>
            <td><?= $i['id']; ?></td>
            <td>
              <a href="ubah.php?id=<?= $i['id']; ?>"><button class="ubah">Ubah</button></a>
              <a href="hapus.php?id=<?= $i['id']; ?>"><button class="hapus" onclick="return confirm('Hapus Data ?')">Hapus</button></a>
            </td>
            <td><img width="100px" src="../assets/img/<?= $i['img']; ?>"></td>
            <td><?= $i["judul buku"]; ?></td>
            <td><?= $i["penulis"]; ?></td>
            <td><?= $i["genre"]; ?></td>
            <td><?= $i["harga"]; ?></td>
          </tr>

        <?php endforeach; ?>
      <?php endif; ?>
      <tr>
        <td>
          <button class="kembali">
            <center><a href="../index.php">Kembali</a></center>
          </button>
        </td>
      </tr>
    </table>

</body>

</html>