<?php

$notas = [
  'Ana' => 10,
  'Matheus' => null,
  'Pedro' => 9,
  'Roberto' => 7,
  'Laura' => 6
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
  echo "É um array" . PHP_EOL;
};

var_dump(array_is_list($notas));

echo "Maheus fez a prova: " . PHP_EOL;
var_dump(isset($notas['Ana']));
// var_dump(array_key_exists('Matheus', $notas));

echo "Alguém tirou 10?" . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo "Quem tirou 10?" . PHP_EOL;
var_dump(array_search(10, $notas));

// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nulo