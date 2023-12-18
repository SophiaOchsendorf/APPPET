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
        <!--Container(Modal Usuario)-->
        <div style='background-color: #fff; padding: 5px 5px;'>
        <h2 style='padding-left: 1.0em; color: #060e14; text-aling: center;'>Cadastro de Pet</h2>
        </div>

        <!-- gatilho para abrir a modal -->
        <div class="row">
            <div class="col-lg-12">
                <button style='margin-left: 2.0em; margin-right: 100px; margin-top: 20px; margin-bottom: 20px; background-color: #224f77; color: #fff;'
                id="novo_cadastro" type="button" onclick="limpar()"
                class="button2 btn btn-lg buttonCadNovo" data-target="#modalcadastrar" data-toggle="modal">Cadastrar Novo</button>
            </div>
        </div>

            <div class="container">
                <div class="table-responsive">

                    <table style='color: #060e14;width:100%;' class="table table-hover table-striped width-full display" id="tabelaUsuario">
                    <thead class="row header">
                        <tr>
                            <th colspan="1">ID</th>
                            <th colspan="1">TUTOR</th>
                            <th colspan="1">CPF</th>
                            <th colspan="1">PET</th>
                            <th colspan="1"></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Cadastrar -->
            <div class="modal fade modal-primary" id="modalCadastrar"
            aria-hidden="true" aria-labelledby="modalCadastrar" role="dialog">
            <div class="modal-dialog container-fluid modal-tamanho">
                <div class="modal-content modal-content2">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                          aria-label="Close">
                          <span aria-hidden="true"><b>X</b><span>
                        </button>
                        <h4 class="modal-title"><b>Cadastrar Pet</b></h4>
                    </div>

                    <form id="form-cadastrar" method="POST" action=""
                    class="form-inline col-12 tamanho-form">
                    <div class="modal-body">
                        <div class="form-group col-12">
                            <div class="row">


                            <div class="col-lg-8 col-md-8 col-xs-12">
                                <label for="fname">Nome</label>
                                <input type="text" name="nome" class="nome form-control tamanho-form" placeholder="" required>
                            </div>

                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <label for="fname">Raça</label>
                                <input type="date" name="raca"
                                class="raca form-control tamanho-form tamanho-form"
                                placeholder="" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <label for="fname">Espécie</label>
                                <input type="text" id="especie" name="especie" class="especie form-control tamanho-form" placeholder="" required> 
                            </div>


                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <label for="fname">Sexo</label>
                                <input type="text" name="sexo" class="sexo form-control tamanho-form" placeholder="" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <label for="fname">Data de Nascimento</label>
                                <input type="text" name="datadenascimento" class="datadenascimento form-control tamanho-form" placeholder="" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <label for="fname">Pelagem</label>
                                <input type="text" name="pelagem" class="pelagem form-control tamanho-form" placeholder="" >
                            </div>

                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <label for="fname">Micro Chip</label>
                                <input type="text" name="microchip" class="microchip form-control tamanho-form" placeholder="" >
                            </div>

                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <label for="fname">Tutor</label>
                                <input type="text" name="tutor" class="tutor form-control tamanho-form" placeholder="" required>
                            </div>

                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <label for="fname">CPF</label>
                                <input type="text" name="cpf" class="cpf form-control tamanho-form" placeholder="" required>
                            </div>

                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <br>
                                <input type="checkbox" id="ativoInativo" name="ativoInativo" value="INATIVAR">
                                <label for="ativoInativo"> Inativar Usuário </label><br>
                            </div>

                            <div class="col-lg-12 col-md-12 col-xs-12">
                    <label for="fname">Observações</label>
                    <textarea type="text" id="Observacao" name="Observacao" class="Observacao form-control tamanho-form" placeholder="" value="..."  required></textarea>
                  </div>  



                            

                           
                </div>
                <div class="row">
                    <div class="modal-footer">
                        <div class="col-lg-12">
                            <button id="excluir" onclick="" type="button" class="button4 btn btn-danger">Excluir</button>
                            <button type="button" onclick="" class="button3 btn btn-defalt"
                            data-dismiss="modal">Cancelar</button>
                            <button id="editar"
                            onclick="editadorDadosUsuário()"type="button"

                            onclick="limpar()" class="button3 btn btn-defalt"
                            data-dismiss="modal">Editar</button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div id ="mensagem2" class="alert text-center textWhite" role="alert"> </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>

</br>



        
        
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
                        <p><span class="glyphicon glyphicon-envelope"></span> contato@apppet.com.br</p>

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


        <script src=""> </script>


    </body>
</html>