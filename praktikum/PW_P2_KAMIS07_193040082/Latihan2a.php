<?php 
$i = 1;
while ($i <= 10) {
	echo "<li>Urutan ke-$i</li>";
	$i++;
}

for ($i = 1; $i <= 3; $i++) { 
	for ($j = 1; $j <= 3 ; $j++) { 
		echo "Ini perulangan ke ($i, $j)";
		echo "</br>";
	}
}
 ?>