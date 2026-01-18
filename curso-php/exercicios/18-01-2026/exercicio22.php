<!-- Crie uma enum em PHP com tipos de contas bancárias e implemente um método informando se a conta possui taxas. Contas correntes e de investimento possuem taxas, enquanto contas poupança e universitárias não; -->

<?php

enum TipoConta {
  case ContaCorrente;
  case ContaInvestimento;
  case ContaUniversitaria;
  case ContaPoupanca;

  public function verificaTaxa(): string
  {
    return match($this) 
    {
      self::ContaCorrente => "Sim",
      self::ContaInvestimento => "Sim",
      self::ContaPoupanca => "Não",
      self::ContaUniversitaria => "Não",
    };
  }
}