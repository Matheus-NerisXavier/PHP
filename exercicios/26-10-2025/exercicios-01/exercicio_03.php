<!-- 3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros. -->

<?php
$valorEmMetros = $argv[1];
$valorEmCentimetros = $valorEmMetros * 100;

echo "O valor em centímetros é de: $valorEmCentimetros";