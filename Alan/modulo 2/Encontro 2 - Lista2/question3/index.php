<?php
    $info = "07A-6M2a4ds30Ò3142´we9.7";
    // $cpf = $info;

    $cpf = preg_replace("/\D/",'', $info);
    echo "$cpf";

    $cpf = preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/","$1.$2.$3-$4",substr($cpf, 0, 11));
    echo "\n$cpf";

    $info = preg_replace("/\d/","",$info);
    echo "\n$info";
?>