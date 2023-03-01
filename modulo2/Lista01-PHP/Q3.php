<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        Insira um número: <input name="valor" type="number"> <br />
        <input type="submit" name="Enviar" id="enviar">
    </form>
    <br /><br />
    <?php
    if (isset($_GET['valor'], $_GET['Enviar'])) {
        $valor = $_GET['valor'];
        if ($valor % 2 == 0) {
            echo $valor . " é par!";
        } else {
            echo $valor . " é impar!";
        }
    }
    ?>
</body>

</html>