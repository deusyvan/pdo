<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "admin";
$dbpass = "admin";

//Iniciar o PDO:

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    $sql = "SELECT * FROM usuarios";
    
    //Reescrevendo a string com o pdo
    $sql = $pdo->query($sql);
    
    //Verificar se houve resultado:
    if ($sql-> rowCount() > 0) {
        echo "Há usuários sim";
        
    } else {
        echo "Não há usuários cadastrados";
    }
    
} catch (PDOException $e) {
    echo "Falhou a conexão com o banco: ".$e->getMessage();
}


?>