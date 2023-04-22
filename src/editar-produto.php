<?php 
require_once __DIR__ . '/../public/page/inicio-html.php';
require_once __DIR__ . '/sql/config/conexao-produtos.php';
?>

<div class="container">
  <div class="content">
    <h1 class="titulo">Editar</h1>

    <div class="linha-centro"><div class="linha"></div></div>
    <div class="form-centro">
      <form action="" method="post">
        <label for="nome">EDITAR NOME DO PRODUTO:</label>
        <input type="text" name="nome" id="nome" >
        <label for="quantidade">EDITAR QUANTIDADE DE PRODUTOS:</label>
        <input type="number" name="quantidade" id="quantidade">
        <button>Cadastrar</button>
        <button><a href="/">Voltar</a></button>
      </form>
    </div>
  </div>
</div>

<?php require __DIR__ . '/../public/page/fim-html.php';?>

<?php 

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$nome = filter_input(INPUT_POST, 'nome');
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

if ($id === false) {
  header('Location: /');
  exit();
}

$sql = 'UPDATE produtos SET nome = :nome, quantidade = :quantidade WHERE id = :id;';
$statement = $pdo->prepare($sql);
$statement->bindValue(":id", $id);
$statement->bindValue(":nome", $nome);
$statement->bindValue(":quantidade", $quantidade);


if(empty($nome) || empty($quantidade)){
  exit();
}
if($statement->execute()){
    header('Location: /');
}
?>



