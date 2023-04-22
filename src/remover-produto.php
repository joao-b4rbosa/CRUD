<?php 
require_once __DIR__ . '/../public/page/inicio-html.php';
require_once __DIR__ . '/sql/config/conexao-produtos.php';
?>

<?php 
$id = $_GET['id'];
$query = "DELETE FROM produtos WHERE id = :id";
$statement = $pdo->prepare($query);
$statement->bindValue(':id', $id, PDO::PARAM_INT);

if($statement->execute())
{
    header('Location: /');
}
?>

<?php require __DIR__ . '/../public/page/fim-html.php';?>