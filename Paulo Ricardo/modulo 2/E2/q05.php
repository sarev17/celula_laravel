<?php
/**
 * 5 - Crie um script que teste se uma determinada cidade está na lista, se estiver imprima “cidade encontrada” ou “não encontrada” caso contrário.
 * 
 */

 $cidades = array(
    'São Paulo',
    'Rio de Janeiro',
    'Belo Horizonte',
    'Porto Alegre',
    'Curitiba',
    'Salvador',
    'Fortaleza',
    'Recife',
    'Brasília',
    'Goiânia',
    'Manaus',
    'Belém',
    'Florianópolis',
    'Natal',
    'Vitória',
    'Campo Grande',
    'Cuiabá',
    'João Pessoa',
    'Maceió',
    'Teresina',
    'Aracaju',
    'Palmas',
    'Porto Velho',
    'Boa Vista',
    'Macapá'
);
    $city = "Macapa";
    $aux = 0;
    foreach($cidades as $cidade){
        if(($city===$cidade)){
            $aux=1;
        }
    }
    if($aux){
        echo "Cidade encontrada.";
    }else{
        echo "Cidade não encontrada";
    }
?>