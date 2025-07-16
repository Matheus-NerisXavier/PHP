<?php

$notas = [
    10,
    8,
    9,
    7,
    2
];

$notasOrdenas = $notas;
sort($notasOrdenas);

echo 'Desordenas: ' . PHP_EOL;
var_dump($notas);

echo 'Ordenadas: ' . PHP_EOL;
var_dump($notasOrdenas);