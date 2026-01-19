<!-- Crie uma classe chamada Endereco com as propriedades rua e cidade.

Crie uma classe chamada Cliente.

No construtor do Cliente, peça o nome (string) e o endereco. Atenção: o tipo da variável $endereco deve ser a própria classe Endereco.

Crie um método no Cliente chamado exibirDados() que imprima: "O cliente [nome] mora na rua [rua] na cidade [cidade]". -->

<?php

class Endereco
{
  public function __construct(
    public $rua,
    public $cidade
  ) {}
}

class Cliente
{
  public function __construct(
    public readonly string $nome,
    public Endereco $endereco
  ) {
  }

  public function exibirDados(): string
  {
    return "O cliente {$this->nome} mora na rua {$this->endereco->rua} na cidade {$this->endereco->cidade}";
  }
}

$enderecoMatheus = new Endereco("Av. Brasil", "SBO");
$clienteMatheus = new Cliente("Matheus", $enderecoMatheus);
echo $clienteMatheus->exibirDados();

// echo $enderecoMatheus->rua . PHP_EOL;
// echo $enderecoMatheus->cidade . PHP_EOL;