<!-- O desafio:

Crie uma Trait chamada Identificador.

Dentro dela, o método gerarID() que retorna rand(1, 1000).

Crie as classes Produto e Pedido. Ambas devem usar a Trait.

Mostre o ID de um produto e o ID de um pedido. -->

<?php

trait Identificador
{
  public function gerarID()
  {
    return round(1, 1000);
  }
}

class Produto
{
  use Identificador;
  public function __construct(
    public readonly string $nomeProduto
  ) {}
}

class Pedido
{
  use Identificador;

  public function __construct(
    public readonly string $numeroPedido
  ) {}
}

$produto = new Produto("Notebook");
$pedido = new Pedido("1324");

echo "Produto: {$produto->nome} | ID Gerado: {$produto->gerarId()}" . PHP_EOL;echo "Produto: {$pedido->numeroPedido} | ID Gerado: {$pedido->gerarId()}" . PHP_EOL;

