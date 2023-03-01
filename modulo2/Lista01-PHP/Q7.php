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
        $secFibo = array();
        echo nl2br("SEQUÊNCIA DE FIBONACCI ATÉ ESSE VALOR:\n\n");


        for ($i = 0; $i < $valor; $i++) {
            if ($i < 2) {
                $secFibo[$i] = 1;
                echo nl2br("\n" . $secFibo[$i]);
            } else {
                $secFibo[$i] = $secFibo[$i - 1] + $secFibo[$i - 2];

                if ($secFibo[$i] > $valor)
                    break;

                echo nl2br("\n" . $secFibo[$i]);
            }
        }
    }
    ?>
</body>

</html>