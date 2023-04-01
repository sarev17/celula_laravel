<?php
    function  serieFibonacci($number){
        if($number == 0){
            return 0;
        } elseif ($number == 1){
            return 1;
        } else {
            return serieFibonacci($number - 1) + serieFibonacci($number - 2);
        }
    }

    $number = intval(readline());
    for($i = 0;$i < $number;$i++){
        echo serieFibonacci($i) . " ";
    }
?>