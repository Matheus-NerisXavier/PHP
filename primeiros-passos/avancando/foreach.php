<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Matheus',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Lucas',
        'saldo' => 10000
    ],
    '123.456.789-12' => [
        'titular' => 'Roberto',
        'saldo' => 300
    ]
];

$contasCorrentes  ['123.456.789-13'] = [
        'titular' => 'Joao',
        'saldo' => 2000
    ];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}