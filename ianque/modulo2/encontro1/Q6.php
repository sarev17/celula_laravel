<?php

$numero = readline('Digite um numero: '); //Receber dados do usuário
    
    for($i=$numero; $i>1; $i--){
        $j = 2;
        while (($j <= $i/2) && ($i % $j != 0)){
            $j++;
        }
        if ($j>$i/2){
            echo "$i";
            echo "<br>";
        }
    }


?>