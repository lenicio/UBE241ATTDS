<?php

session_start();

if (empty($_POST["email"]) || empty($_POST["senha"])) {
  header("Location: ./../../autenticacao/login.php");
  exit;
}

require __DIR__ . "./../../config.php";

$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$sql = "SELECT id, nome FROM usuarios WHERE email = :email AND senha = :senha";
$sql = $pdo->prepare($sql);
$sql->bindValue(":email", $email);
$sql->bindValue(":senha", $senha);
$sql->execute();

$usuario = $sql->fetch(PDO::FETCH_ASSOC);

if($usuario) {
  $_SESSION["usuario"] = $usuario;
  header("Location: ./../../posts/index.php");
  exit;
}

header("Location: ./../../autenticacao/login.php");
exit;

