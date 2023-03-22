<?php
/**
 * 6 - Ordene o array em ordem decrescente.
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

rsort($cidades);
foreach($cidades as $cidade){
    echo $cidade.'<br>';
}
?>