<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "admin";
$dbpass = "admin";

//Iniciar o PDO:

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    echo "Conexão estabelecida com sucesso!";
    
} catch (PDOException $e) {
    echo "Falhou a conexão com o banco: ".$e->getMessage();
}


?>