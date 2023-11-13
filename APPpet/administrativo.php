<?php
if(!isset($_SESSION)){
  session_start();  
}else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>APPPET - Administrativo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
</head>
<body id="topo" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-defalt navbar -fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <buttom type="buttom" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </buttom>
                    <a class="navbar-brand" href="#mypage">SWGV</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="sobre.php" style="color:#ff0062" >SOBRE</a></li>
                        <li><a href="contato.php" style="color:#ff0062">CONTATO</a></li>
                        <li><a href="sair.php" style="color:#ff0062">SAIR</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron text-center">
            <h1>APPPET</h1>
            <p>Software Web de Gestão de consultas veterinárias</p>
        </div>

        <div class="container a">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-xs-12"> <!--arrumar a grid-->

                <button class="btn btn-lg">
                    <a href="#">
                        <span class="glyphicon"><i class="ab fa fa-solid fa-stethoscope" style="color:#ff0062"> Serviços</i></span>
                    </a>
                </button>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <button class="btn btn-lg">
                    <a href="#">
                       <span class="glyphicon"><i class="ab fa fa fa-heart aria-hidden="true"" style="color:#ff0062"> Solicitar</i></span>
                    </a>
                </button>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <button class="btn btn-lg" onclick="usuario()">
                    <a href="usuario.php">
                        <span class="glyphicon"><i class="ab fa fa-user aria-hidden="true"" style="color:#ff0062"> Usuário</i></span>
                    </a>
                </button>
             </div>
            </div>
            
            <div class="row">
             <div class="col-lg-4 col-md-4 col-xs-12">
                 <button class="btn btn-lg">
                    <a href="#">
                       <span class="glyphicon"><i class="ab fa fa-solid fa-users " style="color:#ff0062"> Perfis</i></span>
                    </a>
                </button>
             </div>
             <div class="col-lg-4 col-md-4 col-xs-12">
                <button class="btn btn-lg">
                  <a href="#">
                      <span class="glyphicon"><i class="ab fa fa-hospital-o" style="color:#ff0062"> Solicitações</i></span>
                    </a>
                </button>
             </div>
             <div class="col-lg-4 col-md-4 col-xs-12">
                <button class="btn btn-lg">
                  <a href="#">
                      <span class="glyphicon"><i class="ab fa fa-solid fa-paw" style="color:#ff0062"> PET</i></span>
                    </a>
                </button>
             </div>
            </div>
        </div>
        <br><br>
<!--Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
            <h2 class="text-center">CONTATO</h2>
            <div class="row">
                <div class="col-sm-12">
                    <p style="text-align: justify;">Software Desenvolvido para gestão de consultas veterinárias</p>
                    <div class="col-sm-12">
</div>
<div class="col-sm-4">

<p><span class="glyphicon glyphicon-map-marker"></span> Rio de Janeiro, RJ</p>
                        <p><span class="glyphicon glyphicon-phone"></span> +55 21999999999</p>
                        <p><span class="glyphicon glyphicon-envelope"></span> contato@apppet.com.br<object data="tograma" type=""></object></p>

</div>

</div>

</div>

<!-- Image of Location/map -->
<img src="img/img-login.jpg" class="w3-image w3-greyscale-min"
        style="width:100%">

        <footer class="container-fluid text-center">
            <a href="#topo" title="To Top">
                <span  style="color:#ff0062" class="glyphicon glyphicon-chevron-up"></span>
            </a>

            <p>Bootstrap Tema Desenvolvido por <a
            href="" title="" style="color:#ff0062"
            target="_blank">Sophia Balbino Ochsendorf</a></p>
        </footer>


        <script src="js/login.js"> </script>


    </body>
</html>