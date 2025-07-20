<?php

require "Curso.php";

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

$curso->adicionaAlunoParaEspera('Matheus Neris');
$curso->adicionaAlunoParaEspera('Lucas Neris');
$curso->adicionaAlunoParaEspera('Ana Maria');

foreach ($curso->recuperaAlunosEsperando() as $aluno)
{
    echo $aluno . PHP_EOL;
}

