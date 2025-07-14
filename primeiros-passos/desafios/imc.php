<?php

$peso = 60;
$altura = 1.74;

$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
    echo "Seu IMC é $imc, você está abaixo do peso.";
}  else if ($imc >= 18.5 && $imc < 24.9) {
    echo "Seu IMC é $imc, você está com o peso normal.";
} else {
    echo "Seu IMC é $imc, você está com sobrepeso.";
}