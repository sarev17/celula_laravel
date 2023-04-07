<?php
    $number = readline("Digite um valor: ");
    
    for ($i = 2; $i <= $number; $i++) {
        $cont = 0;
        for ($j = $i; $j > 0; $j--) {

            if ($i % $j == 0) {
                $cont++;
            }
        }
        if ($cont == 2) {
            echo $i . "\n";
        }
    }
?>