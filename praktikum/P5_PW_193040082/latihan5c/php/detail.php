 <?php 
if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}

require 'functions.php';

$id = $_GET['id'];

$makanan = query("SELECT * FROM makanan WHERE id = $id")[0];
 ?>	
 <!DOCTYPE html>
 <html>
 <head>
 	 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="../css/style.css">
 	<title>Detail</title>
 </head>
 <body>
 	<div class="container">
 		<div class="gambar">
 			<img src="../assets/img/<?= $makanan["img"]; ?>" alt="">
 		</div>
 		<div class="keterangan">
 			<p><?= $makanan["nama_makanan"]; ?></p>
 			<p><?= $makanan["asal_daerah"]; ?></p>
 			<p><?= $makanan["ketersediaan"]; ?></p>
 			<p><?= $makanan["harga"]; ?></p>
 		</div>
 		<a class="waves-effect waves-light btn" href="../index.php">Kembali</a></a>
 	</div>
 </body>
 </html>