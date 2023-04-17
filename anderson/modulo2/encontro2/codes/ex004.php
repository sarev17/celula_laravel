<?php
    //email validator
    // @gmail.com - @hotmail.com - @yahoo.com.br

    $email = "vonneumann@gmail.com";
    $validation = array("gmail\\.com$","hotmail\\.com$","yahoo\\.com\\.br$");

    $domain = preg_replace('/^.*@/','',$email);
    if(preg_match("/". implode("|",$validation) . "/",$domain)){
        echo "The email is valid!";
    } else {
        echo "The email is not valid!";
    }

?>