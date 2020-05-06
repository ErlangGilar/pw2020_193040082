<?php 
require 'functions.php';

$id = $_GET['id'];

$mkn = query("SELECT * FROM makanan WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
					alert('Data berhasil diubah!');
					document.location.href = 'admin.php';
					</script>";
	}else{
		echo "<script>
				alert('Data Gagal diubah!');
				document.location.href = 'admin.php';
				</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <style type="text/css">
      	h3{
      		text-align: center;
      		color: white;
      	}
      	body{
      		background-image: url(../assets/img/bg2.jpg);
      	}
      	label{
      		color: white;
      	}
      </style>
</head>
<body>
	<h3>Form Ubah Data Mahasiswa</h3>
<form action="" method="post">
	<input type="hidden" name="id" id="id" value="<?= $mkn['id'];?>">
	<ul>
		<li>
			<label for="img">Gambar :</label><br>
			<input type="text" name="img" required value="<?= $mkn['img'];?>"><br><br>
		</li>
		<li>
			<label for="nama_makanan">Nama Makanan :</label><br>
			<input type="text" name="nama_makanan" id="nama_makanan" required value="<?= $mkn['nama_makanan'];?>"><br><br>
		</li>
		<li>
			<label for="asal_daerah">Asal Daerah :</label><br>
			<input type="text" name="asal_daerah" id="asal_daerah" required value="<?= $mkn['asal_daerah'];?>"><br><br>
		</li>
		<li>
			<label for="ketersediaan">Ketersediaan :</label><br>
			<input type="text" name="ketersediaan" id="ketersediaan" required value="<?= $mkn['ketersediaan'];?>"><br><br>
		</li>
		<li>
			<label for="harga">Harga :</label><br>
			<input type="text" name="harga" id="harga" required value="<?= $mkn['harga'];?>"><br><br>
		</li>
<br>
<button type="submit" name="ubah">Ubah Data!</button>
<button type="submit">
	<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
</button>
	</ul>
</form>

</body>
</html>