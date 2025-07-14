<?php
// Crie uma função chamada saudacao que receba um nome como parâmetro e retorne a mensagem:
//"Olá, [nome]! Seja bem-vindo(a)."

function saudacao($nome)
{
    echo "Olá, $nome! Seja bem-vindo(a)" . PHP_EOL;
}

saudacao("Matheus Neris");