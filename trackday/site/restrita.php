<?php
	session_start();

	if (!isset($_SESSION["id"])){
		header("location: login.php?msg=1");
	}
	
?>

<!DOCTYPE html>
<html>
<head>
</head>	
<body>
	<header class="menu-perfil"> 
		<a href="" class="logo">Trackday</a>

		<nav>
			<ul>
				<li><a href=""><i class="far fa-user"></i>Perfil</a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
			</ul>
		</nav>
	</header>
	<div>
		<span>Bem vindo <?=$_SESSION["nome"]?>! </span><a href="../bd/dao/site_logout.php">sair</a><br><br>

		<a href="#perfil">Perfil</a><br><!--Edita foto, senha, nome, e-mail etcc-->
		<a href="#historico">Histórico de partidas</a><br>
		<a href="#ranking">Ranking</a><br>
		<a href="#download">Download</a><br>
		
		<hr>
		<h2>Perfil</h2>
		<div id="perfil">
			Edita foto<br>
			nome<br>
			email<br>
			senha<br>
		</div>

		<hr>
		<h2>Histórico de partidas</h2>
		<div id="historico">
			dia1<br>
			dia1<br>
			dia1<br>
			dia1<br>
		</div>

		<hr>
		<h2>Ranking</h2>
		<div id="ranking">
			jogador1<br>
			jogador2<br>
			jogador3<br>
			jogador4<br>
		</div>

		<hr>
		<h2>Dowload</h2>
		<div id="download">
			Clique <a href="../jogo/jogo.zip">aqui</a> pra fazer download do jogo
		</div>
	</div>	
	<hr>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>
</html>