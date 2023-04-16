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

    $diff = array_diff(($cidades),array($busca));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php echo (count($diff) === count($cidades))?"Não encontrado":"Encontrado" ?>
    </pre>
</body>

</html>