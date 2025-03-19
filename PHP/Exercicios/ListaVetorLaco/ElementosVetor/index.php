<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="Container">
        <h1>Carros Vintage</h1>
        <div class="interface">
            <div class="php">
            <?php
                $titulos = ["<h2>Brasilia</h2>", "<h2>Fusca</h2>", "<h2>Cadillac</h2>", "<h2>Ferrari 250 GT</h2>"];
                $imagens = ["<img src ='images/Brasilia.jpg'", "<img src ='images/Fusca.jpg'", "<img src='images/Cadillac.jpg'", "<img src ='images/Ferrari.jpg'"];
                $descricoes = ["<p>Carro Brasillia</p>", "<p>Carro Fusca</p>", "<p>Carro Cadillac</p>", "<p>Carro Ferrari 250 GT</p>"];

                for($i = 0; $i < 4; $i++) {
                    echo "<div class='item'>";
                        echo $titulos[$i];
                        echo $imagens[$i];
                        echo $descricoes[$i];
                    echo "</div>";
                }
            ?>
            </div>
        </div>
    </div>
</body>
</html>