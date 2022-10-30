<?php

namespace Alura\Exceptions;
use Throwable;
class ErroEntradaNomeException extends \DomainException
{
    public function __construct()
    {
        $mensagem = "Nome ou sobranome inválido. Você deve digitar um Nome e um Sobrenome";
        parent::__construct($mensagem);
    }
}

?>