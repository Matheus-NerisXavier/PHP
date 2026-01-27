<?php

declare(strict_types=1);

// Escalares
$string  = 'Valores textuais';
$int = 27;
$float = 15.5;
$bool = false;

// Compostos
$array = [1324, 42942, 1021];

// Conversão de tipos 
// Type Cast

$valorNumerico = '27';
$valorInteiro = (int) $valorNumerico;

$valorDecimal =  27.5;
$valorInteiro =  (int) $valorInteiro;

// var_dump($valorInteiro);
// var_dump((bool) '');

// var_dump((int) '27.5');

if (-0.1) {
  echo "Verdadeiro" . PHP_EOL;
} else {
  echo "Falso" . PHP_EOL;
}

// Type Juggling
// var_dump('Valor numérico' == 0);
// var_dump('27' == 27);

var_dump('27' > 28);
var_dump('teste' > '28');

function exibeMensagemLancamento(int $ano): void {
  if ($ano > 2022) {
    echo "Esse filme é um lançamento\n";
  } elseif ($ano > 2020 && $ano <= 2022) {
    echo "Esse filme ainda é novo\n";
  } else {
    echo "Esse filme não é um lançamento\n";
  }
}

exibeMensagemLancamento((int) '2025');

// Comparações mais estritas 

var_dump('27' == 27);
var_dump('27' === 27);

// JIT Compiler
