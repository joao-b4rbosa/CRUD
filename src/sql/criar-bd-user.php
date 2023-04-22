<?php
// Nome do banco de dados SQLite
$dbname = __DIR__ . '/bd-users.sqlite';

try 
{
    // Cria uma nova conexão com o banco de dados SQLite
    $pdo = new PDO('sqlite:' . $dbname);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Cria uma tabela de produtos
    $sql = "CREATE TABLE IF NOT EXISTS users(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                email TEXT,
                senha TEXT
            )";
    $pdo->exec($sql);

    // use so para testar altere o "return" para "echo"

    echo "Tabela de usuarios criada com sucesso!";
} 


catch (PDOException $e) 
{
    
    // use so para testar altere o "return" para "echo"

    echo "Erro ao criar a tabela de usuarios: " . $e->getMessage();
}
?>