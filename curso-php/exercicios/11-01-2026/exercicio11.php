<!-- Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela. -->

<?php

$dadosBancarios = [
  "titular" => "Matheus Neris",
  "saldo" => 200,
  "tipoDaConta" => "Corrente"
];

echo "Titular: " . $dadosBancarios["titular"] . "\n" . 
"Saldo: " . $dadosBancarios["saldo"];
