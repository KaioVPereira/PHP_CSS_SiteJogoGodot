<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrackDay</title>
    <link rel="stylesheet" href="../css/midia.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="header">
		<div class="mobile-first  center">
		<a  class="logo" href="../index.php">Trackday</a>

		<nav id="nav-link">
			<ul id="menu" role="menu">
				<li><a href="documentacao.php">Documentação</a></li>
				<li><a href="midia.php">Mídia</a></li>
				<li><a href="sobre.php">Sobre Nós</a></li>
				<li><a href="cadastro.php" class="cadastro">Cadastro</a></li>
				<li><a href="login.php" class="login">Login</a></li>
			</ul>	

		</nav>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
		</a>
		
		</div>

	</header>
			<div class="modal">
				<div class="modal_content">
					<img src="../imagens/menuinicial.jpeg" id="modal_img">
				</div>
				<span id="bt_close">&times;</span>
			</div>

    <main>  
	<h1>Fotos e Vídeos</h1>
			
	
        <section class="midia">
			<div class ="linha">
				<div class="card-car">
					<img src="../imagens/login.jpeg" alt="tela de login" class = "foto">
				</div>
				<div class="card-car">
					<img src="../imagens/menu.jpeg" alt="tela de menu" class = "foto">
				</div>
				<div class="card-car">
					<img src="../imagens/menuinicial.jpeg" alt="tela de menu inicial" class="foto">
				</div>
			</div>
			<div class="linha">
				<div class="card-car">
					<img src="../imagens/pistadejogo.jpeg" alt="tela de pista de jogo" class="foto">
				</div>
				<div class="card-car">
					<img src="../imagens/pistadojogo2.jpeg" alt=" tela de pista de jogo 2" class="foto">
				</div>
				<div class="card-car">
					<img src="../imagens/rankingima.jpeg" alt="tela de ranking" class="foto">
				</div>
			</div>

			<div class="linha">
				<div class="card-car">
					<img src="../imagens/teladehistorico.jpeg" alt="tela de historico" class="foto">	
				</div>
				<div class="card-car">
					<img src="../imagens/vitoria.jpeg" alt="tela de vitoria" class="foto">
				</div>
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
			function myFunction(){
				var x = document.getElementById("menu");
				if (x.style.display === "block") {
					x.style.display = "none";
				} else {
					x.style.display = "block";
				}
			}


			/* Parte para galeria de imagem*/

			let imagens= document.querySelectorAll('.foto');
			let modal = document.querySelector('.modal');
			let modalImg = document.querySelector('#modal_img');
			let btClose = document.querySelector('#bt_close');
			let srcVal="";

			for(let i =0; i<imagens.length;i++){
				imagens[i].addEventListener('click',function(){
					
					srcVal = imagens[i].getAttribute('src');
					modalImg.setAttribute('src', srcVal);
					modal.classList.toggle('modal_active');
				});
				
			}


			btClose.addEventListener('click', function(){
				modal.classList.toggle('modal_active');
			});



		</script>
		
</body>
</html>