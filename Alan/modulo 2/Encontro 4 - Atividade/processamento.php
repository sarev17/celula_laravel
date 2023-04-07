<?php
    include "calculoOperacoes.php";
    include "validador.php";

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacao = strval($_POST['operacao']);


    if(!(verificarCamposVazios($_POST))){
        header("Location: index.php?erro=Todos os campos são obrigatórios");
        exit;
    }else{
        if(!verificarNumeros($valor1, $valor2)){
            header("Location: index.php?erro=Insira somente números");
            exit;
        }else{
            if($operacao == "A"){
                header("Location: index.php?result=".soma($valor1, $valor2));
            }elseif($operacao == "S"){
                header("Location: index.php?result=".subtracao($valor1, $valor2));
            }elseif($operacao == "M"){
                header("Location: index.php?result=".multiplicacao($valor1, $valor2));
            }elseif($operacao == "D") {
                if(verificarIndeterminação($valor2)){
                    header("Location: index.php?erro=Coloque um número diferente de ZERO no VALOR 2");
                    exit;
                }else{
                    header("Location: index.php?result=".divisao($valor1, $valor2));
                }
            }
        }
    }

?>