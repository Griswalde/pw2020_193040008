<?php
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
                alert('Registrasi Berhasil!');
                document.location.href = 'login.php';
              </script>";
  } else {
    echo "<script>
                alert('Registrasi Gagal!');
              </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<link href="../css/bootstrap.min.css" rel="stylesheet">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 col-lg-6 py-4">
        <h1 class="h2 mr-auto"><a class="text-info" href="registrasi.php">
            Register User</a></h1>

        <form action="" method='post'>
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
          <button type="register" name="register">Register</button>
        </form>
</body>

</html>