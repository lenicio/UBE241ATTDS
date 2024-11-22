<?php


if (empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["senha"])) {
  header("Location: ./../../usuarios/cadastrar.php");
  exit;
}

require __DIR__ . "./../../config.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
$sql = $pdo->prepare($sql);
$sql->bindValue(":nome", $nome);
$sql->bindValue(":email", $email);
$sql->bindValue(":senha", $senha);
$sql->execute();

header("Location: ./../../autenticacao/login.php");
