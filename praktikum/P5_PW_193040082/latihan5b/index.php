<?php
    require 'php/functions.php';

    $makanan = query("SELECT * FROM makanan")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Makanan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="page-wrap">
<div class="img">
    <h1>DAFTAR MAKANAN TRADISIONAL</h1>
    <?php
        $i = 1;
    ?>
<table border="2" cellspacing="1" cellpadding="20">
    <tr>
        <td><h3>No</h3></td>
        <td><h3>Gambar</h3></td>
        <td><h3>Nama Makanan</h3></h3></td>
        <td><h3>Asal Daerah</h3></h3></td>
        <td><h3>Ketersediaan</h3></td>
        <td><h3>Harga</h3></td>
    </tr>

        <?php foreach ($makanan as $mkn) : ?>
            <tr>
                <td><?= $i;?></td>
                
                <td class="kotak"><img src="assets/img/<?=$mkn ["img"]?>"></td>
                <td><?= $mkn ["nama_makanan"]; ?></td>
                <td><?= $mkn ["asal_daerah"]; ?></td>
                <td><?= $mkn ["ketersediaan"]; ?></td>
                <td><?= $mkn ["harga"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>

    </table>
    </div>
</div>
</body>
</html>