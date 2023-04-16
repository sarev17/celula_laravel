<?php
    include '../controllers/ProductController.php';

    $data = file_get_contents('php://input');
    $data = json_decode($data,true);
    $product = new ProductController($data);

    echo $product->list();
?>