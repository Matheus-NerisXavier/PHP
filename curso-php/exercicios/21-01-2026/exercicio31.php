<!-- Crie uma classe abstrata Pagamento com um método abstrato processar(float $valor): void.

Crie duas subclasses: Pix e Cartao.

Implemente o método processar em cada uma, exibindo uma mensagem diferente para cada forma de pagamento.

Dica: Tente instanciar a classe Pagamento diretamente e veja o que acontece. -->

<?php

abstract class Pagamento
{
  public function __construct(
    public readonly float $valor
  ) {}

  abstract public function processar(): void;
}

class Pix extends Pagamento
{
  public function processar(): void
  {
    echo "Pagamento de {$this->valor} realizado via Pix";
  }
}

class Cartao extends Pagamento
{
  public function processar(): void
  {
    echo "Pagamento de {$this->valor} realizado via Cartão";
  }
}

// $pagamento = new Pagamento(50); // Erro informando que tem uma instancia abstrata 

$pagamentoPix = new Pix(50);
echo $pagamentoPix->processar() . PHP_EOL;

$pagamentoCartao = new Cartao(250);
echo $pagamentoCartao->processar();
