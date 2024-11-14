<?php
require "./funcoes.php"; 
$noticias = Listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <form action="./adicionar.php" method="get">
    <label for="titulo">Título: </label>
    <input type="text" name="titulo" id="titulo">

    <label for="descricao">Descrição: </label>
    <textarea name="descricao" id="descricao"></textarea>

    <button type="submit">Adicionar</button>
  </form>

  <hr>

  <?php foreach ($noticias as $noticia): ?>
    <h1><?= $noticia["titulo"] ?></h1>
    <p><?= $noticia["descricao"] ?></p>
    <span><?= $noticia["data_criacao"] ?></span>
    <a href="./deletar.php?id=<?=$noticia['id']?>">[Excluir]</a>
    <hr>
  <?php endforeach; ?>
</body>

</html>