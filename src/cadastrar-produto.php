<?php 
require_once __DIR__ . '/../public/page/inicio-html.php';
require_once __DIR__ . '/sql/config/conexao-produtos.php';
?>

<div class="container">
  <div class="content">
    <h1 class="titulo">Cadastrar</h1>

    <div class="linha-centro"><div class="linha"></div></div>
    <div class="form-centro">
      <form action="" method="post">
        <label for="nome">NOME DO PRODUTO:</label>
        <input type="text" name="nome" id="nome">
        <label for="quantidade">QUANTIDADE DE PRODUTOS:</label>
        <input type="number" name="quantidade" id="quantidade">
        <button>Cadastrar</button>
        <button><a href="/">Voltar</a></button>
      </form>
    </div>
  </div>
</div>

<?php require __DIR__ . '/../public/page/fim-html.php';?>

<?php

$nome = filter_input(INPUT_POST, 'nome') ?? 'nulo';
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT) ?? 0;


if(empty($nome) || empty($quantidade)){
   exit();
}

else{
  $sql = "INSERT INTO produtos(nome,quantidade) VALUES (:nome, :quantidade)";
  $statement = $pdo->prepare($sql);
  $statement->bindValue(':nome', $nome);
  $statement->bindValue(':quantidade', $quantidade);
  
  if($result = $statement->execute()){
     header('Location: /');
  }
}
?>



