<?php

$csv =  ',Matheus Neris,25,.';

echo trim($csv, '.,') . PHP_EOL;
echo ltrim($csv, '.,') . PHP_EOL;
echo rtrim($csv, '.,') . PHP_EOL;