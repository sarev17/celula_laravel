<?php


   
    //7. Crie um script que leia um número do usuário e exiba a sequência de Fibonacci até esse número.
    echo 'Questão 7 <br>';
    $N = readline("Digite um número: ");
    $aux = 1;
    $ant = 0;
    $soma = 1;
    echo 'Sequência de Fibonacci: <br>';
    echo $ant.'<br>';
    while($soma<=$N){
        echo $soma;
        echo '<br>';
        $soma = $ant+$aux;
        $ant = $aux;
        $aux = $soma;
    }
    echo '<br>';

    ?>
