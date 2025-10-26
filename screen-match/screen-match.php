<?php

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Se beber não case";

$anoLancamento = $argv[1] ?? 2022;

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 5;

$notaFilme = $somaDeNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme \n";
echo "Ano de lançamento: $anoLancamento \n";

if ($anoLancamento > 2022) {
  echo "Esse filme é um lançamento\n";
} else if ($anoLancamento > 2020 && $anoLancamento <= 2022) {
  echo "Esse filme ainda é novo\n";
} else {
  echo "Esse filme não é um lançamento\n";
}

$genero = match ($nomeFilme) {
  "Top Gun - Maverick" => "ação",
  "Thor: Ragnarok" => "super-heroi",
  "Se beber não case" => "comédia",
  default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero";