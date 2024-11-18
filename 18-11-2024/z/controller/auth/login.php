<?php
session_start();
require __DIR__ . "./../../config/db.php";

if (
  isset($_POST["email"]) && !empty($_POST["email"]) &&
  isset($_POST["senha"]) && !empty($_POST["senha"])
) {
  $email = $_POST["email"];
  $senha = $_POST["senha"];


  $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":email", $email);
  $sql->bindValue(":senha", md5($senha));
  $sql->execute();

  if($sql->rowCount()) {
    $_SESSION["login"] = true;
    header("Location: ./../../view/tweet/index.php");
    exit;
  } 

  $_SESSION["mensagem"] = "Usuário e/ou senha incorreto!";
  header("Location: ./../../view/auth/login.php");
  exit;


}
