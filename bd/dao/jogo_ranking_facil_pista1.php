<?php
include("../dados_de_conexao.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$usuario = array();

$conexao   = mysqli_connect($hostname,$username,$password,$database);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$comando   = "SELECT id,nome,tempo, pista FROM rank where dificuldade = 'Fácil' AND pista = 1 ORDER BY tempo ASC";
$resultado = mysqli_query($conexao,$comando);

$resposta = [];

while ($dado = mysqli_fetch_assoc($resultado)){
	$usuario["id"]    = $dado["id"];
	$usuario["usuario"]  = $dado["nome"];
	$usuario["tempo_volta"] = $dado["tempo"];
	$usuario["pista"] = $dado["pista"];		
	$resposta[] = $usuario;
}
echo json_encode($resposta);

mysqli_free_result($resultado);
mysqli_close($conexao);



?>