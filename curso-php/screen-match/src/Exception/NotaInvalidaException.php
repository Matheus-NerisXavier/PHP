<?php

namespace ScreenMatch\Exception;

use Throwable;

class NotaInvalidaException extends \InvalidArgumentException
{
  public function __construct()
  {
    parent::__construct('Nota precisa ser entre 0 e 10');
  }
}
