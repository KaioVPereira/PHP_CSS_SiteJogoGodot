<?php
include("../dados_de_conexao.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$id = $_POST["id"];
$nome = $_POST["nome"];
$dificuldade = $_POST["dificuldade"];
$tempo_volta = $_POST["tempo_volta"];
$pista = $_POST["pista"];

//$id = $_GET["id"];
//$nome = $_GET["nome"];
//$dificuldade = $_GET["dificuldade"];
//$tempo_volta = $_GET["tempo_volta"];


$resposta = array();
$conexao   = mysqli_connect($hostname,$username,$password,$database);
if (mysqli_connect_errno()) {
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$comando =  "insert into rank (id, nome, dificuldade, tempo, pista) Values ($id, '$nome', '$dificuldade', $tempo_volta, $pista)";
//$comando   = "update usuario set pontuacao=$tempo_volta where id=$id";
mysqli_query($conexao,$comando);
//echo $comando;

if (mysqli_affected_rows($conexao)>0){
	$resposta["msg"] = "ok";
}else{
	$resposta["msg"] = "falha";
}

echo json_encode($resposta);

mysqli_close($conexao);

?>