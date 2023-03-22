<?php

 //6. Crie um script que leia um número do usuário e exiba todos os números primos menores ou iguais a esse número.
 echo 'Questão 6 <br>';
 $number = readline("Digite um número: ");
 echo 'Números primos até '.$number.'<br>';
 for($i=2;$i<=$number;$i++){
     $cont = 0;
     for($j=1;$j<=$i;$j++){
         if($i%$j==0){
             $cont++;
         }
     }
     if($cont==2){
         echo $i;
         echo '<br>';
     }
 }

 ?>
