<?php
include "conexao_pi.php";
print_r($_REQUEST);
$email = $_POST['txt_email'];
$massage = $_POST['txt_massage'];

echo "$email", "$massage";

$conult_cliente = "INSERT INTO sms (email, massagem)
VALUES('$email', '$massage')";

$conulta_cliente = mysqli_query($conexao, $conult_cliente);

   if(isset($_POST ['submit']) && !empty($_POST['txt_email'] && !empty($_POST['txt_massage']))) {

include 'conexao_pi.php';
   $_SESSION['txt_email'] = $email;
   $_SESSION['txt_massage'] = $massage;

$sql = "SELECT * FROM sms WHERE email = '$email' AND  massagem = '$massage'";

$result = $conexao->query($sql);

   if(mysqli_num_rows($result) < 1)
   {
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);
     header('Location: nega2.php');
  }
  else{
   $_SESSION['email'] = $email;
   $_SESSION['senha'] = $senha;
    header('Location: sms.php');
      }
  }
else{
    header('Location: nega2.php');
}  
?>