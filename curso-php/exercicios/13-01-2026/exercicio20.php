<!-- Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche. -->

<?php
$arquivo = __DIR__ . '/teste.txt';
$texto = "PHP é incrível" . PHP_EOL;
file_put_contents($arquivo, $texto, FILE_APPEND);