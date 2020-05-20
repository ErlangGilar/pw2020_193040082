<?php
function cetak_bintang($nilai) {
for($a= 1 ;   $a <= $nilai; $a++){
	for ($b= $nilai; $b >= $a ; $b--) { 
		echo "*";
	}
	echo "<br>";

}
}
cetak_bintang(5);


?>
