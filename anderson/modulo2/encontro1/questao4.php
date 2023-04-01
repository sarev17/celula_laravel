<?php
    echo "[1]sum - [2]multiplication - [3]division - [4]subtraction";

    $number = intval(readline("Enter the number reffering to the tabe:"));

    switch($number):
        case 1:
            for($i = 0;$i < 10;$i++){
                echo "$number + $i = ".$number+$i;
            }
            break;
        case 2:
            for($i = 0;$i < 10;$i++){
                echo "$number * $i = ".$number*$i;
            }
            break;
        case 3:
            for($i = 0;$i < 10;$i++){
                echo "$number / $i = ".$nummber/$i;
            }
            break;
        case 4:
            for($i = 0;$i < 10;$i++){
                echo "$number - $i = ".$number - $i;
            }
            break;
        endswitch;
    
?>