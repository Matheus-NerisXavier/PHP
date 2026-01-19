<!-- Crie uma classe Produto com as propriedades public string $nome e public float $preco.
Crie uma classe Pedido.
No construtor da classe Pedido, peça a quantidade (int) e o produto (do tipo Produto).
Crie um método no Pedido chamado calcularTotal(). Ele deve multiplicar a quantidade pelo preço do produto. -->

<?php

class Produto {
  public function __construct(
    public string $nome,
    public float $preco
  )
  {}
}

class Pedido {
  public function __construct(
    public int $quantidade,
    public Produto $produto
  )
  {}

  public function calcularTotal(): float {
    return $this->quantidade * $this->produto->preco;
  }
}

$produto = new Produto("Notebook", 2000);
$pedido = new Pedido(3, $produto);

echo "O valor do pedido é: " . $pedido->calcularTotal();