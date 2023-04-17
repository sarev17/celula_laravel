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

    for ($i=0; $i <  sizeof($cidades); $i++) { 
        echo "Cidade " . ($i+1) . " $cidades[$i]\n";
    }
    
?>