<?php

$cursos = [
    'Introdução ao PHP',
    'DDD com PHP',
    'Coleções em PHP'
];

$cursosOo = [
    'Orientação a Objetos',
    'Object Calisthenics com PHP'
];

$cursos[] = 'Arrays em PHP';
//array_push(
//    $cursos,
//    'Orientação a Objetos',
//    'Object Calisthenics com PHP'
//);

$novoArray = array_merge($cursos, $cursosOo);
//$intro = array_shift($novoArray);
//$intro = array_pop($novoArray);

array_unshift($novoArray, 'Instalando PHP');

var_dump ($novoArray);

//var_dump($novoArray);

//var_dump($cursos);
