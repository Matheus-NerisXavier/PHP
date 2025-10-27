<!-- 3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela. -->

<?php

$contaBancaria = [
  "titular" => "Matheus Neris",
  "saldo" => 1500
];

echo $contaBancaria["titular"] . PHP_EOL;
echo $contaBancaria["saldo"] . PHP_EOL;