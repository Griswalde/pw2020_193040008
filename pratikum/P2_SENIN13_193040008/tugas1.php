<!DOCTYPE html>
<html>
<head>
	<title>Catur</title>
	<style type="text/css">
		.kotak {
			width: 30px;
			height: 30px;
			background-color: salmon;
			border: 1px solid black; 
			margin: 2px;
			float: left;
		}

		.warna1 {
			background-color: salmon;
		}

		.warna2{
			background-color: lightblue;
		}

		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php for ($i=1; $i <= 6; $i++) { 
		for ($j=1; $j <= 6; $j++) { 
			if (($i+$j) % 2 == 1) {
				echo "<div class='kotak warna1'></div>";
			} else {
				echo "<div class='kotak warna2'></div>";
			}
		}
		echo "<div class='clear'></div>";
	} ?>
	
</body>
</html>