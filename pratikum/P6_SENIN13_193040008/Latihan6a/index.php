<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan query
$result = query("SELECT * FROM buku")
?>
<html>

<head>
  <title>Latihan 6 A</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h3>buku</h3>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Judul Buku</th>
      <th>Penulis</th>
      <th>Genre</th>
      <th>Harga</th>
    </tr>
    <?php foreach ($result as $i) { ?>
      <tr>
        <td><?= $i["id"]; ?></td>
        <td><img width="100px" src="assets/img/<?= $i['img']; ?>"></td>
        <td><?= $i["judul buku"]; ?></td>
        <td><?= $i["penulis"]; ?></td>
        <td><?= $i["genre"]; ?></td>
        <td><?= $i["harga"]; ?></td>
      </tr>
    <?php } ?>
    <center>
      <button class="admin">
        <a href="php/admin.php">Admin Disini!!!</a>
      </button>
    </center>
  </table>
  <h5 align="center"></h5>
</body>

</html>