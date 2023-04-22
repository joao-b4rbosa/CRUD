<?php

// Caminho e nome do banco de dados SQLite
$dbpath = __DIR__ . '/../bd-produtos.sqlite';

// tabela produto
try 
{
    // Cria uma nova conexão com o banco de dados SQLite
    $pdo = new PDO('sqlite:' . $dbpath);
    // Definir opções de atributos de erro do PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // use so para testar altere o "return" para "echo"
    return "Conexão com o banco de dados SQLite(produtos) estabelecida com sucesso!";
} 
    
catch (PDOException $e) 
{
    return "Erro ao conectar-se ao banco de dados(produtos): " . $e->getMessage();
}


?>


