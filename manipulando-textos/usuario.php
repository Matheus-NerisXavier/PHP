<?php

$nome = "Matheus Neris";

$email = " matheus@gmail.com ";
$senha = "áêíóúatg";

if (mb_strlen($senha) < 8) {
    echo "Senha insegura" . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);
echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

[$nome, $sobrenome] = explode(' ', $nome);

echo "Nome: " . $nome . PHP_EOL;
echo "Sobrenome: " . $sobrenome . PHP_EOL;

$csv = 'Matheus Neris,24,matheusneris2011@gmail.com';
var_dump(explode(',', $csv));

trim($email) . PHP_EOL;