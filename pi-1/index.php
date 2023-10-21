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
      <title>Delicias do Bem</title>
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
   input{
         padding: 10px;
         border:none ;
         outline: none;

        }
        .inputSubmit{
         width: 100%;
    text-align: center;
    font-size: 16px;
    color: #fefefd;
    background-color: #d07d6b;
    padding: 10px;
    text-transform: uppercase;
    margin-top: 20px;
    display: block;
    font-weight: bold;
    border-radius: 5px;
    font-family: 'Poppins', sans-serif;
        }
        .inputSubmit:hover{
         color: #fefefd;
    background-color: #4a4949;
        }
</style>
   </head>
   <body>
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">Sobre</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="coffees.php">Doce</a>
                     </li>
                     <li class="nav-item">
                      
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contato</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           <li><a href="login.php"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                           
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
         <!-- banner section start --> 
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <font face="serif"><h1 class="banner_taital">Delicias do Bem</h1></font>
                                 <font face="georgia"><h5 class="tasty_text">Sabor irresistível</h5>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="about.php">Sobre nós</a></div>
                                    <div class="callnow_bt active"><a href="contact.php">Ligue agora</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <font face="serif"><h1 class="banner_taital">Delicias do Bem</h1></font>
                                 <font face="georgia"><h5 class="tasty_text">Sabor irresistível</h5>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="about.php">Sobre nós</a></div>
                                    <div class="callnow_bt active"><a href="contact.php">Ligue agora</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <font face="serif"><h1 class="banner_taital">Delicias do Bem</h1></font>
                                 <font face="georgia"><h5 class="tasty_text">Sabor irresistível</h5>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="about.php">Sobre nós</a></div>
                                    <div class="callnow_bt active"><a href="contact.php">Ligue agora</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- coffee section start -->
      <div class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <h1 class="coffee_taital">Nossa Oferta De Doces</h1>
               <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
            </div>
         </div>
         <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-1.png"></div>
                              <h3 class="types_text">Bolo no Palito</h3>
                              <p class="looking_text">Enfeite para comemoração de Batizados.</p>
                              <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-2.png"></div>
                              <h3 class="types_text">Bolo Girassol</h3>
                              <p class="looking_text">Bolo para Aniversário</p>
                              <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-3.png"></div>
                              <h3 class="types_text">Bolacha Doce</h3>
                              <p class="looking_text">Para adoçar sua vida</p>
                              <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-4.png"></div>
                              <h3 class="types_text">Torta de Limão</h3>
                              <p class="looking_text">Tudo Gostoso</p>
                              <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                             <div class="coffee_img"><img src="images/img-1.png"></div>
                              <h3 class="types_text">Bolo no Palito</h3>
                              <p class="looking_text">Enfeite para comemoração de Batizados.</p>
                              <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-2.png"></div>
                              <h3 class="types_text">Bolo Girassol</h3>
                              <p class="looking_text">Bolo para Aniversário</p>
                              <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-3.png"></div>
                              <h3 class="types_text">Bolacha Doce</h3>
                              <p class="looking_text">Para adoçar sua vida</p>
                              <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                               <div class="coffee_img"><img src="images/img-4.png"></div>
                              <h3 class="types_text">Torta de Limão</h3>
                              <p class="looking_text">Tudo Gostoso</p>
                              <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-1.png"></div>
                              <h3 class="types_text">Bolo no Palito</h3>
                              <p class="looking_text">Enfeite para comemoração de Batizados.</p>
                              <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-2.png"></div>
                              <h3 class="types_text">Bolo Girassol</h3>
                              <p class="looking_text">Bolo para Aniversário</p>
                              <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-3.png"></div>
                              <h3 class="types_text">Bolacha Doce</h3>
                              <p class="looking_text">Para adoçar sua vida</p>
                              <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-4.png"></div>
                              <h3 class="types_text">Torta de Limão</h3>
                              <p class="looking_text">Tudo Gostoso</p>
                              <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- coffee section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Sobre nossa loja</h1>
                  <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
               </div>
            </div>
            <div class="about_section_2 layout_padding">
               <div class="image_iman"><img src="images/about-img.png" class="about_img"></div>
               <div class="about_taital_box">
                                 <h1 class="about_taital_1">Objetivo da loja '</h1>
                  <p class=" about_text">Atender as expectativas de qualidade e excelência na produção de doces e salgados, visando manter a tradição e satisfação nos melhores momentos.</p>
                  <div class="readmore_btn"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">QUEM SÃO CLIENTES</h1>
                  <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
               </div>
            </div>
            <div class="client_section_2">
               <div class="client_taital_main">
                  <div class="client_left">
                     <div class="client_img"><img src="images/client-img1.png"></div>
                  </div>
                  <div class="client_right">
                     <h3 class="moark_text">Willian Jefferson/ Analista de Sistemas</h3>
                     <p class="client_text">"Analista de Sistemas apaixonado por tecnologia e pela arte de desenvolver soluções inovadoras. Focado em análise de requisitos, desenvolvimento e testes de software, sempre buscando a excelência na documentação técnica e na arquitetura de sistemas. Expert em programação e banco de dados, além de possuir vasta experiência em manutenção de sistemas. Amante da gestão de projetos e da segurança da informação, sempre atento às tendências e novidades do mercado."
</p>
                  </div>
               </div>
               <div class="client_taital_main">
                  <div class="client_left">
                     <div class="client_img"><img src="images/client-img2.png"></div>
                  </div>
                  <div class="client_right">
                     <h3 class="moark_text">Flávio vitor</h3>
                     <p class="client_text">"Sou cliente da Delicias do Bem apenas 3meses mais ja estou totalmente apaixonado por tudo, pois são simplesmente perfeito, essa empresa esta vindo com um engajamento muito bom. Estou amando tudo atendimento, as produções de Doces e Salgados, a historia deles e muito motivacional. Falando um pouco sobre mim agora, tenho 18 anos ensino medio completo cursado em Assistente administrativo e Marketing e uma frase que levo comigo é, Não espere pelo momento perfeito, faça de cada momento a oportunidade perfeita."</p>
                  </div>
               </div>
               <div class="client_taital_main">
                  <div class="client_left">
                     <div class="client_img"><img src="images/client-img3.png"></div>
                  </div>
                  <div class="client_right">
                     <h3 class="moark_text">Janice Silva</h3>
                     <p class="client_text">"Mora em São José da Tapera, Estudo na Escola José Soares Filho e Estudante de Programador Web, trabalho como Design Fotográfico, sou Cliente á 3meses."</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">NOSSO BLOG</h1>
                  <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
               </div>
            </div>
            <div class="blog_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="blog_box">
                        <div class="blog_img"><img src="images/blog-img1.png"></div>
                        <h4 class="date_text">05 De Agosto</h4>
                        <h4 class="prep_text">Dicas da chef de preparo para salgados veganos</h4>
                     </div>
                     <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                  </div>
                  <div class="col-md-6">
                     <div class="blog_box">
                        <div class="blog_img"><img src="images/blog-img2.png"></div>
                        <h4 class="date_text">08 De Agosto</h4>
                        <h4 class="prep_text">Receita para prepar bolo de casamento</h4>
                     </div>
                     <div class="read_bt"><a href="login.php">CONSULTE MAIS INFORMAÇÃO</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">ENTRAR EM CONTATO</h1>
                  <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Seu Email" name="email">
                        <textarea class="massage-bt" placeholder="mensagem" rows="5" id="comment" name="massage"></textarea>
                        <div class="send_bt"><a href="nega.php" class="inputSubmit" type="submit" name="submit" value="Enviar">Enviar</a></div><br>
                     </div>
                  </div>
                  
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-sm-12">
                  <p class="copyright_text">2023 Todos os direitos reservados. Projetado por <br>
                     <a href="https://www.al.senac.br/">Turma Programador Web 2023.3.42</a></p>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="footer_social_icon">
                     <ul>
                       <li><a href="https://www.facebook.com/SenacBrasil/?locale=pt_BR"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/i/flow/login?redirect_after_login=%2FSenacAlagoas"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://br.linkedin.com/school/senac-brasil/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/deliciasdobem01/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>