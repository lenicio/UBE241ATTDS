<?php


$cadastros = [
  [
    "nome" => "João",
    "genero" => "Masculino",
    "idade" => 38
  ],

  [
    "nome" => "Carlos",
    "genero" => "Masculino",
    "idade" => 32
  ],

  [
    "nome" => "Ana Júlia",
    "genero" => "Feminino",
    "idade" => 17
  ],

  [
    "nome" => "Juliana",
    "genero" => "Feminino",
    "idade" => 30
  ]
];

/*
  Nome da pessoa mais velha
*/

$quantidadeFeminino = 0;
$somaFeminino = 0;

$quantidadeMasculino = 0;
$somaMasculino = 0;

foreach ($cadastros as $cadastro) {
  if ($cadastro["genero"] == "Masculino") {
    $quantidadeMasculino += 1;
    $somaMasculino += $cadastro["idade"];
  } else {
    $quantidadeFeminino += 1;
    $somaFeminino += $cadastro["idade"];
  }
}

echo "Média Feminino: " . $somaFeminino / $quantidadeFeminino . "<br>";
echo "Média Masculino: " . $somaMasculino / $quantidadeMasculino;

