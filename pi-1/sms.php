<?php
    session_start();
   //print_r($_SESSION);

     if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['txt_massage']) == true))
    {
  unset ($_SESSION['email']);
  unset ($_SESSION['txt_massage']);
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
<!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>sms</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <style>
        body{
        background-color: #E1CFCF;
        }
         .lo{
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        top:  50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 80px;
        border-radius: 15px;
        color: #fff;
        text-align: center !important;
        }
        h3,h2{
        color: #F8F8FF;
        }
          .ll{
            color: #d07d6b;
          }
      </style>
</head>
<body>

    <div class="lo">
        <?php
 echo "<font face='georgia' color='#d07d6b'><h1>Olá <u>$logado</u>!</h1></font>";
 ?>
 <br>
 <font face="georgia" color="">
 <h3>Recbemos sua mensagem, sua mensagem<br>
 está sendo analisada. Enviaremos o <strong>retorno no<br>
 e-mail cadastrado</strong>, combinado?</h3></font><br>
 <font face="georgia" color="">
 <h3>Ficamos felizes em saber que você quer<br>
  nos ajudar a melhorar nosso site. Fique de olho<br>
  para não perder nada, tudo bem?</h3></font><br><br>
 <font face="georgia" color=""><h2><strong>Abraços da equipe Doces do Bem.</strong></h2></font>
</div>
<div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-sm-12">
                 <font face="georgia"><a href="contact_p.php"><strong>Voltar</strong></a></font>
                 <p class="copyright_text">2023 Todos os direitos reservados. Design por <a href="https://www.al.senac.br/">Turma Programador Web 2023.3.42</a></p>
               </div>
               <br>
               <div class="col-lg-6 col-sm-12">
                  <div class="footer_social_icon">
                     <ul>
                        <li><a href="https://pt-br.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://br.linkedin.com/?src=go-pa&trk=sem-ga_campid.12619604099_asid.148548608796_crid.656532769092_kw.linked_d.c_tid.kwd-103941963_n.g_mt.e_geo.1031439&mcid=6821526239111716925&cid=&gclid=EAIaIQobChMI45b4yfLZ_wIV809IAB1wbATxEAAYASAAEgLAj_D_BwE&gclsrc=aw.ds&original_referer=https%3A%2F%2Fwww.google.com%2F"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
</body>
</html>