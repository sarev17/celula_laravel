<?php
    include 'conexao.php';

    $conn = conecta();

    $data = [
        'nome' => "andre veras",
        'email' => "sarev17@gmail.com",
        'senha' => '12345678'
    ];

    $result = busca();

    print_r($result);

    

?>