<?php
require "./funcoes.php";

if (!empty($_GET["despesa"]) && !empty($_GET["salario"])) {
  $salario = $_GET["salario"];
  $despesa = $_GET["despesa"];

  echo CalculaSalario($salario, $despesa);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="./index.php" method="get">
    <label for="salario">Informe seu salário: </label>
    <input type="number" name="salario" id="salario">

    <label for="despesa">Informe sua despesa: </label>
    <input type="number" name="despesa" id="despesa">
    
    <button type="submit">Calcular</button>
  </form>  
</body>
</html>