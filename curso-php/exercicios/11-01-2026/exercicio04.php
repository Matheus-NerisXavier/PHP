<!-- Desenvolva um programa em PHP que verifique se um ano é bissexto ou não. -->

<?php

$ano = 2026;
if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
  echo "Ano é bissexto";
} else {
  echo "Ano não é bissexto";
}
