<?php
// Questão 8: Quantas transações foram realizadas por pessoas do gênero 'feminino' e 'masculino'?

$transacoes = [
   [
    "nome" => "João Lucas",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Salário",
    "valor" => 4500
  ],
  [
    "nome" => "Ana Paula",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Aluguel",
    "valor" => 1200
  ],
  [
    "nome" => "Carlos Silva",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Freelance",
    "valor" => 800
  ],
  [
    "nome" => "Mariana Souza",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Compras do mês",
    "valor" => 300
  ],
  [
    "nome" => "Pedro Santos",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Bônus",
    "valor" => 1200
  ],
  [
    "nome" => "Fernanda Lima",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Academia",
    "valor" => 150
  ],
  [
    "nome" => "Lucas Almeida",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Investimento",
    "valor" => 200
  ],
  [
    "nome" => "Beatriz Oliveira",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Manutenção do carro",
    "valor" => 500
  ],
  [
    "nome" => "Rafael Nunes",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Aluguel de imóvel",
    "valor" => 1300
  ],
  [
    "nome" => "Carla Figueiredo",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Curso online",
    "valor" => 250
  ],
  [
    "nome" => "Thiago Gomes",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Dividendos",
    "valor" => 100
  ],
  [
    "nome" => "Sofia Costa",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Restaurante",
    "valor" => 120
  ],
  [
    "nome" => "Leonardo Martins",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Venda de produto",
    "valor" => 500
  ],
  [
    "nome" => "Isabela Dias",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Pet shop",
    "valor" => 80
  ],
  [
    "nome" => "Ricardo Moreira",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Salário extra",
    "valor" => 700
  ],
  [
    "nome" => "Camila Rocha",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Internet",
    "valor" => 100
  ],
  [
    "nome" => "Gustavo Reis",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Comissão",
    "valor" => 400
  ],
  [
    "nome" => "Larissa Teixeira",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Luz",
    "valor" => 90
  ],
  [
    "nome" => "Diego Costa",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Rendimentos",
    "valor" => 200
  ],
  [
    "nome" => "Juliana Pereira",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Farmácia",
    "valor" => 40
  ],
  [
    "nome" => "Marcelo Fonseca",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Salário",
    "valor" => 3500
  ],
  [
    "nome" => "Luciana Matos",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Transporte",
    "valor" => 200
  ],
  [
    "nome" => "Rodrigo Freitas",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Projeto extra",
    "valor" => 600
  ],
  [
    "nome" => "Elaine Souza",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Presentes",
    "valor" => 150
  ],
  [
    "nome" => "Bruno Lopes",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Consultoria",
    "valor" => 900
  ],
  [
    "nome" => "Tatiana Ferreira",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Cosméticos",
    "valor" => 70
  ],
  [
    "nome" => "Vitor Hugo",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Investimento",
    "valor" => 150
  ],
  [
    "nome" => "Renata Araújo",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Cabeleireiro",
    "valor" => 120
  ],
  [
    "nome" => "Fábio Miranda",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Aluguel",
    "valor" => 1100
  ],
  [
    "nome" => "Clarissa Antunes",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Lazer",
    "valor" => 200
  ],
  [
    "nome" => "André Silva",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Venda",
    "valor" => 450
  ],
  [
    "nome" => "Sara Lima",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Cinema",
    "valor" => 50
  ],
  [
    "nome" => "Igor Pereira",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Projeto de TI",
    "valor" => 1300
  ],
  [
    "nome" => "Priscila Mendes",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Roupas",
    "valor" => 300
  ],
  [
    "nome" => "Henrique Lopes",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Consultoria",
    "valor" => 600
  ],
  [
    "nome" => "Lívia Moraes",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Café",
    "valor" => 15
  ],
  [
    "nome" => "Fernando Faria",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Empreendimento",
    "valor" => 1000
  ],
  [
    "nome" => "Laura Martins",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Gasolina",
    "valor" => 100
  ],
  [
    "nome" => "Eduardo Castro",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Salário",
    "valor" => 2500
  ],
  [
    "nome" => "Bianca Vieira",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Viagem",
    "valor" => 400
  ],
  [
    "nome" => "Vinicius Dantas",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Bônus",
    "valor" => 500
  ],
  [
    "nome" => "Amanda Pinto",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Supermercado",
    "valor" => 150
  ],
  [
    "nome" => "Márcio Coelho",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Freelance",
    "valor" => 700
  ],
  [
    "nome" => "Carolina Prado",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Seguro",
    "valor" => 80
  ],
  [
    "nome" => "Jorge Medeiros",
    "genero" => "masculino",
    "tipoDeTransacao" => "Receita",
    "descricao" => "Investimento",
    "valor" => 400
  ],
  [
    "nome" => "Rita Borges",
    "genero" => "feminino",
    "tipoDeTransacao" => "Despesa",
    "descricao" => "Livros",
    "valor" => 60
  ]
];
?>
