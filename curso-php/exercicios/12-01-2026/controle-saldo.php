<?php

$titular = "Matheus Neris";
$saldoAtual = 1_000;

echo "
*************************\n
  Titular: $titular\n
  Saldo atual: R$ $saldoAtual\n
*************************\n";

do {
  echo "
  1. Consultar saldo atual\n
  2. Sacar valor\n
  3. Depositar valor\n
  4. Sair\n
";

  $op = (int) fgets(STDIN);
  switch ($op) {
    case 1:
      echo "Saldo atual é de: $saldoAtual\n";
      break;

    case 2:
      echo "Digite o valor do saque\n";
      $valorSaque = (float) fgets(STDIN);
      if ($valorSaque > $saldoAtual || $valorSaque < 0) {
        echo "Verique o valor do Saque\n";
      } else {
        $saldoAtual -= $valorSaque;
      }
      break;

    case 3:
      echo "Digite o valor do deposito\n";
      $valorDeposito = (float) fgets(STDIN);

      if ($valorDeposito < 0) {
        echo "Verifique o valor do deposito\n";
      } else {
        $saldoAtual += $valorDeposito;
      }
      break;
    case 4:
      echo "Adeus";
      break;

    default:
      echo "Opção inválida verifique!";
      break;
  }
} while ($op != 4);