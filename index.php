<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "admin";
$dbpass = "admin";

//Iniciar o PDO:

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
   $sql = "UPDATE usuarios SET email='abc@hotmail.com' WHERE email='suport@b7web.com.br'";
   $sql = $pdo->query($sql);
   
   echo "Usuário alterado com sucesso!";
        
    
} catch (PDOException $e) {
    echo "Falhou a conexão com o banco: ".$e->getMessage();
}


?>