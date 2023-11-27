<?php
header('Access-Control-Allow-Origin: *');
session_start();
ob_start();
include_once 'conexao.php';


//$dados = $_POST['nome=larissa&Soares&Silva&email=larissa.ssilva&40gmail.com&usuario=larissa&senha=979097'];


$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$s = $_POST["senha"];
$senha = password_hash($s, PASSWORD_DEFALT);

//$senha = $_POST["senha"];//password_hash($dados['senha'], PASSWORD_DEFAULT);

if(empty($cpf) ||empty($nome) || empty($email) || empty($usuario) || empty($senha)){

    //echo(1);

    return json_encode('1');
}else{

    //echo(2);



    $result_usuario = "INSERT INTO usuarios (nome, cpf, email, usuario, senha) VALUES (

        '" .$nome. "',
        '" .$cpf. "',
        '" .$email. "',
        '" .$usuario. "',
        '" .$senha. "'
        )";

        $resultado_usuario = mysqli_query($conn, $result_usuario);
        if(myslqli_incert_id($conn)){
            return json_encode('3');
            //$_SESSION['magcad'] = "usuário cadastrado com successo";
            //echo"Usuário cadastrado com successo /n senha" . senha;
           //;;header("location: login.php");
        }else{

            return json_encode('2');
            //$_SESSION['msg'] = "Erro ao cadastrar o usuário";
            //echo"Erro ao cadastrar o usuário /n Senha" . senha;
        }
        

  }
?>
