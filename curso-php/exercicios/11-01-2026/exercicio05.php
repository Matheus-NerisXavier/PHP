<!-- Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit. -->

<?php

$teperaturaEmCelsius = $argv[1] ?? 25;
$celsiusToFahrenheit = ($teperaturaEmCelsius * 9/5) + 32;

echo "O resultado de $teperaturaEmCelsius em Fahrenheit é: $celsiusToFahrenheit";