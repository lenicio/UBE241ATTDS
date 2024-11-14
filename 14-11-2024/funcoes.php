<?php

function Adicionar($titulo, $descricao)
{
  require "./config.php";

  $sql = "INSERT INTO noticias (titulo, descricao) VALUES (:titulo, :descricao)";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":titulo", $titulo);
  $sql->bindValue(":descricao", $descricao);
  $sql->execute();
}


function Listar()
{
  require "./config.php";

  $sql = "SELECT * FROM noticias ORDER BY data_criacao DESC";
  $sql = $pdo->prepare($sql);
  $sql->execute();

  return $sql->fetchAll(PDO::FETCH_ASSOC);
}

function Deletar($id) {
  require "./config.php";

  $sql = "DELETE FROM noticias WHERE id = :id";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":id", $id);
  $sql->execute();
}
