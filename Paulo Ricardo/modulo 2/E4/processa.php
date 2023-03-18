<?php

    $data = $_POST;
    
    foreach($data as $input)
        if($input == ''){
            header('Location: index.php?erro=Todos os campos são obrigatórios');
            exit;
        }

    $input = $data['op'];
    switch($input){
        case 'soma':
            echo "soma = ".($data['valor1']+$data['valor2']);
            break;
        case 'sub':
            echo "Subtração = ".($data['valor1']-$data['valor2']);
            break;
        case 'multi':
            echo "Multiplicação = ".($data['valor1']*$data['valor2']);
            break; 
        case 'div':
            echo "Divisão = ".($data['valor1']/$data['valor2']);
            break; 
        default;
        echo "Brilha, brilha estrelinha";
    }
?>