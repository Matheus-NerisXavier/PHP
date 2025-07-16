<?php

$telefones = ['(19) 98765 - 5332', '(19) 97265 - 1232', '(19) 95765 - 5222'];

foreach ($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
    $telefoneValido = preg_match($regex, $telefone);
    if($telefoneValido) {
        echo 'Telefone valido: ' . PHP_EOL;
    } else {
        echo 'Telefone invalido: ' . PHP_EOL;
    }

    echo preg_replace(
            $regex,
            '(XX) \2',
            $telefone
        ) . PHP_EOL;
}

