<?php

$nome = "Matheus Rocha";
$ehDaMinhaFamilia = str_contains($nome, 'Neris');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha familia" . PHP_EOL;
} else {
    echo "$nome não é da minha familia" . PHP_EOL;
}