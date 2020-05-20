<!DOCTYPE html>
<html>
<head>
	<title>Latihan2c</title>
	<style>
		.bulat{
			border-radius: 50%;
			background-color: #fa8072;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="30">
		<tr>
			<?php for ($i = 1; $i <= 1 ; $i++) : ?>
			<th class="bulat"><?= 1; ?></th>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i = 1; $i <= 2 ; $i++) : ?>
			<th class="bulat"> <?= 2; ?></th>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i = 1; $i <= 3 ; $i++) : ?>
			<th class="bulat"> <?= 3; ?></th>
			<?php endfor; ?>
		</tr>
	</table>

</body>
</html>