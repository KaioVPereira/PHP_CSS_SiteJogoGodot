<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrackDay</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>	
<body>
	
	<header class="header">
		<div class="mobile-first  center">
		<a  class="logo" href="#">Trackday</a>

		<nav id="nav-link">
			<ul id="menu" role="menu">
				<li><a href="./site/documentacao.php">Documentação</a></li>
				<li><a href="./site/midia.php">Mídia</a></li>
				<li><a href="./site/sobre.php">Sobre Nós</a></li>
				<li><a href="site/cadastro.php" class="cadastro">Cadastro</a></li>
				<li><a href="site/login.php" class="login">Login</a></li>
			</ul>	

		</nav>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
		</a>
		
		</div>

	</header>
	<main>
		<section class="sidebar">
			<div class="sidebar-info">
				<h1>Melhor Experiencia de um  jogo de corrida 2D</h1>
				<button  id="btn">Veja Mais</button>
			</div>
			<div class="sidebar-img">
				<img src="imagens/carimage.jpeg" alt="imagem de carro">
			</div>
		</section>
	</main>
	<footer>
		<div class="footer">
            <p>Copyright 2021  para equipe de desenvolvimento</p>
            <h4><a href="../index.php">Trackday</a></h4>
        </div>
	</footer>

		<script>
			const url = 'http://localhost/trackday/site/sobre.php';
			const button = document.getElementById('btn');
			button.addEventListener('click',()=>{
				 window.location.assign(url);
			})
			
			function myFunction(){
				var x = document.getElementById("menu");
				if (x.style.display === "block") {
					x.style.display = "none";
				} else {
					x.style.display = "block";
				}
			}
		</script>
		
</body>
</html>