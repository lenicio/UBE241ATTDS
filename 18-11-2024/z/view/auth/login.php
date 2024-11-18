<?php

session_start();

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./../../assets/styles/style.css">
  <link rel="stylesheet" href="./../../assets/styles/auth_login.css">
  <title>Document</title>
</head>

<body>
  <h1>Login</h1>



  <form action="./../../controller/auth/login.php" method="POST">


    <div>
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email" required>
    </div>

    <div>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" required>
    </div>

    <?php if (isset($_SESSION["mensagem"])): ?>
      <span class="error"><?= $_SESSION["mensagem"]; ?></span>
    <?php endif ?>


    <button type="submit">Login</button>

    <div class="cadastro">
      <a href="./../usuarios/cadastrar.php">Cadastrar novo usuário</a>
    </div>
  </form>
</body>

</html>