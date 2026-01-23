<!-- Crie uma classe Time com a propriedade public string $nomeTime.
Crie uma classe Jogador. No construtor dela, peça o $nomeJogador e um objeto do tipo Time.
No Jogador, crie o método apresentar().
O Desafio: O método não recebe parâmetros. Ele deve imprimir: "Eu sou o jogador [nomeJogador] e jogo no [nomeTime]". -->

<?php 

class Time {
  public function __construct(
    public readonly string $nomeTime
  )
  {
  }
}

class Jogador {
  public function __construct(
    public readonly string $nomeJogador,
    public readonly Time $time
  )
  {
  }

  public function apresentar(): string
  {
    return "Eu sou o jogador {$this->nomeJogador} e jogo no {$this->time->nomeTime}";
  }
}

$time = new Time("Santos");
$jogador = new Jogador("Neymar", $time);
echo $jogador->apresentar();