<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Calculadora</title>
        <link rel="shortcut icon" href="./assets/calculadora.png" type="image/x-icon" />
        <style>
            section {
                margin: auto;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <section>
            <?php
                if(isset($_GET['erro'])){
                    echo "<span style='color: red;'>".$_GET['erro']."</span>";
                }
            ?>
            <form action="processamento.php" method="post">
                
                <div>
                    <label for="valor1">Primeiro Valor:</label>
                    <input type="text" id="valor1" name="valor1"  />
                </div>

                <div>
                    <label for="valor2">Segundo Valor:</label>
                    <input type="text" id="valor2" name="valor2"  />
                </div>

                <div>
                    <label for="operacao">Operação a ser realizada:</label>
                    <select name="operacao" id="operacao">
                        <option value="A">+</option>
                        <option value="S">-</option>
                        <option value="M">x</option>
                        <option value="D">/</option>
                    </select>
                </div>

                <div>
                    <input type="submit" value="Mostrar Resultado" />
                </div>

                <?php
                    if(isset($_GET['result'])){
                        echo "<span> RESULTADO: ".$_GET['result']."</span>";
                    }
                ?>
            </form>
        </section>

        <script></script>
    </body>
</html>
