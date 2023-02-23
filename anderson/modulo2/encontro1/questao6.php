<?php
    function numberPrime($number){
        if($number < 2 || ($number > 2 && $number % 2 == 0)){
            return false;
        }
        for ($i = 3;$i < sqrt($number);$i += 2){
            if($number % $i == 0){
                return false;
            }
        }
        return true;
    }
    $number = intval(readline());
    for($i = 2;$i < $number;$i++){
        if(numberPrime($i)){
            echo $i ." ";
        }
    }
?>