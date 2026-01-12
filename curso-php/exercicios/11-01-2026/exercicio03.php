<!-- Elabore um programa em PHP que receba um valor em metros e converta para centímetros. -->

<?php

$valorEmMetros = $argv[1] ?? 1;
$metroParaCm = $valorEmMetros * 100;

echo "O resultado do valor $valorEmMetros para centímetros é: $metroParaCm";