<?php
    function gantiStyle($tulisan, $style1, $style2){
        echo "<div class='$style1'>
        <p class='$style2'>$tulisan</p>
        </div>";    
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tulisan{
            font-size: 20px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
        }
        .bungkus{
            box-shadow: 1px 1px 1px rgba(0, 0, 0, 1);
            border: 1px solid black;
            border-radius: 5px;

        }
    </style>
</head>
<body>
<?php gantiStyle("Selamat datang di praktikum PW 2020","bungkus","tulisan");
?>
</body>
</html>