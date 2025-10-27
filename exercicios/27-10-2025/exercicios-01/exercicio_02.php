<!-- 2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não. 
Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.
-->


<?php 
$notas = [5,8,9,7,2];
$notaDeCorte = 6;

foreach($notas as $nota) {
  if($nota > $notaDeCorte){
    echo "Nota: $nota - Aluno Aprovado\n";
  } else {
    echo "Nota: $nota - Aluno Reprovado\n";
  }
}