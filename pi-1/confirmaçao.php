<?php

session_start();

 print_r($_REQUEST);

   if(isset($_POST ['submit']) && !empty($_POST['txt_email'] && !empty($_POST['txt_massage']))) {

include 'conexao_pi.php';
   $_SESSION['txt_email'] = $email;
   $_SESSION['txt_massage'] = $massage;

$sql = "SELECT * FROM sms WHERE email = '$email' AND  massagem = '$massage'";

$result = $conexao->query($sql);

  }
?>