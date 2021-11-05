<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrackDay</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
</head>	
<body>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			background-color: #343837;
			color: white;
			font-family:'nter',sans-serif ;
		}
		.btn-back-login{
			display: inline-block;
			width: 150px;
			height: 50px;
			background-color: #0F9B8E;
			text-decoration: none;
			margin-left: 30px;
			margin-top: 10px;
			text-align: center;
			padding-top: 15px;
			border-radius: 10px;
		}
		.container-form{
			max-width: 600px;
			height: 300px;
			margin: 0 auto;
			padding: 30px;
		}
		input{
			width: 100%;
			height: 40px;
			border: 1px solid white;
			border-radius: 10px;
		}
		::-webkit-input-placeholder{
			font-size: 1.1rem ;
			color: white;
			padding-left: 10px;
		}
		input[type=submit]{
			width: 180px;
			height: 50px;
			font-size: 1.2rem;
			margin: 30px 100px 10px 150px;
			background-color: #0F9B8E;
			border: none;
		}
		h1{
			text-align: center;
			margin: 30px 0px 30px 0px;
			font-size: 1.9rem;
		}
		h3{
			text-align: center;
			margin: 40px 160px 40px 0px;
			font-size: 1.1rem;
		}
	</style>
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