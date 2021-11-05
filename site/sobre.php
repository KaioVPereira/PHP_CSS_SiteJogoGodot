<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrackDay</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/sobre.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    
</style>
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
    <main>
        <section class="sobre" >
            <h1 class="sobre-h1">Sobre Nós</h1>
            <div class="sobre-info">
                <p class="texto">
                    Nós somos uma equipe 7  estudantes de ciência da computação que  
                    esta desenvolvendo um projeto para faculdade a onde 
                    criamos um site para um jogo com  tematica de corrida.
                </p>
                <div>
                    
                </div>
            </div>
            <h1 class="desenvolvedor-texto">Os Desenvolvedores</h1>
            <div class="time">
                
                <!---São 7 desenvolvedores-->
                <div class="desenvolvedor  desenvolvedor1">
                    <img src="../imagens/people (2).jpg" alt="imagem de uma garota">
                    <h3>Giovana Pereira</h3>
                    <p>Desenvolvedora Full Stack</p>
                </div>
                <div class="desenvolvedor  desenvolvedor2">
                    <img src="../imagens/people (3).jpg" alt="foto de um garoto">
                    <h3>Kaio Pereira</h3>
                    <p>Desenvolvedor de Games</p>
                </div>
                <div class="desenvolvedor  desenvolvedor3">
                    <img src="../imagens/people (4).jpg" alt="foto de um garoto">
                    <h3>Christopher Miranda</h3>
                    <p>Desenvolvedor Web </p>
                </div>
                <div class="desenvolvedor  desenvolvedor4">
                    <img src="../imagens/people (5).jpg" alt="foto de um garoto">
                    <h3>Gabriel Rocha</h3>
                    <p>Desenvolvedor de Games</p>
                </div>
                <div class="desenvolvedor  desenvolvedor5">
                    <img src="../imagens/people (6).jpg" alt="foto de um garoto">
                    <h3>Thiago Rodrigues </h3>
                    <p>Desenvolvedor Web</p>
                </div>
                <div class="desenvolvedor   desenvolvedor6">
                    <img src="../imagens/people (7).jpg" alt="foto de um garoto">
                    <h3>Jhonata dos Santos</h3>
                    <p>Desenvolvedor  Back end</p>
                </div>
                <div class="desenvolvedor  desenvolvedor7">
                    <img src="../imagens/people (4).jpg" alt="foto de um garoto">
                    <h3>Pedro Henrique</h3>
                    <p>Desenvolvedor PHP</p>
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