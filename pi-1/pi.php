<?php
include "conexao_pi.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone  = $_POST['telefone'];
$sexo = $_POST['genero'];
$data  = $_POST['data'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

echo "$nome", "$senha", "$email", "$telefone", "$sexo", "$data", "$cidade", "$estado", "$endereco";

$conult_cliente = "INSERT INTO cadastro_login(nome, senha, emeil, telefone, sexo, data, cidade, estado, endereco)
VALUES('$nome', '$senha', '$email', '$telefone', '$sexo', '$data', '$cidade', '$estado', '$endereco')";

$conulta_cliente = mysqli_query($conexao, $conult_cliente);

header('Location: login.php');
?>