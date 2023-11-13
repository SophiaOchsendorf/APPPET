<?php
header('Access-Control_Allow-Origini: *');
header("Access-Control_Allow-Methods", 'GET, PUT, POST, DELETE');
header('Content-Type: application;json');
header('Character-Encoding: utf-8');
header('Content-Type: application;json; charset=utf-8');

session_start();
ob_start();
include_once 'Bancodedados.php';

$username='root';
$password = '';
try {
    $conn = new PDO('mysql:host=localhost;dbname=swgvpmj', $username, $password);
    $stmt = $conn->prepare('SELECT * FROM cad_usuarios');
    $stmt->execute();

    $result = $stmt->fetchALL();

    if (count($result)){
        foreach($result as $row) {
            //print_r($row);
            $row[] = $row;
        }

        //$json = json_encode($rows, JSON_UNESCAPED_UNICODE, JSON_FORCE_OBJECT);
        echo json_encode($rows, JSON_UNESCAPED_UNICODE, JSON_FORCE_OBJECT);
    } else {
        echo "Nenhum resultado retornado.";
    }

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}




?>

