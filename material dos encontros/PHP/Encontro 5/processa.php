<?php

    include 'validador.php';

    $data = $_POST;

    if(!campos_vazios($data)){
        header('Location: index.php?erro=Todos os campos são obrigatórios');
        exit;
    }


    header('Location: painel.html');
    exit;
?>