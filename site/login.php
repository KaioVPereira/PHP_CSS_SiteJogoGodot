<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrackDay</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>	
<body>
	<style>
		
	</style>
	<?php
		if (isset($_GET["msg"]) && $_GET["msg"]==1){
			echo "<script>alert('Email ou senha invalidos')</script>";
		}
	?>

	<div class="container-login">
		<header class="header">
			<a  class="logo"href="../index.php">TrackDay</a>
			<a  class="btn-cadastra" href="cadastro.php">Cadastre-se</a>
		</header>
		<h1>LOGIN<h1>
			<!--Icon do google e do Facebook-->
			<!--Linha  e opção ou -->
		<form  action="../bd/dao/site_autenticar.php" method="post" autocomplete="off">
		<div class="container-form">
			<!--<label  class="email" for="email">Email</label>-->
			<input type="email" name="email" id="email" placeholder="Email"/>
			<!--<label for="senha">Senha:</label>-->
			<a  class="esqueci" href="esqueci.php">Esqueci a senha</a>
			<input type="password" name="senha" id="senha" placeholder="Senha"/>
			<input type="submit" value="Entrar"/>
		</div>
			
		</form>
		<!--<br>
		<br>
		<a href="../index.php">Voltar para página inicial</a>-->
	</div>	


</body>
</html>