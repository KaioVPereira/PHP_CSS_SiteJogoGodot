<?php
include("../dados_de_conexao.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$nome  = $_POST["nome"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$conexao = mysqli_connect($hostname,$username,$password,$database);
$sql = "insert into usuario(nome,email,senha,pontuacao) values('{$nome}','{$email}','{$senha}',0)";
mysqli_query($conexao, $sql);

echo "Dados inseridos com sucesso!";
echo "<a href='../../site/login.php'>Voltar ao login</a>";

mysqli_close($conexao);

?>