<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "admin";
$dbpass = "admin";

//Iniciar o PDO:

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    $nome = "Testador 2";
    $email = "teste2@hotmail.com";
    $senha = md5("123");
    
    $sql = "INSERT INTO usuarios SET nome='$nome', email='$email', senha = '$senha'";
    
    $sql = $pdo->query($sql);//Retorna o id inserido.
    
    echo "Usuário inserido com sucesso! Id= ".$pdo->lastInsertId();
   
        
    
} catch (PDOException $e) {
    echo "Falhou a conexão com o banco: ".$e->getMessage();
}


?>