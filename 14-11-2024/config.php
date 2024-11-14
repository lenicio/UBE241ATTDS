<?php

$host = "127.0.0.1";
$name = "nothycias";
$user = "root";
$pass = "toor";
$port = 3307; # default 3306

try {
  $pdo = new PDO("mysql:host=$host;dbname=$name;port=$port", $user, $pass);
}  catch(PDOException $erro) {
  echo "Erro MYSQL: " . $erro->getMessage();
}