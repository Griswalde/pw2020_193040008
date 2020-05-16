<?php 

    $jawabanisset = "Isset = Isset() adalah salah satu perintah php yang berfungsi untuk memeriksa sebuah objek dari form, apakah ada atau tidak nilai yang di lempar dari suatu form.<br><br>";
    $jawabanempety = "Empty = Empty pada PHP berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data. ";
    
    $GLOBALS ['Isset'] = $jawabanisset;
    $GLOBALS ['Empty'] = $jawabanempety;
        
        function soal($style){
            echo "<div class='$style'>
             <p>$GLOBALS[Isset]</p> 
             <p>$GLOBALS[Empty]</p>
             </div>";

        }

        echo soal("box");
        
    ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 B</title>
    <style>
        .box {
            box-shadow : 0px 0px 5px  rgba(0.0.0.7);
            border : 1px solid black;
            padding-left: 10px;
            width: 1100px;
        }

    </style>
</head>
<body>
    