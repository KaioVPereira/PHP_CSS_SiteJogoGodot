
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrackDay</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/ranking.css">
</head>	
<body>
      <?php
      include("../bd/dados_de_conexao.php");

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
      $sql = "SELECT id,nome,tempo, pista, dificuldade FROM rank where dificuldade = 'Médio' and pista = 2 ORDER BY tempo ASC";
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
</body>