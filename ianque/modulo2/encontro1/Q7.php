<?php

$numero = readline('Digite um numero: '); //Receber dados do usuário

$num1 = 0;
$num2 = 1;

echo $num2;
echo "<br>";

for($i = 0; $i < $numero; $i++) {

    $aux = $num1 + $num2;
    $num1 = $num2;
    $num2 = $aux;

    echo "$aux";
    echo "<br>";
}

?>