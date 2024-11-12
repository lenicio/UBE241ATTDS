<?php

function ValidaStatus($avaliacao, $atividade, $ead, $integrada, $falta) {
  $mensagem = "";
  $media = $avaliacao + $atividade + $ead + $integrada;

  if ($falta > 10) {
    $mensagem = "Reprovado por falta!";
  } else if ($media >= 6) {
    $mensagem = "Aprovado, com média $media";
  } else if ($media >= 4) {
    $mensagem = "Aluno em recuperação, com média $media";
  } else {
    $mensagem = "Aluno reprovado, com média $media";
  }


  return $mensagem;
}