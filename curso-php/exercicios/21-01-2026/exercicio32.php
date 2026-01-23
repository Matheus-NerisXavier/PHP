<!-- Imagine que você está desenvolvendo o sistema de um cinema. Teremos filmes e sessões.

1. A Classe Filme:

Deve ter as propriedades: public string $titulo e public int $duracao (em minutos).

Use o construtor para receber esses dados.

2. A Classe Sessao (Composição):

Propriedades: public Filme $filme, public string $horario e public float $precoIngresso.

No construtor, você deve receber o objeto do Filme, o horário e o preço.

3. O Método Principal:

Na classe Sessao, crie o método exibirTicket().

Este método não deve receber parâmetros. Ele deve usar apenas o $this para buscar os dados.

Ele deve retornar uma frase assim:

"CONFIRMADO: [Título do Filme] às [Horário]. Duração: [Duração] min. Valor: R$ [Preço]" -->

<?php 

class Filme
{
  public function __construct(
    public readonly string $titulo,
    public readonly int $duracao,
  )
  {
  }
}

class Sessao
{
  public function __construct(
    public readonly Filme $filme,
    public readonly float $precoIngresso, 
    public readonly string $horario
    )
  {
  }

  public function exibirTicket(): void
  {
    echo "CONFIRMADO: {$this->filme->titulo} às {$this->horario}. Duração: {$this->filme->duracao} min. Valor: R$ {$this->precoIngresso}";
  }
}

$filme = new Filme("O Poderoso Chefão", 120);
$sessao = new Sessao($filme, 20, 12);
$sessao->exibirTicket();