<?php

/*
------------------------ Operadores Lógicos ------------------------
  >   maior quê
  <   menor quê
  >=  maior ou igual
  <=  menor ou igual
  ==  igual
  !=  diferente
  !   inversor lógico

--------------------------------------------------------------------

&& - and (e)   -  Sera verdade, se apenas todas as condições forem verdade
|| - or  (ou)  -  Se apenas uma condição retornar verdade, toda expressão será verdade
*/



// echo "isset: " . isset($_GET["fruta"]); // Retorna true caso a chave tenha sido enviada
// echo "<br>";
// echo "empty: " . empty($_GET["fruta"]);


/*

  Inclua no formulário o campo valor por kg, e exiba a mensagem final:
  O nome da fruta é: [nome da fruta], e a quantidade comprada foi [quantidade comprada],
  onde foi pago o total de: R$ [valor total pago].

  Exiba a mensagem, onde o valor total pago esteja em negrito, e na cor azul.

*/

$exibirMensagem = false;

if (
  isset($_GET["fruta"]) && !empty($_GET["fruta"]) &&
  isset($_GET["quantidade"]) && !empty($_GET["quantidade"]) &&
  isset($_GET["valor"]) && !empty($_GET["valor"])
) {
  $exibirMensagem = true;
  $fruta = $_GET["fruta"];
  $quantidade = (float) $_GET["quantidade"];
  $valor = (float) $_GET["valor"];
  $totalPago = number_format($quantidade * $valor, 2);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>

<body>
  <form action="./index.php" method="GET">

    <input type="text" name="fruta" placeholder="Informe o nome de uma fruta">
    <input type="number" name="quantidade" step="any" placeholder="Informe a quantidade comprada...">
    <input type="number" name="valor" step="any" placeholder="R$ por kg...">
    <button type="submit">Enviar</button>

    <?php if($exibirMensagem): ?>
    <p>O nome da fruta é: <?=$fruta?>, e a quantidade comprada foi <?=$quantidade?>,
      onde foi pago o total de: <span>R$ <?=$totalPago?></span>.</p>
    <?php endif ?>
      
  </form>
</body>

</html>