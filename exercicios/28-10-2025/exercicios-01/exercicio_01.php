<!-- Escreva um programa que peça ao usuário para digitar um número inteiro. Em seguida, o programa deve exibir a tabuada de multiplicação desse número, do 1 ao 10. -->

<?php 

echo "Digite um número de 0 a 10\n";
$numero = (int) fgets(STDIN);

for($i = 1; $i <= 10; $i++) {
  $multiplicacao = $numero * $i;
  echo "$numero X $i = $multiplicacao\n";
}