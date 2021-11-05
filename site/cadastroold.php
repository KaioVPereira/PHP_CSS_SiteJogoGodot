<!DOCTYPE html>
<html>
<head>
</head>	
<body>
	<div>
		<h2>CADASTRO<h2>
		<form action="../bd/dao/site_inserir.php" method="post">
			<label for="nome">Nome:</label><input type="text" name="nome" id="nome"/><br>
			<label for="email">E-mail:</label><input type="text" name="email" id="email"/><br>
			<label for="senha">Senha.:</label><input type="password" name="senha" id="senha"/><br><br>
			<input type="submit" value="Cadastrar"/>
		</form>
		<a href="login.php">Voltar para login</a><br>
	</div>	
</body>
</html>