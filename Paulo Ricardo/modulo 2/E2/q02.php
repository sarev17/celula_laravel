<?php
/*  2 - Ao copiar a url de um site ela o seguinte formato foi apresentado: 
    http:\/\/localhost:8000\/servicos\/profissional\/charline-santos-lins-de-araujo-1675169260
    corrija essa url para o formato http://localhost:8000/servicos/profissional/charline-santos-lins-de-araujo-1675169260
*/

        $string = "http:\/\/localhost:8000\/servicos\/profissional\/charline-santos-lins-de-araujo-1675169260";
        $string = str_replace('\\','',$string);
        echo $string;
?>