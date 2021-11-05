<?php
	session_start();

	if (!isset($_SESSION["id"])){
		header("location: login.php?msg=1");
	}
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrackDay</title>
    <link rel="stylesheet" href="../css/doc.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="header"> 
		<div class="mobile-first  center">
		<a  class="logo" href="./restrita.php">Trackday</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
		</a>
		
		</div>

	</header>
	</header>
    <main>
        <section class="sidebar">
            <div class = "sidebar-link">
                <h1>Documentação</h1>
                <nav>
                    <ul>
                        <li><a href="#instrucoes"> Instruções de Download</a></li>
                        <li><a href="#instrucaojogo">Instruções do Jogo</a></li>
                    </ul>
                </nav>
            </div>

            <div class="sidebar-doc">

                <div class="instrucao-container" id ="instrucoes">
                        <h1>Instruções de Download</h1>
                        <p>
                            Ao se cadastra no site, você terá acesso ao download do jogo, o arquivo estará em zip,  e recomendado o 
                            uso de algum aplicativo que faça essa opção de extração.
                            Após o download e a  extração do arquivo e só se divertir jogando esse maravilhoso jogo de corrida.
                        </p>
                        
                </div>
                <div class="instrucaojogo" id ="instrucaojogo">
                        <h1>Instruções do Jogo</h1>
                        <p>Você precisa ser rápido e preciso.
                            O desafio do jogo é completar uma quantidade de voltar, sem bater, e no menor tempo possível.
                            Caso você bata muito, ou ande muito lento na pista, você não vai conseguir completar as suas voltas e 
                            vai vai fracassar.
                            Não abuse das zebras ou tente cortar curvas, ou perderá vidas também.
                            Você terá um tempo, e um número de vídas, a cada volta o seu tempo vai aumentando, 
                            mas caso seja muito lento você não vai conseguir completar a volta e vai fracassar, 
                            porém se bater muito também perdera suas vídas e não vai conseguir completar as voltar necessárias. 
                            Suas vidas e tempo, depende do nível de dificuldade.<br>
                            <span class="span-controle">
                            Utilize "W" ou seta para cima, para acelerar seu carro.<br>
                            Utilize "A" ou seta para esquerda, para virar o carro para esquerda.<br>
                            Utilize "D" ou seta para direita, para virar o carro para direita.<br>
                            Utilize "S" ou seta para baixo, para freiar ou dar ré no carro.<br>
                            </span>
                            <h3>Níveis de dificuldades:</h3>

                            <span class="span-facil">Fácil - Para quem ainda está pegando o jeito do carro
                            Nesta dificuldade você começa com 20 segundos e terá mais 20 segundos a cada volta que completar,
                            você precisa completar somente 3 voltas, e terá 5 vidas é "Molezinha".<span><br>

                            <span class="span-medio">Médio - Para quem ja acostumou com o carro
                            Nesta dificuldade você começa com 17 segundos e tera mais 17 segundos a cada volta que completar, 
                            você precisa completar 5 voltas, e terá 3 vidas, está começando a ficar desafiante.</span><br>

                            <span class="span-dificil">Difícil - Para quem quer um desafio a ser cumprido.
                            Nesta dificuldade você começa com 14 segundos e terá mais 14 segundos a cada volta que completar, 
                            você precisa completar 10 voltas, e terá sómente uma unica vida, prepare-se para dar "Rage".</span><br>

                            Complete as voltas em todas as dificuldades para entrar no ranking de todos os rankings, 
                            quero ver cravar seu nome no primeiro da lista.
                        </p>
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