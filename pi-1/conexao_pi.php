<?php
$Host = 'Localhost';
$Username = 'root';
$Password = '';
$db = 'banco_pi';

$conexao = new mysqli($Host, $Username, $Password, $db);

if (!$conexao) {
       echo "Erro de conexão";
  }else{
  	   echo "Conexão realizada com sucesso!";
  }

?>
