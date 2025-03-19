<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>laço de repetição de 1 a 100</h1>
    <div class="php">
    <?php
    for($i=0;$i<=100;$i++){

        if($i % 2 == 0){
            echo "<div class='corpar'>" . $i ."</div>";
        }
        if($i % 2 != 0){
            echo "<div class='corimpar'>" . $i ."</div>";
        }
    }
    ?>
    </div>
</body>
</html>