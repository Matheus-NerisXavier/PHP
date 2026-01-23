<!-- Crie a classe Boletim.
Propriedades: private float $nota1 e private float $nota2.
No método calcularMedia(): float, faça a conta (soma / 2) usando o $this. Importante: Não use parâmetros aqui.
Crie o método exibirResultado(): void.
O Segredo: Dentro deste método, chame o outro: $media = $this->calcularMedia();.
Se for >= 7, imprima "Aprovado com média [media]". Senão, "Reprovado". -->

<?php

class Boletim {
  public function __construct(
    private float $nota1,
    private float $nota2
  )
  {
  }

  public function calcularMedia(): float
  {
    return ($this->nota1 + $this->nota2) / 2;
  }

  public function exibirResultado(): string
  {
    $media = $this->calcularMedia();
    $resultado = ($media >= 7) ? "Aprovado com média $media" : "Reprovado";
    return $resultado;
  }
}

$boletim = new Boletim(8,10);
echo $boletim->exibirResultado();