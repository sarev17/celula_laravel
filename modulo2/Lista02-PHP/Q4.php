<?php

$email = readline("Digite seu email: ");

$regexEmail = "/^[a-z0-9.]+@(gmail.com|hotmail.com|yahoo.com)$/i";

if (preg_match($regexEmail, $email)) {
    echo ("E-mail aceito!");
} else {
    echo ("E-mail inválido!");
}