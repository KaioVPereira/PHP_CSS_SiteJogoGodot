<?php
include("../dados_de_conexao.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$senha = isset($_POST["senha"]) ? md5($_POST["senha"]) : "";

$conexao = mysqli_connect($hostname,$username,$password,$database);
$sql = "select * from usuario where email='{$email}' and senha='{$senha}'";
$resultado = mysqli_query($conexao,$sql);
if ($linha = mysqli_fetch_assoc($resultado)){
	session_start();
	$_SESSION["id"] = $linha["id"];
	$_SESSION["nome"] = $linha["nome"];
	$_SESSION["email"] = $linha["email"];
	$_SESSION["pontuacao"] = $linha["pontuacao"];
}

mysqli_free_result($resultado);
mysqli_close($conexao);
header("location: ../../site/restrita.php");

?>