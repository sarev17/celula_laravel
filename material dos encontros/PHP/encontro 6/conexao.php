<?php
    function conecta(){
        $host = 'localhost';
        $user = 'root';
        $password = '12345678';
        $bd = 'celula_laravel';

        $conn = mysqli_connect($host,$user,$password,$bd);
      
        if(!$conn){
            return ['error'=>"A conexão falhou!. ".mysqli_connect_error()];
        };
        return $conn;
      
    }

    function insere_usuario($data){
        $conn = conecta();
        echo $conn; exit;
        $sql = "
            INSERT INTO usuario (nome, email, senha) VALUES ('".$data['nome']."', '".$data['email']."', '".$data['senha']."');
        ";

        if(mysqli_query($conn,$sql)){
            return ["message"=>"usuário cadastrado"];
        }else{
            return ["error"=>"erro no cadastro ".mysqli_error($conn)] ;
        }

        mysqli_close($conn);
    }

    function busca(){
        $conn = conecta();
        

        $sql = "SELECT *FROM usuário";

        $result = mysqli_query($conn,$sql);

        if(!$result){
            echo "erro na conexão";
        }

        if(mysqli_num_rows($result)>0){
            while($row =  mysqli_fetch_assoc($result)){
                echo $row['nome']." ".$row['email'] . "<br>";
            }
        }else{
            echo "nenhum registro encontrado.";
        }
    }