<?php

if (filter_var($_POST['v1'], FILTER_SANITIZE_NUMBER_INT) && filter_var($_POST['v2'], FILTER_SANITIZE_NUMBER_INT)) {
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $op = $_POST['cx-selecao'];

    switch ($op) {
        case 0:
            if (isset($_POST['check']))
                echo nl2br("\nSoma = " . decbin($v1 + $v2));
            else
                echo nl2br("\nSoma = " . ($v1 + $v2));
            break;
        case 1:
            if (isset($_POST['check']))
                echo nl2br("\nSubtração = " . decbin($v1 - $v2));
            else
                echo nl2br("\nSubtração = " . ($v1 - $v2));
            break;
        case 2:
            if (isset($_POST['check']))
                echo nl2br("\nMultiplicação = " . decbin($v1 * $v2));
            else
                echo nl2br("\nMultiplicação = " . ($v1 * $v2));
            break;
        case 3:
            if (isset($_POST['check']))
                echo nl2br("\nDivisão = " . decbin($v1 / $v2));
            else
                echo nl2br("\nDivisão = " . ($v1 / $v2));
            break;

        default:
            break;
    }
} else {
    echo "<span style='color:red'>Por favor digite valores inteiros!</span>";
}