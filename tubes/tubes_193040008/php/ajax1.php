<?php

require 'functions.php';
$keyword = $_GET['keyword'];
$buku = query("SELECT * FROM buku WHERE
    id like '%$keyword%'OR
    img like '%$keyword%'OR
    `judul buku` like '%$keyword%'OR
    penulis like '%$keyword%'OR
    genre like '%$keyword%'
     ");
?>

<table class="table table-bordered" style="color: black;">

  <tr>
    <th>No</th>
    <th>Gambar</th>
    <th>Judul Buku</th>
    <th>Penulis</th>
    <th>Genre</th>
    <th>Harga</th>
  </tr>

  <?php if (empty($buku)) : ?>
    <tr>
      <td colspan="6">data tidak ditemukan</td>
    </tr>
  <?php endif; ?>

  <?php $i = 1; ?>
  <?php foreach ($buku as $s) : ?>
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