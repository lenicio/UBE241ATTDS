<?php

session_start();

if(empty($_SESSION["usuario"])) {
  header("Location: ./../autenticacao/login.php");
  exit;
}

require __DIR__ . "./../config.php";

$sql = "select 
          posts.post, usuarios.nome , posts.data_postagem
        from 
          posts
          join usuarios on posts.usuario_id = usuarios.id
        order by posts.id DESC";
$sql = $pdo->prepare($sql);
$sql->execute();

$posts = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <a href="./../autenticacao/login.php">Fazer Logoff</a>

  <form action="./../functions/posts/postar.php" method="get">
    <input type="hidden" name="id" value="<?=$_SESSION['usuario']['id']?>">
    <label for="zweet">Faça seu zweet:</label>
    <textarea name="zweet" id="zweet"></textarea>
    <button type="submit">Zweetar</button>
  </form>

  <?php foreach ($posts as $post): ?>
  <p style="font-size: 26px;"><?=$post["post"]?></p>
  <span><?=$post["nome"]?></span>
  <span><?=$post["data_postagem"]?></span>
  <hr>
  <?php endforeach ?>

</body>
</html>

