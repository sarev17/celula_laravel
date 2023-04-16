<?php
/**
* 9 - Imprima todas as cidades do array da seguinte forma:
*  cidade 1 São Paulo
*  cidade 2 Rio de Janeiro
*  cidade 3 Belo Horizonte
*  cidade 4 Porto Alegre
*  cidade 5 Curitiba
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

for($i=0;$i<25;$i++){
    echo 'cidade '.($i+1).' '.$cidades[$i].'<br>';
}
?>