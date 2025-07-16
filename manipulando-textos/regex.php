<?php

$telefones = ['(19) 98765 - 5332', '(19) 97265 - 1232', '(19) 95765 - 5222'];

foreach ($telefones as $telefone) {

    $telefoneValido = preg_match('/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/', $telefone);
    if($telefoneValido) {
        echo 'Telefone valido: ' . PHP_EOL;
    } else {
        echo 'Telefone invalido: ' . PHP_EOL;
    }

}