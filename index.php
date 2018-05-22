<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "admin";
$dbpass = "admin";

//Iniciar o PDO:

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    $sql = "DELETE FROM usuarios WHERE id = 6";
    
    $pdo->query($sql);
    
    echo "Usuário deletado com sucesso!";
        
    
} catch (PDOException $e) {
    echo "Falhou a conexão com o banco: ".$e->getMessage();
}


?>