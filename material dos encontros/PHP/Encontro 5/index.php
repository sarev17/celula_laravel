<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            section{
                border: solid 1px;
                border-radius: 5px;
                padding: 1rem;
                width: fit-content;
            }
            form input{
                margin: 0.3rem 0;
            }
        </style>

    </head>

    <body>
        <section>
            <?php 
                if(isset($_GET['erro'])){
                    echo "<span style='color:red'>".$_GET['erro']."</span>";
                }
            ?>
            <form action="processa.php" method="post">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome">
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone">
                </div>
                <div>
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco">
                </div>
                <div>
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpar">
                </div>
            </form>
        </section>
    </body>
</html>