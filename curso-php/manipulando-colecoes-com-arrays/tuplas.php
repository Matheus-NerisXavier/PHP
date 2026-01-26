<?php

$dados = [
  'nome' => 'Matheus',
  'nota' => 10, 
  'idade' => 24
];

// [$nome,$nota,$idade] = $dados;

extract($dados);
var_dump($nome,$nota,$idade);

var_dump(compact('nome', 'nota', 'idade'));