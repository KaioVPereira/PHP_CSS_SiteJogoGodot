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
	<link rel="stylesheet" type="text/css" href="../../css/globalpista.css">
</head>	
<body>
<main>
        <header class="header">
            <div class="menu-container">
                <a href="../../site/restrita.php" class="logo">Trackday</a>
                <ul>
                    <li class ="ranking-list">Ranking
                        <ul>
                            <li class= "pista1"> Pista 1
                                <ul>
                                    <li><a href="./site_rank_facil_pista1.php">Fácil</a></li>
                                    <li><a href="./site_rank_medio_pista1.php">Médio</a></li>
                                    <li><a href="./site_rank_dificil_pista1.php">Difícil</a></li>
                                </ul>
                            </li>
                            
                            <li class= "pista2">Pista 2
                                <ul>
                                    <li><a href="./site_rank_facil_pista2.php">Fácil</a></li>
                                    <li><a href="./site_rank_medio_pista2.php">Médio</a></li>
                                    <li><a href="./site_rank_dificil_pista2.php">Difícil</a></li>
                                </ul>

                            
                            </li>
                        </ul>
                    </li>
                    <li><a href="../../site/download.php">Download</a></li>
                    <li><a href="../../site/sobre_logado.php">Sobre nós</a></li>
                    <li><a href="../../site/documentacao_logado.php">Documentação</a></li>
                </ul>
                <a id="icon" class="icon">
                    <i></i>
                </a>
            </div>
           
        </header>

 
      <?php
      include("../dados_de_conexao.php");

      header("Access-Control-Allow-Origin: *");
      header("Access-Control-Allow-Headers: *");

      echo "<table border=1>";
      echo "<tr>";
      echo "<th>Nome</th>";
      echo "<th>Dificuldade</th>";
      echo "<th>Pista</th>";
      echo "<th>Tempo</th>";
      echo "</tr>";;


      $conexao   = mysqli_connect($hostname,$username,$password,$database);
      $sql = "SELECT id,nome,tempo, pista, dificuldade FROM rank where dificuldade = 'Fácil' and pista = 2 ORDER BY tempo ASC";
      $resultado = mysqli_query ($conexao,$sql) or die ("Erro ao tentar consultar registro");

      while ($registro = mysqli_fetch_array ($resultado))
      {
        $nome = $registro['nome'];
        $dificuldade = $registro ['dificuldade'];
        $pista = $registro ['pista'];
        $tempo = $registro ['tempo'];
        
        echo "<tr>";
        echo "<td>".$nome."</td>";
        echo "<td>".$dificuldade."</td>";
        echo "<td>".$pista."</td>";
        echo "<td>".$tempo."</td>";
        echo "</tr>";
        

      }


      mysqli_close($conexao);
      echo "</table>"


      ?>
    </main>
</body>