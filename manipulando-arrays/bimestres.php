<?php

$notasBimestre1 = [
    "Matheus" => 10,
    "Lucas" => 8,
    "Ana" => 9,
    "Luana" => 7,
    "Paula" => 6
];

$notasBimestre2 = [
    "Lucas" => 5,
    "Ana" => 7,
    "Luana" => 9,
    "Paula" => 6
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));


//var_dump(array_keys($alunosFaltantes));
//var_dump(array_values($alunosFaltantes));

//var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
//var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

