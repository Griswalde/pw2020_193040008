<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 C</title>
    <style>
    .circle{
        height: 25px;
        width: 25px;
        background-color: salmon;
        border-radius: 40px;
        border: 2px solid black;
        text-align: center;
        line-height: 25px;
        margin-bottom: 5px;
        margin-right: 5px;
        display: inline-block; 
    }
    </style>

</head>
<body>
    <?php
        $kor ="A";
        echo '<div class="circle">'. $kor .'</div>';
        echo "<br>";

        $kor = "B";
        echo '<div class="circle">'. $kor .'</div>' . '<div class="circle">'. $kor .'</div>';
        echo "<br>";
        
        $kor = "C";
        echo '<div class="circle">'. $kor .'</div>' . '<div class="circle">'. $kor .'</div>' . '<div class="circle">'. $kor .'</div>';
    ?>

</body>
</html>
