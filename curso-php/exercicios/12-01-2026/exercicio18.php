<!-- Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética. -->

<?php
$textos = [
  "Bom dia",
  "Galo",
  "Praia",
  "Casa",
  "Abelha"
];

sort($textos);
var_dump($textos);