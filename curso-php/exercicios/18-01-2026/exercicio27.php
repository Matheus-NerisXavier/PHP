<!-- Crie uma classe pai Ave com a propriedade public string $nome.
Crie um método emitirSom() na classe Ave que apenas imprime "A ave está cantando".
Crie uma classe filha PapoGaio que herda de Ave.
Crie uma classe filha Pinguim que também herda de Ave.
Desafio: Na classe PapoGaio, sobrescreva o método emitirSom() para que ele imprima "O papagaio está repetindo o que você diz". -->

<?php

class Ave {
  public function __construct(
    public string $nome
  )
  {}

  public function emitirSom(): void {
     echo "A ave está cantando";
  }
}

class PapoGaio extends Ave {
  public function emitirSom(): void {
    echo "O papagaio está repetindo o que você diz";
  }
}

class Pinguim extends Ave {}

$ave = new Ave("Caburé");
$papagaio = new PapoGaio("Abelarda");
echo $ave->emitirSom() . PHP_EOL;
echo $papagaio->emitirSom() . PHP_EOL;