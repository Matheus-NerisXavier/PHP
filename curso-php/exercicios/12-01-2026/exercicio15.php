<!-- Crie uma função em PHP que converta graus celsius para Fahrenheit. -->

<?php

function celsiusToFahrenheit (float $celsius): float {
  return ($celsius * 9/5) + 32;
}

echo celsiusToFahrenheit(26);