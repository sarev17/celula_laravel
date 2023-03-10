<?php
/**
 * 8 - Crie uma array com novas cidades e atualize via código o array $cidades.
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

$newArray = array(
    'Viçosa do Ceará',
    'Sobral',
    'Fortaleza',
    'Crato',
    'Itapipoca',
    'Acaraú',
    'Quixadá',
    'Aracati'
);

$resultado = array_merge($cidades,$newArray);

foreach($resultado as $cidade){
    echo $cidade;
    echo '<br>';
}
?>