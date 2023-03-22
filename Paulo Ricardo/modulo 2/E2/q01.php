<?php
/*      1- Dada a variavel $valor = 255, escreva um codigo que:
            a) imprima a variável como numero binário
            b) imprima a variável como Hexadecimal
            c) converta para R$ 255,00
*/
    $valor = 255;
    echo sprintf("%d em binário é %b. <br>", $valor, $valor);
    echo sprintf("%d em binário é %x. <br>", $valor, $valor);
    $valor2 = number_format($valor, 2, ",",".");
    echo $valor." em moeda brasileira é R$ ".$valor2;

?>
