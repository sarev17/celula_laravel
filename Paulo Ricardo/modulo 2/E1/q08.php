<?php

  //8. Crie um script que leia um número do usuário e exiba todos os divisores desse número.
  echo 'Questão 8 <br>';
  $div = readline("Digite um número: ");
  $i = 1;
  $cont = 0;
  while($div>=$i){
       if($div%$i==0){
           $cont++;
       }
       $i++;
      
  }
  echo 'O número '.$div.' tem '.$cont.' divisores.<br>';

  ?>
