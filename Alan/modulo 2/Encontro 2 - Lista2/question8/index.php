<?php
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

    $cidadesNovas = array(
        'Camocim',
        'Sobral',
        'Itapipoca',
    );

    $cidades = array_merge($cidades,$cidadesNovas);

    print_r($cidades);
    
?>