<?php
include '../database/connect.php';
class User
{
    public $nome;
    public $email;
    public $senha;

    public function create()
    {
        $conn = new DB();
        $conn = $conn->connect();
        if (!$conn) {
            return ['error' => "A conexão falhou!. " . mysqli_connect_error()];
        };

        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$this->nome', '$this->email', '$this->senha');";

        if (mysqli_query($conn, $sql)) {
            return ["message" => "usuário cadastrado"];
        } else {
            return ["error" => "erro no cadastro " . mysqli_error($conn)];
        }

        mysqli_close($conn);
    }
}
