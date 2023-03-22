<?php
    $listNumber = readline("Digite os números separados por espaço: ");
    
    $listNumber = explode(' ', $listNumber);

    //soma tudo e depois gera a média
    $sumNumbers = array_sum($listNumber);
    $arithmeticAverage = $sumNumbers/(sizeof($listNumber));
    echo "Média Aritmética: " . $arithmeticAverage .  "\n";

    //calcula o desvio padrão
    $sum = 0;
    for ($i=0; $i < sizeof($listNumber); $i++) { 
        $sum += (pow(($listNumber[$i] - $arithmeticAverage),2));
    }
    $standardDeviation = sqrt($sum / sizeof($listNumber));
    echo $standardDeviation;
?>