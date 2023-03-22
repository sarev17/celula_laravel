<?php


    //3. Crie um script que leia um número do usuário e verifique se o número é par ou ímpar. Exiba uma mensagem correspondente na tela.
    echo 'Questão 3 <br>';
    $num = readline("Digite um número: ");
    if($num%2==0){
        echo 'O número '.$num.' é par.';
    }else{
        echo 'O número '.$num.' é ímpar.';
    }

    echo '<br>';

    ?>
