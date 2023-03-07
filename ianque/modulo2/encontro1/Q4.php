<?php

$numero = readline('Digite um numero: '); //Receber dados do usuário

for($i=1; $i<=10; $i++){
    $resultado = $numero * $i;
    echo $numero." x ".$i." = ". $resultado;
    echo "<br>";
}
?>