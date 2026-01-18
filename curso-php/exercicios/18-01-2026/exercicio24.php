<!-- Crie uma classe ContaBancaria com métodos para realizar operações bancárias como depositar(), sacar() e consultarSaldo(). Em seguida, crie uma subclasse ContaCorrente que herda da classe ContaBancaria. Adicione um método específico para a subclasse, como cobrarTarifaMensal(), que desconta uma tarifa mensal da conta corrente.

Além disso, no método sacar() da ContaCorrente, cobre uma taxa de saque também. Armazene essa taxa como uma constante da classe. -->

<?php
class ContaBancaria
{
  protected float $saldo;

  public function __construct(
    private readonly string $titular,
    float $saldoInicial = 0,
  ) {
    $this->saldo = $saldoInicial;
  }

  public function depositar(float $valor): void
  {
    if ($valor > 0) {
      $this->saldo += $valor;
    }
  }

  public function sacar(float $valor): void
  {
    if ($valor > 0 && $valor < $this->saldo) {
      $this->saldo -= $valor;
    } else {
      echo "Saldo insuficiente ou valor inválido\n";
    }
  }

  public function consultarSaldo(): float
  {
    return $this->saldo;
  }
}

class ContaCorrente extends ContaBancaria
{
  const VALOR_TARIFA_MENSAL = 15;
  const VALOR_TARIFA_SAQUE = 4;
 
  public function cobrarTariaMensal(): void
  {
    $this->saldo -= self::VALOR_TARIFA_MENSAL;
  }

  public function sacar(float $valor): void
  {
    $valorComTaxa = $valor + self::VALOR_TARIFA_SAQUE;

    if ($valorComTaxa <= $this->saldo) {
      $this->saldo -= $valorComTaxa;
    } else {
      echo "Saldo insuficiente para o saque com taxa. \n";
    }
  }
}
