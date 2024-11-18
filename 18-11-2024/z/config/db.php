<?php

# https://www.devmedia.com.br/php-pdo-como-se-conectar-ao-banco-de-dados/37211

$host = "localhost";
$dbName = "z";
$user = "root";
$pass = "toor";
$port = 3307;  # default 3306


try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbName;port=$port", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erro no mysql: " . $e->getMessage();
}
