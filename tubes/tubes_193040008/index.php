<?php




require 'php/functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $buku = query("SELECT * FROM buku WHERE
			id like '%$keyword%'OR
			img like '%$keyword%'OR
			`judul buku` like '%$keyword%'OR
			penulis like '%$keyword%'OR
			genre like '%$keyword%'
			 ");
} else {
  $buku = query("SELECT * FROM buku");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background-image: url(image/tt.jpg);">

  <!-- awal navbar -->
  <nav class="navbar navbar-default">
    <form class="navbar-form  navbar-left" action="" method="get">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="keyword" id="keyword" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-default" name="cari" id="cari">Submit</button>
    </form>
    <div class="container-fluid  btn-primary">
      <!-- Brand and toggle get grouped for better mobile display -->
      <form class="navbar-form  navbar-right">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <button type="submit" class="btn btn-default"><a href="php/login.php">Log-in</a></button>
        </div><!-- /.container-fluid -->
      </form>
  </nav>
  <!-- akhir navbar -->



  <!-- isi -->
  <div class="container" id="container" style="margin-left: 500px;">
    <div class="con">

      <?php foreach ($buku as $s) : ?>
        <div class="row" align="center">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="assets/img/<?= $s['img']; ?>" style='width: 150px; height: 150px;'>
              <div class="caption">
                <h3><?= $s['judul buku']; ?></h3>

                <p><a href="php/user.php?id=<?= $s['id'];  ?>" class="btn btn-default btn-primary" role="button">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>

    <!-- akhir isi -->


  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>