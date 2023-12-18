<?php
header("Access-Control-Allow-Origin", "*");
header("Access-Control-Allow-Methods", 'GET, PUT, POST, DELETE');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>
            APPPET - Login</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <script src="js/msgErro.js"></script>
<script src="js/alertify.js"></script>
<script
src="// cdn.jsdelivr.net/npm/alertifyjs@1.13./build/alertify.min.js"></script>
  <link rel="stylesheet"
   href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
   <link rel="stylesheet" href="style.css"/>
    </head>
    <body id="topo" data-spy="scroll" data-target=".navbar" data-offset="60">
        <nav class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                    <spam class="icon-bar"></spam>
                    <spam class="icon-bar"></spam>
                    <spam class="icon-bar"></spam>
                </button>
                <a class="navbar-brand" href="#myPage" style="color:#ff0062">APPPET</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavBar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="sobre.html" style="color:#ff0062">SOBRE</a></li>
                    <li><a href="contato.html" style="color:#ff0062">CONTATO</a></li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron text-center">
            <h1>APPPET</h1>
            <p> Software Web de Gestão de consultas veterinária </p>
        </div>


        <div class="container a">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h2>Área Restrita</h2>
                    <div id="mensagem" class="alert text-center" role="alert">

                    </div>

                    <form id="form-login" method="POST">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite o seu usuário">
                        </div>


                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" id="senha" name="senha" placeholder="Digite a sua senha" class="form-control">
                        </div>
                        <br>
                        <button type="button" class="btnAcessar btn-lg btn-block" style="color: white;border-color: #ff0062;"
                        name="btnLogin" id="btnLogin" value="Acessar"
                        onclic="login()">Acessar</button>


                        <!--<h4> Você ainda não possui uma conta?</h4>
                        <a href="cadastrar.php">Crie Grátis</a>-->
                    </form>
                </div>
            </div>
        </div>

        <!--Container (Contact Section)-->
        <div id="contact" class="container-fluid bg-grey">
            <h2 class="text-center">CONTATO</h2>
            <div class="row">
                <div class="col-sm-12">
                    <p style="text-align: justify;">Software Desenvolvido para gestão de consultas veterinárias</p>
                </div>
                <div class="col-sm-4">
                    <p><span class="glyphicon glyphicon-map-marker"></span> Rio de Janeiro, RJ</p>
                    <p><span class="glyphicon glyphicon-phone"></span> +55 21999999999</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> contato@apppet.com.br</p>

                </div>
            </div>
        </div>

        <!--image of location/map-->
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