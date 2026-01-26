<?php

$anoNascimento = '2001';

$idade = 2026 - $anoNascimento;

echo $idade . PHP_EOL;

if($anoNascimento == 2001) {
  echo "Sim" . PHP_EOL;
} else {
  echo "Não" . PHP_EOL;
}