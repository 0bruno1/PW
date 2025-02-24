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
                $peso = 1;
                $imc = $peso /($altura * $altura);
                if($imc < 18.5){
                    echo "<p >" . "você tem $altura de altura" . "</p>";
                    echo "<p>" ."Voce possui $peso Kg". "</p>";
                    echo "<p> Seu IMC é de: $imc" . " O que significa que está em excesso de magreza.";
                    echo "<img class ='magreza' ";
                }
                else if($imc <= 24.9 ){
                    echo "<p>" . "você tem $altura de altura" . "</p>";
                    echo "<p>" ."Voce possui $peso Kg". "</p>";
                    echo "<p> Seu IMC é de: $imc " . " O que significa que seu peso está normal de acordo com sua estatura.";
                    echo "<img class ='pesoNormal'>";
                }
                else if($imc < 29.9 ){
                    echo "<p>" . "você tem $altura de altura" . "</p>";
                    echo "<p>" ."Voce possui $peso Kg". "</p>";
                    echo "<p> Seu IMC é de: $imc " . " O que significa que está em excesso de peso.";
                    echo "<img class ='acimaDoPeso'>";
                }
                else if($imc <= 34.9 ){
                    echo "<p>" . "você tem $altura de altura" . "</p>";
                    echo "<p>" ."Voce possui $peso Kg". "</p>";
                    echo "<p> Seu IMC é de: $imc " . " O que significa que está em Obesidade I.";
                    echo "<img class ='obesidadeI'>";
                }
                else if($imc < 39.9 ){
                    echo "<p>" . "você tem $altura de altura" . "</p>";
                    echo "<p>" ."Voce possui $peso Kg". "</p>";
                    echo "<p> Seu IMC é de: $imc " . " O que significa que está em Obesidade II.";
                    echo "<img class ='obesidadeII'>";
                }
                else{
                    echo "<p>" . "você tem $altura de altura" . "</p>";
                    echo "<p>" ."Voce possui $peso Kg". "</p>";
                    echo "<p> Seu IMC é de: $imc " . " O que significa que está em  Obesidade III.";
                    echo "<img class ='obesidadeIII'>";
                }  
            ?>
        </div>
    </div>
</body>
</html>