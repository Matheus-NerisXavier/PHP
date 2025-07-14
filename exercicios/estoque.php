<?php

//Crie um array associativo com produtos e suas quantidades
// (ex: "camisa" => 10, "calça" => 5). Percorra o array com foreach e exiba os
// produtos com quantidade maior que 6.

$produtos = [
    "Camisa" => 10,
    "Calça" => 5,
    "Tenis" => 7,
    "Relogio" => 50,
    "Anel" => 5
];

foreach ($produtos as $produto => $quantidade) {
    if ($quantidade >= 6){
       echo "- $produto: $quantidade unidades " . PHP_EOL;
    }
}