<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods", 'GET,PUT,POST,DELETE');
header('Content-Type: application/json');
header('Character-Encoding: utf-8');
header('Content-Type: application/json; charset=utf-8');


session_start();
ob_start();
include_once 'BancodeDados.php';

$cpf = $_POST["cpf"];

$username='root';
$password = '';
try {

    $conn = new PDO ('mysql:host=localhost;dbname=swgvpmj', $username, $password);
    $stmt = $conn->prepare("SELECT * FROM cad_usuarios WHERE cpf=".$cpf." ");
    $stmt->execute();

    $result = $stmt->fetchAll();
    
    if (count($result)) {
        $d=1;
        echo json_encode($d);
    }


    else {
        $d=2:

        echo json_encode($d);
    }
} catch(PDOException $d) {
    echo'ERROR: ' . $e->getMessage();

}
    
    
?>
