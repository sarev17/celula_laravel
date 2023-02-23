<?php
    $numbers = array[];
    $quantity = intval(readline());

    for($i = 0;$i < $quantity;$i++){
        $numbers[$i] = intval($quantity[$i]);
    }
    $sum = 0;
    for($i = 0;$i < count($numbers);$i++){
        $sum += $numbers[$i];
    }
    $average = $sum / count($numbers);

    $standard_dev = 0.0;
    for($i = 0;$i < count($numbers);$i++){
        $standard_dev += sqrt(pow($numbers[$i] - $quantity,2));
    }

    echo "Average = {$average}";
    echo "Standard deviation = {$standard_dev}";
?>