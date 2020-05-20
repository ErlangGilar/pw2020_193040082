<?php
$makanan = [
    ["namamakanan" => "Lotek", 
     "asaldaerah" => "Jawa Barat",
     "ketersediaan" => "Tersedia", 
     "harga" => "10.000",
     "gambar" => "lotek.jpg"],

     ["namamakanan" => "Kupat Tahu", 
     "asaldaerah" => "Jawa Barat",
     "ketersediaan" => "Tesedia",
     "harga" => "13.000",
     "gambar" => "kupattahu.jpg"],
     
     ["namamakanan" => "Soto Madura", 
     "asaldaerah" => "Madura",
     "ketersediaan" => "Habis", 
     "harga" => "15.000",
     "gambar" => "soto.jpg"],
     
     ["namamakanan" => "Gudeg", 
     "asaldaerah" => "Jogjakarta",
     "ketersediaan" => "Habis", 
     "harga" => "15.0000",
     "gambar" => "gudeg.jpg"],
     
     ["namamakanan" => "Sate Padang", 
     "asaldaerah" => "Padang",
     "ketersediaan" => "Tersedia", 
     "harga" => "15.0000",
     "gambar" => "satepadang.jpg"],
     
     ["namamakanan" => "Pempek", 
     "asaldaerah" => "Palembang",
     "ketersediaan" => "Tersedia", 
     "harga" => "10.000",
     "gambar" => "pempek.jpg"],
     
     ["namamakanan" => "Kerak Telur", 
     "asaldaerah" => "Jakarta", 
     "ketersediaan" => "Habis",
     "harga" => "15.000",
     "gambar" => "keraktelor.jpg"],
     
     ["namamakanan" => "Surabi", 
     "asaldaerah" => "Jawa Barat", 
     "ketersediaan" => "Tersedia",
     "harga" => "7.000",
     "gambar" => "surabi.jpg"],
     
     ["namamakanan" => "Ayam Taliwang", 
     "asaldaerah" => "Lombok", 
     "ketersediaan" => "Habis",
     "harga" => "20.000",
     "gambar" => "ayamtaliwang.jpg"],
     
     ["namamakanan" => "Bika Ambon", 
     "asaldaerah" => "Ambon",
     "ketersediaan" => "Habis", 
     "harga" => "15.000",
     "gambar" => "bikaambon.jpg"]
]
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

        <?php foreach ($makanan as $enak) : ?>
            <tr>
                <td><?= $i;?></td>
                <?php $i++ ?>
                <td><img src="assets/img/<?=$enak ["gambar"]?>"></td>
                <td><?= $enak ["namamakanan"]; ?></td>
                <td><?= $enak ["asaldaerah"]; ?></td>
                <td><?= $enak ["ketersediaan"]; ?></td>
                <td><?= $enak ["harga"]; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
    </div>
</body>
</html>