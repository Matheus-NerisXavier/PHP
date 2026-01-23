<!-- 
Crie a classe Carro.
Propriedade: private float $combustivel = 0;. (Pode inicializar no topo ou no construtor).
Método abastecer(float $litros): void.
A Lógica de Proteção:
Validação 1: Se o valor de $litros for zero ou negativo, throw new Exception("Quantidade inválida!");.
Validação 2: Se o que já tem no tanque + o que está entrando passar de 50, throw new Exception("O tanque suporta apenas 50 litros!");.
Sucesso: Se passar pelas duas alfândegas, some os litros: $this->combustivel += $litros;. -->

<?php

class Carro {
  public function __construct(
    private float $combustivel = 0
  )
  {
  }

  public function abastecer(float $litros): void
  {
    if($litros === 0 || $litros <= 0) {
      throw new Exception("Quantidade inválida!");
    } else if ($this->combustivel + $litros >= 50) {
      throw new Exception("O tanque suporta apenas 50 litros!");
    }

     $this->combustivel += $litros;
     echo "Abastecimento concluído! Novo saldo: {$this->combustivel} litros.";
  }
}

try {
$carro = new Carro(20);
$carro->abastecer(10);
} catch (Exception $e) {
  echo "Um erro aconteceu: " . $e->getMessage();
}
