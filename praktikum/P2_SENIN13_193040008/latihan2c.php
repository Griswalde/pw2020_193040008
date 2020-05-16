<?php 
function cetak_bintang($param){
	for($baris=1;$baris<=$param;$baris++){
	for(($kolom=$param;$kolom>=$baris;$kolom--){
	echo ”*”;
	}
	Echo “<br>”;
	}
}

cetak_bintang(5);
cetak_bintang(7);
?>
