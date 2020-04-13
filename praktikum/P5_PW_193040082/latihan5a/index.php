<?php
    $conn = mysqli_connect("localhost", "root","") or die ("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040082") or die ("database salah");
    $result = mysqli_query($conn, "SELECT * FROM  makanan;") 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>
<div class="img">
    <?php
        $i = 1;
    ?>
<table border="2" cellspacing="0" cellpadding="10">
    <tr>
        <td><h3>No</h3></td>
        <td><h3>Gambar</h3></td>
        <td><h3>Nama Makanan</h3></h3></td>
        <td><h3>Asal Daerah</h3></h3></td>
        <td><h3>Ketersediaan</h3></td>
        <td><h3>Harga</h3></td>
    </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i;?></td>
                
                <td><img src="assets/img/<?=$row ["img"]?>"></td>
                <td><?= $row ["nama_makanan"]; ?></td>
                <td><?= $row ["asal_daerah"]; ?></td>
                <td><?= $row ["ketersediaan"]; ?></td>
                <td><?= $row ["harga"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>

    </table>
    </div>
</body>
</html>