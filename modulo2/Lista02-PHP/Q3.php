<?php

$info = "07A-6M2a4ds30Ò3142´we9.7";

$apenasNumeros = preg_replace("/[^0-9]/", '', $info);

$cpf = substr($apenasNumeros, 0, 11);

$formatoCpf = preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cpf);

echo ($formatoCpf);

$aux = $info;

$info = preg_replace("/[0-9]/", '', $aux);

echo ("\ninfo: " . $info);