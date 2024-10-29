# Exercício: Cálculo de Preço com Desconto

Neste exercício, você irá criar uma aplicação web que calcula o **preço final** de um produto após a aplicação de um **desconto percentual**.

---

## Especificações

1. **Formulário**:
   - O usuário deverá informar:
     - **Nome do produto**.
     - **Preço original**.
     - **Percentual de desconto** (em %).

2. **Cálculo**:
   - **Preço com desconto**:
     ```php
     $precoComDesconto = $precoOriginal * (1 - ($desconto / 100));
     ```
   - O valor final deve ser exibido com **2 casas decimais**.

3. **Validação**:
   - Use `isset()` e `empty()` para garantir que todos os campos foram preenchidos.
   - Exiba a seguinte mensagem se todos os dados forem fornecidos:
     ```
     O produto [nome do produto], que custava R$ [preço original], recebeu um desconto de [desconto]%. 
     O valor final é: R$ [preço final].
     ```
   - O valor final deve ser exibido em **negrito** e com a **cor verde**.

4. **HTML e CSS**:
   - Use o **método GET** para enviar os dados do formulário.
   - Aplique uma classe CSS para estilizar o valor final.

---
