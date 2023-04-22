<?php
// Nome do banco de dados SQLite
$dbname = __DIR__ . '/bd-produtos.sqlite';

try 
{
    // Cria uma nova conexão com o banco de dados SQLite
    $pdo = new PDO('sqlite:' . $dbname);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Cria uma tabela de produtos
    $sql = "CREATE TABLE IF NOT EXISTS produtos (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nome TEXT,
                quantidade INTEGER
            )";
    $pdo->exec($sql);

    // use so para testar altere o "return" para "echo"

    return "Tabela de produtos criada com sucesso!";
} 


catch (PDOException $e) 
{
    
    // use so para testar altere o "return" para "echo"

    return "Erro ao criar a tabela de produtos: " . $e->getMessage();
}
?>
