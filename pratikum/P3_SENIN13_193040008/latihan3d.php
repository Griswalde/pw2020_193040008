<?php
  function hitungDeterminan($p1, $p2, $p3, $p4){
    echo '<h1 style="border-right: solid black 3px; border-left: solid black 3px; width:60px; height: 110px; padding:0 10px;">';
    echo "<p class='letter-spacing: 5px;'> $p1 $p2 </p>"; ; 
    echo "<p class='letter-spacing: 5px;'> $p3 $p4 </p>"; ; 
    echo "</h1>";
    $determinan = (($p1 * $p4) - ($p2 * $p3));
    echo "<h3>Determinan dari matriks tersebut adalah $determinan </h3>";
  }

  hitungDeterminan(1, 2, 3, 4);
?>
