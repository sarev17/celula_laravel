<?php

    function campos_vazios(array $inputs){
        foreach($inputs as $input){
            if($input == ''){
               return false;
            }
        }
        return true;
    }

?>