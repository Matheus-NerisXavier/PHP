<!-- 1 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100. -->

<?php 

for($i = 0; $i <= 100; $i++) {
  if($i % 2 == 1) {
    echo "$i\n";
  }
}