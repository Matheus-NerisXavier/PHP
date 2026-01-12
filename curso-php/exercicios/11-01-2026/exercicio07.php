<!-- Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC. -->

<?php

$altura = 1.70;
$peso = 80;

$imc = round($peso / ($altura ** 2), 2);

if ($imc < 18.5) {
  echo "IMC: $imc\n classificação: Magreza";
} elseif($imc <= 25) {
  echo "IMC: $imc\n classificação: Normal";
} elseif($imc <= 30) {
  echo "IMC: $imc\n classificação: Sobrepeso";
} elseif($imc <= 40) {
  echo "IMC: $imc\n classificação: Obesidade";
} else {
  echo "IMC: $imc\n classificação: Obesidade Grave";
}