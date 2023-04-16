<?php
/* 
    3 - Dada a variavel $info = “07A-6M2a4ds30Ò3142´we9.7”:
        a) faça umas máscara para retornar apenas os números dela;
        b) aproveite o item anterior e escreva-a no formato 076.243.012-97
        c) Remova todos os números da variavel info.
*/
    $info = "07A-6M2a4ds30Ò3142´we9.7";
    $str = preg_replace('/[^0-9]/','',$info);
    echo $str;
    echo "<br>";
    $str = preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "$1.$2.$3-$4",$str);
    echo $str;
    echo "<br>";
    $str = preg_replace('/[0-9]/','',$info);
    echo $str;
?>