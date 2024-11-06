<?php

$nome = "Lenício";

// Array com chaves incrementais
$nomesLindos = ["Lenício", "João", "Maria", "Clara", "Escuro", "Penumbra"];

// Array Chave Valor
$aluno = [
  "nome" => "Jose Esoj Soje",
  "email" => "joseesoj@gmail.com",
  "matricula" => "123321123",
  "genero" => "masculino"
];

// Funções de manipulações de array
array_push($nomesLindos, "Amanhecer"); // Adiciona item ao final do array
sort($nomesLindos); // Ordena de maneira crescente
rsort($nomesLindos); // Ordena de maneira decrescente
asort($nomesLindos); // Ordena de maneira crescente, preservando as chaves
arsort($nomesLindos); // Ordena de maneira descrescente, presenvando as cahves
array_pop($nomesLindos); // Remove o último elemento do array
array_sum($nomesLindos); // Soma os valores numéricos do array
count($nomesLindos); // Exibe a quantidade de elementos de um array
in_array("Lenício", $nomesLindos); // Pesquisa o elemento no array e retorna true caso encontre
unset($nomesLindos[1]); // Remove elementos do array, preservando a chave
array_splice($nomesLindos, 2, 1); // Remove elementos do array, e reordena as chaves
array_keys($nomesLindos); // Retorna um array incremental com os nomes das chaves.


// Tendo o array $notas[8.0, 9.2, 5.0, 6.8]; quero que seja mostrada a média das notas,
// a maior e a menor nota.
// Está proibido usar max() e min()
$notas = [8.0, 9.2, 5.0, 6.8];
$media = array_sum($notas) / count($notas);
sort($notas);
$menorNota = $notas[0];
$maiorNota = $notas[count($notas) - 1];
// echo "A Média é: $media, sendo a menor nota o $menorNota e a maior nota foi $maiorNota";


/*
Dado a seguinte lista de compras:

$produtos = [
    "Arroz" => 12.5,
    "Feijão" => 8.3,
    "Macarrão" => 4.2,
    "Leite" => 3.9,
    "Açúcar" => 5.0
];

Retorne o seguinte:
- Informe qual foi o valor total gasto em compras
- Informe quantos itens foram comprados
- Informe o preço do item mais caro, e o seu respectivo nome.
*/

echo "<hr>";
$produtos = [
  "Arroz" => 12.5,
  "Feijão" => 8.3,
  "Macarrão" => 4.2,
  "Leite" => 3.9,
  "Carne" => 39.90,
  "Açúcar" => 5.0
];

arsort($produtos);
$nomeDoProdutoMaisCaro = array_keys($produtos)[0];

$produtoMaisCaro = max($produtos);
$totalPago = array_sum($produtos);
$quantidadeItem = count($produtos);

echo "O valor mais caro foi $produtoMaisCaro referente ao item $nomeDoProdutoMaisCaro,
 onde o total pago foi de R$ $totalPago, em $quantidadeItem itens.";


/*
Dado o seguinte array:
$produtos = [
    "Refrigerante" => 5.0,
    "Biscoito" => 2.5,
    "Chocolate" => 3.8,
    "Água Mineral" => 1.2,
    "Suco de Laranja" => 4.0
];

faça o seguinte:
- Aplique um aumento de 10% no preço de todos os produtos e atualize o array $produtos
- A loja decidiu dar um desconto especial de 15% no "Chocolate". 
  Atualize o preço do "Chocolate" no array.
- Ao final, mostre todos os itens com os preços ajustados.

*/
echo "<hr>";
$produtos = [
  "Refrigerante" => 5.0,
  "Biscoito" => 2.5,
  "Chocolate" => 3.8,
  "Água Mineral" => 1.2,
  "Suco de Laranja" => 4.0
];


foreach ($produtos as $indice => $produto) {
  if ($indice == "Chocolate") {
    $produtos[$indice] = $produto * 1.15;
  } else {
    $produtos[$indice] = $produto * 1.10;
  }
}

echo "<pre>";
print_r($produtos);

/*

$PrecosDelivros = [20, 90, 85, 40, 12, 10];

*/