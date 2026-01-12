<!-- Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.

Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado. -->

<?php

$notas = [5,10,7,4,6,3];

foreach ($notas as $nota) {
  if($nota > 6) {
    echo "Nota: $nota aluno aprovado\n";
  } else {
    echo "Nota: $nota aluno reprovado\n";
  }
}