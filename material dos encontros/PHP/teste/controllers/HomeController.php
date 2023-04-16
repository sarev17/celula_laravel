<?php
    include '../controllers/ProductController.php';

    $products = new ProductController([]);
    $result = json_decode($products->list());
    
    
    include '../views/home/products.php';

?>