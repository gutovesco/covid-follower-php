<?php include_once"news.php";?>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>CovidFollower</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
               <div class="main">
                  <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
                  <div class="menu_text">
                     <ul>
                        <div class="togle_">
                           <div class="menu_main">
                           </div>
                        </div>
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="index.html">Home</a>
                              <a href="protect.html">Protect</a>
                              <a href="about.html">About</a>
                              <a href="doctors.html">Doctors</a>
                              <a href="news.html">News</a>
                           </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                        <span onclick="openNav()"><img src="images/toogle-icon.png" class="toggle_menu"></span>
                        <span onclick="openNav()"><img src="images/toogle-icon1.png" class="toggle_menu_1"></span>
                     </ul>
                  </div>
               </div>
            </div>
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="container">
                              <h1 class="banner_taital">Ajude a divulgar informação</h1>
                              <p class="banner_text">Faça um relatório com informações de um caso que você tenha conhecimento e ajude a combater a COVID!</p>
                              <div class="more_bt"><a href="#new_form">Quero ajudar</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>            
      </div>
      <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- protect section start -->
      <div class="protect_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="protect_taital">Como se proteger</h1>
                  <p class="protect_text">Abaixo estão algumas medidas preventivas para que você fique seguro.</p>
               </div>
            </div>
            <div class="protect_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="hands_text"><a href="#">Lave suas mãos <br>frequentemente</a></h1>
                     <h1 class="hands_text_2"><a href="#">Mantenha <br>distanciamento social</a></h1>
                     <h1 class="hands_text"><a href="#">Evitar tocar os<br>olhos, nariz e boca</a></h1>
                  </div>
                  <div class="col-md-6">
                     <div class="image_2"><img src="images/img-2.png"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- protect section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_img"><img src="images/img-1.png"></div>
               </div>
               <div class="col-md-6">
                  <h1 class="about_taital">O que é Coronavirus?</span></h1>
                  <p class="about_text">É um vírus que causa uma doença respiratória — a covid-19 — pelo agente coronavírus, identificado em dezembro de 2019 na China.</p>
                  <div class="read_bt">
                     <a 
                     href="https://www.uol.com.br/vivabem/noticias/redacao/2020/01/25/tire-suas-principais-duvidas-sobre-o-coronavirus-que-se-espalha-pelo-mundo.htm">
                     Ler mais
                  </a></div>
               </div>
            </div>
         </div>
      </div>
      <div class="news_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                    <h1 class="news_taital">Últimas notícias</h1>
                     <p class="news_text">Aqui você pode acompanhar as últimas notícias relacionadas ao coronavírus.</p>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="images/news-img.png"></div>
                           <?php
                           echo "<h2>{$news_title}</h2>"
                           ?>
                           <?php
                           echo "<p>{$news_description}</p>"
                           ?>
                           <div class="read_btn">
                           <?php
                           echo "<a href={$news_link}>Ler mais</a>"
                           ?>
               
                           </div>
                        </div>
                     </div>      
                  </div>
               </div>
            </div>
            </div>
         </div>
      </div>
      <div id="new_form" class="update_section">
         <div class="container">
            <h1 class="update_taital">Enviar um novo relatório</h1>
            <form action="action_page.php" method="post">
               <div class="form-group">
                   <textarea required class="update_mail" placeholder="Nome da vítima" rows="5" id="name" name="name"></textarea>
                   <textarea required class="update_mail" placeholder="Idade" rows="5" id="age" name="age"></textarea>
                   <textarea required class="update_mail" placeholder="Endereço" rows="5" id="address" name="address"></textarea>
                   <textarea required class="update_mail" placeholder="Telefone" rows="5" id="phone" name="phone"></textarea>
                   <textarea required class="update_mail" placeholder="Sintomas" rows="5" id="simptons" name="simptons"></textarea>
                   <textarea required class="update_mail" placeholder="Histórico de doenças" rows="5" id="diseases" name="diseases"></textarea>
                   <input class="update_mail"type="submit"/>
               </div>
               
            </form>
         </div>
      </div>
      <!-- update section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Sobre</h2>
                     <p class="footer_text">
                        Essa aplicação foi desenvolvida para o curso de Analise e Desenvolvimento de Sistemas na FATECMM durante a aula de programação web. Projeto criado pelos alunos Augusto Vesco Raveli, Samuel Marques Santos, Lucas Souza Bocalini e Wellington Cristiano Nogara.
                     </p>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Contato</h2>
                     <div class="location_text">
                        <ul>
                           <li>
                              <a href="https://github.com/gutovesco/covid-follower-php"><i class="fa fa-github-square" aria-hidden="true"><span class="padding_15">Github</span></a></i>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                              <span class="padding_15">(19) 999707754</span></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                              <span class="padding_15">guto.vesco@hotmail.com</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free  html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>