<!-- Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas. -->

<?php

$texto = "Vinicius Dias,1997,Programador";
var_dump(explode(",", $texto));