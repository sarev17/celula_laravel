<?php
    $number = readline("Digite um valor: ");
    
    for ($i = 1; $i <= $number; $i++) {
        if($number%$i == 0){
            echo $i . "\n";
        }
    }
?>