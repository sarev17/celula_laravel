<?php
    $email = readline("Informe seu email: ");

    // $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@(gmail.com|hotmail.com|yahoo.com.br)$/i';

    if (preg_match($regex, $email)) {
        echo "$email é um email válido";
    } else { 
        echo "$email é um email inválido";
}  
?>