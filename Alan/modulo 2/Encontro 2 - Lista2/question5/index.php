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

    $cidadeEscolhida = ucfirst(strtolower(readline("Insira um nome de cidade: ")));
    $cont = 0;

    foreach ($cidades as $cidade) {
        if($cidade == $cidadeEscolhida){
            echo "$cidade foi encontrada\n";
            $cont++;
        }
    }
    if($cont == 0){
        echo "Cidade não encontrada";
    }
?>