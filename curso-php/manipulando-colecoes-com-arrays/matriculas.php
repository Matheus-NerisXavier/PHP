<?php

$alunos2021 = [
  0 => 'Ana',
  1 => 'Matheus',
  2 => 'Pedro',
  3 => 'Roberto',
  4 => 'Laura'
];

$novosAlunos = [
  5 => 'Patricia',
  6 => 'Nico',
  7 => 'Daiane',
  8 => 'Paula'
];


$alunos2022 = [...$alunos2021, 'Bruna' ,...$novosAlunos];
array_push($alunos2022, 'Alice', 'Bob', 'Lorena');
$alunos2022[] = 'Luiz';

array_unshift($alunos2022, 'Barbara', 'Carol');

// $alunos2022 = array_merge($alunos2021, $novosAlunos);
// $alunos2022 = $alunos2021 + $novosAlunos;
var_dump($alunos2022);

echo array_shift($alunos2022) . PHP_EOL;
echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);