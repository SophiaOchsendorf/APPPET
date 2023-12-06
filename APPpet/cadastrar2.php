<?php
header('Access-Control-Allow-Origin: *');
session_start();
ob_start();
include_once 'conexao.php';


//$dados = $_POST['nome=larissa&Soares&Silva&email=larissa.ssilva&40gmail.com&usuario=larissa&senha=979097'];

/*
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$s = $_POST["senha"];
$senha = password_hash($s, PASSWORD_DEFAULT);
return json_encode('3');
*/

$nome = "sophia";
$cpf = "28906898088";
$email = "sophia@gmail.com";
$usuario = "sophia";
$s = "123456";
$senha = password_hash($s, PASSWORD_DEFAULT);

//echo($senha);

//$senha = $_POST["senha"];//password_hash($dados['senha'], PASSWORD_DEFAULT);


if(empty($cpf) || empty($nome) || empty($email) || empty($usuario) || empty($senha)){

    echo(1);

    //return json_encode('1');
}else{

    //echo(2);



    $result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
        '" .$nome. "',
        '" .$email. "',
        '" .$usuario. "',
        '" .$senha. "'
        )";




$resultado_usario = mysqli_query($conn, $result_usuario);
//var_dump($resultado_usuario);
if(mysqli_insert_id($conn)){
//return json_encode('3');
echo('3');
//$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
//echo"Usuário cadastrado com sucesso /n Senha" . $senha;
//header("Location: login.php");
}else{
//return json_encode('2');
echo('2');
//$_SESSION['msg'] = "Erro ao cadastrar o usuário";
//echo"Erro ao cadastrar o usuário /n Senha" . $senha;
}

}


  
?>
