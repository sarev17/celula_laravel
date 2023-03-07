<?php

$numero = readline('Digite um numero: '); //Receber dados do usuário


for($i = 1; $i <= $numero; $i++){
    if ($numero % $i == 0){
        echo "$i";
        echo "<br>";
    }
}

?>