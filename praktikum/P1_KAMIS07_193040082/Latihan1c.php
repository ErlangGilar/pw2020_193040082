<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan1c</title>
    <style>
        .A {
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border: 3px solid black;
            border-radius:50%;
            background: salmon;
        }

        .B {
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border: 3px solid black;
            border-radius:50%;
            background: salmon;
            float: left;
            margin-top: 10px;

        }

        .B2 {
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border: 3px solid black;
            border-radius:50%;
            background: salmon;
            float: left;
            margin-top: 10px;
            margin-left:10px;            
        }

        .C1 {
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border: 3px solid black;
            border-radius:50%;
            background: salmon;
            margin-top: 10px;
        }

        .C2 {
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border: 3px solid black;
            border-radius:50%;
            background: salmon;
            float: left;
            margin-top: 10px;
        }

        .C3 {
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border: 3px solid black;
            border-radius:50%;
            background: salmon;
            float: left;
            margin-top: 10px;
            margin-left: 10px;
        }

        .C4 {
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border: 3px solid black;
            border-radius:50%;
            background: salmon;
            float: left;
            margin-top: 10px;
            margin-left:10px;

        }
        </style>
</head>
<body>
     <?php $h1 = "A"; ?>
     <div class="container">
            <div class="A"><?php echo $h1; ?></div>
            </div>
            <?php $B = "B"; ?>
            <div class="container">
               <div class="B"><?php echo $B; ?></div>
               </div>
            <?php $B2 = "B" ?>
            <div class="container">
                <div class="B2"><?php echo $B2; ?></div>
                </div>
            <?php $C = ""; ?>
            <div class="container">
                <div class="C1"><?php echo $C; ?></div>
                </div>
                <?php $C1 = "C"; ?>
            <div class="container">
                <div class="C2"><?php echo $C1; ?></div>
                </div>
                <?php $C2 = "C"; ?>
            <div class="container">
                <div class="C3"><?php echo $C2; ?></div>
                </div>
                <?php $C3 = "C"; ?>
            <div class="container">
                <div class="C4"><?php echo $C3; ?></div>
                </div>    
  
</body>
</html>