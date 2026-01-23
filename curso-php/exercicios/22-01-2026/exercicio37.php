<!-- Crie a classe Usuario.
Crie a propriedade private int $idade. (Dessa vez não use readonly, pois vamos usar um método para definir o valor).
Crie o método setIdade(int $novaIdade): void.
A Lógica:
Se $novaIdade for menor que 0 OU maior que 120: lance a Exception throw new Exception("Idade inválida!");.
Caso contrário: $this->idade = $novaIdade;. -->

<?php

class Usuario {
  public function __construct(
    private int $idade
  )
  {
  }

  public function setIdade(int $novaIdade): void
  {
    if($novaIdade < 0 || $novaIdade > 120) {
      throw new Exception("Idade inválida!");
    }

    $this->idade = $novaIdade;
  }
}

try {
  $usuario = new Usuario(25);
  $usuario->setIdade(121);
} catch (Exception $e) {
  echo "Um problema ocorreu: " . $e->getMessage();
}

