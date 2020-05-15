<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3A</title>
    <style>
        .tulisan{
            font-family : arial;
            color : #8c782d;
            font-size : 28px;
            font-weight : bold;
            font-style : italic;
            text-align: left;
        }
        .pembungkus {
            box-shadow : 0px 0px 5px 0px rgba(0.0.0.7);
            border : 2px solid black;
        	border-radius: 5px;
        	height: 50px;
        	width: 600px;
            line-height: 0px;
            padding-left: 10px;
        }

    </style>
</head>
<body>
    <?php 
        function gantiStyle($tulisan, $style1, $style2){
            echo "<div class='$style1'><p class='$style2'>$tulisan</p></div>";
        } 
   
    echo gantiStyle("Selamat datang di praktikum PW 2020","pembungkus","tulisan");
   
    ?>
    
</body>
</html>