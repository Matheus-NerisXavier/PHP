<!-- Crie um array onde cada item é um aluno, e cada aluno é um array associativo com nome e nota.

Percorra essa lista de alunos e, para cada um, exiba o nome, a nota e se ele foi "APROVADO" ou "REPROVADO" (use a média 6.0 para aprovar). -->

<?php 

$alunos = [
  [
    "nome" => "Matheus",
    "nota" => 8.9
  ],
  [
    "nome" => "Pedro",
    "nota" => 4
  ],
  [
    "nome" => "Ana",
    "nota" => 1.5
  ],
  [
    "nome" => "Julia",
    "nota" => 6.2
  ],
];

foreach ($alunos as $aluno) {
  if($aluno['nota'] >= 6) {
    echo $aluno['nome'] . " aprovado com a nota " . $aluno['nota'] . PHP_EOL;
  } else {
     echo $aluno['nome'] . " reprovado com a nota " . $aluno['nota'] . PHP_EOL;
  }
}