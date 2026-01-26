<?php

$notasBimestre1 = [
  'Ana' => 10,
  'Matheus' => 7,
  'Pedro' => 9,
  'Roberto' => 7,
  'Laura' => 6
];

$notasBimestre2 = [
  'Ana' => 3,
  'Pedro' => 9,
  'Roberto' => 5,
];

// var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));
// var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_keys($alunosFaltantes));
var_dump(array_values($alunosFaltantes));
var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump($alunosFaltantes);
var_dump(array_flip($alunosFaltantes));