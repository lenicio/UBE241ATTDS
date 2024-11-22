<?php

$host = "localhost";
$dbName = "z";
$port = 3307; # default 3306;
$user = "root";
$pass = "toor";


try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbName;port=$port", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erro mysql: " . $e->getMessage();
}
