<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Notas</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form action="./validar.php" method="get">
    <label for="nota-avaliacao">Nota de avaliação</label>
    <input type="number" name="nota-avaliacao" id="nota-avaliacao" min="0" max="2">

    <label for="nota-atividade">Nota de Atividades</label>
    <input type="number" name="nota-atividade" id="nota-atividade" min="0" max="2">

    <label for="nota-ead">Nota de ead</label>
    <input type="number" name="nota-ead" id="nota-ead" min="0" max="2">

    <label for="nota-avaliacao-integrada">Nota de avaliacao integrada</label>
    <input type="number" name="nota-avaliacao-integrada" id="nota-avaliacao-integrada" min="0" max="4">

    <label for="quantidade-falta">Quantidade de faltas</label>
    <input type="number" name="quantidade-falta" id="quantidade-falta" min="0">

    <button type="submit">Calcular</button>
  </form>
</body>

</html>