<?php
    include '../connect.php';
    $conn = new DB();
    $conn = $conn->connect();

    $query = "CREATE TABLE products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        price DECIMAL(10,2) NOT NULL,
        stock INT NOT NULL,
        category VARCHAR(255) NOT NULL
    );";

    if(mysqli_query($conn,$query)){
        http_response_code(201);
        mysqli_close($conn);
        echo json_encode(['status'=>true,'message'=>"Tabela PRODUCTS cadastrada"]);
        exit;
    }
    http_response_code(400);
    $erro = mysqli_error($conn);
    mysqli_close($conn);
    echo json_encode(['status'=>false,'message'=>"Erro ao criar a tabela PRODUCTS. ".$erro]);

?>