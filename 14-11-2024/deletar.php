<?php

require "./funcoes.php";

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  Deletar($id);
}

header("Location: ./index.php");
exit;