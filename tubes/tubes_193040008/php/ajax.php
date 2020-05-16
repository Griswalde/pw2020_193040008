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