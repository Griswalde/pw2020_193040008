<?php 

	function tumpukanBola($tumpukan){
			for ($i=0; $i <= $tumpukan ; $i++) { 
			for ($j=1; $j <= $i; $j++) { 
			echo "<div class='bola'>$i</div>";
		}
			echo "<div class='clear'></div>";
		}

	}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 3C</title>
	<style>
		
        
        .bola {
			margin: 5px;
			width: 35px;
			height: 35px;
			border-radius: 35px;
			border: 1px solid black;
			text-align: center;
			font-size: 20px;
			line-height: 35px;
			background-color: black;
			float: left;
            color: white;
		}

		.clear {
			clear: both;
		}
	</style>

</head>
<body>
	


	<?php tumpukanBola(5) ?>

</body>
</html>