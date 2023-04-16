<?php

    include '../controller/userController.php';

    $data = $_POST;

    $result = userCreate($data);

    header("Location: {$_SERVER['HTTP_REFERER']}?status={$result['message']}");
    

?>