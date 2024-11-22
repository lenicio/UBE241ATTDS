<?php
if(session_start()) {
  session_destroy();
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

<h1>Login</h1>

<form action="./../functions/autenticacao/processarLogin.php" method="post">

  <div>
    <label for="email">E-emai:</label>
    <input type="email" name="email" id="email">
  </div>

  <div>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha">
  </div>

  <button type="submit">Logar</button>

</form>

<a href="./../usuarios/cadastrar.php">Cadastrar novo usuário</a>

</body>
</html>