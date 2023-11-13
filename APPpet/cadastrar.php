<?php
header('Access-Control-Allow-Origin: *');
//session_start();
//if(!empty($_SESSION['id'])){
//}else{
  //header("Location: login.php");  
//}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>SWGV PMJ - Cadastrar</title>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
</head>
<body id="topo" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-defalt navbar-fixet-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#myPage">SWGV</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="sobre.php">SOBRE</a></li>
        <li><a href="contato.php">contato</a></li>
        <li><a href="sair.php">SAIR</a></li>
</ul>
</div>
</div>
</nav>

<div class="jumbotron text-center">
    <h1>SWGV</h1>
    <p>Software Web de Gestão Veicular</p>
</div>

<div class="container text-center">
    <h2>Cadastro</h2>

    <form id="for-cadastrar" method="POST" action="">
        <div class="input-group">
            <label class="input-group-addon">Nome</label>
            <input type="text" class="form-control" name="name" id="nome" placeholder="Digite o nome e o sobrenome">
</div>
<div class="input group">
    <label class="input-group-addon">E-mail</label>
    <input type="text" class="form control" name="email" id="email" plceholder="Digite o seu e-mail">
</div>
<div class="input-group">
    <label class="input-group-addon" >Usuário</label>
    <input type="text" class="form control" name="usuário" id="usuário" placeholder="Digite o usuário">
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

<div id="contact" class="container-fluid bg-grey">
            <h2 class="text-center">CONTATO</h2>
            <div class="row">
                <div class="col-sm-12">
                    <p style="text-align: justify;">Software Desenvolvido para gestão de consultas veterinárias</p>
                    <div class="col-sm-12">
</div>
<div class="col-sm-4">

<p><span class="glyphicon glyphicon-map-maker"></span> Jataí, 60<p>
<p><span class="glyphicon glyphicon-phone"></span> +55 64981299470</p>
<p><span class="glyphicon glyphicon-envelope"></span> larissa.ssilva@gmail.com</p>

</div>

</div>

</div>

<!-- Image of location-map -->
<img src="img/img-login.jpg" class="w3-image w3-greyscale-min"
style="width:100%">

<!--Image of location/map--><img src="img/img-login.jpg" class="w3-image w3-greyscale-min"
style="width:100%">
<script src="js/cadastrar.js" charset="utf-8"></script>

    </body>
</html>
                    