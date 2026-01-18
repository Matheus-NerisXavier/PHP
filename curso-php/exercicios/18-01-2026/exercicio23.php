<!-- Crie uma classe que represente uma conta com as propriedades saldo, nome do titular e tipo. Use os tipos e formas de acesso adequadas. -->

<?php

enum TipoConta
{
  case ContaCorrente;
  case ContaInvestimento;
  case ContaUniversitaria;
  case ContaPoupanca;
}

class Conta
{
  public function __construct(
    public readonly string $nome,
    public readonly TipoConta $tipoConta,
    private float $saldo = 0
  ) {}
}
