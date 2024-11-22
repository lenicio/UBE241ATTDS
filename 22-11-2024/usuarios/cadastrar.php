<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <h1>Cadastrar Usuário</h1>
  <form action="./../functions/usuarios/processarCadastro.php" method="POST">
    <div>
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome">
    </div>

    <div>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
    </div>

    <div>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha">
    </div>
    <button type="submit">Cadastrar</button>
  </form>

  <a href="./../autenticacao/login.php">Fazer Login</a>

</body>

</html>