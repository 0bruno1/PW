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
    <div class="container">
        <?php
                $altura = 1;
                $peso = 34;
                $imc = $peso /($altura * $altura);
                if($imc < 18.5){
                    echo "<p>" . "você tem $altura m de altura" . "</p>";
                    echo "<p>" ."Voce possui $peso Kg". "</p>";
                    echo "<p> Seu IMC é de: $imc" . " O que significa que está em excesso de magreza.";
                    echo "<img src='images/magreza.jpg' class ='magreza' 100px 300px> ";
                }
                else if($imc <= 24.9 ){
                    echo "<p>" . "você tem $altura m de altura" . "</p>";
                    echo "<p>" ."Voce possui $peso Kg". "</p>";
                    echo "<p> Seu IMC é de: $imc " . " O que significa que seu peso está normal de acordo com sua estatura.";
                    echo "<img src='images/normal.jpg' class ='normal' 100px 300px> ";
                }
                else if($imc < 29.9 ){
                    echo "<p>" . "você tem $altura m de altura" . "</p>";
                    echo "<p>" ."Voce possui $peso Kg". "</p>";
                    echo "<p> Seu IMC é de: $imc " . " O que significa que está em excesso de peso.";
                    echo "<img src='images/sobrepeso.jpg' class ='sobrepeso' 100px 300px> ";
                }
                else if($imc <= 34.9 ){
                    echo "<p>" . "você tem $altura m de altura" . "</p>";
                    echo "<p>" ."Voce possui $peso Kg". "</p>";
                    echo "<p> Seu IMC é de: $imc " . " O que significa que está em Obesidade I.";
                    echo "<img src='images/obesidade1.jpg' class ='obesidade1' 100px 300px> ";
                }
                else if($imc < 39.9 ){
                    echo "<p>" . "você tem $altura m de altura" . "</p>";
                    echo "<p>" ."Voce possui $peso Kg". "</p>";
                    echo "<p> Seu IMC é de: $imc " . " O que significa que está em Obesidade II.";
                    echo "<img src='images/obesidade2.png' class ='obesidade2' 100px 300px> ";
                }
                else{
                    echo "<p>" . "você tem $altura m de altura" . "</p>";
                    echo "<p>" ."Voce possui $peso Kg". "</p>";
                    echo "<p> Seu IMC é de: $imc " . " O que significa que está em  Obesidade III.";
                    echo "<img src='images/obesidade3.jpg' class ='obesidade3' 100px 300px> ";
                }  
            ?>
        </div>
    </div>
</body>
</html>
