<?php 
require_once __DIR__ . '/../public/page/inicio-html.php';
require_once __DIR__ . '/sql/config/conexao-produtos.php';

$query = "SELECT * FROM produtos";
$stmt = $pdo->prepare($query);
$stmt->execute();
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="container">
  <div class="content">
    <h1 class="titulo">Caixas em Estoque</h1>

    <div class="linha-centro"><div class="linha"></div></div>

    <div class="cards-container"> 
    <?php foreach($resultados as $resultado):?>
          <div class="card">
            <div class="img-centro"></div>
            <h2 class="nome">CAIXA: <?= $resultado['nome'] ?></h2>
            <p class="quantidade">Quantidade: <?= $resultado['quantidade'] ?></p>
            <div class="links">
              <a href="/index.php/editar-produto?id=<?= $resultado['id'] ?>" class="a-links"><i class="fas fa-edit"></i> editar</a>
              <a href="/index.php/remover-produto?id=<?= $resultado['id'] ?>" class="a-links"><i class="fas fa-trash"></i> excluir</a>
            </div>
          </div>
    <?php endforeach;?>
    </div>

  </div>
</div>


<?php require __DIR__ . '/../public/page/fim-html.php';?>