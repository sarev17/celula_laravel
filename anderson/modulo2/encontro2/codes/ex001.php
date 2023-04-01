<?php
    $value = 255;
    $format_value = floatval($value);
    $bin = sprintf("Value in binary: %b",$value);
    $hex = sprintf("Value in hexadecimal: %x",$value);
    $form = sprintf("Converted to R$ %.2f",$format_value);

    echo $bin;
    echo "<br>";
    echo $hex;
    echo "<br>";
    echo $form;

    
?>