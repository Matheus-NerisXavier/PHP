<!-- Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha. -->

<?php

$caminhoArquivo = __DIR__ . '/teste.txt';
$handle = fopen($caminhoArquivo, "r");

if($handle) {
  $primeiraLinha = fgets($handle);
  echo $primeiraLinha;
  fclose($handle);
} else {
  echo "Erro ao abrir o arquivo!";
}


