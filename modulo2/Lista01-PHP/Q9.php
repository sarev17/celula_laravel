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
        Insira os valores separados por espaço: <input name="valores" type="text"> <br />
        Selecione a Operação <br />
        <select name="cx-selecao">
            <option value="0">Média</option>
            <option value="1">Desvio Padrão</option>
        </select>
        <input type="submit" name="Enviar">
    </form>
    <br /><br />
    <?php
    if (isset($_GET['cx-selecao'], $_GET['Enviar'], $_GET['valores'])) {
        $listaDeValores = $_GET['valores'];
        $opcao = $_GET['cx-selecao'];

        $listaDeValores = explode(' ', $listaDeValores);

        switch ($opcao) {
            case 0:
                $media = array_sum($listaDeValores) / count($listaDeValores);
                echo nl2br("\nA média dos valores é: " . $media);
                break;

            case 1:
                $media = array_sum($listaDeValores) / count($listaDeValores);
                $desvioPadrao = 0.0;

                for ($i = 0; $i < count($listaDeValores); $i++) {
                    $desvioPadrao += pow(($listaDeValores[$i] - $media), 2);
                }
                $aux = $desvioPadrao;
                $desvioPadrao = sqrt($aux / (count($listaDeValores) - 1));
                echo nl2br("\nO Desvio Padrão dos valores é: " . $desvioPadrao);
                break;

            default:
                break;
        }

    }
    ?>
</body>

</html>