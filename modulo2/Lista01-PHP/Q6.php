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

        echo nl2br("NÚMEROS PRIMOS ANTES DESSE VALOR:\n");
        for ($i = 2; $i <= $valor; $i++) {
            $cont = 0;
            for ($j = $i; $j > 1; $j--) {
                if ($i % $j == 0) {
                    $cont++;
                }
            }
            if ($cont == 1) {
                echo nl2br("\n" . $i);
            }
        }
    }
    ?>
</body>

</html>