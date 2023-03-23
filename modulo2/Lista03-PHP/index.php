<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="Q1.php">
        Insira o primeiro valor: <input aria-label="State" name="v1" type="text"> <br />
        Insira o segundo valor: <input aria-label="State" name="v2" type="text"> <br /><br />
        Selecione a Operação <br />
        <select aria-label="State" name="cx-selecao">
            <option value="0">Soma</option>
            <option value="1">Subtração</option>
            <option value="2">Multiplicação</option>
            <option value="3">Divisão</option>
        </select><br /><br />
        <input type="checkbox" name="check" id="caixa-de-selecao"> Resultado em binário<br /><br />
        <input type="submit" name="Enviar" id="enviar">
    </form>
    <br /><br />
</body>

</html>