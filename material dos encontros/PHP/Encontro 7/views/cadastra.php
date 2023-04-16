<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário de Cadastro</title>
	<style>
		/* Estilos CSS para formatar o formulário */
		form {
			max-width: 500px;
			margin: auto;
			padding: 20px;
			background-color: #f2f2f2;
			border-radius: 5px;
		}

		label {
			display: block;
			margin-bottom: 8px;
			font-weight: bold;
		}

		input[type=text], input[type=email], input[type=password] {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 16px;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
        <center><h1>Cadatro de usuário</h1></center>
	<form action="../routes/userCreate.php" method="POST">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" required>

		<label for="email">E-mail:</label>
		<input type="email" id="email" name="email" required>

		<label for="senha">Senha:</label>
		<input type="password" id="senha" name="senha" required>

		<input type="submit" value="Cadastrar">
	</form>
    <br><br>
    <?php
        if(isset($_GET['status']))
            echo "<center>{$_GET['status']}</center>";
    ?>

</body>
</html>
