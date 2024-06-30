<?php 
    $hostname = "localhost";
    $database = "todo";
    $username = "root";
    $password = "root";

    try{
        $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    } catch (PDOException $e){
        echo "Erro: " . $e->getMessage();
    }
?>