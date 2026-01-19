<!-- Crie uma classe Motor com as propriedades public string $tipo (ex: "V8", "Elétrico") e public int $potencia.
Crie uma classe Carro com as propriedades public string $modelo e public Motor $motor.
No Carro, crie um método chamado exibirDetalhes().
Esse método deve imprimir: "Carro modelo [modelo] com motor [tipo] de [potencia] cavalos". -->

<?php
class Motor {
  public function __construct(
    public string $tipo,
    public int $potencia
  )
  {}
}

class Carro {
  public function __construct(
    public string $modelo,
    public Motor $motor
  )
  {}

  public function exibirDetalhes(): string 
  {
    return "Carro modelo {$this->modelo} com motor {$this->motor->tipo} de {$this->motor->potencia}";
  }
}

$motor = new Motor("V8", 620);
$carro = new Carro("Hilux sw4", $motor);

echo $carro->exibirDetalhes();
