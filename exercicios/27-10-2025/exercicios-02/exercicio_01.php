<?php

$titular = "Matheus Neris";
$saldo = 1500;

 echo "***********************\n";
 echo "Titular: $titular\n";
 echo "Saldo Atual: R$ $saldo\n";
 echo "***********************\n";

do {
  echo "1. Consultar o saldo atual\n";
  echo "2. Sacar valor\n";
  echo "3. Depositar valor\n";
  echo "4. Sair\n";

  $opcao = (int) fgets(STDIN);

  switch ($opcao) {
    case 1:
      echo "***********************\n";
      echo "Titular: $titular\n";
      echo "Saldo Atual: R$ $saldo\n";
      echo "***********************\n";
      break;
    case 2:
      echo "Digite o valor que deseja sacar\n";
      $valorSaque = (float) fgets(STDIN);

      if ($valorSaque > $saldo) {
        echo "Saldo insufiente para realizar a operação\n";
      } else if ($valorSaque <= 0) {
        echo "Valor para saque inválido\n";
      } else {
         $saldo -= $valorSaque;
      }
      break;
    case 3:
      echo "Digite o valor que deseja depositar\n";
      $valorADepositar = (float) fgets(STDIN);
      if ($valorADepositar <= 0) {
        echo "O valor para realizar um depósito precisa ser maior que 0\n";
      } else {
         $saldo += $valorADepositar;
      }
      break;
    case 4:
      echo "Adeus!\n";
      break;
    default:
      echo "Opção inválida\n";
      break;
  }
} while ($opcao != 4);
