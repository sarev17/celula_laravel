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

    // a)
    $city = readline("Inform a city: ");
    if(in_array($city,$cidades)){
        echo "City found";
    } else {
        echo "City not found";
    }

    // b)
    //Removing the first element
    array_shift($cidades);
    //Removal of a last element
    array_pop($cidades);

    echo $cidades;
    echo "<br>";

    // c)
    $new_cities = array(
        "Florianópolis",
        "Rio Branco",
        "Caucaia",
        "Governador Valadares",
        "São Gonçalo do Amarante",
        "Bahia",
        "Sobral",
        "Horizonte",
        "Distrito Federal",
        "Pernambuco",
        "Nova Olinda",
        "Volta Redonda",
        "Maracanaú",
        "Juazeiro do Norte"
    );
    $result = array_merge($cidades,$new_cities);
    print_r($result);
    echo "<br>";

    // d)
    for($i = 0;$i < count($cidades);$i++){
        echo "cidade ". ($i+1) . " " . "$cidades[$i]<br>";
    }
?>