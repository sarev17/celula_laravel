<?php

$numero1 = readline('Digite um numero: '); //Receber dados do usuário
$numero2 = readline('Digite um outro: ');
$numero3 = readline('Digite um outro: ');
$numero4 = readline('Digite um outro: ');
$numero5 = readline('Digite um outro: ');


$media = ($numero1 +$numero2 +$numero3 +$numero4 + $numero5)/5;
echo "A média é $media";
echo "<br>";

$etapa1 = pow(($numero1-$media),2)+pow(($numero2-$media),2)+pow(($numero3-$media),2)+pow(($numero4-$media),2)+pow(($numero5-$media),2);
echo "Etapa 1: $etapa1";
echo "<br>";

$etapa2 = ( pow(($numero1-$media),2)+pow(($numero2-$media),2)+pow(($numero3-$media),2)+pow(($numero4-$media),2)+pow(($numero5-$media),2) )/5;
echo "Etapa 2: $etapa2";
echo "<br>";

$desvio = sqrt($etapa2);
echo "O desvio padrão é: $desvio";
?>