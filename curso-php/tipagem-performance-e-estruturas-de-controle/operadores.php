<?php

// Precedência e Associatividade

$matematicos = (1 - 2) - 3; // (1 - 2) - 3 = -4; 1 - (2 - 3) = 2;
echo $matematicos;

$a = ($b = ($c = 1));

// Operador de String

echo "Soma: " . 2 + 2;
$mensagem = "Soma: ";
$mensagem .= 2 + 2;
echo $mensagem;

// Operadores de array
$array = [];
$array1 = [1, 2];
$array2 = [3, 4];

var_dump($array1 == $array2);

// Ternario e Elvis (?:)

// Nulo
$nulo = null;
var_dump($array1[3]);

// Evitar sempre que possível: Supressão de erros
var_dump(@$array1[4]);