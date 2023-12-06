<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods", 'GET,PUT,POST,DELETE');
ini_set('display_errors', 0 );
error_reporting(0);
/*if(!isset($_SESSION)){
  session_start();   
}else{
  header("Location: login.php");
}*/
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js" integrity="sha512-xgIrH5DRuEOcZK5cPtVXx/WSp5DTir2JNcKE5ahV2u51NCTD9UDxbQgZHYHVBlPc4H8tug6BZTYIl2RdA/X0Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

<div class="container text-center">
    <h2>Cadastro</h2>

    <form id="form-cadastrar" method="POST" action="">
        <div class="input-group">
            <label class="input-group-addon">Nome</label>
            <input type="text" class="form-control" name="name" id="nome" placeholder="Digite o nome e o sobrenome">
        </div>
        <div class="input-group">
            <label class="input-group-addon">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o CPF">
        </div>
        <div class="input-group">
            <label class="input-group-addon">E-mail</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Digite o seu e-mail">
        </div>
        <div class="input-group">
            <label class="input-group-addon" >Usuário</label>
            <input type="text" class="form-control" name="usuário" id="usuário" placeholder="Digite o usuário">
        </div>
        <div class="input-group">
            <label class="input-group-addon">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite a Senha">
        </div>
        <br>
        <button id="btnCadUsuario" type="submit" onclick="cadastrar()" class="btn btn-primary btn block">Cadastrar</button>

<!--Lembro? <a href="login.php">Clique aqui</Clique aqui<a/> para <jogar-->
        <br>
        Área administrativa <a href="administrativo.php">Clique aqui</a> para retornar.
    </form>
</div>
<br>
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


        <script src="js/cadastrar.js" charset="utf-8"></script>


    </body>
</html>
