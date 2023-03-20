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

$busca = readline("Busque uma cidade: ");

$busca = strtolower($busca);

$busca = ucfirst($busca);

$resultado = array_search($busca, $cidades);

if ($resultado != false) {
    echo ("CIDADE ENCONTRADA NO BANCO DE DADOS!");
} else {
    echo ("CIDADE NÃO CONSTA NO BANCO DE DADOS!");
}