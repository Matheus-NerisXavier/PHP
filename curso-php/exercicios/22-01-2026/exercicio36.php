<!-- Crie uma classe Frete com as propriedades public float $valorProduto e public float $taxaFrete (ex: 0.10 para 10%).
No construtor, receba esses dois valores e guarde-os.
Crie o método calcularTotal().
REGRAS: * O método não deve receber nenhum parâmetro ().
Ele deve usar o $this para pegar o valor do produto e multiplicar pela taxa.
Retorne o valor total (produto + frete). -->

<?php

class Frete {
  public function __construct(
    public readonly float $valorProduto,
    public readonly float $taxaFrete
  )
  {
  }

  public function calcularTotal(): float
  {
    $valorFrete = $this->valorProduto * $this->taxaFrete;
    return $this->valorProduto + $valorFrete;
  }
}

$valorTotal = new Frete(200, 0.10);
echo "O valor total é de: {$valorTotal->calcularTotal()}";