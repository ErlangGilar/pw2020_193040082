<?php 
require 'functions.php'; 


if (isset($_GET['cari'])) {
	$keyword = $_GET['keyword'];
	$makanan = query ("SELECT * FROM makanan WHERE
						nama_makanan LIKE '$keyword' OR
						asal_daerah LIKE '$keyword' OR
						ketersediaan LIKE '$keyword' OR
						harga LIKE '$keyword' ");
} else {
	$makanan = query("SELECT * FROM makanan");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
	<nav class="grey darken-3">
            <div class="container">
              <div class="nav-wrapper">
                  <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                      <li><a href="../index.php" style="text-decoration: none; color: white;">Kembali ke halaman index.php</a></li>
                      <li class="logout"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div> 
            </nav>
        </div>
	<div id="page-wrap">
		<div class="add">
			<a href="tambah.php"><button class="tambah"><i class="small material-icons">add_circle_outline</i>Tambah Data</button></a>
			<form action="" method="get">
			<input type="text" name="keyword" autofocus>
			<button type="submit" name="cari">Cari</button>
			<br><br>
		</form>
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
			<?php if (empty($makanan)) : ?>
				<tr>
					<td colspan="7">
						<h1>Data tidak ditemukan</h1>
					</td>
				</tr>
				<?php else : ?>
					<?php $i = 1; ?>
			<?php foreach ($makanan as $mkn) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $mkn['id']?>"><button class="ubah">Ubah</button></a>
					<a href="hapus.php?id=<?= $mkn['id']?>" onclick="return confirm('Hapus Data??')"><button class="hapus">Hapus</button></a>
				</td>
				<td class="kotak"><img src="../assets/img/<?= $mkn['img'];?>" alt=""></td>
				<td><?= $mkn['nama_makanan']; ?></td>
				<td><?= $mkn['asal_daerah']; ?></td>
				<td><?= $mkn['ketersediaan']; ?></td>
				<td><?= $mkn['harga']; ?></td>
			</tr>
			<?php $i++ ?>
		<?php endforeach; ?>
	<?php endif; ?>
	</table>
	</div>
</body>
</html>