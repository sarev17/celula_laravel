<?php
    //Função de conexão com o banco
    function conecta(){
        $host = 'localhost';
        $user = 'root';
        $password = '1234';
        $bd = 'banco';
        $conn = mysqli_connect($host,$user,$password,$bd);
        if(!$conn){
            return ['error'=>"Conexao falhou: ".mysqli_error_connect($conn)];
        }
        return $conn;
    }

    //Função de criação da tabela
    function criar_tabela(){
        $conn=conecta();
        $name = 'oi'.
        $query = "
            CREATE TABLE cliente(
                id INT NOT NULL AUTO_INCREMENT,
                nome VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL,
                telefone VARCHAR(20) NOT NULL,
                data VARCHAR(100) NOT NULL,
                PRIMARY KEY(id)
            );    
        ";
        if(mysqli_query($conn,$query)){
            echo "Tabela Criada.";
        }else{
            echo "Nao foi possivel criar tabela: ".mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    //Função de inserção de registros
    function insere_cliente($data){
        $conn = conecta();
        $query = "
            INSERT INTO cliente(nome,email,telefone,data) VALUES ('".$data['nome']."','".$data['email']."','".$data['telefone']."','".$data['data']."')
        ";
        if(mysqli_query($conn,$query)){
            echo "Cliente inserido".'<br>';
        }
        mysqli_close($conn);
    }

    //Captar registros do banco
    function captar_registros(){
        $conn = conecta();
        $query = "
            SELECT* FROM cliente
        ";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            return $result;
            }
            mysqli_close($conn);
        }
    
    //Mostrar registros do banco
    function listar_registros(){
        $result=captar_registros();
        while($row=mysqli_fetch_assoc($result)){
                echo $row['nome']." ".$row['email']." ".$row['telefone']." ".$row['data'].'<br>';
    }
}
    //Buscar registro no banco
    function buscar_registro($nome){
        $result=captar_registros();
            while($row=mysqli_fetch_assoc($result)){
                if($row['nome']===$nome){
                    echo $row['nome']." ".$row['email']." ".$row['telefone']." ".$row['data'].'<br>';
                }
            }
        }
    
    //Função de atualização
    function atualizar($nome,$email){
        $conn = conecta();
        $query = "
            UPDATE cliente SET email='".$email."' WHERE nome='".$nome."'
        ";
        if(mysqli_query($conn,$query)){
            echo "Registros atualizados";
        }
        mysqli_close($conn);
    }

    //Excluir um registro
    function excluir_registro($nome){
        $conn = conecta();
        $query = "
            DELETE FROM cliente WHERE nome='".$nome."'
        ";
        if(mysqli_query($conn,$query)){
            echo "Registro excluido";
        }
        mysqli_close($conn);
    }
?>
