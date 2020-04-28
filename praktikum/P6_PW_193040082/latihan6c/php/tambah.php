<?php 
require 'functions.php';
if (isset($_POST['tambah'])){
	if (tambah($_POST) > 0){
		echo "<script>
					alert('Data berhasil ditambahkan!');
					document.location.href = 'admin.php';
					</script>";
	}else{
		echo "<script>
				alert('Data Gagal ditambahkan!');
				document.location.href = 'admin.php';
				</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Form Tambah Data Mahasiswa</h3>
<form action="" method="post">
	<ul>
		<li>
			<label for="img">Gambar :</label><br>
			<input type="text" name="img" required=""><br><br>
		</li>
		<li>
			<label for="nama_makanan">Nama Makanan :</label><br>
			<input type="text" name="nama" id="nama" required><br><br>
		</li>
		<li>
			<label for="asal_daerah">Asal Daerah :</label><br>
			<input type="text" name="asal_daerah" id="asal_daerah" required><br><br>
		</li>
		<li>
			<label for="ketersediaan">Ketersediaan :</label><br>
			<input type="text" name="ketersediaan" id="ketersediaan" required><br><br>
		</li>
		<li>
			<label for="harga">Harga :</label><br>
			<input type="text" name="harga" id="harga" required><br><br>
		</li>
<br>
<button type="submit" name="tambah">Tambah Data!</button>
<button type="submit">
	<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
</button>
	</ul>
</form>

</body>
</html>