<?php

$texto = 'Texto com qualquer coisa poxa que caramba';

echo str_replace(
  ['poxa', 'caramba'],
  ['p', 'c'],
  $texto
  ) . PHP_EOL;

echo strtr($texto, 'poxa', '***@') . PHP_EOL;
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL;