<?php
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$datanasciemento = $_POST["datanasciemento"];
$email = $_POST["email"];
$senha= $_POST["senha"];
$endereco= $_POST["endereco"];
$cep= $_POST["cep"];


header("Location: telaregistro.html");

// definições de host, database, usuário e senha
$host = "localhost";
$db   = "cadatroclientes";
$user = "root";
$pass = "";
// conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass, $db) or trigger_error(mysqli_error($con), E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysqli_select_db($con, $db);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("INSERT into compras values ('$nome', '$cpf',
 '$datanasciemento', '$email','$senha', '$endereco', '$cep')");
// executa a query
mysqli_query($con, $query) or die(mysqli_error($con));

//liberando os dados resultantes
//mysqli_free_result($dados);
// fechando conexão com banco
mysqli_close($con);
?>