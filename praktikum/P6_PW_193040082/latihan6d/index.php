<?php
    require 'php/functions.php';

    $makanan = query("SELECT * FROM makanan")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css">
    <title>Makanan</title>
    
</head>
<body>
<div class="container">
      <div class="slider">
            <ul class="slides">
              <li>
                <img src="assets/img/lotek.jpg">
                <div class="caption center-align">
                  <h3>Lotek</h3>
                  <h5 class="light grey-text text-lighten-3">adalah salah satu makanan dari Jawa Barat yang mudah ditemukan di seluruh wilayah Jawa Barat. Sepintas lotek ini hampir mirip dengan Gado-gado, yakni makanan berupa rebusan sayuran segar yang disiram dressing berupa sambal dicampur bumbu kacang.</h5>
                </div>
              </li>
              <li>
                  <img src="assets/img/kupattahu.jpg">
                  <div class="caption left-align">
                    <h3>Kupat Tahu</h3>
                    <h5 class="light grey-text text-lighten-3"> adalah makanan tradisional Indonesia yang berbahan dasar ketupat, tahu yang telah digoreng, dan juga bumbu kacang. Lontong dapat juga digunakan sebagai pengganti ketupat. Ada banyak jenis kupat tahu, tetapi yang terkenal ialah yang berasal dari Singaparna, Surakarta dan Magelang, perbedaannya terletak pada bumbu dan pelengkap, jika pada versi Magelang dan Solo terdapat irisan kol dan bakwan dan mi dan tahu putih seperti versi Magelang pada versi Solo, tetapi pada versi Singaparna terdapat tauge yang telah direbus.</h5>
                  </div>
                </li>
                <li>
                    <img src="assets/img/satepadang.jpg">
                    <div class="caption right-align">
                      <h3>Sate Padang</h3>
                      <h5 class="light grey-text text-lighten-3">Sate Padang adalah sebutan untuk tiga jenis varian sate di Sumatra Barat, yaitu Sate Padang, Sate Padang Panjang dan Sate Pariaman. Sate Padang memakai bahan daging sapi, lidah, atau jerohan (jantung, usus, dan tetelan) dengan bumbu kuah kacang kental (mirip bubur) ditambah cabai yang banyak sehingga rasanya pedas.</h5>
                    </div>
                  </li>
                  <li>
                      <img src="assets/img/pempek.jpg">
                      <div class="caption center-align">
                        <h3>Pempek</h3>
                        <h5 class="light grey-text text-lighten-3">Pempek atau empek-empek adalah makanan khas Palembang yang terbuat dari daging ikan yang digiling lembut dan tepung kanji (secara salah kaprah sering disebut sebagai "tepung sagu"), serta beberapa komposisi lain seperti telur, bawang putih yang dihaluskan, penyedap rasa dan garam.</h5>
                      </div>
                    </li>
            </ul>
        </div>
  <h1>DAFTAR MAKANAN</h1>
    <?php foreach ($makanan as $mkn) : ?>
        <p class="nama"><div class="row">
    <div class="col s10 m5">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/<?= $mkn['img'];?>" alt="">
        </div>
        <div class="card-action">
          <a href="php/detail.php?id=<?= $mkn['id'] ?>">
                <?= $mkn["nama_makanan"] ?>
            </a>
        </div>
      </div>
    </div>
  </div>
        </p>
    <?php endforeach; ?>
</div>
 <script type="text/javascript" src="assets/js/materialize.min.js"></script>
 <script type="text/javascript">
     const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,{
          indicators : false,
          height : 500,
          transition : 600,
          interval : 3000
          
        })
 </script>

</body>
</html>