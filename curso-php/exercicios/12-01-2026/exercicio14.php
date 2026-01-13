<!-- Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro. -->

<?php

function imc(float $altura, float $peso)
{
  $imc = round($peso / ($altura ** 2),2);

  if ($imc < 18.5) {
    return "IMC: $imc, classificação: Magreza";
  } elseif ($imc < 24.9) {
    return "IMC: $imc, classificação: Normal";
  } elseif ($imc < 29.9) {
    return "IMC: $imc, classificação: Sobrepeso";
  } elseif ($imc < 39.9) {
    return "IMC: $imc, classificação: Obesidade";
  } else {
    return "IMC: $imc, classificação: Obesidade Grave";
  }
}

echo imc(1.70, 80);
