<!-- Crie uma classe Funcionario com as propriedades nome (readonly) e salario (protected).
Crie um método receberAumento(float $valor) que soma o valor ao salário.
Crie uma subclasse Gerente que herda de Funcionario.
Na classe Gerente, sobrescreva o método receberAumento. O gerente sempre recebe o valor do aumento mais um bônus fixo de 500 reais.
O que treina: Herança e sobrescrita de métodos (Polimorfismo). -->

<?php

class Funcionario
{
  protected float $salario = 1500;
  public function __construct(
    public readonly string $nome,
  ) {
  }

  public function receberAumento(float $valor): void
  {
    $this->salario += $valor;
  }

  public function getSalario(): float
  {
    return $this->salario;
  }
}

class Gerente extends Funcionario {
  public function __construct(string $nome)
  {
    parent::__construct($nome);
  }

  public function receberAumento(float $valor): void
  {
    $this->salario += ($valor + 500);
  }
}