<?php



   //9. Crie um script que leia uma lista de números do usuário e exiba a média e o desvio padrão desses números.
   echo 'Questão 9 <br>';
   $tam = readline("Digite o tamanho do array: ");
   $array[]=0;
   for($j=0;$j<$tam;$j++){
    $array[$j]=readline("Digite o ".$j." valor do array: ");
   }
   $media = 0;
   for($j=0;$j<$tam;$j++){
    $media=$media+$array[$j];
   }
   $media=$media/$tam;
   echo 'A média é '.$media.'<br>';
   
   $dp = 0;
   for($j=0;$j<$tam;$j++){
    $dp=$dp+($array[$j]-$media)*($array[$j]-$media);
   }
   $dp=$dp/$tam;
   $dp=sqrt($dp);
   echo 'O desvio padrão é '.$dp;

   ?>
