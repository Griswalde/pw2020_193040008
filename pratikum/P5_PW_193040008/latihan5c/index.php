<?php
 // menghubungkan dengan file php lainnya
 require 'php/functions.php';

 // melakukna query 
 $buku = query("SELECT * FROM buku")
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Document</title>
 </head>
 <body>
     <div class= "container">
         <?php foreach($buku as $bk) : ?>
            <p class= "judul buku">
                <a href="php/detail.php?id=<?= $bk['id'] ?>">
                <?= $bk["judul buku"] ?>
                </a>
            </p>
         <?php endforeach; ?>
     </div>
 </body>
 </html>