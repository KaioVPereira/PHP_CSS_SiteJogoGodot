<!DOCTYPE html>
<html>
<head>
</head>	
<body>
	<?php
		if (isset($_GET["msg"]) && $_GET["msg"]==1){
			echo "<script>alert('Email ou senha invalidos')</script>";
		}
	?>

	<div>
		<h2>LOGIN<h2>
		<form action="../bd/dao/site_autenticar.php" method="post">
			<label for="email">E-mail:</label><input type="text" name="email" id="email"/><br>
			<label for="senha">Senha.:</label><input type="password" name="senha" id="senha"/><br><br>
			<input type="submit" value="Entrar"/>
		</form>
		<a href="esqueci.php">Esqueci a senha</a><br>
		<a href="cadastro.php">Não tenho cadastro</a><br>
		<a href="../index.php">Voltar para página inicial</a>
	</div>	
</body>
</html>