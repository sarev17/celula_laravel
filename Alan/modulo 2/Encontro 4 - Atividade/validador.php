<?php

function verificarNumeros($valor1, $valor2){
    return (preg_match('/^[0-9]+$/', $valor1) && preg_match('/^[0-9]+$/', $valor2));
}

function verificarCamposVazios(array $inputs){
    foreach ($inputs as $input) {
        if($input == ""){
            return false;
        }
    }
    return true;
}

function verificarIndeterminação($valor2){
    return $valor2 == 0;
}

?>