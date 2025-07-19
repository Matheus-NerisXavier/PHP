<?php

//$array = []; // memória para 0 itens
//$array[] = 1; //memória para 2ˆ1 = 2
//$array[] = 2; //memória para 2ˆ1 = 2
//$array[] = 3; //memória para 2ˆ2 = 4
//$array[] = 4; //memória para 2ˆ2 = 4
//$array[] = 5; //memória para 2ˆ3 = 8

$array2 = [];
for ($i = 0; $i < 32769; $i++) {
    $array2[$i] = $i;
}

var_dump(memory_get_usage() / 1024 / 1024);

