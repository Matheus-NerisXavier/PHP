<?php

//Crie um array com 4 notas. Calcule a média das notas e, com if, exiba se o aluno
// foi aprovado (média maior ou igual a 6) ou reprovado.

$notas = [8,6,6,4];
$soma = 0;

foreach ($notas as $nota) {
    $soma += $nota;
}

echo $soma . PHP_EOL;

$media = $soma / count($notas);

if ($media >= 6) {
    echo "Aprovado com a média: $media" . PHP_EOL;
} else {
    echo "Reprovado com a média: $media" . PHP_EOL;
}