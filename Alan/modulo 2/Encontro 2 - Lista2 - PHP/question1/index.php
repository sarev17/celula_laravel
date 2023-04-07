<?php

    $valor = 25;

    $valorConvertido = decbin($valor);
    echo "$valor convertido para binário: $valorConvertido";

    $valorConvertido = dechex($valor);
    echo "\n$valor convertido para hexadecimal: $valorConvertido";

    $valorConvertido = number_format($valor, 2, ',', '.');
    echo "\n$valor convertido para moeda (real): R$ $valorConvertido";
?>