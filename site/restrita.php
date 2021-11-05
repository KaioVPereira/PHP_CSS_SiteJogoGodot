<?php
	session_start();

	if (!isset($_SESSION["id"])){
		header("location: login.php?msg=1");
	}
	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrackDay</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/restrita.css">
</head>	
<body>
	<main>
		<header class="header">
		<div class="menu-container">
                <a href="./restrita.php" class="logo">Trackday</a>
                <ul>
                    <li class ="ranking-list">Ranking
                        <ul>
                            <li class= "pista1"> Pista 1
                                <ul>
                                    <li><a href="../bd/dao/site_rank_facil_pista1.php">Fácil</a></li>
                                    <li><a href="../bd/dao/site_rank_medio_pista1.php">Médio</a></li>
                                    <li><a href="../bd/dao/site_rank_dificil_pista1.php">Difícil</a></li>
                                </ul>
                            </li>
                            
                            <li class= "pista2">Pista 2
                                <ul>
                                    <li><a href="../bd/dao/site_rank_facil_pista2.php">Fácil</a></li>
                                    <li><a href="../bd/dao/site_rank_medio_pista2.php">Médio</a></li>
                                    <li><a href="../bd/dao/site_rank_dificil_pista2.php">Difícil</a></li>
                                </ul>

                            
                            </li>
                        </ul>
                    </li>
                    <li><a href="./download.php">Download</a></li>
                    <li><a href="../../site/sobre_logado.php">Sobre nós</a></li>
                    <li><a href="../../site/documentacao_logado.php">Documentação</a></li>
                </ul>
                <a id="icon" class="icon">
                    <i></i>
                </a>
            </div>
		
		</header>
		<div class="dashboard">
		<div class="user-name">
			<h1>Bem Vindo, <?=$_SESSION["nome"]?>!</h1>
			<a href="../bd/dao/site_logout.php">sair</a>
		</div>
	</main>
	<script>
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