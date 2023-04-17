<?php
    $info = "07A-6M2a4ds30Ò3142´we9.7";

    //a)
    $masked_numbers = preg_replace('/[^0-9]/','',$info);
    //b)
    $new_format = preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/","$1.$2.$3-$4",$masked_numbers);
    //c)
    $remove_numbers = preg_replace('/[0-9]/','',$info);

    echo $masked_numbers;
    echo "<br>";
    echo $new_format;
    echo "<br>";
    echo $remove_numbers;
?>