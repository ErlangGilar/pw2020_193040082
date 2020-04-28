<?php 
require 'functions.php'; 

$makanan = query("SELECT * FROM makanan");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
	<div id="page-wrap">
		<div class="add">
			<a href="tambah.php"><button>Tambah Data</button></a>
		</div>
	<table border="1" cellpadding="13" cellspacing="0">
		<tr>
			<th>#</th>
			<th>Opsi</th>
			<th>Gambar</th>
			<th>Nama Makanan</th>
			<th>Asal Daerah</th>
			<th>Ketersediaan</th>
			<th>Harga</th>
		</tr>
		<?php $i = 1 ?>
		<?php foreach ($makanan as $mkn) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $mkn['id']?>"><button>Ubah</button></a>
					<a href="hapus.php?id=<?= $mkn['id']?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
				</td>
				<td class="kotak"><img src="../assets/img/<?= $mkn['img'];?>" alt=""></td>
				<td><?= $mkn['nama_makanan']; ?></td>
				<td><?= $mkn['asal_daerah']; ?></td>
				<td><?= $mkn['ketersediaan']; ?></td>
				<td><?= $mkn['harga']; ?></td>
			</tr>
			<?php $i++ ?>
		<?php endforeach; ?>
	</table>
	</div>
</body>
</html>