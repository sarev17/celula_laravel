<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['erro'])){
            echo "<span style='color: red'>".$_GET['erro']."</span>";
        }
    ?>

    <h1>Operações matemáticas</h1>
    <form action="processa.php" method="post">
        <div>
            <label for="valor1">Valor 1</label>
            <input type="text" id="Valor1" name="valor1">
        </div>
        <div>
            <label for="valor2">Valor 2</label>
            <input type="text" id="Valor2" name="valor2">
        </div>
        <select name="op">
            <option value="soma">Soma</option>
            <option value="sub">Subtração</option>
            <option value="multi">Multiplicação</option>
            <option value="div">Divisão</option>
        </select>
        <div>
            <input type="submit" name="submit" value="Enviar">
        </div>
    </form>
</body>
</html>
