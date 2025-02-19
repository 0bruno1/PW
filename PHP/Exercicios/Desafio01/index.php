<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="php">
        <?php
            $idade = 1231;
            echo "<h1>" . $idade . "</h1>";       
            if($idade < 18){
                echo "<div class='verde'></div>";
                echo "<p>Menor de idade</p>";
            } 
            else{
                echo "<div class='vermelho'></div>";
                echo "<p>Maior de idade</p>";
            }
        ?>
    </div>
</body>
</html>