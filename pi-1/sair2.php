<?php
 	session_start();

unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['telefone']);
unset($_SESSION['massage']);

 header("Location: contact_p.php");
?>