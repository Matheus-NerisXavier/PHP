<!-- Crie uma classe Teclado com a propriedade public string $tipo (ex: "Mecânico" ou "Membrana").
Crie uma classe Computador.
Com base na resposta, use Composição para colocar o objeto Teclado dentro do Computador.
No Computador, crie o método exibirConfiguracao() que mostre o modelo do PC e o tipo do teclado que ele usa. -->

<?php
class Teclado
{
  public function __construct(
    public readonly string $tipo
  ) {}
}

class Computador
{
  public function __construct(
    public readonly Teclado $teclado,
    public readonly string $modelo
  ) {}

  public function exibirConfiguracao(): void
  {
    echo "Computador modelo: {$this->modelo} com teclado {$this->teclado->tipo}";
  }
}

$teclado = new Teclado("Mecânico");
$computador = new Computador($teclado, "Nitro 6");
$computador->exibirConfiguracao();
