<!-- 4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não. -->

<?php

$ano = 205;

if(($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
  echo "$ano é bissexto";
} else {
  echo "$ano não é bissexto";
}