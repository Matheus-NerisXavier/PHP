<!-- Crie um programa que peça ao usuário para digitar 5 itens para uma lista de compras. O usuário deve digitar um item de cada vez.

Armazene esses 5 itens em um array. Após o usuário digitar todos os 5, exiba a lista completa em ordem alfabética.

Dica: Você vai precisar de uma função nova para ordenar. Pesquise por sort() no PHP. -->

<?php 

$items = [];

for($i = 1; $i <= 5; $i++) {
  echo "Item $i: ";

  $itens[] = trim(fgets(STDIN));
}

sort($itens);

echo "Lista ordenada em ordem alfabética";

var_dump($itens);
