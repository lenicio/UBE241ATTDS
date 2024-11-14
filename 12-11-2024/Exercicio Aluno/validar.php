<?php

require "./funcoes.php";

if (
  isset($_GET["nota-avaliacao"]) && isset($_GET["nota-atividade"]) &&
  isset($_GET["nota-ead"]) && isset($_GET["nota-avaliacao-integrada"]) &&
  isset($_GET["quantidade-falta"])
) {
  $notaAvaliacao = $_GET["nota-avaliacao"];
  $notaAtividade = $_GET["nota-atividade"];
  $notaEad = $_GET["nota-ead"];
  $notaAvaliacaoIntegrada = $_GET["nota-avaliacao-integrada"];
  $quantidadeFalta = $_GET["quantidade-falta"];

  echo ValidaStatus(
    $notaAvaliacao,
    $notaAtividade,
    $notaEad,
    $notaAvaliacaoIntegrada,
    $quantidadeFalta
  );
  
} else {
  header("Location: ./index.php");
  exit;
}
