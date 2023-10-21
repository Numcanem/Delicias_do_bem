<?php
    session_start();
   //print_r($_SESSION);

     if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);
     header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>perfil</title>
	<style>
		body{
        background-color: #E1CFCF;
        
        }
        h3,h1,tr{
        text-align: center;
        }
	</style>
</head>
<body>
	<a href="shop.php"><strong>Voltar</strong></a>
<h1>Olá, somos Delicias do Bem</h1>
<table>
<tr>
	<td><img src="images/WA0004.jpg" width="700"></td>
	<td> <h3>Biografia</h3>

		<strong><p>Delicias do Bem vem dez de 2018 trazendo muita felicidade, amor <br>
		e tranformação. Nossa loja vinha bem, mais com o tempo decidimos ampliar e <br>
		aprimorar nossa loja criando um site, para buscarmos todos os dias as experiencias <br>
		celebrativas de nossos clientes por meio de nossos produtos e ações. </p>
		<p>O sabor, o requinte e a excelência está em tudo que proporcionamos. Isso porque, <br>
			nosso maior objetivo é contribuir para que seus momentos festivos tenham mais sabor <br>
			e encanto por meio de nossos doces.</p></strong>
			<br>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
<p>(82) 92345-6789</p>
			<p>(82) 98640-2623</p>
			<br>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg><br>
			<a href="#">
            <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">delicia@gmail.com</span>
        </a>
			<br><br>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg>
			<p>São José da Tapera-AL, povoado Salgadinho.</p>
			<br><br>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
</svg>
			<p>26 de junho de 2023</p>
</td>
</tr>
</table>
</body>
</html>