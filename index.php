<!DOCTYPE html>
<html>

<head>
  <title>INDEX</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <h1>
  </h1>
  <br>
  <div class="footer">
    <p align="center">Untuk Mempermudah Mengakses Halaman web</p>
    <p align="center">Silahkan KLIK Tombol Dibawah Ini!!</p>
  </div>
  <br>
  <table border="6" align="center" width="65%" cellspacing="10" cellpadding="5" <tr bgcolor="salmon">
    <td bgcolor="salmon" colspan="8" align="center"><b>INDEX </b></td>
    </tr>
    <tr>
      <td align="center"><b>NO.</b></td>
      <td align="center"><b>LINK</b></td>
      <td align="center"><b>TUGAS</b></td>

    </tr>

    <?php $i = 1;
    for ($no = 9; $no <= 13; $no++) : ?>
      <tr>
        <td align="center"><?= $i; ?>.</td>
        <td><a href="kuliah/pertemuan<?= $no; ?>">Klik Disini</a></td>
        <td align="center">Pertemuan<?= $no; ?></td>
      </tr>
    <?php $i++;
    endfor; ?>
    </tr>

    <tr>
      <?php $i = 1;
      for ($no = 1; $no <= 7; $no++) : ?>
    <tr>
      <td align="center"><?= $i; ?>.</td>
      <td><a href="praktikum/P<?= $no; ?>_SENIN13_193040008">Klik Disini</a></td>
      <td align="center">P<?= $no; ?>_SENIN13_193040008</td>
    </tr>
  <?php $i++;
      endfor; ?>
  </tr>

  <tr>
    <td align="center">1.</td>
    <td><a href="tubes/tubes_193040008">Klik Disini</a></td>
    <td align="center">TUBES</td>
  </tr>
  </tr>

</body>

</html>