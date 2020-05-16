<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>LOGIN</title>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-image: url(../assets/img/buku.jpg); background-position: -100px;">
  <div class="con" style="margin-left: 500px;">

    <?php if (isset($error)) : ?>
      <p><?= $error; ?></p>

    <?php endif; ?>

    <div class="row">
      <div class="col-lg-6 col-md-8">
        <div class="thumbnail">

          <div class="caption">
            <h3>Login</h3>
            <form action="" method="post">
              <table>
                <tr>
                  <td><label for="username">Username</label></td>
                  <td>:</td>
                  <td><input type="text" name="username"></td>
                </tr>
                <tr>
                  <td><label for="password">Password</label></td>
                  <td>:</td>
                  <td><input type="password" name="password"></td>
                </tr>
              </table>
              <div class="remember">
                <input type="checkbox" name="remember">
                <label for="remember">Ingat Saya</label>
              </div>
              <button type="submit" name="submit">Login</button>

              <div class="regitrasi">
                <p>Untuk Registrasi Klik <a href="registrasi.php">disini</a></p>
              </div>
            </form>
</body>

</html>