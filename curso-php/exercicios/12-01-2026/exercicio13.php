<!-- Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação. -->

<?php

function operacaoMatematica(float $num1,float $num2,string $op) {
  return match ($op) {
    'soma' => $num1 + $num2,
    'subtração' => $num1 - $num2,
    'multiplicação' => $num1 * $num2,
    'divisão' => ($num2 !=0) ? $num1 / $num2 : "Erro: Divisão por zero",
    default => "Operação inválida",
  };
}

echo operacaoMatematica(10,20,"soma")."\n";
echo operacaoMatematica(40,20,"subtração")."\n";
echo operacaoMatematica(10,20,"multiplicação")."\n";
echo operacaoMatematica(4,2,"divisão")."\n";