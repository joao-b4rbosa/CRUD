<?php

// Caminho e nome do banco de dados SQLite
$dbUsuarios = __DIR__ . '/../bd-users.sqlite';


//tabela usuario
try 
{
    // Cria uma nova conexão com o banco de dados SQLite
    $pdo = new PDO('sqlite:' . $dbUsuarios);
    // Definir opções de atributos de erro do PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // use so para testar altere o "return" para "echo"
    return "Conexão com o banco de dados SQLite(usuarios) estabelecida com sucesso!";
} 
    
catch (PDOException $e) 
{
    return "Erro ao conectar-se ao banco de dados(usuarios): " . $e->getMessage();
} 