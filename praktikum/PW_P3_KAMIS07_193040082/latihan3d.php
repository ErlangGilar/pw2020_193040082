<?php
	function hitungDeterminan($a, $b, $c, $d) {
	echo "<div class = 'bungkus'>
	<table style='border-left: 2px solid black; border-right: 2px solid black; cellspacing='10' cellpadding='10'>
		<tr>
			<td>$a</td>
			<td>$b</td>
		</tr>
		<tr>
			<td>$c</td>
			<td>$d</td>
		</tr>
	</table>
	<br>";
	
	echo "Determinan dari matriks di atas adalah ".(($a * $d) - ($b * $c))."</div>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
		<style>
			.bungkus{
			border: 1px solid black;
			width: 300px;
			padding: 20px;
			}
		</style>
</head>
<body>
	<?php hitungDeterminan(1,2,3,4) ?>
</body>
</html>
