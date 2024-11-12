<?php

function CalculaSalario($salario, $despesa) {
  $mensagem = "";

  if ($salario > $despesa) {
    $mensagem = "Parabéns, você está financeiramente saudável";
  } else if ($salario == $despesa) {
    $mensagem = "Você conseguiu no sufoco!, merece apenas o bens";
  } else {
    $mensagem = "Você precisa se esforçar mais. Sem coxinha hoje!";
  }

  return $mensagem;

}