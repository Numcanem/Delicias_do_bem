<?php

session_start();
   //print_r($_REQUEST);
   if(isset($_POST ['submit']) && !empty($_POST['email'] && !empty($_POST['senha']))){

include 'conexao_pi.php';
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cadastro_login WHERE emeil = '$email' AND senha = '$senha'";

$result = $conexao->query($sql);

   if(mysqli_num_rows($result) < 1)
   {
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);
     header('Location: login.php');
  }
  else{
   $_SESSION['email'] = $email;
   $_SESSION['senha'] = $senha;
    header('Location: shop.php');
      }
  }
else{
    header('Location: login.php');
}  
?>