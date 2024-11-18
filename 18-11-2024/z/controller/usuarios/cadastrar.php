<?php

require "./../../config/db.php";

if (
  !empty($_POST['nome'])  && isset($_POST['nome'])  &&
  !empty($_POST['email']) && isset($_POST['email']) &&
  !empty($_POST['senha']) && isset($_POST['senha'])
) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":nome", $nome);
  $sql->bindValue(":email", $email);
  $sql->bindValue(":senha", md5($senha));
  $sql->execute();
}

header("Location: ./../../view/auth/login.php");
