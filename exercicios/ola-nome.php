<?php

//Crie um array com 5 nomes. Use um foreach para imprimir a frase:

$nomes = [
    "Matheus Neris",
    "Pedro Enrique",
    "João Paulo",
    "Ana Paula",
    "Maria Paula"
];

foreach ($nomes as $nome) {
    echo "Olá, $nome!" . PHP_EOL;
}