<?php
// 4 - Crie um validador de email que somente aceite email dos servidores @gmail.com, @hotmail.com e @yahoo.com.br.
    
    $email = "paulo#!@yahoo.com.br";
    $regex = "/^[_0-9a-zA-Z-#!%$+\/=?~.]+@+gmail.com/";
    if(!preg_match($regex,$email)){
        $regex = "/^[_0-9a-zA-Z-#!%$+\/=?~.]+@+outlook.com/";
        if(!preg_match($regex,$email)){
            $regex = "/^[_0-9a-zA-Z-#!%$+\/=?~.]+@+yahoo.com.br/";
            if(!preg_match($regex,$email)){
                echo "Email inválido";
            }else{
                echo "Email válido";
            }
        }else{
            echo "Email válido";
        }
    }else{
        echo "Email válido";
    }
?>