<?php

$notas = [
    "Matheus" => 10,
    "Lucas" => 8,
    "Ana" => 9,
    "Luana" => 7,
    "Paula" => 6
];

//arsort($notas);
//uksort($notas);
krsort($notas);
var_dump($notas);


if (is_array($notas)){
    echo "Sim, é um array" . PHP_EOL;
}

var_dump(array_is_list($notas));