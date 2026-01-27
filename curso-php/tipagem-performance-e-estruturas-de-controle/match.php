<?php

$opcao = 3; // ===

$menuSelecionado = match ($opcao) {
  '1' => 'Saldo',
  '2' => 'Depósito',
  '3' => 'Saque',
  '4' => 'Sair',
  default => null,
};

var_dump($menuSelecionado);