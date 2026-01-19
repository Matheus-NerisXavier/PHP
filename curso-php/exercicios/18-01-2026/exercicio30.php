<!-- Crie uma classe Ingresso com a propriedade protected float $valor.
Crie um método getValor() que retorna o valor do ingresso.
Crie uma subclasse chamada MeiaEntrada que herda de Ingresso.
Na classe MeiaEntrada, sobrescreva o método getValor() para que ele retorne apenas metade do valor original. -->

<?php

class Ingresso {
  public function __construct(
    protected float $valor
  )
  {}

  public function getValor(): float
  {
    return $this->valor;
  }
}

class MeiaEntrada extends Ingresso {
  public function __construct(float $valor)
  {
    parent::__construct($valor);
  }
  public function getValor(): float
  {
    return $this->valor / 2;
  }
}

$ingresso = new Ingresso(40);
echo $ingresso->getValor() . PHP_EOL;

$meiaEntrada = new MeiaEntrada(60);
echo $meiaEntrada->getValor() . PHP_EOL;
