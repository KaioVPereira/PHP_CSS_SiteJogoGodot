<!DOCTYPE html>
<html lang="pt-br">
<head charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrackDay</title>
	<link rel="stylesheet" href="../css/cadastro.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>	
<body>
	<div class="container">
		<header class="header">
			<a  class="logo" href="../index.php">TrackDay</a>
			<a  class="btn-login" href="../site/login.php">Login</a>
		</header>
		<h1>Crie uma conta<h1>
		<form action="../bd/dao/site_inserir.php" method="post" autocomplete="off" >
			<div class="container-form">
				<!--<label for="nome">Nome:</label>-->
				<input type="text" name="nome" id="nome" placeholder="Nome" />
				<!--<label for="email">Email:</label>-->
				<input type="text" name="email" id="email" placeholder="Email"/>
				<!--<label for="senha">Senha:</label>-->
				<input type="password" name="senha" id="senha" placeholder="Senha"/>
				<input type="submit" value="Cadastrar"/>
			</div>
		</form>
	</div>	
</body>
</html>