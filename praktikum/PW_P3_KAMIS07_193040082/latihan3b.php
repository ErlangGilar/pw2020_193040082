<?php

	$Isset = "isset akan menentukan apakah suatu variabel telah didefinisikan dan variabel tersebut isinya  bukan NULL";
	$Empty = "Sedangkan empty jika variabel belum didefinisikan akan bernilai true";

	$GLOBALS['Isset'] = $Isset;
	$GLOBALS['Empty'] = $Empty;

	function soal($style) {
		echo "<div class = 'kotak'>
		<p> ".$GLOBALS['Isset']."</p>
		<p> ".$GLOBALS['Empty']."</p>
		</div>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
		<style>
		.kotak {
			border : 2px solid black;
		}
</style>

</head>
<body>
	<?php echo soal("kotak"); ?>
</body>
</html>
