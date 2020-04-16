<?php 
   // melakukan koneksi  ke database
   $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

   // memilih database
   mysqli_select_db($conn, "pw_193040008") or die ("Database salah!");

   //   query mengambil objek dari tabel didalam database

   $result = mysqli_query($conn, "SELECT * FROM buku");
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
            <?php while ($row = mysqli_fetch_assoc($result)) :?>
           
            <tr>
                <td><?= $i ?></td>
                <td><img src="assets/img/<?= $row["img"]; ?>"></td>
                <td><?= $row["judul buku"]; ?></td>
                <td><?= $row["penulis"]; ?></td>
                <td><?= $row["genre"]; ?></td>
                <td><?= $row["harga"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        </table>
		
		<h5 align="center"><a href="../../index.php">__Back__</a></h5>
    </body>
</html>
