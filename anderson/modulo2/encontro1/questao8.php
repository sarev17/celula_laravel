<?php
    $value = intval(readline());
    for($i = 0;$i< $value;$i++){
        if($value % $i == 0){
            echo $i . " ";
        }
    }
?>