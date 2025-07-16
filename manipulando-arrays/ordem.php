<?php

$notas = [

   [
       'aluno' => 'Matheus',
       'nota' => 10
   ],
    [
       'aluno' => 'Ana',
       'nota' => 6
   ],
    [
       'aluno' => 'Pedro',
       'nota' => 9
   ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);