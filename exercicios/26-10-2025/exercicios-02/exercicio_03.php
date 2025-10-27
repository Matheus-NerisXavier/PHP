<!-- 3 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).-->

<?php
$horario = 14;

if($horario < 12){
  echo "Bom dia";
} else if ($horario < 18) {
  echo "Boa tarde";
} else {
  echo "Boa noite";
}