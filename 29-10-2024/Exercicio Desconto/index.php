<?php

$exibirMensagem = false;
if (
  !empty($_GET["produto"]) && isset($_GET["produto"]) &&
  !empty($_GET["preco"]) && isset($_GET["preco"]) &&
  !empty($_GET["desconto"]) && isset($_GET["desconto"])
) {
  $exibirMensagem = true;
  $nomeProduto = $_GET["produto"];
  $precoOriginal = (float) $_GET["preco"];
  $valorDesconto = (float) $_GET["desconto"];
  $valorComDesconto = $precoOriginal * (1 - ($valorDesconto / 100));
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <form action="./index.php" method="GET">

    <input type="text" name="produto" placeholder="Produto...">
    <input type="number" name="preco" placeholder="Preco...">
    <input type="number" name="desconto" placeholder="Desconto...">
    <button type="submit">Calcular</button>

  </form>
  <?php if ($exibirMensagem): ?>
    <p>O produto <?= $nomeProduto ?>, que custava R$ <?= $precoOriginal ?>, recebeu um
      desconto de <?= $valorDesconto ?>%. O valor final é: <span>R$ <?= $valorComDesconto ?></span>.</p>
  <?php endif ?>

</body>

</html>