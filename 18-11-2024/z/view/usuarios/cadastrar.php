<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./../../assets/styles/style.css">
  <link rel="stylesheet" href="./../../assets/styles/usuarios_cadastrar.css">
  <title>Document</title>
</head>

<body>

  <h1>Novo usuário</h1>
  <form action="./../../controller/usuarios/cadastrar.php" method="POST">
    <div>
      <label for="nome">Nome de usuário:</label>
      <input type="text" name="nome" id="nome" required>
    </div>

    <div>
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email" required>
    </div>

    <div>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" required>
    </div>
    <button type="submit">Cadastrar</button>
    <div class="cadastro">
      <a href="./../auth/login.php">Fazer Login</a>
    </div>
  </form>
</body>

</html>