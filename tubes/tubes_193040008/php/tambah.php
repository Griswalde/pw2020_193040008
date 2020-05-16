<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

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
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body style="background-image: url(../assets/img/buku.jpg); background-position: -100px;">
  <div class="con" style="margin-left: 500px;">
    <h3 style="color: black;">Form Tambah Data buku</h3>

    <div class="row">
      <div class="col-lg-6 col-md-8">
        <div class="thumbnail">
          <div class="caption">
            <form method="post" action="">
              <ul>
                <li>
                  <label>Gambar : </label><br>
                  <input type="text" name="gambar" id="gambar" required>
                </li>

                <li>
                  <label>Judul Buku : </label><br>
                  <input type="text" name="judul_buku" id="merk">
                </li>

                <li>
                  <label>Genre </label><br>
                  <input type="text" name="genre" id="tipe" required>
                  <select name="genre" id="genre" required>
                    <option value="">----------Pilih Genre Buku----------</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Horror">Horror</option>
                    <option value="Romance">Romance</option>
                  </select>
                </li><br>
                <li>
                  <label>Harga : </label><br>
                  <input type="text" name="harga" required>
                </li>

                <li>
                  <button type="submit" name="tambah">Tambah Data!</button>
                </li>
              </ul>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</html>