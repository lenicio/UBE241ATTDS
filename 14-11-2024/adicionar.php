<?php

require "./funcoes.php";


if (isset($_GET["titulo"]) && isset($_GET["descricao"])) {
  $titulo = $_GET["titulo"];
  $descricao = $_GET["descricao"];
  Adicionar($titulo, $descricao);
}

header("Location: ./index.php");
exit;
