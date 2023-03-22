<?php

    //4. Crie um script que leia um número do usuário e exiba a tabuada desse número de 1 a 10.
    echo 'Questão 4 <br>';
    $n = readline("Digite um número: ");
    for($i=0;$i<=10;$i++){
        echo $i.' x '.$n.' = '.$i*$n;
        echo '<br>';    
    }

    echo '<br>';

    ?>
