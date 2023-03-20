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
        Insira o primeiro valor: <input name="v1" type="number"> <br />
        Insira o segundo valor: <input name="v2" type="number"> <br /><br />
        Selecione a Operação <br />
        <select name="cx-selecao">
            <option value="0">Soma</option>
            <option value="1">Subtração</option>
            <option value="2">Multiplicação</option>
            <option value="3">Divisão</option>
        </select>
        <input type="submit" name="Enviar" id="enviar">
    </form>
    <br /><br />
    <?php
    if (isset($_GET['v1'], $_GET['v2'], $_GET['cx-selecao'], $_GET['Enviar'])) {
        $v1 = $_GET['v1'];
        $v2 = $_GET['v2'];
        $op = $_GET['cx-selecao'];

        switch ($op) {
            case 0:
                echo nl2br("\nSoma = " . ($v1 + $v2));
                break;
            case 1:
                echo nl2br("\nSubtração = " . ($v1 - $v2));
                break;
            case 2:
                echo nl2br("\nMultipliacação = " . ($v1 * $v2));
                break;
            case 3:
                echo nl2br("\nDivisão = " . ($v1 / $v2));
                break;

            default:
                break;
        }
    }
    ?>
</body>

</html>