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
        Insira seu nome: <input name="nome" type="text"> <br />
        Insira sua idade: <input name="idade" type="number"> <br />
        <input type="submit" name="Enviar" id="enviar">
    </form>
    <br /><br />
    <?php
    if (isset($_GET['nome'], $_GET['idade'], $_GET['Enviar'])) {
        $name = $_GET['nome'];
        $idade = $_GET['idade'];

        echo "Meu nome é " . $name . ", tenho " . $idade . " anos.";
    }
    ?>
</body>

</html>