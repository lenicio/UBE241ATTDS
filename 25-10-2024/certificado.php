<?php

$nome = $_POST["nome"];
$curso = $_POST["curso"];
$instituicao = $_POST["instituicao"];

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>
<body>
  <h1>Certificado</h1>
  <p>Declaro para os devidos fins de direito, que o aluno(a) <span><?=$nome?></span>
    está devidamente matriculado no curso <span><?=$curso?></span>, 
    ofertado pela <span><?=$instituicao?></span>.</p>
</body>
</html>