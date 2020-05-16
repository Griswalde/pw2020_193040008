<?php 
  // menghubungkan dengan file php lainnya
  require 'php/functions.php';

  // melakukan query
  $buku = query("SELECT * FROM buku");
?>

<html>
    <head>
        <title>Tugas2_19304008</title>
    </head>
    <div class="container">
    <table cellpadding="10" cellspacing="10" border="1">
    <body>
                <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Genre</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach($buku as $b) : ?>
           
            <tr>
                <td><?= $i ?></td>
                <td><img src="assets/img/<?= $b["img"]; ?>"></td>
                <td><?= $b["judul buku"]; ?></td>
                <td><?= $b["penulis"]; ?></td>
                <td><?= $b["genre"]; ?></td>
                <td><?= $b["harga"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
		
		<h5 align="center"><a href="../../index.php">__Back__</a></h5>
    </body>
</html>
