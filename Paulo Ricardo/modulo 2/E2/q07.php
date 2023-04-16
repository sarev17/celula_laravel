<?php
/**
 * 7 - Remova o primeiro e último elemento do array.
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

    array_shift($cidades);
    array_pop($cidades);

    foreach($cidades as $cidade){
        echo $cidade;
        echo '<br>';
    }
?>