<?php

$alunos2021 = [
    0 => "Matheus",
    1 => "Lucas",
    2 => "Ana",
    3 => "Luana",
    4 => "Paula"
];

$novosAlunos = [
    5 => "Patricia",
    6 => "Nico",
    7 => "Laura",
    8 => "Daiane"
];

$alunos2022 = [...$alunos2021, 'Neris Xavier', ...$novosAlunos];

//$alunos2022 = $alunos2021 + $novosAlunos;
//$alunos2022 = array_merge($alunos2021, $novosAlunos);

array_push($alunos2022, 'Nunes', 'Milca', 'Amanda');
$alunos2022[]= 'Luiz';

array_unshift($alunos2022, 'Stephane', 'Rafaela');

echo array_shift($alunos2022) . PHP_EOL;

echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);
