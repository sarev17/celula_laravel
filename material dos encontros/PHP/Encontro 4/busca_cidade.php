<?php

    $url = '..\Encontro 4\cidades.json';
    $json = file_get_contents($url);
    $array = json_decode($json,true);
    $busca = $_GET['cidade'];

    
    $cidades = array_filter($array,function($cidade)use($busca){
        return stripos($cidade['nome'],$busca) !== false;
    });

    $cidades = array_values($cidades);
    $cidades = json_encode($cidades);

    echo $cidades;

?>