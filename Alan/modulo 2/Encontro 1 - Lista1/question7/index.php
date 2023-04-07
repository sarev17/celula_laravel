<?php
    $number = readline("Digite um valor: ");

    $number1 = 1;
    $number2 = 1;
    $cont = 0;

    while ($number2 <= $number) {
        if(($number1 == 1 || $number2 == 1) && $cont < 2){
            echo $number2 . "\n";
            $cont++;
        }else{
            $number1 = $number1 + $number2;
            $temp = $number2;
            $number2 = $number1;
            $number1 = $temp;
            
            if($number2 <= $number){
                echo $number2 . "\n";
            }
        }
    }
?>