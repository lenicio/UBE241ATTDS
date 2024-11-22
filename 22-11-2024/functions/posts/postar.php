<?php

if (empty($_GET["zweet"]) || empty($_GET["id"])) {
  header("Location: ./../../posts/index.php");
  exit;
}

require __DIR__ . "./../../config.php";

$zweet = $_GET["zweet"];
$usuario_id = $_GET["id"];

$sql = "insert into posts(post, usuario_id) VALUES(:zweet, :usuario_id)";
$sql = $pdo->prepare($sql);
$sql->bindValue(":zweet", $zweet);
$sql->bindValue(":usuario_id", $usuario_id);
$sql->execute();

header("Location: ./../../posts/index.php");
exit;