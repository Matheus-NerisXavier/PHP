<!-- Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array. -->

<?php
$notas = [10,6,4,2.5,7,3,7.5,5.5];
arsort($notas);

var_dump(array_slice($notas,0,3));