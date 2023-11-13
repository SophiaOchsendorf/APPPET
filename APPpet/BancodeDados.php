<?php

    $dsn = 'mysql:dbname=apppet;host= localhost;';
    $user = 'root'
    $password = '';


    try{

        $pdo= new PDO($dns, $user, $password);
    }cath(PDOException $ex) {
        echo 'Erro: '.$ex->getMessage();
    }



    ?>