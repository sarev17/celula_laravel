<?php

$valor = 255;

$valorEmBinario = decbin($valor);

$valorEmHexadecimal = dechex($valor);

$valorEmReal = "R$ " . number_format($valor, 2, ',', '.');

echo ("Valor: " . $valor . "\n" . "Valor em Binario: " . $valorEmBinario . "\n"
    . "Valor em Hexadecimal: " . $valorEmHexadecimal . "\n" . "Valor em Real: "
    . $valorEmReal);