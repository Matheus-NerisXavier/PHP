<!-- 
Crie uma classe ContaBancaria com uma propriedade private float $saldo = 100.

Crie um método sacar(float $valor): void.

A Regra: Dentro do método, use um if. Se o $valor for maior que o $saldo, use o comando: throw new Exception("Saldo insuficiente para o saque!");

A Execução (O "pulo do gato"):

Fora da classe, tente sacar 150 reais.

Você deve colocar esse código dentro de um bloco try { ... }.

Logo abaixo, use o catch (Exception $e) { ... } para capturar o erro e exibir a mensagem: "Erro detectado: " . $e->getMessage(). -->

<?php 

class ContaBancaria {
  public function __construct(
    private float $saldo = 100
  )
  {
  }

  public function sacar(float $valor): void {
    if($valor > $this->saldo) {
      throw new Exception("Saldo insuficiente para o saque!");
    }
  }
}

try {
  $conta = new ContaBancaria();
  $conta->sacar(101);
} catch(Exception $e){
   echo "Erro detectado: " . $e->getMessage();
}