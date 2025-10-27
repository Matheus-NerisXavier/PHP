<!-- 2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.
 -->

<?php

$peso = 80;
$altura = 1.70;

$imc = ($peso / ($altura * $altura));
$imcFormatado = number_format($imc, 2, ',', '.');

if ($imc < 18.5) {
  echo "Seu imc foi de: $imcFormatado e você está com a classificação de Magreza";
} else if ($imc < 24.9) {
  echo "Seu imc foi de: $imcFormatado e você está com a classificação de Normal";
} else if ($imc < 29.9) {
  echo "Seu imc foi de: $imcFormatado e você está com a classificação de Sobrepeso";
} else if ($imc < 39.9) {
  echo "Seu imc foi de: $imcFormatado e você está com a classificação de Obesidade";
} else {
  echo "Seu imc foi de: $imcFormatado e você está com a classificação de Obesidade Grave";
}
