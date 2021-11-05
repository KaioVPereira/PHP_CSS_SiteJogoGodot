<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrackDay</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/esqueci.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>	
<body>
	<div>
		<a class="btn-back-login" href="login.php">Voltar para login</a>
		<h1>ESQUECI SENHA<h1>

		<h3 >Informe o seu e-mail para recuperar a senha:</h3>
		<form action="recuperar_senha.php" method="post" autocomplete="off">
			<div class="container-form">
				<input type="text" name="email" id="email" placeholder="Email"/><br>
				<input type="submit" value="Enviar"/>
			</div>
		</form>
		
	</div>	
</body>
</html>