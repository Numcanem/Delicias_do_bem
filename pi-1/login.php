<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tela de login</title>
	<style>
		 body{
        font-family: Arial, Helvetica, sans-serif;
         margin: 0 auto;
        color: white;
        background-color: #fbb5bf;
    }
    div{
    	background-color: rgba(0, 0, 0, 0.8);
        position: absolute;
        top:  50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 80px;
        border-radius: 15px;
        color: #fff;

        }
        input{
        	padding: 10px;
        	border:none ;
        	outline: none;

        }
        .inputSubmit{
        	background-color: dodgerblue;
        	border: none;
        	padding: 15px;
        	width: 100%;
        	border-radius: 10px;
        	 color: #fff;
        	 cursor: pointer;
        }
        .inputSubmit:hover{
        	background-color: deepskyblue;
        }

        }
        .btn-google{
            padding: 10px;
            border:none ;
            outline: none;
        }

        .fa-google {
            background-color:#FF0000;
            border: none;
            padding: 12px;
            width: 50%;
            border-radius: 10px;
             color: #fff;
             cursor: pointer;
        }
        .fa-google:hover{
            background-color: #FA8072;
        }

        .btn-facebook{
            padding: 10px;
            border:none ;
            outline: none;
        }

        .fa-facebook {
            background-color:#800000;
            border: none;
            padding: 12px;
            width: 50%;
            border-radius: 10px;
             color: #fff;
             cursor: pointer;
        }
        .fa-facebook:hover{
            background-color: #FF6347;
        }
a{ 
    color: #fff;
    text-decoration: none;
 }
 .ll{
color: #FF0000;
 }
 </style>
</head>
<body background="img/client-bg.png">
    <form action="lista_cliente_pi.php" method="POST">
      <font face="georgia"><a href="index.php"><strong>Voltar</strong></a></font>
<div>
	<h1>login</h1>

	<input type="text" placeholder="Email" name="email">
	<br><br>
	<input type="password" placeholder="Senha" name="senha">
	<br><br>
	<input class="inputSubmit" type="submit" name="submit" value="Enviar"><br><br>
    <hr><br>
    <a href="https://www.opservices.com.br/monitoramento-real-time/?gclid=EAIaIQobChMIhozJhL3I_wIVAkFIAB2VDQZ3EAAYASAAEgKg4fD_BwE" class="btn-google">
    <i class="fa-google">Entrar com Google</i>
    </a><br><hr><br>
    <a href="https://pt-br.facebook.com/" class="btn-facebook">
    <i class="fa-facebook">Entrar com Facebook</i>
    </a><hr><br>
 <a class="small" href="forgot-password.php">Esqueceu a Senha?</a>
<br><br>
    <a class="small" href="cliente.php">register sua conta!</a>
</div>
</form>
</body>
</html>