<?php
    include '../models/User.php';


/**
 * Função para cadastrar um usuário.
 *
 * @param array $data Array contendo as informações do usuário a ser cadastrado:
 *   - nome: Nome do usuário (string).
 *   - email: Endereço de e-mail do usuário (string).
 *   - senha: Senha do usuário (string).
 *
 * @return string Mensagem informando se o cadastro foi realizado com sucesso ou não.
 */
    function userCreate(array $data){
        $user = new User();
        $user->nome = $data['nome'];
        $user->email = $data['email'];
        $user->senha = $data['senha'];

        $result = $user->create();

        return $result;
    }

?>