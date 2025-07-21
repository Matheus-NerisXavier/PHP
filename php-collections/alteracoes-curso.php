<?php

require "Curso.php";
require "Aluno.php";

$curso = new Curso('Collection com PHP');
$curso->adicionaAlteracao('Primeira aula');
$curso->adicionaAlteracao('Segunda aula modificada');
$curso->adicionaAlteracao('Terceira aula concluida');

$lista = $curso->recuperaAlteracoes();
$lista->push('Alteração indevida');

foreach ($curso->recuperaAlteracoes() as $alteracao)
{
    echo $alteracao . PHP_EOL;
}

$curso->adicionaAlunoParaEspera(new Aluno('Matheus Neris'));
$curso->adicionaAlunoParaEspera(new Aluno('Lucas Neris'));
$curso->adicionaAlunoParaEspera(new Aluno('Ana Maria'));

echo  '---------------------' . PHP_EOL;

foreach ($curso->recuperaAlunosEsperando() as $aluno)
{
    echo $aluno->nome . PHP_EOL;
}

$curso->matriculaAluno(new Aluno('Matheus Neris'));
$curso->matriculaAluno(new Aluno('Rogerio Neris'));
$curso->matriculaAluno(new Aluno('Matheus Neris'));

echo  '---------------------' . PHP_EOL;

foreach ($curso->recuperaAlunosMatriculados() as $aluno){
    echo $aluno->nome . PHP_EOL;
}

$matheusEstaMatriculado = $curso->recuperaAlunosMatriculados()->contains(New Aluno('Outro'));

var_dump(
    $matheusEstaMatriculado
);