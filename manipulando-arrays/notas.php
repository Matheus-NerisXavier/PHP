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

echo "Matheus fez a prova:" . PHP_EOL;
//var_dump(isset($notas["Matheus"]));
var_dump(array_key_exists('Matheus', $notas));


echo "Alguém tirou 10?" . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo "Quem tirou 10?" . PHP_EOL;
echo array_search(10,$notas, true);


// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula

