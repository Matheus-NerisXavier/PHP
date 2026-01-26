<?php

$array = [
  'um',
  'dois',
  'tres'
];

// 1 -> 'um'

foreach ($array as $numeral => $nomeNumero){
  echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;

var_dump(array_is_list($array));