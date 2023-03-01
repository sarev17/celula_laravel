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
    <br />
    <?php
    if (isset($_GET['valor'], $_GET['Enviar'])) {

        $valor = $_GET['valor'];

        echo nl2br("DIVISORES DESSE VALOR:\n");
        for ($i = 1; $i < $valor + 1; $i++) {
            if ($valor % $i == 0) {
                echo nl2br("\n" . $i);
            }
        }
    }
    ?>
</body>

</html>