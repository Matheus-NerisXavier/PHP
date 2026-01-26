<?php

$nome = "Matheus Neris";
$email = "matheus@gmail.com.br ";
$senha = 'aéíou';

echo mb_strlen($senha) . PHP_EOL;

if (strlen($senha) < 8) {
  echo "Senha insegura" . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo $usuario . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Matheus Neris,25,matheus@gmail.com';
var_dump(explode(',', $csv));

echo trim($email) . PHP_EOL;  